<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function googleredirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function signature()
    {
        // $user = Socialite::driver('google')->stateless()->user();
        // return $user->token;

        try {
            $user = Socialite::driver('google')->user();
            $explodeUsrName = explode(' ', $user->name);
            $finduser = User::where('google_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser, true); //existing user instance as the currently 
                return redirect('dashboard');
            } else {
                $newUser = User::create([
                    'f_name' => $explodeUsrName[0],
                    'l_name' => $explodeUsrName[1],
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456dummy')
                ]);
            }
            if ($newUser)
                return redirect('dashboard');
            else
                return redirect()->back();
            Auth::login($newUser, true);
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
            dd($e->getMessage());
        }
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else
            return redirect('/');
    }

    public function saveSignature(Request $request)
    {
        if (!empty($request->get('main_mem_img'))) {
            $user = User::where('id', '=', $request->get('main_mem_img'))->first();
            if (empty($user))
                abort(404);
        }
        if (!empty($request->file('file'))) {
            if (File::exists(public_path('signature/' . $user->file))) {
                File::delete(public_path('signature/' . $user->file));
            }
            $x = $request->input('dataX');
            $y = $request->input('dataY');
            $width = $request->input('dataWidth');
            $height = $request->input('dataHeight');
            $filename   = 'signature_' . $request->get('f_name') . '_' . $request->get('l_name') . time() . '.jpg';
            $folderPath = public_path('signature/');
            $path       = $folderPath . $filename;
            Image::make($request->file('file'))->crop(
                intval($height),
                intval($width),
                intval($x),
                intval($y)
            )->save($path);
        }
        $user->f_name = trim($request->get('f_name'));
        $user->l_name = trim($request->get('l_name'));
        $user->designation = trim($request->get('designation'));
        $user->skype = trim($request->get('skype'));
        $user->phone_ext = $request->get('phone_ext');
        $user->file = $filename;
        try {
            if ($user->save())
                return redirect('success');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Something went wrong please try again later!');
        }
    }

    public function success()
    {
        if (!empty(Auth::user()->id)) {
            $user = User::where('id', '=', Auth::user()->id)->first();
            return view('success', ['users' => $user]);
        } else {
            return redirect('/')->back()->withErrors('Invalid request parameters!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

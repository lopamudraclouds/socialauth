@extends('layouts.layout')
@section('title','Dashboard')
@section('content')
<div class="row" style="float:left">
    <table cellspacing="0" cellpadding="0" style="max-width:500px;width:100%;" border="0" width="500">
        <tr>
            <td align="center" style="border:none;">
                <table width="100%" cellspacing="0" cellpadding="0" style="" border="0">
                    <tr>
                        <td style="vertical-align: middle; width:117px; border:none;">
                            <table width="100%" cellspacing="0" cellpadding="0" style="">
                                <tr>
                                    <td align="left" style="border:none;"><img width="112" height="112" style="display: block; width:112px;height:112px;" alt="{{$users->f_name.' '. $users->l_name}}" src="{{asset('public/signature/'.$users->file)}}"></td>    
                                </tr>
                            </table>
                        </td>
                        <td style="padding:5px; vertical-align:middle;border-top:none; border-right:none; border-bottom:none; padding-right:0;padding-top: 0;padding-bottom: 0;">
                            <table width="100%" cellspacing="0" cellpadding="0" style="" border="0">
                                <tr>
                                    <td align="left" style="border:none; vertical-align:top; ">
                                        <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                            <tr>
                                                <td align="left" style="border:none; outline:none;" valign="top">
                                                    <table cellspacing="0" height="15" cellpadding="0" border="0" style="width: 100%; height:15px;">
                                                        <tr>
                                                            <td style="border:none;">
                                                                <span style="font-family:arial;font-weight:700;font-size:15px; color:#0091d0;outline: none; line-height:16px;">{{$users->f_name.' '. $users->l_name}}</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="13" align="left" style="font-family:arial;font-size:13px;font-style: italic;color:#505050;line-height: 13px;outline: none; border:none;" valign="top">
                                                    @if (!empty($users->designation))
                                                    {{$users->designation}}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="7" style="border:none;line-height: 0;font-size:0;"></td>
                                            </tr>
                                            <tr>
                                                <td align="top" height="70" style="border:0; outline:none;">
                                                    <table cellspacing="0" cellpadding="0" height="70" style="width: 100%; height:70px;border-spacing: 0;" border="0">
                                                        <tr>
                                                            <td height="15" align="left" width="25" style="text-decoration: none;outline: none;border:none;line-height:15px!important;" valign="middle">
                                                                @if (!empty($users->skype))
                                                                <img height="13" width="13" style="width:13px; height:13px;display:block;" alt="skype" src="{{url(asset('dist/images/skype_sm.png'))}}">
                                                                @endif
                                                            </td>
                                                            <td height="15" align="left" style="font-size: 13px;color:#505050;font-family:arial;text-decoration: none;outline: none;border:none; line-height:15px!important;" valign="top">@if (!empty($users->skype))<a style="text-decoration:none; text-decoration: none !important; color:#505050;display:inline-block;" href="skype:{{$users->skype}}?chat"><span style="text-decoration:none; text-decoration: none !important;display:inline-block;">{{$users->skype}}<span></a>@endif</td>
                                                        </tr>
                                                        <tr>
                                                            <td height="15" align="left" width="25" style="text-decoration: none;outline: none;border:none; line-height:15px;!important;" valign="middle">
                                                                @if (!empty($users->email))<a style="text-decoration:none; text-decoration: none !important; color:#505050;display:inline-block;" href="mailto:{{$users->email}}"><img height="13" width="13" style="width:13px; height:13px; display:block;" alt="email" src="{{url(asset('dist/images/mail_sm.png'))}}"></a>
                                                                @endif
                                                            </td>
                                                            <td height="15" align="left" style="font-size: 13px;color:#505050;font-family:arial;text-decoration: none; outline: none;border:none; line-height:15px!important;" valign="top">
                                                                @if (!empty($users->email)) <a style="text-decoration:none; text-decoration: none !important; color:#505050;display:inline-block;" target="_blank" href="mailto:{{$users->email}}"><span style="text-decoration:none; text-decoration: none !important;display:inline-block; ">{{$users->email}}</span></a>@endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            @if(!empty($users->phone_ext))
                                                            <td height="15" align="left" width="25" style="text-decoration: none;outline: none;border:none; line-height:15px !important;" valign="top">
                                                                <a style="text-decoration:none; text-decoration: none !important; color:#505050;display:inline-block; vertical-align: top;" href="tel:{{$users->phone_ext}}"><img height="13" width="13" style="width:13px; height:13px;display:block;" src="{{url(asset('dist/images/phone_sm.png'))}}" alt="phone"></a>
                                                            </td>
                                                            <td height="15" align="left" style="font-size: 13px;color:#505050;font-family:arial;text-decoration: none;outline: none;border:none; line-height:15px !important;" valign="top">
                                                                <a style="text-decoration:none; text-decoration: none !important; color:#505050;display:inline-block; vertical-align: top;" href="tel:{{$users->phone_ext}}"><span style="text-decoration:none; text-decoration: none !important; display:inline-block;">
                                                                        {{$users->phone_ext}}

                                                            </td>
                                                            @endif</span></a>
                                                        </tr>
                                                        <tr>
                                                            <td height="15" align="left" width="25" style="text-decoration: none;outline: none;border:none; line-height:15px !important;" valign="top">
                                                                <a style="text-decoration:none; text-decoration: none !important; color:#505050;display:inline-block; vertical-align: top;" href="https://www.codeclouds.com/" target="_blank"><img height="13" width="13" style="width:13px; height:13px; display:block;" alt="web" src="{{url(asset('dist/images/web_sm.png'))}}"></a>
                                                            </td>
                                                            <td height="15" align="left" style="font-size: 13px;color:#505050;font-family:arial;text-decoration: none;outline: none;border:none; line-height:15px !important;" valign="top">
                                                                <a style="text-decoration:none; text-decoration: none !important; color:#505050; display:inline-block; vertical-align: top;" href="https://www.codeclouds.com/" target="_blank"><span style="text-decoration:none; text-decoration: none!important; display:inline-block;">www.codeclouds.com</span></a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="6" style="border:none;line-height: 0;font-size:0;"></td>
        </tr>
        <tr>
            <td align="center" style="border:none;">
                <table width="100%" cellspacing="0" cellpadding="0" style="">
                    <tr>
                        <td align="left" valign="top" style="border:none; display:inline-block;font-size: 13px;font-family:arial;font-style:italic; color: #505050;">
                            {{ $users->footer_text}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{url(asset('dist/js/cropper.js'))}}"></script>
<script src="{{url(asset('dist/js/main.js'))}}"></script>
<script type="text/javascript">
    var xhr = null;
    var site_url = 'https://www.codeclouds.com/signature-tool/';
    var dummy_img = 'https://www.codeclouds.com/signature-tool/images/emp-img.jpg';

    $(document).off('blur', 'input');
    $(document).on('blur', 'input', function(e) {
        var curr_e = e.target.id;
        if (curr_e === 'f_name' || curr_e === 'l_name') {
            if ($("#f_name").val() !== '' || $("#l_name").val() !== '') {
                $("#dyn_first_last").html($("#f_name").val() + ' ' + $("#l_name").val());
            } else {
                $("#dyn_first_last").html('Your Name');

            }
        } else if (curr_e === 'designation' || curr_e === 'skype' || curr_e === 'email' || curr_e === 'phone' || curr_e === 'phone_ext') {
            var curr_val = $("#" + curr_e).val();
            if (curr_val === '' && curr_e !== 'phone_ext') {
                $("#dyn_" + curr_e).html('your ' + curr_e);
            } else {
                $("#dyn_" + curr_e).html(curr_val);
                if (curr_e === 'phone_ext') {
                    if (curr_val !== '') {
                        $(".d_phone_ext").show();
                    } else {
                        $(".d_phone_ext").hide();
                    }
                }
            }
        } else if (curr_e === 'footer_text') {

            var curr_val = $("#footer_text").val();
            if (curr_val === '') {
                $("#dyn_footer_text").html('');
            } else {
                $("#dyn_footer_text").html(curr_val);
            }

        }

    });

    function showMyImage(fileInput) {

        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var imageType = /image.*/;
            if (!file.type.match(imageType)) {
                continue;
            }
            var img = document.getElementById("image");
            img.file = file;

            var reader = new FileReader();
            reader.onload = (function(aImg) {
                return function(e) {
                    aImg.src = e.target.result;
                    $("#resize").trigger('click');
                };
            })(img);
            reader.readAsDataURL(file);
        }
    }

    function designation_r(val) {
        var modified_designation = 'your designation';
        if (val !== '') {
            modified_designation = val.replace("-", " ");
        }
        $("#dyn_designation").html(modified_designation);
    }
</script>
@endsection
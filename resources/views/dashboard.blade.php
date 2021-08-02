@extends('layouts.layout')
@section('title','Dashboard')
@section('content')
<div class="row cntbody" style="float:left">
    <div class="col-md-6 cntfirst">

        {{ Form::open(['method' => 'post','name'=>"signature_form" ,'id'=>"contact",'url' => url('save-signature'),'class'=>'signature-form','enctype'=>'multipart/form-data','style'=>"margin:8px !important;float:left"])}}
        <h3>Email Signature Builder | <a href="{{url('logout')}}" style="color:#777; text-decoration:none;">Logout</a></h3>
        <h4>Please Fill in the follow info</h4>
        {{ Form::token() }}
        {{ Form::hidden('main_mem_img',Auth::user()->id) }}
        <!-- <input type="hidden" name="main_mem_img" id="main_mem_img" value="" /> -->
        <fieldset id="error_message" style="display:none;">
        </fieldset>
        <fieldset>
            <select name="style" style="margin:5px;height:25px">
                <option value="codeclouds">CodeClouds</option>
            </select>
        </fieldset>
        <fieldset>
            <!-- <input placeholder="First Name (required)" type="text" tabindex="1" required autofocus id="f_name" value="" name="f_name"> -->
            {{ Form::text('f_name',Auth::user()->f_name,['id'=>'f_name','autocomplete'=>'off','placeholder'=> 'First Name (required)']) }}
            <input type="hidden" id="dataX" name="dataX">
            <input type="hidden" id="dataY" name="dataY">
            <input type="hidden" id="dataWidth" name="dataWidth">
            <input type="hidden" id="dataHeight" name="dataHeight">
        </fieldset>
        <fieldset>
            {{ Form::text('l_name',Auth::user()->l_name,['id'=>'l_name','autocomplete'=>'off','placeholder'=> 'Last Name (required)']) }}
            <!-- <input placeholder="Last Name" type="text" tabindex="2" id="l_name" value="" name="l_name"> -->
        </fieldset>
        <fieldset>
            {{ Form::text('designation','',['id'=>'designation','autocomplete'=>'off','placeholder'=> 'Designation (required)']) }}
            <!-- <input placeholder="Designation" type="text" tabindex="3" id="designation" name="designation"> -->
        </fieldset>
        <fieldset>
            {{ Form::text('skype','',['id'=>'skype','autocomplete'=>'off','placeholder'=> 'Skype (required)']) }}
            <!-- <input placeholder="Skype" type="text" tabindex="4" id="skype" name="skype"> -->
        </fieldset>
        <fieldset>
            {{ Form::email('email',Auth::user()->email,['id'=>'email','readonly'=>'true']) }}
            <!-- <input placeholder="Email Address (required)" type="email" tabindex="5" id="email" value="" required name="email"> -->
        </fieldset>
        <fieldset>
            {{ Form::text('phone','+1 (833) 3 CLOUDS',['id'=>'phone','class'=>'half','style'=>'margin-right: 20px;']) }}
            {{ Form::text('phone_ext','',['id'=>'phone_ext','class'=>'half','placeholder'=>'Phone Extension',]) }}

        </fieldset>
        <fieldset>
            <input placeholder="Footer Text" type="text" tabindex="8" id="footer_text" value="We are proudly associated with Nasscom and CII, and ISO certified!" name="footer_text" readonly="readonly">
        </fieldset>
        <fieldset>
            <label><b>Head shot</b></label> <br>
            <input placeholder="Upload headshot" type="file" name="file" tabindex="8" id="inputImage" onchange="showMyImage(this)" accept="image/*" required>
            <?php if (!empty($_GET['msg'])) { ?> <br /> <span id="error-message" class="error"><?php echo $_GET['msg']; ?></span> <?php } ?>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
        {{ Form::close() }}
    </div>
    <!-- </div> -->

    <!-- <div class="container" id="mem_image_class" style="float: right;max-width:600px !important;"> -->
    <!-- <div class="row" id="mem_image_class" style="float: right;max-width:600px !important;"> -->
    <div class="col-md-6 cntsecond">
        <div style="background: #ffffff;padding: 25px;margin:8px !important; box-shadow: 0 0 20px 0 rgba(0,0,0,0.2), 0 5px 5px 0 rgba(0,0,0,0.24);">

            <table cellspacing="0" cellpadding="0" style="max-width:500px;width:100%;">
                <tr>
                    <td align="center" style="border:none;">
                        <table width="100%" cellspacing="0" cellpadding="0" style="">
                            <tr>
                                <td style="vertical-align: top; width:117px;border:none;">
                                    <table width="100%" cellspacing="0" cellpadding="0" style="">
                                        <tr>
                                            <td align="left" style="border:none;">
                                                <div class="docs-preview">
                                                    <div class="img-preview preview-lg" style="display: block; width:112px;height:112px; background:#2c5994;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>

                                <td style="padding:7px; vertical-align: top;border-top:none; border-right:none; border-bottom:none; padding-right:0;padding-top: 0;padding-bottom: 0;">

                                    <table width="100%" cellspacing="0" cellpadding="0" style="">
                                        <tr>
                                            <td align="left" style="border:none;">
                                                <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                                    <tr>
                                                        <td style="border:none;">
                                                            <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                                                <tr>
                                                                    <td style="border:none;">
                                                                        <span style="font-family:arial;font-weight:700;font-size:15px; color:#0091d0;outline: none;" id="dyn_first_last">
                                                                            {{Auth::user()->f_name.' ' .Auth::user()->l_name }}
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="font-family:arial;font-size:13px;font-style: italic;color:#505050;line-height: 18px;outline: none; border:none;" valign="middle" id="dyn_designation">
                                                            Designation
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td height="3" style="border:none;"></td>
                                                    </tr>

                                                    <tr>

                                                        <td height="18" style="display:inline-block;font-size: 12px;color:#3fc5eb;font-family:arial;text-decoration: none;outline: none;border:none;" valign="middle">
                                                            <a href="skype:?chat" style="text-decoration: none; display: inline-block;"><img height="15" width="15" style="width:15px; height:15px; padding-top: 2px;" alt="" src="{{url(asset('dist/images/skype_sm.png'))}}">
                                                                <span style="display:inline-block;padding-top:2px; padding-left: 5px; font-size:13px; vertical-align: top;color: #505050;" id="dyn_skype">Skype.codeclouds</span>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td height="18" style="display: inline-block;font-size: 12px;color:#3fc5eb;font-family:arial;text-decoration: none;outline: none;border:none;" valign="middle">
                                                            <a href="mailto:#" style="text-decoration:none;display: inline-block;">
                                                                <img height="15" width="15" style="width:15px; height:15px; padding-top:1px;" alt="" src="{{url(asset('dist/images/mail_sm.png'))}}">
                                                                <span style="display:inline-block;padding-top:0px; padding-left: 5px; font-size:13px; vertical-align: top;color: #505050;" id="dyn_email">{{Auth::user()->email}}</span>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="18" style="display: inline-block;font-size: 12px;color:#3fc5eb;font-family:arial;text-decoration: none;outline: none;border:none;" valign="middle">
                                                            <a href="#" style="text-decoration:none; display: inline-block;">
                                                                <img height="15" width="15" style="width:15px; height:15px; padding-top:1px;" alt="" src="{{url(asset('dist/images/phone_sm.png'))}}">
                                                                <span style="display:inline-block;padding-top:0px; padding-left: 5px; font-size:13px; vertical-align: top;color: #505050;" id="dyn_phone">+1 (833) 3 CLOUDS </span>&nbsp;<span class="d_phone_ext" style="display:inline-block;padding-top:0px; padding-left: 5px; font-size:13px; vertical-align: top;color: #505050; display:none;">(</span><span id="dyn_phone_ext" style="color: #505050;"></span><span class="d_phone_ext" style="display:none;color: #505050;">)</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="18" style="display: inline-block;font-size: 12px;color:#3fc5eb;font-family:arial;text-decoration: none;outline: none;border:none;" valign="middle">
                                                            <a href="https://www.codeclouds.com" target="_blank" style="text-decoration:none; display: inline-block;">
                                                                <img height="15" width="15" style="width:15px; height:15px; padding-top: 1px;" alt="" src="{{url(asset('dist/images/web_sm.png'))}}">
                                                                <span style="display:inline-block;padding-top:0px; padding-left: 5px; font-size:13px; vertical-align: top;color: #505050;">www.codeclouds.com </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="2" style="border:none;"></td>
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
                    <td height="5" style="border:none;"></td>
                </tr>

                <tr>
                    <td align="center" style="border:none;">
                        <table width="100%" cellspacing="0" cellpadding="0" style="">
                            <tr>
                                <td align="left" style="border:none; display: inline-block;font-size: 13px;font-family:arial;font-style:italic; color: #505050;" id="dyn_footer_text">
                                    We are proudly associated with Nasscom and CII, and ISO certified!
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>


        <div style="background: #ffffff;padding: 25px;margin:8px !important; box-shadow: 0 0 20px 0 rgba(0,0,0,0.2), 0 5px 5px 0 rgba(0,0,0,0.24);">
            <p><span style="font-family:arial;font-weight:700;font-size:15px; color:#0091d0;outline: none;">Crop Image</span> <a href="#" style="display:none;" id="resize">Resize</a></p>

            <div class="row">
                <div class="col-md-12">
                    <div class="img-container img-responsive" style="text-align:center; background: #014d71;">
                        <img id="image" src="{{url(asset('dist/images/emp-img.jpg'))}}" class="img-responsive" style="max-width:100%; display:block; height:auto;margin:0px auto;" alt="Picture">
                    </div>
                    <!-- <h3>Data:</h3> -->
                </div>
            </div>
        </div>
    </div>
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
<!DOCTYPE html>
<html>
<head>
	<title>Birthday n Box</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="TemplatesJungle">
	<meta name="keywords" content="html,css,template,bootstrap">
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
		rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="<?= base_url('public/images/main-logo.jpg') ?>" type="image/x-icon">


	<style>
        .container {
            max-width: 100% !important;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url(<?= base_url('public/images/banner/login_background_img.jpg') ?>) center/cover
                no-repeat;
        }

        .form {
            position: absolute;
            max-width: 430px;
            width: 100%;
            padding: 30px;
            border-radius: 6px;
            background: #fff;
        }
        
        .form .field {
            position: relative;
            height: 50px;
            width: 100%;
            margin-top: 20px;
            border-radius: 6px;
        }
            
        .field input,
        .field button {
            height: 100%;
            width: 100%;
            border: none;
            font-size: 16px;
            font-weight: 400;
            border-radius: 6px;
        }
        
        .field input {
            outline: none;
            padding: 0 15px;
            border: 1px solid#CACACA;
        }
            
        .field button {
            color: #fff;
            background-color:  #616b37 !important;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        a{
            color: #616b37 !important;
        } 
        a:hover{
            color:#c2b709 !important;  
        }
        .title{
            color: #616b37 !important;
        }
        
        .otp{
            display:none;
        }
        ..otp-btn {
            display: none;
        }
        
        @media(max-width:768px){
            .submit{
                 margin-top:25px !important;
            }
           #otp-error{
              padding-bottom:20px !important;
           }
        }
         .submit{
                 margin-top:20px ;
            }
        #otp-error{
              padding-bottom:70px ;
           }
    </style>
</head>

<body>
    <section class="container">
        <div class="form login">
            <h3 class="text-center title">Login</h3>
            <?php $validation = \Config\Services::validation(); ?>
            <h5>
                <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger" style="text-align:center;"><?= session()->getFlashdata('error') ?></div>
                <?php elseif (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success" style="text-align:center;"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
            </h5>
            <form id="otpForm" enctype="multipart/form-data">
                <div class="field input-field">
                    <input type="text" placeholder="Enter Mobile Number" class="phone phone_no_otp_send" id="phone" name="phone" required/>
                </div>
                <div class="field input-field otp otp_field" style="display: none;">
                    <label>OTP Sent Successfully</label>
                    <input type="text" placeholder="OTP" name="otp" id="user_otp"/>
                    <label id="otp-error" style="display:none; position: relative; left: 25%;">Enter Valid OTP</label>
                </div>
                <div class="field button-field otp-btn">
                    <button type="button" id="get_otp" class="btn-user btn-block">GET OTP</button>
                </div>
                <div class="field button-field" id="submit_otp" style="display: none; margin-top: -35px;">
                    <button type="submit" class="submit" onclick="verify_otp()">Submit</button>
                </div>
            </form>
            <!--<div class="form-link mt-4 text-center"><a href="< ?= base_url('mobile_login');?>" class="forgot-pass">Login With OTP</a></div>-->
            <!--<div class="form-link text-center"><a href="< ?= base_url('forget_password');?>" class="forgot-pass">Forgot password?</a></div>-->
            <div class="form-link text-center mt-4"><span>Don't have an account? <a href="<?= base_url('user_register');?>" class="link signup-link">Signup</a></span></div>
        </div>
    </section>
    
    <script src="public/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/script.js"></script>
    <script>
    $(document).ready(function() {
        $("#submit_otp").hide();
        
        $('#get_otp').click(function(e) {
            e.preventDefault();
            var phone = $('#phone').val();
            var getOtpButton = $('#get_otp');
            // loader...
            getOtpButton.html('<i class="fa fa-refresh fa-spin fa-fw"></i>&nbsp;Loading...');

            $.ajax({
                url: 'send_otp',
                type: 'POST',
                data: { phone: phone },
                success: function(response) {
                    $(".otp_field").show();
                    getOtpButton.hide();
                    $("#submit_otp").show();
                },
                error: function(xhr, status, error) {
                    alert('Error: ' + xhr.responseText);
                    getOtpButton.html('GET OTP');
                }
            });
        });

        $('#otpForm').submit(function(e) {
            e.preventDefault();
        });
    });

    function verify_otp() {
        var phone = $('#phone').val();
        var user_otp = $('#user_otp').val();
        var submitButton = $('#submit_otp button[type="submit"]');
        var otpErrorLabel = $('#otp-error');
        // loader...
        submitButton.html('<i class="fa fa-refresh fa-spin fa-fw"></i>&nbsp;Loading...');

        $.post("verify_otp", {
            phone: phone,
            user_otp: user_otp
        }, 
        function(response) {
            if (response.status === 'success') {
                window.location = response.redirect_url;
                // window.location.href = "< ?=base_url('/')?>";
            } else if(response.status === 'failed'){
                otpErrorLabel.text('Invalid OTP.Please try again.').css('color', 'red').show();
                submitButton.html('Submit');
                setTimeout(function() {
                    otpErrorLabel.hide();
                }, 10000);
                // window.location = response.redirect_url;
            }
            else {
                otpErrorLabel.text(response.message || 'Invalid OTP').css('color', 'red').show();
                submitButton.html('Submit');
                setTimeout(function() {
                    otpErrorLabel.hide();
                }, 10000); // Hide the error message after 10 seconds
            }
            
            
        }, 'json').fail(function(xhr) {
            otpErrorLabel.text('Invalid OTP. Try Again.').css({'color': 'red','text-align': 'center'}).show();

            submitButton.html('Submit');
            setTimeout(function() {
                otpErrorLabel.hide();
            }, 10000); // Hide the error message after 10 seconds
        });
    }
</script>
</body>
</html>
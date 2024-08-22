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
	<!--<meta name="keywords" content="html,css,template,bootstrap">-->
	<!--<meta name="description" content="Bootstrap 5 HTML Cake Shop Template">-->
	<!--<link rel="stylesheet" type="text/css" href="fonts/icomoon/icomoon.css">-->
	<link rel="stylesheet" type="text/css" href="public/css/vendor.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
		rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="icon" href="<?= base_url('public/images/main-logo.jpg') ?>" type="image/x-icon">

	<style>
        .container {
            max-width: 100% !important;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url(<?= base_url('public/images/banner/login_background_img.jpg') ?>) center/cover no-repeat;
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
            background-color: #616b37 !important;
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
            color:  #616b37 !important;
        }
        
        .response {
    background-color: #616B37;
    padding: 15px;
    border-radius: 3px;
    color: white;
    font-size: 20px;
    width: 100%;
    margin-bottom: 20px;
    display: none; /* Hide by default */
}

.response.show {
    display: block; /* Show when the 'show' class is added */
}

    </style>
</head>

<body>
    <section class="container">
        <div class="form login">
            <h3 class="text-center title">Register</h3>
            <?php $validation = \Config\Services::validation(); ?>
            <form id="send_form" method="POST" enctype="multipart/form-data">
                <div class="field input-field">
                    <input type="text" placeholder="First Name" class="first_name" id="first_name" name="first_name" maxlength="40" required>
                </div>
            
                <div class="field input-field">
                    <input type="text" placeholder="Last Name" class="last_name" id="second_name" name="last_name" maxlength="40" required>
                </div>
            
                <div class="field input-field">
                    <input type="tel" placeholder="Mobile Number" class="contact" id="contact" name="contact" oninput="already_Existed()" maxlength="10" minlength="10" required>
                    
                </div>
                <div style="margin-top: 10px;">
                    <span id="contact_exists_message" style="color: red;"></span>
                </div>
            
                <div class="field input-field">
                    <input type="email" placeholder="Email" class="email" id="email" name="email" oninput="already_Existed()" aria-describedby="emailHelp" required/>
                </div>
                
                <div style="margin-top: 10px;">
                    <span id="email_exists_message" style="color: red;"></span>
                </div>
            
                <div class="field input-field">
                    <input type="password" placeholder="Password" class="password" id="password" name="password" required/>
                </div>
               <div style="margin-top: 10px;">
                    <div id="responseContainer" class="response"></div>
                </div>

                <div class="field button-field">
                    <button type="submit" id="submitted_data">Sign Up</button>
                </div>
            </form>

                
            <div class="mt-4 text-center">
                <span>Already Registerd? <a href="<?= base_url('user_login');?>">Sign In</a></span>
            </div>
        </div>
    </section>
    
  <script src="public/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/script.js"></script>
    
<script>
$(document).ready(function() {
    // Function to check if email or contact already exists
    function already_Existed() {
        var email = $("#email").val();
        var contact = $("#contact").val();

        $.ajax({
            type: 'POST',
            url: '<?= base_url('check_already_exist'); ?>',
            data: {
                email: email,
                contact: contact
            },
            success: function(response) {
                if (response.variable === 'email') {
                    $('#email_exists_message').text(response.msg);
                } else if (response.variable === 'contact') {
                    $('#contact_exists_message').text(response.msg);
                } else {
                    $('#email_exists_message').text('');
                    $('#contact_exists_message').text('');
                }
                $('#submitted_data').prop('disabled');
            },
            error: function(xhr, status, error) {
                console.error('Error: Unable to communicate with server.');
            }
        });
    }

    // Clear the error message and recheck when the user types
    $('#email').on('input', function() {
        $('#email_exists_message').text('');
        already_Existed();
    });

    $('#contact').on('input', function() {
        $('#contact_exists_message').text('');
        already_Existed();
    });

     $('#send_form').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        var form = $(this);
        var data = form.serialize(); // Serialize form data

        // Change button text to 'Please wait...'
        $('#submitted_data').text('Please wait...').prop('disabled', true);

        $.ajax({
            type: 'POST',
            url: '<?= base_url('user_store') ?>',
            data: data,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#responseContainer').html(response.message).addClass('show'); 
                    setTimeout(function() {
                        window.location.href = '<?= base_url('user_login');?>';
                    }, 6000); 
                } else {
                    $('#responseContainer').html(response.message).addClass('show');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error sending data:', error);
            },
            complete: function() {
                $('#submitted_data').text('Sign Up').prop('disabled', false);
            }
        });
    });
});

    
</script>
</body>
</html>
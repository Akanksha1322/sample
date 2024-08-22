<!DOCTYPE html>
<html>
<head>
	<title>cake</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="TemplatesJungle">
	<meta name="keywords" content="html,css,template,bootstrap">
	<meta name="description" content="Bootstrap 5 HTML Cake Shop Template">
	<link rel="stylesheet" type="text/css" href="fonts/icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css" href="public/css/vendor.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
		rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<style>
        .container {
            max-width: 100% !important;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQapHZj7q2DZY0H5lMJYJec5MdUUE4G86aW_g&usqp=CAU") center/cover
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
            background-color: #0171d3;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        a{
            color:blue;
        }    
    </style>
</head>

<body>
     <section class="container">
            <div class="form login">
                     <h3 class="text-center">Login</h3>
                    <?php $validation = \Config\Services::validation(); ?>
                    <h5><?php if (session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-danger" style="text-align:center;"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif; ?>
                    </h5>
                    <form action="<?= base_url('cart_loginstore'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="email" id="email" name="email" required/>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password" id="password" name="password" required/>
                            <i class="bx bx-hide eye-icon"></i>
                        </div>

                        <div class="field button-field">
                            <button type="submit">Login</button>
                        </div>
                    </form>
                    
                    <div class="form-link mt-4 text-center">
                        <a href="<?= base_url('forget_password');?>" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="form-link text-center">
                        <span>Don't have an account? <a href="<?= base_url('user_register');?>" class="link signup-link">Signup</a></span>
                    </div>
               
            </div>
        </section>
    
    <script src="public/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/script.js"></script>
</body>
</html>
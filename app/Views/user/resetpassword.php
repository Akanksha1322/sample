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
	<link rel="stylesheet" type="text/css" href="fonts/icomoon/icomoon.css">
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
            width: 92%;
            margin-top: 20px;
            border-radius: 6px;
        }
            
        .field input,
        .field button {
            height: 100%;
            width: 109%;
            border: none;
            font-size: 16px;
            font-weight: 400;
            border-radius: 6px;
        }
        
        .field input {
            width: 100%;
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
            <h2 class="text-center" style="text-align:center">Change Password</h2>
            <form action="<?= base_url('updateresetpassword'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="userid" value="<?= $userid ?>">
                <div class="field input-field">
                    <input type="password" placeholder="New Password" class="password"  id="password" name="password" required/>
                </div>
                <div class="field input-field">
                    <input type="password" placeholder="Confirm Password" class="password"  id="confpassword" name="confpassword" required/>
                </div>
                <div class="field button-field"><button type="submit" style="background-color:#616b37">Update</button></div>
            </form>
        </div>
    </section>
    
    <script src="public/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/script.js"></script>
</body>
</html>
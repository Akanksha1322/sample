<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Birthday n Box</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">-->
    <!--<link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">-->
    <link rel="shortcut icon" href="<?= base_url('public/images/main-logo.jpg') ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/admin/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="public/admin/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        .forgot-heading {
            color: #333; 
            font-size: 24px; 
            text-align: center; 
            margin-bottom: 20px; 
        }
    </style>
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                
                <div class="login-form">
                    <h3 class="text-center forgot-heading"style="padding-bottom: 11px;">Forgot password</h3>
                    <h5><?php if (session()->getFlashdata('msg')) : ?>
                        <div class="alert alert-danger" style="text-align:center;"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif; ?>
                    </h5>
                    <form action="<?= base_url('password-reset-link'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                        </div>
                        <button type="submit" class="btn btn-flat m-b-15" style="color: white; background-color: #616b37;">Submit</button>
                    </form>
                    <div class="mt-4 text-center">
                        <span>Already Registerd ? <a href="<?= base_url('admin');?>">SignIn</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="public/admin/assets/js/main.js"></script>

</body>
</html>
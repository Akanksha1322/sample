<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Birthday n Box</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">-->
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

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <style>
        .login-heading {
            color: #333; /* Text color */
            font-size: 24px; /* Font size */
            text-align: center; /* Center text */
            margin-bottom: 20px; /* Bottom margin */
        }
        .login-content {
    max-width: 450px !important;
    margin: 8vh auto;
}
        /*.container {*/
            /*max-width: 100% !important;*/
            /*height: 100vh;*/
            /*display: flex;*/
            /*align-items: center;*/
            /*justify-content: center;*/
        /*    background: url(<?= base_url('public/images/banner/login_background_img.jpg') ?>) center/cover*/
        /*        no-repeat;*/
        /*}*/
    </style>
</head>
<body style="background: url(<?= base_url('public/images/banner/login_background_img.jpg') ?>) center/cover
                no-repeat;">
    
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="<?= base_url('admin-dashboard'); ?>">
                        <img class="align-content" src="public/admin/assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                     <h3 class="text-center login-heading"style="padding-bottom: 11px;">Login</h3>
                    <?php $validation = \Config\Services::validation(); ?>
                    <h5><?php if (session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif; ?>
                    </h5>
                    <form action="<?= base_url('admin_login_action'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                            <?php if($validation->getError('email')) {?>
                                <div class='alert alert-danger mt-2'><?=  $error = $validation->getError('email'); ?></div>
                            <?php }?>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                            <?php if($validation->getError('password')) {?>
                              <div class='alert alert-danger mt-2'><?=  $error = $validation->getError('password'); ?></div>
                            <?php }?>
                        </div>
                        <!--<div class="checkbox text-center">-->
                            <!--<label><input type="checkbox"> Remember Me</label>-->
                            <!--<label class=""><a href="< ?= base_url('admin-forgetpass'); ?>">Forgotten Password?</a></label>-->
                        <!--</div>-->
                           <button type="submit" class="btn  btn-flat m-b-30 m-t-30" style="
                                color: white;
                                background-color: #616b37;
                            ">Sign in</button>                  
                            <!--<div class="register-link m-t-15 text-center">-->
                            <!--    <p>Don't have account ? <a href="< ?= base_url('admin-register'); ?>"> Sign Up</a></p>-->
                            <!--</div>-->
                    </form>
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

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Birthday n Box</title>
    <meta name="description" content="Birthday n Box">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="<?= base_url('public/images/main-logo.jpg') ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/cs-skin-elastic.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/lib/datatable/dataTables.bootstrap.min.css') ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- ckeditor link -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.0/dist/css/tom-select.css" rel="stylesheet">
    <!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

   <style>
        #weatherWidget .currentDesc {
            color: #ffffff!important;
        }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }
        .dropdown-menu {
            position: absolute;
            z-index: 1000; /* Ensure the dropdown has a higher z-index */
        }

        .sub_active{
            color: #83D4FA !important;
        }

        @media (max-width: 768px) {
            #menuToggle {
                display: block !important;
            }
        }
        
        @media (min-width: 769px) {
            #menuToggle {
                display: none !important;
            }
        }

    </style>
</head>
<body>
    <!-- Left Panel -->
    <?php
    $current_url = $_SERVER['REQUEST_URI'];
    $explode_word = explode ("/",$current_url);
    $second_word = $explode_word[2];
    ?>

    <?php 
        $cat_list = $cat_add = "";
        $prod_list = $prod_add = $prod_flvadd = "";
        $flv_list = $flv_add = "";
        $customers = "";
        $slider_list = $slider_add = "";
        if ($second_word == 'admin-dashboard') {
            $dashboard_activ_app = 'active';
        } else {
            $dashboard_activ_app = "";
        }
        if ($second_word == 'admin-categoryproduct' || $second_word == 'admin-category') {
            $category_menu_active = 'active show';
        } else {
            $category_menu_active = "";
        }

        if ($second_word == 'admin-categoryproduct') {
            $category_product_active = 'active show';
            $cat_list = "sub_active";
        } else {
            $category_product_active = "";
        }
        if ($second_word == 'admin-category') {
            $category_active = 'active show';
            $cat_add = "sub_active";
        } else {
            $category_active = "";
        }
        if ($second_word == 'admin-product' || $second_word == 'admin-addproduct' || $second_word == 'admin-addflowervariant') {
            $product_menu_active = 'active show';
        } else {
            $product_menu_active = "";
        }
        if($second_word == 'admin-product') {
            $product_active_app = 'active show';
            $prod_list = "sub_active";
        }else {
            $product_active_app = "";
        }
        if ($second_word == 'admin-addproduct') {
            $product_active = 'active show';
            $prod_add = "sub_active";
        } else {
            $product_active = "";
        }
        if ($second_word == 'admin-addflowervariant') {
            $product_flv_active = 'active show';
            $prod_flvadd = "sub_active";
        } else {
            $product_flv_active = "";
        }
        
        if ($second_word == 'admin-flavourlist' || $second_word == 'admin-addflv') {
            $flv_menu_active = 'active show';
        } else {
            $flv_menu_active = "";
        }
        if($second_word == 'admin-flavourlist') {
            $flavourActive = 'active show';
            $flv_list = "sub_active";
        }else {
            $flavourActive = "";
        }
        if($second_word == 'admin-addflv') {
            $flavourAddActive = 'active show';
            $flv_add = "sub_active";
        }else {
            $flavourAddActive = "";
        }
        if($second_word == 'admin-order') {
            $orderActive = 'active';
        }else {
            $orderActive = "";
        }
        if($second_word == 'admin-customer') {
            $customerActive = 'active show';
            $customers = "sub_active";
        }else {
            $customerActive = "";
        }
        if ($second_word == 'admin-sliderlist' || $second_word == 'admin-slider') {
            $slider_menu_active = 'active show';
        } else {
            $slider_menu_active = "";
        }
        if($second_word == 'admin-sliderlist') {
            $sliderActive = 'active show';
            $slider_list = "sub_active";
        }else {
            $sliderActive = "";
        }
        if($second_word == 'admin-slider') {
            $slideraddActive = 'active show';
            $slider_add = "sub_active";
        }else {
            $slideraddActive = "";
        }
        if($second_word == 'admin-contactlist') {
            $contactActive = 'active';
        }else {
            $contactActive = "";
        }
        if($second_word == 'admin-aboutlist') {
            $aboutActive = 'active';
        }else {
            $aboutActive = "";
        }
    ?>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?= $dashboard_activ_app ?>">
                        <a href="<?= base_url('admin-dashboard'); ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard</a>
                    </li>
                    <li class="menu-title">Backend</li>
                    
                    <!-- Category Menu -->
                    <li class="menu-item-has-children dropdown <?= $category_menu_active ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded=""> 
                            <i class="menu-icon fa fa-list"></i>Category
                        </a>
                        <ul class="sub-menu children dropdown-menu <?= $category_menu_active ?>">
                            <li class="<?= $category_product_active ?>">
                                <a class="<?= $cat_list ?>" href="<?= base_url('admin-categoryproduct'); ?>">Category List</a>
                            </li>
                            <li class="<?= $category_active ?>">
                                <a class="<?= $cat_add ?>" href="<?= base_url('admin-category'); ?>">Add Category</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Product Menu -->
                    <li class="menu-item-has-children dropdown <?= $product_menu_active ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                            <i class="menu-icon fa fa-product-hunt"></i>Product
                        </a>
                        <ul class="sub-menu children dropdown-menu <?= $product_menu_active ?>">
                            <li class="<?= $product_active_app ?>">
                                <a class="<?= $prod_list ?>" href="<?= base_url('admin-product/1'); ?>">Product List</a>
                            </li>
                            <li class="<?= $product_active ?>">
                                <a class="<?= $prod_add ?>" href="<?= base_url('admin-addproduct'); ?>">Add Product</a>
                            </li>
                            <!--<li class="< ?= $product_flv_active ?>">-->
                            <!--    <a class="< ?= $prod_flvadd ?>" href="< ?= base_url('admin-addflowervariant'); ?>">Add Flower Variant</a>-->
                            <!--</li>-->
                        </ul>
                    </li>
                    
                    <!--Flavour Menu -->
                    <li class="menu-item-has-children dropdown <?= $flv_menu_active ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded=""> 
                            <i class="menu-icon fa fa-apple"></i>Flavour
                        </a>
                        <ul class="sub-menu children dropdown-menu <?= $flv_menu_active?>">
                            <li class="<?= $flavourActive ?>">
                                <a class="<?= $flv_list ?>" href="<?= base_url('admin-flavourlist'); ?>">Flavour List</a>
                            </li>
                            <li class="<?= $flavourAddActive?>">
                                <a class="<?= $flv_add ?>" href="<?= base_url('admin-addflv'); ?>">Add Flavour</a>
                            </li>
                        </ul>
                    </li>

                    <!--Order Menu -->
                    <li class="<?= $orderActive ?>">
                        <a href="<?= base_url('admin-order/1'); ?>"> <i class="menu-icon ti-shopping-cart"></i>Orders</a>
                    </li>

                    <!--Customer Menu -->
                    <li class="menu-item-has-children dropdown <?= $customerActive ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded=""> 
                            <i class="menu-icon fa fa-user"></i>Customers
                        </a>
                        <ul class="sub-menu children dropdown-menu <?= $customerActive ?>">
                            <li class="<?= $customerActive ?>">
                                <a class="<?= $customers ?>" href="<?= base_url('admin-customer'); ?>">Customers</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-title">Frontend</li>
                    
                    <!-- Slider Menu -->
                    <li class="menu-item-has-children dropdown <?= $slider_menu_active ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="< ?= ($sliderActive == 'Slider') ? 'true' : 'false' ?>"> 
                            <i class="menu-icon fa fa-sliders"></i>Slider
                        </a>
                        <ul class="sub-menu children dropdown-menu <?= $slider_menu_active ?>">
                            <li class="<?= $sliderActive ?>">
                                <a class="<?= $slider_list ?>" href="<?= base_url('admin-sliderlist'); ?>">Slider List</a>
                            </li>
                            <li class="<?= $slideraddActive ?>">
                                <a class="<?= $slider_add ?>" href="<?= base_url('admin-slider'); ?>">Add Slider</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Contact Us Menu -->
                    <li class="<?= $contactActive ?>">
                        <a href="<?= base_url('admin-contactlist'); ?>"> <i class="menu-icon fa fa-phone"></i>Contact Us</a>
                    </li> 

                    <!-- About Us Menu -->
                    <li class="<?= $aboutActive ?>">
                        <a href="<?= base_url('admin-aboutlist'); ?>"> <i class="menu-icon fa fa-info"></i>About Us</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
<!-- NILESH 24/5/2024 -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="<?= base_url('public/images/main-logo.jpg') ?>" alt="Logo" style="width: 40%;height: 40px;"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu py-2">
                    <div class="header-left"></div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= base_url('public/admin/images/admin.jpg') ?>" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?= base_url('admin-profile'); ?>"><i class="fa fa- user"></i>My Profile</a>
                            <!--<a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>-->
                            <a class="nav-link" href="<?= base_url('admin-logout'); ?>"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /#header -->
        
        <?= $this->renderSection('content') ?>

        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        Copyright &copy; 2024 Techflux Solutions
                    </div>
                    <!--<div class="col-sm-6 text-right">-->
                        <!--Designed by <a href="https://colorlib.com">Colorlib</a>-->
                    <!--</div>-->
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?= base_url('public/admin/assets/js/main.js') ?>"></script>
    
    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="<?= base_url('public/admin/assets/js/init/weather-init.js') ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="<?= base_url('public/admin/assets/js/init/fullcalendar-init.js') ?>"></script>
    
    <!-- Bootstrap5 For Modal Open -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function customChangeStatus(checked, id, table) {
            $('#errorAlertMessage').empty('');
            $('#alert_message').empty('');
            let value = checked ? 1 : 0;
            if (value == 1) {
                value = 0;
            } else {
                value = 1;
            }
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url('admin/changeStatus'); ?>' + '/' + table + '/' + id + '/' + value,
                success: function(msg) {
                    $('#errorAlertMessage').html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + msg.success + '</div>');
                },
                error: function(request, status, error) {
                    console.log(request, status, error);
                    $('#errorAlertMessage').html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + error + '</div>');
                }
            });
        }
    </script>
    
    <script>
        function changeStatus(element,count){
            const categoryElements = document.getElementsByClassName("category"+count);
            for (var i = 0; i < categoryElements.length; i++) {
                categoryElements[i].style.color = "purple";
                categoryElements[i].style.display = "block";
                categoryElements[i].classList.toggle;
            }
        }
    </script>
</body>
</html>

        
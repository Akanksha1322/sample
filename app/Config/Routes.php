<?php

    namespace Config;

    use CodeIgniter\Router\RouteCollection;
    use \App\Controllers\Admin;
    use \App\Controllers\Home;

    $routes = Services::routes();


    if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
        require SYSTEMPATH . 'Config/Routes.php';
    }
    /*
     * --------------------------------------------------------------------
     * Router Setup
     
     * --------------------------------------------------------------------
    */
        $routes->setDefaultNamespace('App\Controllers');
        $routes->setDefaultController('Home');
        $routes->setDefaultMethod('index');
        $routes->setTranslateURIDashes(false);
        $routes->set404Override();
    // The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
    // where controller filters or CSRF protection are bypassed.
    // If you don't want to define all routes, please use the Auto Routing (Improved).
    // Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
    // $routes->setAutoRoute(false);
    
    /*
     * --------------------------------------------------------------------
     * Route Definitions
     * --------------------------------------------------------------------
    */

    // Admin Dashboard 
    
    // $routes->get('/login', 'admin\Login::login', ['filter' => 'noauth']);
    $routes->get('admin', 'Admin::admin_login', ['filter' => 'noauth']);

    // $routes->get('admin', 'Admin::admin_login');
    $routes->post('/admin_login_action', 'Admin::admin_login_action');
    $routes->get('/admin-register', 'Admin::admin_register');
    $routes->post('admin-reg-store', 'Admin::admin_reg_store');
    $routes->get('/admin-forgetpass', 'Admin::admin_forget');
    $routes->post('password-reset-link', 'Admin::passwordresetlink');
    $routes->match(['get','post'], 'admin-otp', 'Admin::admin_otp');
    $routes->match(['get','post'],'admin-verify', 'Admin::admin_verify');
    $routes->match(['get', 'post'], 'admin-resetpassword/(:segment)', 'Admin::admin_resetpassword/$1');
    $routes->match(['get','post'],'admin-updateresetpassword', 'Admin::admin_updateresetpassword');
    $routes->match(['get','post'], '/admin-profile', 'Admin::admin_profile');
    $routes->post('updateadmin/(:num)', 'Admin::updateadmin/$1');
    $routes->match(['get', 'post'], 'admin-logout', 'Admin::admin_logout');
    $routes->get('admin/changeStatus/(:segment)/(:segment)/(:segment)', 'Admin::changeStatus/$1/$2/$3');
    $routes->get('admin/changebestseller/(:segment)/(:segment)/(:segment)', 'Admin::changebestseller/$1/$2/$3');
    
    $routes->group('', ['filter' => 'auth'], function ($routes) {
        $routes->match(['get','post'],'/admin-dashboard', 'Admin::admin_dashboard');
        // admin sidebar 
        // $routes->get('/admin-dashboard', 'Admin::admin_dashboard');
        $routes->get('/admin-addproduct', 'Admin::admin_addproduct');
        $routes->get('/admin-addflowervariant', 'Admin::admin_addflavourvariant');
        $routes->post('/admin-storeflowervariant', 'Admin::storeflowervariant');
        $routes->post('/admin-storeproduct', 'Admin::storeproduct');
        $routes->match(['get', 'post'], '/admin-product/(:num)', 'Admin::admin_productlist/$1');
        $routes->get('/admin-productlist/(:num)', 'Admin::admin_productlist/$1');
        $routes->get('admin-editproduct/(:num)', 'Admin::admin_editproduct/$1');
        $routes->post('admin-updateproduct/(:num)', 'Admin::admin_updateproduct/$1');
        $routes->post('admin/delete_image/(:num)', 'Admin::delete_prodimage/$1');
        $routes->get('/admin-deleteproduct/(:num)', 'Admin::admin_deleteproduct/$1');
        $routes->get('/admin-categoryproduct', 'Admin::admin_categorylist');
        $routes->get('/admin-categorylist/(:num)', 'Admin::admin_newcategorylist/$1');
        $routes->get('/admin-category', 'Admin::admin_category');
        $routes->post('/admin-storecategory', 'Admin::admin_storecategory');
        $routes->get('admin-editcategory/(:num)', 'Admin::admin_editcategory/$1');
        $routes->post('admin-updatecategory/(:num)', 'Admin::admin_updatecategory/$1');
        $routes->get('/admin-deletecategory/(:num)', 'Admin::admin_deletecategory/$1');
        $routes->get('/admin-addflv', 'Admin::admin_addflv');
        $routes->get('/admin-flavourlist', 'Admin::admin_flavourlist');
        $routes->get('/admin-flavourlist/(:num)', 'Admin::admin_newflavourlist/$1');
        $routes->get('/admin-productflavour', 'Admin::admin_productflavour');
        $routes->post('/admin-storeproflv', 'Admin::storeproflv');
        $routes->get('/admin-deleteflavour/(:num)', 'Admin::admin_deleteflavour/$1');
        $routes->get('/admin-productimage', 'Admin::productimage');
        $routes->post('/admin-storeproductimage', 'Admin::storeproductimage');
        $routes->get('/admin-productprice', 'Admin::productprice');
        $routes->post('/admin-storeproductprice', 'Admin::storeproductprice');
        $routes->get('/admin-dltprodprice/(:num)', 'Admin::dltprodprice/$1');
        $routes->get('/admin-edtprodprice/(:num)', 'Admin::edtprodprice/$1');
        $routes->post('admin-updateprodprice/(:num)', 'Admin::admin_updateprodprice/$1');
        $routes->match(['get','post'],'/admin-order/(:num)', 'Admin::admin_order/$1');
        $routes->match(['get', 'post'], '/order_list_reset', 'Admin::order_list_reset');
        $routes->match(['get', 'post'], '/product_list_reset', 'Admin::product_list_reset');
        
        $routes->match(['get','post'],'/mail_html', 'Admin::mail_html');
        $routes->match(['get','post'], 'order_view_details', 'Admin::order_view_details');
        
        $routes->get('/admin-orderlist/(:num)', 'Admin::admin_orderlist/$1');
        $routes->match(['get', 'post'], 'admin-orderinvoice/(:num)', 'Admin::orderinvoice/$1');
        $routes->match(['get', 'post'], 'admin-orderpdf/(:num)', 'Admin::htmlToPDF/$1');
        $routes->get('admin-vieworder/(:num)', 'Admin::admin_orderview/$1');
        $routes->match(['get','post'], 'orderaccept', 'Admin::orderaccept');
        $routes->get('/admin-orderacceptlist/(:num)', 'Admin::admin_orderacceptlist/$1');
        $routes->post('approveorder', 'Admin::approveorder');
        $routes->get('admin-deleteorder/(:num)', 'Admin::admin_deleteorder/$1');
        $routes->match(['get','post'], 'order/select_by_date','Admin::select_by_date');
        $routes->get('/admin-customer', 'Admin::admin_customer');
        $routes->get('/admin-customerlist/(:num)', 'Admin::admin_customerlist/$1');
        $routes->get('/admin-customerview/(:num)', 'Admin::admin_customerview/$1');
        $routes->get('/admin-reporting', 'Admin::admin_reporting');
        $routes->get('/admin-slider', 'Admin::admin_addslider');
        $routes->post('/admin-storeslider', 'Admin::storeslider');
        $routes->get('/admin-sliderlist', 'Admin::admin_sliderlist');
        $routes->get('/admin-slidernewlist/(:num)', 'Admin::admin_slidernewlist/$1');
        $routes->get('admin-editslider/(:num)', 'Admin::admin_editslider/$1');
        $routes->post('admin-updateslider/(:num)', 'Admin::admin_updateslider/$1');
        $routes->get('/admin-deleteslider/(:num)', 'Admin::admin_deleteslider/$1');
        $routes->get('/admin-contactus', 'Admin::admin_contactus');
        $routes->post('/admin-storecontact', 'Admin::storecontact');
        $routes->get('/admin-contactlist', 'Admin::admin_contactlist');
        $routes->get('/admin-contactnewlist/(:num)', 'Admin::admin_contactnewlist/$1');
        $routes->get('admin-editcontact/(:num)', 'Admin::admin_editcontact/$1');
        $routes->post('admin-updatecontact/(:num)', 'Admin::admin_updatecontact/$1');
        $routes->get('/admin-deletecontact/(:num)', 'Admin::admin_deletecontact/$1');
        $routes->get('/admin-aboutlist', 'Admin::admin_aboutlist');
        $routes->get('/admin-aboutnewlist/(:num)', 'Admin::admin_aboutnewlist/$1');
        $routes->get('/admin-about', 'Admin::admin_aboutus');
        $routes->post('/admin-storeabout', 'Admin::storeabout');
        $routes->get('admin-editabout/(:num)', 'Admin::admin_editabout/$1');
        $routes->post('admin-updateabout/(:num)', 'Admin::admin_updateabout/$1');
        $routes->get('/admin-deleteabout/(:num)', 'Admin::admin_deleteabout/$1');
        $routes->match(['get', 'post'],'test/(:num)', 'Admin::test/$1');
    });
        
    // User Dashboard
    $routes->get('user_login','Home::user_login');
    $routes->get('mobile_login','Home::mobile_login');  
    // shankar
    $routes->post('send_otp', 'Home::send_otp');
    $routes->post('check_contact', 'Home::check_contact');
    // $routes->post('verify_otp', 'Home::send_otp');
    $routes->post('verify_otp', 'Home::verify_otp');
    $routes->match(['get', 'post'], '/user/update_otp/(:any)/(:any)', 'Home::update_otp/$1/$2');
    $routes->post('phone_login', 'Home::phone_login');
    $routes->post('login_action', 'Home::login_action');
    $routes->get('user_register','Home::user_register');
    $routes->post('user_store','Home::user_store');
    $routes->post('check_already_exist','Home::check_already_exist');
    
    $routes->get('forget_password','Home::forget_password');
    $routes->post('send-password-reset-link', 'Home::sendpasswordresetlink',['as'=>'send-password-reset-link']);
    $routes->match(['get','post'], 'otpverify', 'Home::otpverify');
    $routes->match(['get','post'],'verify', 'Home::verify', ['as' => 'verify']);
    $routes->match(['get', 'post'], 'resetpassword/(:segment)', 'Home::resetpassword/$1');
    $routes->match(['get','post'],'updateresetpassword', 'Home::updateresetpassword',['as' => 'updateresetpassword']);
    $routes->get('user_profile','Home::user_profile');
    $routes->post('updateuser/(:num)', 'Home::updateuser/$1');
    $routes->post('updateuserprof/(:num)', 'Home::updateuserprof/$1');
    $routes->match(['get', 'post'], 'user_logout', 'Home::user_logout');

    // user pages
    $routes->get('/', 'Home::index');
    $routes->match(['get','post'],'/cakeprodlist/(:any)', 'Home::cakeprodlist/$1');
    $routes->match(['get','post'],'/search_data_list/(:any)', 'Home::search_data_list/$1');
    $routes->get('cart-login', 'Home::cart_login');
    $routes->post('cart_loginstore', 'Home::cart_loginstore');
    $routes->match(['get','post'], '/viewdetails/(:num)', 'Home::viewdetails/$1');
    $routes->match(['get','post'], 'addToCartProcess', 'Home::addtosession');
    $routes->match(['get','post'], 'addtocart', 'Home::addtocart');
    $routes->post('orders', 'Home::storeorders');
    $routes->get('/contact', 'Home::contact');
    $routes->post('storecontact','Home::storecontact');
    $routes->match(['get','post'], 'order_address', 'Home::order_address');
    $routes->match(['get','post'], 'remove_product', 'Home::remove_session_product');
    $routes->match(['get','post'], 'addshippingaddress', 'Home::addshippingaddress');
    $routes->match(['get','post'], 'checkout', 'Home::checkout');
    $routes->match(['get','post'], 'thanks', 'Home::thanks');
    $routes->match(['get','post'], 'my_details/(:num)', 'Home::myorderstatus/$1');
    $routes->match(['get','post'], 'order_orders', 'Home::order_details');
    $routes->get('/product_list/(:segment)', 'Home::search/$1');
    $routes->post('rating', 'Home::addRating');
    $routes->match(['get','post'], 'ratingcount', 'Home::ratingcount');
    $routes->get('getProductDescription/(:num)', 'Home::getProductDescription/$1');
    $routes->post('updateSessionQuantity', 'Home::updateSessionQuantity');
    $routes->match(['get','post'], 'updateproductquantity', 'Home::updateproductquantity');
    $routes->get('order/getStatus/(:num)', 'Home::getStatus/$1');
    
    $routes->get('about', 'Home::about');
    $routes->get('cancellation_policy', 'Home::cancellation_policy');
    $routes->get('terms_condition', 'Home::terms_condition');
    $routes->get('payment_options', 'Home::payment_options');
    $routes->get('data_security', 'Home::data_security');
    $routes->get('/blog', 'Home::blog');
    $routes->get('/shop', 'Home::shop');
    $routes->get('/single-post', 'Home::singlepost');
    $routes->match(['get','post'],'view-details/(:num)', 'Home::viewdetails/$1');
    $routes->get('/allproducts', 'Home::allproducts');
    $routes->post('verify-razorpay-payment', 'Home::verifyRazorpayPayment');


    

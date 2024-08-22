<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AdminModel;
use App\Models\ProductModel;
use App\Models\Product_FlavourModel;
use App\Models\FlowervariantModel;
use App\Models\CategoryModel;
use App\Models\ProductpriceModel;
use App\Models\ProductimagesModel;
use App\Models\OrderModel;
use App\Models\SliderModel;
use App\Models\AdmincontactModel;
use App\Models\OrderdetailsModel;
use App\Models\ShippingaddressModel;
use App\Models\AboutusModel;
use Dompdf\Dompdf;

use CodeIgniter\I18n\Time;
use Codeigniter\Email\Email;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Admin extends BaseController
{
    public function admin_login()
    {
        return view('admin/login');
    }
    
    public function admin_login_action(){
        $session = session();
        $model = new AdminModel();
        $email = $this->request->getVar('email');
        // echo $email;
        $password = $this->request->getVar('password');
        // echo $password
        $encrypt_password =  md5($password);
        
        $data = $model->where('email', $email)->where('password', $encrypt_password)->first();

        if($data && !empty($data)) {
            $stored_password = $data['password'];
                $session_data = [
                    'id' => $data['id'],
                    'email' => $data['email'],
                    'isSignedIn' => TRUE
                ];
                $session->set($session_data);
                return redirect()->to('admin-dashboard');

        }else{
            $session->setFlashdata('msg', 'wrong email or password');
            return redirect()->to('admin');
        }
    }
    
    public function admin_register()
    {
        return view('admin/register');
    }
    
    public function admin_reg_store(){
        $model = new UserModel();
        $db = \Config\Database::connect();
        
        $firstname = $this->request->getPost('first_name');
        $lastname = $this->request->getPost('last_name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $security_string = __randomString("ALPHANUM", 100);
        $encrypt_password =  md5($password);
        $data_save = [
            "first_name" => $firstname,
            "last_name" => $lastname,
            "email" => $email,
            "password" => $encrypt_password,
            "security_string" => $security_string,
        ];
        $data_save["created_at"] = date("Y-m-d H:i:s");
        $data_save['created_by'] = __get__session('user_id');
        $data_ins = $model->insert($data_save);
        if ($data_ins) {
            require_once "vendor/autoload.php";
            $mailUser = new PHPMailer(true);
            $mailUser->CharSet = "UTF-8";
            $mailUser->isSMTP();
            $mailUser->SMTPAuth = true;
            $mailUser->SMTPSecure = "ssl"; 
            $mailUser->Host = "smtp.gmail.com";
            $mailUser->Port = 465; 
            $mailUser->Username = "prince@techflux.in";
            $mailUser->Password = "yptgbhddxuzmyedc";
            $mailUser->setFrom('prince@techflux.in', 'Your Company Name');
            $mailUser->addAddress($email);
            $mailUser->Subject = 'Thank you for Registration Successful';
            $mailUser->Body = "Hi $firstname $lastname, your registration is successful. Welcome!";
            $userEmailSent = $mailUser->send();
            
            // send mail to admin
            $mailAdmin = new PHPMailer(true);
            $mailAdmin->CharSet = "UTF-8";
            $mailAdmin->isSMTP();
            $mailAdmin->SMTPAuth = true;
            $mailAdmin->SMTPSecure = "ssl"; // or 'tls' if you use port 587
            $mailAdmin->Host = "smtp.gmail.com";
            $mailAdmin->Port = 465; // or 587 if you use 'tls'
            $mailAdmin->Username = "prince@techflux.in";
            $mailAdmin->Password = "yptgbhddxuzmyedc";
            $mailAdmin->setFrom('admin@gmail.com', 'Cake Product');
            $mailAdmin->addAddress('prince@techflux.in');
            $mailAdmin->Subject = 'New User Registration';
            $mailAdmin->Body = "A new user, $firstname $lastname, has just registered.";
            $adminEmailSent = $mailAdmin->send();
            return redirect()->to('admin-customer');
        } 
        
    }
    
    public function admin_forget()
    {
        return view('admin/forget');
    }
    
    public function passwordresetlink(){
        $session = session();
        $email = $this->request->getPost('email');
        $userModel = new AdminModel();
        $user = $userModel->where('email', $email)->first();
        if ($user !== null) {
            $id = $user['id'];
                $otp = rand(100000, 999999);
                $session = session();
                $session->set('otp', $otp);
                // Calculate and set the expiration time in the session.
                $expiration = Time::now()->addMinutes(15);
                $session->set('otp_expiration', $expiration);
    
                require_once "vendor/autoload.php";
                $mailUser = new PHPMailer(true);
                $mailUser->CharSet = "UTF-8";
                $mailUser->IsSMTP();
                $mailUser->SMTPAuth = true;
                $mailUser->SMTPSecure = "ssl";
                $mailUser->Host = "smtp.gmail.com";
                $mailUser->Port = 465;
                $mailUser->Username = "prince@techflux.in";
                $mailUser->Password = "yptgbhddxuzmyedc";
    
                $mailUser->addAddress($email);
                $messageUser = [
                    'subject' => 'Password Reset OTP',
                    'message' => "Your OTP is: $otp", 
                ];
            $mailUser->Subject = $messageUser['subject'];
            $mailUser->Body = $messageUser['message'];
            $userEmailSent = $mailUser->send();
            if($userEmailSent){
                return redirect()->to('admin-otp?id=' . $id);
            }
        }else{
            $session->setFlashdata('msg', 'wrong email address.');
            return redirect()->to('admin-forgetpass');
        }
    }
  
    public function admin_otp(){
        return view('admin/otpverify');
    }
    
    public function admin_verify(){
        $session = session();
        $enteredOTP = 
            $this->request->getVar('first') .
            $this->request->getVar('second') .
            $this->request->getVar('third') .
            $this->request->getVar('fourth') .
            $this->request->getVar('fifth') .
            $this->request->getVar('sixth');
        $adminid = $this->request->getVar('adminid'); 
        $session = session();
        $storedOTP = $session->get('otp');
        if ($enteredOTP == $storedOTP) {
            return redirect()->to("admin-resetpassword/$adminid"); 
        } else {
            $session->setFlashdata('msg', 'OTP is invalid');
            return redirect()->to('admin-otp?id=' . $adminid);
        }
    }
    
    public function admin_resetpassword($adminid = null) {
        return view('admin/resetpassword', ['adminid' => $adminid]);
    }
    
    public function admin_updateresetpassword()
    {
        $newPassword = $this->request->getPost('password');
        $newencrypt_password =  md5($newPassword);
        $confirmedPassword = $this->request->getPost('confpassword');
        $adminid = $this->request->getPost('adminid');
        if ($newPassword === $confirmedPassword) {
            $userModel = new AdminModel();
            $data = [
                'password' => $newencrypt_password
            ];
            $userModel->update($adminid, $data);
            return redirect()->to('admin');
        } else {
            return 'Passwords do not match';
        }
    }
    
    public function admin_profile(){
        $db = \Config\Database::connect();
        $userModel = new AdminModel();
        $user_id = __get__session("id");
        // $userdetail = $userModel->where('id', $user_id)->get();
        $userdetail = $db->query("SELECT * FROM admin WHERE id = $user_id");
        $data['userdetails'] = $userdetail->getResult();
        return view('admin/profile',$data);
    }
    
    public function updateadmin($id){
        $userModel = new AdminModel();
        $firstname = $this->request->getPost('first_name');
        $lastname = $this->request->getPost('last_name');
        $email = $this->request->getPost('email');
        $contact = $this->request->getPost('contact');
        $birthdate = $this->request->getPost('birthdate');
        $address = $this->request->getPost('address');
        $pincode = $this->request->getPost('pincode');
        $area = $this->request->getPost('area');
        $city = $this->request->getPost('city');

        $data_save = [
            "first_name" => $firstname,
            "last_name" => $lastname,
            "email" => $email,
            "contact" => $contact,
            "birthdate" => $birthdate,
            "address" => $address,
            "pincode" => $pincode,
            "area" => $area,
            "city" => $city,
        ];
        $data_save["updated_at"] = date("Y-m-d H:i:s");
        $data_save['updated_by'] = __get__session('id');
        $userModel->update($id, $data_save);
        return redirect()->to('admin-profile');
    }
    
    public function admin_logout(){
        __destroy__session();
        return redirect()->to('admin');
    }
    
    public function admin_dashboard()
    {
        $db = \Config\Database::connect();
        $from_date = $this->request->getPost('from_date');
        $to_date = $this->request->getPost('to_date');
        // Query to count users
        if(!empty($from_date) && !empty($to_date)){
            $userCountQuery = $db->query("SELECT COUNT(*) as user_count FROM users");
        }else{
            $userCountQuery = $db->query("SELECT COUNT(*) as user_count FROM users");
        }
        // Query to count orders and sum revenue
        if(!empty($from_date) && !empty($to_date)){
            $ordercountQuery = $db->query("SELECT COUNT(*) as order_count, SUM(totalamount) as total_amount FROM orders WHERE status = '1' AND orderdate BETWEEN '$from_date' AND '$to_date'");
        }else{
            $ordercountQuery = $db->query("SELECT COUNT(*) as order_count, SUM(totalamount) as total_amount FROM orders");
        }
        // Determine the base query for fetching orders
        if(!empty($from_date) && !empty($to_date)){
            $baseOrderQuery = "SELECT o.*, o.order_id as orderid, od.*, od.id as odrdetail_id, sa.* 
            FROM orders as o 
            LEFT JOIN order_details as od ON od.order_id = o.id 
            LEFT JOIN shipping_address as sa ON sa.fkorder_id = o.id 
            WHERE o.status = '1' AND o.orderdate BETWEEN '$from_date' AND '$to_date'";
        }else{
            $baseOrderQuery = "SELECT o.*, o.order_id as orderid, od.*, od.id as odrdetail_id, sa.* 
            FROM orders as o 
            LEFT JOIN order_details as od ON od.order_id = o.id 
            LEFT JOIN shipping_address as sa ON sa.fkorder_id = o.id 
            WHERE o.status = '1' ORDER BY o.id DESC LIMIT 10";
        }
    
        // Query to get order statuses
        if(!empty($from_date) && !empty($to_date)){
            $orderdetailQuery = $db->query("SELECT o.*, od.crntstatus FROM orders as o 
            LEFT JOIN order_details as od ON od.order_id = o.id WHERE o.status = '1' AND o.orderdate BETWEEN '$from_date' AND '$to_date'");
        }else{
            $orderdetailQuery = $db->query("SELECT crntstatus FROM order_details");
        }
    
        $userCount = $userCountQuery->getRow()->user_count;
        $ordersQuery = $db->query($baseOrderQuery);
        $orders = $ordersQuery->getResult();
        $orderCount = $ordercountQuery->getRow()->order_count;
        $orderRevenue = $ordercountQuery->getRow()->total_amount;
        $ordersdetails = $orderdetailQuery->getResult();
        // Filter orders by status
        $approvedOrders = array_filter($ordersdetails, function($order) {
            return $order->crntstatus === 'approve';
        });
        $deliveredOrders = array_filter($ordersdetails, function($order) {
            return $order->crntstatus === 'delivered';
        });
        $cancelledOrders = array_filter($ordersdetails, function($order) {
            return $order->crntstatus === 'cancelled';
        });
    
        // Count orders by status
        $approvedCount = count($approvedOrders);
        $deliveredCount = count($deliveredOrders);
        $cancelledCount = count($cancelledOrders);

        // Pass data to the view
        $data = [
            'from_date' => $from_date,
            'to_date' => $to_date,
            'cancelledCount' => $cancelledCount,
            'approvedCount' => $approvedCount,
            'deliveredCount' => $deliveredCount,
            'revenue' => $orderRevenue,
            'orderCount' => $orderCount,
            'userCount' => $userCount,
            'order' => $orders
        ];
    
        return view('admin/index', $data);
    }

    public function admin_customer($page = 1)
    {
        $userModel = new UserModel();
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $users = $db->query("SELECT * FROM users ORDER BY user_id DESC LIMIT $perPage OFFSET $offset");
        $totalRows = $userModel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);
        $data['customer'] = $users->getResult();
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        return view('admin/customerlist',$data);
    }
    
    public function admin_customerlist($page = 1)
    {
        $userModel = new UserModel();
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $users = $db->query("SELECT * FROM users ORDER BY user_id DESC LIMIT $perPage OFFSET $offset");
        $totalRows = $userModel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);
        $data['customer'] = $users->getResult();
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        return view('admin/customerlist',$data);
    }
    
    public function admin_customerview($id){
        $userModel = new UserModel();
        $customerdetails = $userModel->where('user_id', $id)->first();
        // print_r($customerdetails);exit;
        return view('admin/customer_details', ['customerdetails' => $customerdetails]);
    }
    
    public function changeStatus($table, $id, $value)
    {
        try {
            $model = null;
            switch ($table) {
                case 'procategory':
                    $model = new CategoryModel();
                    break;
                case 'product':
                    $model = new ProductModel();
                    break;
                case 'orders':
                    $model = new OrderModel();
                    break;
                default:
                case 'slider':
                    $model = new SliderModel();
                    break;
                case 'adcontact':
                    $model = new AdmincontactModel();
                    break;
                case 'adabout':
                    $model = new AboutusModel();
                    break;
                throw new \Exception('Invalid table name: ' . $table);
            }

            $getData = $model->find($id);
            if (!$getData) {
                throw new \Exception('Record not found');
            }
            $status = $value == '1' ? '0' : '1';
            $model->set('status', $status);
            $model->where('id', $id);
            $model->update();
            return $this->response->setJSON([
                'success' => lang('language.alertMessage.statusChange'),
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'error' => lang('language.alertMessage.internalServerError'),
            ]);
        }
    }
    
    public function changebestseller($table, $id, $value){
        try {
            $model = null;
            switch ($table) {
                case 'product':
                    $model = new ProductModel();
                    $bestseller = $value == '1' ? '0' : '1';
                    $model->set('bestseller', $bestseller);
                    $model->where('id', $id)->update(); 
                    break;
                default:
                throw new \Exception('Invalid table');
            }
            
            return $this->response->setJSON([
                'success' => lang('language.alertMessage.statusChange'),
            ]);
        } catch(\Exception $e) {
            return $this->response->setJSON([
                'error' => lang('language.alertMessage.internalServerError'),
            ]);
        }
    }

    public function admin_storecategory(){
        $user_id = __get__session("id");
        $categorymodel = new CategoryModel();
        $category = $this->request->getPost('category');
        
        if ($this->request->getFile('category_image')) {
            $file = $this->request->getFile('category_image');
            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $pathInfo = pathinfo($imageName);
                $filename = $pathInfo['filename'];
                $extension = $pathInfo['extension'];
                $file->move('public/admin/assets/uploads/category', $imageName);
                $categoryImage = $filename . '.' . $extension;
            } 
        }
        
        $categoryimage = isset($categoryImage) ? $categoryImage : null;
        $catquantity = $this->request->getPost('category_quantity');
        $catstatus = $this->request->getPost('status');
        $data_save = [
            "category_name" => $category,
            "category_image" => $categoryimage, 
            "status" => $catstatus,
        ];
        $data_save["created_at"] = date("Y-m-d H:i:s");
        $categorymodel->insert($data_save);
        return redirect()->to('admin-categoryproduct');   
    }
    
    public function admin_category(){
        return view('admin/addcategory');
    }
    
    public function admin_categorylist($page = 1){
        $categorymodel = new CategoryModel();
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $category = $db->query("SELECT * FROM product_category ORDER BY id DESC LIMIT $perPage OFFSET $offset");
        $totalRows = $categorymodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);
        $data['category'] = $category->getResult();
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        return view('admin/categorylist',$data);
    }
    
    public function admin_newcategorylist($page = 1){
        $categorymodel = new CategoryModel();
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $category = $db->query("SELECT * FROM product_category ORDER BY id DESC LIMIT $perPage OFFSET $offset");
        $totalRows = $categorymodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);
        $data['category'] = $category->getResult();
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        return view('admin/categorylist',$data);
    }
    
    public function admin_editcategory($id = null)
    {   
        $categoryModel = new CategoryModel();
        $data['category'] = $categoryModel->where('id', $id)->get()->getResult();
        return view('admin/editcategory',$data);
    }
    
    public function admin_updatecategory($id = null)
    {
        $categorymodel = new CategoryModel();
        $category = $this->request->getPost('category');
        $oldCategory = $categorymodel->find($id);
        $updatedImageName = $oldCategory['category_image']; 
        $categoryimage = $this->request->getFile('category_image');
        if ($categoryimage->isValid() && !$categoryimage->hasMoved())
        {
            if ($oldCategory['category_image'] && file_exists('public/admin/assets/uploads/category/' . $oldCategory['category_image'])) {
                unlink('public/admin/assets/uploads/category/' . $oldCategory['category_image']);
            }
            $updatedImageName = $categoryimage->getRandomName();
            $categoryimage->move('public/admin/assets/uploads/category', $updatedImageName);
        }
        $catquantity = $this->request->getPost('category_quantity');
        $catstatus = $this->request->getPost('status');

        $data_save = [
            "category_name" => $category,
            "category_image" => $updatedImageName, 
            "status" => $catstatus,
        ];
        $data_save["updated_at"] = date("Y-m-d H:i:s");
        $categorymodel->update($id, $data_save);
        return redirect()->route('admin-categoryproduct');
    }
    
    public function admin_deletecategory($id = null){
        $categoymodel = new CategoryModel();
        $categoymodel->where('id', $id)->delete();
        return redirect()->route('admin-categoryproduct');
    }
    
    public function admin_addflv(){
        return view('admin/addflavour');
    }
    
    public function storeproflv(){
        $user_id = __get__session("id");
        $proflvmodel = new Product_FlavourModel();
        $proflavour = $this->request->getPost('product_flavour');
        $data_save = [
            "product_flavour" => $proflavour,
        ];
        $data_save["created_at"] = date("Y-m-d H:i:s");
        $data_save["created_by"] = __get__session("id");
        $proflvmodel->insert($data_save);
        // return redirect()->back();
        return redirect()->to('/admin-flavourlist');
    }
    
    public function admin_flavourlist($page = 1){
        $flvmodel = new Product_FlavourModel();
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $flavour = $db->query("SELECT * FROM product_flavour ORDER BY id DESC LIMIT $perPage OFFSET $offset");
        $totalRows = $flvmodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);
        $data['flavour'] = $flavour->getResult();
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        return view('admin/flavourlist',$data);
    }
    
    public function admin_newflavourlist($page = 1){
        $flvmodel = new Product_FlavourModel();
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $flavour = $db->query("SELECT * FROM product_flavour ORDER BY id DESC LIMIT $perPage OFFSET $offset");
        $totalRows = $flvmodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);
        $data['flavour'] = $flavour->getResult();
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        return view('admin/flavourlist',$data);
    }
    
    public function admin_deleteflavour($id = null){
        $flvmodel = new Product_FlavourModel();
        $flvmodel->where('id', $id)->delete();
        return redirect()->route('admin-flavourlist');
    }
    
    public function admin_addflavourvariant(){
        $categorymodel = new CategoryModel();
        $db = \Config\Database::connect();
        $flvprod = $db->query("SELECT * FROM product WHERE status = '1' AND category_id = '4'");
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $proflvmodel = new Product_FlavourModel();
        $data['flvproduct'] = $flvprod->getResultArray();
        // echo"<pre>";print_r($data['flvproduct']);exit;
        $data['category'] = $category->getResultArray();
        $data['proflavour'] = $proflvmodel->findAll();
        return view('admin/addflowervariant',$data);
    }
    
     public function storeflowervariant()
    {
        $user_id = __get__session("user_id");
        $flowervariantmodel = new FlowervariantModel();
        $productmodel = new ProductModel();
        $categorymodel = new CategoryModel();
        $prodpricemodel = new ProductpriceModel();
        $prodimgmodel= new ProductimagesModel();
        $proname = $this->request->getPost('product_name');
        $categoryid = $this->request->getPost('category_id');
        $flower_price = $this->request->getPost('product_price');
        $flvstatus = $this->request->getPost('status');
        if ($this->request->getFile('product_image')) {
            $file = $this->request->getFile('product_image');
            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $pathInfo = pathinfo($imageName);
                $filename = $pathInfo['filename'];
                $extension = $pathInfo['extension'];
                $file->move('public/admin/assets/uploads/flowervariant', $imageName);
                $productImage = $filename . '.' . $extension;
            } 
        }
        // $productimage = isset($productImage) ? $productImage : null;
        $productimage = $productImage;

        $data_save = [
            "flowerprod_name" => $proname,
            "category_id" => $categoryid,
            "flower_image" => $productimage,
            "flower_price" => $flower_price,
            "status" => $flvstatus,
        ];
        $data_save["created_at"] = date("Y-m-d H:i:s");
        $data_save["created_by"] = $user_id;
        $flowervariantmodel->insert($data_save);
        return redirect()->to('admin-addproduct');
    }
    
    public function admin_addproduct(){
        $flowervariantmodel = new FlowervariantModel();
        $categorymodel = new CategoryModel();
        $db = \Config\Database::connect();
        // $flvprod = $db->query("SELECT * FROM flowervariant WHERE status = '1' AND category_id = '4'");
        $flvprod = $db->query("SELECT * FROM product WHERE status = '1' AND category_id = '4' AND (product_variant = '' OR product_variant IS NULL)");
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $proflvmodel = new Product_FlavourModel();
        $data['flvproduct'] = $flvprod->getResultArray();
        $data['category'] = $category->getResultArray();
        $data['proflavour'] = $proflvmodel->findAll();
        return view('admin/addproduct',$data);
    }
    
    public function admin_product($page = 1)
    {
        $productmodel = new ProductModel();
        $categorymodel = new CategoryModel();
        $proflvmodel = new Product_FlavourModel();
        $productprice = new ProductpriceModel();
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $product = $db->query("SELECT * FROM product ORDER BY id DESC LIMIT $perPage OFFSET $offset");
        $totalRows = $productmodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);
        $data['category'] = $categorymodel->findAll();
        $data['proflavour'] = $proflvmodel->findAll();
        $data['product'] = $product->getResult();
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        return view('admin/product',$data);
    }
    
    public function admin_productlist($page = 1)
    {
        $search = $this->request->getPost('product_search') ?? $this->request->getGet('product_search') ?? "";

        if ($_POST) 
        {
            if (!empty($search)) {
                $_SESSION['product_search'] = $search;
            }
        } else {
            $search = $_SESSION['product_search'] ?? "";
        }
        
        $productmodel = new ProductModel();
        $categorymodel = new CategoryModel();
        $proflvmodel = new Product_FlavourModel();
        $data['category'] = $categorymodel->findAll();
        $data['proflavour'] = $proflvmodel->findAll();
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $pr_sql = "SELECT * FROM product ";
        if (!empty($search)) {
            $pr_sql .= " where product_name LIKE '%$search%' ";
        }
        $pr_sql .= "ORDER BY id DESC LIMIT $perPage OFFSET $offset";
        $pr_res = $db->query($pr_sql);
        // $product = $db->query("SELECT * FROM product ORDER BY id DESC LIMIT $perPage OFFSET $offset");
        $countPrQuery = "SELECT COUNT(*) as total FROM product ";
    
        if (!empty($search)) {
            $countPrQuery .= " where product_name LIKE '%$search%'";
        }
        $countPrRes = $db->query($countPrQuery);


        $totalRows_= $db->query($countPrQuery)->getRow();
        $totalRows = $totalRows_->total;
        $data['perPage'] = $perPage;
        $totalPages = ceil($totalRows / $perPage);
        $data['category'] = $categorymodel->findAll();
        $data['proflavour'] = $proflvmodel->findAll();
        $data['product'] = $pr_res->getResult();
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        $data['totalRows'] = $totalRows; 
        return view('admin/product',$data);
    }
    
    public function storeproduct()
    {
        $user_id = __get__session("user_id");
        $productmodel = new ProductModel();
        $categorymodel = new CategoryModel();
        $prodpricemodel = new ProductpriceModel();
        $prodimgmodel= new ProductimagesModel();
        $proname = $this->request->getPost('product_name');
        // $flower_id = $_POST['flower_id']; 
        // $flower_ids = implode(',', $flower_id); 
        $flower_id = $_POST['flower_id'] ?? []; 
        $flower_ids = isset($flower_id) ? implode(',', $flower_id) : null;
        $productimage = isset($productImage) ? $productImage : null;
        $categoryid = $this->request->getPost('category_id');
        $category = $categorymodel->where('id', $categoryid)->get();
        $categorydata = $category->getResult();
        $category = $categorydata[0]->category_name;
        $flavourid = $this->request->getPost('flavour_id');
        $deliveryinfo = $this->request->getPost('deli_info');
        $careinstruct = $this->request->getPost('care_instruct');
        $proddes = $this->request->getPost('product_des');
        $prostatus = $this->request->getPost('status');
        
        // Update sub_variant to 1 for each flower_id
        if (!empty($flower_id)) {
            foreach ($flower_id as $fid) {
                // print_r($fid);exit;
                $data_variant = [
                    "sub_variant" => '1',
                ];
                $productmodel->update($fid, $data_variant);
            }
        }

        $data_save = [
            "product_name" => $proname,
            "product_variant" => $flower_ids,
            "flavour_id" => $flavourid,
            "category_id" => $categoryid,
            "delivery_info" => $deliveryinfo,
            "care_instruction" => $careinstruct,
            "product_description" => $proddes,
            "status" => $prostatus,
        ];
        // print_r($data_save);exit;
        $data_save["created_at"] = date("Y-m-d H:i:s");
        $data_save["created_by"] = $user_id;
        $productmodel->insert($data_save);
        
        $productId = $productmodel->getInsertID();
        
        // Handle multiple file uploads
        $files = $this->request->getFiles();
        if (!empty($files['product_image'])) {
            foreach ($files['product_image'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $imageName = $file->getRandomName();
                    $file->move('public/admin/assets/uploads/product', $imageName);
                    $prodimgmodel->insert([
                        'product_id' => $productId, 
                        'full_path' => 'public/admin/assets/uploads/product',
                        'image_name' => $imageName,
                    ]);
                }
            }
        }
        $prodweight = $this->request->getPost('product_weight');
        $prodprice = $this->request->getPost('product_price');
        if (!empty($prodweight) && !empty($prodprice) && is_array($prodweight) && is_array($prodprice)) {
            $priceWeightData = [];
            foreach ($prodweight as $key => $weight) {
                if (isset($prodprice[$key])) {
                    $price = $prodprice[$key];
                    $priceWeightData[] = [
                        "product_id" => $productId,
                        "kg" => !empty($weight) ? $weight : 1, 
                        "price" => $price,
                    ];
                }
            }
            if (!empty($priceWeightData)) {
                $prodpricemodel->insertBatch($priceWeightData);
            }
        }
        return redirect()->to('admin-product/1');
    }
    
    public function admin_editproduct($id = null)
    {   
        $productflvmodel = new Product_FlavourModel();
        $productmodel = new ProductModel();
        $categoryModel = new CategoryModel();
        $productprice = new ProductpriceModel();
        $db = \Config\Database::connect();

        $product = $db->query("SELECT * FROM product as p LEFT JOIN product_price as pp ON p.id = pp.product_id WHERE p.id = $id");
        $prodimg = $db->query("SELECT * FROM product_images WHERE product_id = $id")->getResult();
        $data['prodimg'] = $prodimg;
        $data['product'] = $product->getResult();
        $data['productprice'] = $productprice->where('product_id', $id)->get()->getResult();
        $flavour_id = $data['product'][0]->flavour_id;
        $data['productflv'] = $productflvmodel->where('id', $flavour_id)->get()->getResult();
        $data['proflavour'] = $productflvmodel->findAll();
        $data['category'] = $categoryModel->findAll();
        return view('admin/editproduct',$data);
    }
    
    public function delete_prodimage($image_id)
    {
        $prodimgmodel= new ProductimagesModel();
        $images = $prodimgmodel->where('id', $image_id)->findAll();
        if ($images) {
            foreach ($images as $image) {
                $product_image_id = $image['id'];
                $imagePath = FCPATH . 'public/admin/assets/uploads/product/' . $image['image_name']; 
                if (file_exists($imagePath)) {
                    unlink($imagePath); 
                }
                $prodimgmodel->delete($product_image_id);
            }
            return 1;
        } else {
            return 0;
        }
    }

    
public function admin_updateproduct($id = null)
{
    // print_r($_POST);exit;
    $productmodel = new ProductModel();
    $categorymodel = new CategoryModel();
    $productpricemodel = new ProductpriceModel();
    $prodimgmodel = new ProductimagesModel();
    
    // Get form data
    $proname = $this->request->getPost('product_name');
    $delinfo = $this->request->getPost('deli_info');
    $careinst = $this->request->getPost('care_instruct');
    $prostatus = $this->request->getPost('status');
    $prodes = $this->request->getPost('product_des');
    $categoryid = $this->request->getPost('category_id');
    $flavourid = $this->request->getPost('flavour_id');

    // Get category name
    $category = $categorymodel->where('id', $categoryid)->get()->getRow();
    $categoryname = $category->category_name;

    // Prepare data to save
    $data_save = [
        "product_name" => $proname,
        "flavour_id" => $flavourid,
        "category_id" => $categoryid,
        "delivery_info" => $delinfo,
        "care_instruction" => $careinst,
        "product_description" => $prodes,
        "status" => $prostatus,
        "updated_at" => date("Y-m-d H:i:s"),
    ];

    // Update product
    $productmodel->update($id, $data_save);

    // Handle image uploads
    $productimages = $this->request->getFiles('product_images');
    if ($this->request->getFileMultiple('product_images')) {
        $files = $this->request->getFileMultiple('product_images');
        foreach ($files as $image) {
            if ($image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $fullPath = 'public/admin/assets/uploads/product'; 
                $image->move($fullPath, $imageName);
                $prodimgmodel->insert([
                    'product_id' => $id,
                    'full_path' => $fullPath,
                    'image_name' => $imageName,
                ]);
            }
        }
    }

    // Redirect to the product list page
    return redirect()->to(base_url('admin-product/1'));
}

    
    public function edtprodprice($id = null)
    {   
        $productprice = new ProductpriceModel();
        $data['productprice'] = $productprice->where('id', $id)->get()->getResult();
        $product_id = $data['productprice'][0]->product_id;
        return view('admin/edtprodprice',$data);
    }
    
    public function admin_updateprodprice($id = null)
    {
        $productpricemodel = new ProductpriceModel();
        $prodctid = $this->request->getPost('product_id');
        $proweight = $this->request->getPost('product_weight');
        $proprice = $this->request->getPost('product_price');
        $data_save = [
            "kg" => $proweight,
            "price" => $proprice,
        ];
        $productpricemodel->update($id, $data_save);
        return redirect()->to(previous_url());
    }
    
    public function admin_deleteproduct($id = null)
    {
        $productmodel = new ProductModel();
        $productmodel->where('id', $id)->delete();
        return redirect()->route('admin-product/1');
    }

    public function dltprodprice($id = null)
    {
        $productprice = new ProductpriceModel();
        $data['productprice'] = $productprice->where('id', $id)->get()->getResult();
        $productprice->where('id', $id)->delete();
        return redirect()->to(previous_url());
    }
    
    public function select_by_date(){
        $ordermodel = new OrderModel();
        // $perPage = 10;
        // $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $From_date = $this->request->getPost('from_date');  
        $To_date = $this->request->getPost('to_date');
        $filterCondition = "";
        if (empty($From_date) && empty($To_date)) {
            return redirect()->to('/admin-order')->with('error', 'Date not selected');
            // return redirect()->back()->with('error', 'Date not selected');
        } else if (!empty($From_date) && !empty($To_date)) {
            $filterCondition = "AND o.orderdate BETWEEN '$From_date' AND '$To_date'";
            // $filterCondition = "AND od.orderdate BETWEEN '".$From_date."' AND '".$To_date."'";
        }
        $order = $db->query("
            SELECT o.*, o.id as ordersid, o.created_at,o.orderdate as odrdate, o.ordertime as odrtime, o.order_id as orderid, od.*,od.id as odrdetail_id,sa.* 
            FROM orders as o 
            LEFT JOIN order_details as od ON od.order_id = o.id 
            LEFT JOIN shipping_address as sa ON sa.fkorder_id=o.id 
            WHERE o.status = '1' $filterCondition ORDER BY o.id DESC
        ");
        
        $data['order'] = $order->getResult();
        $data['from_date'] = $From_date;
        $data['to_date'] = $To_date;
        // $totalRows = $ordermodel->countAllResults();
        // $totalPages = ceil($totalRows / $perPage);
        // $data['totalPages'] = $totalPages;
        // $data['currentPage'] = $page;
        return view ('admin/orderdatelist', $data);
    }
    
   public function admin_order($page = 1)
{
    $ordermodel = new OrderModel();
    $perPage = 10;
    $offset = ($page - 1) * $perPage;

    $db = \Config\Database::connect();

    $search = $this->request->getPost('search') ?? $this->request->getGet('search') ?? "";
    $from_date = $this->request->getPost('from_date') ?? $this->request->getGet('from_date') ?? "";
    $to_date = $this->request->getPost('to_date') ?? $this->request->getGet('to_date') ?? "";

    if ($_POST) 
    {
        if (!empty($search)) {
            $_SESSION['order_search'] = $search;
        }
        if (!empty($from_date)) {
            $_SESSION['order_from_date'] = $from_date;
        }
        if (!empty($to_date)) {
            $_SESSION['order_to_date'] = $to_date;
        }
    } else {
        $search = $_SESSION['order_search'] ?? "";
        $from_date = $_SESSION['order_from_date'] ?? "";
        $to_date = $_SESSION['order_to_date'] ?? "";
    }

    $sql = "SELECT orders.*, shipping_address.* 
            FROM orders 
            INNER JOIN shipping_address ON shipping_address.fkorder_id = orders.id
            WHERE orders.status = '1'";
    
    if (!empty($search)) {
        $sql .= " AND (shipping_address.first_name LIKE '%$search%' OR shipping_address.last_name LIKE '%$search%')";
    }
    
    if (!empty($from_date)) {
        $sql .= " AND orders.orderdate >= '$from_date'";
    }

    if (!empty($to_date)) {
        $sql .= " AND orders.orderdate <= '$to_date'";
    }

    $sql .= " ORDER BY orders.id DESC LIMIT $perPage OFFSET $offset";
    $res = $db->query($sql);

    $countQuery = "SELECT COUNT(*) as total 
                   FROM orders 
                   INNER JOIN shipping_address ON shipping_address.fkorder_id = orders.id 
                   WHERE orders.status = '1'";
    
    if (!empty($search)) {
        $countQuery .= " AND (shipping_address.first_name LIKE '%$search%' OR shipping_address.last_name LIKE '%$search%')";
    }
    
    if (!empty($from_date)) {
        $countQuery .= " AND orders.orderdate >= '$from_date'";
    }

    if (!empty($to_date)) {
        $countQuery .= " AND orders.orderdate <= '$to_date'";
    }

    $totalRows_= $db->query($countQuery)->getRow();
    $totalRows = $totalRows_->total;
    $data['perPage'] = $perPage;
    $totalPages = ceil($totalRows / $perPage);

    $data['orders'] = $res->getResult();
    $data['totalPages'] = $totalPages;
    $data['currentPage'] = $page;
    $data['totalRows'] = $totalRows; 

    return view('admin/orderlist', $data);
}


public function order_list_reset() {
    $session = session();
    $session->remove(['order_search', 'order_from_date', 'order_to_date']);
    return $this->response->setJSON(['success' => true]);
}

public function product_list_reset() {
    $session = session();
    $session->remove(['product_search']);
    return $this->response->setJSON(['success' => true]);
}

    
    public function order_view_details(){
        // print_r($_POST);exit;
        $ordermodel = new OrderModel();
        $update = $ordermodel->set('order_view', 1)->where('order_id', $_POST['order_id'])->update();
         if ($update) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false]);
        }
        
    }
    
    public function admin_orderlist($page = 1)
{
    $perPage = 10;
    $offset = ($page - 1) * $perPage;
    $db = \Config\Database::connect();
    
    // Fetch paginated order data
    $query = "SELECT orders.*, shipping_address.* 
              FROM orders 
              INNER JOIN shipping_address ON shipping_address.fkorder_id = orders.id 
              WHERE orders.status = '1' 
              ORDER BY orders.id DESC 
              LIMIT $perPage OFFSET $offset";
    $order = $db->query($query);
    
    // Fetch total rows count
    $countQuery = "SELECT COUNT(*) as total 
                   FROM orders 
                   INNER JOIN shipping_address ON shipping_address.fkorder_id = orders.id 
                   WHERE orders.status = '1'";
    $totalRowsResult = $db->query($countQuery)->getRow();
    $totalRows = $totalRowsResult->total;
    $totalPages = ceil($totalRows / $perPage);

    // Prepare data for view
    $data['order'] = $order->getResult();
    $data['totalPages'] = $totalPages;
    $data['currentPage'] = $page;

    return view('admin/orderlist', $data);
}

    
    public function admin_orderview($id) {
        // print_r($id);exit;
        $db = \Config\Database::connect();
        $query = "SELECT o.*, o.id as ordersid, o.orderdate as odrdate, o.ordertime as odrtime, o.order_id as orderid, od.*, od.id as odrdetail_id, sa.* 
            FROM orders as o LEFT JOIN order_details as od ON od.order_id = o.id 
            LEFT JOIN shipping_address as sa ON sa.fkorder_id = o.id WHERE o.order_id = $id";
        $order = $db->query($query); 
        $data['order'] = $order->getResult();
        // echo"<pre>";      print_r($data['order']);exit;

        return view('admin/orderview', $data);
    }
    
    public function approveorder()
    {
        // print_r($_POST);exit;
        $ordermodel = new OrderModel();
        $shipingmodel = new ShippingaddressModel();
        $orderdetailmodel = new OrderdetailsModel();
        
        $action = $this->request->getPost('action');
        $id = $this->request->getPost('order_id');
        
        // Find order details
        $order = $orderdetailmodel->find($id);
        $order_id = $order['order_id']; 
        $shipingdata = $shipingmodel->where('fkorder_id', $order_id)->first();
        $orderdata = $ordermodel->where('id', $order_id)->first();
        // print_r($order['product_name']);exit;
        $orderId = $orderdata['order_id'];
        $username = $shipingdata['first_name'];
        $email = $shipingdata['email'];
        // echo $email;exit;
        $data_save = [
            'crntstatus' => $action
        ];

        $updated = $orderdetailmodel->update($id, $data_save);
        if ($updated) {
            switch ($action) {
                case 'approve':
                    $subject = 'Order Accepted';
                    $message = "<br>Dear $username,<br>
                    Your order with ".$order['product_name']." has been accepted.<br><br>
                    Thank you for choosing us!<br>";
                    break;
                case 'pending':
                    $subject = 'Order Pending';
                    $message = "<br>Dear $username,<br>
                    Your order with ".$order['product_name']." is pending.<br><br>";
                    break;
                case 'shipped':
                    $subject = 'Order Shipped';
                    $message = "<br>Dear $username,<br>
                    Your order with ".$order['product_name']." has been shipped successfully.<br><br>
                    Thank you for choosing us!<br>";
                    break;
                case 'delivered':
                    $subject = 'Order Delivered';
                    $message = "<br>Dear $username,<br>
                    Your order with ".$order['product_name']." has been delivered successfully.<br><br>
                    Thank you for choosing us!<br>";
                    break;
                case 'reject':
                    $subject = 'Order Rejected';
                    $message = "<br>Dear $username,<br>
                    Your order with ".$order['product_name']." has been rejected.<br>
                    If you have any questions, please contact us.<br><br>";
                    break;
                default:
                    $subject = 'Order Update';
                    $message = "<br>Dear $username,<br>
                    Your order with ".$order['product_name']." has been successfully updated.<br><br>
                    Thank you for choosing us!<br>";
                    break;
            }
           
            
            $route = "admin-order";
            
            $this->order_status_mail($email,$subject,$message,$route,$order_id);
        } else {
            return redirect()->back()->with('error', 'Failed to update order status.');
        }
    }

    
    public function order_status_mail($email,$subject,$message,$route,$order_id){
        $ordermodel = new OrderModel();
    require_once "vendor/autoload.php";
    $db = \Config\Database::connect();
            $mailUser = new PHPMailer(true);
            $mailUser->CharSet = "UTF-8";
            $mailUser->IsSMTP();
            $mailUser->SMTPAuth = true;
            $mailUser->SMTPSecure = "ssl";
            $mailUser->Host = "smtp.gmail.com";
            $mailUser->Port = 465;
            $mailUser->Username = "prince@techflux.in";
            $mailUser->Password = "yptgbhddxuzmyedc";
            $mailUser->addAddress($email);
            $mailUser->Subject = $subject;
            // $mailUser->Body = $message;
            $sql = $db->query("select * from  mail_template where id = 1");
            $res = $sql->getFirstRow();
            $html = $res->body;
            $logo = base_url('public/images/main-logo.jpg');
            $order_data = $ordermodel->where('id', $order_id)->first();
            $url  = base_url('admin-orderpdf/' . $order_id);
            $html = str_replace('%logo%', $logo, $html);
            $html = str_replace('%url%',  base_url($order_data['pdf_path']), $html);
            $html = str_replace('%body%', $message, $html);
            $mailUser->msgHTML($html);
            $mailUser->send();

}
    public function mail_html(){
        return view('admin/mail_html');
    }
    
    public function orderaccept($page = 1){
        $ordermodel = new OrderModel();
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $query = $db->query("SELECT o.*, o.order_id as orderid, od.*, od.id as odrdetail_id, sa.* 
            FROM orders as o LEFT JOIN order_details as od ON od.order_id = o.id 
            LEFT JOIN shipping_address as sa ON sa.fkorder_id = o.id WHERE od.is_active = '1' ORDER BY o.id DESC LIMIT $perPage OFFSET $offset");
        $data['order'] = $query->getResult(); 
        $totalRows = $ordermodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        return view('admin/orderaccept', $data);
    } 
    
    public function admin_orderacceptlist($page = 1){
        $ordermodel = new OrderModel();
        $perPage = 10;
        $offset = ($page - 1) * $perPage;

        $db = \Config\Database::connect();
        $query = $db->query("SELECT o.*, o.order_id as orderid, od.*, od.id as odrdetail_id, sa.* 
            FROM orders as o LEFT JOIN order_details as od ON od.order_id = o.id 
            LEFT JOIN shipping_address as sa ON sa.fkorder_id = o.id WHERE od.is_active = '1' ORDER BY o.id DESC LIMIT $perPage OFFSET $offset");
        $data['order'] = $query->getResult(); 
        $totalRows = $ordermodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        return view('admin/orderaccept', $data);
    }

    public function admin_deleteorder($id = null){
        $ordermodel = new OrderdetailsModel();
        $ordermodel->where('id', $id)->delete();
        return redirect()->route('admin-order');
    }

    public function admin_addslider(){
        return view('admin/addslider');
    }
    
    public function admin_sliderlist($page = 1)
    {
        $slidermodel = new SliderModel();
        // $data['slider'] = $slidermodel->findAll();
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $slider = $db->query("SELECT * FROM slider ORDER BY id DESC LIMIT $perPage OFFSET $offset");
        $totalRows = $slidermodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        $data['slider'] = $slider->getResult();
        return view('admin/slider',$data);
    }
    
    public function admin_slidernewlist($page = 1)
    {
        $slidermodel = new SliderModel();
        // $data['slider'] = $slidermodel->findAll();
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $slider = $db->query("SELECT * FROM slider ORDER BY id DESC LIMIT $perPage OFFSET $offset");
        $totalRows = $slidermodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);

        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        $data['slider'] = $slider->getResult();
        return view('admin/slider',$data);
    }
    
    public function storeslider(){
        $user_id = __get__session("id");
        $slidermodel = new SliderModel();
        try {
            $sliderImage = '';
            if ($this->request->getPost('media_type') === 'image' && $this->request->getFile('slider_image')) {
                $file = $this->request->getFile('slider_image');
                if ($file->isValid() && !$file->hasMoved()) {
                    $imageName = $file->getRandomName();
                    $file->move('public/admin/assets/uploads/slider', $imageName);
                    $sliderImage = $imageName;
                } 
            } elseif ($this->request->getPost('media_type') === 'video' && $this->request->getFile('slider_video')) {
                $file = $this->request->getFile('slider_video');
                if ($file->isValid() && !$file->hasMoved()) {
                    $videoName = $file->getRandomName();
                    $file->move('public/admin/assets/uploads/slider', $videoName);
                    $sliderImage = $videoName; 
                }
            }
            $sliderMedia = $sliderImage;
            $sliderstatus = $this->request->getPost('status');
            $data_save = [
                "slider_image" => $sliderMedia, 
                "status" => $sliderstatus,
                "created_at" => date("Y-m-d H:i:s")
            ];
    
            $slidermodel->insert($data_save);
        } catch (Exception $e) {
            return redirect()->to(previous_url())->with('error', $e->getMessage());
        }

        return redirect()->to('admin-sliderlist'); 
    }
    
    public function admin_editslider($id = null)
    {   
        $slidermodel = new SliderModel();
        $data['slider'] = $slidermodel->where('id', $id)->get()->getResult();
        return view('admin/editslider',$data);
    }
    
    public function admin_updateslider($id = null)
    {
        $slidermodel = new SliderModel();
        $oldslider = $slidermodel->find($id);
        $updatedMediaName = $oldslider['slider_image']; 
        $mediaType = $this->request->getPost('media_type');
        if ($mediaType === 'image' && $this->request->getFile('slider_image')) {
            $imageFile = $this->request->getFile('slider_image');
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                if ($oldslider['slider_image'] && file_exists('public/admin/assets/uploads/slider/' . $oldslider['slider_image'])) {
                    unlink('public/admin/assets/uploads/slider/' . $oldslider['slider_image']);
                }
                $updatedMediaName = $imageFile->getRandomName();
                $imageFile->move('public/admin/assets/uploads/slider', $updatedMediaName);
            }
        } 
        elseif ($mediaType === 'video' && $this->request->getFile('slider_image')) {
            $videoFile = $this->request->getFile('slider_image');
            if ($videoFile->isValid() && !$videoFile->hasMoved()) {
                if ($oldslider['slider_image'] && file_exists('public/admin/assets/uploads/slider/' . $oldslider['slider_image'])) {
                    unlink('public/admin/assets/uploads/slider/' . $oldslider['slider_image']);
                }
                $updatedMediaName = $videoFile->getRandomName();
                $videoFile->move('public/admin/assets/uploads/slider', $updatedMediaName);
            }
        }
        $sliderstatus = $this->request->getPost('status');
        $data_save = [
            "slider_image" => $updatedMediaName, 
            "status" => $sliderstatus,
            "updated_at" => date("Y-m-d H:i:s")
        ];
    
        $slidermodel->update($id, $data_save);
        return redirect()->route('admin-sliderlist');
    }
    
    public function admin_deleteslider($id = null){
        $slidermodel = new SliderModel();
        $slidermodel->where('id', $id)->delete();
        return redirect()->route('admin-sliderlist');
    }
    
    public function admin_contactus(){
        return view('admin/addcontact');
    }
    
    public function storecontact(){
        $contactmodel = new AdmincontactModel();
        $phone = $this->request->getPost('phone');
        $email = $this->request->getPost('email');
        $address = $this->request->getPost('address');
        $status = $this->request->getPost('status');
        $data_save = [
            "phone" => $phone, 
            "email" => $email,
            "address" => $address,
            "status" => $status,
        ];
        $contactmodel->insert($data_save);
        return redirect()->to('admin-contactlist');   
    }
    
    public function admin_contactlist($page = 1)
    {
        $contactmodel = new AdmincontactModel();
        $data['adcontact'] = $contactmodel->findAll();
        
        $perPage = 10;
        $totalRows = $contactmodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);

        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        return view('admin/contactlist',$data);
    }
    
    public function admin_contactnewlist($page = 1)
    {
        $contactmodel = new AdmincontactModel();
        $data['adcontact'] = $contactmodel->findAll();
        
        $perPage = 10;
        $totalRows = $contactmodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);

        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        return view('admin/contactlist',$data);
    }
    
    public function admin_editcontact($id = null)
    {   
        $contactmodel = new AdmincontactModel();
        $data['edcontact'] = $contactmodel->where('id', $id)->get()->getResult();
        return view('admin/editcontact',$data);
    }
    
    public function admin_updatecontact($id = null)
    {
        $contactmodel = new AdmincontactModel();
        $phone = $this->request->getPost('phone');
        $email = $this->request->getPost('email');
        $address = $this->request->getPost('address');
        $status = $this->request->getPost('status');
        $data_save = [
            "phone" => $phone, 
            "email" => $email,
            "address" => $address,
            "status" => $status,
        ];
        $contactmodel->update($id, $data_save);
        return redirect()->route('admin-contactlist');
    }
    
    public function admin_deletecontact($id = null){
        $contactmodel = new AdmincontactModel();
        $contactmodel->where('id', $id)->delete();
        return redirect()->route('admin-contactlist');
    }
    
    public function admin_aboutlist($page = 1)
    {
        $aboutmodel = new AboutusModel();
        $data['about'] = $aboutmodel->findAll();
        
        $perPage = 10;
        $totalRows = $aboutmodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);

        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;

        return view('admin/aboutlist',$data);
    }
    
    public function admin_aboutnewlist($page = 1)
    {
        $aboutmodel = new AboutusModel();
        $data['about'] = $aboutmodel->findAll();
        
        $perPage = 10;
        $totalRows = $aboutmodel->countAllResults();
        $totalPages = ceil($totalRows / $perPage);

        $offset = ($page - 1) * $perPage;
        $db = \Config\Database::connect();
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;

        return view('admin/aboutlist',$data);
    }
    
    public function admin_aboutus(){
        return view('admin/about');
    }
    
    public function storeabout() {
        $aboutmodel = new AboutusModel();
        if ($this->request->getFile('about_image')) {
            $file = $this->request->getFile('about_image');
            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $pathInfo = pathinfo($imageName);
                $filename = $pathInfo['filename'];
                $extension = $pathInfo['extension'];
                $file->move('public/admin/assets/uploads/about', $imageName);
                $aboutImage = $filename . '.' . $extension;
            } 
        }
        $aboutimage = isset($aboutImage) ? $aboutImage : null;
        $aboutdes = $this->request->getPost('about_des');
        $data_save = [
            "image" => $aboutimage,
            "aboutdesc" => $aboutdes, 
            "status" => 1,
        ];
        $data_save["created_at"] = date("Y-m-d H:i:s");
        $data_save["updated_at"] = date("Y-m-d H:i:s");
        $aboutmodel->insert($data_save);
        return redirect()->to('admin-aboutlist');
    }
    
    public function admin_editabout($id = null)
    {   
        $aboutmodel = new AboutusModel();
        $data['edabout'] = $aboutmodel->where('id', $id)->get()->getResult();
        return view('admin/editabout',$data);
    }
    
    public function admin_updateabout($id = null)
    {
        $aboutmodel = new AboutusModel();
        $aboutdes = $this->request->getPost('about_des');
        $oldAbout = $aboutmodel->find($id);
        // print_r($oldAbout);exit;
        $updatedImageName = $oldAbout['image']; 
        // $aboutimage = $this->request->getFile('about_image');
        // if ($aboutimage->isValid() && !$aboutimage->hasMoved())
        // {
        //     if ($oldAbout['about_image'] && file_exists('public/admin/assets/uploads/about/' . $oldAbout['about_image'])) {
        //         unlink('public/admin/assets/uploads/about/' . $oldAbout['about_image']);
        //     }
        //     $updatedImageName = $aboutimage->getRandomName();
        //     $aboutimage->move('public/admin/assets/uploads/about', $updatedImageName);
        // }
        
        // $updatedImageName = '';
        if (!empty($oldAbout) && array_key_exists('about_image', $oldAbout)) {
            $updatedImageName = $oldAbout['about_image'];
        } 
        $aboutimage = $this->request->getFile('about_image');
        if ($aboutimage->isValid() && !$aboutimage->hasMoved())
        {
            if ($oldAbout && array_key_exists('about_image', $oldAbout) && file_exists('public/admin/assets/uploads/about/' . $oldAbout['about_image'])) {
                unlink('public/admin/assets/uploads/about/' . $oldAbout['about_image']);
            }
            $updatedImageName = $aboutimage->getRandomName();
            $aboutimage->move('public/admin/assets/uploads/about', $updatedImageName);
        }
        $data_save = [
            "image" => $updatedImageName,
            "aboutdesc" => $aboutdes, 
        ];
        $data_save["updated_at"] = date("Y-m-d H:i:s");
        $aboutmodel->update($id, $data_save);
        return redirect()->route('admin-aboutlist');
    }

    public function admin_deleteabout($id = null){
        $aboutmodel = new AboutusModel();
        $aboutmodel->where('id', $id)->delete();
        return redirect()->route('admin-aboutlist');
    }
    
    public function orderinvoice($id = null){
        $db = \Config\Database::connect();
        $query = "SELECT o.*, o.order_id as orderid, od.*, od.id as odrdetail_id, sa.* 
            FROM orders as o LEFT JOIN order_details as od ON od.order_id = o.id 
            LEFT JOIN shipping_address as sa ON sa.fkorder_id = o.id WHERE o.id = ?";
        $order = $db->query($query, [$id]); 
        $data['orderinvoice'] = $order->getResult();
        // print_r($data);exit;
        return view('admin/orderinvoice', $data);
    }

    public function htmlToPDF($id) {
        $db = \Config\Database::connect();
        // Query to fetch order details
        $query = "SELECT o.*, o.order_id as orderid, od.*, od.id as odrdetail_id, sa.* 
            FROM orders as o 
            LEFT JOIN order_details as od ON od.order_id = o.id 
            LEFT JOIN shipping_address as sa ON sa.fkorder_id = o.id 
            WHERE o.id = ?";
        $order = $db->query($query, [$id]); 
        $data['orderinvoice'] = $order->getResult();
        
        // Check if order exists
        if (empty($data['orderinvoice'])) {
            throw new \Exception("Order not found");
        }
        
        // Convert image to base64
        function base64_encode_image($filename) {
            if ($filename) {
                $imageType = pathinfo($filename, PATHINFO_EXTENSION);
                $imageData = file_get_contents($filename);
                $base64 = 'data:image/' . $imageType . ';base64,' . base64_encode($imageData);
                return $base64;
            }
            return null;
        }
        
        $imageBase64 = base64_encode_image('public/images/main-logo.jpg');
    
        // HTML content with embedded PHP data
        $html = '
        <!doctype html>
        <html class="no-js" lang="">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>Birthday n Box</title>
                <meta name="description" content="Birthday n Box">
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
                <link rel="shortcut icon" href="' . base_url('public/images/main-logo.jpg') . '">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 0; }
                    .container { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 20px; }
                    .invoice-wrapper { background: #FFF; border: 1px solid #CDD3E2; box-shadow: 0px 0px 1px #CCC; padding: 20px; border-radius: 2px; page-break-inside: avoid; }
                    .logo { text-align: center; margin-top: 10px; }
                    .logo img { width: 30%; height: auto; max-width: 200px; }
                    .payment-info, .payment-details, .line-items { margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd; }
                    .text-right { text-align: right; }
                    .text-center { text-align: center; }
                    .text-start { text-align: left; }
                    .table { width: 100%; margin-bottom: 1rem; color: #212529; border-collapse: collapse; }
                    .table th, .table td { border: 1px solid #dee2e6; padding: .75rem; vertical-align: top; }
                    .table th { background-color: #f2f2f2; }
                    .table-striped tbody tr:nth-of-type(odd) { background-color: rgba(0,0,0,.05); }
                    .btn-primary { display: inline-block; background-color: #007bff; color: #fff; border: none; padding: 10px 20px; border-radius: 4px; text-decoration: none; }
                    .btn-primary:hover { background-color: #0056b3; }
                    @media print { .invoice-wrapper { page-break-inside: avoid; } }
                </style>
            </head>
            <body>
                <section>
                    <div class="receipt-content">
                        <div class="container">
                            <div class="invoice-wrapper">
                                <div class="logo">
                                    <img src="' . $imageBase64 . '" alt="Logo" style="width: 30%;height: 75px;">
                                </div>
                                <div style="display: table; width: 100%;">
                                    <div style="display: table-row;">
                                        <div style="display: table-cell; width: 50%; vertical-align: top;">
                                            <strong>Order Id:</strong>' . $data['orderinvoice'][0]->orderid . '<br>
                                        </div>
                                        <div style="display: table-cell; width: 50%; vertical-align: top; text-align: right;">
                                            <strong>Order Date:</strong> ' . date('d-m-Y', strtotime($data['orderinvoice'][0]->created_at)) . ' <strong>|</strong>
                                            <strong>Order Time:</strong> ' . date('H:i:s', strtotime($data['orderinvoice'][0]->created_at)) . '
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div style="display: table; width: 100%;">
                                    <div style="display: table-row;">
                                        <div style="display: table-cell; width: 50%; vertical-align: top;">
                                            <strong>Address:</strong><br>
                                            <p>' . $data['orderinvoice'][0]->address . '<br>' .
                                                $data['orderinvoice'][0]->area . '<br>' .
                                                $data['orderinvoice'][0]->street . '<br>' .
                                                $data['orderinvoice'][0]->city . ',' . $data['orderinvoice'][0]->state . '-' . $data['orderinvoice'][0]->pincode . '</p>
                                        </div>
                                        <div style="display: table-cell; width: 50%; vertical-align: top; text-align: right;">
                                            <strong>User Details</strong><br>
                                            <div>Name : ' . $data['orderinvoice'][0]->first_name . ' ' . $data['orderinvoice'][0]->last_name . '</div>
                                            <div>Email : ' . $data['orderinvoice'][0]->email . '</div>
                                            <div>Phone : ' . $data['orderinvoice'][0]->phone . '</div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top: 20px;">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">Product Name</th>
                                                    <th style="text-align: center;">Product Kg</th>
                                                    <th style="text-align: center;">Product Quantity</th>
                                                    <th style="text-align: center;">Payment Method</th>
                                                    <th style="text-align: center;">Product Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                                foreach ($data['orderinvoice'] as $key => $value) {
                                                    $html .= '<tr>
                                                                <td style="text-align: left;">' . $value->product_name . '</td>
                                                                <td style="text-align: left;">' . $value->product_kg . '</td>
                                                                <td style="text-align: left;">' . $value->product_quantity . '</td>
                                                                <td style="text-align: left;">' . $value->paymethod . '</td>
                                                                <td style="text-align: left;">' . $value->product_price . '</td>
                                                    </tr>';
                                                }
        
                                                $html .= '<tr>
                                                    <td colspan="5"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5">
                                                        <div style="font-size: 16px;">Total: <span>' . $data['orderinvoice'][0]->totalamount . '</span></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </body>
        </html>';
        // Initialize Dompdf
        $first_name = $data['orderinvoice'][0]->first_name;
        $last_name = $data['orderinvoice'][0]->last_name;
        $random_number = $id;
        $pdf_file_name = $random_number . '_' . $first_name . '_' . $last_name;
        $pdf_name = $pdf_file_name . ".pdf";
        
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->set_option('isHtml5ParserEnabled', true);
        $dompdf->set_option('isRemoteEnabled', true);
        $dompdf->loadhtml($html);
        $dompdf->setpaper('A4', 'landscape');
        $x          = 790;
        $y          = 1000;
        $text       = "{PAGE_NUM} of {PAGE_COUNT}";
        $font       = $dompdf->getFontMetrics()->get_font('Helvetica', 'normal');
        $size       = 10;
        $color      = array(0, 0, 0);
        $word_space = 0.0;
        $char_space = 0.0;
        $angle      = 0.0;
        $dompdf->getCanvas()->page_text($x,$y,$text,$font,$size,$color,$word_space,$char_space,$angle);

        $pdfFile = $dompdf->render();
        $fileatt = $dompdf->output();
        $filename = $pdf_name;
        $encoding = 'base64';
        $type = 'application/pdf';
        $directory = 'public/admin/assets/orderpdf';
        $filePath = $directory . '/' . $filename;
        //inserting pdf in orderpdf folder
        file_put_contents($filePath, $fileatt);
        header("location: ".base_url()."/".$filePath);
    }
    
}
 

<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ProductModel;
use App\Models\Product_FlavourModel;
use App\Models\CategoryModel;
use App\Models\CartModel;
use App\Models\ProductpriceModel;
use App\Models\ProductimagesModel;
use App\Models\OrderModel;
use App\Models\ContactModel;
use App\Models\AdmincontactModel;
use App\Models\ShippingaddressModel;
use App\Models\SliderModel;
use App\Models\RatingModel;
use App\Models\OrderdetailsModel;
use App\Models\AboutusModel;
use App\Models\OrderlistModel;

use CodeIgniter\I18n\Time;
use Codeigniter\Email\Email;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Config\Razorpay;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use CodeIgniter\Session\Session;

class Home extends BaseController
{
    protected $instagramAppId = '750498760614630';
    protected $instagramAppSecret = '455520ac4f258c2754a3e405fb78f670';
    protected $accessToken = 'IGQWROMTFPNTJCeVlfOC1YOG1HWS11aTZAjRWI3d1JGVi1sRXlpb0oyTllteWVsUVBYTkFfUTNucFhFQmVwQVhRckVzb192VTA2TE5acGJIcWZATZAnFCZAEo4dTBxT0xuMzNhUy1qRk9EME9sLVdzSmdySFJnQW9OZA2sZD';
    // protected $accessToken = 'IGQWRPclR4bEVDNTNIbGhuUVRmZADRkMDNIdF80b1dqTlF1cWt1WXFWNFp3N3Fxdks3dkVycW5rcVE5Ylc2TmJ3TjJkaFp4NDhyRVZAEX2pmWlFKOENEUFFLSEtzQmFuRjNwRlNiNEJLMTRMMEtHamRZAb0prdXFVcFEZD';

    public function user_login(){
        return view('user/otplogin');
        // return view('user/login');
    }
    
    public function mobile_login (){
        return view('user/otplogin');
    }
    //nilesh code
    public function send_otp()
    {
        // echo "he";exit;
        $session = session();
        $phone = $this->request->getPost('phone');
        $user_model = new UserModel();
        $user = $user_model->where("contact", $phone)->find();
        if (empty($user)) { 
            return $this->response->setStatusCode(400)->setBody('Please enter a correct phone number.');
        }
        else if(!empty($user)){
            if (!preg_match('/^[0-9]{10}$/', $phone)) {
                return $this->response->setStatusCode(400)->setBody('Please enter a correct phone number.');
            }
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://cpaas.messagecentral.com/verification/v2/verification/send?countryCode=91&customerId=C-3FD4BF6EC1E3460&flowType=SMS&mobileNumber='.$phone);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'authToken: eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJDLTNGRDRCRjZFQzFFMzQ2MCIsImlhdCI6MTcyMTE5MzQ5OCwiZXhwIjoxODc4ODczNDk4fQ.xvqwTpnL6gyq25IEU7Pp7zzz83zuYo7_47OjcXB154HJA-wXf8s27Dxe2SmyKhWg6D76bibT8gJtoL6NWN-zPg',
            ]);
            
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            
            $response = curl_exec($ch);
            // print_r($response);exit;
            curl_close($ch);
            $response =json_decode($response);
            // print_r($response);exit;
            $data = $response->data;
            // print_r($data);exit;
            $verificationId = $data->verificationId;
            $user_model = new UserModel();
            $user_model->where('contact',$phone)->set('otp_verification_id', $verificationId)->update();
        }
        
        
        // if(!empty($user)){
        //     if (!preg_match('/^[0-9]{10}$/', $phone)) {
        //         return $this->response->setStatusCode(400)->setBody('Invalid phone number');
        //     }
        //     $ch = curl_init();
        //     curl_setopt($ch, CURLOPT_URL, 'https://cpaas.messagecentral.com/verification/v2/verification/send?countryCode=91&customerId=C-B4495680AB134CF&flowType=SMS&mobileNumber='.$phone);
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        //     curl_setopt($ch, CURLOPT_HTTPHEADER, [
        //         'authToken: eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJDLUI0NDk1NjgwQUIxMzRDRiIsImlhdCI6MTcxNjg4OTM5OCwiZXhwIjoxODc0NTY5Mzk4fQ.1Hip3EiiKdZCmPKRHw-Vlw3UWrldwHFZzhWuOHFqmIMdKzg-_HD0xPIYH7sLajbwukb-ekx3GM6zCrmbLEYnRQ',
        //     ]);
        //     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            
        //     $response = curl_exec($ch);
            
        //     curl_close($ch);
        //     $response =json_decode($response);
            
        //     $data = $response->data;
        //     $verificationId = $data->verificationId;
        //     $user_model = new UserModel();
        //     $user_model->where('contact',$phone)->set('otp_verification_id', $verificationId)->update();
        // }else{
        //     $session->setFlashdata('error', 'Please check mobile number is registered or not');
        //     return redirect()->to('mobile_login');
        // }
    } 
    
    public function verify_otp()
    {
        $order_list_model = new OrderlistModel();
        $session = session();
        $phone = $this->request->getPost('phone');
        $user_otp = $this->request->getPost('user_otp');
        $user_model = new UserModel();
 
        $user = $user_model->where("contact", $phone)->first();
        // print_r($user);exit;
        if (!$user) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Phone number not found']);
        }

        $user_id = $user["user_id"];
        $otp_verification_id = $user["otp_verification_id"];
        // echo $otp_verification_id;exit;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cpaas.messagecentral.com/verification/v2/verification/validateOtp?countryCode=91&mobileNumber='.$phone.'&verificationId='.$otp_verification_id.'&customerId=C-3FD4BF6EC1E3460&code='.$user_otp);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'authToken: eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJDLTNGRDRCRjZFQzFFMzQ2MCIsImlhdCI6MTcyMTE5MzQ5OCwiZXhwIjoxODc4ODczNDk4fQ.xvqwTpnL6gyq25IEU7Pp7zzz83zuYo7_47OjcXB154HJA-wXf8s27Dxe2SmyKhWg6D76bibT8gJtoL6NWN-zPg',
        ]);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        
        
        $response = curl_exec($ch);
        // print_r($response);exit;
        curl_close($ch);
        $response = json_decode($response);
        $data = $response->data;
        $verificationId = $data->verificationId;
        $mobileNumber = $data->mobileNumber;

        if ($response->responseCode == 200 && $phone == $mobileNumber) {
            // echo $response->responseCode;
            if($verificationId == $otp_verification_id){
                // $data = [
                //     'status' => 'success',
                //     'id' => $user_id, 
                //     'otp_verification_id' => $otp_verification_id,
                //     'isSignedIn' => TRUE
                //     // 'redirect_url' => '/', 
                // ];
                // $session->set($data);
                
                $orderline_data = $order_list_model->where("user_id", $user_id)->first();
                // print_r($orderline_data);exit;
                if ($orderline_data && isset($orderline_data["session_data"])) {
                    $data = [
                        'status' => 'success',
                        'id' => $user_id,
                        'otp_verification_id' => $otp_verification_id,
                        'isSignedIn' => TRUE,
                        'product' => json_decode($orderline_data["session_data"], true),
                    ];
                } else {
                    $data = [
                        'status' => 'success',
                        'id' => $user_id,
                        'otp_verification_id' => $otp_verification_id,
                        'isSignedIn' => TRUE,
                        'product' => [], 
                    ];
                }
                $session->set($data);
                // Check if there is a stored redirect URL
                // if ($session->has('redirect_url')) {
                //     $redirect_url = $session->get('redirect_url');
                //     $session->remove('redirect_url');
                //     return redirect()->to($redirect_url);
                // }
                $redirect_url = base_url('/'); 
                $data['redirect_url'] = $redirect_url;
                return $this->response->setJSON($data);
            }else{
                $session->setFlashdata('error', 'Please check mobile number is registered or not');
                return redirect()->to('mobile_login');
            }
        } elseif($response->responseCode == 702){
            $data = [
                'status' => 'failed',
            ];
            $session->set($data);
            $redirect_url = base_url('mobile_login'); 
            $data['redirect_url'] = $redirect_url;
            return $this->response->setJSON($data);

        }
    }

    public function login_action(){
        $session = session();
        $model = new UserModel();
        $order_list_model = new OrderlistModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $encrypt_password =  md5($password);
        $data = $model->where('email', $email)->first();
        if($data && !empty($data)) {
            $stored_password = $data['password'];
            if($encrypt_password == $stored_password){
                $orderline_data = $order_list_model->where("user_id", $data['user_id'])->first();
                
                if ($orderline_data && isset($orderline_data["session_data"])) {
                    $session_data = [
                        'id' => $data['user_id'],
                        'email' => $data['email'],
                        'isSignedIn' => TRUE,
                        'product' => json_decode($orderline_data["session_data"], true),
                    ];
                } else {
                    $session_data = [
                        'id' => $data['user_id'],
                        'email' => $data['email'],
                        'isSignedIn' => TRUE,
                        'product' => [], 
                    ];
                }

                // print_r($session_data);
                // exit;
                $session->set($session_data);
                // Check if there is a stored redirect URL
                if ($session->has('redirect_url')) {
                    $redirect_url = $session->get('redirect_url');
                    $session->remove('redirect_url');
                    return redirect()->to($redirect_url);
                }
            
                return redirect()->to('/');
            }else{
                $session->setFlashdata('error', 'wrong email or password.');
                return redirect()->to('user_login');
            }
        }else{
            $session->setFlashdata('error', 'wrong email or password.');
            return redirect()->to('user_login');
        }
    }
    
    public function user_register(){
        return view('user/register');
    }
    // public function user_store(){
    //     helper(['form']);
    //     $model = new UserModel();
    //     $db = \Config\Database::connect();
    //     $firstname = $this->request->getPost('first_name');
    //     $lastname = $this->request->getPost('last_name');
    //     $email = $this->request->getPost('email');
    //     $user_email = $this->request->getPost('email');
    //     $contact = $this->request->getPost('contact');
    //     $password = $this->request->getPost('password');
    //     $security_string = __randomString("ALPHANUM", 100);
    //     $encrypt_password =  md5($password);
    //     $rules = [
    //         'email' => [
    //             'rules' => 'required|valid_email|is_unique[users.email]',
    //             'errors' => [
    //                 'required' => 'Email is required.',
    //                 'valid_email' => 'Please enter a valid email address.',
    //                 'is_unique' => 'This email is already taken. Please choose another one.'
    //             ]
    //         ],
    //         'contact' => [
    //             'rules' => 'required|is_unique[users.contact]|numeric|min_length[10]|max_length[10]',
    //             'errors' => [
    //                 'required' => 'Mobile Number is required.',
    //                 'is_unique' => 'This mobile number is already taken. Please choose another one.',
    //                 'numeric' => 'The mobile number must contain only digits.',
    //                 'min_length' => 'The mobile number must be exactly 10 digits.',
    //                 'max_length' => 'The mobile number must be exactly 10 digits.'
    //             ]
    //         ],

    //     ];

    //     if(!$this->validate($rules)){
    //         $data['validation'] = $this->validator; 
    //         return view('user/register', $data);
    //     }
    //     $data_save = [
    //         "first_name" => $firstname,
    //         "last_name" => $lastname,
    //         "email" => $email,
    //         "contact" => $contact,
    //         "password" => $encrypt_password,
    //         "security_string" => $security_string,
    //     ];
        
    //     $data_save["created_at"] = date("Y-m-d H:i:s");
    //     $data_save['created_by'] = __get__session('user_id');
        
    //     if ($model->insert($data_save)) {
            
    //         // $smsSent = $this->sendSMS($contact, $firstname);

    //         $email_template = view('user/email_templates/registration_success', [
    //             'first_name' => $firstname,
    //             'last_name' => $lastname
    //         ]);
    //         $adminemail_template = view('user/email_templates/adminmsg_registration_success', [
    //             'first_name' => $firstname,
    //             'last_name' => $lastname
    //         ]);
            
    //         require_once "vendor/autoload.php";
    //         $mailUser = new PHPMailer(true);
    //         $mailUser->CharSet = "UTF-8";
    //         $mailUser->IsSMTP();
    //         $mailUser->SMTPAuth = true;
    //         $mailUser->SMTPSecure = "ssl";
    //         $mailUser->Host = "smtp.gmail.com";
    //         $mailUser->Port = 465;
    //         $mailUser->Username = "nilesh@techflux.in";
    //         $mailUser->Password = "nlkemwcpbsbohkhx";
    //         $mailUser->setFrom('nilesh@techflux.in', 'Birthday n Box');
    //         $mailUser->addAddress($email);
    //         $mailUser->Subject = 'Thank You For Registration Successful';
    //         $mailUser->msgHTML($email_template);
    //         $userEmailSent = $mailUser->send();

    //         // send mail to admin
    //         $mailAdmin = new PHPMailer(true);
    //         $mailAdmin->CharSet = "UTF-8";
    //         $mailAdmin->IsSMTP();
    //         $mailAdmin->SMTPAuth = true;
    //         $mailAdmin->SMTPSecure = "ssl";
    //         $mailAdmin->Host = "smtp.gmail.com";
    //         $mailAdmin->Port = 465;
    //         $mailAdmin->Username = "nilesh@techflux.in"; 
    //         $mailAdmin->Password = "nlkemwcpbsbohkhx"; 
    //         $mailAdmin->setFrom('admin@gmail.com', 'Birthday n Box');
    //         $mailAdmin->addAddress('nilesh@techflux.in'); 
    //         $mailAdmin->Subject = 'New User Registration';
    //         $mailAdmin->msgHTML($adminemail_template);
    //         // $messageAdmin = [
    //         //     'subject' => 'New User Registration',
    //         //     'message' => "A new user, " . $firstname . " " . $lastname . ", has just registered."
    //         // ];
    //         // $mailAdmin->Subject = $messageAdmin['subject'];
    //         // $mailAdmin->Body = $messageAdmin['message'];
    //         $adminEmailSent = $mailAdmin->send();
    //         return redirect()->to('user_login');
    //     } 
    // }

    public function check_already_exist(){
        
        $user_model = new UserModel();
    
        $email = $this->request->getPost('email');
        $contact = $this->request->getPost('contact');
    
        $json = [];
    
        if ($email) {
            $find_data_email = $user_model->where('email', $email)->findAll();
            if (!empty($find_data_email)) {
                $json['msg'] = 'This email is already taken. Please choose another.';
                $json['variable'] = 'email';
            }
        }
        
        if ($contact) {
            $find_data_contact = $user_model->where('contact', $contact)->findAll();
            if (!empty($find_data_contact)) {
                $json['msg'] = 'Contact number already existed. Please choose another.';
                $json['variable'] = 'contact';
            }
        }
        
        if (empty($json)) {
            $json['msg'] = 'Available';
            $json['variable'] = 'none';
        }
    
        return $this->response->setJSON($json);
    }

    
    // if ($this->request->isAJAX()) {
    //         echo json_encode($data);
    //     } else {
    //         return view('user/prod_list', $data);
    //     }
    public function user_store() {
    helper(['form']);
    $model = new UserModel();
    $db = \Config\Database::connect();
    $firstname = $this->request->getPost('first_name');
    $lastname = $this->request->getPost('last_name');
    $email = $this->request->getPost('email');
    $contact = $this->request->getPost('contact');
    $password = $this->request->getPost('password');
    $security_string = __randomString("ALPHANUM", 100);
    $encrypt_password = md5($password);

    $data_save = [
        "first_name" => $firstname,
        "last_name" => $lastname,
        "email" => $email,
        "contact" => $contact,
        "password" => $encrypt_password,
        "security_string" => $security_string,
        "created_at" => date("Y-m-d H:i:s"),
        'created_by' => __get__session('user_id'),
    ];
    $data_ins = $model->insert($data_save);

    if ($data_ins) {
        $json = [
            "success" => true,
            "message" => "Thank you for registering with us!"
        ];
        $user_subject = 'Thank You for Registering with Us';
        $user_email_template = "<b>Welcome to Birthday n Box</b><br><br>Hi $firstname $lastname, thank you for joining us!<br>";
        $admin_email = "devashree@techflux.in";
        $admin_sub = "New User Registration";
        $admin_message = "<b>New User Registered</b><br><br>A new user, $firstname $lastname, has registered.<br>";

        $this->php_mail_code($admin_email, $admin_sub, $admin_message);
        $this->php_mail_code($email, $user_subject, $user_email_template);

        return $this->response->setJSON($json);
    } else {
        return $this->response->setJSON([
            "success" => false,
            "message" => "Registration failed. Please try again."
        ]);
    }
}



    public function php_mail_code($email, $subject, $message) {
    $db = \Config\Database::connect();
    require_once "vendor/autoload.php";
    $sql = $db->query("select * from mail_template where id = 2");
    $res = $sql->getFirstRow();
    $html = $res->body;

    $mailUser = new PHPMailer(true);
    $mailUser->CharSet = "UTF-8";
    $mailUser->IsSMTP();
    $mailUser->SMTPAuth = true;
    $mailUser->SMTPSecure = "ssl";
    $mailUser->Host = "smtp.gmail.com";
    $mailUser->Port = 465;
    $mailUser->Username = "prince@techflux.in";
    $mailUser->Password = "yptgbhddxuzmyedc";
    $mailUser->setFrom('prince@techflux.in', 'Birthday n Box');
    $mailUser->addAddress($email);
    $mailUser->Subject = $subject;
    $logo = base_url('public/images/main-logo.jpg');
    $html = str_replace('%logo%', $logo, $html);
    $html = str_replace('%body%', $message, $html);
    $mailUser->msgHTML($html);

    // Send the email
    $mailUser->send();
}


    public function forget_password(){
        return view('user/forget_password');
    }
    
    public function sendpasswordresetlink(){
        $session = session();
        $email = $this->request->getPost('email');
        $userModel = new UserModel();

        $user = $userModel->where('email', $email)->first();
        if ($user !== null) {
            $id = $user['user_id'];
                $otp = rand(100000, 999999);
                $session = session();
                $session->set('otp', $otp);
                // Calculate and set the expiration time in the session.
                $expiration = Time::now()->addMinutes(15);
                $session->set('otp_expiration', $expiration);
    
                $otpemail_template = view('user/email_templates/otpsuccess', [
                    'otp' => $otp,
                ]);   

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
                $mailUser->msgHTML($otpemail_template);

                // $messageUser = [
                //     'subject' => 'Password Reset OTP',
                //     'message' => "Your OTP is: $otp", 
                // ];
                // $mailUser->Subject = $messageUser['subject'];
                // $mailUser->Body = $messageUser['message'];
    
                $userEmailSent = $mailUser->send();
                if($userEmailSent){
                    $session->setFlashdata('success', 'You have sent OTP to your email address.');
                    return redirect()->to('otpverify?id=' . $id);
                }
        }else{
            $session->setFlashdata('error', 'wrong email address.');
            return redirect()->to('forget_password');
        }
    }
  
    public function otpverify(){
        return view('user/otpverify');
    }
    
    public function verify(){
        $session = session();
        $enteredOTP = 
            $this->request->getVar('first') .
            $this->request->getVar('second') .
            $this->request->getVar('third') .
            $this->request->getVar('fourth') .
            $this->request->getVar('fifth') .
            $this->request->getVar('sixth');
        $userid = $this->request->getVar('userid'); 
        $session = session();
        $storedOTP = $session->get('otp');
        if ($enteredOTP == $storedOTP) {
            return redirect()->to("resetpassword/$userid"); 
        } else {
            $session->setFlashdata('error', 'OTP is invalid');
            return redirect()->to('otpverify?id=' . $userid);
        }
    }
    
    public function resetpassword($userid = null) {
        return view('user/resetpassword', ['userid' => $userid]);
    }
    
    public function updateresetpassword()
    {
        $session = session(); 
        $newPassword = $this->request->getPost('password');
        $newencrypt_password =  md5($newPassword);
        $confirmedPassword = $this->request->getPost('confpassword');
        $userid = $this->request->getPost('userid');
        if ($newPassword === $confirmedPassword) {
            $userModel = new UserModel();
            $data = [
                'password' => $newencrypt_password
            ];
            $userModel->update($userid, $data);
            $session->setFlashdata('success', 'Password reset successfully.');
            return redirect()->to('user_login');
        } else {
            return 'Passwords do not match';
        }
    }
    
    public function user_logout(){
        $user_id = __get__session("id");
        if (!$user_id) {
            return redirect("/");
        }
        __destroy__session();
        return redirect()->to('/');
    }
    
    public function user_profile(){
        $db = \Config\Database::connect();
        $userModel = new UserModel();
        $user_id = __get__session("id");
        $userdetail = $userModel->where('user_id', $user_id)->get();
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $hproduct = $db->query("SELECT * FROM product WHERE status = '1'");
        $data['userdetails'] = $userdetail->getResult();
        $data['category'] = $category->getResultArray();
        $data['hproduct'] = $hproduct->getResultArray();
        return view('user/user_profile',$data);
    }
    
    public function updateuserprof($id){
        $userModel = new UserModel();
        $olduser = $userModel->find($id);
        $oldprofimg = $olduser['profile_img'];
        $newprofimg = $this->request->getFile('profile_img');
        if($newprofimg->isValid() && !$newprofimg->hasMoved()){
            if($olduser['profile_img'] && file_exists('public/admin/assets/uploads/user/' . $olduser['profile_img'])){
                unlink('public/admin/assets/uploads/user/' . $olduser['profile_img']);
            }
            $oldprofimg = $newprofimg->getRandomName();
            $newprofimg->move('public/admin/assets/uploads/user', $oldprofimg);
        }
        $data_save = [
            "profile_img" => $oldprofimg,
        ];
        $data_save["updated_at"] = date("Y-m-d H:i:s");
        $data_save['updated_by'] = __get__session('user_id');
        $userModel->update($id, $data_save);
        return redirect()->to('user_profile');    
    }
    
    public function updateuser($id){

            $userModel = new UserModel();
            $olduser = $userModel->find($id);
            $firstname = $this->request->getPost('first_name');
            $lastname = $this->request->getPost('last_name');
            $email = $this->request->getPost('email');
            $contact = $this->request->getPost('contact');
            $birthdate = $this->request->getPost('birthdate');
            $address = $this->request->getPost('address');
            $pincode = $this->request->getPost('pincode');
            $area = $this->request->getPost('area');
            $city = $this->request->getPost('city');
            // $newprofimg = $this->request->getFile('profile_img');
            // print_r($newprofimg);exit;
            // if($newprofimg->isValid() && !$newprofimg->hasMoved()){
            //     if($olduser['profile_img'] && file_exists('public/admin/assets/uploads/user/' . $olduser['profile_img'])){
            //         unlink('public/admin/assets/uploads/user/' . $olduser['profile_img']);
            //     }
            //     $oldprofimg = $newprofimg->getRandomName();
            //     $newprofimg->move('public/admin/assets/uploads/user', $oldprofimg);
            // }else{
            //     $oldprofimg = $newprofimg->getRandomName();
            //     $newprofimg->move('public/admin/assets/uploads/user', $oldprofimg);
            // }
    
            $data_save = [
                "first_name" => $firstname,
                "last_name" => $lastname,
                // "email" => $email,
                // "profile_img" => $oldprofimg,
                // "contact" => $contact,
                "birthdate" => $birthdate,
                "address" => $address,
                "pincode" => $pincode,
                "area" => $area,
                "city" => $city,
            ];
            $data_save["updated_at"] = date("Y-m-d H:i:s");
            $data_save['updated_by'] = __get__session('user_id');
            $userModel->update($id, $data_save);
            return redirect()->to('user_profile');
        
    }
    
    public function cart_login(){
        // exit;
        return view('cart_login');
    }
    
    public function cart_loginstore(){
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $encrypt_password =  md5($password);
        $data = $model->where('email', $email)->first();
        if($data && !empty($data)) {
            $stored_password = $data['password'];
            if($encrypt_password == $stored_password){
                $session_data = [
                    'id' => $data['user_id'],
                    'email' => $data['email'],
                    'isSignedIn' => TRUE
                ];
                $session->set($session_data);
                return redirect()->to('/');
            }else{
                $session->setFlashdata('error', 'wrong email or password.');
                return redirect()->to('user_login');
            }
        }else{
            $session->setFlashdata('error', 'wrong email or password.');
            return redirect()->to('user_login');
        }
    }
    
    public function search_data_list($search){
        // echo $search;exit;
        $db = \Config\Database::connect();
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $hproduct = $db->query("SELECT * FROM product WHERE status = '1'");
        $data['category'] = $category->getResultArray();
        $data['hproduct'] = $hproduct->getResultArray();
        // $search = "";
        
        $categorymodel = new CategoryModel();

        $sql = "SELECT p.*, pp.*,pi.* FROM product as p 
        inner JOIN product_price as pp ON p.id = pp.product_id
        inner JOIN product_images as pi ON p.id = pi.product_id
        WHERE p.sub_variant = '0'";
        if (!empty($search)) {
            $sql .= " AND (p.product_name LIKE '%$search%')";
        }
        $sql .= " GROUP BY pp.product_id";

        $res = $db->query($sql);
    
        
        $products = $res->getResult();
        $data['product'] = $products;
        $data['search'] = $search;
        if ($this->request->isAJAX()) {
            echo json_encode($data);
        } else {
            return view('user/search_data_list', $data);
        }

}
    
    public function index()
    {
        $productmodel = new ProductModel();
        $categorymodel = new CategoryModel();
        $productimgmodel = new ProductimagesModel();
        $productflvmodel = new Product_FlavourModel();
        $productpricemodel = new ProductpriceModel();
        $slidermodel = new SliderModel();
        
        // Fetching data from Instagram API
        $url = "https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url,permalink&access_token={$this->accessToken}";
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', $url);
        $instagramData = json_decode($response->getBody());
        $latestPosts = array_slice($instagramData->data, 0, 12);
       
        $db = \Config\Database::connect();
        $slider = $db->query("SELECT * FROM slider WHERE status = '1'");
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $hproduct = $db->query("SELECT * FROM product WHERE status = '1'");
        $bestsellerQuery = $db->table('product as p')
        ->select('p.*, pp.*, pc.*, pi.*')
        ->join('product_price as pp', 'p.id = pp.product_id', 'left')
        ->join('product_category as pc', 'p.category_id = pc.id', 'left')
        ->join('product_images as pi', 'p.id = pi.product_id', 'left')
        ->where('p.status', '1')
        ->where('p.bestseller', '1')
        ->groupBy('p.id')
        ->orderBy('p.total_count', 'DESC')
        ->limit(10)
        ->get()
        ->getResultArray();

        $data['bestseller'] = $bestsellerQuery;
        // echo"<pre>"; print_r($data['bestseller']);exit;
        $cakeprod = $db->query("SELECT * FROM product as p 
            LEFT JOIN product_price as pp ON p.id = pp.product_id 
            LEFT JOIN product_category as pc ON p.category_id = pc.id 
            LEFT JOIN product_images as pi ON p.id = pi.product_id
            WHERE pc.category_name != 'Flowers' AND p.status = '1' 
            GROUP BY p.id 
            LIMIT 10");

        $flvprod = $db->query("SELECT * FROM product as p 
            LEFT JOIN product_price as pp ON p.id = pp.product_id 
            LEFT JOIN product_category as pc ON p.category_id = pc.id 
            LEFT JOIN product_images as pi ON p.id = pi.product_id
            WHERE pc.category_name = 'Flowers' AND p.sub_variant = '0' AND p.status = '1' 
            GROUP BY p.id 
            LIMIT 10");
        $data['category'] = $category->getResultArray();
        $data['hproduct'] = $hproduct->getResultArray();
        $data['slider'] = $slider->getResultArray();
        $data['cakeproduct'] = $cakeprod->getResultArray();
        $data['flvproduct'] = $flvprod->getResultArray();
        $data['instagramData'] = $latestPosts; 
        return view('user/index', $data);
    }
    
    public function cakeprodlist($id)
    {
        // echo $id;exit;
        $prices = [];
        $weights = [];
        $filter_is = "";
    
        if ($_POST) {
            // print_r($_POST);
            if (isset($_POST['price'])) {
                $prices = $_POST['price'];
            }
            if (isset($_POST['weight'])) {
                $weights = $_POST['weight'];
            }
            if (isset($_POST['filter'])) {
                $filter_is = $_POST['filter'];
            }
        }
    
        $categorymodel = new CategoryModel();
        $db = \Config\Database::connect();
        $hproduct = $db->query("SELECT * FROM product WHERE status = '1'");
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $data['product_id'] = $id;
        $data['category'] = $category->getResultArray();
        $currentCategoryId = $id;
    
        $sql = "SELECT p.*, pp.*,pi.* FROM product as p 
            inner JOIN product_price as pp ON p.id = pp.product_id
            inner JOIN product_images as pi ON p.id = pi.product_id
            WHERE p.category_id = $id AND p.sub_variant = '0'";
            
            // SELECT p.*, pp.kg, pp.price FROM `product` p inner join product_price pp 
            // ON pp.product_id = p.id 
            // where  p.category_id = 21 and (pp.price BETWEEN 0 and 500 OR pp.price >=2000);";
    
        if (!empty($prices)) {
            $conditions = [];
            foreach ($prices as $price) {
                $parts = explode('-', $price);
                if (count($parts) == 2) {
                    $min_price = $parts[0];
                    $max_price = $parts[1];
                    $conditions[] = "pp.price BETWEEN $min_price AND $max_price";
                } else {
                    $min_price = $parts[0];
                    $conditions[] = "pp.price >= $min_price";
                }
            }
            $sql .= " AND (". implode(' OR ', $conditions). ")";
        }
        $sql .= " GROUP BY pp.product_id";
    // echo $sql;
        $res = $db->query($sql);

    $data['findBreadcumProd'] = ""; 
    $data["filter_set"] = $filter_is;
    
    $products = $res->getResult();
    $new_array_products = $products;
    
    if (!empty($weights)) {
        $new_array_products = [];
        foreach($products as $product){
            $pkg = $product->kg;
            $product_kg_part = preg_split('/(?<=\d)(?=[a-zA-Z])/', $pkg);

            foreach($weights as $weight){
                
                // echo $weight;
                if($weight == "2kg+"){
                    $wgt_part = preg_split('/(?<=\d)(?=[a-zA-Z])/', $weight);
                    // print_r($product_kg_part);exit;
                    // echo $product_kg_part;exit;
                    
                    if($product_kg_part[1] == "kg" && $product_kg_part[0] > $wgt_part[0]){
                        array_push($new_array_products, $product);
                        continue;
                    }
                }else if($weight == "500gm"){
                    array_push($new_array_products, $product);
                    continue;
                }else if($weight == $pkg){
                    array_push($new_array_products, $product);
                    continue;
                }
            }
            
        }
    }
    // print_r($new_array_products);
    $data['product'] = $new_array_products;
    $data['hproduct'] = $hproduct->getResultArray();
    $data['hideWeightFilter'] = $currentCategoryId;

    if ($this->request->isAJAX()) {
        echo json_encode($data);
    } else {
        return view('user/prod_list', $data);
    }
    }

    
    public function flvprodlist()
    {
        return view('user/flvprod_list');
    }


public function viewdetails($id = null)
{
    $db = \Config\Database::connect();

    // Fetch categories
    $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
    $data['category'] = $category->getResultArray();

    // Fetch products and related data
    $hproducts = $db->query("SELECT * FROM product WHERE status = '1'");
    $product = $db->query("SELECT *, p.id as id FROM product p LEFT JOIN product_category pc ON p.category_id = pc.id WHERE p.id = $id");

    $cakeprod = $db->query("SELECT * FROM product as p 
        LEFT JOIN product_price as pp ON p.id = pp.product_id 
        LEFT JOIN product_images as pi ON p.id = pi.product_id
        LEFT JOIN product_category as pc ON p.category_id = pc.id
        WHERE p.status = '1' GROUP BY p.id");

    $prodimg = $db->query("SELECT * FROM product as p
        LEFT JOIN product_images as pi on p.id = pi.product_id
        WHERE p.status = '1' AND p.id = $id");

    // Fetch main product data
    $query = $db->query("SELECT * FROM product as p
        LEFT JOIN product_images as pi on p.id = pi.product_id
        LEFT JOIN product_price as pp ON p.id = pp.product_id 
        WHERE p.status = '1' AND p.id = $id");
    $proddata = $query->getResult();
    $flower_data = $query->getRow(); // This should be an object

    $variant_images = [];
    $new_prd_data = $proddata;
// print_r($query);exit;
    if (empty($flower_data->product_variant) && ($flower_data->flavour_id == 0)) {
        $pr_sql_flower = $db->query("SELECT * FROM product as p 
            LEFT JOIN product_images as pi on p.id = pi.product_id 
            LEFT JOIN product_price as pp ON p.id = pp.product_id 
            WHERE p.status = '1' and p.product_variant != ''");
        $pr_sql_flower_row = $pr_sql_flower->getResultArray();
        foreach ($pr_sql_flower_row as $flower) {
            $varients = explode(",", $flower['product_variant']);
            foreach ($varients as $var_flower_) {
                if ($var_flower_ == $flower_data->product_id) { // Correct usage of object property
                    $new_prd_data = $flower;
                    $flower_data = (object) $flower; // Convert array to object
                    
                    $var_flowers = explode(",", $flower_data->product_variant);

                    foreach ($var_flowers as $var_flower) {
                        // Query to fetch the variant data
                        $pr_sql_flower = $db->query("SELECT pi.*, p.*, pp.* FROM product_images pi 
                            LEFT JOIN product p ON pi.product_id = p.id 
                            LEFT JOIN product_price pp ON pi.product_id = pp.product_id 
                            WHERE pi.product_id = $var_flower");
                        $pr_sql_flower_row = $pr_sql_flower->getRowArray();
                       
                        array_push($variant_images, $pr_sql_flower_row);
                    }
                }
            }
        }
    }

    if (!empty($flower_data->product_variant)) {
        $var_flowers = explode(",", $flower_data->product_variant);
        foreach ($var_flowers as $var_flower) {
            // Query to fetch the variant data
            $pr_sql_flower = $db->query("SELECT pi.*, p.*, pp.* FROM product_images pi 
                LEFT JOIN product p ON pi.product_id = p.id 
                LEFT JOIN product_price pp ON pi.product_id = pp.product_id 
                WHERE pi.product_id = $var_flower");
            $pr_sql_flower_row = $pr_sql_flower->getRowArray();
            array_push($variant_images, $pr_sql_flower_row);
        }
    }
//  print_r($variant_images);exit;
    $data['flower_data'] = $flower_data;
    $data['proddata'] = $new_prd_data;
    $data['variant_images'] = $variant_images;
    $data['product'] = $product->getResult();
    $data['hproduct'] = $hproducts->getResultArray();
    $data['cakeproduct'] = $cakeprod->getResultArray();
    $data['prodimg'] = $prodimg->getResultArray();

    return view('user/view_details', $data);
}


 
    // public function addtosession()
    // {
    //     $session=session();
    //     $db = \Config\Database::connect();
    //     if (!isset($_SESSION["product"])) {
    //         $_SESSION["product"] = [];
    //     }
        
    //     // print_r($_SESSION["product"]);
    //     $id = $this->request->getVar('id');
    //     $product_id = $this->request->getVar('product_id'); 
    //     // checking Product Exist
    //     $ids = array_column($_SESSION["product"], "product_id");
    //     $key = in_array($product_id, $ids) ? array_search($product_id, $ids) : "false";
    //     if($key !== "false"){
    //         $data = [];
    //         return $this->response->setJSON($data);
    //         exit;
    //     } else {
    //         $message = $this->request->getVar('message');
    //         $prod = $db->query("SELECT p.*, pp.*,pi.* FROM product as p 
    //         INNER JOIN product_price as pp ON p.id = pp.product_id
    //         INNER JOIN product_images as pi ON p.id = pi.product_id
    //         WHERE pp.id = $id");
    //         $proddata = $prod->getResult();
    //         $product_name = $proddata[0]->product_name;
    //         $product_image = $proddata[0]->image_name;
    //         $product_quantity = $proddata[0]->product_quantity;
    //         $product_id = $proddata[0]->product_id;
    //         $product_kg = $proddata[0]->kg;
    //         $product_price = $proddata[0]->price;
    //         $data = [
    //             'message' => $message, 
    //             'product_name' => $product_name,
    //             'product_image' => $product_image,
    //             'product_quantity' => $product_quantity,
    //             'product_id' => $product_id,
    //             'product_kg' => $product_kg,
    //             'product_price' => $product_price,
    //         ];
            
    //         $_SESSION["product"][] = $data;
    //         $count=$db->query("SELECT count(*) AS product_count FROM `product` where id= $product_id");
    //         $count_data = $count->getRow();
    //         if ($count_data) {
    //           $data['count'] = $count_data->product_count; 
    //         }
            
    //         return $this->response->setJSON($data);
    //     }
    // }
    
    public function addtosession()
{
    $orderlistmodel = new OrderlistModel();
    $session = session();

    $db = \Config\Database::connect();
    // Ensure $_SESSION["product"] is an array
    if (!isset($_SESSION["product"]) || !is_array($_SESSION["product"])) {
        $_SESSION["product"] = [];
    }
    
    $id = $this->request->getVar('id');
    $user_id = $session->get('id'); // Changed to use session()->get() instead of __get__session()
    $product_id = $this->request->getVar('product_id'); 
    $message = $this->request->getVar('message');

    // Fetch product details from the database
    $prod = $db->query("SELECT p.*, pp.*, pi.* FROM product as p 
        INNER JOIN product_price as pp ON p.id = pp.product_id
        INNER JOIN product_images as pi ON p.id = pi.product_id
        WHERE pp.id = ?", [$id]);
    $proddata = $prod->getResult();

    if (count($proddata) === 0) {
        // Handle case where product is not found
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Product not found.'
        ]);
    }

    $product_name = $proddata[0]->product_name;
    $product_image = $proddata[0]->image_name;
    $product_quantity = $proddata[0]->product_quantity;
    $product_id = $proddata[0]->product_id;
    $product_kg = $proddata[0]->kg;
    $product_price = $proddata[0]->price;

    $exists_in_session = false;
    foreach ($_SESSION["product"] as &$product) {
        if ($product['product_id'] == $product_id && $product['product_kg'] == $product_kg) {
            // Update quantity if product ID and weight match
            $product['product_quantity'] += $product_quantity;
            $exists_in_session = true;
            break;
        }
    }

    // Only add new data if it does not already exist in the session
    if (!$exists_in_session) {
        $new_data = [
            'message' => $message,
            'product_name' => $product_name,
            'product_image' => $product_image,
            'product_quantity' => $product_quantity,
            'product_id' => $product_id,
            'product_kg' => $product_kg,
            'product_price' => $product_price,
        ];
        $_SESSION["product"][] = $new_data;
    }

    $session_data_json = json_encode($_SESSION["product"]);
    $existing_entry = $orderlistmodel->where('user_id', $user_id)->first();

    if ($existing_entry) {
        $id = $existing_entry['id'];
        $update_data = [
            'user_id' => $user_id,
            'session_data' => $session_data_json,
        ];
        $orderlistmodel->update($id, $update_data);
    } else {
        $insert_data = [
            'user_id' => $user_id,
            'session_data' => $session_data_json,
        ];
        $orderlistmodel->insert($insert_data);
    }
}

    
    // public function addtocart()
    // {
    //     $session = session();
    //     $user_id = session()->get('id'); // Corrected session retrieval
    //     $orderlistmodel = new OrderlistModel();
    //     $db = \Config\Database::connect();
    //     $hproducts = $db->query("SELECT * FROM product WHERE status = '1'");
    //     $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
    //     $data['category'] = $category->getResultArray();
    //     helper(['url', 'form']);
    //     $cartQuery = $db->query("SELECT * FROM order_list WHERE user_id = ?", [$user_id]);
    //     $cartItems = $cartQuery->getResultArray();
        
    //     // Store cart items in the session
    //     $session->set('cart_products', $cartItems);
    //     $data['cart_products'] = $session->get('cart_products') ?? [];
        
    //     $data['hproduct'] = $hproducts->getResultArray();
    //     return view('user/addtocart', $data);
    // }
    
    public function addtocart()
    {
        $db = \Config\Database::connect();
        $hproducts = $db->query("SELECT * FROM product WHERE status = '1'");
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $data['category'] = $category->getResultArray();
        helper(['url', 'form']);
        // Get data from databse
        $order_list_model = new OrderlistModel();
        $session = session();
        $orderline = $order_list_model->where("user_id", $session->id)->first();
        $data['cart_products'] = $_SESSION["product"] ?? [];
            
        if($orderline){
            if($orderline["session_data"] != "[]"){
                $data['cart_products'] = json_decode($orderline["session_data"], true);
            }
        }
        
        // print_r($data['cart_products']);exit;
        $data['hproduct'] = $hproducts->getResultArray();
        return view('user/addtocart',$data);
    }
    
    public function updateproductquantity()
    {
        $session = session();
        // print_r($_SESSION["product"]);exit;
        $orderlistmodel = new OrderlistModel();
        $user_id = __get__session("id");
        $request = service('request');
        $product_id = $request->getPost('product_id');
        $product_kg = $request->getPost('product_kg');
        $change_type = $request->getPost('change_type');
        if (!isset($_SESSION["product"])) {
            $_SESSION["product"] = [];
        }
        $exists_in_session = false;
        foreach ($_SESSION["product"] as $key => $item) {
            // ECHO $item;exit;
            // print_r($item);exit;
            if ($item['product_id'] == $product_id && $item['product_kg'] == $product_kg) {
                if ($change_type == 'increment') {
                    $_SESSION["product"][$key]['product_quantity'] += 1;
                } elseif ($change_type == 'decrement') {
                    $_SESSION["product"][$key]['product_quantity'] -= 1;
                    if ($_SESSION["product"][$key]['product_quantity'] < 1) {
                        $_SESSION["product"][$key]['product_quantity'] = 1;
                    }
                }
                $exists_in_session = true;
                $data = $_SESSION["product"][$key];
                $session_data_json = json_encode($_SESSION["product"]);
                // print_r($data);exit;
                $existing_entry = $orderlistmodel->where('user_id', $user_id)->first();
                $id = $existing_entry['id'];
                $update_data = [
                    'user_id' => $user_id,
                    'session_data' => $session_data_json,
                ];
                $orderlistmodel->update($id, $update_data);
                return $this->response->setJSON($data); 
            }
        }
    }

    public function remove_session_product()
    {
        $session = session();
        $orderlistmodel = new OrderlistModel();
        $user_id = __get__session("id");
        $productId = $this->request->getPost('product_id');
        $productWeight = $this->request->getPost('product_weight');
        $productQuantity = $this->request->getPost('product_quantity');
    
        // Retrieve cart products from session
        $cart_products = $_SESSION["product"] ?? [];
        // Flag to track if item was found and removed
        $itemRemoved = false;
        // Loop through cart products to find matching item
        foreach ($cart_products as $key => $product) {
            if ($product['product_id'] == $productId && 
                $product['product_kg'] == $productWeight && 
                $product['product_quantity'] == $productQuantity) {
                // Remove the matching item from the cart products array
                unset($cart_products[$key]);
                $itemRemoved = true;
                // Update the session variable with the modified cart products
                $_SESSION["product"] = $cart_products;
                $session_data_json = json_encode($_SESSION["product"]);
                
                // print_r($_SESSION["product"]);exit;
                $existing_entry = $orderlistmodel->where('user_id', $user_id)->first();
                $id = $existing_entry['id'];
                $update_data = [
                    'user_id' => $user_id,
                    'session_data' => $session_data_json,
                ];
                $orderlistmodel->update($id, $update_data);
                break; // Exit the loop after removing the item
            }
        }
    }
    
    public function about()
    {
        $aboutmodel = new AboutusModel();
        $db = \Config\Database::connect();
        $hproducts = $db->query("SELECT * FROM product WHERE status = '1'");
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $aboutdata = $db->query("SELECT * FROM about_us WHERE status = '1'");
        $data['aboutdata'] = $aboutdata->getResultArray();
        $data['category'] = $category->getResultArray();
        $data['hproduct'] = $hproducts->getResultArray();
        return view('user/about',$data);
    }
    
    public function cancellation_policy(){
        $db = \Config\Database::connect();
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $hproduct = $db->query("SELECT * FROM product WHERE status = '1'");
        $data['category'] = $category->getResultArray();
        $data['hproduct'] = $hproduct->getResultArray();
        return view('user/cancellations_refund_policy',$data);
    }
    
    public function data_security(){
        $db = \Config\Database::connect();
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $hproduct = $db->query("SELECT * FROM product WHERE status = '1'");
        $data['category'] = $category->getResultArray();
        $data['hproduct'] = $hproduct->getResultArray();
        return view('user/data_security',$data);
    }

    public function terms_condition(){

        $db = \Config\Database::connect();
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $hproduct = $db->query("SELECT * FROM product WHERE status = '1'");
        $data['category'] = $category->getResultArray();
        $data['hproduct'] = $hproduct->getResultArray();
        return view('user/terms_and_condition',$data);
    }
    
    public function payment_options(){
 
        $db = \Config\Database::connect();
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $hproduct = $db->query("SELECT * FROM product WHERE status = '1'");
        $data['category'] = $category->getResultArray();
        $data['hproduct'] = $hproduct->getResultArray();
        return view('user/payment_options',$data);
    }
    
    public function blog(): string
    {
        
        return view('user/blog');
    }
    
    public function contact()
    {
        $model = new AdmincontactModel();
        // $data['contact'] = $model->findAll();
        $db = \Config\Database::connect();
        $contact = $db->query("SELECT * FROM admincontact WHERE status = '1'");
        $hproducts = $db->query("SELECT * FROM product WHERE status = '1'");
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $data['category'] = $category->getResultArray();
        $data['hproduct'] = $hproducts->getResultArray();
        $data['contact'] = $contact->getResultArray();
        return view('user/contact',$data);
    }
    
    public function storecontact(){
        $contactmodel = new ContactModel();
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');
        $data_save = [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ];
        $contactmodel->insert($data_save);
        
        $contstore_template = view('user/email_templates/storecontact', [
            'name' => $name,
        ]);   

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
        $mailUser->msgHTML($contstore_template);
        // $messageUser = [
        //     'subject' => 'Thank you for contacting us',
        //     'message' => "Hello $name,\n\nThank you for reaching out to us. We have received your message and will get back to you as soon as possible.\n\nBest regards,\nCake Projects"
        // ];
        // $mailUser->Subject = $messageUser['subject'];
        // $mailUser->Body = $messageUser['message'];
        $userEmailSent = $mailUser->send();
        return redirect()->to('/');
    }
    
    public function checkout(){
       
        $session= session();
        //  print_r($_SESSION);exit;
        $products = $_SESSION['product'];
        
        $price = 0;

        foreach ($products as $product) {
            $total_price = $product['product_quantity'] * $product['product_price'];
            $price += $total_price;
        }
        $data['total_price'] = $price;
        $data['finalTotal'] = $price;
        
        $data['products'] = $products;
        $user_id = __get__session("id");
        $model = new ShippingaddressModel();
        $addressdetail = $model->where('fkuser_id', $user_id)->get();
        $data['addressdetails'] = $addressdetail->getResult();
        $db = \Config\Database::connect();
        $hproducts = $db->query("SELECT * FROM product WHERE status = '1'");
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $data['category'] = $category->getResultArray();
        helper(['url', 'form']);
        $session = session();
        $data['cart_products'] = $_SESSION["product"] ?? [];
        $data['hproduct'] = $hproducts->getResultArray();

        // 9/4/2024
        $updatedPrice = $this->request->getPost('updatedPrice');
        $updatedDiscount = $this->request->getPost('updatedDiscount');
        $updatedTax = $this->request->getPost('updatedTax');
        $finalTotal = $this->request->getPost('finalTotal');
         
        $checkoutData = array(
            'updatedPrice' => $updatedPrice,
            'updatedDiscount' => $updatedDiscount,
            'updatedTax' => $updatedTax,
            'finalTotal' => $finalTotal
        );

        $productImages = [];
        foreach ($data['cart_products'] as $cartProduct) {
            if (isset($cartProduct['product_id'], $cartProduct['product_image'])) {
                $productImages[$cartProduct['product_id']] = $cartProduct['product_image'];
            }
        }

        $data['checkoutData'] = $checkoutData;
        return view('user/checkout',$data);
    }
    
    // new order code 
    public function storeorders()
    {
        // print_r($_POST);exit;
        $session = session();
        $products = $_SESSION['product']; 
        $totalprice_count = 0;
        
        foreach($products as $product) {
            $total_price_ = $product['product_quantity'] * $product['product_price'];
            $totalprice_count += $total_price_;
        }
        
        $data['products'] = $products;
        
        $db = \Config\Database::connect();
        $usermodel = new UserModel();
        $ordermodel = new OrderModel();
        $productmodel = new ProductModel();
        $orderdetailmodel = new OrderdetailsModel();
        $model = new ShippingaddressModel();
        $user_id = session()->get("id");
        $userdetail = $usermodel->where('user_id', $user_id)->first();
        $randomNumber = rand(10000, 99999);
        $timestamp = time();
        $orderId = $randomNumber;
        $firstname = $this->request->getPost('fname');
        $lastname = $this->request->getPost('lname');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('contact');
        $street = $this->request->getPost('street');
        $area = $this->request->getPost('area');
        $landmark = $this->request->getPost('landmark');
        $city = $this->request->getPost('city');
        $state = $this->request->getPost('state');
        $pin = $this->request->getPost('pin');
        $totalprice = floatval($totalprice_count);
        $paymet = $this->request->getPost('flexRadioDefault');
        $address = $this->request->getPost('address');
        date_default_timezone_set('Asia/Kolkata');
        $orderdate = date('Y-m-d'); 
        $ordertime = date('H:i:s'); 

    
        $orderData = [
            'order_id' => $orderId,
            'totalamount' => $totalprice,
            'price' => $totalprice,
            'paymethod' => $paymet,
            'user_id' => $user_id,
            'address' => $address,
            'created_by' => $user_id,
            'updated_by' => $user_id,
            'orderdate' => $orderdate,
            'ordertime' => $ordertime,
        ];
        $ordermodel->insert($orderData);
        $lastOrderId = $ordermodel->insertID();
        
        session()->set('lastOrderId', $lastOrderId);
        $addressData = [
            'fkorder_id' => $lastOrderId, 
            'first_name' => $firstname,
            'last_name' => $lastname,
            'email' => $email,
            'city' => $city,
            'area' => $area,
            'landmark' => $landmark,
            'street' => $street,
            'state' => $state,
            'pincode' => $pin,
            'address' => $address,
            'fkuser_id' => $user_id,
            'phone' => $phone,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $model->insert($addressData);
        $orderDetailsData = [];
        foreach ($products as $product) {
            $pr_price = $product['product_price'] * $product['product_quantity'];
            $orderDetailsData= [
                'order_id' => $lastOrderId,
                'product_id' => $product['product_id'],
                'product_message' => $product['message'],
                'product_name' => $product['product_name'],
                'product_kg' => $product['product_kg'],
                'product_quantity' => $product['product_quantity'],
                'product_price' => $product['product_price'],
                "total_price" => $pr_price,
                'product_image' => $product['product_image'],
                'crntstatus' => 'pending',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $orderdetailmodel->insert($orderDetailsData);
            $this->updateProductCount($product['product_id']);
        }
        
        $order_list_model = new OrderlistModel();
        $order_list_model->where("user_id", $user_id)->set(["session_data" => "[]"])->update();

        if (empty($lastOrderId)) {
            $response = [
                'success' => false,
                'message' => 'Failed to place order. Please try again.'
            ];
            
        } else {
            session()->set('product', '');
            if ($paymet === 'COD') {
                $response = [
                    'message' => 'Your order has been successfully confirmed!',
                    'success' => true,
                    'redirect' => true,
                    'url' => site_url('thanks')
                ];
               
                $pdf = $this->make_pdf($lastOrderId);
            
                $message = "
                <h2>Order Confirmation</h2>
                <p>Dear $firstname $lastname,</p>
                <p>We are pleased to inform you that your order with ID <strong>$orderId</strong> has been successfully confirmed. Our team is now processing your order. You will receive an email with further details sent to: <strong>$email</strong>.</p>
                <p>Thank you for shopping with us!</p>";
                $subject = "Thank you for order";
                $mail_send = $this->php_mail_code($email, $subject, $message);

            } else if($paymet === 'Online'){
                session()->set('product', '');
                $razorpayOrder = $this->createRazorpayOrder($orderId, $totalprice);
                $userDetails = [
                    'name' => $firstname . ' ' . $lastname,
                    'email' => $email,
                    'phone' => $phone
                ];
                $response = [
                    'message' => 'Your order has been successfully confirmed!',
                    'success' => true,
                    'razorpayOrder' => [
                        'amount' => $razorpayOrder->amount,
                        'amount_due' => $razorpayOrder->amount_due,
                        'amount_paid' => $razorpayOrder->amount_paid,
                        'attempts' => $razorpayOrder->attempts,
                        'created_at' => $razorpayOrder->created_at,
                        'currency' => $razorpayOrder->currency,
                        'id' => $razorpayOrder->id,
                        'offer_id' => $razorpayOrder->offer_id,
                        'receipt' => $razorpayOrder->receipt,
                        'status' => $razorpayOrder->status
                    ],
                    'userDetails' => $userDetails
                ];
                $pdf = $this->make_pdf($lastOrderId);
                $message = "
                <h2>Order Confirmation</h2>
                <p>Dear $firstname $lastname,</p>
                <p>We are pleased to inform you that your order with ID <strong>$orderId</strong> has been successfully confirmed. Our team is now processing your order. You will receive an email with further details sent to: <strong>$email</strong>.</p>
                <p>Thank you for shopping with us!</p>";
                $subject = "Thank you for order";
                $mail_send = $this->php_mail_code($email, $subject, $message);
            } else {
                // session()->set('product', '');
                $response = [
                    'success' => true,
                    'message' => 'Invalid payment method selected',
                ];
            }
            
        }
        return $this->response->setJSON($response);
    }
    
    public function make_pdf($id) {
        $ordermodel = new OrderModel();
        $db = \Config\Database::connect();
        // Query to fetch order details
        $query = "SELECT o.*, o.order_id as orderid, od.*, od.id as odrdetail_id, sa.* 
            FROM orders as o 
            LEFT JOIN order_details as od ON od.order_id = o.id 
            LEFT JOIN shipping_address as sa ON sa.fkorder_id = o.id 
            WHERE o.id = $id";
            // echo $query;exit;
        $order = $db->query($query); 
        
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
        
        if(!empty($filename)){
            $update_filename_order = $ordermodel->where('id',$id)->set('pdf_path', $filePath)->set('pdf_name', $filename)->update();
        }
        //inserting pdf in orderpdf folder
        file_put_contents($filePath, $fileatt);
        // return 0;
        // header("location: ".base_url()."/".$filePath);
    }
    
    
    private function createRazorpayOrder($orderId, $amount)
    {
        $amount = (int)$amount * 100; 
        $keyId = getenv('razorpay.key_id');
        $keySecret = getenv('razorpay.key_secret');

        $api = new Api($keyId, $keySecret);
        $orderData = [
            'receipt' => $orderId,
            'amount' => $amount,
            'currency' => 'INR'
        ];
        $razorpayOrder = $api->order->create($orderData);
        return $razorpayOrder;
    }
    
    public function verifyRazorpayPayment()
    {
        $success = true;
        $error = "Payment Failed";

        if (empty($_POST['razorpay_payment_id']) === false) {
            $api = new Api(getenv('razorpay.key_id'), getenv('razorpay.key_secret'));

            try {
                $attributes = [
                    'razorpay_order_id' => $_POST['razorpay_order_id'],
                    'razorpay_payment_id' => $_POST['razorpay_payment_id'],
                    'razorpay_signature' => $_POST['razorpay_signature']
                ];

                $api->utility->verifyPaymentSignature($attributes);
            } catch (SignatureVerificationError $e) {
                $success = false;
                $error = 'Razorpay Error : ' . $e->getMessage();
            }
        }

        if ($success === true) {
            return redirect()->to('thanks');
        } else {
            // Redirect to error/failure page
            return redirect()->to('error')->with('error', $error);
        }
    }

    private function updateProductCount($productId)
    {
        // echo $productId;exit;
        $productModel = new ProductModel();
        $product = $productModel->where('id',$productId)->first();
        // print_r($product);exit;
        $existingCount = $product['total_count'];
        $newCount = $existingCount + 1;
        $productModel->where('id',$productId)->set('total_count', $newCount)->update();
    }

    public function get_cart_count()
    {
        $cartCount = isset($_SESSION["product"]) ? count($_SESSION["product"]) : 0;
        return $this->response->setJSON(['cartCount' => $cartCount]);
    }
    
    public function thanks(){
        $lastOrderId = session()->get('lastOrderId');
        $ordermodel = new OrderModel();
        $shipingmodel = new ShippingaddressModel();
        $orderdata = $ordermodel->where('id', $lastOrderId)->first();
        $shipingdata = $shipingmodel->where('fkorder_id', $lastOrderId)->first();
        $orderId = $orderdata['order_id'];
        $username = $shipingdata['first_name'];
        $email = $shipingdata['email'];
        // Remove ordered products from the session
        if(isset($_SESSION["product"])) {
            unset($_SESSION["product"]);
        }
        $db = \Config\Database::connect();
        $hproducts = $db->query("SELECT * FROM product WHERE status = '1'");
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $data = [
            'category' => $category->getResultArray(),
            'hproduct' => $hproducts->getResultArray(),
            'orderId' => $orderId,
            'username' => $username,
            'email' => $email,
        ];
        if ($data) {
            
        // $message = "
        // <h2>Order Confirmation</h2>
        // <p>Dear $username,</p>
        // <p>We are pleased to inform you that your order with ID <strong>$orderId</strong> has been successfully confirmed. Our team is now processing your order. You will receive an email with further details sent to: <strong>$email</strong>.</p>
        // <p>Thank you for shopping with us!</p>";
        // $subject = "Thank you for order";
        // $mail_send = $this->php_mail_code($email, $subject, $message);
        // if($mail_send){
            return view('user/thanks',$data);
            // }
        }
    }
    
    public function myorderstatus($id = null)
    {
        $usermodel = new UserModel();
        $ordermodel = new OrderModel();
        $orderdetailmodel = new OrderdetailsModel();
        $user_id = session()->get("id");
        $db = \Config\Database::connect();
        $hproducts = $db->query("SELECT * FROM product WHERE status = '1'");
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $statustrack = $db->query("SELECT o.*,od.*,o.order_id as odrtrackid FROM orders as o 
        LEFT JOIN order_details as od ON od.order_id = o.id 
        WHERE o.id = $id");
        
        // LEFT JOIN product_images as pi ON od.product_id = pi.product_id
        $shippingaddress = $db->query("SELECT sa.* FROM orders as o 
        LEFT JOIN shipping_address as sa ON sa.fkorder_id = o.id 
        WHERE o.id = $id");
        $data['statustrack'] = $statustrack->getResultArray();
        // print_r($data['statustrack']);exit;
        $data['shippingaddress'] = $shippingaddress->getResultArray();
        // echo"<pre>"; print_r($data['statustrack']);exit;
        $data['category'] = $category->getResultArray();
        $data['hproduct'] = $hproducts->getResultArray();
        return view('user/orderstatus',$data);
    }
    
    // In your controller

    public function getStatus($orderId)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT order_id, crntstatus FROM order_details WHERE order_id = ?", [$orderId]);
        $order = $query->getRow();
    
        if ($order) {
            return $this->response->setJSON(['status' => 'success', 'crntstatus' => $order->crntstatus]);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Order not found']);
        }
    }

    public function order_details()
    {
        $ratingModel = new RatingModel();
        $usermodel = new UserModel();
        $ordermodel = new OrderModel();
        $orderdetailmodel = new OrderdetailsModel();
        $user_id = session()->get("id");
        $db = \Config\Database::connect();
        $hproducts = $db->query("SELECT * FROM product WHERE status = '1'");
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $statustrack = $db->query("SELECT o.*,o.orderdate as odate, od.*,o.order_id as odrtrackid FROM orders as o 
        LEFT JOIN order_details as od ON od.order_id = o.id 
        WHERE o.status = '1' AND o.user_id = $user_id AND od.delivered != 'delivered' GROUP BY o.id ORDER BY o.id DESC");
        $data['statustrack'] = $statustrack->getResultArray();
        // echo"<pre>";print_r( $data['statustrack']);exit;
        $data['category'] = $category->getResultArray();
        $data['hproduct'] = $hproducts->getResultArray();
        return view('user/order_details',$data);
    }
    
    public function search($query)
    {
        $productmodel = new ProductModel();
        $db = \Config\Database::connect();
        $hproducts = $db->query("SELECT * FROM product WHERE status = '1'");
        $category = $db->query("SELECT * FROM product_category WHERE status = '1'");
        $data['category'] = $category->getResultArray();
        $data['hproduct'] = $hproducts->getResultArray();
        $productDetails = $db->query("SELECT DISTINCT p.*, pp.*,pi.*,pc.* FROM product as p 
            LEFT JOIN product_price as pp ON p.id = pp.product_id
            LEFT JOIN product_images as pi ON p.id = pi.product_id
            LEFT JOIN product_category as pc ON p.category_id = pc.id
            WHERE p.status = '1' 
            AND (LOWER(p.product_name) LIKE '%" . $db->escapeLikeString(strtolower($query)) . "%' ESCAPE '!' 
            OR LOWER(p.product_description) LIKE '%" . $db->escapeLikeString(strtolower($query)) . "%' ESCAPE '!')
            GROUP BY pp.product_id");
        $findBreadcumProd = "";
        $id = "";
        $currentCategoryId = "";
        $search_name = $query;
        if (!isset($search_name)) {
            $search_name = ""; 
        }
        $data['search_name'] = $search_name;
        $data['id'] = $id;
        $data['findBreadcumProd'] = $findBreadcumProd; 
        $data['hideWeightFilter'] = $currentCategoryId;
        $data['product'] = $productDetails->getResult(); 
        return view('user/prod_list', $data);
    }
    
    public function addRating()
{
    $ratingModel = new RatingModel();
    $userId = $this->request->getPost('user_id');
    $productId = $this->request->getPost('product_id');
    $rating = $this->request->getPost('rating');

    // Check if a rating already exists for this user and product
    $ratingData = $ratingModel->where('user_id', $userId)
                          ->where('product_id', $productId)
                          ->orderBy('id', 'desc')
                          ->first();
    if (empty($ratingData)) {
        // Insert new rating if it does not exist
        $data = [
            'user_id' => $userId,
            'product_id' => $productId,
            'rating' => $rating
        ];
        $ratingModel->insert($data);
    } else {
        // Update existing rating
        $ratingModel->set('rating', $rating)
                    ->where('id', $ratingData['id'])
                    ->update();
    }

    return $this->response->setJSON(['success' => true]);
}


    public function ratingcount()
    {
        $ratingModel = new RatingModel();
        $productModel = new ProductModel();
        $db = \Config\Database::connect();
        $productIds = $productModel->findAll(); 
        $ratings = [];
        foreach ($productIds as $product) {
            $productId = $product['id'];
            $result = $db->table('rating')
            ->select('product_id, AVG(rating) as average_rating')
            ->where('product_id', $productId)
            ->groupBy('product_id')->get()->getRowArray();
            if ($result) {
                $ratings[] = $result;
                $productModel->update($productId, ['average_rating' => $result['average_rating']]);
            }
        }
        // return $ratings;
        $session = session();
        $session->setFlashdata('success', 'Rating added successfully.');
        // return redirect()->back();
        return redirect()->to('/my_details/' . $productId);
    }

    public function getProductDescription($productId) {
        $productModel = new ProductModel();
        $productImagesModel = new ProductimagesModel();

        $product = $productModel->find($productId);
        $productImages = $productImagesModel->where('product_id', $productId)->findAll();
        // print_r($productImages);exit;
        if (!empty($product)) {
            // Return the product details as JSON, including images
            return $this->response->setJSON([
                'product' => $product,
                'images' => $productImages
            ]);
        } else {
            // Return an error message if the product is not found
            return $this->response->setJSON(['error' => 'Product not found.']);
        }

        // if (!empty($product)) {
        //     return $this->response->setJSON($product);
        // } else {
        //     // Return an error message if the product is not found
        //     return $this->response->setJSON(['error' => 'Product not found.']);
        // }

        // if (!empty($product) && isset($product['product_description'])) {
        //     echo $product['product_description'];
        // } else {
        //     // Return an error message if the product is not found
        //     echo "Product description not found.";
        // }

    }

}

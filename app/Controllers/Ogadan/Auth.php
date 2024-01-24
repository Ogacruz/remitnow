<?php

namespace App\Controllers\Ogadan;

use App\Controllers\BaseController;
use App\Models\BusinessCategoriesModel;
use App\Models\ProductsModel;
use App\Models\UserModel;
use App\Models\WalletModel;

class Auth extends BaseController
{
    public $user;
    public $bizcat;
  private $products;
    public function __construct()

    {
        $this->user = new UserModel();
        $this->bizcat = new BusinessCategoriesModel();
    $this->products = new ProductsModel();
        helper(['form', 'upload', 'url']);
    }

    public function index()
    {
        $data = ['page' => 'Login', 'subpage' => 'login', 'title' => 'Okanga&trade; - Login'];
        return view('auth/index', $data);
    }
    public function home()
    {
        $data = ['page' => 'Home', 'subpage' => 'Home', 'title' => 'Okanga&trade; - Home','cats' => $this->bizcat->getActiveBizGroup(),
        'top' => $this->products->getTopProducts(),
        'weekly' => $this->products->getWeeklyProducts(),
        'featured' => $this->products->getFeaturedProducts(),];
      
        return view('splash', $data);
    }
    public function signup()
    {
        $data = ['page' => 'Signup', 'subpage' => 'signup', 'title' => 'Okanga&trade; - Signup'];
        return view('auth/signup', $data);
    }

    public function forgetPassword()
    {
        $data = ['page' => 'Forget Password', 'subpage' => 'forgetpassword', 'title' => 'Okanga&trade; - Forget Password'];
        return view('auth/forget-password', $data);
    }

    public function doLogin()
    {
        if ($this->request->getPost() == true) {
            $email = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            return $this->doValidateAccount($email, $password);
        } else {
            print json_encode(array("status" => "error", "message" => "User Authentication  failed"));
        }
    }

    public function doValidateAccount($email, $password)
    {
        $session = session();
        $mailcheck = $this->user->where(['user_email' => $email, 'user_status' => 1])->first();
        if ($mailcheck) {
            $pass = $mailcheck['user_password'];
            $role = $mailcheck['user_role'];
            $pwd_verify = password_verify($password, $pass);
            if ($pwd_verify) {
                $ses_mailcheck = [
                    'userID' => $mailcheck['userID'],
                    'user_role' => $role,
                    'user_fullname' => $mailcheck['user_fullname'],
                    'user_code' => $mailcheck['user_code'],
                    'user_email' => $mailcheck['user_email'],
                    'isSignedIn' => TRUE,
                    'logged_in' => TRUE,
                    'isLoggedIn' => TRUE,
                ];
                $session->set($ses_mailcheck);
                print json_encode(array("status" => "success", "role" => $role, "message" => "User Authentication  Successfully"));
            } else {
                print json_encode(array("status" => "error", "message" => "User Authentication  failed"));
            }
        } else {
            print json_encode(array("status" => "warning", "message" => "Wrong username or password"));
        }
    }

    public function doSignup()
    {
        $fname = $this->request->getVar('fname');
        $email = strtolower($this->request->getVar('email'));
        $password = $this->request->getVar('password');
        $phone = $this->request->getVar('phone');
        $day = $this->request->getVar('day');
        $month = $this->request->getVar('month');
        $year = $this->request->getVar('year');
        $sex = $this->request->getVar('sex');
        $newpin = $this->request->getVar('newpin');
        $xmail = $this->obfuscate_email($email);
        $check_email = $this->user->where(['user_email' => $email])->first();
        $check_phone = $this->user->where(['user_phone' => $phone])->first();

        

        if ($check_email) {
            return $this->errorResponse("Hello $fname, this email address already exist");
            exit();
        } else if ($check_phone) {
            return $this->errorResponse("Hello $fname, this phone number already exist");
            exit();
        } else {


            
        $file = $this->request->getFile('file');
        // File type and size validation
        $validExtensions = ['jpg', 'jpeg', 'png'];
        $fileExtension = $file->getClientExtension();
        if (!in_array($fileExtension, $validExtensions)) {
            return $this->errorResponse('Invalid passport type. Only JPG, JPEG, and PNG are allowed'); exit();
        }

        if ($file->getSizeByUnit('mb') > 2) {
            return $this->errorResponse('File size exceeds the maximum limit of 2MB'); exit();
        }
    
        if (!$file->isValid()) {
            return $this->errorResponse('Invalid file uploaded'); exit();
        }
        // Process the file upload
        $newName = $this->generateFilename($fileExtension);

        $file1 = $this->request->getFile('file1');
        // File type and size validation
        $validExtensions = ['jpg', 'jpeg', 'png'];
        $fileExtension = $file1->getClientExtension();
        if (!in_array($fileExtension, $validExtensions)) {
            return $this->errorResponse('Invalid passport type. Only JPG, JPEG, and PNG are allowed'); exit();
        }

        if ($file1->getSizeByUnit('mb') > 2) {
            return $this->errorResponse('File size exceeds the maximum limit of 2MB'); exit();
        }
    
        if (!$file1->isValid()) {
            return $this->errorResponse('Invalid file uploaded'); exit();
        }
        // Process the file upload

        $newName1 = $this->generateFilename($fileExtension);

            if ($file->move('public/v1/assets/images/uploads', $newName) &&  $file1->move('public/v1/assets/images/uploads', $newName1)) {
            
            $data = [
                'user_ref' => 'Nill',
                'user_code' => preg_replace('/^./', '', $phone),
                'user_fullname' => $fname,
                'user_phone' => $phone,
                'user_email' => $email,
                'user_password' => password_hash($password, PASSWORD_DEFAULT),
                'user_recap' => $password,
                'user_sex' => $sex,
                'user_dob' => ($year . '-' . $month . '-' . $day),
                'user_country' => "NG",
                'user_state' => 'Nill',
                'user_lga' => 'Nill',
                'user_address' => 'Nill',
                'user_tpin' => $newpin,                
                'user_role' => 'user',
                'user_gids' => $newName,
                'user_gids_path'=>base_url() . "/public/v1/assets/images/uploads/" . $newName,
                'user_passport'=>$newName1,
                'user_passport_path'=>base_url() . "/public/v1/assets/images/uploads/" . $newName1,
                'user_created_at' => date('d/m/Y H:i:s a'),
                'user_token_link' => '',
                'user_token' => '',
                'user_otp' => '',
                'user_activation' => 0,
                'stage_mode' => 'live',
                'user_status' => 1
            ];
            
            if ($this->user->save($data)) {

                $in_id = $this->user->insertID();

                $wallet = new WalletModel();
        
                        $data = [
                            'wallet_userid' => $in_id,
                            'wallet_bal' => 0.00,
                            'wallet_gain' => 0.00,
                            'wallet_spent' => 0.00,
                            'wallet_earning' => 0.00,
                            'wallet_status' => 1
                        ];     

                        $wallet->save($data);      
                       
                    return $this->successResponse("Hello $fname, your account has been created successfully and a verification link sent to $xmail");
              
            } else {
                return $this->warningResponse("Server error"); exit();
            }

        }else{
            return $this->errorResponse("Problem Uploading KYC files");exit();
        }
        }
    }


    private function generateFilename($extension) {
        $chars = "0123456789087654321";
        $regID = substr(str_shuffle($chars), 0, 6);        
        return $regID.'_'.round(microtime(true)) . '.' . $extension;
    }
    
     private function errorResponse($message) {
        return $this->response->setJSON(['status' => 'error', 'message' => $message]);
      }
      private function warningResponse($message) {
        return $this->response->setJSON(['status' => 'warning', 'message' => $message]);
      }
      private function successResponse($message) {
        return $this->response->setJSON(['status' => 'success', 'message' => $message]);
      }
      private function infoResponse($message) {
        return $this->response->setJSON(['status' => 'info', 'message' => $message]);
      }
    public function obfuscate_email($email)
    {
        $em   = explode("@", $email);
        $name = implode('@', array_slice($em, 0, count($em) - 1));
        $len  = floor(strlen($name) / 2);

        return substr($name, 0, $len) . str_repeat('*', $len) . "@" . end($em);
    }
    public function genKeys()
    {
        $chars = "theqfghjk1ugjkjgkjic345kbr3o5354wn3kjjk45jgfo5h5346677rhrtb796rwerr545453455767xju7mp75hjkhj6080vbdfnd786bbohjkkhjkhjkghjkjkhjvert7helaz9gjkj80ydog";
        $regID = substr(str_shuffle($chars), 0, 20);
        return "fx-sec-key-" . $regID;
    }
    public function accountRegCode()
    {
        $chars = "0123456789087654321";
        $regID = substr(str_shuffle($chars), 0, 8);
        return "22" . $regID;
    }
    public function Logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url("/"));
    }
}

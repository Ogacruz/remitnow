<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BusinessCategoriesModel;
use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\Models\EmployeeModel;
use App\Models\FaqsModel;
use App\Models\FileUploadModel;
use App\Models\PostModel;
use App\Models\ProductsModel;
use App\Models\TeamModel;
use App\Models\UserModel;
use App\Models\WalletModel;

class AdminController extends BaseController
{
    private $emp;
    private $user;
    private $post;
    private $faqs;
    private $businesscat;
    private $courses;
    private $trainees;
    private $comments;
    private $teams;
    private $product;

     public function __construct()
     {
        error_reporting(0);
        $this->emp = new EmployeeModel();
        $this->user = new UserModel();
        $this->faqs = new FaqsModel();
        $this->post = new PostModel();
        $this->product = new ProductsModel();
        $this->businesscat = new BusinessCategoriesModel();
        
        $this->comments = new CommentModel();
        $this->teams = new TeamModel();
     }

    public function index()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: Dashboard'];
            return view('admin/pages/dashboard', $data);
        }
    }

    public function employees()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: Employees'];
            $data['employees'] = $this->emp->orderBy('employee_name','ASC')->findAll();
            return view('admin/pages/employees', $data);
        }
    }

    public function coreHr()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: Core HR'];
            return view('admin/pages/core-hr', $data);
        }
    }
    public function finance()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: Finance'];
            return view('admin/pages/finance', $data);
        }
    }
    
    public function ManageListing()
    {
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: Manage Property'];
            $data['cats']=$this->businesscat->getAllActiveBizGroup();
            $data['products']=$this->product->getProducts();
            return view('admin/pages/manage-listing', $data);
        }
    }

    public function checkProduct($name) {  
        $result = $this->product->where(['product_name' => $name])->findAll();
        return !empty($result) ? $result : false;
    }
    public function addProductListing()
    {
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {

            $name = $this->request->getVar('title');

            $check = $this->checkProduct($name);

            if($check){
                return $this->errorResponse('Selected employee already exist as a user!'); exit();
            }


            $fileupload = new FileUploadModel();
            $data = [
                'product_code'=>$this->getProdCode(),
                'product_name'=>$this->request->getVar('title'),
                'product_image'=>'uploaded',
                'product_current_price'=>$this->request->getVar('new_price'),
                'product_old_price'=>$this->request->getVar('old_price'),
                'product_categoryid'=>$this->request->getVar('category'),
                'product_brand'=>$this->request->getVar('brand'),
                'product_featured'=>$this->request->getVar('featured'),
                'product_description'=>$this->request->getVar('description'),
                'product_isflash'=>$this->request->getVar('flash'),
                'product_tag'=>$this->request->getVar('tag'),
                'product_date'=>date('Y-m-d H:i:s a'),
                'product_status'=>1,
                'product_posterid'=>session()->get('userID'),
            ];
           
            $this->product->save($data);
            $pid =  $this->product->insertID();

            if ($this->request->getFileMultiple('file')) {
 
                $a=0;
                foreach($this->request->getFileMultiple('file') as $file)
                {   

                    if ($file->getSizeByUnit('mb') > 2) {
                        return $this->errorResponse('File size exceeds the maximum limit of 2MB'); exit();
                    }
                
                    if (!$file->isValid()) {
                        return $this->errorResponse('Invalid file uploaded'); exit();
                    }

                    // Process the file upload
                    $fileExtension = $file->getClientExtension();
                    $newfilename = $this->generateFilename($fileExtension);

                    $file->move('public/api/img/product/new', $newfilename);
                    $data = [
                        'file_product_id'=>$pid,
                        'file_name'=>$newfilename,
                        'file_mime' => $file->getClientMimeType(),
                        'file_type' => $file->getClientExtension(),
                        'file_path'=>base_url().'public/api/img/product/new/'. $newfilename,
                    ]; $fileupload->save($data);
                    $a++;                
                }                
           }

           return $this->successResponse('Product with '.$a.' images posted successfully!'); exit();

        }
    }


    public function taskSummary()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: Task Summary'];
            return view('admin/pages/task-summary', $data);
        }
    }

    public function performance()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: Performance'];
            return view('admin/pages/performance', $data);
        }
    }

    public function projects()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: Projects'];
            return view('admin/pages/projects', $data);
        }
    }

    public function reports()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: Reports'];
            return view('admin/pages/reports', $data);
        }
    }
    public function managePartnership()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: Manage Partnership'];
            return view('admin/pages/manage-partnership', $data);
        }
    }

    public function myProfile()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: My Profile'];
            return view('admin/pages/my-profile', $data);
        }
    }
    public function banEmployee()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $uid = $this->request->getVar('id');
            $this->emp->find($uid);
            $data = ['employee_status'=>0];
            if($this->emp->update($uid,$data)){
                return $this->successResponse('Employee account banned successfuly');
            }else{
                return $this->errorResponse('Unable to ban employee account');
            }
        } 
        
    }

    public function activateEmployee()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $uid = $this->request->getVar('id');
            $this->emp->find($uid);
            $data = ['employee_status'=>1];
            if($this->emp->update($uid,$data)){
                return $this->successResponse('Employee account activated successfuly');
            }else{
                return $this->errorResponse('Unable to activate employee account');
            }
        } 
    }

public function addEmployee(){

    // Load the validation library
    $validation = \Config\Services::validation();
    // Define validation rules for the phone number
    $validation->setRules([
        'phone' => 'required|numeric|max_length[14]|min_length[11]',
    ]);
    // Get phone number from the request
    $phone = $this->request->getVar('phone');
    $email = $this->request->getVar('email');
    // Run validation
    if (!$validation->run(['phone' => $phone])) {
        // If validation fails, return error response
        return $this->errorResponse('Enter a valid phone number');
    }
    // Proceed if validation passes
    $data = $this->checkPhone($phone);
    // Return JSON response
    if($data){
        return $this->errorResponse('Employee phone number already exist in the database'); exit();
    }
    $data = $this->checkEmail($email);
    // Return JSON response
    if($data){
        return $this->errorResponse('Employee email already exist in the database'); exit();
    }

    $file = $this->request->getFile('file');
    
    $validExtensions = ['jpg', 'jpeg', 'png','gif'];

    $fileExtension = $file->getClientExtension();
    if (!in_array($fileExtension, $validExtensions)) {
        return $this->errorResponse('Invalid file type. Only JPG, JPEG, GIF, and PNG are allowed'); exit();
    }

    if ($file->getSizeByUnit('mb') > 2) {
        return $this->errorResponse('File size exceeds the maximum limit of 2MB'); exit();
    }

    if (!$file->isValid()) {
        return $this->errorResponse('Invalid file uploaded'); exit();
    }
    // Process the file upload
    $newfilename = $this->generateFilename($fileExtension);



    if ($file->move('public/v2/images/contacts', $newfilename)) {
       

        $data = [
            'employee_addedby'=>session()->get('userID'),
            'employee_name'=> $this->request->getVar('ename'),
            'employee_passport'=>$newfilename,
            'employee_sex'=> $this->request->getVar('sex'),
            'employee_landmark'=> $this->request->getVar('about'),
            'employee_phone'=> $this->request->getVar('phone'),
            'employee_email'=> $this->request->getVar('email'),
            'employee_dob'=> $this->request->getVar('dob'),
            'employee_address'=> $this->request->getVar('address'),
            'employee_state'=> $this->request->getVar('ostate'),
            'employee_lga'=> $this->request->getVar('lga'),
            'employee_datejoining'=>$this->request->getVar('datejoining'),
            'employee_created'=>date('Y-m-d'),
            'employee_status'=>1
        ];

        if ($this->emp->save($data)) {
            return $this->successResponse('Employee data saved!');
        } else {
            return $this->errorResponse('Unable to save employee record');
        }
    } else {
        return $this->errorResponse('Failed to move file to destination');
    }
}


public function updatePassport(){

    $file = $this->request->getFile('fileFind');
    $uid = $this->request->getVar('empid');
    
    // File type and size validation
    $validExtensions = ['jpg', 'jpeg', 'png'];
    $fileExtension = $file->getClientExtension();
    if (!in_array($fileExtension, $validExtensions)) {
        return $this->errorResponse('Invalid file type. Only JPG, JPEG, and PNG are allowed'); exit();
    }
    if ($file->getSizeByUnit('mb') > 2) {
        return $this->errorResponse('File size exceeds the maximum limit of 2MB'); exit();
    }
    if (!$file->isValid()) {
        return $this->errorResponse('Invalid file uploaded'); exit();
    }
    // Process the file upload
    $newfilename = $this->generateFilename($fileExtension);

    if ($file->move('public/v2/images/contacts', $newfilename)) {
       
        $data = [
            'employee_passport'=>$newfilename,
        ];
        if($this->emp->find($uid)){
            if ($this->emp->update($uid,$data)) {
                return $this->successResponse('Employee data saved!');
            } else {
                return $this->errorResponse('Unable to save employee record');
            }
        }else{
            return $this->errorResponse('Failed try again later');
        }
        
    } else {
        return $this->errorResponse('Failed to move file to destination');
    }
}

public function editEmployee(){
    
$uid = $this->request->getVar('empid');

    $data = [
        'employee_name'=> $this->request->getVar('ename1'),
        'employee_sex'=> $this->request->getVar('sex1'),
        'employee_landmark'=> $this->request->getVar('about1'),
        'employee_phone'=> $this->request->getVar('phone1'),
        'employee_email'=> $this->request->getVar('email1'),
        'employee_dob'=> $this->request->getVar('dob1'),
        'employee_address'=> $this->request->getVar('address1'),
        'employee_state'=> $this->request->getVar('ostate1'),
        'employee_lga'=> $this->request->getVar('lga1'),
        'employee_datejoining'=>$this->request->getVar('datejoining1'),
    ];
    if($this->emp->find($uid)){
        if ($this->emp->update($uid,$data)) {
            return $this->successResponse('Employee data saved!');
        } else {
            return $this->errorResponse('Unable to save employee record');
        }
    }else{
        return $this->errorResponse('Failed to save changes');
    }
}

public function manageUsers(){
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
        $data = ['title' => 'Okanaga&trade; - Admin :-: Manage System Users'];

        $data['users'] = $this->user->where(['user_role'=>'admin'])->orWhere(['user_role'=>'agent'])->join('employees', 'employees.employeeID = users.user_emp_id')->findAll();

        $data['emps'] = $this->emp->where(['employee_status'=>1,'employee_role !='=>'superadmin'])->orderBy('employee_name','ASC')->findAll();
        return view('admin/pages/manage-users', $data);
    }
}

public function banUser()
{
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
        $uid = $this->request->getVar('id');
        $this->user->find($uid);
        $data = ['user_status'=>0];
        if($this->user->update($uid,$data)){
            return $this->successResponse('User account banned successfuly');
        }else{
            return $this->errorResponse('Unable to ban user account');
        }
    } 
    
}

public function activateUser()
{
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
        $uid = $this->request->getVar('id');
        $this->user->find($uid);
        $data = ['user_status'=>1];
        if($this->user->update($uid,$data)){
            return $this->successResponse('User account activated successfuly');
        }else{
            return $this->errorResponse('Unable to activate user account');
        }
    } 
}

public function getEmployeeDetails()
{
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
        $eid = $this->request->getVar('eid');
        $val = $this->checkEID($eid);
        if($val){
            return $this->errorResponse('Selected employee already exist as a user!');
        }else{
            $info = $this->emp->where('employeeID', $eid)->findAll();
            return $this->response->setJSON($info);
        }
    } 
}

public function addUser(){
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else { 
        $password = $this->request->getVar('dz-password');
        $data = [
            'user_fullname'=> $this->request->getVar('fname'),
            'user_emp_id'=> $this->request->getVar('uid'),
            'user_phone'=> $this->request->getVar('phone'),
            'user_email'=> $this->request->getVar('email'),
            'user_role'=> $this->request->getVar('role'),
            'user_password' => password_hash($password, PASSWORD_DEFAULT),
            'user_recap'=>$password,
            'user_created_at'=>date('Y-m-d'),
            'user_code'=>$this->getCode(),
            'user_status'=>1,
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
                ];$wallet->save($data);
            return $this->successResponse('New account createed successfully');
        } else {
            return $this->errorResponse('Unable to create new user account');
        }
        
    } 
}

public function newPost()
{
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
        $data = ['title' => 'Okanaga&trade; - Admin :-: New Post'];
        $data['cats'] = $this->cat->where('category_status',1)->orderBy('category_title','ASC')->findAll();
        $data['authors'] = $this->emp->where(['employee_role'=>'author','employee_status'=>1])->orderBy('employee_name','ASC')->findAll();
        return view('admin/pages/new-post', $data);
    }
}

public function checkPost($title,$catid) {  
    $result = $this->post->where(['post_title' => $title,'post_cat'=>$catid])->findAll();
    return !empty($result) ? $result : false;
}

public function doAddPost()
{
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {

        $data = $this->checkPost($this->request->getVar('title'),$this->request->getVar('catid'));
        // Return JSON response
        if($data){
            return $this->errorResponse('Employee phone number already exist in the database'); exit();
        }
        
    $file = $this->request->getFile('imageUpload');
    // File type and size validation
    $validExtensions = ['jpg', 'jpeg', 'png'];
    $fileExtension = $file->getClientExtension();
    if (!in_array($fileExtension, $validExtensions)) {
        return $this->errorResponse('Invalid file type. Only JPG, JPEG, and PNG are allowed'); exit();
    }
    if ($file->getSizeByUnit('mb') > 2) {
        return $this->errorResponse('File size exceeds the maximum limit of 2MB'); exit();
    }

    if (!$file->isValid()) {
        return $this->errorResponse('Invalid file uploaded'); exit();
    }
    // Process the file upload
    $newfilename = $this->generateFilename($fileExtension);

    if ($file->move('public/v1/images/post', $newfilename)) {
       
        $data = [
            'post_title'=>$this->request->getVar('title'),
            'post_msg'=>$this->request->getVar('editor'),
            'post_author'=>$this->request->getVar('authorid'),
            'post_tags'=>$this->request->getVar('tagify'),
            'post_images'=>$newfilename,
            'post_cat'=>$this->request->getVar('catid'),            
            'post_publish_date'=>$this->request->getVar('datepicker'),
            'post_date'=>date('M d, Y'),
            'post_privacy'=>$this->request->getVar('optradio'),
            'post_publish_status'=>'Not Approved',
            'post_content_type'=>$this->request->getVar('pcontent'),
            'post_status'=>1
        ];

        if ($this->post->save($data)) {
            return $this->successResponse('Post data saved!');
        } else {
            return $this->errorResponse('Unable to save post record');
        }
    } else {
        return $this->errorResponse('Failed to move file to destination');
    }
    }
}

public function managePosts()
{
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
        $data = ['title' => 'Okanaga&trade; - Admin :-: Manage Posts'];
        $data['posts'] = $this->post->join('employees', 'employees.employeeID = posts.post_author')->join('categories', 'categories.categoryID = posts.post_cat')->findAll();        
        return view('admin/pages/manage-posts', $data);
    }
}

public function banPost()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $uid = $this->request->getVar('id');
            $this->post->find($uid);
            $data = ['post_status'=>0,'post_publish_status'=>''];
            if($this->post->update($uid,$data)){
                return $this->successResponse('Post  banned successfuly');
            }else{
                return $this->errorResponse('Unable to ban post');
            }
        } 
        
    }

    public function activatePost()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $uid = $this->request->getVar('id');
            $this->post->find($uid);
            $data = ['post_status'=>1,'post_publish_status'=>'Approved'];
            if($this->post->update($uid,$data)){
                return $this->successResponse('Post  activated successfuly');
            }else{
                return $this->errorResponse('Unable to activate post');
            }
        } 
    }


    public function editPost($pid,$action){
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: Edit Posts'];
            $data['cats'] = $this->cat->where('category_status',1)->orderBy('category_title','ASC')->findAll();
            $data['authors'] = $this->emp->where(['employee_role'=>'author','employee_status'=>1])->orderBy('employee_name','ASC')->findAll();
            $data['posts'] = $this->post->where(['postID'=>$pid])->join('employees', 'employees.employeeID = posts.post_author')->join('categories', 'categories.categoryID = posts.post_cat')->findAll();        
            return view('admin/pages/edit-post', $data);
    }
}

public function editPostInfo(){
    $pid  = $this->request->getVar('pid');
    $data = [
        'post_title'=>$this->request->getVar('title'),
        'post_msg'=>$this->request->getVar('editor'),
        'post_author'=>$this->request->getVar('authorid'),
        'post_tags'=>$this->request->getVar('tagify'),        
        'post_cat'=>$this->request->getVar('catid'),            
        'post_publish_date'=>$this->request->getVar('datepicker'),
    ];
    if($this->post->find($pid)){
        if ($this->post->update($pid,$data)) {
            return $this->successResponse('Post deatis updated!');
        } else {
            return $this->errorResponse('Unable to update post details');
        }
    }else{
        return $this->errorResponse('Failed try again later');
    }
}


public function updatePostImage(){

    $file = $this->request->getFile('imageUpload');
    $uid = $this->request->getVar('pid');

    // echo $uid; exit();
    
    // File type and size validation
    $validExtensions = ['jpg', 'jpeg', 'png'];
    $fileExtension = $file->getClientExtension();
    if (!in_array($fileExtension, $validExtensions)) {
        return $this->errorResponse('Invalid file type. Only JPG, JPEG, and PNG are allowed'); exit();
    }
    if ($file->getSizeByUnit('mb') > 2) {
        return $this->errorResponse('File size exceeds the maximum limit of 2MB'); exit();
    }
    if (!$file->isValid()) {
        return $this->errorResponse('Invalid file uploaded'); exit();
    }
    // Process the file upload
    $newfilename = $this->generateFilename($fileExtension);

    if ($file->move('public/v1/images/post', $newfilename)) {
       
        $data = [
            'post_images'=>$newfilename,
        ];
        if($this->post->find($uid)){
            if ($this->post->update($uid,$data)) {
                return $this->successResponse('Post image data saved!');
            } else {
                return $this->errorResponse('Unable to save post image record');
            }
        }else{
            return $this->errorResponse('Failed try again later');
        }
        
    } else {
        return $this->errorResponse('Failed to move file to destination');
    }
}

public function manageFAQs()
{
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
        $data = ['title' => 'Okanaga&trade; - Admin :-: Manage FAQs'];
        $data['faqs'] = $this->faqs->findAll();        
        return view('admin/pages/manage-faqs', $data);
    }
}

public function doSaveFAQS(){
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else { 
        
        $data = [
            'faqs_q'=> $this->request->getVar('f_q'),
            'faqs_a'=> $this->request->getVar('f_a')
        ];        
        if ($this->faqs->save($data)) {
            return $this->successResponse('FAQS data saved!');
        } else {
            return $this->errorResponse('Unable to create new  faqs');
        }
        
    } 
}

public function banFaqs()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $uid = $this->request->getVar('id');
            $this->faqs->find($uid);
            $data = ['faqs_status'=>0];
            if($this->faqs->update($uid,$data)){
                return $this->successResponse('Faqs  banned successfuly');
            }else{
                return $this->errorResponse('Unable to ban post');
            }
        } 
        
    }

    public function activateFaqs()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $uid = $this->request->getVar('id');
            $this->faqs->find($uid);
            $data = ['faqs_status'=>1];
            if($this->faqs->update($uid,$data)){
                return $this->successResponse('Faqs  activated successfuly');
            }else{
                return $this->errorResponse('Unable to activate post');
            }
        } 
    }

    
    public function updateFaqs()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $uid = $this->request->getVar('fid');
            $this->faqs->find($uid);
            $data = ['faqs_q'=>$this->request->getVar('question'),'faqs_a'=>$this->request->getVar('answer')];
            if($this->faqs->update($uid,$data)){
                return $this->successResponse('Faqs  Update successfuly');
            }else{
                return $this->errorResponse('Unable to update faqs');
            }
        } 
    }

    public function manageBusinessGroups()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $data = ['title' => 'Okanaga&trade; - Admin :-: Manage Business Groups'];
            $data['businesscat'] = $this->businesscat->getBizGroup();        
            return view('admin/pages/manage-business-group', $data);
        }
}

public function banBusinessGroup()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $uid = $this->request->getVar('id');
            $this->businesscat->find($uid);
            $data = ['businesscategory_status'=>0];
            if($this->businesscat->update($uid,$data)){
                return $this->successResponse('Business category  banned successfuly');
            }else{
                return $this->errorResponse('Unable to ban business category');
            }
        } 
        
    }

    public function activateBusinessGroup()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $uid = $this->request->getVar('id');
            $this->businesscat->find($uid);
            $data = ['businesscategory_status'=>1];
            if($this->businesscat->update($uid,$data)){
                return $this->successResponse('Business category activated successfuly');
            }else{
                return $this->errorResponse('Unable to activate business category');
            }
        } 
    }

    public function addBizCat()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {

            $title = $this->request->getVar('bizcat');
            $check = $this->businesscat->checkBusinessGroup($title);
        
            if ($check) {
                print json_encode(array("status" => "error",  "message" => "This business group already exist in the database")); exit();
            } else {
                
                $file = $this->request->getFile('file');
                // File type and size validation
                $validExtensions = ['jpg', 'jpeg', 'png'];
                $fileExtension = $file->getClientExtension();
                if (!in_array($fileExtension, $validExtensions)) {
                    return $this->errorResponse('Invalid file type. Only JPG, JPEG, and PNG are allowed'); exit();
                }
                
                
                if ($file->getSizeByUnit('mb') > 2) {
                    return $this->errorResponse('File size exceeds the maximum limit of 2MB'); exit();
                }
            
                if (!$file->isValid()) {
                    return $this->errorResponse('Invalid file uploaded'); exit();
                }
                // Process the file upload
                $newfilename = $this->generateFilename($fileExtension);
            
                if ($file->move('public/api/img/core-img', $newfilename)) {

                $data = [
                    'businesscategory_name' => $title,
                    'businesscategory_image' => $newfilename,
                    'businesscategory_image_path'=>base_url().'public/api/img/core-img/'.$newfilename,
                    'businesscategory_date' => date("Y-m-d h:i:s a"),
                ];
                return $this->businesscat->doSaveBusinessGroup($data);
            }else{
                return $this->errorResponse('Server Error!'); exit();
            }
            }
        } 
    }
    
    public function updateBizCat()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {

            $uid = $this->request->getVar('bcid');
            $title = $this->request->getVar('ntitle');
            $this->businesscat->find($uid);
            $data = ['businesscategory_name' => $title];
            if($this->businesscat->update($uid,$data)){
                return $this->successResponse('Business category updated successfuly');
            }else{
                return $this->errorResponse('Unable to update business category');
            }
        } 
    }


public function getBusinessGroupCourses()
    {
        $bcid = $this->request->getVar('bcid');
        echo json_encode($this->courses->getBusinessGroupCourses1($bcid));
        
    }


    public function fetchTraineess()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {

            $batch = $this->request->getVar('batch');
            $sex = $this->request->getVar('sex');
            $businesscategory = $this->request->getVar('businesscategory');
            $courses = $this->request->getVar('programmes');
            $state = $this->request->getVar('status');
            
            $result = $this->trainees->getTrainees($batch,$sex,$businesscategory,$courses,$state);

            $data = array();
            $i=1;
           
            // 

            foreach ($result as $key => $val) {

                $check = '<td>
                <div class="form-check custom-checkbox">
                    <input type="checkbox" class="form-check-input" name="box" value="'.$val->traineeID.'" id="customCheckBox2">
                    <label class="form-check-label" for="customCheckBox2"></label>
                </div>
                </td>';
                
                              if ($val->trainee_status == 0) { 
                                $status = '<span class="badge badge-danger light border-0 badge-sm">Blocked</span>';
                                 } else { 
                                 $status = '<span class="badge badge-success light border-0 badge-sm">Activated</span>';
                                } 
                                $edit =' <a href="/admin/dashboard/trainee/'.$val->traineeID.'/edit" 
                                class="btn btn-info btn-sm light border-0"><span
                                    class="fa fa-edit"></span></a>';

                                    $search =' <a href="/admin/dashboard/trainee/'.$val->traineeID.'/edit" 
                                    class="btn btn-warning btn-sm light border-0"><span
                                        class="fa fa-search"></span></a>';

                                    if($val->trainee_status ==0){
                                       $action =' <button id="'.$val->traineeID.'"
                                        class="btn btn-success btn-sm activate light border-0"> <span
                                            class="fa fa-check"></span> </button>';
                                    }else{
                                        $action ='<button id="'.$val->traineeID.'"
                                        class="btn btn-danger ban btn-sm  light border-0">
                                        <span class="fa fa-ban"></span> </button>';
                                    }


                $data[] = array(
                    $check,
                    $i,
                    $val->trainee_fname,
                    $val->trainee_lname,
                    $val->trainee_phone,
                    $val->trainee_email,
                    $val->trainee_batch,
                    $status,
                    $search,
                    $edit,
                    $action,
                );
                $i++;
            }

            $output = array(
                "data"=>$data
            );

            echo json_encode($output,true);
        } 
    }

public function manageComments()
{
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
        $data = ['title' => 'Okanaga&trade; - Admin :-:  Manage Comments', 'page' => 'index'];     
        $data['comments'] = $this->comments->orderBy('commentID','DESC')->join('posts', 'posts.postID = comments.comment_newsid')->findAll();       
        return view('admin/pages/manage-comments', $data);
    } 
}

public function activateComment()
{
   
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
           $uid = $this->request->getVar('id');
            $data = ['comment_status'=>1];
            if($this->comments->find($uid) && $this->comments->update($uid,$data)){
                return $this->successResponse('Comment  Approved successfuly');
            }else{
                return $this->errorResponse('Unable to approve comment');
            }
    } 
}
public function banComment()
{
   
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
        $uid = $this->request->getVar('id');        
        $data = ['comment_status'=>0];
        if($this->comments->find($uid) && $this->comments->update($uid,$data)){
            return $this->successResponse('Comment  banned successfuly');
        }else{
            return $this->errorResponse('Unable to ban comment');
        }
    } 
}

public function editComment()
{
   
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
        $uid = $this->request->getVar('id');        
        $data = [
            'comment_message'=>$this->request->getVar('message'),
        ];
        if($this->comments->find($uid) && $this->comments->update($uid,$data)){
            return $this->successResponse('Comment  update successfuly');
        }else{
            return $this->errorResponse('Unable to update comment');
        }
    } 
}


public function teamVolunteers()
{
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
        $data = ['title' => 'Okanaga&trade; - Admin :-:  Team & Volunteers', 'page' => 'index'];     
        $data['teams'] = $this->teams->orderBy('teamID','DESC')->join('employees', 'employees.employeeID = teams.team_empid')->findAll(); 
        $data['emp'] = $this->emp->where('employee_status',1)->orderBy('employee_name','ASC')->findAll();         
        return view('admin/pages/team-volunteers', $data);
    } 
}


public function doSaveTeam()
{
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
          $ck = $this->checkEmpEID($this->request->getVar('empid'));
        if($ck){
            return $this->errorResponse('Selected employee already exist as a user!'); exit();
        }else{        
        $data = [
            'team_empid' => $this->request->getVar('empid'),
            'team_position' => $this->request->getVar('position'),
            'team_category' => $this->request->getVar('category'),
            'team_facebook' => $this->request->getVar('facebook'),
            'team_twitter' => $this->request->getVar('twitter'),
            'team_instagram' => $this->request->getVar('instagram'),
            'team_linkedin' => $this->request->getVar('linkedin'),
            'team_status'=>1,
            'team_date'=>date('Y-m-d'),
        ];
        if($this->teams->save($data)){
            return $this->successResponse('Team added successfuly');
        }else{
            return $this->errorResponse('Unable to add team');
        }
    }
    } 
}

public function checkEmpEID($eid) {  
    // Fetch all matching records as an array
    // Using CodeIgniter's built-in methods for prepared statements
    $result = $this->teams->where(['team_empid' => $eid])->findAll();
    return !empty($result) ? $result : false;
}



public function banTeam()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $uid = $this->request->getVar('id');
            $this->teams->find($uid);
            $data = ['team_status'=>0];
            if($this->teams->update($uid,$data)){
                return $this->successResponse('Team membere banned successfuly');
            }else{
                return $this->errorResponse('Unable to ban team membere');
            }
        } 
        
    }

    public function activateTeam()
    {
        
        if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
            return redirect()->to('/user/auth/logout');
        } else {
            $uid = $this->request->getVar('id');
            $this->teams->find($uid);
            $data = ['team_status'=>1];
            if($this->teams->update($uid,$data)){
                return $this->successResponse('Teams membere activated successfuly');
            }else{
                return $this->errorResponse('Unable to activate team membere');
            }
        } 
    }

public function doUpdateTeam(){
    
    if (!session()->get('user_role') || !session()->get('user_role') == 'superadmin' || !session()->get('user_role') == 'admin' || !session()->get('user_role') == 'agent') {
        return redirect()->to('/user/auth/logout');
    } else {
        $uid = $this->request->getVar('id');
        
        $uid = $this->request->getVar('tid');
        
        $data = [
            'team_position' => $this->request->getVar('positionx'),
            'team_category' => $this->request->getVar('categoryx'),
            'team_facebook' => $this->request->getVar('facebookx'),
            'team_twitter' => $this->request->getVar('twitterx'),
            'team_instagram' => $this->request->getVar('instagramx'),
            'team_linkedin' => $this->request->getVar('linkedinx'),
        ];
        if($this->teams->find($uid) && $this->teams->update($uid,$data)){
            return $this->successResponse('Teams membere update successfuly');
        }else{
            return $this->errorResponse('Unable to update team membere');
        }
    } 
}

    public function getMasterCode()
    {
        $chars = "1234567890";
        $regID = substr(str_shuffle($chars), 0, 6);
        return 'MST/AY/2023/'.$regID;
    }


private function getCode(){
    return round(microtime(true));
}

public function checkEID($eid) {  
    // Fetch all matching records as an array
    // Using CodeIgniter's built-in methods for prepared statements
    $result = $this->user->where(['user_emp_id' => $eid])->findAll();
    return !empty($result) ? $result : false;
}

public function checkPhone($phone) {  
    // Fetch all matching records as an array
    // Using CodeIgniter's built-in methods for prepared statements
    $result = $this->emp->where(['employee_phone' => $phone])->findAll();
    return !empty($result) ? $result : false;
}

public function checkEmail($email) {  
    // Fetch all matching records as an array
    // Using CodeIgniter's built-in methods for prepared statements
    $result = $this->emp->where(['employee_email' => $email])->findAll();
    return !empty($result) ? $result : false;
}


private function getProdCode(){
    $chars = "0123456789087654321";
    $regID = substr(str_shuffle($chars), 0, 10);        
    return 'PRDC-'.$regID;
}

private function generateFilename($extension) {
    $chars = "0123456789087654321";
    $regID = substr(str_shuffle($chars), 0, 8);        
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


    
}
<?php

namespace App\Controllers\Mobile;

use App\Controllers\BaseController;
use App\Models\BusinessCategoriesModel;
use App\Models\ProductsModel;
use App\Models\UserModel;

class User extends BaseController
{
  public $userinfo;
  public $bizcat;
  private $products;

  public function __construct()
  {
    error_reporting(0);
    $this->userinfo = new UserModel();
    $this->bizcat = new BusinessCategoriesModel();
    $this->products = new ProductsModel();
    helper(['form', 'upload', 'url']);
  }
  public function index()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Dashboard',
      'subpage' => 'Dashboard',
      'title' => 'Okanga&trade; - Dashboard',
      'infos' => $this->userinfo->getUser(),
      'cats' => $this->bizcat->getActiveBizGroup(),
      'top' => $this->products->getTopProducts(),
      'weekly' => $this->products->getWeeklyProducts(),
      'featured' => $this->products->getFeaturedProducts(),
    ];
    return view('user/index', $data);
  }

  
  public function getItemByCategory($cid,$key)
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Category',
      'subpage' => 'Category',
      'title' => 'Okanga&trade; - Category',
      'infos' => $this->userinfo->getUser(),
      'products' => $this->products->getItemByCategory($cid,$key),
    ];
    return view('user/item-category', $data);
  }
  
  

  public function getProductsByBrand($brand)
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Brand',
      'subpage' => 'Brand',
      'title' => 'Okanga&trade; - Brand',
      'infos' => $this->userinfo->getUser(),
      'products' => $this->products->getProductsByBrand($brand),
    ];
    return view('user/product-brand', $data);
  }


  public function searchProduct()
  {

    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $search = $this->request->getVar('search');
    $searchkey = ucfirst($search);
    $data = [
      'page' => 'Search',
      'subpage' => 'Search',
      'searchkey'=>$searchkey,
      'title' => 'Okanga&trade; - Search',
      'infos' => $this->userinfo->getUser(),
      'products' => $this->products->searchProduct($search),
    ];
    return view('user/search-product', $data);
  }

  

  public function productFilter()
  {

    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $cat = $this->request->getVar('category');
    $brand = $this->request->getVar('brand');
    $minprice = $this->request->getVar('minprice');
    $maxprice = $this->request->getVar('maxprice');
    $data = [
      'page' => 'Filter Products',
      'subpage' => 'Filter Products',
      'title' => 'Okanga&trade; - Filter Products',
      'infos' => $this->userinfo->getUser(),
      'products' => $this->products->productFilter($cat,$brand,$minprice,$maxprice),
    ];
    return view('user/filter-product', $data);
  }

  

  public function buyProduct($pid)
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Buy Products',
      'subpage' => 'Buy Products',
      'title' => 'Okanga&trade; - Buy Products',
      'infos' => $this->userinfo->getUser(),
      'product' => $this->products->buyProduct($pid),
    ];
    return view('user/buy-product', $data);
  }

  public function getProductList()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Get Products',
      'subpage' => 'Get Products',
      'title' => 'Okanga&trade; - Get Products',
      'infos' => $this->userinfo->getUser(),
      'products' => $this->products->getProductList(),
    ];
    return view('user/product-list', $data);
  }

  public function getAllTopProducts()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Buy Products',
      'subpage' => 'Buy Products',
      'title' => 'Okanga&trade; - Buy Products',
      'infos' => $this->userinfo->getUser(),

      'products' => $this->products->getAllTopProducts(),
    ];
    return view('user/product-list', $data);
  }

  public function getAllWeeklyProducts()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Buy Products',
      'subpage' => 'Buy Products',
      'title' => 'Okanga&trade; - Buy Products',
      'infos' => $this->userinfo->getUser(),

      'products' => $this->products->getAllWeeklyProducts(),
    ];
    return view('user/product-list', $data);
  }

  public function getAllFeaturedProducts()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Buy Products',
      'subpage' => 'Buy Products',
      'title' => 'Okanga&trade; - Buy Products',
      'infos' => $this->userinfo->getUser(),

      'products' => $this->products->getAllFeaturedProducts(),
    ];
    return view('user/product-list', $data);
  }

  public function profile()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Profile',
      'subpage' => 'Profile',
      'title' => 'Okanga&trade; - User Profile',
      'infos' => $this->userinfo->getUser(),
    ];
    return view('user/profile', $data);
  }

  public function editProfile()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Profile',
      'subpage' => 'Edit Profile',
      'title' => 'Okanga&trade; - Edit Profile',
      'infos' => $this->userinfo->getUser(),
    ];
    return view('user/edit-profile', $data);
  }

  public function uploadPassport()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $file = $this->request->getFile('file');
    $uid = $this->request->getVar('uid');

    // File type and size validation
    $validExtensions = ['jpg', 'jpeg', 'png'];
    $fileExtension = $file->getClientExtension();
    if (!in_array($fileExtension, $validExtensions)) {
      return $this->errorResponse('Invalid passport type. Only JPG, JPEG, and PNG are allowed');
      exit();
    }

    if ($file->getSizeByUnit('mb') > 2) {
      return $this->errorResponse('File size exceeds the maximum limit of 2MB');
      exit();
    }

    if (!$file->isValid()) {
      return $this->errorResponse('Invalid file uploaded');
      exit();
    }
    // Process the file upload
    $newName = $this->generateFilename($fileExtension);

    if ($file->move('public/v1/assets/images/uploads', $newName)) {
      $data = [
        'user_passport' => $newName,
        'user_passport_path' => base_url() . "/public/v1/assets/images/uploads/" . $newName,
      ];

      if ($this->userinfo->find($uid) && $this->userinfo->update($uid, $data)) {
        return $this->successResponse('Profile image uploaded!');
      } else {
        return $this->warningResponse("Server error");
        exit();
      }
    } else {
      return $this->warningResponse("Server error");
      exit();
    }
  }

  public function updatePassword()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $password = $this->request->getVar('registerPassword');
    $uid = $this->request->getVar('userid');
    
    $data = [
      'user_password' => password_hash($password, PASSWORD_DEFAULT),
      'user_recap' => $password,
    ];
    if ($this->userinfo->find($this->request->getVar('userid')) && $this->userinfo->update($this->request->getVar('userid'), $data)) {
      return $this->successResponse('Password updated successfully');
    } else {
      return $this->warningResponse("Server error");
      exit();
    }
  }

  public function settings()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Settings',
      'subpage' => 'Settings',
      'title' => 'Okanga&trade; -  Settings',
      'infos' => $this->userinfo->getUser(),
    ];
    return view('user/settings', $data);
  }

  
  public function changeTpin()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Change Transaction Pin',
      'subpage' => 'Change Transaction Pin',
      'title' => 'Okanga&trade; -  Change Transaction Pin',
      'infos' => $this->userinfo->getUser(),
    ];
    return view('user/change-tpin', $data);
  }

  public function updatePin()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $tpin = $this->request->getVar('npin');
    $uid = $this->request->getVar('userid');    
    $data = [
      'user_tpin' => $tpin,
    ];
    if ($this->userinfo->find($this->request->getVar('userid')) && $this->userinfo->update($this->request->getVar('userid'), $data)) {
      return $this->successResponse('Transaction updated successfully');
    } else {
      return $this->warningResponse("Server error");
      exit();
    }
  }

  public function privacyPolicy()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Privacy Policy',
      'subpage' => 'Privacy Policy',
      'title' => 'Okanga&trade; -  Privacy Policy',
      'infos' => $this->userinfo->getUser(),
    ];
    return view('user/privacy-policy', $data);
  }


  public function support()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'support',
      'subpage' => 'support',
      'title' => 'Okanga&trade; -  support',
      'infos' => $this->userinfo->getUser(),
    ];
    return view('user/support', $data);
  }


  public function changePassword()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'page' => 'Change Password',
      'subpage' => 'Change Password',
      'title' => 'Okanga&trade; -  Change Password',
      'infos' => $this->userinfo->getUser(),
    ];
    return view('user/change-password', $data);
  }

  public function updateProfile()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $data = [
      'user_state' => $this->request->getVar('ostate'),
      'user_lga' => $this->request->getVar('lga'),
      'user_town' => $this->request->getVar('city'),
      'user_address' => $this->request->getVar('address'),
    ];
    if ($this->userinfo->find($this->request->getVar('userid')) && $this->userinfo->update($this->request->getVar('userid'), $data)) {
      return $this->successResponse('Changes save successfully');
    } else {
      return $this->warningResponse("Server error");
      exit();
    }
  }

  public function shoppingCart(){

    $cart = \Config\Services::cart();

    $cart->insert(array(
      'id'      => $this->request->getVar('id'),
      'qty'     => 1,
      'price'   => $this->request->getVar('price'),
      'name'    => $this->request->getVar('name'),
      'image' => $this->request->getVar('image'),
      'options' => array('Size' => 'L', 'Color' => 'Red')
   ));
   $response = $cart->contents();
    return $this->successCartResponse('Product added to cat successfully!',$cart->totalItems());
  }

  public function cart()
  {
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    
    $data = [
      'page' => 'Cart',
      'subpage' => 'Cart',
      'title' => 'Okanga&trade; - Cart',
      'infos' => $this->userinfo->getUser()
    ];
    return view('user/cart', $data);
  }

  public function pullCart(){

    $cart = \Config\Services::cart();

    $result = $cart->contents();

    $data = array();
    $i=1;

      $amount = 0;

      foreach ($result as $key => $cart) { 
        
        $sum = $cart['price'] * $cart['qty'];

        $additions = number_format($sum);

        $data[] = array(
          'id'=>$cart['rowid'],
          'name'=>$cart['name'],
          'qty'=>$cart['qty'],
          'subtotal'=>$cart['subtotal'],
          'amount'=>number_format($cart['price'],2),          
          'sum'=>number_format($sum,2),
          'image'=>$cart['image']
      );

      $i++;
    }
    $output = array(
        "data"=>$data
    );
    echo json_encode($data ,true);

  }
public function upDateCart(){
      $cart = \Config\Services::cart();
      $cart->update(array(
        'rowid'   => $this->request->getVar('id'),
        'qty'   => $this->request->getVar('qty'),
    ));    
    return $this->successResponse('Cart updated successfully!');
}

public function checkOut(){
    if (!session()->get('user_role') || !session()->get('user_role') == 'user') {
      return redirect()->to('/user/auth/logout');
    }
    $cart = \Config\Services::cart();
    $data = [
      'page' => 'Check Out',
      'subpage' => 'Check Out',
      'title' => 'Okanga&trade; -  Check Out',
      'infos' => $this->userinfo->getUser(),
      'items'=>$cart->contents(),
    ];
    return view('user/check-out', $data);
}
  public function clearCart(){
    $cart = \Config\Services::cart();
    $cart->destroy();
  }
  public function shoppingcounter(){
    $cart = \Config\Services::cart();
    return $this->successCartResponse('ok',$cart->totalItems());
  }
public function removeCart(){
  $cart = \Config\Services::cart();
  if($cart->remove($this->request->getVar('id'))){
    return $this->successResponse('Product removed from cart successfully!');
  }
}

  private function generateFilename($extension)
  {
    $chars = "0123456789087654321";
    $regID = substr(str_shuffle($chars), 0, 6);
    return $regID . '_' . round(microtime(true)) . '.' . $extension;
  }

  private function errorResponse($message)
  {
    return $this->response->setJSON(['status' => 'error', 'message' => $message]);
  }
  private function warningResponse($message)
  {
    return $this->response->setJSON(['status' => 'warning', 'message' => $message,'total']);
  }
  private function successResponse($message)
  {
    return $this->response->setJSON(['status' => 'success', 'message' => $message]);
  }

  private function successCartResponse($message,$count)
  {
    return $this->response->setJSON(['status' => 'success', 'message' => $message,'total'=>$count]);
  }


  private function infoResponse($message)
  {
    return $this->response->setJSON(['status' => 'info', 'message' => $message]);
  }

  public function creatSTWAccount()
  {

    $curl = curl_init();

    curl_setopt_array($curl, [
      CURLOPT_URL => "https://strowallet.com/api/virtual-bank/new-customer",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode([
        'public_key' => 'AW6U7VZ3V1HJYPDN9CHK3KTXTYCVGJ',
        'email' => 'aliensoftweb@gmail.com',
        'account_name' => 'Nduka Daniel',
        'phone' => '08106888077',
        'webhook_url' => 'http://localhost:81/user/dashboard/webhook'
      ]),
      CURLOPT_HTTPHEADER => [
        "accept: application/json",
        "content-type: application/json"
      ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }

    // {
    //     "success": true,
    //     "message": "Account Assigned Successfully.",
    //     "bank_name": "Providus Bank",
    //     "account_name": "Nduka Daniel",
    //     "account_number": "9612180737"
    //   }
  }
}

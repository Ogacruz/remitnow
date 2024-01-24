<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = ['title'=>'Okanga&trade; - Welcome Page'];
        return view('splash',$data);
    }
    public function shoppingCart(){

        

        $cart = \Config\Services::cart();

        $cart->destroy();

        $response = $cart->contents();

        $data = json_encode($response);

        echo '<pre>';
        print_r($data);
        echo '<pre>';

    }
}

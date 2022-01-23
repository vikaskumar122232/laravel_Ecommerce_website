<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
   public function home(){
       return view('front-end.home');
   }
   public function specialsOffer(){
    return view('front-end.specialsoffer');
}

public function delivery(){
    return view('front-end.delivery');
}

public function contact(){
    return view('front-end.contact');
}

public function cart(){
    return view('front-end.cart');
}

public function productView(){
    return view('front-end.productview');
}
}

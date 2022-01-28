<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Hash;

class BaseController extends Controller
{
   public function home(){
       $products = Product::get();
       $latestProducts = Product::limit(6)->latest()->get();

       return view('front-end.home', compact('products','latestProducts'));


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

public function productView( Request $request){
    $id = $request->id;
    $product = Product::with('ProductDetail')->where('id',$id)->first();
    $category_id =$product->category_id;
    $relatedProducts = Product::where('category_id',$category_id)->get();

    return view('front-end.productView',compact('product','relatedProducts'));
}
public function userLogin(){
return view('front-end.login');
}
public function userStore(Request $request){
    $data = array(
        'name' => $request->first_name.''.$request->last_name,
        'email'      =>$request->email,
        'password'   =>Hash::make($request->password),
        'role'       =>'user'

    );
    $user = User::create($data);
    return redirect()->route('userLogin');

    }
    public function loginCheck(Request $request){
        $data = array(
            'email'      =>$request->email,
            'password'   =>$request->password,
            'role'      =>'user'
        );
    if (Auth::attempt($data)) {
       return view('front-end.home');
    }else{
        return back()->withErrors(['message'=>'invalid Email or password']);
    }

    }
}

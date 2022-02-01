<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   public function index(){
       $users = User::get();
       return view('admin.users.list',compact('users'));
   }
   public function delete(Request $request){
    $id = $request->id;
    $user = User::find($id);
   
    $user->delete($id);
    return redirect()->route('admin.users');
   }
}

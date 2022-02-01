<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductBookingController;
/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[BaseController::class,'home'])->name('welcom');
Route::get('/home',[BaseController::class,'home'])->name('home');
Route::get('/special-offer',[BaseController::class,'specialsoffer'])->name('special_offer');
Route::get('/delivery',[BaseController::class,'delivery'])->name('delivery');
Route::get('/contact',[BaseController::class,'contact'])->name('contact');
Route::get('/cart',[BaseController::class,'cart'])->name('cart');
Route::get('/productView/{id}',[BaseController::class,'productView'])->name('productView');
Route::get('user/login',[BaseController::class,'userLogin'])->name('userLogin');
Route::post('user/login',[BaseController::class,'loginCheck'])->name('loginCheck');
Route::post('user/register',[BaseController::class,'userStore'])->name('userStore');
Route::get('user/logout',[BaseController::class,'userLogout'])->name('userLogout');
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('/admin/login',[AdminController::class,'makeLogin'])->name('admin.makeLogin');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/cart/store', [CartController::class,'store'])->name('cart.store');
Route::post('/cart', [CartController::class,'cart'])->name('cart');
Route::get('/cart/delete/{id}', [CartController::class,'destroy'])->name('cart.delete');
Route::post('/product/booking', [ProductBookingController::class,'store'])->name('product.booking');



Route::group(['middleware' => 'auth'] , function () {
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');
/*CategoryController routes*/
Route::get('/category/add',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/add',[CategoryController::class,'store'])->name('category.store');
Route::get('/category',[CategoryController::class,'index'])->name('category.list');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');
/*CategoryController routes*/
Route::get('/product/add',[ProductController::class,'create'])->name('product.create');
Route::post('/product/add',[ProductController::class,'store'])->name('product.store');
Route::get('/product',[ProductController::class,'index'])->name('product.list');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
Route::get('/product/details/{id}',[ProductController::class,'extraDetails'])->name('product.extraDetails');
Route::post('/product/details/{id}',[ProductController::class,'extraDetailsStore'])->name('product.extraDetailsStore');
/* users manager routes*/
Route::get('/admin/users', [UserController::class,'index'])->name('admin.users');
Route::get('/admin/delete/{id}', [UserController::class,'delete'])->name('user.delete');


});

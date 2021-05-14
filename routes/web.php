<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\ordercontroller;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');  
    return redirect('login');
});
Route::view('/register','register');
Route::post("/login",[usercontroller::class,'login']);
Route::post("/register",[usercontroller::class,'register']);
Route::get("/",[productcontroller::class,'index']);
Route::get("detail/{id}",[productcontroller::class,'detail']);
Route::get("search",[productcontroller::class,'search']);
Route::post("add_to_cart",[productcontroller::class,'addtocart']);
Route::get("cartlist",[productcontroller::class,'cartList']);
Route::get("removecart/{id}",[productcontroller::class,'removeCart']);
Route::get("ordernow",[productcontroller::class,'orderNow']);
Route::post("orderplace",[productcontroller::class,'orderPlace']);
Route::get("myorders",[productcontroller::class,'myOrders']);

Route::get("list",[productcontroller::class,'show']);
Route::view('add','addproduct');
Route::post("add",[productcontroller::class,'addData']);
Route::get('delete/{id}',[productcontroller::class,'delete']);
Route::get('edit/{id}',[productcontroller::class,'showdata']);
Route::post('edit/',[productcontroller::class,'update']);


Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/adminlogout', function () {
    Session::forget('user');  
    return redirect('login');
});

Route::post("/adminlogin",[usercontroller::class,'adminlogin']);


Route::get('editcustomer',[ordercontroller::class,'show']);
Route::get('delete/{id}',[ordercontroller::class,'delete']);
Route::get('edit1/{id}',[ordercontroller::class,'showdata']);
Route::post('edit1/',[ordercontroller::class,'update']);

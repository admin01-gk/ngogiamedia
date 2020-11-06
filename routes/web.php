<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('index');
});
Route::get('index', 'mediaController@showMedia');
// Route::get('profile/{name}', 'profileController@showProfile');
// //------Chuyen quyen DK trang chu
// Route::get('home', 'homeController@soWellcome');
// Route::get('about', 'aboutController@showDetails');
// //- Tạo 1 Định Tuyến ROUTE----------
// Route::get('about', function () {
//     return ('About Content');
// });
// //-----Tao Route cho trang con------
// Route::get('about/direction', function () {
//     return ('Direction Go here');
// });

// //-----ROUTE vs GET ANY--------------
// Route::any('submit-form', function () {
//     return "Process Form";
// });

// //------- Truyen Tham So Cho Route----
// Route::get('about/{theSubject}', function ($theSubject) {
//     return  ' Content here ' . $theSubject;
// });

// //-----BAI TAP -----
// // Thiết Lập Route gồm 2 biến : Price và Art
// // Route trả về KQ là chuỗi 
// // bao gồm 2 giá trị Price và Art

// //--------
// Route::get('about/classea/{theSubject}', function ($theSubject) {
//     return "Content on $theSubject";
// });
// Route::get('about/classea/{theArt}/{thePrice}', function ($theArt, $thePrice) {
//     return " The product : $theArt and $thePrice ";
// });

// //-----UY QUYEN CHO ROUTE---------
// //--Su dung redirect de chuyen trang
// Route::get('where', function () {
//     return redirect('about/direction');
// });

// //------CONTROLLER---------
// // Tao Controller cho about
// Route::get('about', 'aboutController@showDetails');
// // ----- Truyen Tham So trong Controller 
// Route::get('about/{theSubject}', 'aboutController@showSubject');


//----GỬI NHẬN MAIL
// route::get('index','redisController@index');
// route::post('index','redisController@postIndex');
route::post('index','MessageController@store');
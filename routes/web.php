<?php

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
    return view('welcome');
});
Route::get('/about', function () {
    return 'Đây là trang thông tin';
});
Route::get('/contact', function () {
    return 'Đây là trang liên hệ';
});
Route::get('/help', function () {
    return 'Đây là trang trợ giúp';
});
Route::get('/about/facebook', function (){
    return 'Trang about của facebook';
});
Route::any('facebook', function(){
    return 'Route any test';
});
Route::get('/baidang/{id}', function($id){
    return 'Bài đăng có id là: '.$id;
});
Route::get('/baidang/{price}/{art}', function($price, $art){
   return 'Price: '.$price.' and art: '.$art;
});
// Dat ten cho route
Route::get('about/test', array('as' => 'tests', function(){
    $theURL = URL::route('tests');
    return "Link: $theURL";
}));
Route::get('admin', function(){
   return Redirect::route('tests');
});

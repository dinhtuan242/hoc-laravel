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
use App\Post;
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
Route::get('/controller', 'HomeController@showWellcome');
Route::get('/aboutcontent', 'AboutController@showContent');
Route::get('/about/{id}', 'AboutController@showId');
Route::get('/index',  'HomeController@showHome');
Route::get('/profile/{name}', 'HomeController@showProfile');
Route::get('/insert', function(){
    DB::insert("insert into posts(title, content) values(?,?)", ['Học framework Laravel', 'Laravel là framework của ']);
});
Route::get('/update', function(){
   DB::update("update posts set content = 'Laravel là framework của PHP' where id = 1");
});
Route::get('/delete', function(){
    $delete = DB::delete("delete from posts where id = ?", [1]);
    return $delete;
});
Route::get('/read-all', function(){
   $posts = Post::all();
   foreach ($posts as $post){
       return $post->title;
   }
});
Route::get('/search', function(){
    $posts = Post::where('id', 2)
        ->take(1)
        ->get();
    foreach ($posts as $post) {
        return $post->title;
    }
});
Route::get('/insertORM', function(){
   $posts = new Post;
   $posts->title = 'Tiêu đề bài đăng';
   $posts->content = 'Nội dung bài đăng';
   $posts->save();
});
Route::get('/updateorm/{id}', function($id){
   $post = Post::find($id);
   $post->title = 'Nội dung bài đăng id = '.$id;
   $post->save();
});

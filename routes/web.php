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
// Route::get('/', function(){
//     return view(view,'form');
// });

Route::get('about', function(){
    $config['center'] = '54.32824, 48.38657';
    $config['zoom'] = '12';
    $config['map_height'] = '300px';
    // $config['map_width'] = '550px';
    $config['scrollwheel'] = 'false';
    GMaps::initialize($config);
    $map = GMaps::create_map();
    return view('about')->with('map', $map);
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('/send-mail', 'MailSetting@send_form');

Route::group(['namespace' => 'User'],function(){

    Route::get('/','HomeController@index');
    Route::get('post/{post}','PostController@post')->name('post');
    Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
    Route::get('post/category/{category}','HomeController@category')->name('category');
});

Route::group(['namespace' => 'Admin'],function(){

    Route::get('admin/home','HomeController@index')->name('admin.home');
    Route::resource('admin/user','UserController');
    Route::resource('admin/role','RoleController');
    Route::resource('admin/permission','permissionController');
	Route::resource('admin/post','PostController');
    Route::resource('admin/tag','TagController');
    Route::resource('admin/category','CategoryController');
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
});


//Route::get('admin/home',function() {
//	return view ('admin.home');
//})->name('post');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

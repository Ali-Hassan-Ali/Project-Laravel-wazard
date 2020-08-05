<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('web_development', 'WebDevelopmentController');
Route::resource('mobile_app', 'MobilAppController');
Route::resource('data_base', 'MobilAppController');
Route::resource('cyber_security', 'CyberSecurityController');//end of Route Cyber_security


Route::get('/index', function () {
    return view('index');
});

Route::get('profile', function () {
    return view('pages.profile');
});

Route::get('courses', function () {
    return view('pages.courses');
})->name('courses');

Route::get('/centers', function () {
    return view('pages.centers');
});
Route::get('/educational_org', function () {
    return view('pages.educational_org');
});
Route::get('/careers', function () {
    return view('pages.careers');
});
//Route::get('/web_development', function () {
//    return view('pages.web_development');
//});
//Route::get('/cyber_security', function () {
//    return view('pages.cyber_security');
//});
//Route::get('/data_base', function () {
//    return view('pages.data_base');
//});
//Route::get('/mobile_app', function () {
//    return view('pages.mobile_app');
//});

Route::resource('addcmaterial', 'AddCmaterialController');//end of Route addcmaterial

<?php

use Illuminate\Support\Facades\Route;

Route::resource('SignUp', 'LoginAndRegister\RegisterController');//end of Route Education

Route::group(['middleware' => 'auth'], function () {

    Route::resource('Account', 'Account\MyAccountController');//end of Route Education

    Route::resource('AccountProfile', 'Account\AccountProfileController');//end of Route Education
});

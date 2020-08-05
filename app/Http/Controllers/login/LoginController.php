<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function store(Request $request)
    {
//        dd($request->all());
        if (Auth::attempt([
            'email' => $request->input("email"),
            'password' => $request->input("password")
        ])) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect()->to('index');
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }

}

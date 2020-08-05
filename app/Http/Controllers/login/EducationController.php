<?php

namespace App\Http\Controllers\login;

use App\EducationalOrg;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;


class EducationController extends Controller
{

    public function index(Request $request)
    {
        dd($request->all());
        if (auth()->guard()->attempt([
            'email' => $request->input("email"),
            'password' => $request->input("password")
        ])) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect()->back();
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
//        dd($request->all());

        $user = User::create($request->all());

        auth()->login($user);

        return redirect()->to('/index');
    }

    public function show(EducationalOrg $educationalOrg)
    {
        //
    }


    public function edit(EducationalOrg $educationalOrg)
    {
        //
    }


    public function update(Request $request, EducationalOrg $educationalOrg)
    {
        //
    }


    public function destroy(EducationalOrg $educationalOrg)
    {
        //
    }


}

<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use App\TrainingOrg;
use Illuminate\Http\Request;

class TrainingOrgController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
//            'first_name' => 'required',
//            'last_name' => 'required',
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);

        $EducationalOrgs = TrainingOrg::create(request(['name', 'email', 'password']));

        auth()->login($EducationalOrgs);

        return redirect()->route('dashboard');
    }


    public function show(TrainingOrg $trainingOrg)
    {
        //
    }


    public function edit(TrainingOrg $trainingOrg)
    {
        //
    }


    public function update(Request $request, TrainingOrg $trainingOrg)
    {
        //
    }

    public function destroy(TrainingOrg $trainingOrg)
    {
        //
    }
}

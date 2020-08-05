<?php

namespace App\Http\Controllers\lofin;

use App\Http\Controllers\Controller;
use App\WorkOrg;
use Illuminate\Http\Request;

class WorkOrgController extends Controller
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

        $EducationalOrgs = WorkOrg::create(request(['name', 'email', 'password']));

        auth()->login($EducationalOrgs);

        return redirect()->route('dashboard');
    }


    public function show(WorkOrg $workOrg)
    {
        //
    }


    public function edit(WorkOrg $workOrg)
    {
        //
    }


    public function update(Request $request, WorkOrg $workOrg)
    {
        //
    }


    public function destroy(WorkOrg $workOrg)
    {
        //
    }
}

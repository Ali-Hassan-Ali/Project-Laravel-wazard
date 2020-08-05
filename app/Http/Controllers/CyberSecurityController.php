<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CyberSecurityController extends Controller
{
    public function index()
    {
        $courses = course::all();
        return view('pages.cyber_security', compact('courses'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Course $course)
    {
        //
    }


    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}

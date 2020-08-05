<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;


class CoursesController extends Controller
{

public function index(){

    $courses = course::all();

    return view('courses',compact('courses'));
}
    //
    public function create(){
        return view('courses');
    }
    public function storeCourse(){

        $course = new course();

        $course-> name = request('name');
        $course->description = request('description');

        $course->save();

        return redirect('/courses');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use Intervention\Image\Facades\Image;

class AddCourseController extends Controller
{
    public function index()
    {
        $courses=course::all();
        return view('/courses',compact('courses'));
        //
    }


    public function create()
    {
        return view('/index');
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'course_type' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'image',
        ]);

        $request_data = $request->except(['image']);

        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/Course/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if

        $courses=course::create($request_data);
        return redirect('/courses');


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

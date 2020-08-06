<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use Intervention\Image\Facades\Image;

class AddCmaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=course::all();
        return view('/courses',compact('courses'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/index');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
                ->resize(300, 450  .null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/cource/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if

        $courses=course::create($request_data);
        return redirect('/courses');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

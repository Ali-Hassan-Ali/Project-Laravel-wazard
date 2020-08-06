<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'name',
        'course_type',
        'description',
        'link',
        'image'
    ];    //


    protected $appends = ['image_path'];


    public function getImagePathAttribute()
    {
        return asset('uploads/Course/' . $this->image);

    }//end of get image path

}


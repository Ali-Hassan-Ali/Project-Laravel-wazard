<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *'last_name','dob','sex',
     * 'total_stars','month_stars','country','city','address_detailed',
     * 'resume','cv1','cv2','cv3','cv4','student','staff','employee',
     * 'trainer','phone1','phone2','brief','image_url',
     *
     * @var array
     */
    protected $fillable = [
        'last_name', 'first_name', 'email', 'password', 'organization', 'image'
        , 'dob', 'cv1', 'cv2', 'cv3', 'cv4', 'country', 'phone1', 'phone2'
    ];

    protected $appends = ['image_path'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function getImagePathAttribute()
    {
        return asset('uploads/user_images/' . $this->image);

    }//end of get image path
}

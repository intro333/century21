<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UserForm extends Model
{
    protected $fillable = [
    	'name',
    	'email',
    	'phone',
    	'sex',
    	'birthday',
    	'events'
    ];

    public $timestamps = false;

    public function getBirthdayAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function formBirthdayAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}

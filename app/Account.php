<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Morilog\Jalali\jDateTime;
use jDate;

class Account extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'stream_name', 'start_date', 'end_date', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function setStartDateAttribute($value) {
        if(preg_match("/[0-9]{4}\/[0-9]{2}\/[0-9]{2}/", $value)) {
            $v = explode('/', $value);
            $v_date = jDateTime::createDatetimeFromFormat("Y/m/d", $value);
            $this->attributes['start_date'] = $v_date;
        } else
            $this->attributes['start_date'] = $value;
    }

    public function setEndDateAttribute($value) {

        if(preg_match("/[0-9]{4}\/[0-9]{2}\/[0-9]{2}/", $value)) {
//            $v = explode('/', $value);
            $v_date = jDateTime::createDatetimeFromFormat("Y/m/d", $value);
//            dd($v_date);
            $this->attributes['end_date'] = $v_date;
        } else
            $this->attributes['end_date'] = $value;
    }

    public function getEndDateAttribute($value) {
//        dd($value);
        return jDate::forge($value)->format('Y/m/d');
    }


    public function getStartDateAttribute($value) {
        return jDate::forge($value)->format('Y/m/d');
    }


    public function scopeActive($query) {
        return $query->where('start_date', '<', Carbon::now())->where('end_date', '>=', Carbon::now());
    }
}

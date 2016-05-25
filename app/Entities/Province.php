<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = ['country_id','province_name'];

    //Esta funcion retorna la relacion entre la tabla de countries
    public function country()
    {
        return $this->belongsTo('App\Entities\Country');
    }
    //Esta funcion retorna la relacion entre la tabla de cities
    public function cities()
    {
        return $this->hasMany('App\Entities\City');
    }
}

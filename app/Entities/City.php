<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = ['province_id','city_name'];

    //Esta funcion retorna la relacion entre la tabla de provincies
    public function province()
    {
        return $this->belongsTo('App\Entities\Province');
    }
}

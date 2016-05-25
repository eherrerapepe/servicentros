<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = ['country_name'];

    //Esta funcion retorna la relacion entre la tabla de provinces
    public function provinces()
    {
        return $this->hasMany('App\Entities\Province');
    }
}

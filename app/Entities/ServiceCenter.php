<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ServiceCenter extends Model
{
    protected $table = 'service_centers';
    protected $fillable = ['program_id','country_id','estado','nombre','province_id','city_id','propietario','contrato_vence','direccion','telefono1','telefono2','latitud','longitud','foto1','foto2','foto3'];
}

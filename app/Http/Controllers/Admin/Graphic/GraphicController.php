<?php

namespace App\Http\Controllers\Admin\Graphic;

use App\Entities\Country;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GraphicController extends Controller
{
    //Graphic for Bar Figure
    public function countryNames()
    {
        $countries = Country::select('country_name')->get();
    }
}

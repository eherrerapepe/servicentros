<?php

namespace App\Http\Controllers\Admin\CreateCities;

use App\Entities\City;
use App\Entities\Province;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function showDates(){

        //Obtenemos todas las ciudades actualmente registradas
        $dates = City::get();
        return json_encode($dates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Consultamos las provincias y guardamos los datos en la variable provincies
        $provincies = Province::get();

        //Retornamos la vista con los paises actualmente registrados
        return view('admin.cities.createCitiesForm', ['provincies'=>$provincies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataCity = $request->all();
        City::create($dataCity);
        //Redireccionamos al usuaria a la pagina del index para countries, provinces and cities
        return redirect()->route('indexCountry');
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

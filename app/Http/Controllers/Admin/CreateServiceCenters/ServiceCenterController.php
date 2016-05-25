<?php

namespace App\Http\Controllers\Admin\CreateServiceCenters;

use App\Entities\City;
use App\Entities\Country;
use App\Entities\Program;
use App\Entities\Province;
use App\Entities\ServiceCenter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ServiceCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.servicecenters.index');
    }
    
    public function showDates()
    {
        //Consultamos todos los servicentros registrados
        $dates = ServiceCenter::join('programs','service_centers.program_id','=','programs.id')
            ->join('countries','service_centers.country_id','=','countries.id')
            ->join('provinces','service_centers.province_id','=','provinces.id')
            ->join('cities','service_centers.city_id','=','cities.id')
            ->select('service_centers.*','countries.country_name','provinces.province_name','cities.city_name')
            ->get();
        //dd($dates);
        return json_encode($dates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Enviamos y consultamos los Paises y los programas registrados
        $dateCountries = Country::select('id as country_id','country_name')->get();
        $dateProvince = Province::select('id as province_id', 'province_name','country_id')->get();
        $dateCity = City::select('id as city_id', 'city_name','province_id')->get();
        $datePrograms = Program::select('id as program_id','program_name')->get();

        return view('admin.servicecenters.createServiceCenterForm',['provinces'=> $dateProvince,'cities'=> $dateCity,'countries'=> $dateCountries,'programs'=>$datePrograms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Obtenemos todos los datos del formulario
        $data = $request->all();

        if(Input::hasFile('foto_1')){
            //Obtenemos el campo file_1 definido en el formulario
            $file_1 = $request->file('foto_1');
            //Obtenemos el nombre del archivo
            $nameFile_1 = $file_1->getClientOriginalName();
            //Indicamos donde se guardara la foto
            $file_1->move('storage',$nameFile_1);
            $data['foto1'] = $nameFile_1;
        }

        if(Input::hasFile('foto_2')){
            //Obtenemos el campo file_2 definido en el formulario
            $file_2 = $request->file('foto_2');
            //Obtenemos el nombre del archivo
            $nameFile_2 = $file_2->getClientOriginalName();
            //Indicamos donde se guardara la foto
            $file_2->move('storage',$nameFile_2);
            $data['foto2'] = $nameFile_2;
        }

        if(Input::hasFile('foto_3')){
            //Obtenemos el campo file_3 definido en el formulario
            $file_3 = $request->file('foto_3');
            //Obtenemos el nombre del archivo
            $nameFile_3 = $file_3->getClientOriginalName();
            //Indicamos donde se guardara la foto
            $file_3->move('storage',$nameFile_3);
            $data['foto3'] = $nameFile_3;
        }


        //dd($data);

        ServiceCenter::create($data);

        return redirect()->route('indexServiceCenter');

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

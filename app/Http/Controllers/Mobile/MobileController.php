<?php

namespace App\Http\Controllers\Mobile;

use App\Entities\Contact;
use Illuminate\Http\Request;
use App\Entities\City;
use App\Entities\Country;
use App\Entities\Province;
use App\Entities\ServiceCenter;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataServiceCenter = ServiceCenter::join('countries','service_centers.country_id','=','countries.id')
            ->join('provinces','service_centers.province_id','=','provinces.id')
            ->join('cities','service_centers.city_id','=','cities.id')
            ->select('service_centers.*','countries.country_name','provinces.province_name','cities.city_name')
            ->get();

        $dataCountry = Country::get();
        $dataProvince = Province::get();
        $dataCity = City::get();

        //dd($dataServiceCenter);

        return view('interfaceForMobile.index',['serviceCenters' => $dataServiceCenter,'countries'=>$dataCountry,'provinces'=>$dataProvince,'cities'=>$dataCity]);
    }

    public function show($id)
    {
        $dataCountry = Country::get();
        $dataProvince = Province::get();
        $dataCity = City::get();

        //Consultamos el servicentro mediante el id
        $dataServicentro = ServiceCenter::join('countries','service_centers.country_id','=','countries.id')
            ->join('provinces','service_centers.province_id','=','provinces.id')
            ->join('cities','service_centers.city_id','=','cities.id')
            ->select('service_centers.*','countries.country_name','provinces.province_name','cities.city_name')
            ->find($id);

        //Consultamos los contactos de los servicentros
        $dataContacts = Contact::where('contacts.service_center_id','=',$id)->get();


        //dd($dataServicentro);

        return view('interfaceForMobile.serviceCenterShow',['contacts'=>$dataContacts,'serviceCenter' => $dataServicentro,'countries'=>$dataCountry,'provinces'=>$dataProvince,'cities'=>$dataCity]);
    }

    public function showDates()
    {
        $dataServiceCenter = ServiceCenter::join('countries','service_centers.country_id','=','countries.id')
            ->join('provinces','service_centers.province_id','=','provinces.id')
            ->join('cities','service_centers.city_id','=','cities.id')
            ->select('service_centers.*','countries.country_name','provinces.province_name','cities.city_name')
            ->get();

        //dd($dataServiceCenter);
        return json_encode($dataServiceCenter);
    }

    public function showMap()
    {
        $dataServiceCenter = ServiceCenter::join('countries','service_centers.country_id','=','countries.id')
            ->join('provinces','service_centers.province_id','=','provinces.id')
            ->join('cities','service_centers.city_id','=','cities.id')
            ->select('service_centers.*','countries.country_name','provinces.province_name','cities.city_name')
            ->get();
        $i= 0;
        foreach($dataServiceCenter as $establishment){
            $establishmentArray[$i] =
            $center = array(
                'Title' =>
                        '<div class="row"><div class="col s10 offset-s1"><h5 class="blue-text"><a href="/serviceDetail/'
                        .$establishment->id.'"></a>'.$establishment->nombre.'</h5><p><strong>Propietario:</strong><br>'
                        .$establishment->propietario.'</p><p><strong>Direccion:</strong><br>'
                        .$establishment->direccion.'</p><p><strong>Teléfono:</strong><br>'
                        .$establishment->telefono1.'</p><div class="divider"></div><br><a class="btn small waves waves-effect blue-grey" href="/serviceDetail/'
                        .$establishment->id.'">Ver Detalle</a></div></div>',
                'Lat' => $establishment->latitud,
                'Lng' => $establishment->longitud
            );
            $i++;
        }

        $jsonDates = json_encode($establishmentArray,JSON_UNESCAPED_UNICODE);

        $fh = fopen("dates/markerServiceCenters.json", 'w');
        fwrite($fh, $jsonDates);
        fclose($fh);

        //Retornamos la vista para la visualizacion del mapa completo
        return view('interfaceForMobile.serviceCenterInMap');
    }

    public function marcarRuta($id){
        $lat = ServiceCenter::select('latitud')->find($id);
        $lng = ServiceCenter::select('longitud')->find($id);

        return view('interfaceForMobile.marcarRuta',['latitude'=>$lat,'longitud'=>$lng]);
    }

}

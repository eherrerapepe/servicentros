<?php

/*
 * Activamos el csrf para todas las rutas como proteccion
 * para otros sitios no seguros, esto lo hacemos para
 * los vervos
 */

Route::group(['middleware'=>['cors']], function(){
    /*
     * Rutas para la parte del fronted de la aplicacion
     */
    Route::get('/',[
        'as' => 'home',
        'uses' => 'Index\IndexController@index'
    ]);

    //Rutas para la aplicacion de mobile

    Route::get('/mobile',[
        'as' => 'indexMobile',
        'uses' => 'Mobile\MobileController@index'
    ]);

    Route::get('serviceDetail/{id}',[
        'as' => 'serviceDetail',
        'uses' => 'Mobile\MobileController@show'
    ]);

    Route::get('listCenterMobile','Mobile\MobileController@showDates');
    Route::get('listCenterMobileInMap','Mobile\MobileController@showMap');
    Route::get('saberComoLlegar/{id}','Mobile\MobileController@marcarRuta');

    /*
     * Rutas para el login de los usuraios y la recuperacion de la contraseña
     */
    // Authentication routes...
    Route::get('login', [
        'uses' => 'Auth\AuthController@getLogin',
        'as' => 'loginGet'
    ]);
    Route::post('login', [
        'uses' => 'Auth\AuthController@postLogin',
        'as' => 'loginPost'
    ]);
    Route::get('logout', [
        'uses' => 'Auth\AuthController@getLogout',
        'as' => 'logoutGet'
    ]);

    // Password reset link request routes...
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');

    // Password reset routes...
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');

    //////////////////////////////////////////////////////////////////////////////////////////////////////7

    /*
     * Rutas para el administrador cuando haya iniciado sesion
     */
    Route::group(['middleware' => 'auth'], function (){

        Route::get('/admin',[
            'uses' => 'Admin\IndexController@index',
            'as' => 'admin'
        ]);

        //COUNTRIES//////////////////////////////////////////////////////////////////////////////////////////
        //Rutas para la creacion de los paises, provincias y sus ciudades
        Route::get('paises',[
            'uses' => 'Admin\CreateCountries\CountryController@index',
            'as' => 'indexCountry'
        ]);
        //Obtenemos todos los Paises - Angular
        Route::get('listaPaises','Admin\CreateCountries\CountryController@showDates');
        //Mostramos el formulario para registrar el País
        Route::get('createCountry',[
            'uses' => 'Admin\CreateCountries\CountryController@create',
            'as' => 'createCountry'
        ]);
        //Ruta para registrar el País
        Route::post('saveCountry',[
            'uses' => 'Admin\CreateCountries\CountryController@store',
            'as' => 'saveCountry'
        ]);
        ////////////////////////////////////////////////////////////////////////////////////////////////////

        //PROVINCES/////////////////////////////////////////////////////////////////////////////////////////
        //Obtenemos todas las Provincias - Angular
        Route::get('listProvinces','Admin\CreateProvinces\ProvinceController@showDates');
        //Mostramos el formulario para registrar el País
        Route::get('createProvince',[
            'uses' => 'Admin\CreateProvinces\ProvinceController@create',
            'as' => 'createProvince'
        ]);
        //Ruta para registrar el Provincia
        Route::post('saveProvince',[
            'uses' => 'Admin\CreateProvinces\ProvinceController@store',
            'as' => 'saveProvince'
        ]);
        ////////////////////////////////////////////////////////////////////////////////////////////////////

        //CITIES/////////////////////////////////////////////////////////////////////////////////////////
        //Obtenemos todas las ciudades - Angular
        Route::get('listCities','Admin\CreateCities\CityController@showDates');
        //Mostramos el formulario para registrar la ciudad
        Route::get('createCity',[
            'uses' => 'Admin\CreateCities\CityController@create',
            'as' => 'createCity'
        ]);
        //Ruta para registrar el Provincia
        Route::post('saveCity',[
            'uses' => 'Admin\CreateCities\CityController@store',
            'as' => 'saveCity'
        ]);
        ////////////////////////////////////////////////////////////////////////////////////////////////////

        //PROGRAMS/////////////////////////////////////////////////////////////////////////////////////////
        //Obtenemos todos los programas - Angular
        Route::get('listProgram','Admin\CreatePrograms\ProgramController@showDates');
        //Mostramos los programas registrados al usuario en el index
        Route::get('programas',[
            'uses' => 'Admin\CreatePrograms\ProgramController@index',
            'as' => 'indexProgram'
        ]);
        //Mostramos el formulario para registrar un programa
        Route::get('createProgram',[
            'uses' => 'Admin\CreatePrograms\ProgramController@create',
            'as' => 'createProgram'
        ]);
        //Ruta para registrar el Programa
        Route::post('saveProgram',[
            'uses' => 'Admin\CreatePrograms\ProgramController@store',
            'as' => 'saveProgram'
        ]);

        //SERVICECENTERS/////////////////////////////////////////////////////////////////////////////////////////
        //Obtenemos todos los servicentros - Angular
        Route::get('listServiceCenters','Admin\CreateServiceCenters\ServiceCenterController@showDates');
        //Ruta para cargar los paises en el formulario
        Route::get('countries','Admin\CreateServiceCenters\ServiceCenterController@countries');
        //Mostramos los servicentros registrados al usuario en el index
        Route::get('servicentros',[
            'uses' => 'Admin\CreateServiceCenters\ServiceCenterController@index',
            'as' => 'indexServiceCenter'
        ]);
        //Mostramos el formulario para registrar un servicentro
        Route::get('createServiceCenter',[
            'uses' => 'Admin\CreateServiceCenters\ServiceCenterController@create',
            'as' => 'createServiceCenter'
        ]);
        //Ruta para registrar el servicentro
        Route::post('saveServiceCenter',[
            'uses' => 'Admin\CreateServiceCenters\ServiceCenterController@store',
            'as' => 'saveServiceCenter'
        ]);
        //Obtenemos los datos de la provincia mediante el id de pais
        Route::get('provincesId/{id}','Admin\CreateServiceCenters\ServiceCenterController@provinceId');
        //Obtenemos los datos de la ciudades mediante el id de la provincia
        Route::get('cityId/{id}','Admin\CreateServiceCenters\ServiceCenterController@cityId');
        ////////////////////////////////////////////////////////////////////////////////////////////////////

        //CONTACTS/////////////////////////////////////////////////////////////////////////////////////////
        //Obtenemos todos los servicentros - Angular
        Route::get('listContact','Admin\CreateContacs\ContactController@showDates');
        //Ruta para el index de los contactos
        Route::get('contactos',[
            'uses' => 'Admin\CreateContacs\ContactController@index',
            'as' => 'indexContact'
        ]);
        //Formulario para crear un nuevo contacto
        Route::get('crear_contacto_nuevo',[
            'uses' => 'Admin\CreateContacs\ContactController@create',
            'as' => 'createContact'
        ]);
        //Guardamos el registro de contactos
        Route::post('guardar_contacto',[
            'uses' => 'Admin\CreateContacs\ContactController@store',
            'as' => 'saveContact'
        ]);
        Route::delete('contact_delete/{id}',[
            'uses' => 'Admin\CreateContacs\ContactController@destroy',
            'as' => 'delete'
        ]);
        ////////////////////////////////////////////////////////////////////////////////////////////////////

        //GRAPHIC/////////////////////////////////////////////////////////////////////////////////////////
        Route::get('countryNames','Admin\Graphic\GraphicController@countryNames');



    });
});
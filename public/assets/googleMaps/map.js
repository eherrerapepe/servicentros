/**
 * Created by Edgar on 24/05/16.
 */
function miUbicacion() {
    //Obtenemos el id del div que contendra el mapa
    var miUbMap = document.getElementById('viewMapMiUbicacion');

    //Funcion callback
    navigator.geolocation.getCurrentPosition( fn_ok, fn_error );

    //Funcion para cuando no nos autoriza a ontener la ubicacion
    function fn_error(){
        miUbMap.innerHTML = ' Error!. Para visualizar el mapa debe aceptar compartir su ubicacion ';
    }

    //Funcion cunado si tenemos la autorizacion para obtener la ubicacion
    function fn_ok( response )
    {
        if ($('.latitude_map').val() != '' && $('.longitude_map').val()){
            var lat = $('.latitude_map').val();
            var lon = $('.longitude_map').val();
        }else{
            //Obtenemos las coordenadas
            var lat = response.coords.latitude;
            var lon = response.coords.longitude;
            //Escribimos las coordenadas en los inputs
            $('.latitude_map').val(lat);
            $('.longitude_map').val(lon);
        }

        //Convertir esos datos en un objeto para que pueda leer la api de google
        var gLatLon = new google.maps.LatLng( lat, lon );

        //Parametro de configuracion para el canvas de nuestro Map (Variable de tipo object)
        var objectConfiguration = {
            zoom: 17,
            center: gLatLon,
            rotateControl:true
        };

        var gLatLonUser = new google.maps.LatLng( lat, lon );

        //Este es el mapa interactivo es decir el canvas; este recibe dos parametro el primero el div donde se va a dibujar y el objeto de configuracion como segundo parametro
        var gMap = new google.maps.Map( miUbMap, objectConfiguration );

        //Configuramos el objeto que minimo acepta la posicion (Lat,Long) y en que mapa se va a mostrar
        var objectConfigurationMarker = {
            map: gMap,
            position: gLatLonUser,
            draggable: false,
            //animation: google.maps.Animation.BOUNCE,
            title: 'Usted esta ubicado aki'
        };

        //Agregando las Marker
        var gMarker = new google.maps.Marker( objectConfigurationMarker );
        //Cambiamos el icono del Marker
        gMarker.setIcon('http://localhost:8000/assets/materialize/img/valvolineMarker.png');

        //Escribimos un mensaje sobre el Maker del Usuario para decirle que esta ubicado aqui
        var infowindow = new google.maps.InfoWindow({
            content:"Esta es tu Ubicación"
        });
    }
}
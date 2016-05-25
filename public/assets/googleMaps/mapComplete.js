
/*
 Codigo para visualizar todos los servicentros
 */
function mapComplete() {

    //Ajustamos a la pantalla
    styleInMap();

    //Obtenemos el id del div que contendra el mapa
    var mapComplete = document.getElementById('mapComplete');

    //Funcion callback
    navigator.geolocation.getCurrentPosition( fn_ok, fn_error );

    //Funcion para cuando no nos autoriza a ontener la ubicacion
    function fn_error(){
        //mapComplete.innerHTML = ' Error!. Para visualizar el mapa debe aceptar compartir su ubicacion ';
    }

    //Funcion cunado si tenemos la autorizacion para obtener la ubicacion
    function fn_ok( response )
    {
        //Obtenemos las coordenadas
        var latitudeMapComplete = response.coords.latitude;
        var longitudeMapComplete = response.coords.longitude;

        //Convertir esos datos en un objeto para que pueda leer la api de google
        var gMapCompleteLatLon = new google.maps.LatLng( latitudeMapComplete, longitudeMapComplete );

        //Parametro de configuracion para el canvas de nuestro Map (Variable de tipo object)
        var objectConfiguration = {
            zoom: 8,
            center: gMapCompleteLatLon,
            rotateControl:true
        };

        var ubUserViewMapComplete = new google.maps.LatLng( latitudeMapComplete, longitudeMapComplete );

        //Este es el mapa interactivo es decir el canvas; este recibe dos parametro el primero el div donde se va a dibujar y el objeto de configuracion como segundo parametro
        var mapCompleteMarker = new google.maps.Map( mapComplete, objectConfiguration );

        //Configuramos el objeto que minimo acepta la posicion (Lat,Long) y en que mapa se va a mostrar
        var objectConfigurationMarker = {
            map: mapCompleteMarker,
            position: ubUserViewMapComplete,
            draggable: false,
            //animation: google.maps.Animation.BOUNCE,
            title: 'Usted esta ubicado aki'
        };

        //Agregando las Marker
        var gMarker = new google.maps.Marker( objectConfigurationMarker );
        //Cambiamos el icono del Marker
        gMarker.setIcon('http://localhost:8000/assets/materialize/img/men.png');

        //Escribimos un mensaje sobre el Maker del Usuario para decirle que esta ubicado aqui
        var infowindow = new google.maps.InfoWindow({
            content:"Esta es tu Ubicación"
        });

        //Markers de la base de datos leemos el archivo json y convertimos en array de datos
        $.getJSON("/dates/markerServiceCenters.json", function(dates)
        {

            //Creamos un array vacio
            var markerServiceCenter = [];

            for (var id in dates) {
                markerServiceCenter.push(dates[id]);
            }

            //Marker info de los puntos consultados en la base de datos
            var infoWindowsServiceCenter = new google.maps.InfoWindow();
            //Definimos dos variables
            var markerServiceCenterInMap, i;

            for(i = 0; i < markerServiceCenter.length; i++){
                markerServiceCenterInMap = new google.maps.Marker({
                    position: new google.maps.LatLng( markerServiceCenter[i]['Lat'], markerServiceCenter[i]['Lng'] ),
                    map: mapCompleteMarker
                });
                //Cambiamos el icono del Marker
                markerServiceCenterInMap.setIcon('http://localhost:8000/assets/materialize/img/valvolineMarker.png');
                google.maps.event.addListener(markerServiceCenterInMap, 'click', (function(markerServiceCenterInMap, i){
                    return function(){
                        infoWindowsServiceCenter.setContent(markerServiceCenter[i]['Title']);
                        infoWindowsServiceCenter.open(mapCompleteMarker, markerServiceCenterInMap);
                    }
                })( markerServiceCenterInMap, i ));

            }

        });

    }
}

mapComplete();

function styleInMap()
{
    var contenedor = document.getElementById('mapComplete');
    var heightMax = window.innerHeight;
    contenedor.style.height = heightMax+'px';
}
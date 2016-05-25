function cargarMapa() {
    var mapa = document.getElementById('mapUbCenter');
    var latitude = document.getElementById('latitud').value;
    var longitud = document.getElementById('longitud').value;

    //Convertir esos datos en un objeto para que pueda leer la api de google
    var goLatLon = new google.maps.LatLng( latitude, longitud );

    //Parametro de configuracion para el canvas de nuestro Map (Variable de tipo object)
    var objConfig = {
        zoom: 17,
        center: goLatLon,
        rotateControl:true
    };

    var goLaLng = new google.maps.LatLng( latitude, longitud );

    //Este es el mapa interactivo es decir el canvas; este recibe dos parametro el primero el div donde se va a dibujar y el objeto de configuracion como segundo parametro
    var goMap = new google.maps.Map( mapa, objConfig );

    //Configuramos el objeto que minimo acepta la posicion (Lat,Long) y en que mapa se va a mostrar
    var objectConfigurationMarker = {
        map: goMap,
        position: goLaLng,
        draggable: false,
        //animation: google.maps.Animation.BOUNCE,
        title: 'Ubicacion del Servicentro'
    };

    //Agregando las Marker
    var gMarker = new google.maps.Marker( objectConfigurationMarker );
    //Cambiamos el icono del Marker
    gMarker.setIcon('http://localhost:8000/assets/materialize/img/valvolineMarker.png');

    //Escribimos un mensaje sobre el Maker del Usuario para decirle que esta ubicado aqui
    var infowindow = new google.maps.InfoWindow({
        content:"El servicentro se encuentra ubicado aquí"
    });
}
//Cargamos el mapa para cuando de click en detalle del servicentro
cargarMapa();
function caragarRuta() {

    //Ajustamos a la pantalla
    styleInMap();

    //Obtenemos el id del div que contendra el mapa
    var mapComplete = document.getElementById('mapComplete');

    //pedimos las coordenadas al usuario
    navigator.geolocation.getCurrentPosition(fn_ok, fn_error);

    function fn_error() {

    }

    function fn_ok(rta) {
        var lat = rta.coords.latitude;
        var lng = rta.coords.longitude;
        //Comvertimos a un objeto de google
        var gLatLon = new google.maps.LatLng( lat, lng );
        //Objeto de configuracion
        var objConfig = {
            zoom: 8,
            center: gLatLon
        };
        //Creamos el mapa
        var gMap = new google.maps.Map(mapComplete, objConfig);

        //Agregando los marker
        //Onjeto de configuracion del Marker
        var objConfigMarker = {
            position: gLatLon,
            map: gMap,
            title: "Esta es su ubicación"
        };
        //Creamos el marker del usuario
        var gMarkerUser = new google.maps.Marker(objConfigMarker);
        //Cambiamos el icono del Marker
        gMarkerUser.setIcon('http://localhost:8000/assets/materialize/img/men.png');

        //Creamos el marker para el Service Center
        var latCenter = document.getElementById('latitude').value;
        var lngCenter = document.getElementById('longitude').value;
        //Convertimos a un objeto de google
        var gCenterLatLng = new google.maps.LatLng(latCenter,lngCenter);
        //Creamos la configuracion para el marker
        var objConfigMarkerCenter = {
            position: gCenterLatLng,
            map: gMap,
            title: "ServiceCenter"
        };
        //Creamos el marker como tal
        var gMarkerCenter = new google.maps.Marker(objConfigMarkerCenter);
        //Cambiamos el icono del Marker
        gMarkerCenter.setIcon('http://localhost:8000/assets/materialize/img/valvolineMarker.png');

        //Marcamos la ruta
        //Objeto de configuracion para el directionRender
        var objConfigDr = {
            map: gMap,
            suppressMarkers: true
        };
        //Objeto de configuracion para trazar la ruta
        var objConfigDs = {
            origin: gLatLon,
            destination: gCenterLatLng,
            travelMode: google.maps.TravelMode.DRIVING
        };
        var ds = new google.maps.DirectionsService(); //Esta funcion permite saber a que lado se tiene que mover el usuario
        var dr = new google.maps.DirectionsRenderer(objConfigDr); //Esta es la funcion que traza la ruta

        ds.route(objConfigDs, fnRouter);

        function fnRouter(resultados, status) {
            if (status == 'OK'){
                dr.setDirections(resultados);
            }else{
                alert('Error! Al marcar la ruta');
            }
        }
    }

}

caragarRuta();

function styleInMap()
{
    var contenedor = document.getElementById('mapComplete');
    var heightMax = window.innerHeight;
    contenedor.style.height = heightMax+'px';
}
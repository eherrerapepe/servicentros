app.controller('countryCrtl', ['$scope','$http', function ($scope, $http) {
    /////////////////////////////////////////////////////////////////////////

    //Obtenemos la lista de paises registrados en la base de datos
    $http.get('http://localhost:8000/listaPaises').success(function (data) {
        $scope.countries = data;
    });

    /////////////////////////////////////////////////////////////////////////
    //Obtenemos la lista de provincias registradas en la base de datos
    $http.get('http://localhost:8000/listProvinces').success(function (data) {
        $scope.provinces = data;
    });

    /////////////////////////////////////////////////////////////////////////
    //Obtenemos la lista de provincias registradas en la base de datos
    $http.get('http://localhost:8000/listCities').success(function (data) {
        $scope.cities = data;
    });

    /////////////////////////////////////////////////////////////////////////
    //Obtenemos la lista de los programas registrados en la base de datos
    $http.get('http://localhost:8000/listProgram').success(function (data) {
        $scope.programs = data;
    });

}]);
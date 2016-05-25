app.controller('serviceCenterCrtl', ['$scope','$http', function ($scope, $http) {
    /////////////////////////////////////////////////////////////////////////
    //Obtenemos la lista de los programas registrados en la base de datos
    $http.get('http://localhost:8000/listServiceCenters').success(function (data) {
        $scope.serviceCenters = data;
    });

    //Obtenemos la lista de los contcatos registrados en la base de datos
    $http.get('http://localhost:8000/listContact').success(function (data) {
        $scope.contacts = data;
    });

    //$scope.rutaDelete = "contact_delete/";

}]);

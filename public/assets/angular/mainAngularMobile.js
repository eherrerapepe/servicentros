var appMobile = angular.module('angularMobile',['ngRoute']);

//Creamos el controlador principal de la aplicacion
appMobile.controller('mainMobileCtrl',['$scope','$http', function ($scope, $http) {
    $http.get('http://localhost:8000/listCenterMobile').success(function (data) {
        $scope.serviceCentersMobile = data;
    });
}]);


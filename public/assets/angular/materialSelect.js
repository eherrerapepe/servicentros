(function () {
    'use strict';

    app.directive('select', materialSelect)
        .controller('Main',function($scope){
            $scope.selected= null;

            //Obtenemos la lista de paises
            $http.get('http://localhost:8000/countries').success(function (data) {
                $scope.userList = data;
            });
            //$scope.userList = [{Id:'1',Name:'Suhail Ahmed'}];
        });

    materialSelect.$inject = ['$timeout'];

    function materialSelect($timeout) {
        var directive = {
            link: link,
            restrict: 'E',
            require: '?ngModel'
        };

        function link(scope, element, attrs, ngModel) {

            $timeout(create);
            if (ngModel){
                ngModel.$render = create;
            }

            function create() {
                element.material_select();
            }

            //if using materialize v0.96.0 use this
            element.one('$destroy', function () {
                element.material_select('destroy');
            });


        }

        return directive;
    }

})();
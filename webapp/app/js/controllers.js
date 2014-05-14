'use strict';

/* Controllers */

angular.module('openAwesome.controllers', []);
angular.module('openAwesome.controllers').controller('MainCtrl', function ($location, $log, $scope, $resource, $routeParams) {
    var getParams = function () {
        $scope.searchQuery = angular.isDefined($routeParams.q) ? $routeParams.q : '';
        var params = {
            q: angular.isDefined($routeParams.q) ? $routeParams.q : ''
        };
        if (angular.isDefined($routeParams.component)) {
            params.component = $routeParams.component;
        }
        return params;
    };

    $scope.search = function (params) {
        $location.search(params);
    };

    $scope.search(getParams());

    var getSearchResults = function () {
        $scope.searchResults = $resource('/api/app_dev.php/audit').get(getParams());
    };

    $scope.$watch('$location.search', function () {
        $log.info('$location.search');
        getSearchResults();
    });

    $scope.$on('$routeUpdate', function () {
        $log.info('$routeUpdate');
        getSearchResults();
    });
});

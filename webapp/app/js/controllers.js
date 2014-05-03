'use strict';

/* Controllers */

angular.module('openAwesome.controllers', []);
angular.module('openAwesome.controllers').controller('MainCtrl', function ($scope, $resource, $routeParams) {
    $scope.searchQuery = angular.isDefined($routeParams.q) ? $routeParams.q : '';
    $scope.search = function () {
        if (angular.isDefined($scope.searchQuery) && $scope.searchQuery !== '') {
            $scope.searchResults = $resource('/api/app_dev.php/audit').get({ q: $scope.searchQuery });
        }
    };
    $scope.search();
});

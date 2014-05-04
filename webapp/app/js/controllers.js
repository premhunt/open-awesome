'use strict';

/* Controllers */

angular.module('openAwesome.controllers', []);
angular.module('openAwesome.controllers').controller('MainCtrl', function ($scope, $resource, $routeParams) {
    $scope.searchQuery = angular.isDefined($routeParams.q) ? $routeParams.q : '';
    $scope.search = function () {
        if (angular.isDefined($scope.searchQuery) && $scope.searchQuery !== '') {
            $scope.searchResults = $resource('/api/app_dev.php/audit').get({ q: $scope.searchQuery }, function (data) {
                $scope.groupedHits = [];
                var hits = data.hits.hits;
                var group = [];
                for (var i = 0; i < hits.length; i++) {
                    group.push(hits[i]);
                    if (i % 2 !== 0) {
                        $scope.groupedHits.push(group);
                        group = [];
                    } else if (i === hits.length - 1) {
                        $scope.groupedHits.push(group);
                    }
                }
            });
        }
    };
    $scope.search();
});

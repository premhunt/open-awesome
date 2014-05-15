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
        if (angular.isDefined($routeParams.page)) {
            params.page = $routeParams.page;
        }
        return params;
    };

    $scope.search = function (params) {
        $location.search(params);
    };
    $scope.search(getParams());

    $scope.setPage = function (page) {
        var params = getParams();
        params.page = page;
        $location.search(params);
    };

    $scope.numberOfPages = 0;
    var getSearchResults = function () {
        $scope.searchResults = $resource('/api/app_dev.php/audit').get(getParams(), function (response) {
            $scope.numberOfPages = Math.ceil(response.total_count / response.num_items_per_page);
            $scope.paginationIterator = new Array($scope.numberOfPages);
        });
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

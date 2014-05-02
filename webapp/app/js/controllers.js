'use strict';

/* Controllers */

angular.module('openAwesome.controllers', []);
angular.module('openAwesome.controllers').controller('MainCtrl', function ($scope, $resource, $modal, $log) {
    $scope.searchQuery = '';
    $scope.search = function () {
        $scope.searchResults = $resource('/api/app_dev.php/audit').get({ q: $scope.searchQuery });
    };
    $scope.isArray = angular.isArray;
    $scope.isString = angular.isString;
    $scope.humanize = function (text) {
        return angular.isString(text) ? text.replace(/(_)/g, ' ') : text;
    };
});

'use strict';

/* Controllers */

angular.module('openAwesome.controllers', []).controller('MainCtrl', function ($scope, $resource) {
    $scope.submitSearch = function () {
        $scope.system = $resource('data/mvp.json');
        $scope.system.get();
    };
    $scope.submitSearch();
});

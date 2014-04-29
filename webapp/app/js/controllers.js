'use strict';

/* Controllers */

angular.module('openAwesome.controllers', []);
angular.module('openAwesome.controllers').controller('MainCtrl', function ($scope, $resource, $modal, $log) {
    $scope.system = $resource('data/mvp.json').get();
    $scope.isArray = angular.isArray;
    $scope.isString = angular.isString;
    $scope.isObject = angular.isObject;
    $scope.humanize = function (text) {
        return angular.isString(text) ? text.replace(/(_)/g, ' ') : text;
    };
});

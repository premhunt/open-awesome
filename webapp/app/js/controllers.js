'use strict';

/* Controllers */

angular.module('openAwesome.controllers', []);
angular.module('openAwesome.controllers').controller('MainCtrl', function ($scope, $resource, $modal, $log) {
    $scope.system = $resource('data/mvp.json').get();
//    $scope.open = function (systemId) {
//        $modal.open({
//            templateUrl: 'system-modal.html',
//            controller: 'SystemModalCtrl',
//            resolve: {
//                system: function () {
//                    return $resource('data/mvp.json').get({id: systemId});
//                }
//            }
//        });
//    };
    $scope.isArray = angular.isArray;
    $scope.isString = angular.isString;
    $scope.isObject = angular.isObject;
    $scope.humanize = function (text) {
        return angular.isString(text) ? text.replace(/(_)/g, ' ') : text;
    };
});


//angular.module('openAwesome.controllers').controller('SystemModalCtrl',function ($scope, $modalInstance, system) {
//    $scope.system = system;
//});
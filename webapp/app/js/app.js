'use strict';


// Declare app level module which depends on filters, and services
angular.module('openAwesome', [
        'ngAnimate',
        'ngResource',
        'ngRoute',
        'openAwesome.filters',
        'openAwesome.services',
        'openAwesome.directives',
        'openAwesome.controllers',
        'ui.bootstrap'
    ]).
    config(function ($locationProvider, $routeProvider) {
        $locationProvider.html5Mode(true);
        $locationProvider.hashPrefix('!');
        $routeProvider.when('/', {templateUrl: 'partials/main.html', controller: 'MainCtrl', reloadOnSearch: false});
        $routeProvider.otherwise({redirectTo: '/'});
    });

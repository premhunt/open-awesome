'use strict';

/* Filters */

angular.module('openAwesome.filters', []).filter('humanize', function () {
    return function (input) {
        return input.charAt(0).toUpperCase() + input.substr(1).replace(/[A-Z]/g, ' $&');
    };
});

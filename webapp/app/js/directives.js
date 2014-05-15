'use strict';

/* Directives */
angular.module('openAwesome.directives', []);
angular.module('openAwesome.directives').directive('systemComponent', function ($location) {
    return {
        templateUrl: 'partials/directives/system-component.html',
        scope: {
            systemComponent: '='
        },
        link: function (scope) {
            scope.iconClass = function (input) {
                if (input === 'printer') {
                    return 'fa-print';
                } else if (input.match(/windows/gi)) {
                    return 'fa-windows';
                } else if (input.match(/apple/gi)) {
                    return 'fa-apple';
                }
                return 'fa-desktop';
            };

            scope.isArray = angular.isArray;
            scope.isString = angular.isString;
            scope.humanize = function (text) {
                return angular.isString(text) ? text.replace(/(_)/g, ' ') : text;
            };

            scope.isMoreInfoVisible = scope.systemComponent.isMoreInfoVisible;
            scope.toggleMoreInfo = function () {
                scope.isMoreInfoVisible = !scope.isMoreInfoVisible;
            };

            scope.displayName = angular.isDefined(scope.systemComponent.displayName) ?
                scope.systemComponent.displayName :
                scope.humanize(scope.systemComponent.name);

            if (angular.isDefined(scope.systemComponent.component)) {
                scope.component = scope.systemComponent.component;
                scope.isMultipleComponents = angular.isArray(scope.component);
                scope.isStringArray = scope.isMultipleComponents && scope.component.length > 0 && angular.isString(scope.component[0]);
                scope.itemHeaderTemplateUrl = '/system-' + scope.systemComponent.name + '-item-header.html';
            }

            scope.selectSystem = function () {
                $location.search({q: scope.component.system.uuid});
            };

            scope.componentNames = ['processor', 'memory', 'network_card'];
            scope.selectComponent = function (componentName) {
                $location.search({q: scope.component.uuid, component: componentName});
            };
        }
    };
});

angular.module('openAwesome.directives').directive('updateInProgress', function () {
    return {
        restrict: 'AE',
        replace: true,
        transclude: true,
        templateUrl: 'partials/directives/update-in-progress.html',
        scope: {
            updateInProgress: '='
        },
        link: function (scope, element) {
            var loadingIndicator = element.find('.loading-indicator');
            var loadedContent = element.find('.loaded-content');
            loadingIndicator.css('padding-top', '80px')
                .css('padding-bottom', '80px');
            var toggleIndicator = function (isResolved) {
                isResolved ? loadingIndicator.hide() : loadingIndicator.show();
                isResolved ? loadedContent.show() : loadedContent.hide();
            };
            typeof scope.updateInProgress === 'boolean' ?
                scope.$watch('updateInProgress', toggleIndicator) :
                scope.$watch('updateInProgress.$resolved', toggleIndicator);
        }
    };
});
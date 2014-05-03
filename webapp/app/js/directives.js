'use strict';

/* Directives */
angular.module('openAwesome.directives', []);
angular.module('openAwesome.directives').directive('dynatable', function () {
    return {
        scope: {
            dynatable: '='
        },
        link: function (scope, element) {
//            function osNameWriter(column, record) {
//                if (column.id === 'hostname') {
//                    return '<td><a ng-href="">' + record[column.id] + '</a></td>';
//                }
//                else if (column.id === 'os_name' && angular.isDefined(record.icon)) {
//                    return '<td><img src="img/tango-images/16_' + record.icon + '.png"></td>';
//                }
//                return '<td>' + record[column.id] + '</td>';
//            }

            element.dynatable({
//                writers: {
//                    _cellWriter: osNameWriter
//                },
                features: {
                    sort: false,
                    pushState: false,
                    paginate: false,
                    recordCount: false,
                    search: false
                },
                table: {
                    defaultColumnIdStyle: 'underscore'
                },
                dataset: {
//                    ajax: true,
//                    ajaxUrl: 'data/system_list.json',
//                    ajaxOnLoad: true,
                    records: []
                },
                inputs: {
                    processingText: '<i class="fa fa-spinner fa-spin fa-5x"></i>'
                }
            });
        }
    };
});

angular.module('openAwesome.directives').directive('systemComponent', function () {
    return {
        templateUrl: 'partials/system-component.html',
        scope: {
            systemComponent: '='
        },
        link: function (scope) {
            scope.isArray = angular.isArray;
            scope.isString = angular.isString;
            scope.humanize = function (text) {
                return angular.isString(text) ? text.replace(/(_)/g, ' ') : text;
            };

            scope.toggleMoreInfo = function (item) {
                item.isMoreInfoVisible = !item.isMoreInfoVisible;
            };

            scope.displayName = angular.isDefined(scope.systemComponent.displayName) ?
                scope.systemComponent.displayName :
                scope.humanize(scope.systemComponent.name);

            if (angular.isDefined(scope.systemComponent.component)) {
                scope.component = scope.systemComponent.component;
                scope.isMultipleComponents = angular.isArray(scope.component);
                scope.isStringArray = scope.isMultipleComponents && scope.component.length > 0 && angular.isString(scope.component[0]);
                scope.itemHeaderTemplateUrl = '/system-' + scope.systemComponent.name + '-item-header.html';
                if (scope.isMultipleComponents && !scope.isStringArray) {
                    for (var i in scope.component) {
                        scope.component[i].isMoreInfoVisible = false;
                    }
                }
            }
        }
    };
});

angular.module('openAwesome.directives').directive('updateInProgress', function () {
    return {
        restrict: 'AE',
        replace: true,
        transclude: true,
        template: '<div><div class="loading-indicator text-center"><div><i class="fa fa-spinner fa-spin fa-4x"></i></div>Loading...</div>' +
            '<div ng-transclude class="loaded-content"></div></div>',
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
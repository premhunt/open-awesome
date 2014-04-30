'use strict';

/* Directives */
angular.module('openAwesome.directives', []);
angular.module('openAwesome.directives').directive('dynatable', function () {
    return {
        link: function (scope, element) {
            function osNameWriter(column, record) {
                if (column.id === 'hostname') {
                    return '<td><a ng-href="">' + record[column.id] + '</a></td>';
                }
                else if (column.id === 'os_name' && angular.isDefined(record.icon)) {
                    return '<td><img src="img/tango-images/16_' + record.icon + '.png"></td>';
                }
                return '<td>' + record[column.id] + '</td>';
            }

            element.dynatable({
                writers: {
                    _cellWriter: osNameWriter
                },
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
                    ajax: true,
                    ajaxUrl: 'data/system_list.json',
                    ajaxOnLoad: true,
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

            scope.systemComponent.promise.then(function (system) {
                scope.component = system[scope.systemComponent.name];
                scope.isMultipleComponents = angular.isArray(scope.component);
                scope.isStringArray = scope.isMultipleComponents && scope.component.length > 0 && angular.isString(scope.component[0]);
                scope.itemHeaderTemplateUrl = '/system-' + scope.systemComponent.name + '-item-header.html';
                if (scope.isMultipleComponents && !scope.isStringArray) {
                    for (var i in scope.component) {
                        scope.component[i].isMoreInfoVisible = false;
                    }
                }
            });
        }
    };
});

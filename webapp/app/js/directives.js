'use strict';

/* Directives */

angular.module('openAwesome.directives', []).directive('dynatable', function () {
    return {
        link: function (scope, element) {
            function osNameWriter(column, record) {
                return column.id === 'os_name' && angular.isDefined(record.icon) ?
                    '<td><img src="img/tango-images/16_' + record.icon + '.png"></td>' :
                    '<td>' + record[column.id] + '</td>';
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

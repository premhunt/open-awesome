'use strict';

/* Directives */

angular.module('openAwesome.directives', []).directive('dynatable', function () {
    return {
        link: function (scope, element) {
            element.dynatable({
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

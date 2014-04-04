require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min'],
        'utils': '/cp-front/js/utils',
        'kendo' : '/cp-front/js/kendo/js/kendo.web.min',
        'log' : '/JSModules/log',
        'core' : '/cp-front/js/custom/core'
    }
});

require([
    'kendo'
    , 'log/getLogGrid'
],
    function (
        kendo
        , getLogGrid
        ) {

        $(document).ready(function () {
            $("#log-grid-wrapper").getLogGrid({
                'prefix' : 'admin-log-grid',
                apiHost: _apiHost,
                enterpriseId : _targetEnterpriseId
            })
        });
    });

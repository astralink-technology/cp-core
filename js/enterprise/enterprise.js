require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min'],
        'utils': '/cp-front/js/utils',
        'kendo' : '/cp-front/js/kendo/js/kendo.web.min',
        'enterprise' : '/JSModules/enterprise',
        'core' : '/cp-front/js/custom/core'
    }
});

require([
    'kendo'
    , 'enterprise/getEnterpriseGrid'
],
    function (
        kendo
        , getEnterpriseGrid
        ) {

        $(document).ready(function () {
            $("#enterprise-grid-wrapper").getEnterpriseGrid({
                prefix: 'enterprise-grid-admin',
                apiHost: _apiHost,
                enterpriseId : _targetEnterpriseId
            });
        });
    });

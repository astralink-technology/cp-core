require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min'],
        'utils': '/cp-front/js/utils',
        'kendo' : '/cp-front/js/kendo/js/kendo.web.min',
        'configuration' : '/JSModules/configuration',
        'core' : '/cp-front/js/custom/core'
   }
});

require([
    'kendo'
    , 'configuration/getConfigurationGrid'
],
    function (
        kendo
        , getConfigurationGrid
        ) {

        $(document).ready(function () {
            $("#configuration-grid-wrapper").getConfigurationGrid({
                prefix: 'configuration-grid-admin',
                apiHost: _apiHost,
                enterpriseId : _targetEnterpriseId
            })
        });
    });

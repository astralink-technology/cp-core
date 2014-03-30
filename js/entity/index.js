require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min']
        , 'utils': '/cp-front/js/utils'
        , 'kendo' : '/cp-front/js/kendo/js/kendo.web.min'
        , 'entity' : '/JSModules/entity'
        , 'core' : '/cp-front/js/custom/core'
   }
});

require([
    'kendo'
    , 'entity/getEntityGrid'
],
    function (
        kendo
        , getEntityGrid
        ) {
        $(document).ready(function () {
            $("#entity-grid-wrapper").getEntityGrid({
                prefix: 'entity-grid-admin',
                apiHost: _apiHost,
                enterpriseId : _targetEnterpriseId
            });
        });
    });

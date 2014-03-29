require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min'],
        'utils': '/cp-front/js/utils',
        'kendo' : '/cp-front/js/kendo/js/kendo.web.min',
        'image' : '/JSModules/image',
        'core' : '/cp-front/js/custom/core'
   }
});

require([
    'kendo'
    , 'image/getImageGrid'
],
    function (
        kendo
        , getImageGrid
        ) {

        $(document).ready(function () {
            $("#image-grid-wrapper").getImageGrid({
                prefix: 'image-grid-admin',
                apiHost: _apiHost,
                enterpriseId : _targetEnterpriseId
            });
        });
    });

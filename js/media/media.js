require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min'],
        'utils': '/cp-front/js/utils',
        'kendo' : '/cp-front/js/kendo/js/kendo.web.min',
        'media' : '/JSModules/media',
        'core' : '/cp-front/js/custom/core'
   }
});

require([
    'kendo'
    , 'media/getMediaGrid'
],
    function (
        kendo
        , getMediaGrid
        ) {
        $(document).ready(function () {
            $("#media-grid-wrapper").getMediaGrid({
                prefix : 'admin-media-grid',
                apiHost: _apiHost,
                enterpriseId : _targetEnterpriseId
            })
        });
    });

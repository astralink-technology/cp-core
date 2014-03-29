require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min'],
        'utils': '/cp-front/js/utils',
        'kendo' : '/cp-front/js/kendo/js/kendo.web.min',
        'message' : '/JSModules/message',
        'core' : '/cp-front/js/custom/core'
   }
});

require([
    'kendo'
    , 'message/getMessageGrid'
],
    function (
        kendo
        , getMessageGrid
        ) {

        $(document).ready(function () {
            $("#message-grid-wrapper").getMessageGrid({
                prefix: 'message-grid-admin',
                apiHost: _apiHost,
                enterpriseId : _targetEnterpriseId
            });
        });
    });

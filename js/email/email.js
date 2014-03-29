require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min'],
        'utils': '/cp-front/js/utils',
        'kendo' : '/cp-front/js/kendo/js/kendo.web.min',
        'email' : '/JSModules/email',
        'core' : '/cp-front/js/custom/core'
   }
});

require([
    'kendo'
    , 'email/getEmailGrid'
],
    function (
        kendo
        , getEmailGrid
        ) {
        $(document).ready(function () {
            $("#email-grid-wrapper").getEmailGrid({
                prefix : 'admin-email-grid',
                apiHost: _apiHost,
                enterpriseId : _targetEnterpriseId
            })
        });
    });

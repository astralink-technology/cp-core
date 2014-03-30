require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min'],
        'utils': '/cp-front/js/utils',
        'kendo' : '/cp-front/js/kendo/js/kendo.web.min',
        'phone' : '/JSModules/phone',
        'core' : '/cp-front/js/custom/core'
   }
});

require([
    'kendo'
    , 'phone/getPhoneGrid'
],
    function (
        kendo
        , getPhoneGrid
        ) {

        $(document).ready(function () {
            $("#phone-grid-wrapper").getPhoneGrid({
                prefix : 'admin-phone-grid',
                apiHost: _apiHost,
                enterpriseId : _targetEnterpriseId
            })
        });
    });

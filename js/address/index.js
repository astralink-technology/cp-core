require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min'],
        'utils': '/cp-front/js/utils',
        'kendo' : '/cp-front/js/kendo/js/kendo.web.min',
        'address' : '/JSModules/address',
        'core' : '/cp-front/js/custom/core'
   }
});

require([
    'kendo'
    , 'address/getAddressGrid'
],
    function (
        kendo
        , getAddressGrid
        ) {

        $(document).ready(function () {
            $("#address-grid-wrapper").getAddressGrid({
                prefix: 'address-grid-admin',
                apiHost: _apiHost,
                enterpriseId : _targetEnterpriseId
            });
        });
    });

require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min'],
        'utils': '/cp-front/js/utils',
        'kendo' : '/cp-front/js/kendo/js/kendo.web.min',
        'device' : '/JSModules/device',
        'core' : '/cp-front/js/custom/core'
   }
});

require([
    'kendo',
    'device/getDeviceGrid'
],
    function (
        kendo,
        getDeviceGrid
        ) {

        $(document).ready(function () {
            $("#device-grid-wrapper").getDeviceGrid({
                prefix : 'device-grid-admin',
                apiHost: _apiHost,
                enterpriseId : _targetEnterpriseId
            })
        });
    });

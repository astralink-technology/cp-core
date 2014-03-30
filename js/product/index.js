require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min'],
        'utils': '/cp-front/js/utils',
        'kendo' : '/cp-front/js/kendo/js/kendo.web.min',
        'product' : '/JSModules/product',
        'core' : '/cp-front/js/custom/core'
   }
});

require([
    'kendo',
    'product/getProductGrid'
],
    function (
        kendo,
        getProductGrid
        ) {
        $(document).ready(function () {
                $("#product-grid-wrapper").getProductGrid({
                    prefix : 'get-product-admin',
                    apiHost: _apiHost,
                    enterpriseId : _targetEnterpriseId
                })
        });
    });

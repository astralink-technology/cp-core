define("product/getProductRegistrationGrid", ['jquery', 'core/pager'],
    function ($, pager) {
        var _settings = null;
        var _pagerLoaded = false;
        var _pageSize = 10;
        var _skip = 0;
        var methods = {
            init: function (options) {
                var element = this;
                var settings = $.extend({
                    prefix : '',
                    apiHost: '',
                    enterpriseId : ''
                }, options);
                _settings = settings;
                var $element = $(element);
                $element.html(
                    [
                        '<table class="table table-bordered" id="product-registration-table' + settings.prefix + '">',
                            '<thead>',
                                '<tr>',
                                    '<td>Entity ID</td>',
                                    '<td>Name</td>',
                                    '<td>Product ID</td>',
                                    '<td>Product Name</td>',
                                    '<td>Registration Date</td>',
                                    '<td>Status</td>',
                                    '<td>Actions</td>',
                                '</tr>',
                            '</thead>',
                            '<tbody></tbody>',
                        '</table>',
                        '<div id="pager-' + settings.prefix + '"></div>'
                    ].join(''));

                methods._getProductRegistration(settings.prefix, _pageSize, _skip);
            },
            _pagerOnLoad: function(prefix, currentActive){
                _pagerLoaded = true;
            },
            _pagerOnChange: function(prefix, currentActive){
                //get the current active and set the skip
                _skip = (currentActive - 1) * _pageSize;
                methods._getProductRegistration(_settings.prefix, _pageSize, _skip);
            },
            _getProductRegistration : function(prefix, pageSize, skip){
                urlParms = "?PageSize=" + pageSize;
                urlParms += "&SkipSize=" + skip;
                urlParms += "&EnterpriseId=" + _settings.enterpriseId;
                $.ajax({
                    type: "GET",
                    url: _settings.apiHost + "/ProductRegistrationResController/getProductEntityRegistrationDetails" + urlParms,
                    dataType: "json",
                    success: function (json) {
                        if (!json.error){
                            var tableEntries = "";
                            if (json.totalRowsAvailable > 0){
                                for (i = 0; i < json.totalRowsAvailable; i++){
                                    var productRegistrationData = json.data[i];
                                    tableEntries += "<tr>" +
                                        "<td>" + productRegistrationData.entityId + "</td>" +
                                        "<td>" + productRegistrationData.entityName + "</td>" +
                                        "<td>" + productRegistrationData.productId + "</td>" +
                                        "<td>" + productRegistrationData.productName + "</td>" +
                                        "<td>" + productRegistrationData.createDate + "</td>" +
                                        "<td>" + productRegistrationData.status + "</td>" +
                                        "<td>" +
                                        "<a class='btn btn-link btn-xs' href='javascript:void(0)'><i class='fa fa-edit'></i></a>" +
                                        "<a class='btn btn-link btn-xs' href='javascript:void(0)'><i class='fa fa-trash-o'></i></a>" +
                                        "</td>" +
                                        "</tr>"
                                }
                                var totalRows = json.data[0].totalRows;
                                if (!_pagerLoaded){
                                    $("#pager-" + prefix).pager({
                                        prefix: 'productRegistrationPager',
                                        maxLength: 10,
                                        totalRecords: totalRows,
                                        recordsPerPage: _pageSize,
                                        onLoad: methods._pagerOnLoad,
                                        onChange: methods._pagerOnChange
                                    });
                                }
                            }else{
                                tableEntries += "<tr>" +
                                                    "<td colspan='7'>No Registrations</td>" +
                                            "</tr>"
                            }
                            $("#product-registration-table" + prefix + " tbody").html(tableEntries);
                        }

                    },
                    error: function (xhr) {
                    }
                });
            }
        };
        $.fn.getProductRegistrationGrid = function (methodOrOptions) {
            if (methods[methodOrOptions]) {
                return methods[methodOrOptions].apply(this, Array.prototype.slice.call(arguments, 1));
            } else if (typeof methodOrOptions === 'object' || !methodOrOptions) {
                return methods.init.apply(this, arguments);
            } else {
                $.error('Method ' + method + ' does not exist');
            }

            $(element).load(function () {
            });
        };
    });

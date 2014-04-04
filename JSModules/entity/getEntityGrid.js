define("entity/getEntityGrid", ['jquery', 'core/pager'],
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
                        '<table class="table table-bordered" id="entity-table' + settings.prefix + '">',
                            '<thead>',
                                '<tr>',
                                    '<td>User name</td>',
                                    '<td>Name</td>',
                                    '<td>Date Created</td>',
                                    '<td>Authorization Level</td>',
                                    '<td>Status</td>',
                                    '<td>Type</td>',
                                    '<td>Last Login</td>',
                                    '<td>Last Logout</td>',
                                    '<td>Actions</td>',
                                '</tr>',
                            '</thead>',
                            '<tbody></tbody>',
                        '</table>',
                        '<div id="pager-' + settings.prefix + '"></div>'
                    ].join(''));
                methods._getEntity(settings.prefix, _pageSize, _skip);
            },
            _pagerOnLoad: function(prefix, currentActive){
                _pagerLoaded = true;
            },
            _pagerOnChange: function(prefix, currentActive){
                //get the current active and set the skip
                _skip = (currentActive - 1) * _pageSize;
                methods._getEntity(_settings.prefix, _pageSize, _skip);
            },
            _getEntity : function(prefix, pageSize, skip){
                urlParms = "?PageSize=" + pageSize;
                urlParms += "&SkipSize=" + skip;
                urlParms += "&EnterpriseId=" + _settings.enterpriseId;
                $.ajax({
                    type: "GET",
                    url: _settings.apiHost + "/EntityResController/getAdminEntityDetails" + urlParms,
                    dataType: "json",
                    success: function (json) {
                        if (!json.error){
                            var tableEntries = "";
                            if (json.totalRowsAvailable > 0){
                                for (var i = 0; i < json.totalRowsAvailable; i++){
                                    var entityData = json.data[i];
                                    tableEntries += "<tr>" +
                                        "<td>" + entityData.authenticationString + "</td>" +
                                        "<td>" + entityData.name + "</td>" +
                                        "<td>" + entityData.createDate + "</td>" +
                                        "<td>" + entityData.authorizationLevel + "</td>" +
                                        "<td>" + entityData.status + "</td>" +
                                        "<td>" + entityData.type + "</td>" +
                                        "<td>" + entityData.lastLogin + "</td>" +
                                        "<td>" + entityData.lastLogout + "</td>" +
                                        "<td>" +
                                            "<a class='btn btn-link btn-xs' href='javascript:void(0)'><i class='fa fa-edit'></i></a>" +
                                            "<a class='btn btn-link btn-xs' href='javascript:void(0)'><i class='fa fa-trash-o'></i></a>" +
                                        "</td>" +
                                        "</tr>"
                                }
                                var totalRows = json.data[0].totalRows;
                                if (!_pagerLoaded){
                                    $("#pager-" + prefix).pager({
                                        prefix: 'entityPager',
                                        maxLength: 10,
                                        totalRecords: totalRows,
                                        recordsPerPage: _pageSize,
                                        onLoad: methods._pagerOnLoad,
                                        onChange: methods._pagerOnChange
                                    });
                                }
                            }else{
                                tableEntries += "<tr>" +
                                                    "<td colspan='9'>No Entities</td>"
                                                "</tr>"
                            }
                            $("#entity-table" + prefix + " tbody").html(tableEntries);
                        }

                    },
                    error: function (xhr) {
                    }
                });
            }
        };
        $.fn.getEntityGrid = function (methodOrOptions) {
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

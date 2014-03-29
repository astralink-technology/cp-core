<?php
/*
 * Copyright Chilli Panda
 * Created on 01-13-2013
 * Created by Shi Wei Eamon
 */
require ($_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/master/enterpriseMaster.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Enterprises</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/master/adminMaster.php' ?>
        <script type="text/javascript">
            //null template
            $.get('/ChilliPanda/Admin/templates/ensg/null_templates/_cp_noEnterpriseCreated.ensg.tmpl.htm', function (templates) {
                $('head').append(templates);
            });

            function clearAddForm(){
                $("#enterpriseName").val('');
                $("#enterpriseType").val('');
                $("#enterpriseDescription").val('');
                $("#enterpriseActive").attr("checked", "false");
                $("#enterpriseInactive").attr("checked", "false");
            }

            function clearEditForm(){
                $("#editEnterpriseName").val('');
                $("#editEnterpriseType").val('');
                $("#editEnterpriseDescription").val('');
                $("#editEnterpriseActive").attr("checked", "false");
                $("#editEnterpriseInactive").attr("checked", "false");
            }

            function createEnterprise(){
                var enterpriseName = $("#enterpriseName").val();
                var enterpriseType = $("#enterpriseType").val();
                var enterpriseStatus = $('input:radio[name=enterpriseStatus]:checked').val();
                var enterpriseDescription = $("#enterpriseDescription").val();

                var parms = new Object();
                parms.enterpriseName = enterpriseName;
                parms.enterpriseType = enterpriseType;
                parms.enterpriseStatus = enterpriseStatus;
                parms.enterpriseDescription = enterpriseDescription;

                $.ajax({
                    type: "POST",
                    url: "/ChilliPanda/Models/API/Enterprise/createEnterprise.php",
                    processData: true,
                    data: {json: JSON.stringify(parms)},
                    beforeSend: function () {
                        //reset form
                        clearAddForm();
                        //close popup
                        $('#create-enterprise-popup').bPopup().close();
                        //refresh the grid
                        $("#cpa-enterprise-content-grid").html("<img src='/ChilliPanda/Admin/img/ajax-loader.gif' />")
                    },
                    dataType: "json",
                    success: function (json) {
                        //refresh enterprises
                        getAllEnterprises();
                    },
                    error: function (xhr) {
                    }
                });
            }

           function deleteEnterprise(enterpriseId){
               var parms = new Object();
               parms.enterpriseId = enterpriseId

                $.ajax({
                    type: "POST",
                    url: "/ChilliPanda/Models/API/Enterprise/deleteEnterprise.php",
                    processData: true,
                    data: {json: JSON.stringify(parms)},
                    beforeSend: function () {
                        //refresh the grid
                        $("#cpa-enterprise-content-grid").html("<img src='/ChilliPanda/Admin/img/ajax-loader.gif' />")
                    },
                    dataType: "json",
                    success: function (json) {
                        //refresh enterprises
                        getAllEnterprises();
                    },
                    error: function (xhr) {
                    }
                });
           }

           function editEnterprise(enterpriseId){
                var enterpriseName = $("#editEnterpriseName").val();
                var enterpriseType = $("#editEnterpriseType").val();
                var enterpriseStatus = $('input:radio[name=editEnterpriseStatus]:checked').val();
                var enterpriseDescription = $("#editEnterpriseDescription").val();
                var enterpriseEstablishedDate  = null;

                var parms = new Object();

                parms.enterpriseEstablishedDate  = enterpriseEstablishedDate;
                parms.enterpriseId = enterpriseId;
                parms.enterpriseName = enterpriseName;
                parms.enterpriseType = enterpriseType;
                parms.enterpriseStatus = enterpriseStatus;
                parms.enterpriseDescription = enterpriseDescription;

                $.ajax({
                    type: "POST",
                    url: "/ChilliPanda/Models/API/Enterprise/editEnterprise.php",
                    processData: true,
                    data: {json: JSON.stringify(parms)},
                    beforeSend: function () {
                        //reset form
                        clearEditForm();
                        //close popup
                        $('#edit-enterprise-popup').bPopup().close();
                        //refresh the grid
                        $("#cpa-enterprise-content-grid").html("<img src='/ChilliPanda/Admin/img/ajax-loader.gif' />")
                    },
                    dataType: "json",
                    success: function (json) {
                        //refresh enterprises
                        getAllEnterprises();
                    },
                    error: function (xhr) {
                    }
                });
           }

           function displayEditForm(enterpriseId){
               //popup and populate the fields
                $("#edit-enterprise-popup").bPopup({
                    zIndex: 2
                    , modal:true
                    , follow: [false, false]
                });

                var parms = "?enterpriseId=" + enterpriseId;

                $.ajax({
                type: "GET",
                url: "/ChilliPanda/Models/API/Enterprise/getEnterpriseDetail.php" + parms,
                processData: true,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                beforeSend: function (){
                    clearEditForm();
                },
                success: function (json) {
                    $("#editEnterpriseName").val(json.Data[0].enterpriseName);
                    $("#editEnterpriseType").val(json.Data[0].enterpriseType);
                    if (json.Data[0].enterpriseStatus == 1){
                        $("#editEnterpriseActive").attr("checked", "checked");
                    }else{
                        $("#editEnterpriseInactive").attr("checked", "checked");
                    }
                    $("#editEnterpriseDescription").val(json.Data[0].enterpriseDescription);
                    $("#btnEditEnterprise").attr("onClick", "editEnterprise('" + json.Data[0].enterpriseId + "')");
                },
                error: function (xhr) {
                     
                }
                });
           }

           function getAllEnterprises(){
               $.ajax({
                type: "GET",
                url: "/ChilliPanda/Models/API/Enterprise/getEnterpriseDetail.php",
                processData: true,
                contentType: "application/json; charset=utf-8",
                beforeSend: function () {
                    $("#cpa-enterprise-content-grid").html("<img src='/ChilliPanda/Admin/img/ajax-loader.gif' />")
                },
                dataType: "json",
                success: function (json) {
                    $("#cpa-enterprise-content-grid").html("");
                    if(json.TotalRowsAvailable < 1){
                        $("#cpa-enterprise-content-grid").html($("#tmpl-admin-noEnterpriseCreated").html());
                    }else{
                        //populate grid here
                    }
                },
                error: function (xhr) {
                     
                }
            });

           }

           $(document).ready(function(){
                getAllEnterprises();
           })

        </script>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/widgets/headerWidget.php' ?>
        
        <div class="cpa-main-content-wrapper">
            <div class="cpa-main-content">
                <div class="cpa-main-content-container">
                    <h1 class="cpa-page-title cpa-enterprise-list-title">Enterprises List</h1>
                    <div id="cpa-enterprise-list" class="cpa-enterprise-list" data-bind="source: enterprises" data-template="tmpl-enterprise-detail"></div>
                    <a href="javascript:void(0)" onClick="popup('create-enterprise-popup')" class="button btAddLong btAddEnterprise">Add New Enterprise</a>
                </div>
            </div>
        </div>
        
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/widgets/footerWidget.php' ?>
<?php  include $_SERVER['DOCUMENT_ROOT'] . ('/ChilliPanda/Admin/content/Enterprise/newEnterprise.php'); ?>
<?php  include $_SERVER['DOCUMENT_ROOT'] . ('/ChilliPanda/Admin/content/Enterprise/editEnterprise.php'); ?>
    </body>
</html>

    
<?php
/*
 * Copyright Chilli Panda
 * Created on 01-13-2013
 * Created by Shi Wei Eamon
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Products</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/master/adminMaster.php' ?>
        
        <script type="text/javascript">
            //null template
            $.get('/ChilliPanda/Admin/templates/ensg/null_templates/_cp_noEntityCreated.ensg.tmpl.htm', function (templates) {
                $('head').append(templates);
            });

           function getAllEntities(){
               $.ajax({
                type: "GET",
                url: "/ChilliPanda/Models/API/Entity/getEntityDetail.php",
                processData: true,
                contentType: "application/json; charset=utf-8",
                beforeSend: function () {
                    $("#cpa-entity-content-grid").html("<img src='/ChilliPanda/Admin/img/ajax-loader.gif' />")
                },
                dataType: "json",
                success: function (json) {
                    $("#cpa-entity-content-grid").html("");
                    if(json.TotalRowsAvailable < 1){
                        $("#cpa-entity-content-grid").html($("#tmpl-admin-noEntityCreated").html());
                    }else{
                        //populate grid here
                    }

                },
                error: function (xhr) {

                }
            });

           }

           $(document).ready(function(){
                getAllEntities();
           })

        </script>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/widgets/headerWidget.php' ?>
        
        <div class="cpa-main-content-wrapper">
            <div class="cpa-main-content">
                <div class="cpa-main-content-container">
                    <h1 class="cpa-page-title cpa-entity-list-title">Entities List</h1>
                    <div id="cpa-entity-list" class="cpa-entity-list" data-bind="source: entities" data-template="tmpl-entity-detail"></div>
                    <a href="javascript:void(0)" onClick="popup('create-entity-popup')" class="button btAddLong btAddEntity">Add New Entity</a>
                </div>
            </div>
        </div>
        
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/widgets/footerWidget.php' ?>
<?php  include $_SERVER['DOCUMENT_ROOT'] . ('/ChilliPanda/Admin/content/Entity/newEntity.php'); ?>
    </body>
</html>

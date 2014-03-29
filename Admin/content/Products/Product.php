<?php
/*
 * Copyright Chilli Panda
 * Created on 17-03-2013
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
            $.get('/ChilliPanda/Admin/templates/ensg/null_templates/_cp_noProductCreated.ensg.tmpl.htm', function (templates) {
                $('head').append(templates);
            });
            $.get('/ChilliPanda/Admin/templates/ensg/null_templates/_cp_noProductSpecCreated.ensg.tmpl.htm', function (templates) {
                $('head').append(templates);
            });
            $.get('/ChilliPanda/Admin/templates/ensg/null_templates/_cp_noProductValueCreated.ensg.tmpl.htm', function (templates) {
                $('head').append(templates);
            });
            $.get('/ChilliPanda/Admin/templates/ensg/null_templates/_cp_noProductImageCreated.ensg.tmpl.htm', function (templates) {
                $('head').append(templates);
            });
            $.get('/ChilliPanda/Admin/templates/ensg/products/_cp_productDetail.ensg.tmpl.htm', function (templates) {
                $('head').append(templates);
            });
            $.get('/ChilliPanda/Admin/templates/ensg/products/_cp_productSpec.ensg.tmpl.htm', function (templates) {
                $('head').append(templates);
            });
            $.get('/ChilliPanda/Admin/templates/ensg/products/_cp_productImage.ensg.tmpl.htm', function (templates) {
                $('head').append(templates);
            });
            $.get('/ChilliPanda/Admin/templates/ensg/products/_cp_productValue.ensg.tmpl.htm', function (templates) {
                $('head').append(templates);
            });
            
            function clearProductAddForm(){
                $("#productFormalName").val();
                $("#productSlug").val();
                $("#productModelNumber").val();
                $("#productSubModelNumber").val();
                $("#productVendorName").val();
                $("#productEstablishDate").val();
                $("#productExpiryDate").val();
                $("#productType").val();
                $("#productActive").attr("checked", "false");
                $("#productInactive").attr("checked", "false");
                $("#productDescription").val();
                
            }
            
            function clearProductSpecAddForm(){
                $("#productSpecFormalName").val();
                $("#productSpecSlug").val();
                $("#productSpecActive").attr("checked", "false");
                $("#productSpecInactive").attr("checked", "false");
                $("#productSpecDescription").val();
            }
            
            function clearProductValueAddForm(){
                $("#productValueFormalName").val();
                $("#productValueType").val();
                $("#productValueActive").attr("checked", "false");
                $("#productValueInactive").attr("checked", "false");
                $("#productValueDescription").val();
            }
            
            function popup(container){
                $("#" + container).bPopup({
                    zIndex: 2
                    , modal:true
                    , follow: [false, false]
                });
            }
            
            function subFormPopup(container, parentId, control, action, method){
                $("#" + container).bPopup({
                    zIndex: 2
                    , modal:true
                    , follow: [false, false]
                });
                $("#" + control).attr(action, method + "('" + parentId + "')");
            }

           function getAllProducts(){
               $.ajax({
                type: "GET",
                url: "/ChilliPanda/Models/API/Product/getProductDetail.php",
                processData: true,
                contentType: "application/json; charset=utf-8",
                beforeSend: function () {
                    $("#cpa-product-content-grid").html("<img src='/ChilliPanda/Admin/img/ajax-loader.gif' />")
                },
                dataType: "json",
                success: function (json) {
                    if(json.TotalRowsAvailable < 1){
                        $("#cpa-product-list").html($("#tmpl-admin-noProductCreated").html());
                    }else{
                        var dataResult = json.Data;
                        var viewModel = kendo.observable({
                            products: dataResult
                        });
                        kendo.bind($('#cpa-product-list'), viewModel);
                        for (var i=0; i < json.TotalRowsAvailable; i ++){
                            //try to loop all the data and try to get all the product value, product spec and product images from here
                            getAllProductSpec(json.Data[i].productId);
                            getAllProductImage(json.Data[i].productId);
                            getAllProductValue(json.Data[i].productId);
                        }
                        
                        
                    }

                },
                error: function (xhr) {
                    
                }
            });
           }
           
           function addNewProduct(){
                var productFormalName = $("#productFormalName").val();
                var productSlug = $("#productSlug").val();
                var productModelNumber = $("#productModelNumber").val();
                var productSubModelNumber = $("#productSubModelNumber").val();
                var productVendorName = $("#productVendorName").val();
                var productEstablishDate = null;
                var productExpiryDate = null;
                var productType =  $("#productType").val();
                var productStatus = $('input:radio[name=productStatus]:checked').val();
                var productDescription =  $("#productDescription").val();
                var enterpriseId = ''; //hardcode to be astralink enterpriseID

                var parms = new Object();
                parms.productFormalName = productFormalName;
                parms.productSlug = productSlug;
                parms.productModelNumber = productModelNumber;
                parms.productSubModelNumber = productSubModelNumber;
                parms.productVendorName = productVendorName;
                parms.productEstablishDate = productEstablishDate;
                parms.productExpiryDate = productExpiryDate;
                parms.productType = productType;
                parms.productStatus = productStatus;
                parms.productDescription = productDescription;
                parms.enterpriseId = enterpriseId;
                
                $.ajax({
                    type: "POST",
                    url: "/ChilliPanda/Models/API/Product/createProduct.php",
                    processData: true,
                    data: {json: JSON.stringify(parms)},
                    beforeSend: function () {
                        //reset form
                        clearProductAddForm();
                        //close popup
                        $('#create-product-popup').bPopup().close();
                        //refresh the grid
                        $("#cpa-product-list").html("")
                    },
                    dataType: "json",
                    success: function (json) {
                        //refresh product listings
                        getAllProducts();
                    },
                    error: function (xhr) {
                    }
                });
           }
           
           function getAllProductSpec(productId){
               var parms = "?productId=" + productId;
               $.ajax({
                type: "GET",
                url: "/ChilliPanda/Models/API/Product/getProductSpecDetail.php" + parms,
                processData: true,
                contentType: "application/json; charset=utf-8",
                beforeSend: function () {
                },
                dataType: "json",
                success: function (json) {
                    if(json.TotalRowsAvailable < 1){
                        $('#cpa-product-spec-list-' + productId).html($("#tmpl-admin-noProductSpecCreated").html());
                    }else{
                        $('#cpa-product-spec-list-' + productId).attr('data-bind', 'source: productspec')
                        var dataResult = json.Data;
                        var viewModel = kendo.observable({
                            productspec: dataResult
                        });
                        kendo.bind($('#cpa-product-spec-list-' + productId), viewModel);
                    }
                },
                error: function (xhr) {
                    
                }
            });
           }
           
           function addNewProductSpec(productId){
                var productSpecFormalName = $("#productSpecFormalName").val();
                var productSpecType = $("#productSpecType").val();
                var productSpecStatus = $('input:radio[name=productSpecStatus]:checked').val();
                var productSpecDescription =  $("#productSpecDescription").val();
                
                var parms = new Object();
                parms.productId = productId;
                parms.productSpecFormalName = productSpecFormalName;
                parms.productSpecType = productSpecType;
                parms.productSpecStatus = productSpecStatus;
                parms.productSpecDescription = productSpecDescription;
                
                $.ajax({
                    type: "POST",
                    url: "/ChilliPanda/Models/API/Product/createProductSpec.php",
                    processData: true,
                    data: {json: JSON.stringify(parms)},
                    beforeSend: function () {
                        //reset form
                        clearProductSpecAddForm()
                        //close popup
                        $('#create-product-spec-popup').bPopup().close();
                        //refresh the list
                        $("#cpa-product-spec-list" + productId).html("")
                    },
                    dataType: "json",
                    success: function (json) {
                        //refresh product listings
                        getAllProductSpec(productId);
                    },
                    error: function (xhr) {
                    }
                });
           }
           
           function getAllProductImage(productId){
                var parms = "?productId=" + productId;
               $.ajax({
                type: "GET",
                url: "/ChilliPanda/Models/API/Product/getProductImage.php" + parms,
                processData: true,
                contentType: "application/json; charset=utf-8",
                beforeSend: function () {
                },
                dataType: "json",
                success: function (json) {
                    if(json.TotalRowsAvailable < 1){
                        $('#cpa-product-image-list-' + productId).html($("#tmpl-admin-noProductImageCreated").html());
                    }else{
                        $('#cpa-product-image-list-' + productId).attr('data-bind', 'source: productimage')
                        var dataResult = json.Data;
                        var viewModel = kendo.observable({
                            productimage: dataResult
                        });
                        kendo.bind($('#cpa-product-image-list-' + productId), viewModel);
                    }
                },
                error: function (xhr) {
                    
                }
            });
           }
           
           function addNewProductImage(productId){
                
           }
           
           function getAllProductValue(productId){
                var parms = "?productId=" + productId;
               $.ajax({
                type: "GET",
                url: "/ChilliPanda/Models/API/Product/getProductValue.php" + parms,
                processData: true,
                contentType: "application/json; charset=utf-8",
                beforeSend: function () {
                },
                dataType: "json",
                success: function (json) {
                    if(json.TotalRowsAvailable < 1){
                        $('#cpa-product-value-list-' + productId).html($("#tmpl-admin-noProductValueCreated").html());
                    }else{
                        $('#cpa-product-value-list-' + productId).attr('data-bind', 'source: productvalue')
                        var dataResult = json.Data;
                        var viewModel = kendo.observable({
                            productvalue: dataResult
                        });
                        kendo.bind($('#cpa-product-value-list-' + productId), viewModel);
                    }
                },
                error: function (xhr) {
                    
                }
            });
           }
           
           function addNewProductValue(productId){
                var productValue = $("#productValue").val();
                var productValueType = $("#productValueType").val();
                var productValueStatus = $('input:radio[name=productValueStatus]:checked').val();
                var productValueDescription = $("#productValueDescription").val();
                
                var parms = new Object();
                parms.productId = productId;
                parms.productValue = productValue;
                parms.productValueType = productValueType;
                parms.productValueStatus = productValueStatus;
                parms.productValueDescription = productValueDescription;
                
                $.ajax({
                    type: "POST",
                    url: "/ChilliPanda/Models/API/Product/createProductValue.php",
                    processData: true,
                    data: {json: JSON.stringify(parms)},
                    beforeSend: function () {
                        //reset form
                        clearProductValueAddForm();
                        //close popup
                        $('#create-product-value-popup').bPopup().close();
                        //refresh the grid
                        $("#cpa-product-value-list-" + productId).html("")
                    },
                    dataType: "json",
                    success: function (json) {
                        //refresh product listings
                        getAllProductValue(productId);
                    },
                    error: function (xhr) {
                    }
                });
           }
           
           $(document).ready(function(){
                getAllProducts();
           })
        </script>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/widgets/headerWidget.php' ?>
        
        <div class="cpa-main-content-wrapper">
            <div class="cpa-main-content">
                <div class="cpa-main-content-container">
                    <h1 class="cpa-page-title cpa-product-list-title">Product List</h1>
                    <div id="cpa-product-list" class="cpa-product-list" data-bind="source: products" data-template="tmpl-product-detail"></div>
                    <a href="javascript:void(0)" onClick="popup('create-product-popup')" class="button btAddLong btAddProduct">Add New Product</a>
                </div>
            </div>
        </div>
        
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/widgets/footerWidget.php' ?>
        <?php  include $_SERVER['DOCUMENT_ROOT'] . ('/ChilliPanda/Admin/content/Products/newProduct.php'); ?>
        <?php  include $_SERVER['DOCUMENT_ROOT'] . ('/ChilliPanda/Admin/content/Products/newProductSpec.php'); ?>
        <?php  include $_SERVER['DOCUMENT_ROOT'] . ('/ChilliPanda/Admin/content/Products/newProductImage.php'); ?>
        <?php  include $_SERVER['DOCUMENT_ROOT'] . ('/ChilliPanda/Admin/content/Products/newProductValue.php'); ?>
    </body>
</html>

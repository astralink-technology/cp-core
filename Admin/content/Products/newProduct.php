<?php
/*
 * Copyright Chilli Panda
 * Created on 02-15-2013
 * Created by Shi Wei Eamon
 */
?>
<div class="cpa-create cpa-create-product" id="create-product-popup">
    <h1 class="cpa-create-title">New Product</h1>
    <div class="cpa-create-block">
        <label class="label lblcpa-create" for="productFormalName">Product Formal Name</label>
        <input type="text" class="textbox txtcpa-create" id="productFormalName" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productSlug">Product Slug</label>
        <input type="text" class="textbox txtcpa-create" id="productSlug" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productModelNumber">Product Model Number</label>
        <input type="text" class="textbox txtcpa-create" id="productModelNumber" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productSubModelNumber">Product Sub Model Number</label>
        <input type="text" class="textbox txtcpa-create" id="productSubModelNumber" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productVendorName">Product Vendor Name</label>
        <input type="text" class="textbox txtcpa-create" id="productVendorName" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productEstablishDate">Product Establish Date</label>
        <input type="text" class="textbox txtcpa-create" id="productEstablishDate" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productExpiryDate">Product Expiry Date</label>
        <input type="text" class="textbox txtcpa-create" id="productExpiryDate" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productType">Product Type</label>
        <input type="text" class="textbox txtcpa-create" id="productType" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productStatus">Product Status</label>
        <input class="radio rbcpa-create" name="productStatus" type="radio" id="productActive" />
        <label class="radiolabel"  for="productActive">Active</label>
        <input class="radio rbcpa-create" name="productStatus" type="radio" id="productInactive" />
        <label class="radiolabel"  for="productInactive">In-Active</label>
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productDescription">Product Description</label>
        <textarea class="textarea tacpa-create" id="productDescription"></textarea>
    </div>
    
    <div class="cpa-create-block">
        <a href="javascript:void(0)" class="button btSolidRound btAdminCreate btCreateProduct" onClick="addNewProduct()">Create Product</a>  
    </div>
</div>
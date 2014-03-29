<?php
/*
 * Copyright Chilli Panda
 * Created on 02-15-2013
 * Created by Shi Wei Eamon
 */
?>
<div class="cpa-create cpa-create-product" id="create-product-image-popup">
    <h1 class="cpa-create-title">New Product Image</h1>
    <div class="cpa-create-block">
        <label class="label lblcpa-create" for="productImage">Product Image</label>
        UPLOAD FIELD OVER HERE
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productImageType">Product Specification Type</label>
        <input type="text" class="textbox txtcpa-create" id="productImageType" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productImageStatus">Product Specification Status</label>
        <input class="radio rbcpa-create" name="productImageStatus" type="radio" id="productImageActive" />
        <label class="radiolabel"  for="productImageActive">Active</label>
        <input class="radio rbcpa-create" name="productImageStatus" type="radio" id="productImageInactive" />
        <label class="radiolabel"  for="productImageInactive">In-Active</label>
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productImageDescription">Product Specification Description</label>
        <textarea class="textarea tacpa-create" id="productImageDescription"></textarea>
    </div>
    
    <div class="cpa-create-block">
        <a href="javascript:void(0)" class="button btSolidRound btAdminCreate btCreateProductImage">Create Product Image</a>  
    </div>
</div>
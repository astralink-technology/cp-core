<?php
/*
 * Copyright Chilli Panda
 * Created on 02-15-2013
 * Created by Shi Wei Eamon
 */
?>
<div class="cpa-create cpa-create-product" id="create-product-value-popup">
    <h1 class="cpa-create-title">New Product Value</h1>
    <div class="cpa-create-block">
        <label class="label lblcpa-create" for="productValue">Product Value</label>
        <input type="text" class="textbox txtcpa-create" id="productValue" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productValueType">Product Value Type</label>
        <input type="text" class="textbox txtcpa-create" id="productValueType" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productValueStatus">Product Value Status</label>
        <input class="radio rbcpa-create" name="productValueStatus" type="radio" id="productValueActive" />
        <label class="radiolabel"  for="productValueActive">Active</label>
        <input class="radio rbcpa-create" name="productValueStatus" type="radio" id="productValueInactive" />
        <label class="radiolabel"  for="productValueInactive">In-Active</label>
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productValueDescription">Product Value Description</label>
        <textarea class="textarea tacpa-create" id="productValueDescription"></textarea>
    </div>
    
    <div class="cpa-create-block">
        <a href="javascript:void(0)" id="btAddNewProductValue" class="button btSolidRound btAdminCreate btCreateProductValue">Create Product Value</a>  
    </div>
</div>
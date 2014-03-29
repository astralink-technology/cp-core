<?php
/*
 * Copyright Chilli Panda
 * Created on 02-15-2013
 * Created by Shi Wei Eamon
 */
?>
<div class="cpa-create cpa-create-product" id="create-product-spec-popup">
    <h1 class="cpa-create-title">New Product Specification</h1>
    <div class="cpa-create-block">
        <label class="label lblcpa-create" for="productSpecFormalName">Product Specification Formal Name</label>
        <input type="text" class="textbox txtcpa-create" id="productSpecFormalName" />
    </div>
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productSpecType">Product Specification Type</label>
        <input type="text" class="textbox txtcpa-create" id="productSpecType" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productSpecStatus">Product Specification Status</label>
        <input class="radio rbcpa-create" name="productSpecStatus" type="radio" id="productSpecActive" />
        <label class="radiolabel"  for="productSpecActive">Active</label>
        <input class="radio rbcpa-create" name="productSpecStatus" type="radio" id="productSpecInactive" />
        <label class="radiolabel"  for="productSpecInactive">In-Active</label>
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="productSpecDescription">Product Specification Description</label>
        <textarea class="textarea tacpa-create" id="productSpecDescription"></textarea>
    </div>
    
    <div class="cpa-create-block">
        <a href="javascript:void(0)" id="btAddNewProductSpec" class="button btSolidRound btCreateProductSpec" >Create Product Specification</a>  
    </div>
</div>
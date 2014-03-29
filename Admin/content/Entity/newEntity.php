<?php
/*
 * Copyright Chilli Panda
 * Created on 01-12-2013
 * Created by Shi Wei Eamon
 */
?>
<div class="cpa-create cpa-create-entity" id="create-entity-popup">
    <h1 class="cpa-create-title">New Entity</h1>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create" for="entityFormalName">Entity Formal Name</label>
        <input type="text" class="textbox txtcpa-create" id="entityFormalName" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="entityNickName">Entity Nick Name</label>
        <input type="text" class="textbox txtcpa-create" id="entityNickName" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="entityType">Entity Type</label>
        <input type="text" class="textbox txtcpa-create" id="entityType" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="entityStatus">Entity Status</label>
        <input class="radio rbcpa-create" name="entityStatus" type="radio" id="entityActive" />
        <label class="radiolabel"  for="entityActive">Active</label>
        <input class="radio rbcpa-create" name="entityStatus" type="radio" id="entityInactive" />
        <label class="radiolabel"  for="entityInactive">In-Active</label>
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create"  for="entityDescription">Entity Description</label>
        <textarea class="textarea tacpa-create" id="entityDescription"></textarea>
    </div>
    
    <div class="cpa-create-block">
        <a href="javascript:void(0)" class="button btSolidRound btAdminCreate btCreateEntity">Create Entity</a>  
    </div>
</div>
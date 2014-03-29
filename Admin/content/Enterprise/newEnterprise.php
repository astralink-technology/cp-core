<?php
/*
 * Copyright Chilli Panda
 * Created on 01-12-2013
 * Created by Shi Wei Eamon
 */
require ($_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/master/enterpriseMaster.php');
?>
<div class="cpa-create cpa-create-enterprise" id="create-enterprise-popup">
    <h1 class="cpa-create-title">New Enterprise</h1>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create" for="enterpriseName">Enterprise Name</label>
        <input class="textbox txtcpa-create" maxlength="64" type="text" id="enterpriseName" />
    </div>
    
   <div class="cpa-create-block">
        <label class="label lblcpa-create" for="enterpriseType">Enterprise Type</label>
        <input class="textbox txtcpa-create" maxlength="1"  type="text" id="enterpriseType" />
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create" for="enterpriseStatus">Enterprise Status</label>
        <input class="radio" name="enterpriseStatus" id="enterpriseActive" value="1" type="radio" />
        <label class="radiolabel" for="enterpriseActive">Active</label>
        <input class="radio" name="enterpriseStatus" type="radio" id="enterpriseInactive" value="0" />
        <label class="radiolabel" for="enterpriseInactive">In-Active</label>
    </div>
    
    <div class="cpa-create-block">
        <label class="label lblcpa-create" for="enterpriseDescription">Enterprise Description</label>
        <textarea class="textarea tacpa-create" id="enterpriseDescription"></textarea>
    </div>
    
    <div class="cpa-create-block">
        <span class="cpa-create-button-container" id="cpa-create-button-container">
            <a href="javascript:void(0)" class="button btSolidRound btAdminCreate btCreateEnterprise" onClick="createEnterprise()"id="btnCreateEnterprise">Create Enterprise</a>  
        </span>
    </div>
</div>
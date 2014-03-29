<?php
/*
 * Copyright Chilli Panda
 * Created on 01-12-2013
 * Created by Shi Wei Eamon
 */
require ($_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/master/enterpriseMaster.php');
?>
<div class="cpa-edit cpa-edit-enterprise" id="edit-enterprise-popup">
    <h1 class="cpa-edit-title">Edit Enterprise</h1>
    
    <div class="cpa-edit-block">
        <label class="label lblcpa-edit" for="enterpriseName">Enterprise Name</label>
        <input class="textbox txtcpa-edit" maxlength="64" type="text" id="editEnterpriseName" />
    </div>
    
   <div class="cpa-edit-block">
        <label class="label lblcpa-edit" for="enterpriseType">Enterprise Type</label>
        <input class="textbox txtcpa-edit" maxlength="1"  type="text" id="editEnterpriseType" />
    </div>
    
    <div class="cpa-edit-block">
        <label class="label lblcpa-edit" for="editEnterpriseStatus">Enterprise Status</label>
        <input class="radio" name="editEnterpriseStatus" id="editEnterpriseActive" value="1" type="radio" />
        <label class="radiolabel" for="enterpriseActive">Active</label>
        <input class="radio" name="editEnterpriseStatus" type="radio" id="editEnterpriseInactive" value="0" />
        <label class="radiolabel" for="enterpriseInactive">In-Active</label>
    </div>
    
    <div class="cpa-edit-block">
        <label class="label lblcpa-edit" for="enterpriseDescription">Enterprise Description</label>
        <textarea class="textarea tacpa-edit" id="editEnterpriseDescription"></textarea>
    </div>
    
    <div class="cpa-edit-block">
        <span class="cpa-edit-button-container" id="cpa-edit-button-container">
            <a href="javascript:void(0)" class="button btSolidRound btAdminEdit btEditEnterprise" id="btnEditEnterprise">Update Enterprise</a>  
        </span>
    </div>
</div>
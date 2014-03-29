<?php
/*
 * Copyright Chilli Panda
 * Created on 01-12-2013
 * Created by Shi Wei Eamon
 */
?> 
<script type="text/javascript">
    function goToProject(){
        var projectlink = $('#cpa-project').val();
        if (projectlink != 'Admin'){
            window.location.replace("/ChilliPanda/Projects/" + projectlink);
        }else{
            alert('Please select a project to view');
        }
    }
    $(document).ready(function(){
	$('.cpa-projects').customSelect({customClass:'ddl-cpa-projects'});
    }); 
</script>
<div class="cpa-header-wrapper">

    <div class="cpa-header">
        <div class="cpa-header-logo">
            <a href="/ChilliPanda/Admin"><img src="/ChilliPanda/Admin/img/cp_logo_small.png" /></a>
        </div>
        <div class="cpa-projects-wrapper">
            <span class="cpa-projects-header">Manage</span>
            <div class="ddlcustom-wrapper">
                <select class="cpa-projects" id="cpa-project">
                    <option value="Admin">Select Project</option>
                    <option value="Astralink_Technology">Astralink Technology</option>
                </select>
            </div>
            <a href="javascript:void(0)" onClick="goToProject()" class="button btSolidRound btViewSite">View Site</a>
        </div>
    </div>
</div>
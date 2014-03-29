<?php
/*
 * Copyright Chilli Panda
 * Created on 01-14-2013
 * Created by Shi Wei Eamon
 */
?>
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
    function loadMenu(project){
        resetMainMenu();
        resetSubMenu();
        if (project == 'Astralink_Technology'){
            $("#cpa-main-menu").html($("#tmpl-ast-admin-mainmenu").html());
            loadPage('home');
        }else if (project == 'Menu_For_You'){
            $("#cpa-main-menu").html($("#tmpl-m4u-admin-mainmenu").html());
            loadPage('home');
        }else{
            $("#cpa-main-menu").html($("#tmpl-admin-mainmenu").html());
            loadPage('home');
        }
    }
    function selectMainMenu(menu){
        refreshMainMenu();
        $("#cpa-" + menu).addClass("cpa-mainmenu-selected");
        
        //clear the submenus
        resetSubMenu();
        $("#cpa-sub-menu").html($("#tmpl-" + menu + "-submenu").html());
        $("#cpa-sub-menu").slideDown("fast");
        
    }
    function resetMainMenu(){
        $("#cpa-main-menu").html("");
    }
    function refreshMainMenu(){
        $("#cpa-main-menu ul li a").removeClass("cpa-mainmenu-selected");
    }
    function resetSubMenu(){
        $("#cpa-sub-menu").slideUp("fast");
        $("#cpa-sub-menu").html("");
        //shrink the sub menu
    }
    function resetContent(){
        $("#main-content").html("");
    }
    function loadPage(page){
        resetContent();
        if(page == 'entity'){
            $("#main-content").load("/ChilliPanda/Admin/content/Entity/Entity_zhcn.php");
        }else if (page == 'enterprise'){
            $("#main-content").load("/ChilliPanda/Admin/content/Enterprise/Enterprise_zhcn.php");
        }else if (page == 'product'){
            $("#main-content").load("/ChilliPanda/Admin/content/Products/Product_zhcn.php");
        }else if (page == 'home'){
            $("#main-content").load("/ChilliPanda/Admin/content/Home_zhcn.php");
        }
    }
    function popup(container){
        $("#" + container).bPopup({
            zIndex: 2
            , modal:true
            , follow: [false, false]
        });
    }
    $(document).ready(function(){
	$('.cpa-projects').customSelect({customClass:'ddl-cpa-projects'});
    });

    $(window).load(function () {
        loadMenu('Admin');
        loadPage('home');
    });
        
</script>
<script type="text/javascript">
    //main menus
    $.get('/ChilliPanda/Admin/templates/zhcn/menu_templates/_cp_MainMenu.zhcn.tmpl.htm', function (templates) {
        $('head').append(templates);
    });
    $.get('/ChilliPanda/Admin/templates/zhcn/menu_templates/_cp_astMainMenu.zhcn.tmpl.htm', function (templates) {
        $('head').append(templates);
    });
    $.get('/ChilliPanda/Admin/templates/zhcn/menu_templates/_cp_m4uMainMenu.zhcn.tmpl.htm', function (templates) {
        $('head').append(templates);
    });
    
    //sub menus
    $.get('/ChilliPanda/Admin/templates/zhcn/menu_templates/_cp_SubMenu_Enterprise.zhcn.tmpl.htm', function (templates) {
        $('head').append(templates);
    });
    $.get('/ChilliPanda/Admin/templates/zhcn/menu_templates/_cp_SubMenu_Entity.zhcn.tmpl.htm', function (templates) {
        $('head').append(templates);
    });
    $.get('/ChilliPanda/Admin/templates/zhcn/menu_templates/_cp_SubMenu_Product.zhcn.tmpl.htm', function (templates) {
        $('head').append(templates);
    });
    
</script>
<div class="cpa-header-wrapper">

    <div class="cpa-header">
        <h1>熊猫与泡椒管理系统</h1>
        <div class="cpa-projects-wrapper">
            <span class="cpa-projects-header">管理</span>
            <div class="ddlcustom-wrapper">
                <select class="cpa-projects" id="cpa-project" onChange="loadMenu(this.value)">
                    <option value="Admin">选着项目</option>
                    <option value="Astralink_Technology">Astralink Technology</option>
                    <option value="Menu_For_You">Menu For You</option>
                </select>
            </div>
            <a href="javascript:void(0)" onClick="goToProject()" class="button btSolidRound btViewSite">连接网站</a>
        </div>
    </div>
</div>
<div class="cpa-main-menu-wrapper">
    <div class="cpa-main-menu" id="cpa-main-menu"></div>
</div>
<div class="cpa-sub-menu-wrapper">
    <div class="cpa-sub-menu" id="cpa-sub-menu"></div>
</div>
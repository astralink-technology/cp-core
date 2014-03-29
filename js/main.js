//On load events
function loadHeaderControls(){
    if (_apiHost){
        $.ajax({
            type: "GET",
            url: _apiHost + "/EnterpriseResController/getEnterprises",
            dataType: "json",
            success: function (json) {
                if (!json.error){
                    for (i = 0; i < json.totalRowsAvailable; i++){
                        $(".dropdown-menu").prepend('<li><a href="/account/changeTargetEnterprise?EnterpriseId=' + json.data[i].enterpriseId + '&Name=' + json.data[i].name + '">' + json.data[i].name + '</a></li>');
                        $('.dropdown-toggle').dropdown();
                    }
                }
            },
            error: function (xhr) {
            }
        });
    }
}
function clickOutsideToClose(container) {
    $("html").click(function (e) {
        if (e.target.id == container || $(e.target).parents(container).size()) {
            //inside click
        } else {
            //outside click
            $(container).hide('fast');
            $("html").unbind("click");
        }
    });
}
$(document).ready(function(){
    loadHeaderControls();
});

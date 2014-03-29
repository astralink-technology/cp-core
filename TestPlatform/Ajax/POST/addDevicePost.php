<!DOCTYPE html>
<html>
    <head>
        <title>Orcas Eye | Dashboard</title>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/P2P/Layout/master.php');?>
        <script type="text/javascript" src="/P2P/js/dashboard.js"></script>

        <script type="text/javascript" src="/cp-front/js/kendo/js/kendo.web.min.js"></script>
        <script type="text/javascript" src="/cp-front/js/kendo/js/kendo.dataviz.min.js"></script>
        <link href="/cp-front/js/kendo/styles/kendo.dataviz.default.min.css" rel="stylesheet" />
        <script type="text/javascript">
            function addEntity(){
                var parms = new Object();
                parms.DeviceId ="112233445566";
                parms.Name = "testName";
                parms.Code = "V";
                parms.Status = true;
                parms.Type = "I";
                parms.Type2 = "S";
                parms.EntityId = "cety";

                $.ajax({
                    type: "POST",
                    url: "/P2P/devices/addDevice",
                    processData: true,
                    data: {json: JSON.stringify(parms)},
                    dataType: "json",
                    beforeSend : function (){
                    },
                    dataType: "json",
                    success: function (json) {
                        if (json){
                            alert(json);
                            //$("#json-string").html('New entry inserted with an ID of - ' + json.Id);
                        }
                    },
                    error: function (xhr) {
                        $("#json-string").html(xhr);
                    }
                });
            }
            $(document).ready(function(){
                $("#bt-addEntity").click(function(){
                    addEntity();
                })
            })
        </script>
    </head>
    <body class="test-platform">
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/P2P/Layout/sidebar.php');?>
        <div id="root">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/P2P/Layout/header.php');?>
            <section>
                <h1>Add Device using JSON POST</h1>
                <div><button class="btn btn-large" id="bt-addEntity">Add Device</button></div>
                <pre id="json-string">Click on the button and the json response will appear right here</pre>
            </section>
        </div>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/P2P/Layout/footer.php');?>
    </body>
</html>

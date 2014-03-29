<!DOCTYPE html>
<html>
    <head>
        <title>Chilli Panda | Script Generator</title>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/Layout/master.php');?>
        <script type="text/javascript" src="/js/script-generator.js"></script>
    </head>
    <body class="script-generator fluid">
        <div id="root">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/Layout/header.php');?>
            <div class="section-wrapper">
                <div class="breadcrumbs-wrapper">
                    <ol class="breadcrumb">
                        <li><a href="/home">Home</a></li>
                        <li class="active">Script Generator</li>
                    </ol>
                </div>
                <div class="main-section">
                    <section class="input-file-section">
                        <h1>Script Generator</h1>
                        <p>Generate <b>Classes</b>, <b>Data Access Objects</b>, <b>REST Controllers</b> <em>(alpha)</em> from cp stored procedures in PHP</p>
                        <div class="well file-io">
                            <div class="upload upload-controls">
                                <input type="file" id="io-storeprocedure" />
                            </div>
                            <div class="upload uploaded-info" style="display:none">
                                <div class="uploaded-file-description">
                                    <label>File Input - <span><?php if (isset($filename)){ echo $filename; }else{ echo "No File Uploaded";}?></span></label>
                                </div>
                                <button class="btn btn-primary btn-generate" id="btn-generate" disabled>Generate</button>
                            </div>
                        </div>
                        <div class="script-detection">
                            <div class="variables-detection">
                                <h3>Variables Detected</h3>
                                <ul>
                                    <li>variable1</li>
                                </ul>
                            </div>
                            <div class="namespace-detection">
                                <h3>Namespaces Detected</h3>
                                <ul>
                                    <li>variable1</li>
                                </ul>
                            </div>
                        </div>
                        <div class="uploaded-script">
                            <h3>Uploaded Stored Procedures</h3>
                            <pre class="prettyprint lang-sql">
                                <?php if (isset($code)){ echo $code; }else{ echo "Upload a stored procedure to get started";}?>
                            </pre>
                        </div>
                    </section>
                    <section class="data-access-object-section">

                    </section>
                    <section class="rest-section">

                    </section>
                    <section class="class-section">

                    </section>
                </div>
            <aside>
                <section>
                    <label>View Code</label>
                    <ul class="checklist">
                        <li><input type="radio" name="view-code" value="io">Input File</li>
                        <li><input type="radio" name="view-code" value="dao">Data Access Object</li>
                        <li><input type="radio" name="view-code" value="rest">REST Controller</li>
                        <li><input type="radio" name="view-code" value="classes">Classes</li>
                    </ul>
                </section>
                <section>
                    <label>Script Type</label>
                    <ul class="checklist">
                        <li><input type="radio" name="script-type" value="create"> Create</li>
                        <li><input type="radio" name="script-type" value="read"> Read</li>
                        <li><input type="radio" name="script-type" value="update"> Update</li>
                        <li><input type="radio" name="script-type" value="delete"> Delete</li>
                    </ul>
                </section>
            </aside>
            </div>
        </div>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/Layout/footer.php');?>
    </body>
</html>

<?php
/*
 * Copyright Chilli Panda
 * Created on 01-12-2013
 * Created by Shi Wei Eamon
 */
?>
<div class="cpa-footer-wrapper">
    <div class="cpa-footer">
        <div class="cpa-footer-statuses">
                <?php
                        
                        $sqlConnectionHelper = new cp_sqlConnection_helper();
                ?>
                <div class='cpa-statuses'>
                    <span class="cpa-status-header"> Connection to Database Status & DB Selection: </span>
                    <span class="cpa-status-details">
                    <?php
                        $sqlConnectionHelper->dbConnect(true);
                    ?>
                    </span>
                </div>
                <div class='cpa-statuses' style="color:green">
                    <span class="cpa-status-header"> Connection Test Complete!</span>
                    <span class="cpa-status-details">
                    <?php
                        $sqlConnectionHelper->dbDisconnect();
                    ?>
                    </span>
                </div>
        </div>
        <div class="cpa-footer-copyright">
            Chilli Panda Administrator 2013
        </div>
        <div class="cpa-footer-languages">
            <ul>
                <li><a href="/ChilliPanda/Admin/">English (SG)</a></li>
                <li><a href="/ChilliPanda/Admin/language/ZH/">简体中文 (CN)</a></li>
            </ul>
        </div>
    </div>
</div>
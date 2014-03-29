<header class="site-header">
    <?php if ($webConfig->production == false){ ?>
        <div class="production-status">
            Panda Training Mode
        </div>
    <?php } ?>
    <div class="header-wrapper">
        <div class="logo">
            <div class="pull-left"><a href="/home"><img src="/img/cp-logo.png" width="200px" height="43px" /></a></div>
        </div>
        <div class="pull-right settings">
            <div class="btn-group">
                <div class="dropdown">
                    <!-- Split button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">
                            Administrate -
                            <?php
                                $userHelper = new cp_user_helper();
                                echo $userHelper->getTargetEnterpriseName();
                            ?>
                        </button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li class="divider"></li>
                            <li><a href="/account/logout">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

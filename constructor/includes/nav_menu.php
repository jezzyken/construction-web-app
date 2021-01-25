
<?php include "function/verifiedstatus.php" ?>

<?php $contractorname =  $_SESSION['name'] ?>

<?php

verifiedstatus();

?>

<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../img/user.png" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $contractorname ?></strong>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">

                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="dashboard.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
                </li>
                <li class="#">
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Project</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="projectlist.php">Manage Project <?php if ($verifiedstatus != "Verified"){echo "<span class='label label-primary pull-right'>LOCK</span>"; }?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Client</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="clientmessage.php">Message Request</a></li>
                        <li><a href="clientlist.php">Manage Client</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Subscription</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="mysubscription.php">My Subscription</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </nav>
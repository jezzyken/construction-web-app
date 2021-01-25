
<?php 

if (isset($_SESSION['client_id'])){
    $client_id = $_SESSION['client_id'];
    $cname = $_SESSION['name'];
    $cemail = $_SESSION['email'];
    $ccontactno = $_SESSION['contactno'];

}else{
    $client_id = "";
    $cname = "";
    $cemail = "";
    $ccontactno = "";
}

?>



<header class="main-header header-style-seven">
        <div class="main-box">
            <div class="inner-container clearfix">
                <div class="logo-box">
                    <div class="logo"><a href="index-2.html"><img src="images/logo.png" alt="" title=""></a></div>
                </div>

                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md ">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>
                        
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                </li>
                                <li><a href="project.php">Projects</a></li>

                                <?php
                                    if($client_id){
                                        echo "<li><a href='subscribe.php'>My Account</a></li>";
                                        
                                    }else{
                                        echo "<li><a href='subscribe.php'>Subscribe</a></li>";
                                        echo "<li><a href='cregister.php'>Register</a></li>";
                                    }
                                ?>
                              
                 
                            </ul> 
                        </div>
                    </nav><!-- Main Menu End-->                        
                    
                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <button class="nav-toggler"><span class="fa fa-bars"></span></button>
                    </div>
                </div>
            </div>
        </div>

                <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index-2.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                        <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                </li>
 
                                <li><a href="project.php">Projects</a></li>
                                <?php
                                    if($client_id){
                                        echo "<li><a href='subscribe.php'>My Account</a></li>";
                                        
                                    }else{
                                        echo "<li><a href='subscribe.php'>Subscribe</a></li>";
                                        echo "<li><a href='cregister.php'>Register</a></li>";
                                    }
                                ?>
                 
                            </ul> 
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
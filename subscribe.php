<?php include "header.php" ?>

<?php

$query = mysqli_query($conn, "select * FROM tbl_subscription where subcription_type = 'Weekly'")or die(mysqli_error());
$weekly = mysqli_fetch_assoc($query);


$query = mysqli_query($conn, "select * FROM tbl_subscription where subcription_type = 'Monthly'")or die(mysqli_error());
$monthly = mysqli_fetch_assoc($query);

$query = mysqli_query($conn, "select * FROM tbl_subscription where subcription_type = 'Yearly'")or die(mysqli_error());
$yearly = mysqli_fetch_assoc($query);


?>


<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <?php include "mainheader.php" ?>
    <!--End Main Header -->

    <!-- Hidden Bar -->
    <?php include "login.php" ?>
    <!--End Hidden Bar -->


    <!-- Fun Fact And Features -->
    <section class="fun-fact-and-features alternate"  style="background-image: url(images/background/3.jpg);">
        <div class="outer-box">
            <div class="auto-container">
                <!-- Fact Counter -->
                <div class="fact-counter">
                    <div class="row">
                        <!--Column-->
            
                        <div class="counter-column col-lg-12 col-md-6 col-sm-12 wow fadeInUp" style="text-align: center;  color: white;">
                                <h1 class="counter-title">Choose you Plan</h1>
                        </div>
            
          
                    </div>
                </div>

                <!-- Features -->
                <div class="features">
                    <div class="row">
                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-decorating"></span></div>
                                <h3><a href="service-detail.html">Perfect Design</a></h3>
                                <div class="text"><b><?php echo $weekly['subscriptionname'] ?></b></div>
                                <div class="text"><?php echo $weekly['subscriptiondesc'] ?></div>
                                <div class="text">Php <?php echo $weekly['price'] ?> / Week</div>
                                <div class="link-box"><a href="register.php?subscription=<?php echo $weekly['subscription_id'] ?>">Subscribe</a></div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-plan"></span></div>
                                <h3><a href="service-detail.html">Carefully Planned</a></h3>
                                <div class="text"><b><?php echo $monthly['subscriptionname'] ?></b></div>
                                <div class="text"><?php echo $monthly['subscriptiondesc'] ?></b></div>
                                <div class="text">Php <?php echo $monthly['price'] ?> / Month</div>
                                <div class="link-box"><a href="register.php?subscription=<?php echo $monthly['subscription_id'] ?>">Subscribe</a></div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-sketch-3"></span></div>
                                <h3><a href="service-detail.html">Smartly Execute</a></h3>
                                <div class="text"><b><?php echo $yearly['subscriptionname'] ?></b></div>
                                <div class="text"><?php echo $yearly['subscriptiondesc'] ?></b></div>
                                <div class="text">Php <?php echo $yearly['price'] ?> / Year</div>
                                <div class="link-box"><a href="register.php?subscription=<?php echo $yearly['subscription_id'] ?>">Subscribe</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!-- Main Footer -->

    <?php include "footer.php" ?>

</body>

<!-- Mirrored from expert-themes.com/html/contra/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 10:58:41 GMT -->
</html>
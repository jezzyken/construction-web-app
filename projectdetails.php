<?php include "header.php" ?>

<?php


$project = $_GET['project'] ?>

<?php 
    $query = "SELECT * FROM tbl_project INNER JOIN tbl_constructor ON (tbl_project.constructor_id = tbl_constructor.constructor_id) WHERE project_id = '$project'";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
                                    
        $project_id = $row['project_id']; 
        $project_image = $row['project_image'];
        $projectname= $row['projectname'];
        $projectdesc= $row['projectdesc'];
        $dateadded= $row['dateadded'];
        $location= $row['location'];
        $surfacearea= $row['surfacearea'];
        $estimateddate= $row['estimateddate'];
        $cost= $row['cost'];
        $name= $row['name'];
    }

?>

<?php 
    $query = "SELECT * FROM tbl_project INNER JOIN tbl_project_package ON (tbl_project.project_id = tbl_project_package.project_id) WHERE tbl_project.project_id = '$project'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0){
        while($row = mysqli_fetch_assoc($result)){
            $project_package_id = $row['project_package_id']; 
            $packagedesc = $row['packagedesc'];
        }
    }else{
        $packagedesc = "";
        $project_package_id = ""; 
    }

?>

<?php 
    $query = "SELECT * FROM tbl_project INNER JOIN tbl_projectoffer ON (tbl_project.project_id = tbl_projectoffer.project_id) WHERE tbl_project.project_id = '$project'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0){
        while($row = mysqli_fetch_assoc($result)){
                                    
            $projectoffer_id = $row['projectoffer_id']; 
            $projectofferinfo = $row['projectofferinfo'];
        }
    }else{
        $projectoffer_id = "" ;
        $projectofferinfo = "";
    }

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

    <!--Project Detail Section-->
    <section class="project-details-section">
        <div class="project-detail">
            <div class="auto-container">
                <!-- Upper Box -->
                <div class="upper-box">
                    <!--Project Tabs-->
                    <div class="project-tabs tabs-box clearfix">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">

                        <?php 
                            $query = "SELECT * FROM tbl_project INNER JOIN tbl_project_image ON (tbl_project.project_id = tbl_project_image.project_id) WHERE tbl_project.project_id = '$project' LIMIT 3";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_assoc($result)){

                                $project_image_id = $row['project_image_id'];
                                $project_image = $row['project_image'];
                        ?>
                                <li data-tab="#<?php echo $project_image_id ?>" class="tab-btn active-btn"><a href="uploads/<?php echo  $project_image ?>" class="lightbox-image" data-fancybox="images"><img src="uploads/<?php echo  $project_image ?>" alt="" style="height: 170px"></li>

                        <?php } ?>

                        </ul>
                        
                        <!--Tabs Container-->
                        <div class="tabs-content">

                        <?php 
                            $query = "SELECT * FROM tbl_project INNER JOIN tbl_project_image ON (tbl_project.project_id = tbl_project_image.project_id) WHERE tbl_project.project_id = '$project' LIMIT 3";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_assoc($result)){

                                $project_image_id = $row['project_image_id'];
                                $project_image = $row['project_image'];
                        ?>
                        
                        <?php } ?>

                            <!--Tab / Active Tab-->
                            <div class="" id="<?php echo $project_image_id ?>">
                                <figure class="image"><a href="uploads/<?php echo  $project_image ?>" class="lightbox-image" data-fancybox="images"><img src="uploads/<?php echo $project_image ?>" style="width: 970px; height: 560px"  alt=""></a></figure>
                            </div>


                        </div>
                    </div>
                </div>
                
                <!--Lower Content-->
                <div class="lower-content"> 
                    <div class="row clearfix">
                        <!--Content Column-->
                        <div class="content-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2>Project Description</h2>
                                <p><?php echo $projectdesc ?></p> 
                                <h4>Package</h4>

                                <p><?php echo $packagedesc ?></p>
                               
                                <ul class="list-style-one">
                                <?php 
                                    $query = "SELECT * FROM tbl_project 
                                    INNER JOIN tbl_project_package ON (tbl_project.project_id = tbl_project_package.project_id)
                                    INNER JOIN tbl_project_package_item ON (tbl_project_package.project_package_id = tbl_project_package_item.project_package_id)
                                    WHERE tbl_project_package.project_package_id = '$project_package_id' LIMIT 6";
                                    $result = mysqli_query($conn, $query);
                                    $count = mysqli_num_rows($result);

                                    if ($count > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            $project_package_info = $row['project_package_info'];
                                    ?>
                                            <li><?php echo  $project_package_info  ?></li>
    
                                 <?php } }?>

                                </ul>

                                <h4>Offers</h4>
                                <p><?php echo $projectofferinfo ?></p>
                            
                            </div>
                        </div>
                        
                        <!--Info Column-->
                        <div class="info-column col-lg-4 col-md-12 col-sm-12 ">
                            <div class="inner-column wow fadeInRight">
                                <h3>Project Information</h3>
                                <p><?php echo $projectname ?></p>
                                <ul class="info-list">
                                    <li><strong>Location :</strong> <?php echo $location ?></li>
                                    <li><strong>Surface Area :</strong> <?php echo $surfacearea ?></li>
                                    <li><strong>Estimated Date :</strong><?php echo $estimateddate ?></li>
                                    <li><strong>Cost :</strong> <?php echo $cost ?></li>
                                    <li><strong>Engineer :</strong> <?php echo $name ?></li>
                                </ul>

                                <!--Help Box-->

                                <?php if (!$client_id){
                                
                                ?>
                                    <div class="help-box-two">
                                    <div class="inner">
                                        <span class="title">Quick Contact</span>
                                        <h2>Get Solution</h2>
                                        <div class="text">Sign Up Now and Contact us, we well contact you and tell more about the Project</div>
                                        <a class="theme-btn btn-style-two" href="cregister.php">Sign Up</a>
                                    </div>
                                    </div>

                                <?php } else{
                                    ?>

                                    <div class="help-box-two">
                                    <div class="inner">
                                        <span class="title">Quick Contact</span>
                                        <h2>Get Solution</h2>
                                        <div class="text">Contact Us now and Get a Solution </div>
                                        <a class="theme-btn btn-style-two" href="contact.php?project=<?php echo $project ?>">Contact Us</a>
                                    </div>
                                    </div>


                               <?php } ?>
                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio Details-->

    <!-- Main Footer -->

    <?php include "footer.php" ?>

</body>

<!-- Mirrored from expert-themes.com/html/contra/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 10:58:41 GMT -->
</html>
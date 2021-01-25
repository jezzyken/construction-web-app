<?php include "header.php" ?>

<?php 



if (isset($_GET['result'])){
    $result = $_GET['result']; 

  
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

   <!-- Sidebar Page Container -->
   <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-classic">


    <?php 

        $per_page = 4;

        if(isset($_GET['page'])) {

        $page = $_GET['page'];

        } else {

            $page = "";
        }

        if($page == "" || $page == 1) {

            $page_1 = 0;

        } else {

            $page_1 = ($page * $per_page) - $per_page;
        }

    ?>

                <?php
                
                    if (isset($_GET['range'])){

                        $range = $_GET['range'];
                        $to = $_GET['to'];

                        $post_query_count  = "SELECT * FROM tbl_project
                        INNER JOIN tbl_constructor ON (tbl_project.constructor_id = tbl_constructor.constructor_id)
                        INNER JOIN tbl_subscriber ON (tbl_constructor.constructor_id = tbl_subscriber.constructor_id) WHERE COST BETWEEN  '$range' AND  '$to' AND tbl_subscriber.status = 'Verified'  AND tbl_project.status = 'Published'";
                                    
                        $find_count = mysqli_query($conn, $post_query_count);
                        $count = mysqli_num_rows($find_count);
                        $count = ceil($count /$per_page);

                        $query  = "SELECT * FROM tbl_project
                        INNER JOIN tbl_constructor ON (tbl_project.constructor_id = tbl_constructor.constructor_id)
                        INNER JOIN tbl_subscriber ON (tbl_constructor.constructor_id = tbl_subscriber.constructor_id) WHERE COST BETWEEN  '$range' AND  '$to' AND tbl_subscriber.status = 'Verified' AND tbl_project.status = 'Published' LIMIT $page_1, $per_page";
                                    
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_assoc($result)){
                                                            
                            $project_id = $row['project_id']; 
                            $project_image = $row['project_image'];
                            $projectname= $row['projectname'];
                            $projectdesc= $row['projectdesc'];
                            $dateadded= $row['dateadded'];
                            $name= $row['name'];

                            ?>

                        <!-- News Block -->
                        <div class="news-block-two wow fadeIn">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="projectdetails.php?project=<?php echo $project_id ?>"><img src="uploads/<?php echo  $project_image ?>" style="height: 370px"></a></figure>
                                </div>
                                <div class="caption-box">
                                    <div class="inner">
                                        <h3><a href="projectdetails.php?project=<?php echo $project_id ?>"><?php echo  $projectname ?></a></h3>
                                        <ul class="info">
                                            <li><?php echo  $dateadded ?></li>
                                            <li><a href=""><?php echo  $name ?></a></li>
                                        </ul>
                                        <div class="text"><?php echo  $projectdesc ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Block -->

                       <?php } } else {

                        $post_query_count  = "SELECT * FROM tbl_project
                        INNER JOIN tbl_constructor ON (tbl_project.constructor_id = tbl_constructor.constructor_id)
                        INNER JOIN tbl_subscriber ON (tbl_constructor.constructor_id = tbl_subscriber.constructor_id) WHERE tbl_subscriber.status = 'Verified' ";
                                    
                        $find_count = mysqli_query($conn, $post_query_count);
                        $count = mysqli_num_rows($find_count);
                        $count = ceil($count /$per_page);

                        $query  = "SELECT * FROM tbl_project
                        INNER JOIN tbl_constructor ON (tbl_project.constructor_id = tbl_constructor.constructor_id)
                        INNER JOIN tbl_subscriber ON (tbl_constructor.constructor_id = tbl_subscriber.constructor_id) WHERE tbl_subscriber.status = 'Verified' LIMIT $page_1, $per_page";
                                    
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_assoc($result)){
                                                            
                            $project_id = $row['project_id']; 
                            $project_image = $row['project_image'];
                            $projectname= $row['projectname'];
                            $projectdesc= $row['projectdesc'];
                            $dateadded= $row['dateadded'];
                            $name= $row['name'];

                            ?>

                        <!-- News Block -->
                        <div class="news-block-two wow fadeIn">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="projectdetails.php?project=<?php echo $project_id ?>"><img src="uploads/<?php echo  $project_image ?>" style="height: 370px"></a></figure>
                                </div>
                                <div class="caption-box">
                                    <div class="inner">
                                        <h3><a href="projectdetails.php?project=<?php echo $project_id ?>"><?php echo  $projectname ?></a></h3>
                                        <ul class="info">
                                            <li><?php echo  $dateadded ?></li>
                                            <li><a href=""><?php echo  $name ?></a></li>
                                        </ul>
                                        <div class="text"><?php echo  $projectdesc ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Block -->

                      <?php } } ?>
    
                    </div>

                    <!--Post Share Options-->
                    <div class="styled-pagination">
                        <ul class="clearfix">

                        <?php 
                            
                            $number_list = array();
                            for($i =1; $i <= $count; $i++) {

                            if($i == $page) {
                                echo "<li class='active'><a href='project_search_result.php?page={$i}'>{$i}</a></li>";

                            }  else {
                                echo "<li '><a href='project_search_result.php?page={$i}'>{$i}</a></li>";
                            }

                            }

                            ?>

                            <!-- <li class="prev-post"><a href="#"><span class="fa fa-long-arrow-left"></span> Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next-post"><a href="#"> Next <span class="fa fa-long-arrow-right"></span> </a></li>
         -->

                        
                        </ul>
                    </div>

                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">
                        
                        <!--search box-->
                        <div class="sidebar-widget search-box">
                                <div class="form-group">
                                    <input type="search" id="search" value="" placeholder="Search....." required="">
                                    <button type="submit" onclick="myFunction()"><span class="icon fa fa-search" id="button"></span></button> 
                                </div>
                        </div>

                        <!-- Categories -->

                        <?php include "budget.php" ?>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

    <!-- Main Footer -->

    <?php include "footer.php" ?>


<script>
function myFunction() {
    var key = document.getElementById("search").value;
    window.open("project_search_result.php?result=" + key, "_SELF" );
}
</script>

</body>

<!-- Mirrored from expert-themes.com/html/contra/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 10:58:41 GMT -->
</html>
<?php include "header.php" ?>



<body>

<div class="page-wrapper">
    <!-- Preloader -->
    
        <!-- Main Header-->
        <?php include "mainheader.php" ?>
    <!--End Main Header -->


    <?php $project_id = $_GET['project'];
    
    echo $project_id ;
    echo $client_id;
    ?>



    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row">
                <!-- Form Column -->
                
                <div class="column col-lg-3 col-md-12 col-sm-12">
                </div>
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="float-text">informer</span>
                            <h2>Contact Us</h2>
                        </div>

                        <div class="contact-form">
                            <form method="post" action="" id="contact-form">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="name" placeholder="Name" value="<?php echo $cname ?>"disabled required="">
                                      
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="contactno" placeholder="Phone" value="<?php echo $ccontactno ?>"disabled required="">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="company" placeholder="Company">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="email" name="email" placeholder="Email" value="<?php echo $cemail ?>"disabled required="">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="Massage Me" required></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-three" type="submit" name="submit">Contact Us Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                   
                    </div>
                </div>

                <div class="form-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->


</div>


<?php include "footer.php" ?>

<?php 
    
    if (isset($_POST['submit'])){

        $company = $_POST['company'];
        $message = $_POST['message'];
        $status = "Pending";
        $project_id ;
        $client_id;

        $query = "INSERT tbl_client_message (message, company, project_id, client_id, status) VALUES ('$message', '$company', '$project_id', '$client_id', '$status')";
        $insert = mysqli_query($conn, $query);
        $constructor_id = mysqli_insert_id($conn);
        if (!$insert){
            die("Failed" . mysqli_error($conn));
        }else{
            echo '<script language="javascript">';
            echo 'alert("Succesfully Sent Message")';
            echo '</script>';

            echo '<script language="javascript">';
            echo 'window.location = "index.php"';
            echo '</script>';
            
        }

    }
    
 ?>

</body>

<!-- Mirrored from expert-themes.com/html/contra/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 11:00:51 GMT -->
</html>
<?php include "header.php" ?>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <?php include "mainheader.php" ?>
    <!--End Main Header -->

    <!-- Hidden Bar -->

    <!--End Hidden Bar -->
    
    <!--End Page Title-->

   <!--Login Section-->
   <section class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
            <div class="column col-lg-3 col-md-12 col-sm-12">
                </div>
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <h2>Register</h2>
                    <!-- Login Form -->
                    <div class="login-form">
                        <!--Login Form-->
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="contactno" placeholder="Contact No" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" placeholder="Password" required>
                            </div>
                            
                            <div class="clearfix">
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Login Form -->
                </div>
                
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Login Section-->

    <!-- Main Footer -->

    <?php include "footer.php" ?>

    
<?php 
    
    if (isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $contactno = $_POST['contactno'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($conn, "SELECT username, email FROM tbl_client where username = '$username' || email = '$email'")or die(mysqli_error());
        $count = mysqli_num_rows($query);

        if($count >= 1){
            echo '<script language="javascript">';
            echo 'alert("Already Exist")';
            echo '</script>';
        }else{
                $query = "INSERT tbl_client (name, email, contactno, username, password, user_level_id) VALUES ('$name', '$email', '$contactno', '$username', '$password', '3')";
                $insert = mysqli_query($conn, $query);
                $constructor_id = mysqli_insert_id($conn);
                if (!$insert){
                    die("Failed" . mysqli_error($conn));
                }else{
                    echo '<script language="javascript">';
                    echo 'alert("Succesfully Registered")';
                    echo '</script>';

                    echo '<script language="javascript">';
                    echo 'window.location = "index.php"';
                    echo '</script>';
                  
                }
            }

        }
    
 ?>

</body>

<!-- Mirrored from expert-themes.com/html/contra/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 10:58:41 GMT -->
</html>
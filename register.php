<?php include "header.php" ?>


<?php if (isset($_GET['subscription']) == ""){

    header("Location: subscribe.php");

}else{
    $id = $_GET['subscription']; 
}

?>

<?php

$query = mysqli_query($conn, "select * FROM tbl_subscription where subscription_id = '$id'")or die(mysqli_error());


while($row = mysqli_fetch_assoc($query)){
    $subscptionname = $row['subscriptionname'];
    $subcription_type = $row['subcription_type'];
    $subscriptiondesc = $row['subscriptiondesc'];
    $cost = $row['price'];

}

?>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <?php include "mainheader.php" ?>
    <!--End Main Header -->


    <!--Login Section-->
    <section class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <h3>Subscription Information</h3>
                    
                    <!-- Login Form -->
                    <div class="login-form">
                        <!--Login Form-->
                        <form method="post" action="">
                            <div class="form-group">
                                <label>Subscription Type: <br><b><?php echo $subcription_type ?> </b></label>
                            </div>
                            
                            <div class="form-group">
                                <label>Subscrption:<br> <b><?php echo $subscptionname ?> </b></label>
                            </div>
                            <div class="form-group">
                                <label>Subscription Detals: <br><b><?php echo $subscriptiondesc ?> </b></label>
                            </div>
                            <div class="form-group">
                                <label>Subscrption Cost:  <b> Php <?php echo $cost ?> </b></label>
                            </div>
                            
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">back</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Login Form -->
                </div>
                
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <h3>Register</h3>
                    
                    <!-- Register Form -->
                    <div class="login-form register-form">
                        <!--Login Form-->
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="contactno" placeholder="Contact No" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" placeholder="Address" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            
                            <div class="form-group text-right">
                                <input type="submit" class="theme-btn btn-style-one" name="submit" value="Register">
                            </div>
                        </form>      
                    </div>
                    <!--End Register Form -->
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
        $address = $_POST['address'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($conn, "SELECT username, email FROM tbl_constructor where username = '$username' || email = '$email'")or die(mysqli_error());
        $count = mysqli_num_rows($query);

        if($count >= 1){
            echo '<script language="javascript">';
            echo 'alert("Already Exist")';
            echo '</script>';
        }else{
                $query = "INSERT tbl_constructor (name, email, contactno, address, username, password, user_level_id) VALUES ('$name', '$email', '$contactno', '$address', '$username', '$password', '2')";
                $insert = mysqli_query($conn, $query);
                $constructor_id = mysqli_insert_id($conn);

                $query = "INSERT tbl_subscriber (constructor_id, subscription_id, status) VALUES ('$constructor_id', '$id', 'Pending')";
                $insert = mysqli_query($conn, $query);

                if (!$insert){
                    die("Failed" . mysqli_error($conn));
                }else{
                    echo '<script language="javascript">';
                    echo 'alert("Succesfully Registered")';
                    echo '</script>';

                    echo '<script language="javascript">';
                    echo 'window.location="index.php"';
                    echo '</script>';


                  
                }
            }

        }
    
 ?>

</body>

<!-- Mirrored from expert-themes.com/html/contra/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 10:58:41 GMT -->
</html>
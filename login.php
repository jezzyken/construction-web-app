<section class="hidden-bar">
        <div class="inner-box">
            <div class="cross-icon"><span class="fa fa-times"></span></div>
            <div class="title">
                <h2>Login</h2>
            </div>

            <!--Appointment Form-->
            <div class="appointment-form">
            <?php if(!$client_id){

            ?>
                <form method="post" action="">
                   <br> 
                    <div class="form-group">
                        <input type="text" name="username" value="" placeholder="Username" required style="position:relative; display:block; width:100%; line-height:23px; padding:10px 25px; height:45px; color:#ffffff; font-size:16px; border:1px solid rgba(255,255,255,0.10); background:none; transition:all 300ms ease; -ms-transition:all 300ms ease; -webkit-transition:all 300ms ease;"> 
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" value="" placeholder="Password" required style="position:relative; display:block; width:100%; line-height:23px; padding:10px 25px; height:45px; color:#ffffff; font-size:16px; border:1px solid rgba(255,255,255,0.10); background:none; transition:all 300ms ease; -ms-transition:all 300ms ease; -webkit-transition:all 300ms ease;">
                    </div>

                    <br> 
                    <div class="pull-center">
                    <div class="form-group">
                        <input type="submit" class="theme-btn btn-style-three" name="submit" value="           LOGIN           " >
                    </div>
                    </div>
                    </form>
               <?php }else{
                   ?>
                    <div class="pull-center">
                    <div class="form-group">
                        <a href="logout.php">
                        <input type="submit" class="theme-btn btn-style-three" name="logout" value="           LOGOUT           " >
                        </a>
                    </div>
                    </div>
                    

               <?php } ?>
               
            </div>
            
        </div>
    </section>



<?php if (isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $constructor = mysqli_query($conn, "SELECT * FROM tbl_constructor where username = '$username' && password = '$password'")or die(mysqli_error());
    $constructor_count = mysqli_num_rows($constructor);

    $client = mysqli_query($conn, "SELECT * FROM tbl_client where username = '$username' && password = '$password'")or die(mysqli_error());
    $client_count = mysqli_num_rows($client);

    while($row = mysqli_fetch_assoc($constructor)){

        $constructor_id = $row['constructor_id'];
        $contactorname = $row['name'];
        
    }

    while($row = mysqli_fetch_assoc($client)){

        $client_id = $row['client_id'];
        $cname = $row['name'];
        $cemail = $row['email'];
        $ccontactno = $row['contactno'];
    }

    if($constructor_count <=  0){
        echo '<script language="javascript">';
        echo 'alert("Acess Failed")';
        echo '</script>';
    }else{
        $_SESSION['constructor_id'] = $constructor_id;
        $_SESSION['name'] = $contactorname;
        header("Location: constructor/dashboard.php");
    }

    if($client_count <=  0){
        echo '<script language="javascript">';
        echo 'alert("Acess Failed")';
        echo '</script>';
    }else{
        $_SESSION['client_id'] = $client_id;
        $_SESSION['name'] = $cname;
        $_SESSION['email'] = $cemail;
        $_SESSION['contactno'] = $ccontactno;
        header("Location: index.php");
    }
}

?>








<?php include "includes/conn.php" ?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
            <br><br><br><br><br><br>

            </div>
            <h3>Welcome to Admin</h3>
            
            <form class="m-t" role="form" action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <input type="submit" class="btn btn-primary block full-width m-b" value="Login" name="submit">
                <!-- <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>


    <?php if (isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($conn, "SELECT username, password FROM tbl_admin where username = '$username' && password = '$password'")or die(mysqli_error());
        
        $count = mysqli_num_rows($query);

        if($count <=  0){
            echo '<script language="javascript">';
            echo 'alert("Acess Failed")';
            echo '</script>';
        }else{
            header("Location: dashboard.php");
        }

    }

    ?>







</body>

</html>

<?php

include "includes/conn.php";

if(isset($_GET['payment'])){

    $status = "Verified";
    $payment = $_GET['payment'];

    $query = "UPDATE tbl_subscriber SET status= '$status' WHERE subscriber_id = $payment";
  
    $insert = mysqli_query($conn, $query);

    if (!$insert){
        die("Failed" . mysqli_error($conn));
        }else{
            echo '<script language="javascript">';
            echo 'alert("Constituent Sucessfully Updated")';
            echo '</script>';
        }
    }

?>
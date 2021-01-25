<?php

include "includes/conn.php";

if(isset($_GET['project'])){

    $status = "Published";
    $project_id = $_GET['project'];

    $query = "UPDATE tbl_project SET status= '$status' WHERE project_id  = $project_id";
  
    $insert = mysqli_query($conn, $query);

    if (!$insert){
        die("Failed" . mysqli_error($conn));
        }else{
            echo '<script language="javascript">';
            echo 'alert("Successfully Published")';
            echo '</script>';
        }
    }

?>
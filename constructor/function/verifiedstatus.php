<?php

function verifiedstatus(){

    global $conn;
    $constructor_id = $_SESSION['constructor_id'];

    global $verifiedstatus;

    $query = "SELECT * FROM tbl_subscriber 
    INNER JOIN tbl_constructor ON (tbl_subscriber.constructor_id = tbl_constructor.constructor_id)
    INNER JOIN tbl_subscription ON (tbl_subscriber.subscription_id = tbl_subscription.subscription_id) WHERE tbl_constructor.constructor_id =  '$constructor_id'";

    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
        $verifiedstatus= $row['status'];
    }

}

?>
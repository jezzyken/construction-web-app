<?php

function display(){

    $constructor_id = $_SESSION['constructor_id'];

    global $conn;

    global $verifiedstatus;

    $query = "SELECT * FROM tbl_subscriber 
    INNER JOIN tbl_constructor ON (tbl_subscriber.constructor_id = tbl_constructor.constructor_id)
    INNER JOIN tbl_subscription ON (tbl_subscriber.subscription_id = tbl_subscription.subscription_id) WHERE tbl_constructor.constructor_id =  '$constructor_id'";

    $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){
                                    
        $subscriber_id = $row['subscriber_id'];
        $name = $row['name'];
        $email= $row['email'];
        $address= $row['address'];
        $subcription_type= $row['subcription_type'];
        $subscriptionname= $row['subscriptionname'];
        $price= $row['price'];
        $verifiedstatus= $row['status'];

        echo "<tr>";
        echo "<td>{$subscriber_id}</td>";
        echo "<td>{$name}</td> ";
        echo "<td>{$email}</td> ";
        echo "<td>{$subcription_type}</td> ";
        echo "<td>{$subscriptionname}</td> ";
        echo "<td>{$price}</td> ";

        echo "<td>";
            if ( $verifiedstatus == "Verified"){
                echo "<span class='badge badge-primary'>{$verifiedstatus}</span>";
            }else{
                echo "<span class='badge badge-warning'>{$verifiedstatus}</span>";
            }
            echo "</a>";
         echo "</td>";
        echo "<td>";
        if ($verifiedstatus == "Verified"){

        }else{
            echo "<a href='addpayment.php?payment={$subscriber_id}'> Add Payment ";
            echo "</a>";
        }
         
        echo "</td>";
        echo "</tr>";
        }
    }




?>
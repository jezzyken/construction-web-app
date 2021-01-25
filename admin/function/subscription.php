<?php

function insert(){

    global $conn;

    if(isset($_POST['submit'])){

        $subscription = $_POST['subscription'];
        $description = $_POST['description'];
        $subscriptiontype = $_POST['subscriptiontype'];
        $price = $_POST['price'];

        if ($subscription == "" || empty($subscription)){
            echo "Failed should not be empty";
        }else{

            $query = mysqli_query($conn, "SELECT subscriptionname FROM tbl_subscription where subscriptionname = '$subscription'")or die(mysqli_error());
            $count = mysqli_num_rows($query);

            if($count >= 1){
                echo '<script language="javascript">';
                echo 'alert("Already Exist")';
                echo '</script>';
            }else{
                $query = "INSERT tbl_subscription  (subscriptionname, subscriptiondesc, subcription_type, price) VALUES ('$subscription', '$description', '$subscriptiontype', '$price')";
                $insert = mysqli_query($conn, $query);
    
                if (!$insert){
                    die("Failed" . mysqli_error($conn));
                }else{
                    echo '<script language="javascript">';
                    echo 'alert("Sucessfully Added")';
                    echo '</script>';

                    echo '<script language="javascript">';
                    echo 'window.location="subscriptionlist.php"';
                    echo '</script>';
                }
            }

        }

    }

}

function display(){

    global $conn;

    $query = "SELECT * FROM tbl_subscription";

    $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){
                                    
        $subscription_id = $row['subscription_id'];
        $subscriptionname = $row['subscriptionname'];
        $subscriptiondesc= $row['subscriptiondesc'];
        $subcription_type= $row['subcription_type'];
        $price= $row['price'];

        echo "<tr>";
        echo "<td>{$subscription_id}</td>";
        echo "<td>{$subscriptionname}</td> ";
        echo "<td>{$subscriptiondesc}</td> ";
        echo "<td>{$subcription_type}</td> ";
        echo "<td>{$price}</td> ";

        echo "<td>";
            echo "<a href='constituent_list.php?delete={$subscription_id}'> Delete ";
            echo "<a href='?edit={$subscription_id}'> Edit ";
            echo "</a>";
        echo "</td>";
        echo "</tr>";
        }
    }



?>
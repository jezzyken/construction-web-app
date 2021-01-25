<?php

function display(){

    global $conn;

    $query = "SELECT * FROM tbl_subscriber 
    INNER JOIN tbl_constructor ON (tbl_subscriber.constructor_id = tbl_constructor.constructor_id)
    INNER JOIN tbl_subscription ON (tbl_subscriber.subscription_id = tbl_subscription.subscription_id) WHERE status = 'Pending' order by subscriber_id DESC";

    $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){
                                    
        $subscriber_id = $row['subscriber_id'];
        $name = $row['name'];
        $email= $row['email'];
        $address= $row['address'];
        $subcription_type= $row['subcription_type'];
        $subscriptionname= $row['subscriptionname'];
        $price= $row['price'];
        $status= $row['status'];

        echo "<tr>";
        echo "<td>{$subscriber_id}</td>";
        echo "<td>{$name}</td> ";
        echo "<td>{$email}</td> ";
        echo "<td>{$subcription_type}</td> ";
        echo "<td>{$subscriptionname}</td> ";
        echo "<td>{$price}</td> ";

        echo "<td>";
            if ($status == "Verified"){
                echo "<span class='badge badge-primary'>{$status}</span>";
            }else{
                echo "<span class='badge badge-warning'>{$status}</span>";
            }
          
            echo "</a>";
        echo "</td>";
        echo "<td>";
        echo "<a href='viewpayment.php?payment={$subscriber_id}'> View Payment ";
        echo "</a>";
    echo "</td>";
        echo "</tr>";
        }
    }

    function displayactive(){

        global $conn;
    
        $query = "SELECT * FROM tbl_subscriber 
        INNER JOIN tbl_constructor ON (tbl_subscriber.constructor_id = tbl_constructor.constructor_id)
        INNER JOIN tbl_subscription ON (tbl_subscriber.subscription_id = tbl_subscription.subscription_id) WHERE status = 'Verified'";
    
        $result = mysqli_query($conn, $query);
    
            while($row = mysqli_fetch_assoc($result)){
                                        
            $subscriber_id = $row['subscriber_id'];
            $name = $row['name'];
            $email= $row['email'];
            $address= $row['address'];
            $subcription_type= $row['subcription_type'];
            $subscriptionname= $row['subscriptionname'];
            $price= $row['price'];
            $status= $row['status'];
    
            echo "<tr>";
            echo "<td>{$subscriber_id}</td>";
            echo "<td>{$name}</td> ";
            echo "<td>{$email}</td> ";
            echo "<td>{$subcription_type}</td> ";
            echo "<td>{$subscriptionname}</td> ";
            echo "<td>{$price}</td> ";
    
            echo "<td>";
                if ($status == "Verified"){
                    echo "<span class='badge badge-primary'>{$status}</span>";
                }else{
                    echo "<span class='badge badge-warning'>{$status}</span>";
                }
             echo "</td>";
            echo "</tr>";
            }
        }

        function viewpayment($payment_id){

            global $conn;
        
            $query = "SELECT * FROM tbl_payment
            INNER JOIN tbl_subscriber ON (tbl_payment.subscriber_id = tbl_subscriber.subscriber_id)
            INNER JOIN tbl_subscription ON (tbl_subscriber.subscription_id = tbl_subscription.subscription_id)
            INNER JOIN tbl_constructor ON (tbl_payment.contructor_id = tbl_constructor.constructor_id) WHERE  tbl_subscriber.subscriber_id = '$payment_id'";
        
            $result = mysqli_query($conn, $query);
        
                while($row = mysqli_fetch_assoc($result)){
                                            
                $subscriber_id = $row['subscriber_id'];
                $referenceno = $row['referenceno'];
                $sendername= $row['sendername'];
                $amount= $row['amount'];
                $receipt_image= $row['receipt_image'];
                $name= $row['name'];
                $email= $row['email'];
                $contactno= $row['contactno'];
                $status= $row['status'];
        
                echo "<tr>";
                echo "<td>{$subscriber_id}</td>";
                echo "<td>{$referenceno}</td> ";
                echo "<td>{$sendername}</td> ";
                echo "<td><a href='$receipt_image'><i class='fa fa-download'></i></a></td> ";
                echo "<td>{$amount}</td> ";

                if ($status == "Verified"){
                    echo "<td>";
                    echo "<span class='badge badge-primary'>Verified</span> ";
                    echo "</span>";
                    echo "</td>";
                }else{
                    echo "<td>";
                    echo "<a href='verifypayment.php?payment={$subscriber_id}' class='btn btn-w-m btn-primary'> Verify ";
                    echo "</a>";
                echo "</td>";
                }
        
               

                echo "</tr>";
                }
            }

        


?>
<?php

function display($constructor_id){

    global $conn;

    $query = "SELECT * FROM tbl_client_message 
    INNER JOIN tbl_client ON (tbl_client_message.client_id = tbl_client.client_id)
    INNER JOIN tbl_project ON (tbl_client_message.project_id = tbl_project.project_id) WHERE constructor_id = '$constructor_id' ";

    $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){

        $client_message_id = $row['client_message_id'];
        $message = $row['message'];
        $name= $row['name'];
        $email= $row['email'];
        $contactno = $row['contactno'];
        $company = $row['company'];
        $projectname = $row['projectname'];
        $status = $row['status'];

        echo "<tr>";
        echo "<td>{$client_message_id}</td>";
        echo "<td>{$name}</td>";
        echo "<td>{$message}</td>";
        echo "<td>{$email}</td>";
        echo "<td>{$contactno}</td>";
        echo "<td>{$company}</td>";
        echo "<td>{$projectname}</td>";

        // echo "<td>";
        // echo "<a href='#.php?delete={$status}' class='btn btn-primary dim'> Verify </i> </a> &nbsp;";  
        
        // echo "</td>";

        echo "</tr>";

        }
    }

?>
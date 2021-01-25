<?php

function insert(){

    global $conn;

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $contactno = $_POST['contactno'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($name == "" || empty($name)){
            echo "Failed should not be empty";
        }else{

            $query = mysqli_query($conn, "SELECT username FROM tbl_admin where username = '$username' || email = '$email'")or die(mysqli_error());
            $count = mysqli_num_rows($query);

            if($count >= 1){
                echo '<script language="javascript">';
                echo 'alert("Already Taken")';
                echo '</script>';
            }else{

                $query = "INSERT tbl_admin  (name, email, contactno, username, password, user_level_id) VALUES ('$name', '$email', '$contactno', '$username', '$password', '1')";
                $insert = mysqli_query($conn, $query);
    
                if (!$insert){
                    die("Failed" . mysqli_error($conn));
                }else{
                    echo '<script language="javascript">';
                    echo 'alert("Sucessfully Added")';
                    echo '</script>';

                    echo '<script language="javascript">';
                    echo 'window.location="adminlist.php"';
                    echo '</script>';
                }
            }

        }

    }

}

function display(){

    global $conn;

    $query = "SELECT * FROM tbl_admin";

    $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){
                                    
        $admin_id = $row['admin_id'];
        $name = $row['name'];
        $contactno= $row['contactno'];
        $email= $row['email'];
        $username= $row['username'];
        $password= $row['password'];

        echo "<tr>";
        echo "<td>{$admin_id}</td>";
        echo "<td>{$name}</td> ";
        echo "<td>{$contactno}</td> ";
        echo "<td>{$email}</td> ";
        echo "<td>{$username}</td> ";
        echo "<td>{$password}</td> ";

        echo "<td>";
            echo "<a href='constituent_list.php?delete={$admin_id}'> Delete ";
            echo "<a href='?edit={$admin_id}'> Edit ";
            echo "</a>";
        echo "</td>";
        echo "</tr>";
        }
    }



?>
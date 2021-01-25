<?php
	include('../conn.php');
	if(isset($_POST['add'])){
		$name=$_POST['name'];
        $email=$_POST['email'];
        $contactno=$_POST['contactno'];
        $username=$_POST['username'];
		$password=$_POST['password'];
		mysqli_query($conn,"insert into `tbl_admin` (name, email, contactno, username, password, user_level_id) values ('$name', '$email', '$contactno', '$username', '$password', '1')");
	}
?>
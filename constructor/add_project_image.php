<?php

include('includes/conn.php');

$project_id = $_POST['project_id'];

$input_name = basename($_FILES['uploaded_file']['name']);
echo $input_name ;

if ($input_name == ""){

?>            
		
<?php
}else{

	$rd2 = mt_rand(1000, 9999) . "_File";
    $filename = basename($_FILES['uploaded_file']['name']);
    $ext = substr($filename, strrpos($filename, '.') + 1);

    $imagename = $rd2 . "_" . $filename;
   
   $newname = "../uploads/" . $rd2 . "_" . $filename;
   
            (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname));

                 $qry2 = "INSERT INTO tbl_project_image (project_image, project_id ) VALUES ('$imagename ', '$project_id')";
                $result2 = mysqli_query($conn, $qry2);
                if ($result2) {
                    $errmsg_arr[] = 'record was saved in the database and the file was uploaded';
                    $errflag = true;
                    if ($errflag) {
                        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                        session_write_close();
                        ?>

                     <script>
                        window.location = 'projectimagelist.php?image=<?php echo $project_id?>';
					</script>
                        <?php

                        exit();
                    }
                }
}
				?>
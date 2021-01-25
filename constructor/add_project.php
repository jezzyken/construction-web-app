<?php

include('includes/conn.php');


$id = $_POST['id'];

$project = $_POST['project'];
$projectdesc = $_POST['description'];
$location = $_POST['location'];
$area = $_POST['area'];
$estimateddate = $_POST['date'];
$cost = $_POST['cost'];
$status ="Draft";

$input_name = basename($_FILES['uploaded_file']['name']);

if ($input_name == ""){

?>            
		
<?php
}else{

	$rd2 = mt_rand(1000, 9999) . "_File";
    $filename = basename($_FILES['uploaded_file']['name']);
    $ext = substr($filename, strrpos($filename, '.') + 1);
   
   $newname = "../uploads/" . $rd2 . "_" . $filename;

   $projectimage =  $rd2 . "_" . $filename;
   
            (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname));

                $qry2 = "INSERT INTO tbl_project (projectname, projectdesc, location, surfacearea, estimateddate, cost, dateadded, constructor_id, project_image, status) VALUES ('$project', '$projectdesc', '$location', '$area', '$estimateddate', '$cost', NOW(), '$id', '$projectimage',  '$status')";

                $result2 = mysqli_query($conn, $qry2);
                if ($result2) {
                    $errmsg_arr[] = 'record was saved in the database and the file was uploaded';
                    $errflag = true;
                    if ($errflag) {
                        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                        session_write_close();
                        ?>

                     <script>
                        window.location = 'projectlist.php';
					</script>
                        <?php

                        exit();
                    }
                }
}
				?>
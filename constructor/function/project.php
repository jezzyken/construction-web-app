<?php

function insert(){
    global $conn;

    if(isset($_POST['submit'])){

        $project = $_POST['project'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        $area = $_POST['area'];
        $date = $_POST['date'];
        $cost = $_POST['cost'];
        $id = $_POST['id'];

        $query = "INSERT tbl_project  (projectname, projectdesc, location, surfacearea, estimateddate, cost, dateadded, constructor_id) VALUES ('$project', '$description', '$location', '$area', '$date', '$cost', NOW(), '$id')";
        $insert = mysqli_query($conn, $query);

        if (!$insert){
            die("Failed" . mysqli_error($conn));
        }else{
            echo '<script language="javascript">';
            echo 'alert("Sucessfully Added")';
            echo '</script>';

            echo '<script language="javascript">';
            echo 'window.location="projectlist.php"';
            echo '</script>';
        }

    }

}

function insertitem(){
    global $conn;

    if(isset($_POST['submit'])){

        $projectiteminfo = $_POST['projectiteminfo'];
        $item_id = $_POST['item_id'];
        $package_id = $_POST['package_id'];

        $query = "INSERT tbl_project_package_item  (project_package_info, project_package_id) VALUES ('$projectiteminfo', '$item_id')";
        $insert = mysqli_query($conn, $query);

        if (!$insert){
            die("Failed" . mysqli_error($conn));
        }else{
            echo '<script language="javascript">';
            echo 'alert("Sucessfully Added")';
            echo '</script>';

            // $URL="projectpackageitemlist.php";
            // echo '<script language="javascript">';
            // echo 'window.location = '$URL'';
            // echo '</script>';

            $URL="projectpackageitemlist.php?item=$item_id&package=$package_id";
            echo ("<script>location.href='$URL'</script>");
           
        }

    }

}

function insertpackage(){
    global $conn;

    if(isset($_POST['submit'])){

        $packagedesc = $_POST['packagedesc'];
        $project_package_id = $_POST['project_package_id'];
        $package_id = $_POST['package_id'];

        $query = "INSERT tbl_project_package (packagedesc, project_id) VALUES ('$packagedesc', '$package_id')";
        $insert = mysqli_query($conn, $query);

        if (!$insert){
            die("Failed" . mysqli_error($conn));
        }else{
            echo '<script language="javascript">';
            echo 'alert("Sucessfully Added")';
            echo '</script>';

            $URL="projectpackagelist.php?package=$package_id";
            echo ("<script>location.href='$URL'</script>");
           
        }

    }

}

function insertoffer(){
    global $conn;

    if(isset($_POST['submit'])){

        $projectofferinfo = $_POST['projectofferinfo'];
        $package_id = $_POST['package_id'];

        $query = "INSERT tbl_projectoffer (projectofferinfo, project_id) VALUES ('$projectofferinfo', '$package_id')";
        $insert = mysqli_query($conn, $query);

        if (!$insert){
            die("Failed" . mysqli_error($conn));
        }else{
            echo '<script language="javascript">';
            echo 'alert("Sucessfully Added")';
            echo '</script>';

            $URL="projectofferlist.php?offer=$package_id";
            echo ("<script>location.href='$URL'</script>");
           
        }

    }

}


function display($contructor_id){

    global $conn;

    $query = "SELECT * FROM tbl_project WHERE constructor_id = '$contructor_id'";

    $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){

        $project_id = $row['project_id'];
        $projectname = $row['projectname'];
        $projectdesc= $row['projectdesc'];
        $project_image= $row['project_image'];

        echo "<tr>";
        echo "<td>{$project_id}</td>";
        echo "<td><img src='../uploads/{$project_image}' height='60' width='100'></td>";
        echo "<td>{$projectname}</td> ";
        echo "<td width='300'>{$projectdesc}</td> ";

        echo "<td>";
        echo "<a href='projectimagelist.php?image={$project_id}' data-toggle='tooltip' data-placement='bottom' title='Add Image' class='btn btn-primary dim'> <i class='fa fa-file-image-o'> </i> </a> &nbsp;";
        echo "<a href='projectpackagelist.php?package={$project_id}' data-toggle='tooltip' data-placement='bottom' title='Add Package' class='btn btn-warning dim'> <i class='fa fa-dropbox'> </i> </a> &nbsp;";
        echo "<a href='projectofferlist.php?offer={$project_id}' data-toggle='tooltip' data-placement='bottom' title='Add Offer' class='btn btn-info dim'> <i class='fa fa-bars'> </i> ";
        echo "</td>";

        echo "<td>";
        echo "<a href='constituent_list.php?delete={$project_id}' class='btn btn-success dim'> <i class='fa fa-edit'> Edit</i> </a> &nbsp;";
        echo "<a href='constituent_list.php?delete={$project_id}' class='btn btn-danger dim'> <i class='fa fa-trash-o'> Delete</i> </a> &nbsp;";  
        echo "</td>";

        echo "</tr>";

        }
    }

    function image($id){

        global $conn;
    
        $query = "SELECT * FROM tbl_project_image where project_id = '$id'";
    
        $result = mysqli_query($conn, $query);
    
            while($row = mysqli_fetch_assoc($result)){
    
            $project_image_id = $row['project_image_id'];
            $project_image = $row['project_image'];
    
            echo "<tr>";
            echo "<td>{$project_image_id}</td>";
            echo "<td width='400'><img src='../uploads/{$project_image}' height='80'></td> ";
    
            echo "<td>";
            echo "<a href='#.php?delete={$project_image_id}' class='btn btn-danger dim'> <i class='fa fa-trash-o'> Delete</i> </a> &nbsp;";  
            echo "</td>";
    
            echo "</tr>";
    
            }
        }

        function package($id){

            global $conn;
        
            $query = "SELECT * FROM tbl_project_package where project_id = '$id'";
        
            $result = mysqli_query($conn, $query);
        
                while($row = mysqli_fetch_assoc($result)){
        
                $project_package_id = $row['project_package_id'];
                $project_id = $row['project_id'];
                $packagedesc = $row['packagedesc'];
        
                echo "<tr>";
                echo "<td>{$project_package_id}</td>";
                echo "<td width='700'>{$packagedesc}</td>";
        
                echo "<td>";
                echo "<a href='#.php?delete={$project_package_id}' class='btn btn-primary dim'> <i class='fa fa-star'> Not Featured</i> </a> &nbsp;";  
                echo "<a href='projectpackageitemlist.php?item={$project_package_id}&package={$project_id}' class='btn btn-warning dim'> <i class='fa fa-bars'> View Package Item</i> </a> &nbsp;";  
                echo "<a href='#.php?delete={$project_package_id}' class='btn btn-success dim'> <i class='fa fa-edit'> Edit</i> </a> &nbsp;";  
                echo "<a href='#.php?delete={$project_package_id}' class='btn btn-danger dim'> <i class='fa fa-trash-o'> Delete</i> </a> &nbsp;";  
                
                echo "</td>";
        
                echo "</tr>";
        
                }
            }

            function offer($id){

                global $conn;
            
                $query = "SELECT * FROM tbl_projectoffer where project_id = '$id'";
            
                $result = mysqli_query($conn, $query);
            
                    while($row = mysqli_fetch_assoc($result)){
            
                    $projectoffer_id = $row['projectoffer_id'];
                    $project_id = $row['project_id'];
                    $projectofferinfo = $row['projectofferinfo'];
            
                    echo "<tr>";
                    echo "<td>{$projectoffer_id}</td>";
                    echo "<td width='700'>{$projectofferinfo}</td>";
            
                    echo "<td>";
                    
                    echo "<a href='#.php?delete={$projectoffer_id}' class='btn btn-success dim'> <i class='fa fa-edit'> Edit</i> </a> &nbsp;";  
                    echo "<a href='#.php?delete={$projectoffer_id}' class='btn btn-danger dim'> <i class='fa fa-trash-o'> Delete</i> </a> &nbsp;";  
                    
                    echo "</td>";
            
                    echo "</tr>";
            
                    }
                }

            function packageitem($id){

                global $conn;
            
                $query = "SELECT * FROM tbl_project_package_item where project_package_id = '$id'";
            
                $result = mysqli_query($conn, $query);
            
                    while($row = mysqli_fetch_assoc($result)){
            
                    $package_item_id = $row['package_item_id'];
                    $project_package_info = $row['project_package_info'];
                    $project_package_id = $row['project_package_id'];
            
                    echo "<tr>";
                    echo "<td>{$project_package_id}</td>";
                    echo "<td>{$project_package_info}</td>";
            
                    echo "<td>";
                    echo "<a href='#.php?delete={$package_item_id}' class='btn btn-success dim'> <i class='fa fa-edit'> Edit</i> </a> &nbsp;";  
                    echo "<a href='#.php?delete={$package_item_id}' class='btn btn-danger dim'> <i class='fa fa-trash-o'> Delete</i> </a> &nbsp;";  
                    
                    echo "</td>";
            
                    echo "</tr>";
            
                    }
                }

                


?>
<?php

    function displaydraft(){

    global $conn;

    $query = "SELECT * FROM tbl_project WHERE status = 'Draft'";

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
        echo "<a href='publishedproject.php?project={$project_id}' class='btn btn-w-m btn-primary'> Publish ";
        echo "</td>";

        echo "</tr>";

        }
    }
    function displaypublished(){

        global $conn;
    
        $query = "SELECT * FROM tbl_project WHERE status = 'Published'";
    
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
            echo "<a href='draftproject.php?project={$project_id}' class='btn btn-w-m btn-primary'> Draft ";
            echo "</td>";
    
            echo "</tr>";
    
            }
        }

?>
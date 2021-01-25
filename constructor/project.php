
<?php include "includes/header.php" ?>
<?php include "function/project.php" ?>

<?php $constructor_id = $_SESSION['constructor_id'];?>

<?php insert(); ?>

<body>
    <div id="wrapper">

<?php include "includes/nav_menu.php" ?>

<?php include "includes/top_nav.php" ?>

    <div class="wrapper wrapper-content">
        <div class="row col-md-10 col-md-offset-1" >
        <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                         <h5>New Project</h5>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" method="POST" action="add_project.php" enctype="multipart/form-data" name="upload">
                                <div class="form-group"><label class="col-lg-3 control-label">Project Name</label>
                                    <div class="col-lg-9">
                                        <input type="hidden" placeholder="Project Name" class="form-control" name="id" value="<?php echo $constructor_id  ?>"> 
                                        <input type="text" placeholder="Project Name" class="form-control" name="project" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Description</label>
                                    <div class="col-lg-9">
                                        <textarea placeholder="Description" class="form-control" name="description" required></textarea>
                                </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Location</label>
                                    <div class="col-lg-9"><input type="text" placeholder="Location" class="form-control" name="location" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Surface Area</label>
                                    <div class="col-lg-9"><input type="text" placeholder="Surface Area" class="form-control" name="area" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Estimated Dated</label>
                                    <div class="col-lg-9"><input type="text" placeholder="Estimated Dated" class="form-control" name="date" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Cost</label>
                                    <div class="col-lg-9"><input type="text" placeholder="Cost" class="form-control" name="cost" required> 
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-lg-3 control-label">Project Image</label>
                                    <div class="col-lg-9">
                                    <input type="file" placeholder="Name" class="form-control" name="uploaded_file"> 
                                    </div>
                                </div>

                                </div>
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-10">
                                    <input type="submit" class="btn btn-primary" name="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    
            </div>
     
        <div class="row">
               
        <div class="row">
           
   
    </div>
</div>

<?php include "includes/footer.php" ?>

</html>
</body>







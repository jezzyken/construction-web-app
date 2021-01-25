
<?php include "includes/header.php" ?>
<?php include "function/project.php" ?>


<?php 

$package_id = $_GET['offer'];

?>

<?php insertoffer(); ?>

<body>
    <div id="wrapper">

<?php include "includes/nav_menu.php" ?>

<?php include "includes/top_nav.php" ?>

    <div class="wrapper wrapper-content">
        <div class="row col-md-10 col-md-offset-1" >
        <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                         <h5>New Offer</h5>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" method="POST" action="" >
                                <div class="form-group"><label class="col-lg-3 control-label">Package Offer Info </label>
                                    <div class="col-lg-9">
                                        <input type="hidden" placeholder="Project Name" class="form-control" name="package_id" value="<?php echo $package_id ?>"> 
                                        <textarea placeholder="Description" class="form-control" name="projectofferinfo" required></textarea>

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
        </div>
        <div class="row">
               
        <div class="row">
           
    </div>
</div>

<?php include "includes/footer.php" ?>

</html>
</body>







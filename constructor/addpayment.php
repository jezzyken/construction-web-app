
<?php include "includes/header.php" ?>
<?php include "function/contructor.php" ?>

<?php $constructor_id = $_SESSION['constructor_id'];




?>
<?php $payment = $_GET['payment'];?>



<body>
    <div id="wrapper">

<?php include "includes/nav_menu.php" ?>

<?php include "includes/top_nav.php" ?>

    <div class="wrapper wrapper-content">
        <div class="row col-md-10 col-md-offset-1" >
        <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                         <h5>Add Payment</h5>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" method="POST" action="add_subscription_payment.php" enctype="multipart/form-data" name="upload" >
                            <div class="form-group"><label class="col-lg-3 control-label">Reference No:</label>
                                    <div class="col-lg-9">
                                        <input type="hidden" placeholder="Project Name" class="form-control" name="id" value="<?php echo $constructor_id  ?>">
                                        <input type="hidden" placeholder="Project Name" class="form-control" name="id2" value="<?php echo $payment  ?>"> 
                                        <input type="text" placeholder="Reference No" class="form-control" name="reference" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Sender Name:</label>
                                    <div class="col-lg-9"><input type="text" placeholder="Sender Name" class="form-control" name="sender" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Amount:</label>
                                    <div class="col-lg-9"><input type="text" placeholder="Amount" class="form-control" name="amount" required> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Upload Scanned Receipt</label>
                                    <div class="col-lg-9">
                                    <input type="file" placeholder="Name" class="form-control" name="uploaded_file"> 
                                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                    <input type="hidden" name="project_id" value="1000000" />
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







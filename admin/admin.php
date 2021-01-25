
<?php include "includes/header.php" ?>
<?php include "function/admin.php" ?>

<?php insert(); ?>

<body>
    <div id="wrapper">

<?php include "includes/nav_menu.php" ?>


<?php include "includes/top_nav.php" ?>

    <div class="wrapper wrapper-content">
        <div class="row col-md-7 col-md-offset-2" >
        <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                         <h5>New User</h5>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" method="POST">
                            <div class="form-group"><label class="col-lg-3 control-label">Name</label>
                                    <div class="col-lg-9"><input type="name" placeholder="Name" class="form-control" name="name"> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Email</label>
                                    <div class="col-lg-9"><input type="email" placeholder="Email" class="form-control" name="email"> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Contact No</label>
                                    <div class="col-lg-9"><input type="text" placeholder="Contact No" class="form-control" name="contactno"> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Username</label>
                                    <div class="col-lg-9"><input type="text" placeholder="Username" class="form-control" name="username"> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-9"><input type="password" placeholder="Password" class="form-control" name="password"></div>
                                </div>
         
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-10">
                                    <input type="submit" class="btn btn-primary" name="submit">
                                    <!-- <button type = "button" id="addnew" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add</button> -->

                                        <!-- <button class="btn btn-sm btn-white" type="button" id="submit_btn">Save</button> -->
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








<?php include "includes/header.php" ?>
<?php include "function/subscription.php" ?>

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
                         <h5>Subscription</h5>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" method="POST">
                            <div class="form-group"><label class="col-lg-3 control-label">Subscription</label>
                                    <div class="col-lg-9"><input type="name" placeholder="Subscription Name" class="form-control" name="subscription"> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Description</label>
                                    <div class="col-lg-9"><input type="text" placeholder="Description" class="form-control" name="description"> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Price</label>
                                    <div class="col-lg-9"><input type="text" placeholder="Price" class="form-control" name="price"> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Subscription Type</label>
                                    <div class="col-sm-9"><select class="form-control m-b"  name="subscriptiontype">
                                        <option value="Weekly">Weekly</option>
                                        <option value="Monthly">Montly</option>
                                        <option value="Yearly">Yearly</option>
                                    </select>
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








<?php include "includes/header.php" ?>
<?php include "function/project.php" ?>

<?php $project_id = $_GET['image'] ?>

<body>

    <div id="wrapper">

    <?php include "includes/nav_menu.php" ?>

    <?php include "includes/top_nav.php" ?>

    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Project Image</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li>
                        <a href="projectlist.php">Project</a>
                        </li>
                        <li class="active">
                            <strong>Project Image</strong>
                        </li>
                    </ol>
                </div>
  
            </div>

 
            
        <div class="wrapper wrapper-content animated fadeInRight" >
            <div class="row">

            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Project Package</h5>
                        <div class="ibox-tools">
                        </div>
                    </div>
                    <div class="ibox-content" style="display: block;">
                        <div class="row">
                            <div class="col-lg-12"><h3 class=""></h3>
                                <form role="form" method="post" action="add_project_image.php" enctype="multipart/form-data" name="upload" >
                                    <div class="form-group"><label>Image</label> <input type="file" placeholder="name" class="form-control" name="uploaded_file"></div>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                    <input type="hidden" name="project_id" value="<?php echo $project_id  ?>" />
                                    <div>
                                        <input type="submit" class="btn btn-sm btn-primary pull-right m-t-n-xs" name="submit">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

                <div class="col-lg-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

		<table class = "table table-striped table-bordered table-hover dataTables-example">
			<thead>
                <tr>
                    <th>id</th>
                    <th>Project Image</th>
					<th>Action</th>
                </tr>
			</thead>
				<tbody>
                <?php image($project_id); ?>
				</tbody>
				<tfoot>
                    <tr>
                    <th>id</th>
                    <th>Project Image</th>
					<th>Action</th>
                    </tr>
                    </tfoot>
			</table>
                    </div>
                    
                    </div>
                </div>
            </div>
            </div>
           

<?php include "includes/footer.php" ?>

<script type = "text/javascript">


</body>

</html>

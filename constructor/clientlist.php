
<?php include "includes/header.php" ?>
<?php include "function/client.php" ?>

<?php $constructor_id = $_SESSION['constructor_id']; ?>

<body>

    <div id="wrapper">

    <?php include "includes/nav_menu.php" ?>

    <?php include "includes/top_nav.php" ?>

    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>My Subscription</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="active">
                            <strong>Project</strong>
                        </li>
                    </ol>
                </div>
 
            </div>
            
        <div class="wrapper wrapper-content animated fadeInRight" >
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

		<table class = "table table-striped table-bordered table-hover dataTables-example">
			<thead>
                <tr>
                    <th>id</th>
                    <th>Client Name</th>
                    <th>Message</th>
                    <th>Email</th>
					<th>Contact No</th>
                    <th>Company Name</th>
                    <th>Project Name</th>
                    
                </tr>
			</thead>
				<tbody>
                <?php display($constructor_id); ?>
				</tbody>
				<tfoot>
                    <tr>
                    <th>id</th>
                    <th>Client Name</th>
                    <th>Message</th>
                    <th>Email</th>
					<th>Contact No</th>
                    <th>Company Name</th>
                  
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

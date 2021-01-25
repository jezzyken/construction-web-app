
<?php include "includes/header.php" ?>
<?php include "function/subscription.php" ?>

<body>

    <div id="wrapper">

    <?php include "includes/nav_menu.php" ?>

    <?php include "includes/top_nav.php" ?>

    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Subscription List</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <strong>Subscription</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        <a href="subscription.php" class="btn btn-primary">Add Subscription</a>
                    </div>
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
                    <th>Subscription</th>
                    <th>Description</th>
                    <th>Subscription Type</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
			</thead>
				<tbody>
                <?php display(); ?>

				</tbody>
				<tfoot>
                    <tr>
                    <th>id</th>
                    <th>Subscription</th>
                    <th>Description</th>
                    <th>Subscription Type</th>
                    <th>Price</th>
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

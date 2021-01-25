
<?php include "includes/header.php" ?>
<?php include "function/contructor.php" ?>

<?php $payment = $_GET['payment']; ?>

<body>

    <div id="wrapper">

    <?php include "includes/nav_menu.php" ?>

    <?php include "includes/top_nav.php" ?>

    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Subscription Request List</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="subscriptionrequest.php">Subscription Reques</a>
                        </li>
                        <li class="active">
                            <strong>View Payment</strong>
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
                    <th>Reference No</th>
                    <th>Sender Name</th>
					<th>Receipt Image</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
			</thead>
				<tbody>
                <?php viewpayment($payment); ?>

				</tbody>
				<tfoot>
                    <tr>
                    <th>id</th>
                    <th>Reference No</th>
                    <th>Sender Name</th>
					<th>Receipt Image</th>
                    <th>Amount</th>
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

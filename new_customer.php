<?php include 'index.php'; ?>

<div class="content-wrapper">
	<div class="container-fluid">

			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"
				style="display: flex;">
				<h2>Add New Customer</h2>
			</div>
			<div class="form-control">
				<form action="insertcustomer.php" method="POST" enctype="multipart/form-data">





<div class="form-group row">
		<label for="supplier-name" class="col-sm-2 control-label">Name</label>
		:
		<div class="col-sm-5">
			<input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter customer name" value="" required="required">
		</div>
	</div>
	
	<div class="form-group row">
		<label for="customer-address" class="col-sm-2 control-label">Address</label>
		:
		<div class="col-sm-5">
			<input type="text" class="form-control" id="customer_address" name="customer_address" placeholder="Enter customer address" value="" required="required">
		</div>
	</div>
	<div class="form-group row">
		<label for="customer_email" class="col-sm-2 control-label">Email</label>
		:
		<div class="col-sm-5">
			<input type="text" class="form-control" id="customer_email" name="customer_email" placeholder="Enter customer email" value="" required="required">
		</div>
	</div>
	
	<div class="form-group row">
		<label for="customer-phone" class="col-sm-2 control-label">Phone</label>
		:
		<div class="col-sm-5">
			<input type="number" class="form-control" id="customer_phone" name="customer_phone" placeholder="Enter customer phone" value="">
		</div>
	</div>
	
	<div class="form-group">
<div class="col-sm-7" align="right">
			<input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary" >
</div>
	</div>


				</form>
			</div>

	</div>
</div>

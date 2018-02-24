<?php include 'index.php'; ?>

<div class="content-wrapper">
	<div class="container-fluid">

			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"
				style="display: flex;">
				<h2>Add New Supplier</h2>
			</div>
			<div class="form-control">
				<form action="insertsupplier.php" method="POST" enctype="multipart/form-data">




<div class="form-group row">
		<label for="supplier_code" class="col-sm-2 control-label">Supplier Code</label>
		:
		<div class="col-sm-5">
			<input type="text" class="form-control" id="supplier_code" name="supplier_code" placeholder="Enter supplier code" value="" required="required">
		</div>
	</div>

<div class="form-group row">
		<label for="supplier-name" class="col-sm-2 control-label">Supplier Name</label>
		:
		<div class="col-sm-5">
			<input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter supplier name" value="" required="required">
		</div>
	</div>
	
	<div class="form-group row">
		<label for="supplier-address" class="col-sm-2 control-label">Address</label>
		:
		<div class="col-sm-5">
			<input type="text" class="form-control" id="supplier_address" name="supplier_address" placeholder="Enter supplier address" value="" required="required">
		</div>
	</div>
	
	<div class="form-group row">
		<label for="supplier-phone" class="col-sm-2 control-label">Phone</label>
		:
		<div class="col-sm-5">
			<input type="number" class="form-control" id="supplier_phone" name="supplier_phone" placeholder="Enter supplier phone" value="">
		</div>
	</div>
	
	<div class="form-group">
<div class="col-sm-7" align="right">
			<input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary" onclick="savesupplier()" >
</div>
	</div>


				</form>
			</div>

	</div>
</div>

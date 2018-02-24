<?php include 'index.php'; ?>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"
			style="display: flex;">
			<h2 style="color:red;">Add New Supplier</h2>
		</div>
		<div class="form-control">
			<form action="insertpurchase.php" method="POST"
				enctype="multipart/form-data">




				<div class="form-group row">
					<label for="purchase_date" class="col-sm-2 control-label">Purchase
						Date</label> :
					<div class="col-sm-5">
						<input type="date" class="form-control" id="purchase_date"
							name="purchase_date" value="">
					</div>
				</div>

				<div class="form-group row">
					<label for="purchase_supplier" class="col-sm-2 control-label">Supplier</label>
					:
					<div class="col-sm-5">

						<select name="purchase_supplier" id="purchase_supplier"
							maxlength="30">
							<option value="">pilih supplier</option>
		<?php
$host = "127.0.0.1";
$user = "root";
$password = "123456";

$cnn = mysqli_connect($host, $user, $password);
$sql = "SELECT SUPPLIER_NAME FROM midelsys.M_SUPPLIER";
$result = mysqli_query($cnn, $sql);

if ($result == false) {
    echo "Error: " . mysqli_error($cnn);
} else {
    while ($row = mysqli_fetch_array($result)) {
        echo '<option value ="' . $row['SUPPLIER_NAME'] . '">' . $row['SUPPLIER_NAME'] . '</option>';
    }
}
?>
<option value="" onclick="addsupplier();" class="text-white bg-primary"><i class="fa fa-plus"></i> Add Aupplier</option>
							
						</select>
					</div>
				</div>

    <div class="card">
    	<div class="card-header">Add Product Detail</div>
    	
    	
    		<div class="table-container">
    			<table class="table table-responsive">
    				<thead>
						<tr>
							<th class="text-center"><label>Product Code</label></th>
							<th class="text-center"><label>Product Name</label></th>
							<th class="text-center"><label>Purchase Price</label></th>
							<th class="text-center"><label>Sale Price</label></th>
							<th class="text-center"><label>Margin</label></th>
							<th class="text-center"><label>Qty</label></th>
							<th class="text-center"><label>Photo</label></th>
							<th class="text-center"><label>Description</label></th>
						</tr>
						
				</thead>
				<tbody id="addproduct" >
					<tr>
						<td><input class="form-control" type="text" name="addproductcode"  value=""></td>
						<td><input class="form-control" type="text" name="addproductname"  value=""></td>
						<td><input class="form-control" type="number" name="addpurchaseprice"  value=""></td>
						<td><input class="form-control" type="number" name="addsaleprice"  value=""></td>
						<td><input class="form-control" type="text" name="addmargin"  value=""></td>
						<td><input class="form-control" type="number" name="addqty"  value=""></td>
						<td><input class="form-control" type="text" name="addphoto"  value=""></td>
						<td><input class="form-control" type="text" name="adddescription"  value=""></td>
					</tr>
				</tbody>
    			</table>
    			<div>
					<a class="btn btn-primary" onclick="addProduct()"> <i class="fa fa-plus"></i> Add Product
					</a>
				</div>
    		</div>

        
  
        
    	</div>
        
    
    
    </div>

				

				<div class="form-group">
					<div class="col-sm-7" align="right">
						<input id="submit" name="submit" type="submit" value="Submit"
							class="btn btn-primary" onclick="savesupplier()">
					</div>
				</div>


			</form>
		</div>

	</div>
</div>
<script type="text/javascript">
function addProduct(){
	$('#addproduct').append('<tr><td><input class="form-control" type="text" name="addproductcode"value=""></td><td><input class="form-control" type="text" name="addproductname"value=""></td><td><input class="form-control" type="number" name="addpurchaseprice"value=""></td><td><input class="form-control" type="number" name="addsaleprice"value=""></td><td><input class="form-control" type="text" name="addmargin"value=""></td><td><input class="form-control" type="number" name="addqty"value=""></td><td><input class="form-control" type="text" name="addphoto"value=""></td><td><input class="form-control" type="text" name="adddescription"value=""></td>	</tr>');
}
</script>
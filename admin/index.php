<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Website</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
</style>
</head>
<body>
<?php
    include('header.php');
?>			
			
		
		<form action="payuform.php" method="post" enctype="multipart/form-data" >
			<fieldset>
				<legend><h2>Welcome to Admin Page</h2></legend>
					<table style="width:100%">
  						<tr>
    						<th><a href="add_product.php">Add New Product</a></th>
							<th><a href="view_product.php">View Existing Products</a></th>
  						</tr>
  
					</table>
			</fieldset>
		</form>
	
</body>
</html>

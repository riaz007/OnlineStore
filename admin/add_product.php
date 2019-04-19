<?php
    include('database.php');
?>
<?php
    include('header.php');
?>

<body>
	<form action="add_product_db.php" method="post" enctype="multipart/form-data" class="form-horizontal" >
			<fieldset>
	
	
			<legend><h2>ADD DATA ON WEBSITE PAGE</h2></legend>
			<strong>Product Name:</strong>
				<input type="text" name="name" />

			
				<strong>Product Price:</strong>
				<input type="text" name="rate" />
			

		<strong>Product Image:</strong>
		
				<input type="file" name="image" />
		
			<input type="submit" name="add_data" value="Add Data" />
				
			</fieldset>
		</form>
		

</body>

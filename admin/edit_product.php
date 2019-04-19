<?php	include('database.php');
?>
<?php
    include('header.php');
?>
<?php
	if(isset($_GET['id'])){
		$edit_id= $_GET['id'];	
	}
	else{
		$edit_id= 1;
	}
		//select from program_list table--------------
		$edit_add_data= "select * from add_data where id='$edit_id'";
		$run_edit= mysqli_query($con, $edit_add_data);
		while($rows=mysqli_fetch_array($run_edit)){
		$id = $rows['id'];
		$name = $rows['name'];
		$rate = $rows['rate'];
		$image = $rows['image'];
		$path = $rows['path'];
			
			
		}
?>
			<form action="edit_product_db.php" method="post" enctype="multipart/form-data" >
			<fieldset>
			<legend>Edit Product:</legend>
			<strong>Product:</strong>
			<input name="name" value="<?php echo $name; ?>"/>
			<input name="rate" value="<?php echo $rate; ?>"/>
			<input type="file" name="image" />
			<img src="<?php echo $path; ?>" width="50px" height="50px" />
			<input type="submit" name="edit" value="Update" />
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
			</fieldset>
		</form>
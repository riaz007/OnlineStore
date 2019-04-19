<?php
	include('database.php');
?>
<?php
    include('header.php');
?>
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

		<fieldset>
			<legend><h2>MANAGE WEBSITE DATA</h2></legend>
			<table style="width:100%">
  				<tr>
					<th>Product Images</th>
					<th>Product Name</th> 
					<th>Price</th>
					<th>Edit</th>
					<th>Delete</th>
		  		</tr>
<?php	
						
	$query= "select * from add_data";
	$run_query= mysqli_query($con, $query);
	while($rows=mysqli_fetch_array($run_query)){
	    $id = $rows['id'];
		$name = $rows['name'];
		$rate= $rows['rate'];
		$image= $rows['image'];
		$path= $rows['path'];
	

?>
  				<tr>
						<td><img src="<?php echo $path; ?>" width="50px" height="50px" /></td>
						<td><?php echo $name; ?></td>
						<td><?php echo $rate; ?></td>
						<td><a href="edit_product.php?id=<?php echo $id; ?>"><img src="icons/edit.jpg" class="img-responsive"/></a></td>
						<td><a href="delete_product.php?id=<?php echo $id; ?>"><img src="icons/delete.png" class="img-responsive"/></a></td>
  			   </tr>
<?php } ?>
           </table>
      </fieldset>
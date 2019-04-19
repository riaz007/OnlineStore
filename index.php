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


<?php
	include('database.php');
?>
<?php
    include('header.php');
?>	
	
	<form action="#" method="post" enctype="multipart/form-data" >
			<fieldset>
			<legend><h2>Online Store</h2></legend>
    <table style="width:100%">
  			<tr>
    		<th>List Of Product</th>
    		<th>Product Name</th> 
    		<th>Price</th>
  			</tr>
   
	<?php
	$sel_query="select * from add_data ";
	$run_query = mysqli_query($con , $sel_query );
	while($rows= mysqli_fetch_array($run_query)){
		$name = $rows['name'];
		$rate = $rows['rate'];
		$image = $rows['image'];
		$path = $rows['path']
		
    ?>
   	<tr>
    	<td><img src="admin/<?php echo $path ?>" height="100px" width="100px" /></td>
    	<td><?php echo $name ?></td>
    	<td><?php echo $rate ?></br><input type="submit" name="" value="Buy Now" /></td>
  	</tr>
   	<?php } ?>
  	</table>
</fieldset>
</form>


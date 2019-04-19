<?php
	include("database.php");
	if(isset($_GET['id'])){
		$delete_id= $_GET['id'];
		//delete from add_data
		$delete_gallery= "delete from add_data where id='$delete_id'";
		$run_delete= mysqli_query($con, $delete_gallery );
		if($delete_gallery){
			echo"<script>alert('Data has been deleted! ')</script>";
			header('Location:view_product.php');
		}
	}

?>
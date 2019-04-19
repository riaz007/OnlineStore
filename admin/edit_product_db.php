<?php
	include('database.php');
?>
<?php
	if(isset($_POST['edit'])){
		//text data variables
			$theId = $_POST['id'];
		    $name= $_POST['name'];
			$rate= $_POST['rate'];
			$path = $_POST['path'];
			$path = $_POST['path'];
		//image names
			$image= $_FILES['image']['name'];
		//images temp names
			$temp_img = $_FILES['image']['tmp_name'];
			$new_name = $theId +1;
			echo $dst= "images/$new_name$image" ;
		//uploading images to its folder
			move_uploaded_file($temp_img,$dst);
		// update gallery table

		

			if($add_data==""){
					$update_query = "update add_data set name ='$name',rate ='$rate',image ='$image',path='$dst' where id = '$theId' ";
					$run_query= mysqli_query($con, $update_query);
					if($run_query){
						echo"<script>alert('Data Has Been Updated.')</script>";
						header('Location:view_product.php');
					}
					else{
						echo"<script>alert('Data Has Not Been Updated.')</script>";
					}
			}	
	}
?>

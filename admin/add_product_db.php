<?php
	include('database.php');
?>
<?php
		if(isset($_POST['add_data'])){
		  //text data variables
		  	$name= mysqli_real_escape_string($con ,$_POST['name']);
		  	$rate=  mysqli_real_escape_string($con ,$_POST['rate']);
		  	$image= $_FILES['image']['name'];
		  //images temp names
		  	$temp_name= $_FILES['image']['tmp_name'];
		  	$dst = "images/$image" ;
		  //uploading images to its folder
		  	move_uploaded_file($temp_name,$dst );
		
			$insert="insert into add_data set name='$name', rate='$rate' , image='$image' , path='$dst'  ";
			$query=mysqli_query($con, $insert);
			
			if($query){
				echo"<script>alert('Data Has Been Inserted.')</script>";
				header('Location:add_product.php');
			}
		}
?>
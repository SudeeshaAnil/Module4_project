<?php 
    
		include ('config.php');
		if(isset($_POST['submit'])){
		$name=mysqli_real_escape_string($con,$_REQUEST['Name']);
        $lastName=mysqli_real_escape_string($con,$_POST['LastName']);
		$email=mysqli_real_escape_string($con,$_POST['Email']);
		$address=mysqli_real_escape_string($con,$_POST['Address']);
		$phone=mysqli_real_escape_string($con,$_POST['Phone']);
		
		
		
		$sql="INSERT INTO `costumer`(`Name`,`Lname`,`Email`,`Address`,`Phone`) 
		VALUES('$name','$lastName','$email','$address','$phone')";
		
		$insert_user = mysqli_query($con, $sql);
		if($sql){

         echo"<script>alert('The flower will deliver to you')</script>";
         echo"<script>window.open('index1.php', '_self')</script>";
		}
		}

?>
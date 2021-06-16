<?php
	 
		include ( 'config.php');
		if(isset($_POST['submit'])){
		$cate=$_REQUEST['cate'];
        $Name=$_POST['Name'];
		$Desc=$_POST['Desc'];
		$Size=$_POST['Size'];
		$Price=$_POST['Price'];
		$Price_id=$_POST['P_cate'];
		$Image= $_FILES['image']['name'];
		$key=$_POST['key'];
		$Image_tmp=$_FILES['image']['tmp_name'];

		move_uploaded_file($Image_tmp, "pic/$Image");
		
		$sql="INSERT INTO `items`(`item_cat`,`Name`,`Description`,`Size`,`Price`, `image`, `price_id`, `Search_key`) 
		VALUES('$cate','$Name','$Desc','$Size','$Price','$Image','$Price_id','$key')";
		
		$insert_pro = mysqli_query($con, $sql);
		if($sql){

         echo"<script>alert('Product Has Been Inserted')</script>";
         echo"<script>window.open('admin.php', '_self')</script>";
		}
		}
		?>
		
		
	
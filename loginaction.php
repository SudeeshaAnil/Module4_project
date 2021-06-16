<!DOCTYPE html>

<html>
    
   
	<body>

		<?php
		include ('config.php');
		//ESCAPE special Chatarctor for Scurity purpose
		if(isset($_POST["submit"])){
		$Name=mysqli_real_escape_string($con,$_POST['Uname']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		
		if(!$_POST['Uname'] || !$_POST['password'])
		{
		echo("<script>
		   window.alert('YOU did not complete all requirements')
		   window.location.href='flowerLogin.php'
		   </script>");
		
		exit();
		}
		
		$select_db=mysqli_select_db($con,'flowershop') or die();
		$sql= "SELECT *FROM `adminlogin` WHERE `UserName`='$Name' AND 'password'='$password' ";
		$result= mysqli_query($con,$sql) ;
		$count= mysqli_num_rows($result);
		
		if($count>0){
		
         header("location:admin.php");
			
			}
       
			else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Wrong username password combination.Please re-enter.')
			window.location.href='flowerLogin.php'
			</SCRIPT>");
			exit();
			}
			}
			
		
		
		
		
		?>

	</body>
   </html>
		
		
		
		
		
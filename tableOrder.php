
<?php

        function order_table(){
		include ('config.php');
		 
		 $get_order="SELECT *From costumer";
		 $run_order=mysqli_query($con,$get_order);
			while($row_pro_order= mysqli_fetch_array($run_order)){
			$pro_Name=$row_pro_order["Name"];
			$pro_Lname=$row_pro_order["Lname"];
			$pro_Email=$row_pro_order["Email"];
			$pro_Address=$row_pro_order["Address"];
			$pro_Phone=$row_pro_order["Phone"];
			
			echo"
			<tr>
			<td>$pro_Name</td>
			<td>$pro_Lname</td>
			<td>$pro_Email</td>
		    <td>$pro_Address</td>
			<td>$pro_Phone</td>
			</tr>";
			}
			
			}
		 ?>
		 
		 

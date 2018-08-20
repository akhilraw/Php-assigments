<html>
<head>
	<title>Level0text</title>
</head>
<body class="center">
<h2>My Registration Form</h2>
<form target="_blank" method="post" autocomplete="on">
<?php
include 'form_connection.php';
$get=mysqli_query($conn,"SELECT * FROM agent_master");
$option='';
$option1='';
 if($get->num_rows>0){
 while($row=$get->fetch_assoc())
	 //$option .='<option value="'.$row['Agent_Name'].'">'.$row['Agent_Name'].'</option>';
	$option1 .='<option value="'.$row['Agent_No'].'">'.$row['Agent_No'].'</option>';

}
//<b><br><br>Agent Name</b><select><?php echo $option; 	
 ?>
 
<br><br><b>Policy Number</b><input type="number" name="policy_number" required>
<br><br><b>Agent Number</b><select><?php echo $option1; ?></select>
<br><br><b>Policy Date</b><input type="date" name="policy_date" required>
<br><br><b>Customer Name</b><input type="text" name="customer_name" required>
<br><br><b>Policy Amount</b><input type="number" name="policy_amount" required>
<br><br><b>Commission</b><input type="number" name="commission" required readonly>
</form>
</body>
</html>

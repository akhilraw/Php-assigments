<html>
<head>
	<title>Level_0_text</title>
</head>
<body style="text-align:center">
<h2>My Registration Form</h2>
<form action="form_submit_page.php" target="_blank" method="post" autocomplete="on">
<?php
include 'form_connection.php';
$get=mysqli_query($conn,"SELECT * FROM agent_master");
$option='';
 if($get->num_rows>0){
 while($row=$get->fetch_assoc())
	$option .='<option value="'.$row['Agent_No'].'">'.$row['Agent_No'].'</option>';

}
//<b><br><br>Agent Name</b><select><?php echo $option; 	
 ?>
 
<br><br><b>Policy Number</b><input type="number" name="policy_number" required>
<br><br><b>Agent Number</b><select name="agent_number"><?php echo $option; ?></select>
<br><br><b>Policy Date</b><input type="date" name="policy_date" required>
<br><br><b>Customer Name</b><input type="text" name="customer_name" required>
<br><br><b>Policy Amount</b><input type="number" name="policy_amount" required>
<br><br><b>Commission</b><input type="number" name="commission" readonly></input>
<br><br><input type="submit" class="button"></input><br><br>
</form>
</body>
</html>

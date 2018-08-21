<html>
<head>
<title>page after form submit</title>
</head>
<body>
	<?php
		$policy_amount_cal=$_POST["policy_amount"];
		$commission_cal=$_POST["commission"];
		if($policy_amount_cal <=10000){
			$commission_cal=($policy_amount_cal/100)*2;
			settype($commission_cal,"double");
		}
		else{
		 $commission_cal=($policy_amount_cal/100)*2.5;
		 settype($commission_cal,"double");
		}
		include 'form_connection.php';
		$sql_query="INSERT INTO policy_details(Policy_No,Agent_No,PolicyDate,CustomerName,PolicyAmount,Commission)
VALUES('".$_POST["policy_number"]."','".$_POST["agent_number"]."','".$_POST["policy_date"]."','".$_POST["customer_name"]."','$policy_amount_cal','$commission_cal')";
	
	if ($conn->query($sql_query) === TRUE){
		echo "Data submitted successfully";
} else {
    echo "<br>Error creating table: " . $conn->error;}
$conn->close();
	?>
</body>
</html>

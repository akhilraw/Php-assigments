<html>
<head>
<title>Table with Database</title>
<style>
table, th,td  {
	border:1px solid black;
}
</style>
</head>
<body>
<table style="width:100%">
	<tr>
		<th>Agent Name</th>
		<th>Policy Date</th>
		<th>Policy Amount</th>
		<th>Commission</th>
	</tr>
	
	<?php
	include 'form_connection.php';
	$join=mysqli_query($conn, "SELECT * FROM agent_master
	NATURAL JOIN policy_details;");

	$sql_join_query=mysqli_query($conn, "SELECT a.Agent_Name, DATE_FORMAT((p.PolicyDate),'%d/%m/%Y') AS PolicyDate, p.PolicyAmount, p.Commission
	FROM policy_details AS p
	LEFT JOIN agent_master AS a ON p.Agent_No=a.Agent_No
	ORDER BY Agent_Name");
	 if($sql_join_query->num_rows>0){
	 while($row=$sql_join_query->fetch_assoc()){
		 ?>
		 
	<tr>
		  
		 <td><?php echo $row["Agent_Name"]; ?></td>
		 <td><?php echo $row["PolicyDate"]; ?></td>
		 <td><?php echo $row["PolicyAmount"]; ?></td>
		 <td><?php echo $row["Commission"]; ?></td>
	</tr>
	<?php	 
	 }
	 echo "</table>";
	 }
	 else{
		 echo"0 result";
	 }
	 $conn->close();
	?>
</table>
</body>
</html>
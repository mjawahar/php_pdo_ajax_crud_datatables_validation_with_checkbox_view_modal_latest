<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM studentdetails 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["Name"] = $row["Name"];
		$output["DOB"] = $row["DOB"];
		$output["Age"] = $row["Age"];
		$output["Address"] = $row["Address"];
		$output["Email"] = $row["Email"];
		$output["Gender"] = $row["Gender"];
		$output["Subjects"] = $row["Subjects"];
		$output["vehicle"] = $row["vehicle"];
		$output["Marks"] = $row["Marks"];
	}
	echo json_encode($output);
}
?>
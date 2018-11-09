<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		
		$statement = $connection->prepare("
			INSERT INTO studentdetails (Name, DOB, Age,Address,Email,Gender,Subjects,Marks,vehicle) 
			VALUES (:Name, :DOB, :Age,:Address, :Email, :Gender, :Subjects, :Marks, :vehicle)
		");
		
		
		$sele="";
		if(isset($_POST['Subjects']) )
		{
			$sel="";
		
		foreach ($_POST['Subjects'] as $select)
{
 $sel .= $select.","; // Displaying Selected Value
}
$sele = substr($sel,0,-1);
		}
		
		$vehi="";
		if(isset($_POST['vehicle']) )
		{
			$veh="";
		
		foreach ($_POST['vehicle'] as $check)
{
 $veh .= $check.","; // Displaying Selected Value
}
$vehi = substr($veh,0,-1);
		}
		
		$Gender="";
		if(isset($_POST["Gender"]) )
		{
		$Gender	=$_POST["Gender"];
		}
		
		
		
		
		$result = $statement->execute(
			array(
				':Name'	=>	$_POST["Name"],
				':DOB'	=>	$_POST["DOB"],
				':Age'		=>	$_POST["Age"],
				':Address'	=>	$_POST["Address"],
				':Email'	=>	$_POST["Email"],
				':Gender'		=>	$Gender,
				':Subjects'	=>	$sele,
				':vehicle'	=>	$vehi,
				':Marks'	=>	$_POST["Marks"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		
		$statement = $connection->prepare(
			"UPDATE studentdetails 
			SET Name = :Name, DOB = :DOB, Age = :Age, Address = :Address, Email = :Email, Gender = :Gender, Subjects = :Subjects,vehicle= :vehicle , Marks = :Marks  
			WHERE id = :id
			"
		);
		
		
		
		
		if(isset($_POST['Subjects']) )
		{
			$sel="";
		
		foreach ($_POST['Subjects'] as $select)
{
 $sel .= $select.","; // Displaying Selected Value
}
$sele = substr($sel,0,-1);
		}
		else{
			$sele="";
		}



		if(isset($_POST["Gender"]) )
		{
		$Gender	=$_POST["Gender"];
		}
		else{
			$Gender="";
		}


		
		if(isset($_POST['vehicle']) )
		{
			$veh="";
		
		foreach ($_POST['vehicle'] as $check)
{
 $veh .= $check.","; // Displaying Selected Value
}
$vehi = substr($veh,0,-1);
		}
		else{
			$vehi="";
		}



		$result = $statement->execute(
			array(
				':Name'	=>	$_POST["Name"],
				':DOB'	=>	$_POST["DOB"],
				':Age'	=>	$_POST["Age"],
				':Address'	=>	$_POST["Address"],
				':Email'	=>	$_POST["Email"],
				':Gender'	=>	$Gender,
				':Subjects'	=>	$sele,
				':vehicle'	=>	$vehi,
				':Marks'	=>	$_POST["Marks"],
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>
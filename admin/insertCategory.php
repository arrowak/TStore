<?php
	$con = mysql_connect("localhost:3306","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
	mysql_select_db("tbeku", $con);

	 $txtCategory=$_POST["txtCategory"];
	if($txtCategory != "")
	{
	$query=mysql_query("INSERT INTO categories (cat_name) VALUES ('$txtCategory')");
	if($query){
	echo "Data inserted successfully!";
	}
	else{
	echo "An error occurred!"; 
	}
	}
	else
	{
	echo "Nothing to add!";
	}

	
	
?>
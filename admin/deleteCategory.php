<?php
	$con = mysql_connect("localhost:3306","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
	mysql_select_db("tbeku", $con);

	 $txtCategory=$_POST["txtCategory"];
	
	$query=mysql_query("DELETE FROM categories WHERE cat_name ='$txtCategory' ");

	if($query){
	echo "Data Deleted successfully!";
	}
	else{
	echo "An error occurred!"; 
	}

	
	
?>
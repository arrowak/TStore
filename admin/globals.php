<?php
class Globals{
$con = null;
	public static function connectDB()
	{
		$con = mysql_connect("localhost:3306","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		else
		{
			die('Connected!');
		}
	}
	
	
	public static function getCategories()
	{
		mysql_select_db("tbeku", $con);

	$result = mysql_query("SELECT * FROM categories");
	$i = 0;
	while($row = mysql_fetch_array($result))
	{
		echo $row['cat_name'],"|";		
	}
	
	}
	
	
	public static function deleteCategories()
	{
	mysql_select_db("tbeku", $con);

	 $txtCategory=$_POST["txtCategory"];
	
	$query=mysql_query("DELETE FROM categories WHERE cat_name ='$txtCategory' ");

	if($query){
	echo "Data Deleted successfully!";
	}
	else{
	echo "An error occurred!"; 
	}
	}
	
	
	
	public static function insertCategories()
	{	
	mysql_select_db("tbeku", $con);

	 $txtCategory=$_POST["txtCategory"];
	
	$query=mysql_query("INSERT INTO categories (cat_name) VALUES ('$txtCategory')");

	if($query){
	echo "Data inserted successfully!";
	}
	else{
	echo "An error occurred!"; 
	}
	}
}

?>
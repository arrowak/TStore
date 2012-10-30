<?php
	$mongoConnection = new Mongo(); 

$mongoDatabase = $mongoConnection->tbeku;

$mongoCollection = $mongoDatabase->Categories;

$resultSet = $mongoCollection->find();

// foreach ($resultSet as $result)
// {
	// foreach ($result['CategoryName'] as $name => $value)
	// {
		// echo "$name|";
	// }
// }

foreach ($resultSet as $name)
{
	echo $name['name']."|";
}
?>
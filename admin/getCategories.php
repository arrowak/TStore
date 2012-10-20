<?php
	$mongoConnection = new Mongo(); 

$mongoDatabase = $mongoConnection->testCategories;

$mongoCollection = $mongoDatabase->Categories;

$resultSet = $mongoCollection->find();

foreach ($resultSet as $result)
{
	foreach ($result['CategoryName'] as $name => $value)
	{
		echo "$name|";
	}
}
?>
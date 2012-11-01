<?php
		$mongoConnection = new Mongo(); 
	
		$mongoDatabase = $mongoConnection->tbeku;
	
		$mongoCollection = $mongoDatabase->Categories;
		$category = $_POST["txtCategory"];
		$query = array("name" => $category);
		try {
		$mongoCollection->ensureIndex(array('name' => 1), array("unique" => true));
	    $mongoCollection->insert($query);
	    echo "Category inserted successfully";
		}	 catch(MongoCursorException $e) {	
	  	  echo "Can't save the same category twice!\n";
		}
		
?>
<?php
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=defiphp","root","");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>

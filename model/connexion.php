<?php
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=defiphp","root","");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

	$querry= "CREATE TABLE IF NOT EXISTS `users` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
`date` VARCHAR(50) NOT NULL ,
`nom` VARCHAR(255) NOT NULL ,
`prenom` VARCHAR(50) NOT NULL ,
`login` VARCHAR(255) NOT NULL ,
`pass` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;
)";
$req=$pdo->prepare($querry);
$req->execute();
$req->closeCursor();

?>

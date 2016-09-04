<?php 
	try {
		$handler = new PDO('mysql:host=localhost;dbname=upana','root', '');
	} catch (PDOException $e) {
		echo $e->getMessage();
		die();
	}
?>
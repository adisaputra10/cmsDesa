<?php
define('adm','http://localhost/cmsdesa/admin/');

	session_start();
	session_unset();
	session_destroy();
	header('location:'.adm);	
?>
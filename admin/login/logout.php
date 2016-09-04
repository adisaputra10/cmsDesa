<?php
define('adm','http://localhost/cmsdes/admin/');

	session_start();
	session_unset();
	session_destroy();
	header('location:'.adm);	
?>
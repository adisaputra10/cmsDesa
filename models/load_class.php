<?php 

require_once('db.php');
//dependency injection->pelajari

	function autoload($class)
	{
		$namafile = $class.'.php';
		include_once $namafile;
	}
	spl_autoload_register('autoload');//menginclude semua class di folder yang sama

	try {
		//$article = new artikel_model($handler);
		$user = new user_model($db);
		$regist = new user_model($db);
		$pengumuman = new pengumuman_model($db);
		$libs = new libs_model($db);
		$potensi = new potensi_model($db);
		$berita = new berita_model($db);
		$galeri = new galeri_model($db);
		$dokumen = new dokumen_model($db);
	} catch (Exception $e) {
		echo "Error".$e->getMessage()."\n";
	}

?>
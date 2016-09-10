<?php

session_start();
date_default_timezone_set('Asia/Makassar');
require('../../models/load_class.php');
require('../../libs/path.php');
ob_start();

$model = $_GET['model'];
$method = $_GET['method'];
$model;
	if ($model = 'galeri' AND $method = 'add')
	{

		if(isset($_POST['submit']))
		{
		//$id_acak = '1'.date('Hi').mt_rand(100,999);
			$title = $_POST['title'];
			$media = "";
			if ($_FILES['media']['tmp_name'] != "")
			{
				$media = $libs->uploadImageToFolder('../../asset/galeri/', $_FILES['media']);
			}
			$deskripsi = $_POST['deskripsi'];
			$galeri->addGaleri($title,$media,$deskripsi);
			header('Location:'.adm.'galeri');
		
		}
	}


	if ($model = 'galeri' AND $method = 'edit')
	{

		if(isset($_POST['edit']))
		{
			//echo '<script>alert("Edit")</script>';
			$id_acak = '1'.date('Hi').mt_rand(100,999);
			$id = $_POST['id'];
			$title = $_POST['title'];
			
			$media = $_POST['media'];
			if ($_FILES['media']['tmp_name'] != "")
			{
				$libs->deleteFile('../../asset/galeri/',$media);
				$media = $libs->uploadFile('../../asset/galeri/', $_FILES['media'],$id_acak);
			}
			$deskripsi = $_POST['deskripsi'];
			$galeri->update_galeri($id,$title,$media,$deskripsi);
			header('Location:'.adm.'galeri');
			
		}
		
		
	}

	if ($model = 'galeri' AND $method = 'delete') 
	{
		//echo "<br><br>work here" ;
			
			$id = $_GET['id'];
			
			$data = $galeri->getGaleriById($id);
			//echo "<br><br>work here" ;
			$libs->deleteFile("../../asset/galeri/", $data['foto']);
			$galeri->delete_galeri($id);
			header("location:".adm."galeri");
	}
	



?>
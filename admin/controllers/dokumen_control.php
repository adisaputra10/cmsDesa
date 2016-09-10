<?php

session_start();
date_default_timezone_set('Asia/Makassar');
require('../../models/load_class.php');
require('../../libs/path.php');
ob_start();

$model = $_GET['model'];
$method = $_GET['method'];
$model;

if ($model = 'dokumen' AND $method = 'add')
{
	if(isset($_POST['submit']))
	{
		$title = $_POST['title'];
		//$dokumen = $_FILES['file'];
		$deskripsi = $_POST['deskripsi'];
		$file = "";
		if($_FILES['file_doc']['tmp_name'] != "")
		{
			$file = $libs->uploadDocumentToFolder('../../asset/dokumen/',$_FILES['file_doc']);
		}
		
		$dokumen->addDokumen($title,$deskripsi,$file);
		header('Location:'.adm.'dokumen');
	}
}
if ($model = 'dokumen' AND $method = 'edit')
	{

		if(isset($_POST['edit']))
		{
			//echo '<script>alert("Edit")</script>';
			$id_acak = '1'.date('Hi').mt_rand(100,999);
			$id = $_POST['id'];
			$title = $_POST['title'];
			$content = $_POST['deskripsi'];
			$doc = $_POST['file_doc'];
			if ($_FILES['file_doc']['tmp_name'] != "")
			{
				$libs->deleteFile('../../asset/dokumen/',$doc);
				$doc = $libs->uploadFile('../../asset/dokumen/', $_FILES['file_doc'],$id_acak);
			}

			$dokumen->update_dokumen($id,$title,$content,$doc);
			header('Location:'.adm.'dokumen');
			
		}
		
		
	}
if ($model = 'dokumen' AND $method = 'delete')
{
	
		//echo "<br><br>work here" ;
			
			$id = $_GET['id'];
			
			$data = $dokumen->getDokumenById($id);
			//echo "<br><br>work here" ;
			$libs->deleteFile("../../assets/berita/", $data['file']);
			$dokumen->delete_dokumen($id);
			header("location:".adm."dokumen");
	
}

?>
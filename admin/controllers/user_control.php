<?php

	session_start();
	require('../../models/load_class.php');
	require ('../../libs/path.php');
	ob_start();
		
	$method = $_GET['method'];
	$model = $_GET['model'];
	$model;
	if ($model = 'user' AND $method = 'add')
	{	//echo 'work';
			if (isset($_POST['submit'])) 
		{
			
			$user = $_POST['user'];
			$pass = $_POST['password'];
			//$password = md5($_POST['password']);
			//$repassword = md5($_POST['repassword']);
			$name = $_POST['name'];
			$passs = md5($pass);
			$level = $_POST['level'];
			//$college = $_POST['college'];
			//$repassword = $artikel->changeLink($judul);
			$getUser = $regist->getUserByUserName($user);
			//echo $getUser['user_id'];
			$count = count($getUser);
			//echo '<script> alert("'.$count.'") ';
			if(!empty($getUser['user']))//pengecekan data apabila data sudah ada
			{
				echo '<script> alert("Already exist");</script>';
				//header("location:".root."views/register");
			}
			else
			{
				if ($passs != "")
				{
				
				$adduser = $regist->add_user($user,$passs,$pass,$name,$level);
				header("location:".adm."login");
				echo 'Acount created';
				}
				else
				{

					header("location:".adm."user");
				}
								
			
			}
			header("location:".adm."user");
		}
	
	if ($model = 'user' AND $method = 'delete')
	{
			$id = $_GET['id'];
			
			$data = $user->getUserById($id);
			//echo "<br><br>work here" ;
			//$libs->deleteFile("../../assets/berita/", $data['file']);
			$user->delete_user($id);
			header("location:".adm."user");
	}
	

	}
	?>
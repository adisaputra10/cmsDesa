<?php

	session_start();
	require('../models/load_class.php');
	require ('../libs/path.php');
	ob_start();
		
	
	
		//echo 'work';
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
				
				$adduser = $regist->add_user($user,$passs,$name,$level);
				header("location:".adm."login");
				echo 'Acount created';
				}
				else
				{

					header("location:".root."views/register");
				}
								
			
			}
			header("location:".root."views/register");
		}
	
	/*if ($model = 'news' AND $method = 'delete')
	{
		$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);
		$data = $artikel->getArtikelById($id);
		$artikel->delete_artikel($id);
		//header("location:".adm."jejak?act=del");
		header("location:".adm);
	}*/

	?>
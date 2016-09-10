<?php 
 session_start();
 require('libs/path.php');
 require('../models/load_class.php');
 require('libs/routers.php');
 if (!isset($_SESSION['login'])) {
 			header('location:'.adm.'login');
 		}
 echo '
 		<!DOCTYPE html>
 			<html>
 				<head>
 					<title>Admin</title>
 				</head>
 
 				<body>
 						<a href="'.adm.'login/logout.php">Logout</a> 
 						<a href="'.adm.'pengumuman">Pengumuman</a>
 						<a href="'.adm.'potensi">Potensi</a>
 						<a href="'.adm.'berita">Berita</a>
 						<a href="'.adm.'galeri">Galeri</a>
 						<a href="'.adm.'dokumen">Dokumen</a>
 						';
 						if ($_SESSION['level'] == 'admin')
 						{
 							echo'
 							<a href="'.adm.'user">User</a>
 							';
 						}
 
 						echo'
 						
 						<hr>
 						';
 
 						switch($model)
 						{
 							case'':
 								include 'views/home.php';
 							break;
 							case 'pengumuman':
 								include 'views/pengumuman_vw.php';
 							break;
 							case 'potensi':
 								include 'views/potensi_vw.php';
 							break;
 							case 'user':
 								if($_SESSION['level'] == 'admin')
 								{
 									include 'views/user.php';
 								}
 								else
 								{
 									echo '404' ;
 								}
 							break;
 							case 'berita':
 								include 'views/berita_vw.php';
 							break;
 							case 'galeri':
 								include 'views/galeri_vw.php';
 							break;
 							case 'dokumen':
 								include 'views/dokumen_vw.php';
 							break;
 
 
 						}
 
 ?> 
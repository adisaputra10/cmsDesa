<<<<<<< HEAD
<?php 
require('libs/routers.php');
include('libs/path.php');
require('models/load_class.php');

echo'
	<html>
		<head>
			<title>CMS Desa</title>
		</head>
	
	<body>
		<a href="'.root.'">Home</a>
		<a href="'.root.'register">Register</a>
		<a href="'.root.'news">Pengumuman</a>
		<a href="'.root.'potensi">Potensi</a>
		<hr>

';
	switch($model)
	{
		default:
			include 'views/home.php';
		break;
		case '':
			include 'views/home.php';
		break;
		case 'register':
			include 'views/register.php';
		break;
		case 'login':
			include 'views/login.php';
		break;
		case 'pengumuman':
			include 'views/vw_pengumuman.php';
		break;
		case 'news':
			include 'views/news.php';
		break;
		case 'potensi':
			include 'views/potensi.php';
		break;
		case 'vw_potensi':
			include 'views/vw_potensi.php';
		break;

	}
?>
=======
<?php 
		require 'models/load_class.php';
		include 'libs/path.php'; 
		include 'libs/routers.php'; 
		include 'components/header.php';
		include 'components/navbar.php';
		//switch case
		switch ($model) {
			case '':
				include 'views/home_vw.php'; 			
				break;
			case 'about';
				include 'views/' . $model . '_vw.php';
				break;		
			case 'artikel':
				include 'views/'.$model.'.php';
					break;	
			case 'login':
				include 'admin/login/';
				break;
			default:
				include 'views/404_vw.php';
				break;
		}
		include 'components/footer.php'; ?>	
>>>>>>> 578e8e4cf68994d7698040ce501b3ddd98ad7037

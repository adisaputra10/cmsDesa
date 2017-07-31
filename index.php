<?php 
require('libs/routers.php');
include('libs/path.php');
require('models/load_class.php');
include('views/component/header.php');

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
		case 'vw_berita':
			include 'views/vw_berita.php';
		break;
		case 'berita':
			include 'views/berita.php';
		break;
		case 'galeri':
			include 'views/galeri.php';
		break;
		case 'dokumen':
			include 'views/dokumen.php';
		break;

	}
	include 'views/component/footer.php';
?>


<?php
	session_start();
	include "libs/path.php";
$url = isset($_GET['p']) ? $_GET['p'] : null;
	$url = rtrim($url, '/');
	$url = filter_var($url, FILTER_SANITIZE_URL);
	$url = explode('/', $url);

	#config dasar
	$model		= $url[0];
	$method		= !empty($url[1])?$url[1]:'';
	$parameter	= !empty($url[2])?$url[2]:null;

	include "component/header.php";
	include "component/sidebar.php";

	switch($model){ // pilih model
		default:
			include "views/404.php";
			break;

		case '':
			include "views/view_homepage.php";
			break;

		case 'tanggapan':
			include "views/view_tanggapan.php";
			break;

		case 'galeri':
			include "views/view_galeri.php";
			break;

		case 'slideshow':
			include "views/view_slideshow.php";
			break;

		case 'berita':
			include "views/view_berita.php";
			break;

		case 'artikel':
			include "views/view_artikel.php";
			break;

		case 'level':
			include "views/view_level.php";
			break;
		}

include "component/footer.php"; ?>
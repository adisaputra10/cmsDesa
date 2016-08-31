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
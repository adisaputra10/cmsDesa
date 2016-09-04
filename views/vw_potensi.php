<?php

$potensi = $potensi->getPotensiById($parameter);
foreach ($potensi as $a)
{
	echo'

		<img src="'.root.'asset/potensi/'.$a['foto'].'">
		<h1>'.$a['title'].'</h1>

	';
}
?>
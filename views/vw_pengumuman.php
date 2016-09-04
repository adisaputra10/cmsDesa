<?php

$pengumuman = $pengumuman->getPengumumanById($parameter);
foreach ($pengumuman as $a)
{
	echo'

		<img src="'.root.'asset/pengumuman/'.$a['foto'].'">
		<h1>'.$a['title'].'</h1>

	';
}
?>
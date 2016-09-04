<?php
echo '<ol>';
$potensi = $potensi->getPotensi();
foreach ($potensi as $a)
{
	echo'
	<li><a href="'.root.'vw_potensi/v/'.$a['id'].'"><h2>'.$a['title'].'</a></h2>
	<p>'.substr($a['content'],0,100).'</p>
	<img src="'.root.'asset/potensi/'.$a['foto'].'" width="150px" height="100px">
	

	';
}
?>
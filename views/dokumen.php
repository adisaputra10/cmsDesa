<?php
echo '<ol>';
$dokumen = $dokumen->getDokumen();
foreach ($dokumen as $a)
{
	echo'

	<li><h2>'.$a['title'].'</h2>
	<p>'.$a['content'].'</p>
	<a href="'.root.'asset/dokumen/'.$a['file'].'">Dokumen '.$a['title'].' </a>
	

	';
}
?>
<?php
echo '<ol>';
$pengumuman = $pengumuman->getPengumuman();
foreach ($pengumuman as $a)
{
	echo'
	<li><a href="'.root.'pengumuman/v/'.$a['id'].'"><h2>'.$a['title'].'</a></h2>
	<p>'.substr($a['content'],0,100).'</p>
	

	';
}
?>
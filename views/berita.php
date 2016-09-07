<?php
echo '<ol>';
$berita = $berita->getArticle();
foreach ($berita as $a)
{
	echo'
	<li><a href="'.root.'vw_berita/v/'.$a['id'].'"><h2>'.$a['title'].'</a></h2>
	<p>'.substr($a['content'],0,100).'</p>
	<img src="'.root.'asset/berita/'.$a['foto'].'" width="150px" height="100px">
	

	';
}
?>
<?php
echo '<ol>';
$berita = $berita->getArticle();
foreach ($berita as $a)
{
	echo '
	<li><h3>'.$a['title'].'</h3></li>
	<p>'.substr($a['content'],0,100).'</p>
	<a href="'.root.'vw_berita/v/'.$a['id'].'">continue reading</a>
	';

}
?>
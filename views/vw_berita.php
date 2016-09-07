<?php

$berita = $berita->getArticleById($parameter);
foreach ($berita as $a)
{
	echo'

		<img src="'.root.'asset/berita/'.$a['foto'].'">
		<h1>'.$a['title'].'</h1>

	';
}
?>
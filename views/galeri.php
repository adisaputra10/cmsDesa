<?php
//if(isset())
echo '<ol>';
$galeri = $galeri->getGaleri();

foreach ($galeri as $a)

{
	$ext = explode('.', $a['media']);
	
	$extension = $ext[sizeof($ext)-1];
	$extension = strtolower($extension);
	//echo $extension;
	if($extension == 'jpg' or $extension == 'png' )
	{
		//echo 'foto';
		echo'
		<img src="'.root.'asset/galeri/'.$a['media'].'">
		';
	}
	else if ($extension == 'mp4' or $extension == 'mkv')
	{
		//echo'video';
		echo'
			<video width="320" height="240" controls>
 			 <source src="'.root.'asset/galeri/'.$a['media'].'" type="video/mp4">
 			 <source src="'.root.'asset/galeri/'.$a['media'].'" type="video/ogg">
		Your browser does not support the video tag.
		</video>
		';
	}
	else
	{
		echo 'error';
	}

	
	echo'
	<li><a href="'.root.'galeri/v/'.$a['id'].'"><h2>'.$a['title'].'</a></h2>
	
	
	<p>'.substr($a['deskripsi'],0,100).'</p>
	
	';
}
?>
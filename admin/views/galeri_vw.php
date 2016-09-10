<?php
if(isset($method)):
	$aksi = adm."controllers/galeri_control.php?model=galeri&method=";

switch ($method)
{
	default:
		include('404.php');
	break;
	case'':
		echo '<ol>
		<button><a href="'.adm.'galeri/add">Tambah</a></button>';
		
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
			<li>
			<img src="'.root.'asset/galeri/'.$a['media'].'">
			<button><a href=\'javascript: hapusAlert("'.$a['id'].'");\'> Hapus </a></button>
			<button><a href="'.adm.'galeri/edit/'.$a['id'].'">Edit</a></button>

			</li>
			';
			}
			else if ($extension == 'mp4' or $extension == 'mkv')
			{
				
			echo'
			<li>
			<video width="320" height="240" controls>
 			 <source src="'.root.'asset/galeri/'.$a['media'].'" type="video/mp4">
 			 <source src="'.root.'asset/galeri/'.$a['media'].'" type="video/ogg">
			Your browser does not support the video tag.
			</video>
			<button><a href=\'javascript: hapusAlert("'.$a['id'].'");\'> Hapus </a></button>
			<button><a href="'.adm.'galeri/edit/'.$a['id'].'">Edit</a></button>

			</li>
			';
			}
			else
			{
			echo 'error';
			}

		}
	break;

	case'add':
		echo'
			<form action="'.$aksi.'add" enctype="multipart/form-data" method="POST">
			<input type="text" name="title">
			<input type="file" accept="" name="media">
			<textarea name="deskripsi"></textarea>
			<input type="submit" name="submit" value="Tambah">
		';
	break;
	case 'edit':
		$a = $galeri->getGaleriById($parameter);
		foreach ($a as $a)
		{
			echo'
			<form action="'.$aksi.'edit" enctype="multipart/form-data" method="POST">
			<input type="text" name="title" value="'.$a['title'].'">
			<input type="file" name="media" value="'.$a['media'].'">
			<textarea name="deskripsi">'.$a['deskripsi'].'</textarea>
			<input type="hidden" name="id" value="'.$a['id'].'">
			<input type="submit" name="edit" value="Edit">
			';
		}

	break;

	

}
?>
<script type="text/javascript">
	function hapusAlert(iddokumen) {
		var conBox = confirm("Anda yakin ingin menghapus data ini?");
		if (conBox) {
			location.href = "<?php echo $aksi."delete"; ?>&id=" + iddokumen;
		} else {
			return false;
		}
	}
</script>
<?php
endif;
?>
<?php
if(isset($method)):
	$aksi = adm."controllers/news_control.php?model=pengumuman&method=";

switch ($method)
{
	default:
		include('404.php');
	break;
	case'':
		echo '<ol>
		';
		if ($_SESSION['level'] == 'admin')
		{
			echo'
			<button><a href="'.adm.'pengumuman/add">Tambah</a></button>';
		}
		$pengumuman = $pengumuman->getPengumuman();
		foreach ($pengumuman as $a)
		{
			echo '
			<li><h2>'.$a['title'].'</h2>
			<p>'.substr($a['content'],0,100).'</p>
			<button><a href=\'javascript: hapusAlert("'.$a['id'].'");\'> Hapus </a></button>
			<button><a href="'.adm.'pengumuman/edit/'.$a['id'].'">Edit</a></button>

			
			';
		}
	break;

	case'add':
	if ($_SESSION['level'] == 'admin')
		{
			echo'
			<form action="'.$aksi.'add" enctype="multipart/form-data" method="POST">
			<input type="text" name="title">
			<textarea name="content"></textarea>
			<input type="file" name="foto">
			<input type="submit" name="submit" value="Tambah">
			';
		}
	else
	{
		echo'404';
	}

	break;
	case 'edit':
		$a = $pengumuman->getPengumumanById($parameter);
		foreach ($a as $a)
		{
			echo'
			<form action="'.$aksi.'edit" enctype="multipart/form-data" method="POST">
			<input type="text" name="title" value="'.$a['title'].'">
			<textarea name="content"> '.$a['content'].'</textarea>
			<input type="file" name="foto">
			<input type="hidden" name="id" value="'.$a['id'].'">
			<input type="hidden" name="foto" value="'.$a['foto'].'">
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
<?php
if(isset($method)):
	$aksi = adm."controllers/dokumen_control.php?model=dokumen&method=";

switch ($method)
{
	default:
		include('404.php');
	break;
	case'':
		echo '<ol>
		<button><a href="'.adm.'dokumen/add">Tambah</a></button>';
		$dokumen = $dokumen->getDokumen();
		foreach ($dokumen as $a)
		{
			echo '
			<a href="'.root.'asset/dokumen/'.$a['file'].'"><p>'.substr($a['content'],0,100).'</p></a>

			<button><a href=\'javascript: hapusAlert("'.$a['id'].'");\'> Hapus </a></button>
			<button><a href="'.adm.'dokumen/edit/'.$a['id'].'">Edit</a></button>

			
			';
		}
	break;
	case'add':
		echo'
		<form action="'.$aksi.'add" enctype="multipart/form-data" method="POST">
		<input type="text" name="title">
		<textarea name="deskripsi"></textarea>
		<input type="file" name="file_doc">
		<input type="submit" name="submit" value="Tambah">
		';

	break;
	case 'edit':
		$a = $dokumen->getDokumenById($parameter);
		foreach ($a as $a)
		{
			echo'
			<form action="'.$aksi.'edit" enctype="multipart/form-data" method="POST">
			<input type="text" name="title" value="'.$a['title'].'">
			<textarea name="deskripsi"> '.$a['content'].'</textarea>
			<input type="file" name="foto">
			<input type="hidden" name="id" value="'.$a['id'].'">
			<input type="hidden" name="file_doc" value="'.$a['file'].'">
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
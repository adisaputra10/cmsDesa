<?php
if(isset($method)):
	$aksi = adm."controllers/user_control.php?model=user&method=";

switch ($method)
{
	default:
		include('404.php');
	break;
	case'':
		echo '<ol>
		<button><a href="'.adm.'user/add">Tambah</a></button>';
		$user = $user->getUser();
		foreach ($user as $a)
		{
			echo '
			<li><h2>'.$a['name'].'</h2>
			<button><a href=\'javascript: hapusAlert("'.$a['id'].'");\'> Hapus </a></button>
			<button><a href="'.adm.'user/edit/'.$a['name'].'">Edit</a></button>

			
			';
		}
	break;
	case'add':
		echo'
		<form action="'.$aksi.'add" enctype="multipart/form-data" method="POST">
		<input type="text" name="user">
		<input type="password" name="password">
		<input type="submit" name="submit" value="Tambah">
		';

	break;
	case 'edit':
		$a = $user->getUserByUserName($parameter);
		foreach ($a as $a)
		{
			echo'
			<form action="'.$aksi.'edit" enctype="multipart/form-data" method="POST">
			<input type="text" name="title" value="'.$a['name'].'">
			<input type="text" name="title" value="'.$a['password'].'">
			<input type="file" name="foto">
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
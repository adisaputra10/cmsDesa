<?php
if(isset($method)):
	$aksi = adm."controllers/user_control.php?model=user&method=";

switch ($method)
{
	default:
		include('404.php');
	break;
	case'':
		
			echo '


			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Nama</th>
								  <th>User</th>
								  <th>Password</th>
								  <th>Level</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  ';
						$no = 1;
						$user = $user->getUser();
						foreach ($user as $a)
						{
						
						  echo'
							<tr>
								<td>'.$no++.'</td>
								
								<td class="center">'.$a['name'].'</td>
								<td class="center">'.$a['user'].'</td>
								<td class="center">'.$a['hitman'].'</td>
								<td class="center">'.$a['level'].'</td>
								
								<td class="center">
									<a class="btn btn-info" href="'.adm.'user/edit/'.$a['id'].'"> Edit
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href=\'javascript: hapusAlert("'.$a['id'].'");\'> Hapus
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							';
						}
							echo'
							
						  </tbody>
					  </table>
					  		<a href="'.adm.'user/add"><button type="submit" class="btn btn-success">Tambah User</button></a> 
											          
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


			';
		
	break;
	case'add':
		echo'
		<form action="'.$aksi.'add" enctype="multipart/form-data" method="POST">
		<input type="text" name="name">
		<input type="user" name="user">
		<select name="level">
			<option value="admin">Admin</admin>
			<option value="user">User</admin>
		</select>

		<input type="password" name="password">
		<input type="submit" name="submit" value="Tambah">
		';

	break;
	case 'edit':
		$a = $user->getUserById($parameter);
		
			echo'
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Berita</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="'.$aksi.'edit" enctype="multipart/form-data" method="POST">
						
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Judul Berita </label>
							  <div class="controls">
							  	<input type="text" name="user" value="'.$a['user'].'" class="span6 typeahead" id="typeahead">
							   </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Judul Berita </label>
							  <div class="controls">
							  	<input type="text" name="name" value="'.$a['name'].'" class="span6 typeahead" id="typeahead">
							   </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Judul Berita </label>
							  <div class="controls">
							  	<input type="text" name="user" value="'.$a['hitman'].'" class="span6 typeahead" id="typeahead">
							   </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">File Foto Berita</label>
							  <div class="controls">

								<input class="input-file uniform_on" id="fileInput" type="file" name="foto">
								<input type="hidden" name="id" value="'.$a['id'].'">
								
							  </div>
							   <div class="controls">
								
								
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Isi Berita</label>
							  <div class="controls">
							  	<textarea name="content" class="cleditor" id="textarea2" rows="3">'.$a['content'].'</textarea>
							  </div>
							</div>
							<div class="form-actions">
							
							  <input type="submit" name="edit" value="Edit" id="submit" class="btn btn-primary">
							  
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			';
		

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
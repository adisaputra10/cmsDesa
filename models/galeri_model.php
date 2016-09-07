<?php 

	/**
	* ini adalah kumpulan fungsi untuk artiker
	*/
	class galeri_model
	{
		private $db;
		function __construct($database)
		{
			$this->db=$database;
		}

		public function getGaleri()
		{
			$query = $this->db->prepare("SELECT * FROM galeri");

			try {
				$query->execute();
				
			} catch (PDOException $e) {
				die();				
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getGaleriById($id)
		{
			$query = $this->db->prepare("SELECT * FROM `galeri` WHERE id=:id");
			$query->bindParam(':id', $id);
			try {
							$query->execute();
						} catch (PDOException $e) {
							die($e->getMessage());
						}			
						return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addGaleri($title,$medi,$deskripsi)
		{
			$query = $this->db->prepare("INSERT INTO `galeri` (title,media,deskripsi) VALUES ('$title','$media','$deskripsi')");

			
			try
			{
				$query->execute();
			}
			catch(PDOException $e)
			{
				die($e->getMessage());
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		public function delete_galeri($id)
		{
			$query = $this->db->prepare("DELETE FROM `galeri` WHERE `id` = ?");
			
			$query->bindValue(1, $id);
			
			try
			{
				$query->execute();
			}
			catch(PDOException $e)
			{
				die($e->getMessage());
			}
			
		}
		public function update_galeri($id,$title,$media,$deskripsi)
		{
			$query = $this->db->prepare("UPDATE `galeri` SET `title` = :title,
								`media` = :media,
								`deskripsi`	= :deskripsi,
								`id`   =:id");
			$query->bindParam(':id',$id,PDO::PARAM_INT);
			$query->bindParam(':title',$title,PDO::PARAM_STR);
			$query->bindParam(':media',$media,PDO::PARAM_STR);
			$query->bindParam(':deskripsi',$deskripsi,PDO::PARAM_STR);

			try
			{
				$query->execute();
				return true;
			}
			catch(PDOException $e)
			{
				return die($e->getMessage());
			}



		}

	}

?>
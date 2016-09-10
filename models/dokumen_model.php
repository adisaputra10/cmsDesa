<?php 

	/**
	* ini adalah kumpulan fungsi untuk artiker
	*/
	class dokumen_model
	{
		private $db;
		function __construct($database)
		{
			$this->db=$database;
		}

		public function getDokumen()
		{
			$query = $this->db->prepare("SELECT * FROM `dokumen`");

			try {
				$query->execute();
				
			} catch (PDOException $e) {
				die();				
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getDokumenById($id)
		{
			$query = $this->db->prepare("SELECT * FROM `dokumen` WHERE id=:id");
			$query->bindParam(':id', $id);
			try {
							$query->execute();
						} catch (PDOException $e) {
							die($e->getMessage());
						}			
						return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addDokumen($title,$deskripsi,$file)
		{
			$query = $this->db->prepare("INSERT INTO `dokumen` (title,content,file) VALUES ('$title','$deskripsi','$file')");

			
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
		public function delete_dokumen($id)
		{
			$query = $this->db->prepare("DELETE FROM `dokumen` WHERE `id` = ?");
			
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
		public function update_dokumen($id,$title,$content,$doc)
		{
			$query = $this->db->prepare("UPDATE `dokumen` SET `title` = :title,
								`content` = :content,
								`file`	= :file,
								`id`   =:id");
			$query->bindParam(':id',$id,PDO::PARAM_INT);
			$query->bindParam(':title',$title,PDO::PARAM_STR);
			$query->bindParam(':content',$content,PDO::PARAM_STR);
			$query->bindParam(':file',$doc,PDO::PARAM_STR);

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
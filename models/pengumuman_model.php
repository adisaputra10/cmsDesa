<?php 

	/**
	* ini adalah kumpulan fungsi untuk artiker
	*/
	class pengumuman_model
	{
		private $db;
		function __construct($database)
		{
			$this->db=$database;
		}

		public function getPengumuman()
		{
			$query = $this->db->prepare("SELECT * FROM `pengumuman`");

			try {
				$query->execute();
				
			} catch (PDOException $e) {
				die();				
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getPengumumanById($id)
		{
			$query = $this->db->prepare("SELECT * FROM `pengumuman` WHERE id=:id");
			$query->bindParam(':id', $id);
			try {
							$query->execute();
						} catch (PDOException $e) {
							die($e->getMessage());
						}			
						return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addPengumuman($id,$title,$content,$foto)
		{
			$query = $this->db->prepare("INSERT INTO `pengumuman` (id,title,content,foto) VALUES ($id,'$title','$content','$foto')");

			
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
		public function delete_pengumuman($id)
		{
			$query = $this->db->prepare("DELETE FROM `pengumuman` WHERE `id` = ?");
			
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
		public function update_pengumuman($id,$title,$content,$foto)
		{
			$query = $this->db->prepare("UPDATE `pengumuman` SET `title` = :title,
								`content` = :content,
								`foto`	= :foto 
								WHERE `id`   =:id");
			$query->bindParam(':id',$id,PDO::PARAM_INT);
			$query->bindParam(':title',$title,PDO::PARAM_STR);
			$query->bindParam(':content',$content,PDO::PARAM_STR);
			$query->bindParam(':foto',$foto,PDO::PARAM_STR);

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
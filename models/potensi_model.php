<?php 

	/**
	* ini adalah kumpulan fungsi untuk artiker
	*/
	class potensi_model
	{
		private $db;
		function __construct($database)
		{
			$this->db=$database;
		}

		public function getPotensi()
		{
			$query = $this->db->prepare("SELECT * FROM potensi");

			try {
				$query->execute();
				
			} catch (PDOException $e) {
				die();				
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getPotensiById($id)
		{
			$query = $this->db->prepare("SELECT * FROM `potensi` WHERE id=:id");
			$query->bindParam(':id', $id);
			try {
							$query->execute();
						} catch (PDOException $e) {
							die($e->getMessage());
						}			
						return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		public function add_potensi($title,$content,$foto)
		{
			$query = $this->db->prepare("INSERT INTO `potensi` (title,content,foto) VALUES ('$title','$content','$foto')");

			
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
		public function delete_potensi($id)
		{
			$query = $this->db->prepare("DELETE FROM `potensi` WHERE `id` = ?");
			
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
		public function update_potensi($id,$title,$content,$foto)
		{
			$query = $this->db->prepare("UPDATE `potensi` SET `title` = :title,
								`content` = :content,
								`foto`	= :foto,
								`id`   =:id");
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
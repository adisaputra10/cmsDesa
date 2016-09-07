<?php 

	/**
	* ini adalah kumpulan fungsi untuk artiker
	*/
	class artikel_model
	{
		private $db;
		function __construct($database)
		{
			$this->db=$database;
		}

		public function getArticle()
		{
			$query = $this->db->prepare("SELECT * FROM artikel");

			try {
				$query->execute();
				
			} catch (PDOException $e) {
				die();				
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getArticleById($id)
		{
			$query = $this->db->prepare("SELECT * FROM `artikel` WHERE `id`=:id");
			$query->bindParam(':id', $id);
			try {
							$query->execute();
						} catch (PDOException $e) {
							die($e->getMessage());
						}			
						return $query->fetchAll(PDO::FETCH_ASSOC);// berfungsi menampilkan data dari database dengan bentuk array asosiatif, bedanya dengan fetch array, array memakan banyak memori karena array nya di buat jadi index array nomornya dulu baru inde array sesuai nama tabelnya. fetch biasa dipakai diperintah select dan add


		}
		public function addArtikel($title ,$content,$foto)
		{
			$query = $this->db->prepare("INSERT INTO `artikel` (title,content,foto) VALUES (?,?,?) ");
			$query->bindValue(1, $title);
			$query->bindValue(2, $content);
			$query->bindValue(3, $foto);


			try {
				$query->execute();
				
			} catch (PDOException $e) {
				die();				
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		public function update_artikel($id,$title,$content,$foto)
		{
			$query = $this->db->prepare("UPDATE `artikel` SET `title` = :title,
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
		public function delete_artikel($id)
		{
			$query = $this->db->prepare("DELETE FROM `artikel` WHERE `id` = ?");
			
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
	}

?>
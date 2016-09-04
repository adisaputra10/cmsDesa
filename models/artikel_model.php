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
			$query = $this->db->prepare("SELECT * FROM artikel WHERE artikel_id=:id");
			$query->bindParam(':id', $id);
			try {
							$query->execute();
						} catch (PDOException $e) {
							die($e->getMessage());
						}			
						return $query->fetchAll(PDO::FETCH_ASSOC);
		}
	}

?>
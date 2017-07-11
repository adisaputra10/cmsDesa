<?php

class user_model
{
	private $db;
	function __construct($database)
	{
		$this->db=$database;
	}
	function getUser()
	{
		$query = $this->db->prepare("SELECT * FROM  `user` ");
		try
		{
			$query->execute();
		}
		catch(PDOException $e)
		{
			die();
		}
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	function getUserByUserName($username)
	{
		$query = $this->db->prepare(" SELECT * FROM `user` WHERE `user` = ?");
		$query->bindValue(1, $username);
		try
		{
			$query->execute();
			return $query->fetch();
		}
		catch(PDOException $e)
		{
			$e->getMessage();
		}
	}
	function getUserById($id)
	{
		$query = $this->db->prepare(" SELECT * FROM `user` WHERE `id` = ?");
		$query->bindValue(1, $id);
		try
		{
			$query->execute();
			return $query->fetch();
		}
		catch(PDOException $e)
		{
			$e->getMessage();
		}
	}
	public function authUser($username) {
			$query = $this->db->prepare("SELECT * FROM `user` WHERE `user` = ?");
			$query->bindValue(1, $username);

			try {
				$query->execute();
				return $query->rowCount();
			} catch(PDOException $e) {
				$e->getMessage();
			}
		}

		public function setSession($username, $session) {
			$query = $this->db->prepare("UPDATE `user` SET `id_session` = ? WHERE `user` = ?");

			$query->bindValue(1, $session);
		 	$query->bindValue(2, $username);

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}
		public function add_user($user,$password,$hitman,$name,$level)
		{
			echo 'still work';
			$query = $this->db->prepare("INSERT INTO `user` (`user`,`password`,`hitman`,`name`,`level`) VALUES (?,?,?,?,?)");

			$query->bindValue(1, $user);
			$query->bindValue(2, $password);
			$query->bindValue(3, $hitman);
			$query->bindValue(4, $name);
			$query->bindValue(5, $level);
		
			try
			{
				$query->execute();
			}
			catch(PDOexception $e)
			{
				echo $e;
			}
				
		}
		public function delete_user($id)
		{
			$query = $this->db->prepare("DELETE FROM `user` WHERE `id` = ?");
			
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
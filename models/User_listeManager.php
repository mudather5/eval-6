<?php
declare(strict_types = 1);

/**
 *  Class to manage database operations for Account objects
 */
class User_listeManager
{

	private $_db;

	/**
	 * Constructor
	 *
	 * @param PDO $db
	 */
	public function __construct(PDO $db) 
	{
		$this->setDb($db);
	}

	/**
	 * Set the value of $_db
	 *
	 * @param PDO $db
	 * return self
	 */
	public function setDb(PDO $db) 
	{
		$this->_db = $db;
		return $this;
	}

	/**
	 * Get the value of $_db
	 *
	 * @return $_db
	 */
	public function getDb()
	{
		return $this->_db;
	}

	/**
	 * Add book to the database
	 *
	 * @param  $book
	 */
	public function add(User_liste $user_liste)
	{
		$query = $this->getDb()->prepare('INSERT INTO users_listes(last_name, first_name, code, nb_book, lists_books) VALUES (:last_name, :first_name, :code, :nb_book, :lists_books)');
		$query->bindValue("last_name", $user_liste->getLast_name(), PDO::PARAM_STR);
		$query->bindValue("first_name", $user_liste->getFirst_name(), PDO::PARAM_STR);
		$query->bindValue("code", $user_liste->getCode(), PDO::PARAM_STR);
		$query->bindValue("nb_book", $user_liste->getNb_book(), PDO::PARAM_INT);
		$query->bindValue("lists_books", $user_liste->getLists_books(), PDO::PARAM_INT);

		
		$query->execute();
	}

	/**
	 * Get all books
	 *
	 */
	public function getusers()
	{

		$arrayOfUsers = [];
		$query = $this->getDb()->query('SELECT * FROM `users_listes`');

		// We retrieve a table containing several associative arrays
		$dataUsers = $query->fetchAll(PDO::FETCH_ASSOC);

		// At each loop turn, we get an associative array for a single account
		foreach ($dataUsers as $dataUser) 
		{
			// We create a new object thanks to the associative array, which is stored in $ arrayOfAccounts
			$arrayOfUsers[] = new User_liste($dataUser);
		}
		return $arrayOfUsers;
	}


	/**
	 * Get an user by id
	 *
	 * @param integer $id
	 * @return User
	 */
	public function getUser($id)
	{
		$id = (int) $id;
		$query = $this->getDb()->prepare('SELECT * FROM `users_listes` WHERE id = :id');
		$query->bindValue("id", $id, PDO::PARAM_INT);
		$query->execute();

		$dataUser = $query->fetch(PDO::FETCH_ASSOC);
		return new User_liste($dataUser);
	}
	/**
	 * Get an last_name, first_name by id
	 *
	 * @return last_name, first_name
	 */
	public function update(User_liste $user_liste)
	{
		$query = $this->getDb()->prepare('UPDATE users_listes SET last_name = :last_name, first_name = :first_name WHERE id = :id');
		$query->bindValue(":last_name", $user_liste->getLast_name(), PDO::PARAM_STR);
		$query->bindValue(":first_name", $user_liste->getFirst_name(), PDO::PARAM_STR);
		$query->bindValue(":id", $user_liste->getId(), PDO::PARAM_INT);
		$query->execute();
	}

	//function delete from the date base

	public function delete(int $id)
	{
		$query = $this->getDb()->prepare('DELETE FROM users_listes WHERE id = :id');
		$query->bindValue("id", $id, PDO::PARAM_INT);		
		$query->execute();
	}

	
}

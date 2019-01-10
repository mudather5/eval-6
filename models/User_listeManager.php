<?php
declare(strict_types = 1);

/**
 *  Classe permettant de gérer les opérations en base de données concernant les objets Account
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
		$query = $this->getDb()->prepare('INSERT INTO users_listes(last_name, first_name, code, nb_book) VALUES (:last_name, :first_name, :code, :nb_book)');
		$query->bindValue("last_name", $user_liste->getLast_name(), PDO::PARAM_STR);
		$query->bindValue("first_name", $user_liste->getFirst_name(), PDO::PARAM_STR);
		$query->bindValue("code", $user_liste->getCode(), PDO::PARAM_STR);
		$query->bindValue("nb_book", $user_liste->getNb_book(), PDO::PARAM_INT);
		
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

		// On récupère un tableau contenant plusieurs tableaux associatifs
		$dataUsers = $query->fetchAll(PDO::FETCH_ASSOC);

		// A chaque tour de boucle, on récupère un tableau associatif concernant un seul compte
		foreach ($dataUsers as $dataUser) 
		{
			// On crée un nouvel objet grâce au tableau associatif, qu'on stocke dans $arrayOfAccounts
			$arrayOfUsers[] = new User_liste($dataUser);
		}
		return $arrayOfUsers;
	}


	/**
	 * Get an account by id
	 *
	 * @param integer $id
	 * @return User
	 */
	public function getUser(int $id)
	{
		$id = (int) $id;
		$query = $this->getDb()->prepare('SELECT * FROM `users_listes` WHERE id = :id');
		$query->bindValue("id", $id, PDO::PARAM_INT);
		$query->execute();

		$dataUser = $query->fetch(PDO::FETCH_ASSOC);
		return new User_liste($dataUser);
	}


	public function update(User_liste $user_liste)
	{
		$query = $this->getDb()->prepare('UPDATE users_listes SET last_name = :last_name AND first_name = :first_name WHERE id = :id');
		$query->bindValue("last_name", $user_liste->getLast_name(), PDO::PARAM_STR);
		$query->bindValue("first_name", $user_liste->getFirst_name(), PDO::PARAM_STR);
		$query->bindValue("id", $user_liste->getId(), PDO::PARAM_INT);
		$query->execute();
	}

	
}

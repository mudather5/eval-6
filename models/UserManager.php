<?php
declare(strict_types = 1);

/**
 *  Classe permettant de gérer les opérations en base de données concernant les objets Account
 */
class UserManager
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
	 * Add account to the database
	 *
	 * @param Account $account
	 */
	public function add(User $user)
	{
		// var_dump($user);die;
		$query = $this->getDb()->prepare('INSERT INTO users(first_name, email, password, password_1) VALUES (:first_name, :email, :password, :password_1)');
		$query->bindValue("first_name", $user->getFirst_name(), PDO::PARAM_STR);
		$query->bindValue("email", $user->getEmail(), PDO::PARAM_STR);
		$query->bindValue("password", $user->getPassword(), PDO::PARAM_STR);
		$query->bindValue("password_1", $user->getPassword_1(), PDO::PARAM_STR);
		$query->execute();
	}

	/**
	 * Get all accounts
	 *
	 */
	public function getUsers()
	{

		$arrayOfUsers = [];
		$query = $this->getDb()->query('SELECT * FROM users');

		// On récupère un tableau contenant plusieurs tableaux associatifs
		$dataUsers = $query->fetchAll(PDO::FETCH_ASSOC);

		// A chaque tour de boucle, on récupère un tableau associatif concernant un seul compte
		foreach ($dataUsers as $dataUser) 
		{
			// On crée un nouvel objet grâce au tableau associatif, qu'on stocke dans $arrayOfAccounts
			$arrayOfUsers[] = new User($dataUser);
		}
		return $arrayOfUsers;
	}

	public function checkIfExist($email)
    {
        $query = $this->getDb()->prepare('SELECT * FROM users WHERE email = :email');
        $query->bindValue('email', $email, PDO::PARAM_STR);
        $query->execute();

        // If there is an entry with this name, it means that there is

        if ($query->rowCount() > 0)
        {
            return true;
        }
        
        // if no  it means that there is not
        return false;
    }


	/**
	 * Get an account by id
	 *
	 * @param integer $id
	 * @return Account
	 */
	public function getUser(int $id)
	{
		$id = (int) $id;
		$query = $this->getDb()->prepare('SELECT * FROM users WHERE id = :id');
		$query->bindValue("id", $id, PDO::PARAM_INT);
		$query->execute();

		$dataUser = $query->fetch(PDO::FETCH_ASSOC);
		return new User($dataUser);
	}


}

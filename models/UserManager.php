<?php
declare(strict_types = 1);

/**
 *  Class to manage database operations for Account objects
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
	 * return $db
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
	 * @param Account $user
	 */
	public function add(User $user)
	{
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

		// We retrieve a table containing several associative arrays
		$dataUsers = $query->fetchAll(PDO::FETCH_ASSOC);

		// At each loop turn, we get an associative array for a single account
		foreach ($dataUsers as $dataUser) 
		{
			// We create a new object thanks to the associative array, which is stored in $ arrayOfAccounts
			$arrayOfUsers[] = new User($dataUser);
		}
		return $arrayOfUsers;
	}

	public function checkIfExist($email)
    {
        $query = $this->getDb()->prepare('SELECT * FROM users WHERE email = :email');
        $query->bindValue('email', $email, PDO::PARAM_STR);
        $query->execute();

        // If there is an entry with this name, 

        if ($query->rowCount() > 0)
        {
            return true;
        }
        
        // if not  return false
        return false;
    }


	/**
	 * Get an account by id
	 *
	 * @param integer $id
	 * @return Account
	 */
	public function getUser($id)
	{
		$id = (int) $id;
		$query = $this->getDb()->prepare('SELECT * FROM users WHERE id = :id');
		$query->bindValue("id", $id, PDO::PARAM_INT);
		$query->execute();

		$dataUser = $query->fetch(PDO::FETCH_ASSOC);
		return new User($dataUser);
	}


}

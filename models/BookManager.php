<?php
declare(strict_types = 1);

/**
 *  Classe permettant de gérer les opérations en base de données concernant les objets Account
 */
class BookManager
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
	public function add(Book $book)
	{
		$query = $this->getDb()->prepare('INSERT INTO books(title, author, date, catogry, summary, image) VALUES (:title, :author, :date, :catogry, :summary, :image)');
		$query->bindValue(":title", $book->getTitle(), PDO::PARAM_STR);
		$query->bindValue(":author", $book->getAuthor(), PDO::PARAM_STR);
		$query->bindValue(":date", $book->getDate(), PDO::PARAM_STR);
		$query->bindValue(":catogry", $book->getCatogry(), PDO::PARAM_STR);
		$query->bindValue(":summary", $book->getSummary(), PDO::PARAM_STR);
		$query->bindValue(":image", $book->getImage(), PDO::PARAM_STR);

		$query->execute();
	}

	/**
	 * Get all books
	 *
	 */
	public function getBooks()
	{

		$arrayOfBooks = [];
		$query = $this->getDb()->query('SELECT * FROM `books`');

		// On récupère un tableau contenant plusieurs tableaux associatifs
		$dataBooks = $query->fetchAll(PDO::FETCH_ASSOC);

		// A chaque tour de boucle, on récupère un tableau associatif concernant un seul compte
		foreach ($dataBooks as $dataBook) 
		{
			// On crée un nouvel objet grâce au tableau associatif, qu'on stocke dans $arrayOfAccounts
			$arrayOfBooks[] = new Book($dataBook);
		}
		return $arrayOfBooks;
	}

	public function checkIfExist($title)
    {
        $query = $this->getDb()->prepare('SELECT * FROM `books` WHERE titles = :title');
        $query->bindValue('title', $title, PDO::PARAM_STR);
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
	 * @return Book
	 */
	public function getBook(int $id)
	{
		$id = (int) $id;
		$query = $this->getDb()->prepare('SELECT * FROM `books` WHERE id = :id');
		$query->bindValue("id", $id, PDO::PARAM_INT);
		$query->execute();

		$dataBook = $query->fetch(PDO::FETCH_ASSOC);
		return new Book($dataBook);
	}

	
}

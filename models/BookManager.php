<?php
declare(strict_types = 1);

/**
 *  Class to manage database operations for Account objects
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
		$query = $this->getDb()->prepare('INSERT INTO books(title, author, date, category, summary, image) VALUES (:title, :author, :date, :category, :summary, :image)');
		$query->bindValue(":title", $book->getTitle(), PDO::PARAM_STR);
		$query->bindValue(":author", $book->getAuthor(), PDO::PARAM_STR);
		$query->bindValue(":date", $book->getDate(), PDO::PARAM_STR);
		$query->bindValue(":category", $book->getCategory(), PDO::PARAM_STR);
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

		//  We retrieve a table containing several associative arrays
		$dataBooks = $query->fetchAll(PDO::FETCH_ASSOC);

		//  At each loop turn, we get an associative array for a single account
		foreach ($dataBooks as $dataBook) 
		{
			// We create a new object thanks to the associative array, which is stored in $ arrayOfAccounts
			$arrayOfBooks[] = new Book($dataBook);
		}
		return $arrayOfBooks;
	}

	public function checkIfExist($title)
    {
        $query = $this->getDb()->prepare('SELECT * FROM `books` WHERE titles = :title');
        $query->bindValue('title', $title, PDO::PARAM_STR);
        $query->execute();

        //check if this title exist

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
	public function getBook($id)
	{
		$id = (int) $id;
		$query = $this->getDb()->prepare('SELECT * FROM `books` WHERE id = :id');
		$query->bindValue("id", $id, PDO::PARAM_INT);
		$query->execute();

		$dataBook = $query->fetch(PDO::FETCH_ASSOC);
		return new Book($dataBook);
	}


	public function update(Book $book)
	{
		$query = $this->getDb()->prepare('UPDATE books SET title = :title, author = :author, date = :date, category = :category, summary = :summary, image = :image  WHERE id = :id');
		$query->bindValue(":title", $book->getTitle(), PDO::PARAM_STR);
		$query->bindValue(":author", $book->getAuthor(), PDO::PARAM_STR);
		$query->bindValue(":date", $book->getDate(), PDO::PARAM_STR);
		$query->bindValue(":category", $book->getCategory(), PDO::PARAM_STR);
		$query->bindValue(":summary", $book->getSummary(), PDO::PARAM_STR);
		$query->bindValue(":image", $book->getImage(), PDO::PARAM_STR);
		$query->bindValue(":id", $book->getId(), PDO::PARAM_INT);
		$query->execute();
	}

	public function edit(Book $book)
	{
		$query = $this->getDb()->prepare('UPDATE books SET user_id = :user_id, availibility = :availibility WHERE id = :id');
		$query->bindValue(":user_id", $book->getUser_id(), PDO::PARAM_INT);
		$query->bindValue("availibility", $book->getAvailability(), PDO::PARAM_INT);
		$query->bindValue(":id", $book->getId(), PDO::PARAM_INT);

		$query->execute();
	}

	public function delete(int $id)
	{
		$query = $this->getDb()->prepare('DELETE FROM books WHERE id = :id');
		$query->bindValue("id", $id, PDO::PARAM_INT);		
		$query->execute();
	}


	
}

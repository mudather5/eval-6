
<?php
// we registre our autoload.
function chargerClasse($classname)
{
    if(file_exists('../models/'. $classname.'.php')){
        require '../models/'. $classname.'.php';
    }
    else {
        require '../entities/' . $classname . '.php';
    }
}
spl_autoload_register('chargerClasse');
session_start();
if(isset($_SESSION['email'])) {

} else {
	header('location: index.php');
}

// Connection to the database
$db = Database::DB();
//We instantiate our manager
$manager = new BookManager($db);

//if the  creation form is submitted  and is not empty
if(isset($_POST['edit'])){
    
    if(isset($_GET['index']) && !empty($_GET['index'])){
        
        $id = (int) $_GET['index'];
     //We instantiate a $ book object
        $book = new Book([
            'id' => $id,
            'title' => $_POST['title'],
            'author' => $_POST['author'],
            'date' => $_POST['date'],
            'category' => $_POST['category'],
            'summary' => $_POST['summary'],
            'image' => $_POST['image']
        ]);

        
        $manager->update($book);
        header('Location: home.php');


	}
	else {
		$error_message = "Can you choose a book";
	}
    
}

// get one book

$book = $manager->getBook($_GET["index"]);
//Finally, we include the view

include "../views/edit_book.php";


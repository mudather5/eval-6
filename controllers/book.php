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

//if the book creation form is submitted
if (isset($_POST['add'])) {
    
    if($manager->checkIfExist($_POST['title']) === true)
    
    {
        var_dump($_POST['title']);
            
        array_push($errors, "The title is already exist !");

        }else{
            //We instantiate a $ book object
            $book = new Book([
                'title' => $_POST['title'],
                'author' => $_POST['author'],
                'date' => $_POST['date'],
                'category' => $_POST['category'],
                'summary' => $_POST['summary'],
                'image' => $_POST['image']
            ]);
            $manager->add($book);// get the addbook method form BooksManager.php and adde it in the data base    
             header('Location: home.php');

        }
}

//We get all the books in the BDD books is an array containing all books objects in DB
$books = $manager->getBooks();

//Finally, we include the view

include "../views/bookView.php";


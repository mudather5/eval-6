<?php
// On enregistre notre autoload.
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

// Connexion à la base de données
$db = Database::DB();

$manager = new BookManager($db);
if (isset($_POST['add'])) {
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $date= htmlspecialchars($_POST['date']);
    $catogry= htmlspecialchars($_POST['catogry']);
    $summary= htmlspecialchars($_POST['summary']);

    if($manager->checkIfExist($_POST['title']) === true)

        {
            
        array_push($errors, "The title is already exist !");

        }else{

            $book = new Book([
                'title' => $_POST['title'],
                'author' => $_POST['author'],
                'date' => $_POST['date'],
                'catogry' => $_POST['catogry'],
                'summary' => $_POST['summary'],
                'image' => '../assets/img/book.jpg'
            ]);
            
            $manager->add($book);// get the addaccount method form AccountManager.php and adde it in the data base    
            
        }
}



$books = $manager->getBooks();

include "../views/bookView.php";


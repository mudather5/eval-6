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
$manager_users = new User_listeManager($db);

//if the  creation form is submitted  and is not empty

if (isset($_POST['borrow']) || isset($_POST['return'])) {
    if(isset($_POST['user_id']) && !empty($_POST['user_id']) && isset($_POST['idbook'])  && !empty($_POST['idbook'])){

        $user_id = (int) $_POST['user_id'];
        $idbook = (int) $_POST['idbook'];

		$book = $manager->getBook($idbook);

        if(isset($_POST['borrow'])){
			$book->borrow($user_id);
		}
		else{
			$book->return();
		}


		$manager->edit($book);
	}
	else {
		$error_message = "Veuillez saisir une somme à ajouter/débiter";
	}

}    
//If it is the deletion form that is submitted
if(isset($_POST['delete'])){

	if(!empty($_GET['index'])){

		$id = (int) $_GET['index'];
//delete from the data base
        $manager->delete($id);
        header('Location: home.php');
	}
	else {
		$error_message = "";
	}

    
}
 
//We get  the book in the BDD book is an array containing the one book objects in DB

$book = $manager->getBook($_GET['index']);
// get all users
$users = $manager_users->getUsers();


//Finally, we include the view

include "../views/bookdetails.php";


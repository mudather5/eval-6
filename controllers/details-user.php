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
$manager = new User_listeManager($db);
 
if(isset($_POST['delete'])){
    //If the field is full, and is not empty
	if(!empty($_GET['index'])){

		$id = (int) $_GET['index'];
        //delete from the data base
        $manager->delete($id);
        header('Location: homeuser.php');
	}
	else {
		$error_message = "you have an errors";
	}

    
}

// get one user
$user = $manager->getUser($_GET['index']);
//Finally, we include the view
include "../views/details-user.php";


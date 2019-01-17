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

$id = $_GET['index'];
//if the  creation form is submitted 
if(isset($_POST['edit'])){

    if(!empty($_GET['index'])){
        
        $id = (int) $_GET['index'];
             //We instantiate a $ user_liste object
        $user = new User_liste([
            'id' => $id,
            'last_name' => $_POST['last_name'],
            'first_name' => $_POST['first_name']
        ]);
    //update in the data base
        $manager->update($user);
        header('Location: homeuser.php');

	}
	else {
		$error_message = "Veuillez choisir un compte à supprimer";
	}
    
}
// get one user

$user = $manager->getUser($_GET['index']);
//Finally, we include the view

include "../views/edit-user.php";


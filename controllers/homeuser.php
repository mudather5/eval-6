

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

// Connexion to data base
$db = Database::DB();

//We instantiate our manager
$manager = new User_listeManager($db);

// get all the users
$users = $manager->getUsers();

//Finally, we include the view
include "../views/homeuser.php";


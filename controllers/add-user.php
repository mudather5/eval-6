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

//if the user creation form is submitted
if (isset($_POST['add'])) {

            $user = new User_liste([
                'last_name' => $_POST['last_name'],
                'first_name' => $_POST['first_name'],
                'nb_book' => $_POST['nb_book']   
            ]);
            
        $manager->add($user);// get the adduser method form AccountManager.php and adde it in the data base               
        header('Location: homeuser.php');

}
//We get all the users in the BDD users is an array containing all users objects in DB
$users = $manager->getUsers();

//Finally, we include the view

include "../views/add-user.php";


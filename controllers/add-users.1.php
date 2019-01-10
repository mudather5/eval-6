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

$manager = new User_listeManager($db);
if (isset($_POST['add'])) {
    $last_name = htmlspecialchars($_POST['last_name']);
    $first_name = htmlspecialchars($_POST['first_name']);
    $nb_book= htmlspecialchars($_POST['nb_book']);
    
            $user = new User_liste([
                'last_name' => $_POST['last_name'],
                'first_name' => $_POST['first_name'],
                'nb_book' => $_POST['nb_book']
                
            ]);
            
        $manager->add($user);// get the addaccount method form AccountManager.php and adde it in the data base               
        
}


elseif(isset($_POST['edit'])){

    $last_name = htmlspecialchars($_POST['last_name']);
    $first_name = htmlspecialchars($_POST['first_name']);

    $user = new User_liste([
        'last_name' => $_POST['last_name'],
        'first_name' => $_POST['first_name'],
        // 'nb_book' => $_POST['nb_book']
        
    ]);


    $manager->update($user);
    
}


$users = $manager->getUsers();

include "../views/details-user.php";


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


$manager = new UserManager($db);


if(isset($_POST['submit'])){
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $password= htmlspecialchars($_POST['password']);
    $user = new User();

     if($count == 1)
     {

       echo "it's already taken";
     }else{

          $manager->add($user);

     }
    // $user1 = $user->check($_POST, array(
    //     $user = new User([
        
    //     'firstnam' => $firstnam,
    //         'required' => true,
    //         'min' => 2
    //     'email' => $email,
    //         'required' => true
    //     ),
    //     'password' => $password
    //         'required' => true,
    //         'min' => 3
    //     )

    // ]);


    $users = $manager->getUsers();
}



include "../views/indexView.php";


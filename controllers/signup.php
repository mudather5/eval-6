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
session_start();


// Connexion à la base de données
$db = Database::DB();

//We instantiate our manager
$manager = new UserManager($db);

$first_name = "";
$password = "";
$errors = array();

if(isset($_POST['submit'])){
    $first_name = htmlspecialchars($_POST['first_name']);
    $email = htmlspecialchars($_POST['email']);
    $password= htmlspecialchars($_POST['password']);
    $password_1= htmlspecialchars($_POST['password_1']);
    // $count = $manager->get($email);
    
    if(empty($first_name)){
        array_push($errors, "First_name is required");
    }

    if(empty($email)){
        array_push($errors, "Email is required");
    }

    if(empty($first_name)){
        array_push($errors, "First_name is required");
    }

    if(empty($password)){
        array_push($errors, "Password is required");
    }

    if($password != $password_1){

         array_push($errors, "The two password do not match");

    }
    
    if($manager->checkIfExist($_POST['email']) === true)

        {
            array_push($errors, "The user is already exist !");

        }

        else
        {
            //We instantiate a $ user object
            $user = new User([
                'first_name' => $_POST['first_name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'password_1' => $_POST['password_1']

            ]);   
 
            
            $manager->add($user);// get the addaccount method form AccountManager.php and adde it in the data base
            header("location:index.php");

        }

     
}

//get all users
 $users = $manager->getUsers();


//Finally, we include the view
include "../views/signupView.php";

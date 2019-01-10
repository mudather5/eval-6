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


// $manager = new UserManager($db);
$funObj = new SigninManager($db);  


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $signin = $funObj->Signin($email, $password);
    if ($signin) {
        // Registration Success
        header("location:home.php");
    } else {
        // Registration Failed
        echo "<script>alert('Emailid / Password Not Match')</script>";
    }
}


include "../views/indexView.php";


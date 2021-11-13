<?php
require_once "common.php";


    $errors = [];

    $username = $_POST["username"]; 
    if ( strlen($username) == 0 ) {
        $errors[] = "Name cannot be empty nor blank.";
    }

    $password = $_POST["password"]; 
    if ( strlen($password) == 0 ) {
        $errors[] = "Password cannot be empty nor blank.";
    }

    $confirm_password = $_POST["confirmPassword"];


    if ($password != $confirm_password){
        $errors[] = "The passwords are different.";
    }


    if ( strlen($username) != 0 ){
        $dao = new UserDAO();
        $user = $dao->get($username);

        if ($user){
            $errors[] = "Username is already taken.";
        }
    }

    if ( count($errors) > 0 ) {

        $_SESSION["errorspw"] = $errors;

        $_SESSION["register_fail"] = $username;
        header("Location: loginpage.php"); 
        return;
    }
    

$hashed = password_hash($password, PASSWORD_DEFAULT);
$new_user = new User($username, $hashed);
$dao = new UserDAO();

$status = $dao->create($new_user);


if ( $status ) {

   // $_SESSION["login_page"] = $username;
    $_SESSION["username"] = $username;
    header("Location: ../profiling.php");
    exit();
}
else
{
    $_SESSION["register_fail"]= $username;
    $errors[] = "Error in registering user.";
    header("Location: loginpage.php");
    return;
}

?>


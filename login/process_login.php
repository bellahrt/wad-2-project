<?php
    require_once 'common.php';


    $errors = [];


    $username = $_POST["username"];
    $password = $_POST["password"];

    $dao = new UserDAO();
    $user = $dao->get( $username );

    if ($user)
    {

        $hashed_password = $user->getPasswordHash();

        $status = password_verify( $password, $hashed_password); 

        if ($status)
        { 
            $_SESSION["username"] = $username;
            header("Location: ../index.php");
            return;
        }
        else
        {

            $errors [] = "Invalid password.";
            $_SESSION['errors'] = $errors;
            $_SESSION["login_page"] = $username;
            header("Location: loginpage.php");
            return;

        }

    } else
    {
        $errors [] = "Username does not exist in the database.";
        $_SESSION['errors'] = $errors;
        $_SESSION["login_page"] = $username;
        header("Location: loginpage.php");
        return;
            
    }

?>

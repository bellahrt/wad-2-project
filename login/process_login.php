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
            header("Location: ../index.html");
            return;
        }
        else
        {

            $errors [] = "Invalid password.";
            $_SESSION['errors'] = $errors;
            $_SESSION["login_page"] = $username;
            header("Location: final.php");
            return;

        }

    } else
    {
        $errors [] = "Username does not exist in the database.";
        $_SESSION['errors'] = $errors;
        $_SESSION["login_page"] = $username;
        header("Location: final.php");
        return;
            
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <input type="hidden" id="username" value = "<?=$username?>">
        <script>
            var username = document.getElementById("username").value
            localStorage.setItem("username", username);

        </script>
</body>
</html>
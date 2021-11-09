<?php

session_start();

    if (isset ($_SESSION["username"])){
        // echo "<h3> Thank you ". $_SESSION["username"] . " for visiting </h3>";
        unset($_SESSION["username"]);
        unset($_SESSION["errors"]);
        unset($_SESSION["errorspw"]);
        $_SESSION = [];
        header("Location: loginpage.php");
        // echo "<a href=login.php> Home </a>";
    }
    else
    {
        header("Location: loginpage.php");
        $_SESSION = [];
        return;
    }

?>
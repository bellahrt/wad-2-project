<?php

    require_once 'common.php';
    require_once 'model/getcalenderDAO.php';

    $username = $_POST['username'];
    echo$username;
    $foodName = $_POST['foodName'];
    echo$foodName;
    $starts = $_POST['timing'];
    echo$starts;
    $calendarDAO = new getcalenderDAO();
    if ($calendarDAO->deleteFoodRecord($username, $foodName,$starts)){
        echo "Food Record Deleted";
        header("Location: ../profile.html");

    } else{
        header("Location: ../profile.html");
    }




?>
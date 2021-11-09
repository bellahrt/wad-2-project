<?php
    require_once 'common.php';
    require_once 'model/getcalenderDAO.php';


// $username = $_POST["username"];
    // $password = $_POST["password"];

//$username = "j";

$username = $_GET["username"];
$weight = $_GET["weight"] ;
$height = $_GET["height"] ;
$age = $_GET["age"] ;
$sex = $_GET["sex"] ;
$recoCal = $_GET["recoCal"] ;
$recoCarbs = $_GET["recoCarbs"] ;
$recoProt = $_GET["recoProt"] ;




$new_user = new userprofile($username, $weight,$height, $age, $sex, $recoCal,$recoCarbs, $recoProt);
$dao = new getcalenderDAO();

$status = $dao->updateUserProfile($new_user);

echo json_encode($status);



?>


<?php
    require_once 'common.php';
    require_once 'model/getcalenderDAO.php';


// $username = $_POST["username"];
    // $password = $_POST["password"];

//$username = "j";

$username = $_GET["username"];
$foodName = $_GET["title"] ;
$nutritionCount = $_GET["descriptions"] ;
$starts = $_GET["starts"];
$ends = $_GET["ends"];
$className = $_GET["className"];
$icon = $_GET["icon"];


$new_user = new calender($username, $foodName, $nutritionCount, $starts, $ends, $className, $icon);
$dao = new getcalenderDAO();

$status = $dao->create($new_user);

echo json_encode($status);



?>


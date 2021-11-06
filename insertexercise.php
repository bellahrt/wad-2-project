<?php
    require_once 'common.php';
    require_once 'model/getcalenderDAO.php';


// $username = $_POST["username"];
    // $password = $_POST["password"];

//$username = "j";

$username = $_GET["username"];
$caloriesBurned = $_GET["caloriesBurned"] ;



$new_user = new exercise($username, $caloriesBurned);
$dao = new getcalenderDAO();

$status = $dao->insertExercise($new_user);

echo json_encode($status);



?>


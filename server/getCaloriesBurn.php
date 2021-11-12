<?php
    require_once 'common.php';
    require_once 'model/getcalenderDAO.php';


   // $username = $_POST["username"];
    // $password = $_POST["password"];

//$username = "j";


//Declare the array
// $flowers = ["Rose","Lili","Jasmine","Hibiscus","Tulip","Sun Flower","Daffodil","Daisy"];
// //Print the structure of the array with data type
// //echo($flowers);
// echo json_encode($flowers);
    

$username = $_POST["username"];
$date = $_POST["date"];
$year = $_POST["year"]; 



$data = [];
$dao = new getcalenderDAO();
$user = $dao->getCaloriesBurn( $username,$date, $year  );

foreach($user as $index){
    array_push($data,$index->getExercise());
}
echo json_encode($data);



?>


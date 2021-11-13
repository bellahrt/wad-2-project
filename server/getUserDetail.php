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




$data = [];
$dao = new getcalenderDAO();
$user = $dao->getUserDetail( $username );

foreach($user as $index){
    array_push($data,$index->getDetails());
}
echo json_encode($data);



?>


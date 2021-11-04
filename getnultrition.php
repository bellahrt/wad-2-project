<?php
    require_once 'common.php';
    require_once 'model/getcalenderDAO.php';


    $username = $_POST["username"];
    $date = $_POST["date"];
    $year = $_POST["year"]; 

    
    
$data = [];
    $dao = new getcalenderDAO();
    $user = $dao->getnul( $username,$date, $year  );
    
    foreach($user as $index){
        array_push($data,$index->getUsername());
    }
    echo json_encode($data);


?>
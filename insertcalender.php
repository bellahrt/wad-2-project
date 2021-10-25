<?php
    require_once 'common.php';
    require_once 'model/getcalenderDAO.php';


    // $username = $_POST["username"];
    // $password = $_POST["password"];

$username = "j";

   $title = "cake" ;
   $descriptions = "calories:200" ;
   $starts = 2021-10-07;
   $ends = 2021-10-07;
    $className = 'fc-bg-default';
     $icon = "circle";

$new_user = new calender($username, $title, $descriptions, $starts, $ends, $className, $icon);
$dao = new getcalenderDAO();

$status = $dao->create($new_user);

echo json_encode($status);



?>


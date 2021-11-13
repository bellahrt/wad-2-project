
<?php






class getcalenderDAO {
       
    function get( $username ) {
        
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        
        $sql = "SELECT username, foodName, nutritionCount, starts, ends, className, icon  FROM  usercalender WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
            
        $user = array();
        if ( $stmt->execute() ) {
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
               // $user = new calender($row["username"], $row["title"],$row["descriptions"],$row["starts"],$row["ends"],$row["className"],$row["icon"]);
                 array_push($user,new calender($row["username"], $row["foodName"],$row["nutritionCount"],$row["starts"],$row["ends"],$row["className"],$row["icon"]));
            }
        }
        else {
            $connMgr->handleError( $stmt, $sql );
        }
        

        $stmt = null;
        $conn = null;        
        
        return $user;
    }



    function create($user) {
        $result = true;

        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "INSERT INTO usercalender (username, foodName, nutritionCount, starts, ends, className, icon) VALUES (:username, :title, :descriptions, :starts, :ends, :className, :icon)";
        $stmt = $conn->prepare($sql);
        
        $username = $user->getname();
        $title = $user->gettitle();
        $descriptions = $user->getdescriptions();
        $starts = $user->getstarts();
        $ends = $user->getends();
        $className = $user->getclassName();
        $icon = $user->geticon();

        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":title", $title, PDO::PARAM_STR);
        $stmt->bindParam(":descriptions", $descriptions, PDO::PARAM_STR);
        $stmt->bindParam(":starts", $starts, PDO::PARAM_STR);
        $stmt->bindParam(":ends", $ends, PDO::PARAM_STR);
        $stmt->bindParam(":className", $className, PDO::PARAM_STR);
        $stmt->bindParam(":icon", $icon, PDO::PARAM_STR);
        

        $result = $stmt->execute();
        if (! $result ){ 
            $parameters = [ "user" => $user, ];
            $connMgr->handleError( $stmt, $sql, $parameters );
        }
        
        $stmt = null;
        $conn = null;        
        
        return $result;
    }

    function getnul($username, $date, $year ) {
        $result = true;

        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = " select username, foodName, nutritionCount, starts, ends, className, icon from usercalender where month(starts)= :date AND year(starts) = :year AND username = :username;";
        $stmt = $conn->prepare($sql);
 
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":date", $date, PDO::PARAM_INT);
        $stmt->bindParam(":year", $year, PDO::PARAM_INT);
    
        $nul = array();
        if ( $stmt->execute() ) {
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
              
                 array_push($nul,new calender($row["username"], $row["foodName"],$row["nutritionCount"],$row["starts"],$row["ends"],$row["className"],$row["icon"]));
            }
        }
        else {
            $connMgr->handleError( $stmt, $sql );
        }
        

        $stmt = null;
        $conn = null;        
        
        return $nul;
    }





    function getCaloriesBurn($username, $date, $year ) {
        $result = true;

        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = " select username, caloriesBurned, exercise, starts from exercise where month(starts)= :date AND year(starts) = :year AND username = :username;";
        $stmt = $conn->prepare($sql);
 
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":date", $date, PDO::PARAM_INT);
        $stmt->bindParam(":year", $year, PDO::PARAM_INT);
    
        $nul = array();
        if ( $stmt->execute() ) {
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
              
                 array_push($nul,new exercise ($row["username"], $row["caloriesBurned"], $row["exercise"],$row["starts"]));
            }
        }
        else {
            $connMgr->handleError( $stmt, $sql );
        }
        

        $stmt = null;
        $conn = null;        
        
        return $nul;
    }




    function getUserDetail ($username ) {
        $result = true;

        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = " select username, weight , height  ,age ,sex  ,recommendedCalories  ,recommendedCarbs ,	recommendedProtein from useraccount where  username = :username;";
        $stmt = $conn->prepare($sql);
 
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    
    
        $nul = array();
        if ( $stmt->execute() ) {
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
              
                 array_push($nul,new userprofile ($row["username"], $row["weight"], $row["height"], $row["age"],$row["sex"] , $row["recommendedCalories"],$row["recommendedCarbs"],$row["recommendedProtein"]  ));
            }
        }
        else {
            $connMgr->handleError( $stmt, $sql );
        }
        

        $stmt = null;
        $conn = null;        
        
        return $nul;
    }






    function insertExercise($user) {
        $result = true;

        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "INSERT INTO exercise (username, caloriesBurned, exercise, starts) VALUES (:username, :caloriesBurned, :exercise, :starts)";
        $stmt = $conn->prepare($sql);
        
        $username = $user->getname();
        $caloriesBurned = $user->caloriesBurned();   
        $exercise = $user->exercise();  
        $starts = $user->starts();  

        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":caloriesBurned", $caloriesBurned, PDO::PARAM_INT);   
        $stmt->bindParam(":exercise", $exercise, PDO::PARAM_STR); 
        $stmt->bindParam(":starts", $starts, PDO::PARAM_STR); 
        
        $result = $stmt->execute();
        if (! $result ){ 
            $parameters = [ "user" => $user, ];
            $connMgr->handleError( $stmt, $sql, $parameters );
        }
        
        $stmt = null;
        $conn = null;        
        
        return $result;
    }
    
    // private $username;
    // private $weight;
    // private $height;
    // private $age;
    // private $sex;
    // private $recoCal;
    // private $recoCarbs;
    // private $recoProt;

    function updateUserProfile($user) {
        //$result = true;

        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        $sql = "UPDATE useraccount SET  weight = :weights , height = :height ,age = :age ,sex = :sex ,recommendedCalories = :recoCal ,recommendedCarbs = :recoCarbs ,	recommendedProtein = :recoProt  WHERE username = :username";
        //$sql = "INSERT INTO exercise (username, caloriesBurned) VALUES (:username, :caloriesBurned)";
        
        $stmt = $conn->prepare($sql);
        
        $username = $user->getname();
        $weight = $user->weight(); 
        $height = $user->height();
        $age = $user->age(); 
        $sex = $user->sex();
        $recoCal = $user->recoCal(); 
        $recoCarbs = $user->recoCarbs();
        $recoProt = $user->recoProt();   

        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":weights", $weight, PDO::PARAM_INT);   
        $stmt->bindParam(":height", $height, PDO::PARAM_STR);
        $stmt->bindParam(":age", $age, PDO::PARAM_INT); 
        $stmt->bindParam(":sex", $sex, PDO::PARAM_STR);
        $stmt->bindParam(":recoCal", $recoCal, PDO::PARAM_INT); 
        $stmt->bindParam(":recoCarbs", $recoCarbs, PDO::PARAM_INT);
        $stmt->bindParam(":recoProt", $recoProt, PDO::PARAM_INT); 
        
        $result = $stmt->execute();
        // if (! $result ){ 
        //     $parameters = [ "user" => $user, ];
        //     $connMgr->handleError( $stmt, $sql, $parameters );
        // }
        
        $stmt = null;
        $conn = null;        
        
        return $result;
    }



    function deleteFoodRecord($username,$foodName,$starts) {
        //$result = true;

        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        $sql = "delete from usercalender WHERE username = :username AND foodName = :foodName AND starts = :starts ";
        
        $stmt = $conn->prepare($sql);

 

        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":foodName", $foodName, PDO::PARAM_STR);   
        $stmt->bindParam(":starts", $starts, PDO::PARAM_STR);
 
        print_r($stmt);
        $result = $stmt->execute();

        
        $stmt = null;
        $conn = null;        
        
        return $result;
    }

   


}


    
//     function create($user) {
//         $result = true;


//         $connMgr = new ConnectionManager();
//         $conn = $connMgr->connect();
        

//         $sql = "INSERT INTO useraccount (username, password_hash) VALUES (:username, :passwordHash)";
//         $stmt = $conn->prepare($sql);
        
//         $username = $user->getUsername();
//         $passwordHash = $user->getPasswordHash();

//         $stmt->bindParam(":username", $username, PDO::PARAM_STR);
//         $stmt->bindParam(":passwordHash", $passwordHash, PDO::PARAM_STR);
        

//         $result = $stmt->execute();
//         if (! $result ){ 
//             $parameters = [ "user" => $user, ];
//             $connMgr->handleError( $stmt, $sql, $parameters );
//         }
        

//         $stmt = null;
//         $conn = null;        
        
//         return $result;
//     }


//     function update($user) {
//         $result = true;


//         $connMgr = new ConnectionManager();
//         $conn = $connMgr->connect();
        

//         $sql = "UPDATE useraccount SET password_hash = :passwordHash  WHERE username = :username";
//         $stmt = $conn->prepare($sql);
        
//         $username = $user->getUsername();
//         $passwordHash = $user->getPasswordHash();

//         $stmt->bindParam(":username", $username, PDO::PARAM_STR);
//         $stmt->bindParam(":passwordHash", $passwordHash, PDO::PARAM_STR);
        

//         $result = $stmt->execute();
//         if (! $result ){ 
//             $parameters = [ "user" => $user, ];
//             $connMgr->handleError( $stmt, $sql, $parameters );
//         }
        

//         $stmt = null;
//         $conn = null;        
        
//         return $result;
//     }
// }
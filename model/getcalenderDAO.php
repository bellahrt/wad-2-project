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
        $stmt->bindParam("title", $title, PDO::PARAM_STR);
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
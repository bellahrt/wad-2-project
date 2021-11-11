
 <?php
//session_start();
if (!isset ($_SESSION["username"])){
  header("Location: loginpage.php");
  //return;

  $username = $_SESSION["username"];
}



?> 

<!-- 
        <input type="hidden" id="username" value = "">
     
        <script>
            var username = document.getElementById("username").value

            localStorage.setItem("username", username);

            alert(username);
            console.log(username)
           // console.log("yk")
            

        </script> -->


<?php




class UserDAO {
       
    function get( $username ) {
        
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        

        $sql = "SELECT username, password_hash  FROM useraccount WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
            
        $user = null;
        if ( $stmt->execute() ) {
            
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                $user = new User($row["username"], $row["password_hash"]);
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
        

        $sql = "INSERT INTO useraccount (username, password_hash) VALUES (:username, :passwordHash)";
        $stmt = $conn->prepare($sql);
        
        $username = $user->getUsername();
        $passwordHash = $user->getPasswordHash();

        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":passwordHash", $passwordHash, PDO::PARAM_STR);
        

        $result = $stmt->execute();
        if (! $result ){ 
            $parameters = [ "user" => $user, ];
            $connMgr->handleError( $stmt, $sql, $parameters );
        }
        

        $stmt = null;
        $conn = null;        
        
        return $result;
    }


    function update($user) {
        $result = true;


        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        

        $sql = "UPDATE useraccount SET password_hash = :passwordHash  WHERE username = :username";
        $stmt = $conn->prepare($sql);
        
        $username = $user->getUsername();
        $passwordHash = $user->getPasswordHash();

        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":passwordHash", $passwordHash, PDO::PARAM_STR);
        

        $result = $stmt->execute();
        if (! $result ){ 
            $parameters = [ "user" => $user, ];
            $connMgr->handleError( $stmt, $sql, $parameters );
        }
        

        $stmt = null;
        $conn = null;        
        
        return $result;
    }
}
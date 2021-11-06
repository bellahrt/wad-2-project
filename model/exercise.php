<?php

class exercise {
    private $username;
    private $caloriesBurned;
   


    function __construct($username, $caloriesBurned) {
    
        $this->username = $username;
        $this->caloriesBurned = $caloriesBurned;
   
    }

    public function getUsername(){
    
      $obj = ["username"=>$this->username, "caloriesBurned"=>$this->caloriesBurned];
        return $obj;
    }

    public function getname(){
        return $this->username;
    }

    public function caloriesBurned(){
        return $this->caloriesBurned;
    }

}

?>
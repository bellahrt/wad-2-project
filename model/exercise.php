<?php

class exercise {
    private $username;
    private $caloriesBurned;
    private $exercise;
    private $starts;
   


    function __construct($username, $caloriesBurned, $exercise,$starts ) {
    
        $this->username = $username;
        $this->caloriesBurned = $caloriesBurned;
        $this->exercise = $exercise;
        $this->starts = $starts;
   
    }

    public function getExercise(){
    
      $obj = ["username"=>$this->username, "caloriesBurned"=>$this->caloriesBurned , "exercise"=>$this->exercise , "starts"=>$this->starts];
        return $obj;
    }

    public function getname(){
        return $this->username;
    }

    public function caloriesBurned(){
        return $this->caloriesBurned;
    }

    public function exercise(){
        return $this->exercise;
    }

    public function starts(){
        return $this->starts;
    }

}

?>
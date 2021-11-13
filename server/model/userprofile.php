<?php

class userprofile {
    private $username;
    private $weight;
    private $height;
    private $age;
    private $sex;
    private $recoCal;
    private $recoCarbs;
    private $recoProt;
   


    function __construct($username, $weight, $height, $age, $sex, $recoCal, $recoCarbs, $recoProt) {
    
        $this->username = $username;
        $this->weight = $weight;
        $this->height = $height;
        $this->age = $age;
        $this->sex = $sex;
        $this->recoCal = $recoCal;
        $this->recoCarbs = $recoCarbs;
        $this->recoProt = $recoProt;
       
       
    }
    public function getDetails(){
    
        $obj = ["username"=>$this->username, "weight"=>$this->weight , "height"=>$this->height , "age"=>$this->age , "sex"=>$this->sex , "recoCal"=>$this->recoCal , "recoCarbs"=>$this->recoCarbs, "recoProt"=>$this->recoProt];
          return $obj;
      }
    // public function getUsername(){
    //  //$data = $this->username + $this->title + $this->descriptions;
    //  // $obj = {$this->title,$this->title;};
    // //   $obj = ["title"=>$this->title, "description"=>$this->descriptions,"start"=>$this->starts,"end"=>$this->ends,"className"=>$this->className,"icon"=>$this->icon];
    // //     return $obj;
    // }
    public function getname(){
        return $this->username;
    }


    public function weight(){
        return $this->weight;
    }

    public function height(){
        return $this->height;
    }

    public function age(){
        return $this->age;
    }

    public function sex(){
        return $this->sex;
    }

    public function recoCal(){
        return $this->recoCal;
    }

    public function recoCarbs(){
        return $this->recoCarbs;
    }

    public function recoProt(){
        return $this->recoProt;
    }

 



   
}

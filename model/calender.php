<?php

class calender {
    private $username;
    private $title;
    private $descriptions;
    private $starts;
    private $ends;
    private $className;
    private $icon;


    function __construct($username, $title, $descriptions, $starts, $ends, $className, $icon) {
    
        $this->username = $username;
        $this->title = $title;
        $this->descriptions = $descriptions;
        $this->starts = $starts;
        $this->ends = $ends;
        $this->className = $className;
        $this->icon = $icon;
    }

    public function getUsername(){
     //$data = $this->username + $this->title + $this->descriptions;
     // $obj = {$this->title,$this->title;};
      $obj = ["title"=>$this->title, "description"=>$this->descriptions,"start"=>$this->starts,"end"=>$this->ends,"className"=>$this->className,"icon"=>$this->icon];
        return $obj;
    }

    public function getname(){
        return $this->username;
    }

    public function gettitle(){
        return $this->title;
    }

    public function getdescriptions(){
        return $this->descriptions;
    }

    public function getstarts(){
        return $this->starts;
    }

    public function getends(){
        return $this->ends;
    }

    public function getclassName(){
        return $this->className;
    }

    public function geticon(){
        return $this->icon;
    }



   
}

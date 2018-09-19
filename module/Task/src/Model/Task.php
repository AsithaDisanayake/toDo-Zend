<?php
namespace Task\Model;

Class Task{
    protected $id;
    protected $name;
    protected $description;
    protected $startdate;
    protected $enddate;

    public function exchangeArray($data){

        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->startdate = $data['startdate'];
        $this->endate = $data['endate'];


    }

    public function getId(){
        return $this->$id;
    }
    public function name(){
        return $this->$name;
    }
    public function description(){
        return $this->$description;
    }
    public function startdate(){
        return $this->$startdate;
    }
    public function enddate(){
        return $this->$enddate;
    }
   
    
}





?>    
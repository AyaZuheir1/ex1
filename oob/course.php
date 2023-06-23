<?php
namespace My\APP;

class Course {
    private readonly string $id;
    private string $name;
    
    public function __construct( string $name) {
        $this->id = uniqid();
        $this->name = $name;
    }
    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }
}
?>
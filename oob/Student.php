<?php
namespace My\APP;

class Student 
{

        private readonly string $id;
        private string $name;
        private string $email;
        private $courses;

        public function __construct(string $name ,string $email , $courses = []) {
            $this->id = uniqid();
            $this->name = $name;
            $this->email = $email;
            $this->courses = [];
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
    
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail(string $email){
            $this->email = $email;
        }
   
    
}


?>
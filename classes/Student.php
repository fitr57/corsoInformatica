<?php
require_once "Person.php";
require_once "DigitalUser.php";

class Student implements Person {

    use DigitalUser;
    
    public $courses = array();
    private $name;
    private $age;
   

    public function getCourses() {
        return $this->Courses;
    }

    public function addCourses() {
       
    }

    public function resetCourses() {
        
    }

    public function __construct($name, $age, $email, $courses=[]) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->courses = $courses;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
   
    public function __toString(){
        return "nome: ".$this->name." eta: ".$this->age." email: ".$this->email;
    }
}

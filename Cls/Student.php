<?php
namespace Cls;
//require_once "Person.php";
//require_once "DigitalUser.php";
//require_once "Course.php";

class Student implements Person {

    use DigitalUser;
    
    public $courses = array();
    private $name;
    private $age;
   

    public function getCourses() {
        return $this->courses;
    }

    public function addCourse(Course $course) {
        $this->courses[] = $course;
        //array_push($this->courses,$course);
    }

    public function resetCourses() {
        $this->courses = [];
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
   
    public function __toString() {
        $courses = "";
        foreach($this->courses as $course){
            $courses .= "($course), ";
        }
//        $arr_length = count($this->courses);        
//        for($i=0;$i<$arr_length;$i++) {
//          $courses .= "(nome: " . $this->courses[$i]->getName() . 
//                  " hours: ".$this->courses[$i]->getHours()."),";
//        }
        return "nome: " . $this->name . " eta: " . $this->age . " email: " . $this->email . " courses: [$courses]<br>" ;

    }

}

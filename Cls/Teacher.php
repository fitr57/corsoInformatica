<?php

namespace Cls;

class Teacher extends Worker {

    use DigitalUser;

    public $courses = array();
    private $name;
    private $age;
    public $school;

    public function __construct($name, $age, $email, $company, $school, $courses = []) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->courses = $courses;
        $this->company = $company;
        $this->school = $school;
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

    
  public function getSchool() {
        return $this->school;
    }

    public function setSchool($school) {
        $this->school = $school;
    }    
    
    
    
    
    public function __toString() {
        $courses = "";
        foreach ($this->courses as $course) {
            $courses .= "($course), ";
        }
        return "<br>nome maestro: " . $this->name . "<br>eta: " . $this->age . "<br>email: " . $this->email . "<br>compagnia: " . $this->company ."<br>scuola: " . $this->school . "<br>corsi: [$courses]";
    }

}


<?php
namespace Cls;
class Course {

    private $hours;
    private $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getHours() {
        return $this->hours;
    }

    public function setHours($hours) {
        $this->hour = $hours;
    }

    public function __construct($name, $hours) {
        $this->name = $name;
        $this->hours = $hours;
    }
    
    public function __toString() {
        return "$this->name , $this->hours";
    }

}

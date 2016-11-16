<?php

namespace Cls;

class School {

    private $name;
    private $students = [];

    public function addStudent(Student $stud) {
        $this->students[] = $stud;
    }

    public function getStudents() {
        return $this->students;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function __construct($name,$students=[]) {
        $this->name = $name;
        $this->students = $students;
    }

    function __toString() {
        return "Nome Scuola :$this->name";
    }
}

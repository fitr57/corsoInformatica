<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

spl_autoload_register(function($class_name) {
    require_once $class_name . ".php";
});
use Cls\Student;
use Cls\Course;
use Cls\Teacher;
use Cls\School;

//require_once "Cls/Student.php";
//require_once "Cls/Course.php";

$allievo0 = new Student("dino", 24, "avdt@mai");
$allievo1 = new Student("gino", 20, "alt@mai");
$allievo2 = new Student("pino", 30, "alt@eee");
$frontend = new Course("FrontEnd", 66);
$allievo0->addCourse($frontend);
$allievo1->addCourse(new Course("BackEnd", 22));
$school = new School("WyLab");
$school->addStudent($allievo0);
$school->addStudent($allievo1);
$school->addStudent($allievo2);
$master = new Teacher("giulio", 3, "alt@mai","babysitter", $school, [$frontend]);
//echo $allievo;
echo $master;
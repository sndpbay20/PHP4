<?php

// What is class and instance

require_once "person.php";
require_once "student.php";

$student = new student("abhisek","mehata",123);
echo '<pre>';
var_dump($student);
echo '</pre>';

//$p = new person("Ram","Kumar");
//$p->setAge(30);
//echo '<pre>';
//var_dump($p);
//echo '</pre>';
//echo $p->getAge() ;
//
//
//
////$p->name = 'Ram';
////$p->surname = 'kumar';
//
//$p2 = new person("Shyam","Patel");
//$p3 = new person("hari","kumar");
//echo '<pre>';
//var_dump($p2,$p3);
//echo '</pre>';
//echo person::getcounter().'<br>';
//echo $p->name.'<br>';
//echo $p2->name.'<br>';
//echo $p3->name.'<br>';


//echo '<pre>';
//var_dump($p);
//echo '</pre>';
//echo $p->name.'<br>';


// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
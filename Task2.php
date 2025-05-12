<?php


//task

/*
  1- convert the string to uppercase
  "Hello from Black Horse"

  2- convert the strin to lowercase
  "osama Is A Programmer"

  3- return the following strint from "Osama is a programmer and a developer"
  is a progr

  4- reverse the following string
  "hello from black horse"


  5- trim the string "**************hello*********"
  hello
*/

//1

$string1 = "Hello from Black Horse";
echo strtoupper($string1) . "<br>";

//2
$string2 = "osama Is A Programmer";
echo strtolower($string2) . "<br>";

//3
$string3 = "Osama is a programmer and a developer";
echo substr($string3,6,10) . "<br>";

//4
$string4 = "hello from black horse";
echo strrev($string4) . "<br>";

//5
$string5 = "**************hello*********";
echo trim($string5, "*") . "<br>";

?>
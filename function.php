<?php
//functions-date functions


echo "Today is ".date("l")."<br>";

echo "Today is ".date("Y/m/d")."<br>";

function hello(){ //function declaration
    echo "helloo everyone!! i'm princi sharma!!<br>";
}

hello();//function calling
hello();
hello();
hello();

//function with paramenters

// function add($a,$b){
//     echo $a+$b;
//     echo "<br>";
// }
// add(10,20);
// add(30,50);

// function name($fname="princi",$lname="sharma"){ //default aruguments 
//     echo "hello $fname $lname <br>";
// }
// name("nishu" ,"sharma");
// name();

// //function with some return value;
// function pname($fname,$lname){
//     $sum=$fname . $lname;
//     return $sum;
// }
// $total=pname("princi","sharma"); 
// echo $total;

// function addition($eng,$maths,$sc){

//     $sum=$eng+$maths+$sc;
//     return $sum;

// }
// function percentage($ts){
//     $tp=$ts/3;
//     echo "total percentage ". $tp ." %";
// }

// $total=addition(78,77,83);
// percentage($total);
// echo "<br>";

// //passing arguments by refrences
// function num($num){
//  $num += 20;
// }
// function second(&$second){

//     $second +=20;

// }
// $number=20;
// num($number);
// echo "original value $number <br>";


// second($number);
// echo "value is changed $number <br>";

//variable functions
function wow($a,$b){
  $add=$a+$b;
  echo $add;
}
$func="wow";
$func(30,40);
echo "<br>";

//ananomous functions

$set=function($fname,$lname){
    $sum=$fname ." ". $lname;
    echo "<br>";
   return $sum;
};
echo $set("princi","sharma");
echo "<br>";

//recursive function

function display($number){
   if($number<=5){
    echo "$number <br>";
    display($number+1);
   }
  


}
display(1)





?>
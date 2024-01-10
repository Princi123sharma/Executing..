<?php

//local or global variables




// function test(){
//     $x=20; //local variable
//     echo "scope inside :$x <br>";
// }
// test();
// echo "variable outside the funciton $x <br>";

$x=20; 
$y=30;//global variable
function display(){
    global $x,$y;
   $sum =$x+$y;
   echo $sum;
}
display();












?>
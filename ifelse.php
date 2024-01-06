<?php
//if-else statements
// $day="friday";
// if($day=="sunday"){
//     echo "today is holiday";
// }
// else{
//     echo "today is not holiday";

// }


// $num=12;

// if($num%2==0){
    
//     echo "number is even";
// }
// else{
//     echo "number is not even";
// }

$age=23;
if($age<=5){
    echo "he is a kid";
}
else if($age<=18){
    echo "he is a teenager";
}
else if($age<=30){
    echo "he is adult";
}
else{
    echo "he is a old man";
}


$x=1000;
echo "</br>";
if($x==="1000"){
   
    echo "it is equal";
}
else{
    echo "its is not equal";
}

$marks=56;
echo "</br>";
if($marks>=80 && $marks<=100):
    echo "merit";
    elseif($marks>=60 && $marks<=79):
        echo "1st division";
        elseif($marks>=45 && $marks<=59):
            echo "2nd division";
            elseif($marks>=33 && $marks<=44):
                echo "3rd division";
            elseif($marks<33):
                echo "fail";
            endif;
    
            


?>
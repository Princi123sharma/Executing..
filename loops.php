<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<hr>
<?php

//loops are used to perform the task repeateadly;

//1st we will discuss on for loops it is very simple loop and it is used for simple task if we want to perform like we want to perform some task multiple times.

/*

for(intialization;condation;updation){
    //some lines of code;
}

*/
for($age=5;$age<18;$age++){
    echo "my age increase per year ".$age."<br>";
}
?>
<hr>
<?php
for($index=0;$index<100;$index++){
  echo "$index <t> ";
}

?>
<hr>
<?php
/*while loops

while(condation){
    some lines of code;
}

*/

$i=0;
while($i<10){
    echo "the number increases one by one ".$i."<br>";
    $i++;
}

?>

<hr>
<?php
/*
do while loop is similar to the while loop but do while loop is used where we want to write the statement atleast one time;
*/
$name=0;
do{
    echo "my name is princi <br> ";
    $name++;
}while($name<10);


?>
<hr>
<?php
//for each loop iss only applicable on the arrays it is used when we want to itterate the array;
$arr=array("bananas","apple","bread","harpic");
foreach($arr as $value){
    echo $value ;
    echo "<br>";
}

?>

</body>
</html>
<?php
//arrays in php

$colors=["red","yellow","green"];
// echo "$colors[0]";
echo "<ul>";
for($i=0;$i<3;$i++){
    echo "<li>$colors[$i]</li>";
}
echo "</ul>";

// echo "<pre>";
// print_r($colors);
// echo "</pre>";

//associative array-when we change the index with any name like string or anyother character than it becomes associative array

// $fav=["chocolates","orange","pastry","cake","icecream","sweets"];
$fav=[
    "pi"=>"chocolates",
    "ti"=>"orange",
    "si"=>"pastry",
    "mi"=>"cake",
    "di"=>"icecream",
    "wi"=>"sweets"
];
echo $fav["pi"];

echo "<pre>";
print_r($fav);
echo "</pre>";

echo "<pre>";
var_dump($fav);
echo "</pre>";

echo "<ul>";
foreach($fav as $key => $value){
    echo "<li>$key=$value </li>";
}
echo "<ul>";

//multidemensional array->nested array the multiple arrays inside the array is called nested array!!

$emp=array(

    array(1,"krishna","manager",500000),
    array(2,"salman","salesman",20000),
    array(3,"mohan","computer operator",12000),
    array(4,"Amir","Driver",5000)
);

echo "<pre>";
print_r($emp);

echo "</pre>";

echo "<br>";
echo $emp[2][2];

echo "<br>";

echo "<table border='2px' cellpadding='6px' cellspacing='0.5px'>";
echo "<tr>";

echo "<th> Emp.id </th>";
echo "<th> Emp.name </th>";
echo "<th> Emp.designation </th>";
echo "<th> Emp.salary </th>";

echo "</tr>";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";


//associative array
$emp2=[

"pi"=>[
   1=>1,
   2=>"krishna",
   3=>"manager",
   4=>50000
],
"di"=>[
  1=>2,
  2=>"ravi",
  3=>"salesman",
  4=>40000
]
];


// echo "<pre>";

// print_r($emp2);

// echo "</pre>";

echo "<table border='1px' cellpadding='8px' cellspacing='0.5px'>";

echo "<tr>";
 echo "<th>Emp id</th>";
 echo "<th>Emp name</th>";
 echo "<th>Emp desgination</th>";
 echo "<th>Emp salary</th>";
 
echo "</tr>";

foreach($emp2 as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td>$v2</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>
<?php

//for each loop with list function in php

$emp=[

    [1,"krishna","manager",50000],
    [2,"mohan","salesman",30000],
    [3,"Amir","dataentry",20000],
    [4,"rohan","driver",5000]

];

echo "<table border='2px' cellpadding='5px' cellspacing='0px'>";

echo "<tr>";

echo "<th>Emp.id</th>";
echo "<th>Emp.name</th>";
echo "<th>designation</th>";
echo "<th>salary</th>";



echo "</tr>";

foreach($emp as list($a,$b,$c,$d)){
    echo "<tr><td>$a</td> <td>$b</td> <td>$c</td> <td>$d</td> </tr>";
}

echo "</table>";

?>
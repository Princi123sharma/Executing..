<?php
//goto statements

echo "helllooooooooooooo misssssss";
echo "<br>";
echo "helllooooooooooooo misssssss";
echo "<br>";
goto abc;
echo "helllooooooooooooo misssssss";
echo "helllooooooooooooo misssssss";
echo "helllooooooooooooo misssssss";


abc:
echo "heyyyy this is goto statement";

for ($i=0;$i<10;$i++){

    if($i==3){
        goto abs;
    }
    echo $i;
    echo "<br>";
}
abs:
echo "cursor is here";
?>
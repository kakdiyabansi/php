<?php
#array built-in functions
$stud=[2,5,8,9,6,3];
print_r($stud);
echo"<br>";
echo"<br>";

/* sort($stud);
echo"<br>";
echo"<br>";
asort($stud);
print_r($stud);*/

echo"<br>";
echo"<br>";

/*rsort($stud));
print_r($stud);
echo"<br>";
echo"<br>";*/

/*arsort($stud);
print_r($stud);
echo"<br>";
echo"<br>";*/

$uni=array("atmiya","rajkot","bsc.it");
print_r($uni);
echo"<br>";
echo"<br>";

echo current($uni);
echo"<br>";

echo next($uni);
echo"<br>";

echo end($uni);
echo"<br>";

echo prev($uni);
echo"<br>";
echo"<br>";

$t=array_merge($stud,$uni);
print_r($t);
echo"<br>";
echo"<br>";

$a=[1,3,6,12,15];
print_r($a);
echo array_shift($a);
echo"<br>";
echo"<br>";
print_r($a);

echo array_unshift($a,"bansi");
echo"<br>";
echo"<br>";
print_r($a);


echo array_push($a,"priya");
echo"<br>";
echo"<br>";
print_r($a);

echo array_pop($a);
echo"<br>";
echo"<br>";
print_r($a);

?>
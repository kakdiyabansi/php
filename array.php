<?php
$a=array(10,20,30,40,50);
echo $a[0];

$sum=array("atmiya","university","rajkot");
echo $num[0];
echo $num[1];
echo $num[2];
for($i=0;$i<count($a);$i++)
{
    echo $a[$i];
}

//assotive array
$b=array('name'=>"bansi",'city'=>"kuvadva");
echo $d['name'];
echo $d['city'];
echo"<br>";
print_r(value: $b);
echo"<br>";
var_dump(value: $b);

//multidimesional array
$c=array(array(1,2,3),array("atmiya","university","rajkot"));
echo"<br>";
print_r(value: $c)
?>
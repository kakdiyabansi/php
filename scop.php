<?php
function test()
{
	$a=10;
	echo $a;
}
test();
echo"<br>"
?>

//global variable

<?php
$b=50;
function show()
{
	global$b;
	echo$b;

}
show();

function counter()
{
	static$count=0;
	$count++;
	echo$count;
}
counter();
?>
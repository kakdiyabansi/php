<?php
$con=mysqli_connect("localhost","root","","bancy");
if(!$con)
{
    exit();
}
$id=$_GET['id'];
$qry="delete from students where id=$id";
if(mysqli_query($con,$qry))
{
     echo "deleted......";
     header("refresh:1;url=display1.php");
}
else
{
    echo "error in deleting";
}
?>
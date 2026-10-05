<form action="" method="post">
    name:<input type="text" name="name">
    <br>
    <br>
    city:<input type="text" name="city">
    <br>
    <br>
    dept:<input type="text" name="dept">
    <br>
    mob:<input type="text" name="mob">
    <br>
    <br>
    <input type="submit" name="submit">
</form>
<?php
$con=mysqli_connect("localhost","root","","bancy");
if(!$con)
{
    exit();
}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $city=$_POST['city'];
    $dept=$_POST['dept'];
    $mob=$_POST['mob'];

    $qry="insert INTO students(name,city,dept,mob)VALUES('$name','$city','$dept','$mob')";
    if(mysqli_query($con,$qry))
    {
       echo "inserted ....";
        header("refresh:1;url=display1.php");
    }
}
?>
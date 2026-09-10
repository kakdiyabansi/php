<form action="" method="post">
    name:<input type="text" name="name">
    <br>
    dept:<input type="text" name="dept">
    <br>
    mob:<input type="text" name="mob">
    <br>
    dob:<input type="date" name="dob">
    <br>
    <input type="submit" name="submit">
</form>

<?php
include("include.php");
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $mob = $_POST['mob'];
    $dob = $_POST['dob'];
    $qry = "INSERT INTO student (name, dept,mob,dob) VALUES ('$name', '$dept',$mob,'$dob')";

    if (mysqli_query($con, $qry))
    {
        $id=mysqli_insert_id($con);
        echo $id;
        echo "<br>";
        echo "INSERT";
    }
}

?>
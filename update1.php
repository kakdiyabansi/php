<?php

$con = mysqli_connect("localhost", "root", "", "bancy");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];

/* Update data */
if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $city = $_POST['city'];
    $dept = $_POST['dept'];
    $mob = $_POST['mob'];

    $qry = "UPDATE students SET
            name='$name',
            city='$city',
            dept='$dept',
            mob='$mob'
            WHERE id='$id'";

    if (mysqli_query($con, $qry)) {
       
       header("refresh:1;url=display1.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

/* Get old data */
$qry = "SELECT * FROM students WHERE id='$id'";
$result = mysqli_query($con, $qry);

if (!$result) {
    die("Error: " . mysqli_error($con));
}

$row = mysqli_fetch_assoc($result);

?>

<form method="post">

Name:
<input type="text" name="name" value="<?php echo $row['name']; ?>">
<br><br>

City:
<input type="text" name="city" value="<?php echo $row['city']; ?>">
<br><br>

Dept:
<input type="text" name="dept" value="<?php echo $row['dept']; ?>">
<br><br>

Mob:
<input type="text" name="mob" value="<?php echo $row['mob']; ?>">
<br><br>

<input type="submit" name="update" value="Update">

</form>
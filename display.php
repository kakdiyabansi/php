<table border="1" bgcolor="lightblue">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>dept</td>
        <td>mob</td>
        <td>dob</td>
    </tr>

<?php
$con = mysqli_connect("localhost", "root", "", "university");

if (!$con)
{
    die("not");
}

$qry = "SELECT * FROM student";

$result = mysqli_query($con, $qry);

if (mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['dept'] . "</td>";
        echo "<td>" . $row['mob'] . "</td>";
        echo "<td>" . $row['dob'] . "</td>";
        echo "</tr>";
    }
}

echo "</table>";
?>
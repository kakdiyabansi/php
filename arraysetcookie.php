<html>
<body>

<form action="cookie.php" method="post">
    Name:
    <input type="text" name="name"><br><br>

    University:
    <input type="text" name="university"><br><br>

    City:
    <input type="text" name="city"><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php

if (isset($_POST['submit'])) {

    setcookie("student[name]", $_POST['name'], time() + 3600);
    setcookie("student[university]", $_POST['university'], time() + 3600);
    setcookie("student[city]", $_POST['city'], time() + 3600);

    echo "<br>";
    echo "Cookie values are set";
    echo "<br>";
    echo "Refresh the page to show cookie values";
}

if (isset($_COOKIE['student'])) {

    foreach ($_COOKIE['student'] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
}

?>

</body>
</html>
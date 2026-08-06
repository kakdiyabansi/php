<?php
setcookie("bansi", "atmiya", time() + 3600);

if (isset($_COOKIE["bansi"])) {
    echo "Cookie is set of " . $_COOKIE["bansi"];
} else {
    echo "Cookie is not set";
}
?>

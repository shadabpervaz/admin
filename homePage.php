<?php
session_start();
echo "wellcome " .$_SESSION['email'];
echo "</br>";
echo "wellcome Password ".$_SESSION['password'];

?>
<!DOCTYPE html>

<html lan="en">
    <head>
    </head>
    <body>
        <p>Welcome to this home page</p>
    </body>
</html>
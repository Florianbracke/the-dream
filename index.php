<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<h1>Welcome!</h1>
<!-- local rate to euro -->
<form action="" method="post">
Local rate: <input type="text" name="localToEuros"><br>
<input type="submit">


<br><br>
your local rate will get you:
<?php

echo $_POST["localToEuros"]; ?> 
euros


</body>
</html>

<?php 


?>
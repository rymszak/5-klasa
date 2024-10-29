<!DOCTYPE html>
<?php
session_start()
if(isset($_SESSION['login']))
{
    header('location:strona.php')
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" name="log">
    <input type="password" name="passwd" id="">
</body>
</html>
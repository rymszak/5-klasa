<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['log'])){
    unset($_SESSION['log']);
}
else{
    header('location:log.php');
    exit;
}
$s=session_destroy();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unlog</title>
</head>
<body>
    <p>wylogowałeś sie ze strony</p>
    <a href="log.php">logowanie</a>
</body>
</html>
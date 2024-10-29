<?php 
session_start();
if(isset($_SESSION['log']))
{
    header("location:log.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body>
  <?php
  $imie=ucfirst($_SESSION['log']);
  echo "witaj".$imie;
  ?>  
  <p>Jeteś na stronie głównej</p>
  <p>przed opuszczeniem strony wyloguj się </p>
  <a href="wyloguj.php">wyloguj</a>
</body>
</html>
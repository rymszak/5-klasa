<!DOCTYPE html>
<?php
session_start()
if(isset($_SESSION['kosz']))
{
    header('location:strona.php');
    exit();
}?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strona</title>
</head>
<body>
   <form action="kosz.php" method="post">
    auto<input type="checkbox" name="auto" id="auto"><br>
    rower<input type="checkbox" name="bike" id="rower"><br>
    samolot<input type="checkbox" name="samolot" id="samolot">
<br>    helikopter<input type="checkbox" name="heli" id="heli">
<br> 
</form> 
</body>
</html>
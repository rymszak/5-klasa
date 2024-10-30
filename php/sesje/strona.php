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



<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['login']))
{
    header('location:login.php');
    exit();
}



elseif(isset($_SESSION['kosz'])){
$_SESSION['kosz']=$_POST['towar'];
    header("location:kosz.php");
   
}else{
echo '<p><button name="out">wyloguj</button></p>';
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strona</title>
</head>
<body>
   <form action="kosz.php" method="post">
    auto<input type="checkbox" name="towar[]" value="auto"><br>
    rower<input type="checkbox" name="towar[]" value="rower"><br>
    samolot<input type="checkbox" name="towar[]" value="samolot">
<br>    helikopter<input type="checkbox" name="towar[]" value="heli">
<br> <button type="submit">zapisz</button>
</form> 
</body>
</html>

<!DOCTYPE html>
<?php 
session_start()
if(isset($_SESSION['kosz']))
{
    header('location:strona.php');
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kosz</title>
</head>
<body>
    <?php
    $kupione=array();
    $car=$_POST['auto'];
    $rower=$_POST['rower'];
    $samolot=$_POST['samolot'];
    $heli=$_POST['heli'];

    echo witaj  
    ?>

</body>
</html>
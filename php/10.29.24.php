<?php
if(!isset($_COOKIE['odpowiedz']))
{
    $odw=1;
}
else{
    $odw=intval($_COOKIE['odpowiedz'])+1;
}
setcookie("odpowiedz",$odw,time()+60*60*24*365);






<!DOCTYPE html>
<?php
$czas=date("Y-m-d G:i:s");
setcookie("wizyta",$czas,time()+3600);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_COOKIE['wizyta']))
    {
        $ostatnia=$_COOKIE['wizyta'];
        echo "witamy ponownie! <br>Ostatni raz odwiedziłeś nas:".$ostatnia;
    }
    else{
        echo "witamy na naszej stronie!";
    }?>
    <p><strong>Uwaga: </strong> Potrzebne może być odświeżenie strony.</p>
</body>
</html>


























?>

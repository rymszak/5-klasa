<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get.php" method="get">

    <label for="imie">Imie <input type="text" name="imie"></label><br>
    <label for="wiek">wiek <input type="number" name="wiek"></label><br>
    <label for="plec">plec <br> 
        m<input type="radio" name="plec" value="m">
    k <input type="radio" name="plec" value="k"></label><br>

    <label for="color">kolor<select name="color">
        <option value="czer">czer</option>
        <option value="gru">gru</option>
    </select></label><br>
    <label for="gra[]"> gra <input type="checkbox" name="gra[]" value="gta">gta <br>
<input type="checkbox" value="nfs" name="gra[]">nfs</label><br>
<label for="text">text <textarea name="text"></textarea></label><br>
<button name="send">przeslij</button>
    </form>
    
</body>
</html>
<?php
$imie=$_GET["imie"];
$wiek=$_GET["wiek"];
$plec=$_GET["plec"];
$color=$_GET["color"];
$gra=$_GET["gra"];
$txt=$_GET["text"];
$btn=$_GET["send"];

echo "$imie, $wiek, $plec, $color, ";
foreach($gra as $k){
    echo "$k, ";
}
echo "$txt";
?>

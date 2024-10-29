<?php
$imie=$_POST["imie"];
$szkola=$_POST["szkola"];
$adult="";
if(!isset($_POST['pelnoletni'])){
    $adult="niepełnoletni";
}
else{
    $adult=$_POST["pelnoletni"];}
$rola=$_POST["rola"];

echo "Jesteś ".$imie.",<br>Jesteś ".$rola." w ". $szkola.".<br>Z formularza wynika, że jesteś ".$adult;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="wynik.php" method="post">
    <label for="imie">imie<input type="text" name="imie">
    </label><br>
   <input type="radio" name="rola" id="uczen" value="uczeniem/uczennicą">uczeń
<br>   <input type="radio" name="rola" id="rodzic" value="rodzicem">rodzic
 <br>  <input type="radio" name="rola" id="nauczyciel" value="nauczycielem/ką">nauczyciel 
  <br>  <select name="szkola" id="szkola">
    <option value="szkole podstawowej">szkoła podstawowa</option>
    <option value="szkole średniej">szkoła średnia</option>
    <option value="studiach wyższych">studia wyższe</option>
    </select>
 <br>   <input type="checkbox" name="pelnoletni" value="pełnoletni">pełnoletniość
  <br>  <button type="submit">wyślij</button>
</form>
</body>
</html>

<?php

$conn=mysqli_connect('localhost','root','',"biblioteka");
if(!$conn){
    echo "problem z połączeniem ";
    exit;
}
else{
    echo "polączono";
    $query=mysqli_query($conn,'SELECT imie,nazwisko from autorzy order by nazwisko');
    if(!$query){
        echo "błąd zapytania";
    }
    else{
        echo "<h3>polecamy dzieło autorów</h3><ol>";
        
        while($wiersz=mysqli_fetch_row($query) ){
            echo "<li> $wiersz[0] $wiersz[1]</li> <br>"; //echo $wiersz[imie] $wiersz[nazwisko];
            
        }
        
        echo "</ol>";
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    <label for="imie">imie <input type="text" name="imie"></label><br>
    <label for="nazwisko">nazwisko <input type="text" name="nazwisko"></label><br>
    <label for="symbol">symbol <input type="number" name="symbol"></label><br><br>
    <button type="submit">Wyślij</button><br>
    </form>
    <?php
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $symbol=$_POST['symbol'];
    $conn=mysqli_connect('localhost','root','','biblioteka');
    if(!$conn){
        echo "błąd połączenia";
    exit;}    
    else{
        if(!isset($imie)|| !isset($nazwisko)|| !isset($symbol)){
            echo "wypisz dane";
            exit;
        }
        else{
            $query=mysqli_query($conn,"INSERT into czytelnicy(imie,nazwisko,kod) values('$imie','$nazwisko','$symbol')");
            if(!$query){
                echo "błąd zapytania";
             }    
            else{
                echo "Czytelnik $imie $nazwisko został(a) dodany do bazy danych";
            }
           
            
            
        }
    }
    mysqli_close($conn);
    ?>
</body>
</html>

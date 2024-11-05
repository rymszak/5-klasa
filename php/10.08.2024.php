<?php
// setcookie(nazwa*obowiazkowe wartosc czastrwania sciezkaserweu domena bezpieczeństwo(true/False))
// setcookie przez html $_cookie['nazwa']-dostep do pliku
$czas=date("Y-M-d G:i:s");
setcookie("wizyta",$czas, time()+3600);
?><html><?php
if(isset($_COOKIE["wizyta"]))
{
    $ostatnia=$_COOKIE['wizyta'];
    echo "<p>Jesteś naszym stałym klientem. ostatnio byłeś u nas $ostatnia</p>";
}
else echo "<p>witamy po raz pierwszy na naszej stronie</p>";
?>
<p><strong>Uwaga: </strong> Potezebne odstwierzenie strony</p></html>


if(!isset($_COOKIE['dane2']) && !isset($_POST['nazwa'])){

    ?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dane user</title>
    </head>
    <body>
        <form action="#" method="post">
            Podaj imie i nazwisko: <input type="text" name="nazwa" size="35">
            <p><input type="submit" value="wyślij" name="wyslij"></p>
        </form>
        <?php
}   
else {
    if(isset($_POST['nazwa'])){
    setcookie('dane2',$_POST['nazwa'],time()+60);
    echo "<p>dziekuję za wprowadzenie danych</p>";
    }
    else{
        echo "<p> witaj po raz pierwszy ".$_COOKIE['dane2']."<br>";
    }
}?>
    </body>
    </html>
    

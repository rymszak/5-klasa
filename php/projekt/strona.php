<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>przychodniapogodna</title>
</head>
<body>
    <?php
    include "logowanie.php";
    getdate();
    $conn=mysqli_connect('localhost','root','','przychodnia');
    $date=date('Y-m-d',strtotime("-1 month")) ;
    // if($wiersz[id_admina]>0){
        $que_res=mysqli_query($conn,"SELECT concat(pacjenci.imie,' ',pacjenci.nazwisko) as imie_pacjenta,concat(lekarze.imie,' ',lekarze.nazwisko) as imie_lekarza_badającego,wizyty.zalecenia,przychodnie.nazwa,wizyty.data_wizyty FROM `wizyty` JOIN lekarze on lekarze.id_lekarza=wizyty.id_lekarza join pacjenci on pacjenci.id_pacjenta=wizyty.id_pacjenta join przychodnie on przychodnie.id=wizyty.id_przychodnie where data_wizyty between '$date' and Current_Date();");
        // echo "<header><nav> <button class='add'>Dodaj lekarza</button><button class=";
        echo "<a href='raport.csv' download> pobierz plik</a>";
        $plik=fopen('raport.csv', 'a');
        while($wynik=mysqli_fetch_array($que_res)){
            $dane="imie pacjeta $wynik[0] imie lekarza $wynik[1] zalecenia $wynik[2] nazwa przychodni $wynik[3] data badania $wynik[4] \n";
        fwrite($plik,$dane);
        // }
    }
    fclose($plik);
    ?>
</body>
</html>
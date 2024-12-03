<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal pacjenta</title>
    <style>
      body {
        background-color: #d4b7e1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size:120%;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        form {
            margin: 10px;
        }
        main, aside {
            text-align: center;
            width: 80%;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
        }

        .log {
            display: inline-block;
        }

        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        table th {
            background-color: #e5e5a3;
        }
        table td{
            background-color: #e599e5;
        }
        h2 {
            margin-top: 20px;
        }
        button{
            height: 40px;
            font-size:120%;
        }
    </style>
</head>
<body>
<form action="#" method="post">
        <button name="log">wyloguj</button>
    </form>
    <main>
    <button type="submit" id="main">Strona główna</button>
    <script>
        const main=document.getElementById('main')
        main.addEventListener('click', function(ev){
            ev.preventDefault()
            window.location.replace("index.php")
        })
    </script>
<?php
if($_COOKIE['pacjent']==false){
    header("location:index.php");
}
else{
    $conn=mysqli_connect('localhost','pacjenci','PacjenciHaslo','przychodnia');
    if(!$conn){
        echo "brak bazy";
    }
    else{
    $id=$_COOKIE['pacjent'];
    if (isset($_POST['log'])) {
        session_start();
        session_unset();
        session_destroy();
            unset($_COOKIE['admin']);
            unset($_COOKIE['lekarz']);
            unset($_COOKIE['logged']);
            unset($_COOKIE['pracownik']);
            unset($_COOKIE['pacjent']);
            setcookie('admin','',time()-3600,'/');
            setcookie('lekarz', '', time() - 3600, '/');
            setcookie('logged','',time()-3600,'/');
            setcookie('pracownik','',time()-3600,'/');
            setcookie('pacjent','',time()-3600,'/');
            header('location:index.php');
}


?>

</main>
<aside>
<form action="#" method="post">
<button name="last">Ostatnie Zalecenie</button>
</form>
<p id="dis">
<?php
if(isset($_POST['last'])){

    $wyniki=mysqli_query($conn,"SELECT zalecenia from wizyty where id_pacjenta='$id' order by id_wizyty desc;"); 
        $last=mysqli_fetch_array($wyniki);
        if(!$last){
            exit;
        }
        else{
        for($i=0;$i<1;$i++){
            echo "<h2>Ostatnie zlecenie ".$last[0]."</h2>";
    }
}
}
}
}
?>
</p>
<form action="#" method="post">
    <button name="month">Zalecenia z ostatniego miesiąca</button>
</form>
<table>
    <?php
if(isset($_POST['month'])){
   echo "<tr><th>Imie lekarza wypisującego</th><th>Dzień wypisania</th><th>Zalecenia</ht></tr>";
   getdate();
   $date=date('Y-m-d',strtotime("-1 month")) ;
   $que_res=mysqli_query($conn,"SELECT CONCAT(lekarze.imie, ' ', lekarze.nazwisko) AS imie_lekarza_badającego, wizyty.zalecenia, wizyty.data_wizyty FROM wizyty JOIN lekarze ON lekarze.id_lekarza = wizyty.id_lekarza WHERE id_pacjenta = 1 AND data_wizyty BETWEEN '2024-10-29' AND CURRENT_DATE();"); 
    while($wiersz=mysqli_fetch_array($que_res)){
        echo "<tr><td>$wiersz[0]</td><td>$wiersz[2]</td><td>$wiersz[1]</td></tr>";
    }
}
?>
</table>
</aside>
</body>
</html>
</body>
</html>
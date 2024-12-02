<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychdania lekarza</title>
    <style>
        body{
            display:flex;
            flex-direction:column;
            padding:50px;
            background-color: #C2FFC7;
            font-size:120%;
            
        }
        main {
            display:flex;
            margin:20px;
            flex-direction:row;
            justify-content:space-around;
        }
        main form{
            display:flex;
            flex-direction:column;
            margin:20px;
        }
        aside{
            display:flex;
            flex-direction:column;
            text-align:center;
            padding-top:50px;
        }
        aside form{
            display:flex;
            flex-direction:column;
            margin:20px;
            justify-content:space-around;
        }
        h2{
            width: 100%;
            background-color: #526E48;
            height: 150px;
            display:flex;
            justify-content:center;
            align-items: center;
            color: white;
        }
        aside button{
            width: 300px;
            align-self:center;
        }
        button{
            margin-top:20px;
            font-size:120%;
        }
        input{
            margin-top:20px;
        }
    </style>
</head>
<body>
<nav class="baner">
            <button type="submit" id="main">strona główna</button>
        <button type="submit" id="lekarz">zakładka pracownicy</button>
<form action="#" method="post">
        <button name="log" class="log">Wyloguj</button>
    </form>
        </nav>
        <?php
        if(isset($_POST['log'])){
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php");
        if (isset($_COOKIE['admin'])) {
            unset($_COOKIE['admin']); 
            unset($_COOKIE['logged']);
            setcookie('admin', '', time() - 3600, '/');
            setcookie('logged','',time()-3600,'/'); 
            return true;
        } else {
            return false;
        }
        exit();
    }
    ?>
        <script>
const lek=document.getElementById('lekarz')
lek.addEventListener('click',function (ev){
        ev.preventDefault();
        window.location.replace("pracownik.php");
    })
 const main=document.getElementById('main');
 main.addEventListener('click',function (ev){
        ev.preventDefault();
        window.location.replace("index.php");
    })
    </script>
    <main>
<form action="#" method="post">
    <h3>Dodaj pacjenta</h3>
    <label for="imie_add">Imie pacjenta: <input type="text" name="imie_add"></label>
    <label for="nazwisko_add">Nazwisko pacjenta: <input type="text" name="nazwisko_add"></label>
    <label for="login_pacjenta">Login pacjenta: <input type="text" name="login_pacjenta"></label>
    <label for="haslo_pacjenta">Haslo pacjenta <input type="text" name="haslo_pacjenta"></label>
    <button name="create">Stwórz pacjenta</button>
</form>
<?php
if($_COOKIE['pracownik']==false){
    header("location:index.html");
}
else{
    $conn=mysqli_connect('localhost','pracownicy','PracownikHaslo','przychodnia');
    if(!$conn){
        echo "brak bazy";
    }
if(isset($_POST['create'])){
    $imie=$_POST['imie_add'];
    $nazwisko=$_POST['nazwisko_add'];
    $login=$_POST['login_pacjenta'];
    $haslo=$_POST['haslo_pacjenta'];
    if(!empty($imie)&&!empty($nazwisko)&&!empty($login)&&!empty($haslo)){
        $query=mysqli_query($conn,"INSERT into pacjenci(imie,nazwisko) values('$imie','$nazwisko')");
        if(!$query){
            echo "nie dodano";
        }
        else{
            echo "dodano pacjenta";
            $account=mysqli_query($conn,"INSERT into konta(konta.login,haslo,id_pacjenta) values('$login','$haslo',(select id_pacjenta from pacjenci where imie='$imie' and nazwisko='$nazwisko'))");
            if(!$account){
                echo "<br>nie dodano konta";
            }
            else{
                echo "<br> dodano konto";
            }
        }
    }
}

?>
<form action="#" method="post">
    <h3>Usunięcie pacjenta</h3>
    <label for="imie">Imie pacjenta: <input type="text" name="imie"></label>
    <label for="nazwisko">Nazwisko pacjenta: <input type="text" name="nazwisko"></label>
    <button name="del">Usuń dane pacjenta</button>
    <p><?php
if(isset($_POST['del'])){
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    if(!empty($imie)&&!empty($nazwisko)){
        $del_konto=mysqli_query($conn,"DELETE from konta where konta.id_pacjenta=(SELECT id_pacjenta from pacjenci where imie='$imie' and nazwisko='$nazwisko');");
        if(!$del_konto){
            echo "nie usunięto konta";
        }
        else{
            $del_wizyty=mysqli_query($conn,"DELETE from wizyty where wizyty.id_pacjenta=(SELECT id_pacjenta from pacjenci where imie='$imie' and nazwisko='$nazwisko');");
            if(!$del_wizyty){
                echo "nie usunięto wizyt";
            }
            else{
                $del_pacjent=mysqli_query($conn,"DELETE from pacjenci where imie='$imie' and nazwisko='$nazwisko';");
                if(!$del_pacjent){
                    echo "nie usunięto pacjenta";
                }
                else{
                    echo "Usunięto pomyślnie";
                }
            }
        }
    }
}
?></p>
</form>

</main>
<aside>
<form action="#" method="post">
    <label for="imie">Imie pacjęta: <input type="text" name="imie"></label>
    <label for="nazwisko">Nazwisko pacjenta: <input type="text" name="nazwisko"></label>
<button name="last">Ostatnie Zalecenie</button>
</form>
<p id="dis">
<?php
if(isset($_POST['last'])){
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    if(!empty($imie)&&!empty($nazwisko)){
        $wyniki=mysqli_query($conn,"SELECT zalecenia from wizyty where id_pacjenta=(select id_pacjenta from pacjenci where imie='$imie' and nazwisko='$nazwisko') order by id_wizyty desc;");
        
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
</aside>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>przychodniapogodna</title>
    <style>
        body{
            background-color:  #eec9d2;
            display:block;
            height: fit-content;
            overflow:hidden;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        label{
            display:block;
            margin:15px;
            height: 30px;
        }
        main{
            display:flex;
            margin:20px;
        }
        
       main form > button{
            width: 30%;
            margin-left:15px;
        }
        form{
            width: 20%;
            display: flex;
            flex-direction:column;
        }
        input{
            display: flex;
        }
        section{
            width: 30%;
        }
        section form > button{
            
            width: 80%;
        }
        a{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin: 20px auto;
            width: fit-content;
            text-decoration:none;
            color:black;
        } 
        div{
            margin-bottom:100px;
            background-color:  #eec9d2;
        }
       hr{
        border:4px gray solid;
       }
       .bottom{
        background-color: #f6abb6;
        height:400px;
        padding-left:20px;
        padding-bottom:80px;
       }
       .botton *{
        margin-top:15px;
       }
       .log{
        width: 70px;
        text-align:center;
       }
       #update button{
        
        margin-top:20px;
       }
    </style>
</head>
<nav class="baner">
        <button type="submit" id="main">strona główna</button>
<form action="#" method="post">
        <button name="log" class="log">Wyloguj</button>
    </form>
        </nav>
<body>
    
    <?php
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
    <div class="up">
<main>

<form action="#" method="post"> 
    <label for="imie">Imie <input type="text" name="imie"></label>
    <label for="nazwisko">Nazwisko <input type="text" name="nazwisko"></label>
    <label for="nazwa_przychodnia">przychodnia <input type="text" name="nazwa_przychodnia"></label>
    <label for="pokoj">pokój <input type="number" name="pokoj" ></label>
    <label for="login">login <input type="text" name="login"></label>
    <label for="haslo">hasło <input type="text" name=haslo></label>
    <button type="submit" name="lek">Dodaj lekarza</button>
    </form>

    <form action="#" method="post">
    <label for="imie">Imie <input type="text" name="imie"></label>
    <label for="nazwisko">Nazwisko <input type="text" name="nazwisko"></label>
    <label for="posada">Posada <input type="text" name="posada"></label>
    <label for="login">login <input type="text" name="login"></label>
    <label for="haslo">hasło <input type="text" name=haslo></label>
    <button type="submit" name="praca">Dodaj pracownika</button>
    </form>

    <form action="#" method="post">
    <label for="nazwa">Nazwa przychodni <input type="text" name="nazwa"></label>
    <button type="submit" name="add">dodaj przychodnie</button>
    </form>
    
    
    <?php
    getdate();
    $conn=mysqli_connect('localhost','administrator','HasloAdmin','przychodnia');
    if($_COOKIE['admin']==false){
        header("location:index.html");
    }
    else{
        if(isset($_POST['add'])){
            $nazwa=$_POST['nazwa'];
            if(!empty($nazwa)){
                $que=mysqli_query($conn,"INSERT into przychodnie(nazwa) values('$nazwa');");
                if(!$que){
                    echo "błąd";
                }
                else{
                    echo "dodano";
                }
            }
        }
        elseif(isset($_POST['lek'])){
            $imie=$_POST['imie'];
            $nazwisko=$_POST['nazwisko'];
            $przychodnia=$_POST['nazwa_przychodnia'];
            $pokoj=$_POST['pokoj'];
            $login=$_POST['login'];
            $haslo=$_POST['haslo'];
            if(!empty($imie)&&!empty($nazwisko)&&!empty($przychodnia)&&!empty($pokoj)&&!empty($login)&&!empty($haslo)){
                $query=mysqli_query($conn,"INSERT into lekarze(imie,nazwisko,id_przychodni,nr_pokoju) values('$imie','$nazwisko',(SELECT id from przychodnie where przychodnie.nazwa='$przychodnia'),'$pokoj')");
                
                if(!$query){
                    echo "błąd";
                }
                else{ 
                    
                $query2=mysqli_query($conn,"INSERT into konta(konta.login,konta.haslo,konta.id_lekarza) values('$login','$haslo',(SELECT id_lekarza from lekarze where imie='$imie' and nazwisko='$nazwisko'));");
                if(!$query2){
                    echo "błąd";
                }
                else{
                    echo "dodano";
                }
            }
        }
    }
    
    elseif(isset($_POST['praca'])){
        $imie=$_POST['imie'];
        $nazwisko=$_POST['nazwisko'];
        $posada=$_POST['posada'];
        $login=$_POST['login'];
        $haslo=$_POST['haslo'];
        if(!empty($imie)&&!empty($nazwisko)&&!empty($posada)&&!empty($login)&&!empty($haslo)){
            $que=mysqli_query($conn,"INSERT into pracownicy(imie,nazwisko,posada) values('$imie','$nazwisko','$posada');");
            if(!$que){
                echo "błąd";
            }
            else{
                $query2=mysqli_query($conn,"INSERT into konta(konta.login,konta.haslo,konta.id_pracownika) values('$login','$haslo',(SELECT id_pracownnika from pracownicy where imie='$imie' and nazwisko='$nazwisko'));");
                if(!$query2){
                    echo "błąd";
                }
                else{
                    echo "dodano";
                }
            }
        }
    }
    $date=date('Y-m-d',strtotime("-1 month")) ;
        $que_res=mysqli_query($conn,"SELECT concat(pacjenci.imie,' ',pacjenci.nazwisko) as imie_pacjenta,concat(lekarze.imie,' ',lekarze.nazwisko) as imie_lekarza_badającego,wizyty.zalecenia,przychodnie.nazwa,wizyty.data_wizyty FROM `wizyty` JOIN lekarze on lekarze.id_lekarza=wizyty.id_lekarza join pacjenci on pacjenci.id_pacjenta=wizyty.id_pacjenta join przychodnie on przychodnie.id=wizyty.id_przychodnie where data_wizyty between '$date' and Current_Date();");       
        $plik=fopen('raport.csv', 'a');
        while($wynik=mysqli_fetch_array($que_res)){
            $dane="imie pacjeta $wynik[0] imie lekarza $wynik[1] zalecenia $wynik[2] nazwa przychodni $wynik[3] data badania $wynik[4] \n";
            fwrite($plik,$dane);
        }
        fclose($plik);
        
        
    }
    
    
    
    
    ?>
    <hr>
        <a href='raport.csv' download>pobierz dane</a>
<br>
<hr>
<section id="update">
Update passord:
<form action="#" method="post">
<label for="login">Login <input type="text" name="login"></label>
<label for="haslo">Nowe Hasło <input type="text" name='haslo'></label>
<button type="submit" name="update">Zmień haslo</button>
</form>
    <?php
    $conn=mysqli_connect('localhost','administrator','HasloAdmin','przychodnia');
        if(isset($_POST['update'])){
        $login=$_POST['login'];
        $haslo=$_POST['haslo'];
        if(!empty($login)&&!empty($haslo)){
            mysqli_query($conn,"update konta set haslo='$haslo' where login='$login';");
        }
    }
    ?></section></div>
    <div class="bottom">
        <hr>
       delete
       <form action="#" method="post">
        <label for="login">login <input type="text" name="login"></label>
        <label for="haslo">haslo <input type="text" name="haslo"></label>
        <button type="submit" name="del">Usuń konto</button>
       </form>
       <?php
        $conn=$conn=mysqli_connect('localhost','administrator','HasloAdmin','przychodnia');
        if(isset($_POST['del'])){
            $login=$_POST['login'];
            $haslo=$_POST['haslo'];
            if(!empty($login)&&!empty($haslo)){
                $que=mysqli_query($conn,"DELETE FROM konta WHERE konta.login='$login' and haslo='$haslo';");
                if(!$que){
                    echo "błąd";
                }
                else{
                    echo 'usunięto '.$login;
                }
            }
            mysqli_close($conn);
        }
       ?>
    </div>
</main>
</body>
</html>
<script> 
 const main=document.getElementById('main');
 main.addEventListener('click',function (ev){
        ev.preventDefault();
        window.location.replace("index.php");
    })
    </script>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
<style>
    body{
        font-size:120%;
        display:flex;
        justify-content:center; 
        background-color: #a4b2f1;
        margin-top:20px;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    form{
        margin:20px;
        display:flex;
        flex-direction:column; 
    }
    label{
        display:flex;
        flex-direction:column;
        margin:20px;
    }
    .log{
        width: 50%;
        margin-left:60px;
        margin-bottom:20px;
    }
    
</style>
</head>
<body>
    
    <div class="logowanie">
        <form action="#" method="post">
            <label for="login">login <input type="text" name="login"></label>
            <label for="haslo">hasło <input type="password" name="haslo"></label>
                        <button type="submit" name="submit" class="log">Zaloguj</button>
                        
                        <?php
$conn = mysqli_connect('localhost', 'root', '', 'przychodnia');
if (!$conn) {
    echo "Problem z serwerem";
} else {
    
    if (isset($_POST['submit'])) {
        $login = isset($_POST['login']) ? $_POST['login'] : "";
        $haslo = isset($_POST['haslo']) ? $_POST['haslo'] : "";
        
        if (!empty($login) && !empty($haslo)) {
            $result = mysqli_query($conn, "SELECT login, haslo, id_lekarza, id_pacjenta, id_pracownika, id_admina FROM `konta` WHERE login='$login';");
            
            if ($result && mysqli_num_rows($result) > 0) {
                $wiersz = mysqli_fetch_assoc($result);
                if ($haslo == $wiersz['haslo']) {
                    session_start();
                    if (!isset($_SESSION['pierwszy_raz'])) {
                        $_SESSION['pierwszy_raz'] = true;
                        echo "Błąd: Login lub Hasło nie jest Poprawne";
                        exit;
                    } else {
                        if($wiersz['id_admina']>0){
                            $cookie_name = "admin";
                            setcookie($cookie_name, time() + (86400 * 30));
                            setcookie('logged', time() + (86400 * 30));
                            $_SESSION['admin']=true;
                            header("Location: admin.php");
                        }
                        elseif($wiersz['id_lekarza']>0){
                            $cookie_name = "lekarz";
                            setcookie($cookie_name, time() + (86400 * 30));
                            $_SESSION['lekarz']=true;
                            header("location:lekarz.php");
                        }
                        elseif($wiersz['id_pacjenta']>0){
                            $cookie_name = "pacjent";
                            $coocie_value=$wiersz['id_pacjenta'];
                            setcookie($cookie_name,$coocie_value, time() + (86400 * 30));
                            $_SESSION['pacjent']=true;
                            header("location:pacjent.php");
                        }
                        elseif($wiersz['id_pracownika']>0){
                            $cookie_name = "pracownik";
                            setcookie($cookie_name, time() + (86400 * 30));
                            $_SESSION['pracownik']=true;
                            header("location:pracownik.php");
                        }
                    }
                } else {
                    echo "Błąd: Login lub Hasło nie jest poprawne.";
                }
            } else {
                echo "Błąd: Nie znaleziono użytkownika.";
            }
        } else {
            echo "Proszę wprowadzić login i hasło.";
        }
    }
}
?>

</form>

</div>
</body>
</html>
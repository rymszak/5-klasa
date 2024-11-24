    <div class="logowanie">
                    logowanie
                    <form action="#" method="post">
                        <label for="login">login <input type="text" name="login"></label>
                        <label for="haslo">hasło <input type="password" name="haslo"></label>
                        <button type="submit" name="submit">Zaloguj</button>
                        
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
                        header("Location: strona.php");
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
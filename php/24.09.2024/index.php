<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hurtownia z najlepszymi cenami</h1>
    </header>
    <main>
        <section id="left">
            <h2>Nasze ceny</h2>
            <table>
            <?php
            $sql=mysqli_connect("localhost","root","","sklep");
            $pyt="select nazwa, cena from towary limit 4";
            $res=mysqli_query($sql,$pyt);
            while($key = mysqli_fetch_row($res)){
                echo "<tr><td>".$key[0]."</td>";
                echo "<td>".$key[1]."</td></tr>";
            }
            mysqli_close($sql);
            ?>
            </table>
        </section>
        <section id="mid">
            <h2>Koszt zakupu</h2>
            <form action="#" method="post">
                <label for="opcje">Wybierz artykuł 
                    <select name="opcje" id="opcje">
                        <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                        <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                        <option value="Cyrkiel">Cyrkiel</option>
                        <option value="Linijka 30 cm">Linijka 30 cm</option>
                    </select>
                </label>
                <label for="ilosc">Liczba sztuk<input type="number" name="ilosc" id="ilosc" min=1 step=1></label>
                <button name="btn" value='btn'>OBLICZ</button>
                <?php
                
                if(isset($_POST['btn'])){
                $sql=mysqli_connect("localhost","root","","sklep");
                $thing=$_POST['opcje'];
                $pyt="select cena from towary where nazwa='$thing'";
                $res=mysqli_query($sql,$pyt);
                $cena=mysqli_fetch_row($res);
                $times=$_POST['ilosc'];
                $all=$times*$cena[0];
                echo "<p>wartość zakupów: $all</p>";
                mysqli_close($sql);}
            ?>
            </form>
        </section>
        <section id="right">
            <h2>Kontakt</h2>
            <img src="zakupy.png" alt="hurtownia" height="180px">
            <p>e-mail: <a href="hurt@poczta2.pl">hurt@poczta2.pl</a></p>
        </section>
    </main>
    <footer><h4>Witrynę wykonał 22</h4></footer>
</body>
</html>

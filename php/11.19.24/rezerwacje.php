<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kino "za rogiem"</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
<img src="baner.jpg" alt="baner" width="1000px" height="150px">
    </header>
    <main>
        <section class="left">
        <ul>
            <li><a href="index.html">strona główna</a></li>
            <li><a href="rezerwacje.php">rezerwacje</a></li>
        </ul>
        <hr>
        <form action="#" method="post">
            Data i godzina seansu <br>
            <input type="date" name="kladata"> <input type="time" name="kaltime"> <button type="submit">Pokaż</button></label>
        </form>
</section>
    <section class="right">
        <?php

        $conn=mysqli_connect('localhost','root','','kino');
        if($_POST){
        $kaldata=$_POST['kladata'];
        $kaltime=$_POST['kaltime'];
        if(!isset($kaldata) || !isset($kaldata)){
            echo "Podaj poprawną datę i godzinę";
        }
        else{
            
           $query=mysqli_query($conn," SELECT Miejsce,Rzad FROM `rezerwacje` where rezerwacje.Data='$kaldata' and Godzina='$kaltime' order by Rzad, Miejsce;");
            echo "EKRAN <br>";
            echo "<table>";
            $i=1;
            $wiersze=mysqli_fetch_all($query);
            while($i<=15){
                echo "<tr> <th>",$i+1,"</th>";
            $j=1;
                while($j<=20){
                $jest=false;
                    foreach($wiersze as $tab){
                        if($tab[0]==$j && $tab[1]==$i){
                    echo "<td class='zajete'>", $j,"</td>";
                    $jest=true;
                        }}
                
            
                    if(!$jest){
                    echo "<td class='wolne'>",$j,"</td>";
                    }
                    $j++;
                
                
            }
            
                
        echo "</tr>";
        $i++;}
        echo "</table>";
        }}
        ?>
</section>
    </main>
    <footer>
<h5>Egzamin INF.03 - Autor:rymsza</h5>
    </footer>
</body>
</html>
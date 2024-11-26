<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header><section class="first">Organize:Sierpień </section><section class="second"><form action="#" method="post">
        <label for="event">zapisz wydarzenie <input type="text" name="event"></label>
        <button type="submit" name="submit">ok</button></form>
    </section><section class="third"><img src="logo1.png" alt="Logo" ></section></header>
    <main>
    <?php
    $conn=mysqli_connect('localhost','root','','egzamin');
    $query=mysqli_query($conn,'SELECT dataZadania,wpis FROM `zadania` where miesiac="sierpien";');
    
        
    
    if($conn){
    if(isset($_POST['event'])){
        $event=$_POST['event'];
        $query1=mysqli_query($conn,"update zadania set wpis='$event' where dataZadania='2020-08-09';");
        
        $query=mysqli_query($conn,'SELECT dataZadania,wpis FROM `zadania` where miesiac="sierpien";');
        

    }
    while($wiersz=mysqli_fetch_array($query)){
            echo "<section><h5>$wiersz[0]</h5><p>$wiersz[1]</p></section>";
            }
}
    mysqli_close($conn);
    ?>
    </main>
</body>
</html>
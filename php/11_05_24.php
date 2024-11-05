
<?php
$serwer='localhost';
$login='root';
$haslo='';
$baza='Klienci';
$conn=mysqli_connect($serwer,$login,$haslo,$baza);
if(mysqli_connect_error()){
    exit("błąd połączenia z serwerem MYSQL.".mysqli_connect_error());
}
else{
    echo "połączono z serwerem bazy danych";
}
?>

<?php

$conn=mysqli_connect('localhost','root','','Klienci');
if(mysqli_connect_error()){
    exit("błąd połączenia z serwerem MYSQL.".mysqli_connect_error());
}
else{
    echo "połączono z serwerem bazy danych";
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,td{
        border:1px solid black;
        border-collapse:collapse;
    
    }
    </style>
</head>
<body>
    <?php
    $conn=mysqli_connect('localhost','root','','Klienci');
   if(!$conn)
   {
    echo"błąd połączeia";
   
    ?>
</body>
</html>
<?php
exit;
   }
   else{
    $zap=mysqli_query($conn,'SELECT * FROM klienci');
    if(!$zap){
        echo "błąd zapytania";

?>
</body>
</html>
<?php
mysqli_close($conn);
exit;
}
else{
    ?>
 <table>
    <tr>
        <td>id</td>
        <td>imie</td>
        <td>nazwisko</td>
        <td>miejsce</td>
</tr> 
<?php
while($wiersze=mysqli_fetch_row($zap)){
    echo "<tr>";
    echo "<td>$wiersze[0]</td>";
    echo "<td>$wiersze[1]</td>";
    echo "<td>$wiersze[2]</td>";
    echo "<td>$wiersze[3]</td>";
    echo "</tr>";
}
 //   while($tab=mysqli_fetch_array($zap)){
  //  echo "<ul>";
   // echo "<li>".$tab['Nazwisko']." ".$tab['Imie']." "."</li>";
   // echo "</ul>";
//}
//mysqli_close($conn);
//}
  mysqli_close($conn);
}
}
?>
 </table>
</body>
</html>



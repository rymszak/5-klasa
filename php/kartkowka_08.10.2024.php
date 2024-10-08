<?php
$tab=array();
$i=0;
while($i!=10){
array_push($tab,rand(5,25));

$i=$i+1;
}
foreach($tab as $key)
{
    echo "$key<br>";
}
echo "zd3<br>";
foreach($tab as $key){
    if($key%5==0){
        echo "$key dzieli 5 <br>"; 
    }
}
$suma=0;
echo "zd4<br>";
foreach($tab as $key){
    if($key>10){
        $suma++;
    }
}
echo "$suma liczb wiekszych od 10<br>zd5<br>";

$iloczyn=1;
for($i=3;$i<10;$i+=4){
$num=$tab[$i];
$iloczyn=$iloczyn*$num;
}
echo"iloczyn to $iloczyn<br>";

echo "zd6<br>";
$date=getdate();
$mies=array("XII","I","II","III","IV","V","VI","VII","VIII","IX","X","XI");
echo "Dzis jest ".date("d.").$mies[date("m")].date(".Y")." rok<br>Aktualna godzina to: ".date("g:i");
echo "<br>zd7 zatwierdz enter<br>";?>
<html>
<form action="#" method="get">
<input type="number" name="number">
</form>
<?php
$liczba=$_GET["number"];
if($liczba%3==0){
    echo "liczba jest podzielna przez 3";
}
else{
    echo "liczba nie jest podzielna przez 3";
}
?></html>
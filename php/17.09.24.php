<?php
$tab=array();
$sum=0;
for($i=0;$i<10 ;$i++){
    $tab[$i]=rand(1,10);
    // echo $tab[$i]. "<br>";w
}

$tmp=$tab[0];
foreach ($tab as $key=>$value){
    if($tmp>$value){
        $tmp=$value;
    }
}


foreach($tab as $key=>$value){
    $sum+=$value;
    echo $value."<br>";
}
echo "najmniejsza liczba to: ".$tmp;
// wyszukanie elementu wpisanego i ile razy

 $numtimes=0;
 $num=rand(1,10);

foreach($tab as $key=>$value)
{
    if($num==$value){
        $numtimes++;
    }
}
echo "<br>liczba $num pojawia się: $numtimes razy<br>";




?>





kartkówka
<?php
$tab=array();
for($i=0;$i<10;$i++){
    $tab[$i]=rand(1,20);
echo "<br> $tab[$i]";
}
$avg=0;

foreach($tab as $key => $value){
    $avg=$avg+$value;
}
$avg=$avg/10;
echo "<br>średnia to: $avg<br>";


echo "<br>zd2<br>";
$tab2=array();
$num=1;
for($i=0;$i<=100;$i++){
    $tab2[$i]=$num;
    $num++;
}
for($i=0;$i<=100;$i++){
   
    if($tab2[$i] %2 == 1 && $tab2[$i] %3 == 0){
    echo "<br>Liczba $tab2[$i] jest zgodna z założeniami<br>";
    }
}
echo "<br> zd3<br>";
$liczba1=rand(1,100);
echo "1 liczba to $liczba1<br>";
$liczba2=rand(1,100);
echo "2 liczba to $liczba2<br>";
if($liczba1%$liczba2==0){
    echo "liczby się dzielą się bez reszty";
}
else{
    echo "liczby się nie dzielą bez reszty";
}
?>


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

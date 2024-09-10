<?php
$a=10000000000;
if($a>0){
	echo "+";
}else{
	echo "-";
}
echo "<br>";
if($a%2==0){
	echo "jest parzysta";
}
else{echo "nie jest parzysta";}
echo "<br>";
$b=15;
if($a>$b)
	echo"a jest wieksze od b";
else 
	echo "b jest wiekszse od a";
echo "<br>";
$licznik=20;
while($licznik>=0)
{
	echo $licznik."<br>";
	$licznik=$licznik-2;
}
$a=rand(1,20);
$b=rand(1,20);
$c=rand(1,20);
$d=rand(1,20);
$e=rand(1,20);
echo $a ." ". $b." " . $c." ".$d . " ".$e . " ";
$add=$a+$b+$c+$d+$e;
echo "wynik dodawania =".$add."<br>";

$a=rand(1,5);
echo "liczba a to: ". $a."<br>";
$b=rand(1,10);
$wynik=1;
echo "liczba b to: ".$b."<br>";
while($b>0){
	$wynik=$wynik*$a;
	$b--;
	// echo "liczba b to: " . $b."<br>";	
}
echo "wynik to ". $wynik. "<br>";

?>

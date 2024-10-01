<?php

// funkcja time() otwarza aktualna godzine w liczbie od timestamp 1.01.'70 
echo time();
// getdate() / gatedate -do bierzącej tab asocjacyjna z danym czasem;
echo "<br>";
$data=getdate();
$dzien=$data["mday"];
$miesiac=$data["mon"];
$rok=$data["year"];
echo "data to : $dzien-$miesiac-$rok r<br>";
$godzina=$data["hours"];
$min=$data["minutes"];
$sec=$data["seconds"];
echo "aktualna godzina to $godzina:$min:$sec<br>";
// date() - odpowiednie parametry H - godzina, i - min, s - sekundy a-am/pm, A - AM/PM, c-format iso, d dzien z 0 na paoczatku,
//  d - dzien miesiaca, D dzien tygodnia w 3 letery, F- miesiac, g-12hzegar, G -format 24h, l-nazwa dnia tygodnia,
//  m- miesiac liczbowo z 0, y-rok
echo date("Y-m-d G:i:s‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ F l ")."<br>";

// skrypt w formie dzis jest wtorek 1 pazdzeirnik 2024 jest to 274 dzien roku i za 7h i 7 min koniec lekcji
$czas=0;
$minu=60-date("i");
$mies=date("F");
$tyg=date("l");
if($minu>0){
    $czas=15-date("G");
}
else{
    $czas=16-date("G");
}
if($mies=="October"){
    $mies="Październik";
}
if($tyg){
    $tyg="Wtorek";  
}
echo "<br>dziś jest ".$tyg."<br>";
echo $dzien." ".$mies." ".date("Y")."<br>";
echo "jest to ".$data["yday"]." dzień roku<br>";
echo "za $czas h i $minu min koniec lekcji";
// $page = $_SERVER['PHP_SELF'];
// $sec = "0.0001";
// header("Refresh: $sec; url=$page");

// mktime() 
$czas=mktime(16,30,0,10,24,2020);
echo "<br>data: dzien, miesiac, rok, godz:min <br>";
echo date("d-m-Y G:i", $czas)."<br>";
echo "data: rok mies dzien godz:min:sek <br>";
echo date("Y-m-d G:i:s", $czas);
function wypisz(){
    echo "<br>dzisiaj jest pikny dzeń<br>";
}
wypisz();
function sum($a,$b){
    $suma=$a+$b;
    echo "<br>suma $a i $b to $suma<br>";
}

sum(3,2);
function pierwsza($a){
    $i=2;
    if($a>=2){
    while($i!=$a){
        if($a%$i==0){
            echo "nie jest liczba pierwsza";
            return;
        }
        $i++;
        
    
    } }
    echo "jest liczba pierwsza";
    
}
pierwsza(4)
?>

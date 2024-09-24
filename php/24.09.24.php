<?php 
$tab=array();
for($i=0;$i<20;$i++)
{
    $tab[$i]=rand(1,50);
    echo $tab[$i].", ";
}
$dlugosc=count($tab);
echo ("<br> Długość tablicy wynosi: ".$dlugosc);

$tab=array("pon","wt","sr","czw","pt");
foreach($tab as $item)
{
    echo $item." ";
}

$tab=array(3,9,1,2,8,7,5,3,1);
echo "tab przed dodaniem: ";
foreach($tab as $key){
    echo $key.' ';
}
$suma=0;
echo "<br>tablica po zmianie<br>";
foreach($tab as $key){
$key=$key+2;
echo $key." ";
$suma=$suma+$key;
}
echo "suma to ".$suma;

$parzyste=0;
$nieparzyste=0;
foreach($tab as $key){
    if($key%2==0){
        $parzyste++;
    }
    else{
        $nieparzyste++;
    }
}
echo "parzystych jest: ". $parzyste. " a nieparzystych: ".$nieparzyste;







$tab=array("dzień 1"=>"pon",
            "dzień 2"=>"wt",
            "dzień 3"=>"sr",
            "dzień 4"=>"czw",
            "dzień 5"=>"pt",
            "dzień 6"=>"sob",
            "dzień 7"=>"niedz");
foreach($tab as $key=>$description){
    echo $key.": ".$description."<br>";
}

$tablica["imie"]="Jan";
$tablica["nazwisko"]="Kowalski";
$tablica["adres"]="polna 1";
echo $tablica["imie"]." ".$tablica["nazwisko"].", ul. ".$tablica["adres"]."n";


?>

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

 $tab[0]=array("miejscowosc" =>"Warszawa",
             "zaludnienie"=>2000000);

$tab[1]=array("miejscowosc" =>"Kraków",
             "zaludnienie"=>1000000);

$tab[2]=array("miejscowosc" =>"Poznań",
             "zaludnienie"=>450000);
             
$tab[3]=array("miejscowosc" =>"Katowice",
                "zaludnienie"=>600000);
                
$tab[4]=array("miejscowosc" =>"Toruń",
                "zaludnienie"=>700000);

$tab[5]=array("miejscowosc" =>"Białystok",
             "zaludnienie"=>650000);
foreach($tab as $elem){
    if($elem["zaludnienie"]>=600000 && $elem["zaludnienie"]<=700000){
        echo $elem["miejscowosc"].", <br>";
    }
}
echo "<br>to miejscowości z mieszkańcami >= 600000 ale <= 700000";

$cena=array('jogurt' =>"5,50zł",
            'banan'=>"3zł",
            'pączek'=>"9zł",
        'ser'=>"3,30zł");
rsort($cena);
foreach($cena as $key=>$description){
    echo $key.": ". $description."<br>";
}
$cena=array('jogurt','banan','pączek','ser');
if(in_array('jogurt',$cena,true)){
    echo "jewst";
}else 
{echo "nie ma";}



nl2br()-automatyczne wstawienie <br> na końcu linii

$tekst=("Litwo! Ojczyzno moja
Ty jesteś jak zdrowie, 
Ile trzeba cię cenić,
Ten tylko się dowie,
kto cię straił.");
echo "przed nl2br <br>".$tekst."<br>";
echo "po nl2br <br>".nl2br($tekst);

wordwrap(co zmienić,"kiedy ciąc(ile znaków)","czym ciąć np <br>",true (zostawia długie ciągi))
echo "po użyciu wordwrap<br>".wordwrap($tekst,20,"<br>",true);

mb_strtolower($tekst,"utf8");     -    pokaże tekst pomniejszony z polskimi znakami
stristr - sprawdza czy jest podciąg obojętny z wielkością 
substr() - sprawdza podciągów
strcmp("ciag1","ciag2") - porównaie ciągów
strlen()-długość str
mb_strlen()
?>

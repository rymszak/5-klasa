<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<style>
body{
	font-style:Georgia;
	text-align:center;
}
table,tr,td{
	border:2px solid blue;
}
header{
	background: #4BA3C7;
	color: white;
	height: 80px;
	font-size: 120%;
}

	</style>
</head>
<body>
<header>
<h1>Hurtownia z najlepszymi cenami</h1>
</header>
<aside class="left">
<h2>Nasze ceny</h2>
<table>
	
<?php
$conn=mysqli_connect('localhost','root','','sklep');
if(!$conn){
	echo "błąd";
	exit;
}
else{
$query=mysqli_query($conn,'SELECT nazwa,cena FROM `towary` limit 4;');
while($zap=mysqli_fetch_row($query)){
	echo "<tr> <td> $zap[0]</td><td>$zap[1]</td></tr>";
}
}

?>
</table>
</aside>	
<main>
	<h2>Koszt zakupu</h2>
	<form action="#" method="post">
		<label for="thing">Wybierz artykuł: <select name="thing" name="thing">
		<?php
$conn=mysqli_connect('localhost','root','','sklep');
if(!$conn){
	echo "błąd";
	exit;
}
else{
$query=mysqli_query($conn,'SELECT nazwa,cena FROM `towary`;');
while($zap=mysqli_fetch_row($query)){
	echo "<option value='$zap[0]'>$zap[0] - $zap[1] zł</option>";
}
}

?>
		</select></label>
		<label for="ilosc">Liczba sztuk: <input type="number" name="ilosc" id=""></label>
	<button type="submit" name="sub">oblicz</button>
	</form>
	<?php
	if(isset($_POST['sub'])){
	$cena=$_POST['thing'];
	$ile=$_POST['ilosc'];
	$conn=mysqli_connect('localhost','root','','sklep');
if(!$conn){
	echo "błąd";
	exit;
}
else{
$query=mysqli_query($conn,"SELECT cena FROM `towary` where nazwa='$cena';");
while($wiersza=mysqli_fetch_array($query)){
	$koszt="$wiersza[cena]";
	echo "cona to ".floatval($koszt)*floatval($ile);
	}
}}
	?>
</main>
<aside class="right">
<h2>Kontakt</h2>
<img src="zakupy.png" alt="hurtownia">
<p>e-mail: <a href="hurt@poczta2.pl">hurt@poczta2.pl</a></p>
</aside>
<footer>
	<h4>Witryne wykonał: 000000000000000</h4>
</footer>
</body>
</html>


<h1>Exo 5</h1>

<H2>Le résultat</H2>

<?PHP

$phrase1 = "Montant en francs :";
$phrase2 = "francs =";
$num1 = 100;
$tChange = 6.55957;
$conver = ($num1 / $tChange);
$total = round($conver,2);


echo "$phrase1 $num1 <br>";
echo "$num1 $phrase2 $total €";



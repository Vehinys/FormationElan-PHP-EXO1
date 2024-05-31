<h1>Exo 7</h1>

<H2>Le résultat</H2>

<?PHP

$age = 10;
$text1 = "L’enfant qui a ";
$text2 = "ans appartient à la catégorie : ";

echo "$text1 $age $text2";

if ($age >= 15 ) {
   echo " Error.";

}elseif($age >= 12 ) {
   echo "Cadet.";

}elseif ($age >= 10 ) {
   echo "Minime.";

}elseif ($age >= 8 ) {
   echo "Pupille.";

}elseif ($age >= 6 ) {
   echo "Poussin.";

}else {
   echo "Error.";
}




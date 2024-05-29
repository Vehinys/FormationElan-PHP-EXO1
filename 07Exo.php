<h1>Exo 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br><br>
Poussin : entre 6 et 7 ans<br>
Pupille : entre 8 et 9 ans<br>
Minime : entre 10 et 11 ans<br>
Cadet : à partir de 12 ans<br>
Si la catégorie n’est pas gérée, merci de le préciser.</p>
<p>Créer une fonction personnalisée permettant de générer des 
cases à cocher. On pourra préciser dans le tableau associatif 
si la case est cochée ou non. Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

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




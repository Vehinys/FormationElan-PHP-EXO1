<h1>Exo 4</h1>

<H2>Le résultat</H2>

<?PHP

$phrase = "Engage le jeu que je le gagne";
$suppEspace = str_replace(" ","", $phrase);
$suppAll = strtolower($suppEspace);
$phraseFinal = strrev($suppAll); 

if ($phraseFinal == $suppAll) {
   $pali = "est un palindrome";
} else { 
   $pali = "n'est pas un palindrome";
}

echo "$phrase $pali.";



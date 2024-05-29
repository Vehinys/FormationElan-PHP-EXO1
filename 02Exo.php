<h1>Exo 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>
<p>Soit le tableau suivant :
$capitales = [France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<H2>Le résultat</H2>

<?PHP

$phrase = "Notre formation DL commence aujourd'hui";
$nbWordCount = str_word_count($phrase);
Echo "La phrase : $phrase contient $nbWordCount mots.";


<h1>Exo 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». 
   Afficher l’ancienne et la nouvelle phrase.</p>
<p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. 
   Le lien devra s’ouvrir dans un nouvel onglet (_blank).</p>

<H2>Le résultat</H2>

<?PHP

$phrase = "Notre formation DL commence aujourd'hui.";
$word = str_replace("aujourd'hui","demain", $phrase);

Echo "$phrase <br>";
Echo $word;

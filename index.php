<?php

/*
 Ceci est un commentaire multiligne
*/

/* Idem */

$title = "Mon beau site :D";

// Ici, on importe le contenu du fichier _header.php qui comprends le début de mon html jusqu'au <body>
require("_header.php");

echo "<h1>Hello, World!</h1>"; 

// Ici, on importe le contenu du fichier _footer.php qui comprends la fin de notre html (scripts + fermeture de la balise body & html)
require("_footer.php");


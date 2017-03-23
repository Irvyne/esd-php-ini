<?php

/*
 Ceci est un commentaire multiligne
*/

/* Idem */

$title = "Mon beau site :D";

// Ici, on importe le contenu du fichier _header.php qui comprends le début de mon html jusqu'au <body>
require("_header.php");

echo "<h1>Hello, World!</h1>";



if (isset($_GET['submit'])) {
    $age = $_GET['age'];

    if ($age > 18) {
        echo "majeur";
    } elseif ($age == 18) {
        echo "Congrats, vous êtes majeur";
    } else {
        echo "mineur";
    }
}






//
//$ages = [0 => 15, 9 => 78, 2 => 34, 3 => 4, 4 => 99, 5 => 63];

$countries = [
    "France" => 66.6,
    "USA"    => 250,
    "China"  => 999,
];

//foreach ($countries as $country => $inhabitants) {
//    echo "<h1>$country: $inhabitants M habitants</h1>";
//}
//
//
//
//var_dump($countries);

?>

    <form action="" method="get">
        <div class="form-group">
            <label for="age">Age</label>
            <input name="age" type="number" class="form-control" id="age" placeholder="Entrez votre age (example: 18)">
        </div>

        <input name="submit" type="submit" class="btn btn-primary" value="Submit">
    </form>

<?php
// Ici, on importe le contenu du fichier _footer.php qui comprends la fin de notre html (scripts + fermeture de la balise body & html)
require("_footer.php");


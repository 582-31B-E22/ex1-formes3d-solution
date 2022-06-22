<?php 
// Enregistrer une fonction de rappel pour le chargement (inclusion) automatique 
// des fichiers de classes.
spl_autoload_register(function($nomClasse) {
    $nomFichier = $nomClasse.'.cls.php';
    if(file_exists('formes3d/'.$nomFichier)) {
        include_once 'formes3d/'.$nomFichier;
    }
});

// Tableau des instances de formes.
$formes = [];

// Instances de sphères
$formes[] = new Sphere(1);
$formes[] = new Sphere(22.75);

// Instances de pavés droits
$formes[] = new PaveDroit(1, 1, 1);
$formes[] = new PaveDroit(0.5, 1.75, 3.5555);

// Instances de cylindres
$formes[] = new Cylindre(1, 1);
$formes[] = new Cylindre(5.21, 3.3);

// Instances de cubes
$formes[] = new Cube(1);
$formes[] = new Cube(2650);
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Formes 3D - Tests</title>
</head>
<body>
    <h3>Liste des formes instanciées</h3>
    <ul>
        <!-- Affichage de l'info sur les formes -->
        <?php foreach($formes as $forme): ?>
            <li><?= $forme; ?></li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <!-- Trois comparaisons de formes -->
    <h3>Comparaisons de quelques paires de formes</h3>
    <h4>(Méthode <code>comparerAvec()</code> de la classe <code>Forme</code>)</h4>
    <ul>
        <li>
            Résultat de la comparaison du PaveDroit (#3) avec le Cylindre (#6) : 
            <?= $formes[2]->comparerAvec($formes[5]); ?>
            <br>Et donc, la forme #3 est &laquo; plus petite &raquo; que la forme #6.
        </li>
        <li>
            Résultat de la comparaison de la Sphere (#1) avec le Cylindre (#5) : 
            <?= $formes[0]->comparerAvec($formes[4]); ?>
            <br>Et donc, la forme #1 est &laquo; plus grande &raquo; que la forme #5.
        </li>
        <li>
            Résultat de la comparaison du PavéDroit (#3) avec le Cube (#7) : 
            <?= $formes[2]->comparerAvec($formes[6]); ?>
            <br>Et donc, la forme #3 est &laquo; égale &raquo; à la forme #7.
        </li>
    </ul>

    <hr>

    <!-- Tri des formes -->
    <h3>
        Liste des formes instanciées, triées en ordre descendant de &laquo; grandeur &raquo;
    </h3>
    <h4>(Fonction de comparaison basée sur la méthode <code>comparerAvec()</code>)</h4>
    <ul>
        <?php 
            // On effectue le tri du tableau à l'aide de la fonction "usort" de 
            // PHP (voir : https://www.php.net/manual/en/function.usort.php) 
            usort($formes, function($a, $b) {
                return $b->comparerAvec($a);
            });

            // On réaffiche les formes, cette fois-ci de la plus "grande" à la 
            // plus "petite".
            foreach($formes as $forme): 
        ?>
            <li><?= $forme; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // Créez un tableau $nombres contenant une liste de 10 nombres entiers au hasard (vous
    // pouvez utiliser la fonction rand() pour générer des nombres aléatoires).
    $nombres = [];
    for ($i = 0; $i < 10; $i++) {
        $nombres[] = rand(1, 100); // Génère un nombre aléatoire entre 1 et 100
    }

    // Écrivez une fonction afficherTableau qui prend en paramètre un tableau et affiche ses
    // éléments à l'écran.
    function afficherTableau($tableau) {
        echo "<p>Contenu du tableau :</p><ul>";
        foreach ($tableau as $element) {
            echo "<li>$element</li>";
        }
        echo "</ul>";
    }

    // Écrivez une fonction sommeTableau qui prend en paramètre un tableau et retourne la
    // somme de tous ses éléments
    function sommeTableau($tableau) {
        $somme = 0;
        foreach ($tableau as $element) {
            $somme += $element;
        }
        return $somme;
    }
    // Écrivez une fonction moyenneTableau qui prend en paramètre un tableau et retourne la
    // moyenne de ses éléments.
    function moyenneTableau($tableau) {
        $somme = sommeTableau($tableau);
        return $somme / count($tableau);
    }
    // Écrivez une fonction nombrePairs qui prend en paramètre un tableau et retourne le
    // nombre de nombres pairs dans le tableau
    function nombrePairs($tableau) {
        $compteur = 0;
        foreach ($tableau as $element) {
            if ($element % 2 == 0) {
                $compteur++;
            }
        }
        return $compteur;
    }
    // Utilisez ces fonctions pour afficher le tableau, sa somme, sa moyenne et le nombre de
    // nombres pairs
    afficherTableau($nombres);
    $somme = sommeTableau($nombres);
    echo "<p>La somme des éléments du tableau est : $somme</p>";
    $moyenne = moyenneTableau($nombres);
    echo "<p>La moyenne des éléments du tableau est : " . number_format($moyenne, 2) . "</p>";
    $nombrePairs = nombrePairs($nombres);
    ?>
</body>
</html>
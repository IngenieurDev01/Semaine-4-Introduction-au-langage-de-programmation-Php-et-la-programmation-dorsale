<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // Créez un tableau $nomsComplets contenant une liste de 5 noms complets sous forme de
    // chaînes de caractères (par exemple, "Alice Dupont", "Bob Martin", etc.).
    $nomsComplets = [
        "Alice Dupont",
        "Bob Martin",
        "Charlie Durand",
        "David Lefevre",
        "Eva Moreau"
    ];

    // Écrivez une fonction afficherNoms qui prend en paramètre un tableau de noms complets et
    // affiche chaque nom à L'écran.
    function afficherNoms($noms) {
        echo "<p>Liste des noms complets :</p><ul>";
        foreach ($noms as $nom) {
            echo "<li>$nom</li>";
        }
        echo "</ul>";
    }

    // Écrivez une fonction nomEnMajuscules qui prend en paramètre un nom complet (sous
    // forme de chaîne de caractères) et retourne le nom en majuscules
    function nomEnMajuscules($nom) {
        return strtoupper($nom);
    }
    // Écrivez une fonction prenomNom qui prend en paramètre un nom complet (sous
    // forme de chaîne de caractères) et retourne un tableau contenant le prénom et le nom
    // séparés.
    function prenomNom($nom) {
        $parties = explode(" ", $nom);
        return [
            'prenom' => $parties[0],
            'nom' => $parties[1] ?? ''
        ];
    }
    // Utilisez ces fonctions pour afficher la liste des noms, les noms en majuscules et les
    // prénoms de chaque personne.
    afficherNoms($nomsComplets);
    echo "<p>Noms en majuscules :</p><ul>";
    foreach ($nomsComplets as $nom) {
        echo "<li>" . nomEnMajuscules($nom) . "</li>";
    }
    echo "</ul>";
    echo "<p>Prénoms et noms :</p><ul>";
    foreach ($nomsComplets as $nom) {
        $resultat = prenomNom($nom);
        echo "<li>Prénom: " . $resultat['prenom'] . ", Nom: " . $resultat['nom'] . "</li>";
    }
    echo "</ul>";

    ?>
</body>
</html>
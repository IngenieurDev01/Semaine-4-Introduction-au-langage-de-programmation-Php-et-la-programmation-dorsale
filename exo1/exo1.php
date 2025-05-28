<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Question 1 : Les Bases du PHP -->
    <?php
    // Écrivez un script PHP simple qui affiche "Bonjour, monde !" dans un navigateur web.
    // Expliquez brièvement comment le script fonctionne.

    echo "Bonjour, monde !";
    // Ce script utilise la fonction `echo` de PHP pour afficher le texte "Bonjour, monde !" dans le navigateur.

    // Question 2 : Variables et Opérateurs
    // 2.1. Créez une variable en PHP pour stocker votre nom et une autre pour stocker votre âge.
    // Affichez ces variables dans une phrase.
    $nom = "Jean Dupont";
    $age = 25;
    echo "<p>Mon nom est $nom et j'ai $age ans.</p>";
    // 2.2. Utilisez un opérateur arithmétique pour calculer l'année de naissance en fonction de l'âge actuel.
    $annee_actuelle = date("Y");
    $annee_naissance = $annee_actuelle - $age; 
    echo "<p>Je suis né en $annee_naissance.</p>";

    // Question 3 : Structures de Contrôle
    // 3.1. Écrivez un script PHP qui utilise une structure de contrôle conditionnelle pour déterminer
    // si une personne est majeure ou mineure en fonction de son âge.
    if ($age >= 18) {
        echo "<p>Vous êtes majeur.</p>";
    } else {
        echo "<p>Vous êtes mineur.</p>";
    }
    // 3.2. Utilisez une boucle "for" pour afficher les nombres de 1 à 10.
    echo "<p>Les nombres de 1 à 10 sont :</p><ul>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<li>$i</li>";
    }
    echo "</ul>";

    // Question 4 : Fonctions
    // 4.1. Créez une fonction PHP qui calcule la somme de deux nombres passés en tant
    // qu'arguments.
    function somme($a, $b) {
        return $a + $b;
    }

    // 4.2. Écrivez une fonction qui génère un tableau HTML à partir d'un tableau PHP de noms et
    // d'âges.
    function genererTableauHTML($noms, $ages) {
        echo "<table border='1'><tr><th>Nom</th><th>Âge</th></tr>";
        for ($i = 0; $i < count($noms); $i++) {
            echo "<tr><td>{$noms[$i]}</td><td>{$ages[$i]}</td></tr>";
        }
        echo "</table>";
    }

    // Question 5 : Manipulation de Fichiers
    // 5.1. Écrivez un script PHP qui crée un fichier texte et y écrit un message.

    $fichier = 'message.txt';
    $message = "Ceci est un message enregistré dans un fichier texte.";
    file_put_contents($fichier, $message);
    echo "<p>Le message a été écrit dans le fichier <strong>$fichier</strong>.</p>";

    // 5.2. Modifiez le script pour lire le contenu du fichier et l'afficher dans le navigateur
    if (file_exists($fichier)) {
        $contenu = file_get_contents($fichier);
        echo "<p>Contenu du fichier : $contenu</p>";
    } else {
        echo "<p>Le fichier n'existe pas.</p>";
    }
    
    ?>
</body>
</html>
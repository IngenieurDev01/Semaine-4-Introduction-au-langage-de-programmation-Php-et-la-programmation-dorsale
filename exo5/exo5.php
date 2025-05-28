<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // utilisation de formulaires en PHP, avec les méthodes GET et POST
    // Question 1 : Création d'un Formulaire en PHP
    // 1.1. Créez une page HTML contenant un formulaire simple en utilisant la méthode POST. Le
    // formulaire devrait comprendre des champs pour le nom, l'adresse e-mail et un bouton de
    // soumission.
    echo '<form method="POST" action="">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <br>
            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" required>
            <br>
            <button type="submit">Soumettre</button>
    </form>';

    // Question 2 : Traitement des Données POST
    // 2.1. Écrivez un script PHP qui traite les données soumises via le formulaire de la question 1
    // (nom et adresse e-mail) et affiche ces données dans une autre page.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);

        echo "<h2>Données soumises :</h2>";
        echo "<p>Nom : $nom</p>";
        echo "<p>E-mail : $email</p>";
    }

    // Question 3 : Utilisation de la Méthode GET
    // 3.1. Modifiez le formulaire créé dans la question 1 pour utiliser la méthode GET au lieu de
    // POST
    echo '<form method="GET" action="">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <br>
            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" required>
            <br>
            <button type="submit">Soumettre</button>
    </form>';

    // Question 4 : Affichage des Données avec la Méthode GET
    // 4.1. Écrivez un script PHP qui utilise la méthode GET pour récupérer les données transmises via
    // le formulaire modifié dans la question 3 et les affiche dans une autre page.
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nom']) && isset($_GET['email'])) {
        $nom = htmlspecialchars($_GET['nom']);
        $email = htmlspecialchars($_GET['email']);

        echo "<h2>Données soumises via GET :</h2>";
        echo "<p>Nom : $nom</p>";
        echo "<p>E-mail : $email</p>";
    }
    
    ?>
</body>

</html>
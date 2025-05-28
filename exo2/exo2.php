<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // Créez un tableau $notes qui contient les notes de cinq étudiants pour un examen. Les notes
    // varient de 0 à 20.
    $notes = [15, 18, 12, 20, 10];
    
    // Ensuite, réalisez les opérations suivantes :
    // 1. Affichez la note maximale obtenue.
    $note_max = max($notes);
    echo "<p>La note maximale obtenue est : $note_max</p>";

    // 2. Affichez la note minimale obtenue.
    $note_min = min($notes);
    echo "<p>La note minimale obtenue est : $note_min</p>";

    // 3. Calculez la moyenne des notes et affichez-la avec deux decimales.
    $moyenne = array_sum($notes) / count($notes);
    echo "<p>La moyenne des notes est : " . number_format($moyenne, 2) . "</p>";
    
    // 4. Triez le tableau $notes par ordre décroissant des notes et affichez-le.
    rsort($notes);
    echo "<p>Les notes triées par ordre décroissant sont : " . implode(", ", $notes) . "</p>";
    ?>
</body>
</html>
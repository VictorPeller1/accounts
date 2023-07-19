<?php require './includes/_database.php';
require './vendor/autoload.php';
require 'index.php' ?>


<head>
    <title>Formulaire de mise à jour</title>
</head>

<body>
    <h1>Formulaire de mise à jour</h1>
    <form action="traitement.php" method="POST">
        <input type="hidden" name="id_transaction" value="id_transaction" />
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" /><br><br>
        <label for="amount">Montant :</label>
        <input type="text" name="amount" id="amount" /><br><br>
        <label for="date_transaction">Date :</label>
        <input type="date" name="date_transaction" id="date_transaction" /><br><br>
        <label for="id_category">Catégorie :</label>
        <select name="id_category" id="id_category">
            <!-- Option pour chaque catégorie -->
            <option value="1">Habitation</option>
            <option value="2">Travail</option>
            <option value="3">Cadeau</option>
        </select><br><br>
        <input type="submit" value="Mettre à jour" />
    </form>
</body>

</html>
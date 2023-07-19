<?php
require './includes/_database.php';
require './vendor/autoload.php';



// Récupérer les données du formulaire
$id_transaction = $_POST['id_transaction'];
$name = $_POST['name'];
$amount = $_POST['amount'];
$date_transaction = $_POST['date_transaction'];
$id_category = $_POST['id_category'];

// Préparer la requête de mise à jour
$query = $dbCo->prepare("UPDATE `transaction` SET `name` = ?, `amount` = ?, `date_transaction` = ?, `id_category` = ? WHERE `id_transaction` = ?");

// Exécuter la requête de mise à jour
$query->execute([$name, $amount, $date_transaction, $id_category, $id_transaction]);

// Vérifier si la mise à jour a réussi
if ($query->rowCount() > 0) {
    echo "La mise à jour a été effectuée avec succès.";
} else {
    echo "Une erreur s'est produite lors de la mise à jour.";
}






<?php

// use post as GlobalPost;

// require_once '../models/reservations.model.php';
function createReservation()
{
    // Récupération des données du formulaire
    $room_type = $_POST['room_type'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Validation des données
    if (empty($room_type) || empty($start_date) || empty($end_date)) {
        // Affichage d'une erreur si les données sont manquantes
        echo "Vous devez remplir tous les champs du formulaire.";
        return;
    }

    // Création de la réservation
    $reservation = new Reservation(null, $user_id, $room_id, $start_date, $end_date);
    $reservation->create();

    // Redirection vers la page de confirmation de réservation
    header('Location: /reservations/confirmation');
}

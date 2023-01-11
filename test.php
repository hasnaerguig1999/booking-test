<?php
require_once '../Controller/reservations.controller.php'


?>

<!-- Afficher toutes les réservations -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
  <label for="room_id">ID de la chambre:</label><br>
  <input type="text" id="room_id" name="room_id"><br>
  <label for="reservation_start">Date de début:</label><br>
  <input type="date" id="reservation_start" name="reservation_start"><br>
  <label for="reservation_end">Date de fin:</label><br>
  <input type="date" id="reservation_end" name="reservation_end"><br>
  <label for="number_of_guests">Nombre d'invités:</label><br>
  <input type="number" id="number_of_guests" name="number_of_guests"><br><br>
  <input type="submit" value="Envoyer">
</form>
    


<table>
  <tr>
    <th>ID de la réservation</th>
    <th>ID de la chambre</th>
    <th>Date de début</th>
    <th>Date de fin</th>
    <th>Nombre d'invités</th>
  </tr>
  <?php foreach ($reservations as $reservation): ?>
    <tr>
      <td><?php echo $reservation['reservation_id']; ?></td>
      <td><?php echo $reservation['room_id']; ?></td>
      <td><?php echo $reservation['reservation_start']; ?></td>
      <td><?php echo $reservation['reservation_end']; ?></td>
      <td><?php echo $reservation['number_of_guests']; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<!-- Afficher une seule réservation -->
<table>
  <tr>
    <th>ID de la réservation</th>
    <th>ID de la chambre</th>
    <th>Date de début</th>
    <th>Date de fin</th>
    <th>Nombre d'invités</th>
  </tr>
  <tr>
    <td><?php echo $reservations['reservation_id']; ?></td>
    <td><?php echo $reservations['room_id']; ?></td>
    <td><?php echo $reservations['reservation_start']; ?></td>
    <td><?php echo $reservations['reservation_end']; ?></td>
    <td><?php echo $reservations['number_of_guests']; ?></td>
  </tr>
</table>
  </body>
</html>


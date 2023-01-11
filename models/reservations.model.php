<?php

// Connect to the database
require_once '../database/db_connection.php';

class Reservation {
    
  // Add a new reservation to the database
  public function add($room_id, $reservation_start, $reservation_end, $number_of_guests) {
    $db = Database::connect();
    $stmt = $db->prepare("INSERT INTO reservations (room_id, reservation_start, reservation_end, number_of_guests) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("issi", $room_id, $reservation_start, $reservation_end, $number_of_guests);
    $stmt->execute();
  }
  
  // Get all reservations from the database
  public function getAll() {
    $db = Database::connect();
    $stmt = $db->prepare("SELECT * FROM reservations");
    $stmt->execute();
    $reservations = $stmt->get_result();
    $stmt->close();
    return $reservations;
  }
  
  // Get a single reservation from the database based on its ID
  public function get($reservation_id) {
    $db = Database::connect();
    $stmt = $db->prepare("SELECT * FROM reservations WHERE reservation_id = ?");
    $stmt->bind_param("i", $reservation_id);
    $stmt->execute();
    $reservation = $stmt->get_result();
    $stmt->close();
    return $reservation;
  }
  
  // Update a reservation in the database
  public function update($reservation_id, $room_id, $reservation_start, $reservation_end, $number_of_guests) {
    $db = Database::connect();
    $stmt = $db->prepare("UPDATE reservations SET room_id = ?, reservation_start = ?, reservation_end = ?, number_of_guests = ? WHERE reservation_id = ?");
    $stmt->bind_param("issii", $room_id, $reservation_end, $reservation_end, $number_of_guests, $reservation_id);
    $stmt->execute();
  }
  
  // Delete a reservation from the database
  public function delete($reservation_id) {
    $db = Database::connect();
    $stmt = $db->prepare("DELETE FROM reservations WHERE reservation_id = ?");
    $stmt->bind_param("i", $reservation_id);
    $stmt->execute();
  }
}

// Example usage:
$reservation = new Reservation();

// Add a new reservation
$reservation->add(1, '2022-01-01', '2022-01-07', 2);

// Get all reservations
$reservations = $reservation->getAll();

// Get a single reservation
$reservation = $reservation->get(1);

// Update a reservation
$reservation->update(1, 2, '2022-02-01', '2022-01-07', 2);

// Delete a reservation
$reservation->delete(1);

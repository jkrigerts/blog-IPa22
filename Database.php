<?php
// Izveidos savienojumu ar datu bāzi un šo to vēl...

class Database {
  public function execute() {
    $connection_string = "mysql:host=localhost;port=3306;dbname=blog_IPa22;user=root;password=root;charset=utf8mb4";
    $connection = new PDO($connection_string);
    // 1. Padot, sagatavot SQL vaicājumu
    $query = $connection->prepare("SELECT * FROM posts");

    // 2. Izpildīt SQL vaicājumu
    $query->execute();

    // 3. Saņemt datus no mySQL uz PHP un nosūtīt tālāk
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }
}
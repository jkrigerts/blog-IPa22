<?php

require "functions.php";

echo "Hi, IPa22 👋";

$connection_string = "mysql:host=localhost;port=3306;dbname=blog_IPa22;user=root;password=root;charset=utf8mb4";
$connection = new PDO($connection_string);
// 1. Padot, sagatavot SQL vaicājumu
$query = $connection->prepare("SELECT * FROM posts");

// 2. Izpildīt SQL vaicājumu
$query->execute();

// 3. Saņemt datus no mySQL uz PHP
$posts = $query->fetchAll();

dd($posts);



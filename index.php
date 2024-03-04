<?php
// Dabūt datus no datu bāzes un izvadīt tos HTML
require "functions.php";
require "Database.php";

echo "Hi, IPa22 👋";

$db = new Database();
$posts = $db->execute();

echo "<h1>Posts</h1>";

echo "<ol>";
foreach($posts as $post) {
  echo "<li>" . $post["title"] . "</li>";
}
echo "</ol>";

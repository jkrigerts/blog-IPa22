<?php
require "functions.php";
echo "Hi";

$url = parse_url($_SERVER["REQUEST_URI"])["path"];

// Ja lietotājs aiziet uz /,
// tad parādīt controllers/index.php
if ($url == "/") {
  require "controllers/index.php";
}
// Ja lietotājs aiziet uz /about,
// tad parādīt controllers/about.php
if ($url == "/about") {
  require "controllers/about.php";
}
// Ja lietotājs aiziet uz /story,
// tad parādīt controllers/story.php
if ($url == "/story") {
  require "controllers/story.php";
}
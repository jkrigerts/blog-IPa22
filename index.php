<?php
$url = parse_url($_SERVER["REQUEST_URI"])["path"];

// Ja lietotājs aiziet uz /,
// tad parādīt controllers/index.php
switch($url) {
  case "":
  case "/":
    require "controllers/index.php";
    break;
  case "/about":
    require "controllers/about.php";
    break;
  case "/story":
    require "controllers/story.php";
    break;
  default:
    http_response_code(404);
    require "controllers/404.php";
}

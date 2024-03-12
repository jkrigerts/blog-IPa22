<?php
// Dabūt datus no datu bāzes un izvadīt tos HTML
require "functions.php";
$config = require "config.php";
require "Database.php";

echo "Hi, IPa22 👋";

$db = new Database($config);

$query_string = "SELECT * FROM posts";
$params = [];
if (isset($_GET["id"]) && $_GET["id"] != "") {
  // .= paņem iepriekšējo vērtību un pieliek WHERE klāt ❤️
  $query_string .= " WHERE id=:id";
  $params[":id"] = $_GET["id"];
} 

if (isset($_GET["category"]) && $_GET["category"] != "") {
  // .= paņem iepriekšējo vērtību un pieliek WHERE klāt ❤️
  $query_string .= " JOIN categories ON posts.category_id = categories.id WHERE categories.name=:category";
  $params[":category"] = $_GET["category"];
}
$posts = $db->execute($query_string, $params);


?>

<form>
  <input name='id'/>
  <button>Filter by ID</button>
</form>

<form>
  <input name='category' value='<?= ($_GET["category"] ?? '') ?>'/>
  <button>Filter by Category</button>
</form>


<h1>Posts</h1>

<ol>
<?php foreach($posts as $post) { ?>
  <li> <?= $post["title"] ?> </li>
<?php } ?>
</ol>



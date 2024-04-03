<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
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
  <li>
    <a href="/show?id=<?= $post["id"] ?>"><?= htmlspecialchars($post["title"]) ?></a>
    <form class="delete-form" method="POST" action="/delete">
      <input type="hidden" name="id" value="<?= $post["id"] ?>" />
      <button>&times;</button>
    </form>
  </li>
<?php } ?>
</ol>

<?php require "views/components/footer.php" ?>

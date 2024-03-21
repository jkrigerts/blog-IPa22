
<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<h1>Create a New Post ❤️</h1>

<form method="POST">
  <label>
    <span>Title:</span>
    <input name="title"/>
  </label>
  <label>
    <span>Category ID:</span>
    <select name="category_id">
      <option value="1">sport</option>
      <option value="2">music</option>
      <option value="3">food</option>
    </select>
  </label>
  <button>Save</button>
</form>


<?php require "components/footer.php" ?>
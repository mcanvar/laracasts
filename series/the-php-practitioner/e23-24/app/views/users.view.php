<?php require 'partials/head.php'; ?>

  <h1>Submit Your Name</h1>
  <form action="users" method="post">
    <input type="text" name="name" value="">
    <button type="submit">Submit</button>
  </form>

<hr>

  <h1>My Visitors</h1>
  <ul>
    <?php foreach($visitors as $visitor) : ?>
      <li>
        <?= $visitor->name ?>
      </li>
    <?php endforeach; ?>
  </ul>
<?php require 'partials/footer.php'; ?>

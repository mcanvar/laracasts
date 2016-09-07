<?php require 'partials/head.php'; ?>

  <h1>Submit Your Name</h1>
  <form action="names" method="post">
    <input type="text" name="name" value="">
    <button type="submit">Submit</button>
  </form>

<hr>

  <h1>My Tasks</h1>
  <ul>
    <?php foreach($tasks as $task) : ?>
      <?php if($task->isCompleted()) : ?>
        <strike>
          <li><?= $task->getDescription(); ?></li>
        </strike>
      <?php else : ?>
        <li><?= $task->getDescription(); ?></li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>
<?php require 'partials/footer.php'; ?>

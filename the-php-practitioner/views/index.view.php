<?php require 'partials/head.php'; ?>
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

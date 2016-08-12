<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Class work</title>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="about">About Us</a></li>
        <li><a href="contact">Contact Us</a></li>
      </ul>
    </nav>

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
  </body>
</html>

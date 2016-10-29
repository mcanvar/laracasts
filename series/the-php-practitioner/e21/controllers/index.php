<?php

$tasks = $app['builder']->getAll('todos', 'Task');
$visitors = $app['builder']->getAll('visitors');

require 'views/index.view.php';

<?php

$tasks = $app['builder']->getAll('todos', 'Task');

require 'views/index.view.php';

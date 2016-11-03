<?php

use App\Core\{App, Request, Router};

$app = [];

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
  Connector::connect(App::get('config')['database'])
));

function view($name, $data = [])
{
  extract($data);
  return require 'app/views/' . $name . '.view.php';
}

function redirect($path)
{
  header("Location: /{$path}");
}

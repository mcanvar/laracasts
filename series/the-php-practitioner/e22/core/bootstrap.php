<?php

$app = [];

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
  Connector::connect(App::get('config')['database'])
));

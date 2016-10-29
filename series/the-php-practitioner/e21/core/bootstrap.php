<?php

$app = [];

$app['config'] = require 'config.php';

$app['builder'] = new QueryBuilder(
  Connector::connect($app['config']['database'])
);

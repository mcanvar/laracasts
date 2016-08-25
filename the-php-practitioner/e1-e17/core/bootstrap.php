<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Request.php';
require 'core/Router.php';
require 'core/database/Connector.php';
require 'core/database/QueryBuilder.php';
require 'core/functions.php';
require 'core/Task.php';

$app['builder'] = new QueryBuilder(
  Connector::connect($app['config']['database'])
);

<?php

if(isset($_POST['name']))
{
  if(! $app['builder']->insert('visitors', ['name' => $_POST['name']]))
  {
    echo 'Could not inserted!';
  }
  echo 'You type ' . $_POST['name'] . ' and it is succesfully inserted!';
}
else
{
    echo 'The post request could not succeed!';
}

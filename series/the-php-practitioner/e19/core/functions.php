<?php

function dd($value='')
{
  echo '<pre>';
  die(var_dump($value));
  echo '</pre>';
}

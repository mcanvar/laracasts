<?php

function do_sth()
{
  throw new Exception('Hello Exception');
}

try {
  do_sth();
} catch (Exception $e) {
  echo $e->getMessage();
}

<?php

function flash($message, $level = 'info')
{
  Session::flash('f_message', $message);
  Session::flash('f_message_level', $level);
}

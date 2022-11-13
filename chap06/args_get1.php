<?php
function sum() {
  $result = 0;
  $args = func_get_args();
  foreach($args as $arg) {
    $result += $arg;
  }
  return $result;
}
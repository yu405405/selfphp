<?php
function sum() {
  $result = 0;
  for($i = 0; $i < func_num_args(); $i++) {
    $result += func_get_arg($i);
  }
  return $result;
}
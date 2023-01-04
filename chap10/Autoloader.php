<?php

spl_autoload_register(function($name) {
  require_once "{$name}.php";
});

// spl_autoload_register(function($name) {
//   require_once "{$name}.php";
// });
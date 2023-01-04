<?php

require_once 'MyClass.php';

$cls = new MyClass();
foreach($cls as $key => $value) {
  print "{$key}:{$value} <br>";
}

print "<hr>";
$cls->showProperty();

// require_once 'MyClass.php';

// $cls = new MyClass();
// foreach ($cls as $key => $value) {
//   print "{$key}：{$value} <br />";
// }
// print '<hr />';
// $cls->showProperty();
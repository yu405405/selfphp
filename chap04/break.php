<?php
$sum = 0;
for($i = 1; $i <= 100; $i++) {
  $sum += $i;
  print "{$sum} <br>";
  if($sum > 1000) {
    break;
  };
}
print "合計が1000を超えるのは、1〜{$i}を加算した時です。です。";
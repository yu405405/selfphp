<?php
// declare(strict_types = 1);
function getTriangle(float $base, float $height): float {
  return $base * $height;
}
$area = getTriangle(8, "10");
print "三角形の面積は{$area}です。";

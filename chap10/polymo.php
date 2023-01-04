<?php

// require_once 'Triangle.php';
require_once 'Square.php';
require_once 'interface/Triangle.php';

// $tri = new Triangle(5, 20);
$squ = new Square(2, 60);
$itri = new Triangle(10, 10);

// print "{$tri->getArea()}";
print "{$squ->getArea()}";
print "{$itri->getArea()}";

// require_once 'Triangle.php';
// require_once 'Square.php';

// $tri = new Triangle(5, 10);
// $squ = new Square(5, 10);
// print "三角形の面積：{$tri->getArea()} <br />";
// print "四角形の面積：{$squ->getArea()}";

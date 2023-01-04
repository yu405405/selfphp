<pre>
<?php
require_once 'Person.php';

$p1 = new Person('太郎', '鈴木');
$p2 = clone $p1;
$p2->firstName = '花子';
$p2->lastName = '田中';
print_r($p1);
print_r($p2);

// require_once 'Person.php';

// $p1 = new Person('リオ', '山田');
// $p2 = $p1;
// // $p2 = clone $p1;
// $p2->firstName = '奈美';
// $p2->lastName = '掛谷';
// print_r($p1);
// print_r($p2);
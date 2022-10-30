<pre>
<?php
$ary1 = [1, 3, 5];
$ary2 = [2, 3, 6];
print_r(array_merge($ary1, $ary2));

$assoc1 = ['Apple' => 'Red', 'Orange' => 'Yellow', 'Melon' => 'Green'];
$assoc2 = ['Grape' => 'Purple', 'Apple' => 'Green', 'Strawberry' => 'Red'];
print_r(array_merge($assoc1, $assoc2));
print_r(array_merge_recursive($assoc1, $assoc2));
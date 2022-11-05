<?php
$data = ['高江', '青木', '片渕'];
array_push($data, '山田', '土井');
print_r($data);
array_pop($data);
print_r($data);
array_shift($data);
print_r($data);
array_unshift($data, '木下', '山本');
print_r($data);
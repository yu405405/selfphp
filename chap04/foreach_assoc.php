<?php
$data = [
  '高江' => '男',
  '掛谷' => '女',
  '日尾' => '男',
  '薄井' => '女',
  '和田' => '男'
];
foreach($data as $name => $gender) {
  print "{$name}は{$gender}です<br>";
}
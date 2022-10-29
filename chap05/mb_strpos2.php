<?php
$str = 'にわにはにわにわとりがいる';
print mb_strpos($str, 'にわ') . '<br>';
if(mb_strpos($str, 'にわ') !== false) {
  print '文字列が見つかりました。';
};
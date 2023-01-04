<?php

require_once 'Person.php';
require_once 'FriendList.php';

$list = new FriendList();
$list->add(new Person('太郎', '田中'));
$list->add(new Person('花子', '田中'));
$list->add(new Person('次郎', '田中'));

print $list(0);

// require_once 'Person.php';
// require_once 'FriendList.php';

// $list = new FriendList();
// $list->add(new Person('太郎', '山田'));
// $list->add(new Person('奈美', '掛谷'));
// $list->add(new Person('賢', '高江'));

// print $list(1);
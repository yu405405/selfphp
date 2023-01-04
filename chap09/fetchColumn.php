<?php
require_once '../DbManager.php';

$db = getDb();
$stt = $db->query('SELECT COUNT(*) FROM member');
print "件数：{$stt->fetchColumn()}件";
<pre>
<?php
require_once '../DbManager.php';

$db = getDb();
$stt = $db->query('SELECT * FROM member ORDER BY id DESC');
print_r($stt->fetchAll(PDO::FETCH_ASSOC));
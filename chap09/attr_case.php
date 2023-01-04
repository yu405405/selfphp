<pre>
<?php
require_once '../DbManager.php';

$db = getDb();
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
print_r($db->query('SELECT * FROM member')->fetchAll(PDO::FETCH_ASSOC));
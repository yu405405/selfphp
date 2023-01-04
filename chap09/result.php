<?php
require_once '../DbManager.php';
require_once '../Encode.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>結果セット</title>
</head>
<body>
<table border="1">
<tr>
  <th>id</th><th>名前</th><th>性別</th><th>年齢</th><th>入会日</th>
</tr>
<?php
try {
  $db = getDb();
  $stt = $db->prepare('SELECT * FROM member ORDER BY id DESC');
  $stt->execute();
  $stt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stt as $row) {
  // while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
  //foreach($stt as $row) { 
?>
  <tr>
    <td><?=e($row['id']) ?></td>
    <td><?=e($row['nam']) ?></td>
    <td><?=e($row['sex']) ?></td>
    <td><?=e($row['old']) ?></td>
    <td><?=e($row['enter']) ?></td>
  </tr>
<?php
  }
} catch(PDOException $e) {
  print "エラーメッセージ：{$e->getMessage()}";
}
?>
</table>
</body>
</html>
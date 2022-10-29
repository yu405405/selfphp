<pre>
<?php
$str = ['PHPは良い言語です', 'PHPは良いサーバ実行環境です。'];
$src = ['PHP', '良い'];
$rep = ['PHP7'];
print_r (str_replace($src, $rep, $str, $cnt));
print "{$cnt}個のテキストを置換しました。";
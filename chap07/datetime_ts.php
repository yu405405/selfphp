<?php
$now = new DateTime();
$now->setTimeStamp(time());
print $now->format('Y年m月n日 H:i:s');
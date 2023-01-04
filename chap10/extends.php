<?php

require_once 'BusinessPerson.php';

$bp = new BusinessPerson('太郎', '鈴木');
$bp->work();
$bp->show();

// require_once 'BusinessPerson.php';

// $bp = new BusinessPerson('祥寛', '山田');
// $bp->work();
// $bp->show();
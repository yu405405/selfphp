<?php
header('Expires: Sun, 15 Jan 1970 00:00:00 GMT');
// header('Expires: Sun, 15 Jan 1970 00:00:00 GMT');
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . 'GMT');
// header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
// header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0, false');
// header('Cache-Control: post-check=0, pre-check=0', false);

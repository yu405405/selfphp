<pre>
<?php
var_dump(is_int(181));
var_dump(is_int('aaa'));
var_dump(is_numeric('191'));
var_dump(is_float(1.5E7));
var_dump(is_resource(fopen('access.log', 'rb')));
var_dump(is_null(''));
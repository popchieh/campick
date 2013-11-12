<?php

$user = '645198_admin';
$passwd = 'mis101';

$link = mysql_connect('localhost', $user, $passwd);
if (!@$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';

mysql_select_db("campick_99k_dbcp");
 
?> 
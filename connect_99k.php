<?php

$user = '803730_admin';
$passwd = '26608218';

$link = mysql_connect('localhost', $user, $passwd);
if (!@$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';

mysql_select_db("campick_99k_dbcp");
 
?> 
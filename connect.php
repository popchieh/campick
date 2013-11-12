<?php

$user = 'root';
$passwd = 'root';

$link = mysql_connect('localhost', $user, $passwd);
if (!@$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';

mysql_select_db("dbcp");
 
?> 
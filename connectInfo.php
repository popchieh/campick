<?php
    $DBUSER = 'db_99_01';
    $DBPASS = 'db01_36202';
    $db = 'ORACLE' ;
	
   $ORCL =
  "(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = 140.117.74.204)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = orcl.mis.nsysu.edu.tw)
    )
  )";
    $conn = oci_connect('$DBUSER' ,'$DBPASS' ,$ORCL)or die("³s½u¿ù»~!");
?>

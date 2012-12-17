<?php
session_start(); 
session_destroy();
//echo 'µn¥X¤¤';
echo "<script language=javascript> 
     top.leftFrame.location.reload();</script>";
echo "<meta http-equiv =refresh content=0.5;url=index.html />";
?>
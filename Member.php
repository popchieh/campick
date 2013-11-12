<?php
include("connect.php");

$SNAME = $_POST["SNAME"];
$SADDRESS = $_POST["SADDRESS"];
$SPHONE = $_POST["SPHONE"];
$SMAIL = $_POST["SMAIL"];
$SCHOOL = $_POST["SCHOOL"];
$BIRTH = $_POST["BIRTH"];
$ANAMNESIS = $_POST["ANAMNESIS"];
                     
$GUARDIAN = $_POST["GUARDIAN"];
$GUARDIANPHONE = $_POST["GUARDIANPHONE"];
$SCHOOLLOCATION = $_POST["SCHOOLLOCATION"];
$SPWD = $_POST["SPWD"];
$SACCOUNT = $_POST["SACCOUNT"];
$sID = $_POST["SID"];
$SEX = $_POST["SEX"];


    $stmt = mysql_query("select count(SNO) from STUDENT");   //主鍵值+1

    $rk = mysql_fetch_array($stmt);

	$k1 = $rk[0];
	
	$k1 = $k1 + 1;
                 
 
//插入註冊會員資料到資料庫中
$sql = "INSERT INTO STUDENT VALUES('$k1', '$sID', '$SNAME', '$SEX', '$BIRTH', '$SADDRESS', '$SPHONE', '$SMAIL', '$SCHOOL', '$SCHOOLLOCATION', '$GUARDIAN', '$GUARDIANPHONE', '$ANAMNESIS', '$SACCOUNT', '$SPWD')";
mysql_query($sql);


echo "<script language=javascript> alert(\"註冊成功!\");
	      window.location.replace(\"Login_Check.html\");
	      top.leftFrame.location.reload();
	      </script>";		 		  	

mysql_close($link);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	</body>
</html>

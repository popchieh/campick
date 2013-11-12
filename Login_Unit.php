<?php

session_start();

include ('connect.php');

$UACCOUNT = $_POST["uaccount"];
$UPWD = $_POST["upwd"];

$sql = "SELECT * FROM UNIT WHERE UACCOUNT = '$UACCOUNT' AND UPWD = '$UPWD'";
$result = mysql_query($sql);
$get = mysql_fetch_array($result);

if($get){   //驗證是否登入成功

	$_SESSION['account'] = $UACCOUNT;
	$_SESSION['login'] = "Already_Login";

	$sql2 = "SELECT UNO FROM UNIT WHERE UACCOUNT = '".$UACCOUNT."'";
	$result2 = mysql_query($sql2);

	while ($row = mysql_fetch_assoc($result2)){  //抓出登入者的編號

		$_SESSION['uno'] = $row["UNO"];

	}

	echo "<script language=javascript>window.location.replace(\"Unit_Portal.php\");</script>";

}else{

	echo "<script language=javascript> alert(\"登入失敗！請確認您的帳號及密碼！\");
	          window.location.replace(\"Login_Unit.html\");</script>";

}

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

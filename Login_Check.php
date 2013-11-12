<?php

session_start();

include ('connect.php');

$SACCOUNT = $_POST["saccount"];
$SPWD = $_POST["spwd"];

$sql = "SELECT * FROM STUDENT WHERE SACCOUNT = '$SACCOUNT' AND SPWD = '$SPWD'";
$result = mysql_query($sql);
$num = mysql_fetch_array($result);

if($num){   //驗證是否登入成功

	$_SESSION['account'] = $SACCOUNT;
	$_SESSION['login'] = "Already_Login";
	$_SESSION['uno'] = $num["UNO"];

	$sql2 = "SELECT SNO FROM STUDENT WHERE SACCOUNT = '".$SACCOUNT."'";
	$result2 = mysql_query($sql2);

	while ($row = mysql_fetch_assoc($result2)){  //抓出登入者的編號

		$_SESSION['sno'] = $row["SNO"];

	}

	echo "<script language=javascript>window.location.replace(\"Student_Portal.php\");</script>";

}else{

	echo "<script language=javascript> alert(\"登入失敗！請確認您的帳號及密碼！\");
	          window.location.replace(\"Login_Check.html\");</script>";

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

<?php
include ('connect.php');

$UHOST = $_POST["UHOST"];
$USCHOOL = $_POST["USCHOOL"];
$UDEPT = $_POST["UDEPT"];
$UADDRESS = $_POST["UADDRESS"];
$UPHONE = $_POST["UPHONE"];
$UMAIL = $_POST["UMAIL"];
                     
$UPWD = $_POST["UPWD"];
$UACCOUNT = $_POST["UACCOUNT"];

    $stmt = mysql_query("select count(UNO) from UNIT");   //主鍵值+1
	
	$k = mysql_fetch_array($stmt);
	
	$k1 = $k[0];
  
	$k1 = $k1 + 1;
                      
 

if($UHOST && $USCHOOL && $UDEPT && $UADDRESS && $UPHONE && $UMAIL && $UPWD && $UACCOUNT) {                                                                                                                                
	//插入註冊會員資料到資料庫中
	$sql = "INSERT INTO UNIT VALUES('$k1', '$UHOST', '$UPHONE', '$USCHOOL', '$UDEPT', '$UADDRESS', '$UMAIL', '$UACCOUNT', '$UPWD')";
	mysql_query($sql);
                            
	 echo "<script language=javascript> alert(\"註冊成功!\");
      window.location.replace(\"Login_Unit.html\");
      top.leftFrame.location.reload();
      </script>";		

}else{

     echo "<script language=javascript> alert(\"全部欄位皆不能留白!!\");
	      window.location.replace(\"MemberUnit.html\");
	      top.leftFrame.location.reload();
	      </script>";	



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

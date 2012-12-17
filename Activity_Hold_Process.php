<?php

session_start();

include("connect.php");

if($_SESSION['account'] == NULL)
{
     echo "<script language=javascript> alert(\"請先登入!!\");
	      window.location.replace(\"Login_Unit.html\");
	      top.leftFrame.location.reload();
	      </script>";		 		  		  
}

$TITLE = $_POST["TITLE"];
$ADATE = $_POST["ADATE"];
$LOCATION = $_POST["LOCATION"];
$FEE = $_POST["FEE"];
$CONTENT = $_POST["CONTENT"];
$WEBSITE = $_POST["WEBSITE"];
$DEADLINE = $_POST["DEADLINE"];
$AHOST = $_POST["AHOST"];
$APHONE = $_POST["APHONE"];

$UNO = $_SESSION['uno'];


if( $_POST["TITLE"] != null && $_POST["LOCATION"]!= null && $_POST["FEE"] != null
    && $_POST["CONTENT"] != null && $_POST["WEBSITE"] != null && $_POST["AHOST"] != null
	  && $_POST["APHONE"] != null)    
{

$stmt = mysql_query("select count(aNo) from ACTIVITY");   //活動主鍵值+1
//oci_define_by_name($stmt, "K1", $k1);
$kt = mysql_fetch_array($stmt);
/*
while (oci_fetch($stmt)) {
	
		$k1 = $k1 + 1;

}   
*/
$k1 = $kt[0];
$k1 = $k1+1;

//$sql = "INSERT INTO ACTIVITY VALUES('$k1', to_date('$ADATE', 'yyyy-mm-dd'), to_date('$DEADLINE', 'yyyy-mm-dd'), '$TITLE', '$AHOST', '$APHONE', '$FEE', '$LOCATION', '$WEBSITE', '$CONTENT')";
$sql = "INSERT INTO ACTIVITY VALUES('$k1', '$ADATE', '$DEADLINE', '$TITLE', '$AHOST', '$APHONE', '$FEE', '$LOCATION', '$WEBSITE', '$CONTENT')";
$result = mysql_query($sql);

$sql2 ="INSERT INTO HOLD VALUES('$k1', '$UNO')";
$result2 = mysql_query($sql2);

	echo "<script language=javascript> alert(\"活動新增成功!\");
	      window.location.replace(\"Unit_Portal.php\");
	      top.leftFrame.location.reload();
	      </script>";		


}	else{
	
	echo "<script language=javascript> alert(\"有欄位未填!\");
	      window.location.replace(\"Activity_Hold.php\");
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

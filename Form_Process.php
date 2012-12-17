<?php
session_start();

include("connect.php");

if($_SESSION['account'] == NULL)
{
     echo "<script language=javascript> alert(\"請先登入!!\");
	      window.location.replace(\"Login_Check.html\");
	      top.leftFrame.location.reload();
	      </script>";		 		  		  
}

$SELFINTRO = $_POST["SELFINTRO"];
$MOTIVE = $_POST["MOTIVE"];
$CLUBEXPERIENCE = $_POST["CLUBEXPERIENCE"];

$stmt = mysql_query("select count(*) as K1 from FORM");   //報名表主鍵值+1
$rk = mysql_fetch_array($stmt);
$k1 = $rk[0];
$k1 = $k1 + 1;// why +2?

$SNO = $_SESSION['sno'];     
$ANO = $_SESSION['ANO'];  
$stamps = time();
$today = getdate($stamps);  
$month = $today["mon"];
$day = $today["mday"];
$year = $today["year"];
$total = $year.'-'.$month.'-'.$day;
        

$sql = "INSERT INTO FORM VALUES('$k1', '$total', '$MOTIVE', '$SELFINTRO', '$CLUBEXPERIENCE', '$ANO', '$SNO')";

mysql_query($sql);

 echo "<script language=javascript> alert(\"報名成功!\");
	  window.location.replace(\"Student_Portal.php\");
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

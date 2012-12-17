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

if( $_POST["UHOST"] != null && $_POST["UADDRESS"]!= null && $_POST["USCHOOL"] != null
    && $_POST["UDEPT"] != null && $_POST["UPHONE"] != null && $_POST["UMAIL"] != null)    // SPW(密碼)未寫

{
                                                                
if($_POST["UHOST"] != $_SESSION['update_Info']['UHOST'] || $_POST["UADDRESS"] != $_SESSION['update_Info']['UADDRESS'] || $_POST["USCHOOL"] !=  $_SESSION['update_Info']['USCHOOL']
    || $_POST["UDEPT"] !=  $_SESSION['update_Info']['UDEPT'] || $_POST["UPHONE"] !=  $_SESSION['update_Info']['UPHONE'] || $_POST["UMAIL"] !=  $_SESSION['update_Info']['UMAIL'])
	{                                                                                                                                
		$sql = "UPDATE UNIT SET UHOST ='".$_POST["UHOST"]."', UADDRESS = '".$_POST["UADDRESS"]."', USCHOOL = '".$_POST["USCHOOL"]."', UDEPT = '".$_POST["UDEPT"]."', UPHONE = '".$_POST["UPHONE"]."', UMAIL = '".$_POST["UMAIL"]."' WHERE UACCOUNT = '".$_SESSION['account']."'";
	    $result = mysql_query($sql);     
                                
		  echo "<script language=javascript> alert(\"更改完成!\");
	      window.location.replace(\"Unit_Portal.php\");
	      top.leftFrame.location.reload();
	      </script>";
		  
	}
	   

}else{

     echo "<script language=javascript> alert(\"全部欄位皆不能留白!!\");
	      window.location.replace(\"Unit_Update.php\");
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

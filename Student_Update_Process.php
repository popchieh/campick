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

if( $_POST["SADDRESS"]!= null
    && $_POST["SPHONE"] != null && $_POST["SMAIL"] != null && $_POST["SCHOOL"] != null
	&& $_POST["ANAMNESIS"] != null && $_POST["GUARDIAN"] != null
	&& $_POST["GUARDIANPHONE"] != null && $_POST["SCHOOLLOCATION"] != null)    // BIRTH 與 SPW(密碼)未寫

{
                                                                
if($_POST['SNAME'] != $_SESSION['update_Info']['SNAME'] || $_POST["SADDRESS"] != $_SESSION['update_Info']['SADDRESS'] || $_POST["SID"] !=  $_SESSION['update_Info']['SID']
    || $_POST["SPHONE"] !=  $_SESSION['update_Info']['SPHONE'] || $_POST["SMAIL"] !=  $_SESSION['update_Info']['SMAIL'] || $_POST["SCHOOL"] !=  $_SESSION['update_Info']['SCHOOL']
	|| $_POST["ANAMNESIS"] !=  $_SESSION['update_Info']['ANAMNESIS'] || $_POST["GUARDIAN"] !=  $_SESSION['update_Info']['GUARDIAN']
	|| $_POST["GUARDIANPHONE"] !=  $_SESSION['update_Info']['GUARDIANPHONE'] || $_POST["SCHOOLLOCATION"] !=  $_SESSION['update_Info']['SCHOOLLOCATION'])
	{                                                                                                                                
		$sql = "UPDATE STUDENT SET SNAME ='".$_POST["SNAME"]."', SADDRESS = '".$_POST["SADDRESS"]."', SID = '".$_POST["SID"]."', SPHONE = '".$_POST["SPHONE"]."', SMAIL = '".$_POST["SMAIL"]."', SCHOOL = '".$_POST["SCHOOL"]."',";
		$sql = $sql. "ANAMNESIS = '".$_POST["ANAMNESIS"]."', GUARDIAN = '".$_POST["GUARDIAN"]."', GUARDIANPHONE = '".$_POST["GUARDIANPHONE"]."', SCHOOLLOCATION = '".$_POST["SCHOOLLOCATION"]."' WHERE SACCOUNT = '".$_SESSION['account']."'";
	    $result = mysql_query($sql);     
                        
		  echo "<script language=javascript> alert(\"更改完成!\");
	      window.location.replace(\"Student_Portal.php\");
	      top.leftFrame.location.reload();
	      </script>";
		  
	}
	   
	   
}else{

     echo "<script language=javascript> alert(\"全部欄位皆不能留白!!\");
	      window.location.replace(\"Student_Update.php\");
	      top.leftFrame.location.reload();
	      </script>";	



}	



?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	</body>
</html>

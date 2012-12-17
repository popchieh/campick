<?php

include('connect.php');

$sql = "SELECT * FROM ACTIVITY";
$result = mysql_query($sql);

 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--
Copyright: Darren Hester 2006, http://www.designsbydarren.com
License: Released Under the "Creative Commons License", 
http://creativecommons.org/licenses/by-nc/2.5/
-->

<head>

<!-- Meta Data -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Short description of your site here." />
<meta name="keywords" content="keywords, go, here, seperated, by, commas" />

<!-- Site Title -->
<title>高中生營隊報名系統</title>

<!-- Link to Style External Sheet -->
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/smoothness/jquery-ui-1.8.21.custom.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>

</head>

<body>

<div id="page_wrapper">

<div id="header_wrapper">
<div id="log">
<!-- <a href = "Login_Unit.html">單位登入|</a><a href = "Login_Check.html">學生登入|</a><a href = "MemberUnit.html">單位註冊|</a><a href = "Member.html">學生註冊</a>
 --></div>
<div id="header">

<h1><img src="img/banner2.gif"> </h1>

</div>

<div id="navcontainer">

<ul id="navlist">
<li><a href="List_Activity_S.php">營隊資訊</a></li>
<li><a href="Student_Update.php">修改基本資料</a></li>
<li><a href="Activity_Join.php">查看參與的活動</a></li>
<li><a href = "Logout.php">登出</a></li>
</ul>
</div>

</div>

<div id="left_side">

<h3>關於本站</h3>

<p>
本站由中山資管所學生維護，為一個營隊媒合平台，歡迎多加利用。
</p>

<h3>聯絡方式</h3>

<div class='featurebox_side'>
中山大學管理學院舊管<br>
1029實驗室-<br>
JJ與金毛<br>
</div>

</div>

<div id="content">

<h3></h3>

<div class='featurebox_center'>
<div id="users-contain" class="ui-widget">  
<table id="users" class="ui-widget ui-widget-content">
  <thead>
  <tr class="ui-widget-header">
    <th width="130" scope="row"><div align="center"><strong>營隊名稱</strong></div></th>
    <th width="130"><div align="center"><strong>報名截止時間</strong></div></td>
    <th width="130"><div align="center"><strong>活動日期</strong></div></td>
    <th width="90"><div align="center"><strong>費用</strong></div></td>
    <th width="120"><div align="center"><strong>網址</strong></div></td>
    <th width="200"><div align="center"><strong>活動簡介</strong></div></td>
  </tr>
  </thead>
    
<?php

while ($row = mysql_fetch_array($result)){
  echo "<tbody>";
  echo "<tr>";
  echo "<td>".$row["TITLE"]."</td>";
  echo "<td>".$row["DEADLINE"]."</td>";
  echo "<td>".$row["ADATE"]."</td>";
  echo "<td>".$row["FEE"]."</td>";
  echo "<td>".$row["WEBSITE"]."</td>";
  echo "<td>".$row["CONTENT"]."</td>";
  echo "</tr>";
  echo "</tbody>";
}

?>
</table>

</div>
</div>
</div>

<div id="footer">
<a href="">Link One</a> | 
<a href="#">Link Two</a> | 
<a href="#">Link Three</a> | 
<a href="#">Link Four</a> | 
<a href="#">Link Five</a>
<br />
Template provided by: 
<a href="http://www.designsbydarren.com" target="_blank">DesignsByDarren.com</a>
</div>

</div>

</body>
<?php
mysql_close($link);
?>
</html>
<?php

include("connect.php");
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

</head>

<body>

<div id="page_wrapper">

<div id="header_wrapper">
<div id="log">
<!-- <a href = "Logout.php">登出</a> -->
</div>
<div id="header">
<h1><img src="img/banner2.gif"> </h1>
</div>

<div id="navcontainer">

<ul id="navlist">
<li><a href="List_Activity_U.php">營隊資訊</a></li>
<li><a href="Unit_Update.php">修改基本資料</a></li>
<li><a href="Activity_Hold.html">舉辦活動</a></li>
<li><a href="Activity_Query.php">查詢舉辦的活動</a></li>
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

<table width="800" height="177" border="1">
  <tr>
    <th width="130" scope="row">營隊名稱</th>
    <td width="130"><div align="center"><strong>報名截止時間</strong></div></td>
    <td width="130"><div align="center"><strong>活動日期</strong></div></td>
    <td width="90"><div align="center"><strong>費用</strong></div></td>
    <td width="120"><div align="center"><strong>網址</strong></div></td>
    <td width="200"><div align="center"><strong>活動簡介</strong></div></td>
  </tr>
  
<?php

while ($row = mysql_fetch_assoc($result)){
  echo "<tr>";
    echo "<th>".$row["TITLE"]."</th>";
    echo "<td>".$row["DEADLINE"]."</td>";
    echo "<td>".$row["ADATE"]."</td>";
    echo "<td>".$row["FEE"]."</td>";
    echo "<td><a href=\"".$row["WEBSITE"]."\">".$row["WEBSITE"]."</a></td>";
    echo "<td>".$row["CONTENT"]."</td>";
  echo "</tr>";
} 
?>
</table>


</div>
</div>

<div id="footer">
<a href="#">Link One</a> | 
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

</html>
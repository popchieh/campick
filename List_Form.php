<?php
session_start();
include("connect.php");
$ANO = $_SESSION['ANO'];
$SNO = $_GET["SNO"];

$sql = "SELECT TITLE, SNAME, SID, SEX, SADDRESS, SPHONE, SMAIL, SCHOOL, BIRTH, ANAMNESIS, GUARDIAN, GUARDIANPHONE, SCHOOLLOCATION, SELFINTRO, MOTIVE, CLUBEXPERIENCE, FDATE FROM ((STUDENT NATURAL JOIN FORM) NATURAL JOIN ACTIVITY) WHERE SNO = '$SNO' AND ANO = '$ANO'";
$result = mysql_query($sql);

$ApplicantInfo = mysql_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="Unit_Portal.php">Campick</a>
          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> <?php echo $_SESSION['account']; ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="Unit_Update.php">修改基本資料</a></li>
              <li class="divider"></li>
              <li><a href="Logout.php">登出</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="Unit_Portal.php">首頁</a></li>
              <li><a href="about.html">關於</a></li>
              <li><a href="contact.html">聯絡我們</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">營隊</li>
              <li><a href="Unit_Portal.php">營隊資訊</a></li>
              <li><a href="Activity_Hold.php">舉辦活動</a></li>
              <li><a href="Activity_Query.php">查詢舉辦的活動</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">

<div class='featurebox_center'>
<center>
<table width="709" height="739" border="1">
  <tr>
    <th scope="row">報名活動</th>
    <td colspan="2"><?php echo $ApplicantInfo['TITLE'];?></td>
    <td><div align="center"><strong>報名日期</strong></div></td>
    <td colspan="2"><?php echo $ApplicantInfo['FDATE'];?></td>
  </tr>
  <tr>
    <th width="109" scope="row">姓名</th>
    <td width="150"><?php echo $ApplicantInfo['SNAME'];?></td>
    <td width="98"><div align="center"><strong>性別</strong></div></td>
    <td width="114"><?php echo $ApplicantInfo['SEX'];?></td>
    <td width="87"><div align="center"><strong>聯絡電話</strong></div></td>
    <td width="111"><?php echo $ApplicantInfo['SPHONE'];?></td>
  </tr>
  <tr>
    <th scope="row">就讀學校</th>
    <td><?php echo $ApplicantInfo['SCHOOL'];?></td>
    <td><div align="center"><strong>學校地區</strong></div></td>
    <td colspan="3"><?php echo $ApplicantInfo['SCHOOLLOCATION'];?></td>
  </tr>
  <tr>
    <th scope="row">聯絡地址</th>
    <td><?php echo $ApplicantInfo['SADDRESS'];?></td>
    <td><div align="center"><strong>生日</strong></div></td>
    <td><?php echo $ApplicantInfo['BIRTH'];?></td>
    <td><div align="center"><strong>身分證字號</strong></div></td>
    <td><?php echo $ApplicantInfo['SID'];?></td>
  </tr>
  <tr>
    <th scope="row">電子郵件</th>
    <td><?php echo $ApplicantInfo['SMAIL'];?></td>
    <td><div align="center"><strong>監護人</strong></div></td>
    <td><?php echo $ApplicantInfo['GUARDIAN'];?></td>
    <td><p align="center"><strong>監護人電話</strong></p></td>
    <td><?php echo $ApplicantInfo['GUARDIANPHONE'];?></td>
  </tr>
  <tr>
    <th height="142" scope="row">病歷</th>
    <td colspan="5"><?php echo $ApplicantInfo['ANAMNESIS'];?></td>
  </tr>
  <tr>
    <th height="112" scope="row">自介</th>
    <td colspan="5"><?php echo $ApplicantInfo['SELFINTRO'];?></td>
  </tr>
  <tr>
    <th height="115" scope="row">參加動機</th>
    <td colspan="5"><?php echo $ApplicantInfo['MOTIVE'];?></td>
  </tr>
  <tr>
    <th height="98" scope="row">社團經驗</th>
    <td colspan="5"><?php echo $ApplicantInfo['CLUBEXPERIENCE'];?></td>
  </tr>
</table>
</center>

</div>
          
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
<?php
mysql_close($link);
?>
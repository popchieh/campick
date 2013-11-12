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

//
$sql = "SELECT UHOST, UPHONE, USCHOOL, UDEPT, UADDRESS, UMAIL FROM UNIT WHERE UACCOUNT = '".$_SESSION['account']."'";
$result = mysql_query($sql);

$unitInfo = mysql_fetch_array($result);

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

$_SESSION['update_Info'] = $unitInfo;

//mysql_close($link);

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
    <link href="assets/js/jQuery.js" rel="javascript">

<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>

<style>
.ui-resizable-se {
  bottom: 17px;
}
</style>

<script>
  $(function() {
    $( "#radio" ).buttonset();
  });

  $(function() {
    $( "#datepicker" ).datepicker({
      dateFormat: "yy-mm-dd",
      yearRange: "2012:2020",
      changeMonth: true,
      changeYear: true
    });
  });

  $(function() {
    $( "#datepicker2" ).datepicker({
      dateFormat: "yy-mm-dd",
      yearRange: "2012:2020",
      changeMonth: true,
      changeYear: true
    });
  });

  $(function() {
    $( "#resizable" ).resizable({
      handles: "se"
    });
  });

  $(function() {
    $( "input:submit, a, button", ".demo" ).button();
    // $( "a", ".demo" ).click(function() { return true; });
  });
</script>

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
<div id="users-contain" class="ui-widget"> 

<form class="form-horizontal" id="form1" method="post" action="Unit_Update_Process.php">

  <fieldset>
    <legend>修改基本資料</legend>
    <div class="control-group">
      <label class="control-label" for="textfield">單位名稱</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield" name="UHOST" value="<?php echo $unitInfo['UHOST']; ?>" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="datepicker">所屬學校</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield2" name="USCHOOL" value="<?php echo $unitInfo['USCHOOL']; ?>" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="textfield3">所屬系所</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield3" name="UDEPT" value="<?php echo $unitInfo['UDEPT']; ?>" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="textfield4">聯絡地址</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield4" name="UADDRESS" value="<?php echo $unitInfo['UADDRESS']; ?>" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="textfield5">聯絡電話</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield5" name="UPHONE" value="<?php echo $unitInfo['UPHONE']; ?>" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="datepicker2">電子郵件</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield7" name="UMAIL" value="<?php echo $unitInfo['UMAIL']; ?>" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <button type="submit" class="btn">確定</button>
    </div>
  </fieldset>
</form>
</div>
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
<?php

session_start(); 

include('connect.php');

$sql = "SELECT * FROM ACTIVITY";
$result = mysql_query($sql);

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
              <li class="active"><a href="Activity_Hold.php">舉辦活動</a></li>
              <li><a href="Activity_Query.php">查詢舉辦的活動</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">

<div class='featurebox_center'>
<div id="users-contain" class="ui-widget"> 

<form class="form-horizontal" id="form1" method="post" action="Activity_Hold_Process.php">

  <fieldset>
    <legend>舉辦活動</legend>
    <div class="control-group">
      <label class="control-label" for="textfield">活動名稱</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield" name="TITLE" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="datepicker">舉辦日期</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="datepicker" name="ADATE" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="textfield3">舉辦地點</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield3" name="LOCATION" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="textfield4">費用</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield4" name="FEE" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="resizable">活動內容</label>
      <div class="controls">
        <textarea class="input-xlarge" rows="5" id="resizable" name="CONTENT"></textarea>
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="textfield5">活動網址</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield5" name="WEBSITE" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="datepicker2">報名期限</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="datepicker2" name="DEADLINE" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="textfield7">負責人</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield7" name="AHOST" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <label class="control-label" for="textfield8">負責人連絡電話</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="textfield8" name="APHONE" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <button type="submit" class="btn">確定</button>
    </div>
  </fieldset>
</form>

<!-- <form class="form-horizontal" id="form1" method="post" action="Activity_Hold_Process.php">
  <table width="548" height="418" border="1">
    <tr>
      <th width="169" scope="row">活動名稱</th>
      <td width="363"><label for="textfield"></label>
      <input type="text" name="TITLE" id="textfield" /></td>
    </tr>
    <tr>
      <th scope="row">舉辦日期</th>
      <td><input type="text" id="datepicker" name="ADATE" /></td>
    </tr>
    <tr>
      <th scope="row">舉辦地點</th>
      <td><input type="text" name="LOCATION" id="textfield3" /></td>
    </tr>
    <tr>
      <th scope="row">費用</th>
      <td><input type="text" name="FEE" id="textfield4" /></td>
    </tr>
    <tr>
      <th scope="row">活動內容</th>
      <td><label for="textarea"></label>
      <textarea name="CONTENT" id="resizable" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <th scope="row">活動網址</th>
      <td><input type="text" name="WEBSITE" id="textfield5" /></td>
    </tr>
    <tr>
      <th scope="row">報名期限</th>
      <td><input type="text" id="datepicker2" name="DEADLINE" /></td>
    </tr>
    <tr>
      <th scope="row">負責人</th>
      <td><input type="text" name="AHOST" id="textfield7" /></td>
    </tr>
    <tr>
      <th scope="row">負責人連絡電話</th>
      <td><input type="text" name="APHONE" id="textfield8" /></td>
    </tr>
    <tr>
      <th class="demo" colspan="2" scope="row"><center><input type="submit" name="button" id="button" value="確定" /></center></th>
    </tr>
  </table>
</form> -->
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
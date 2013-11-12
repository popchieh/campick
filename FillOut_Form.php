<?php
session_start();

include("connect.php");

if($_SESSION['account'] == NULL)
{
     echo "<script language=javascript> alert(\"請先登入!!\");
        window.location.replace(\"Login_check.html\");
        top.leftFrame.location.reload();
        </script>";               
}

$sql = "SELECT ANO, TITLE, DEADLINE FROM ACTIVITY";

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
          <a class="brand" href="Student_Portal.php">Campick</a>
          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> <?php echo $_SESSION['account']; ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="Student_Update.php">修改基本資料</a></li>
              <li class="divider"></li>
              <li><a href="Logout.php">登出</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="Student_Portal.php">首頁</a></li>
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
              <li><a href="Student_Portal.php">營隊資訊</a></li>
              <li><a href="Activity_Join.php">查看參與活動</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">

<div class='featurebox_center'>
<div id="users-contain" class="ui-widget">  

<form name="form1" method="post" action="Form_Process.php">
  <table width="538" height="416" border="1">
    <tr>
      <th width="120" height="121" scope="row"><p>自我介紹</p></th>
      <td width="402"><textarea name="SELFINTRO" id="SELFINTRO" cols="50" rows="5"></textarea></td>
    </tr>
    <tr>
      <th height="122" scope="row">參加動機</th>
      <td><textarea name="MOTIVE" id="MOTIVE" cols="50" rows="5"></textarea></td>
    </tr>
    <tr>
      <th height="120" scope="row">社團經驗</th>
      <td><textarea name="CLUBEXPERIENCE" id="CLUBEXPERIENCE" cols="50" rows="5"></textarea></td>
    </tr>
    <tr>
      <th class="demo" height="41" colspan="2" scope="row"><input type="submit" name="button" id="button" value="確定" /></th>
    </tr>
  </table>
  <label for="SELFINTRO"></label>
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

<SCRIPT LANGUAGE="javascript">

function checkform()  
{
    if(document.Login.saccount.value=='')
    {
        alert("您未輸入帳號，請確認!");
        document.Login.saccount.focus();
        return(false);
    }
    else if(document.Login.spwd.value=='')
    {
        alert("您未輸入密碼，請確認!");
        document.Login.spwd.focus();
        return(false);
    }
    return(true);       
}  

</SCRIPT>

  </body>
</html>
<?php
mysql_close($link);
?>
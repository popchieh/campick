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

//
$sql = "SELECT SNAME, SID, SEX, SADDRESS, SPHONE, SMAIL, SCHOOL, BIRTH, ANAMNESIS, GUARDIAN, GUARDIANPHONE, SCHOOLLOCATION FROM STUDENT WHERE SACCOUNT = '".$_SESSION['account']."'";  //靘ESSION????
$result = mysql_query($sql);

$studentInfo = mysql_fetch_array($result);

$_SESSION['update_Info'] = $studentInfo;

// mysql_close($link);

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

    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

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

<form name="form1" method="post" action="Student_Update_Process.php">
 <center><table width="365" border="1">
    <tr>
      <th width="81" scope="row">姓名</th>
      <td width="273">
        <div align="center">
          <?php echo $studentInfo['SNAME']; ?>
      </div></td>
    </tr>
    <tr>
      <th scope="row">性別</th>
      <td><div align="center">
        <?php if($studentInfo['SEX'] == 1) echo "男"; else echo "女"; ?>
      </div></td>
    </tr>
    <tr>
      <th scope="row">身分證字號</th>
      <td><div align="center">
        <?php echo $studentInfo['SID']; ?>
      </div></td>
    </tr>
    <tr>
      <th scope="row">聯絡地址</th>
      <td><div align="center">
        <input type="text" name="SADDRESS" value="<?php echo $studentInfo['SADDRESS']; ?>" />
      </div></td>
    </tr>
    <tr>
      <th scope="row">聯絡電話</th>
      <td><div align="center">
        <input type="text" name="SPHONE" value="<?php echo $studentInfo['SPHONE']; ?>" />
      </div></td>
    </tr>
    <tr>
      <th scope="row">電子郵件</th>
      <td><div align="center">
        <input type="text" name="SMAIL" value="<?php echo $studentInfo['SMAIL']; ?>" />
      </div></td>
    </tr>
    <tr>
      <th scope="row">就讀學校</th>
      <td><div align="center">
        <input type="text" name="SCHOOL" value="<?php echo $studentInfo['SCHOOL']; ?>" />
      </div></td>
    </tr>
    <tr>
      <th scope="row">生日</th>
      <td><div align="center">
        <?php echo $studentInfo['BIRTH']; ?>
      </div></td>
    </tr>
    <tr>
      <th height="127" scope="row">病歷</th>
      <td><label for="ANAMNESIS"></label>
        <div align="center">
          <textarea name="ANAMNESIS" cols="30" rows="5"><?php echo $studentInfo['ANAMNESIS']; ?></textarea>
      </div></td>
    </tr>
    <tr>
      <th scope="row">監護人</th>
      <td><div align="center">
        <input type="text" name="GUARDIAN" value="<?php echo $studentInfo['GUARDIAN']; ?>" />
      </div></td>
    </tr>
    <tr>
      <th scope="row">監護人電話</th>
      <td><div align="center">
        <input type="text" name="GUARDIANPHONE" value="<?php echo $studentInfo['GUARDIANPHONE']; ?>" />
      </div></td>
    </tr>
    <tr>
      <th scope="row">學校地區</th>
      <td><label for="select"></label>
        <div align="center">
          <select name="SCHOOLLOCATION" id="select">
            <option value="1" <?php if($studentInfo['SCHOOLLOCATION'] == 1) echo 'SELECTED'; ?> >北部地區(基北桃竹苗)</option>
            <option value="2" <?php if($studentInfo['SCHOOLLOCATION'] == 2) echo 'SELECTED'; ?> >中部地區(中彰投)</option>
            <option value="3" <?php if($studentInfo['SCHOOLLOCATION'] == 3) echo 'SELECTED'; ?> >南部地區(雲嘉南高屏)</option>
            <option value="4" <?php if($studentInfo['SCHOOLLOCATION'] == 4) echo 'SELECTED'; ?> >東部地區(宜花東)</option>
            <option value="5" <?php if($studentInfo['SCHOOLLOCATION'] == 5) echo 'SELECTED'; ?> >外島地區</option>
          </select>
      </div></td>
    </tr>
    <tr>
      <th class="demo" colspan="2" scope="row"><center><input type="submit" name="button" value="確定" /></center></th>
    </tr>
  </table></center>
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
<?php
ob_start(); 
session_start();
?>
<?php include "inc/odbc_config.php";?>
<html><head>
<meta charset="UTF-8">
<meta name="robots" content="index,follow,noodp,noydir">
<meta name="viewport" content="width=1060,user-scalable=yes">
<link rel="shortcut icon" href="suddenattack.ico">
<!--[if lt IE 9]>
<script src="http://static.nexon.co.jp/global/lib/html5shiv/html5shiv.js"></script>
<script src="http://static.nexon.co.jp/global/lib/ie9/IE9.nexon.min.js"></script>
<link rel="stylesheet" href="http://static.nexon.co.jp/global/lib/ie9/IE9.js.reset.css">
<![endif]-->
<link rel="stylesheet" href="include/css/frame.css">


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10389027-34']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="connect-built" src="nxqj/gnb/js/connect-built.js?bust=0.1.66"></script><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"></head>

<body data-twttr-rendered="true"><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" style="padding-bottom: 20px; padding-right: 0px; display: none;"><div id="cboxWrapper" style=""><div style=""><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxLoadedContent" class="" style="width: 0px; height: 0px; overflow: hidden;"></div><div id="cboxLoadingOverlay" class="" style=""></div><div id="cboxLoadingGraphic" class="" style=""></div><div id="cboxTitle" class="" style=""></div><div id="cboxCurrent" class="" style=""></div><div id="cboxNext" class="" style=""></div><div id="cboxPrevious" class="" style=""></div><div id="cboxSlideshow" class="" style=""></div><div id="cboxClose" class="" style=""></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div>
    <form method="post" id="form2">

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form2'];
if (!theForm) {
    theForm = document.form2;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>




					
					<?php
// Oturumlar
ob_start(); 
session_start();
?>
<?php
include "inc/odbc_config.php";


$username = $_POST['username'];
$password = $_POST['password'];

$uye = odbc_exec($conn,"select * From MB_USR where user_id='{$username}'");
$u = odbc_result($uye,1);
		
	
if ($username=='' or $password=='') {
echo '<div align="center"><img src="img/common/game2_movie3.jpg" border="0"><br><br /><font color="red" size="4"><b>Không được bỏ trống các khung yêu cầu.!</b></font><br><a href="#" onclick="javascript:history.go(-1)"><font color="red" size="4"><b>Quay lại</b></font></a><br /></div>';
} 

else {
$msquery="SELECT user_no FROM MB_USR WHERE user_id = '$username' AND user_pwd = '$password'";
$msresults=odbc_exec($conn,$msquery) or die("error");
odbc_fetch_row($msresults);
$user_no = odbc_result($msresults,1);
if (strlen($user_no) > 0) {

$_SESSION["system"] = "true";
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
$_SESSION["user_no"] = $user_no;

echo'<div align="center"><img src="img/common/game2_movie3.jpg" border="0"><br /><font color="red" size="4"><b>Đăng nhập thành công.<br>Bạn sẽ được chuyển về trang quản lý tài khoản...</b></font></div>';
header("Refresh: 2; url=taikhoan");
}


else {
echo '
<div align="center"><img src="img/common/game2_movie3.jpg" border="0"><br /><font color="blue" size="4"><b>Thông tin đăng nhập không chính xác, vui lòng kiểm tra lại.!</b></font><br><a href="#" onclick="javascript:history.go(-1)"><font color="red" size="4"><font color="red" size="4"><b>Quay lại</b></font></a></div>';
}
}
?>

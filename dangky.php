<?php
session_start();
ob_start(); 
?>


<?php include "inc/odbc_config.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="//archive.org/includes/analytics.js?v=cf34f82" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app42.us.archive.org';v.server_ms=279;archive_analytics.send_pageview({});});</script>
<meta name="google-site-verification" content="V5byRqFo5ljK568nWK4AbDH1gLqjONlg5xYpEqhCOoY"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>
	REGISTER PAGE | Biệt Đội Thần Tốc 2019
</title>
<link rel="shortcut icon" href="http://icons.iconarchive.com/icons/3xhumed/mega-games-pack-33/256/Sudden-Attack-4-icon.png"/>
<link rel="icon" href="/home/img/banner21020757966071655935.jpg">
<link rel="stylesheet" href="./SA/Site/templates/css/style.css" type="text/css" media="screen" charset="utf-8"/>
<link rel="stylesheet" href="./SA/Site/templates/css/stylebarner.css" type="text/css" media="screen" charset="utf-8"/>    

	<meta property="og:title" content="REGISTER PAGE | Biệt Đội Thần Tốc 2019">
	<meta property="og:description" content="Huyền thoại tái sinh!">
	<meta property="og:image" content="https://i.imgur.com/LqhOrjg.jpg?v3">
	<meta property="og:url" content="https://bietdoithantoc.com">
	<meta property="og:site_name" content="BietDoiThanToc.com">

    <script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="./SA/Site/templates/js/jquery.flow.1.2.auto.js"></script>
    <script type="text/javascript" language="javascript" src="./SA/Site/templates/js/ga.js"></script>
	<script type="text/javascript" language="javascript" src="./SA/Site/templates/js/captcha.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="shortcut icon" href="./templates/images/icon_dzo.ico"/>

    <link href="./templates/css/nivo-slider.css" rel="stylesheet" type="text/css"/>
    <link href="./templates/css/themes/default/default.css" rel="stylesheet" type="text/css" media="screen"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link href="./Pando/header/js/dzoheader.css" rel="stylesheet" type="text/css"/>
    <script src="./Pando/header/js/dzoHeader.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#subcontentC img").lazyload({ effect: "fadeIn" });

            //back to top
            $('#wrapper').append('<div id="backtop"></div>');
            $("#backtop").hide();
            $(window).scroll(function() {
                if ($(window).scrollTop() > 900) {
                    $('#backtop').fadeIn();
                } else {
                    $('#backtop').fadeOut();
                }
            });
            $('#backtop').click(function() {
                $('html, body').animate({ scrollTop: 0 }, 500);
            });
        });
    </script>
     <!--[if IE]>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".tbgrouplevel .rowlevel:nth-child(odd)").css("background-color", "#f0f0f0");
            });
        </script>
    <![endif]-->
    <!--[if IE 7]>
       <style>
            #listmenu ul{top:40px;}
            .tbtitle span{float:left;}
            .subtitlegrouplevel{clear:both;}
            #myController p{margin-top:5px;}
            li.choose table{margin:44px 20px 0 28px;}
       </style>
    <![endif]-->
    <script>
function fsa() {
  // define a new variable
  var box = '';
  // add the HTML inside the JS variable
  box += '<div class="alert alert-success alert-dismissable" id="success-alert">';
  box += '<strong>Successfully posted!</strong>';
  box += '</div>';

  // append the HTML contained inside box to the body
  document.querySelector('body').innerHTML += box;
}
</script>
    <link rel="stylesheet" href="./SA/Site/templates/css/stylecontent.css" type="text/css" media="screen" charset="utf-8"/>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>

 <style>
    #form label{float:left; width:140px;}
    #error_msg{color:red; font-weight:bold;}
 </style>

 <script>
    $(document).ready(function(){
        var $submitBtn = $("#form input[type='submit']");
        var $passwordBox = $("#senha");
        var $confirmBox = $("#senha2");
        var $errorMsg =  $('<br><span id="error_msg">Mật khẩu không khớp.</span>');

        // This is incase the user hits refresh - some browsers will maintain the disabled state of the button.
        $submitBtn.removeAttr("disabled");

        function checkMatchingPasswords(){
            if($confirmBox.val() != "" && $passwordBox.val != ""){
                if( $confirmBox.val() != $passwordBox.val() ){
                    $submitBtn.attr("disabled", "disabled");
                    $errorMsg.insertAfter($confirmBox);
                }
            }
        }

        function resetPasswordError(){
            $submitBtn.removeAttr("disabled");
            var $errorCont = $("#error_msg");
            if($errorCont.length > 0){
                $errorCont.remove();
            }  
        }


        $("#senha2, #senha")
             .on("keydown", function(e){
                /* only check when the tab or enter keys are pressed
                 * to prevent the method from being called needlessly  */
                if(e.keyCode == 13 || e.keyCode == 9) {
                    checkMatchingPasswords();
                }
             })
             .on("blur", function(){                    
                // also check when the element looses focus (clicks somewhere else)
                checkMatchingPasswords();
            })
            .on("focus", function(){
                // reset the error message when they go to make a change
                resetPasswordError();
            })

    });
  </script>
</head>
<body>
<?php include "./chatfb.php";?>
    <div id="dzoheader"></div>
      <div id="wrapper">
        <div id="wrapcontent" class="clear">
            <div id="sidebarleft">
                <ul>
                    <li class="downloadgame"><a href="./download">&nbsp;</a></li>
                    <li class="register"><a href="./dangky"></a></li>
                    <li class="login"><a href="./taikhoan"></a></li>
					<li class="napthe2"><a href="./napthe"></a></li>
                    <li class="referfriend"><a href="#"></a></li>
                    <li class="guide"><a href="#"></a></li>
					<a href="./giftcode"><li class="choose" style="margin-left: 10px;width: 222px;margin-top: 10px;"></li></a>
                    <li class="barnerleft1"><img src="./SA/Site/templates/imagelayout/banner_left.jpg" alt=""/></li>
                </ul>
            </div><!-- end #sidebarleft -->
            <div id="subcontent">
                <div id="subcontentT"></div>
                <div id="subcontentC"> 
                
<div id="listnewspage" style="margin-top:0px;">
    <div id="toplistitem"></div>
    <div id="listitem">
        <br/>
		<!-- start page -->
		<!-- maybe section? -->
<center>
<div id="main-wrapper">
            <div id="content" style="width: 696px;">
    <div id="profile-top-content">
        <div id="profile-content-right">
            <div class="profile-content-block">
                <form id="register-form" class="active-form form-login" action="" method="post">
					</script>
<?php
$captcha_success = false;
if(isset($_POST['ok']))
{
	if($_POST['captcha'] == NULL)
	{
		echo "Nhập mã xác nhận gồm 6 chữ số";
	}
	else
	{
		if($_POST['captcha'] == $_SESSION['security_code'])
		{
			echo "";
			$captcha_success = true;
		}
		else
		{
			echo "<font color='red' size='5'><b>Nhập sai mã xác nhận !</b></font> <br><br><p align='center'><input type='submit' onclick='javascript:history.go(-1)' name='ok' class='button' value='BACK' /></p>";
			header('refresh:10;url=./dangky ');
		}
	}
}

?>

    <?php
include "inc/odbc_config.php";
if ($_POST) {

$account = $_POST['usuario'];   
$user_name = $_POST['usuario']; 
$pass = $_POST['senha'];
$pass2 = $_POST['senha2'];  
$userage = 25; 
$usertype = 0;
$loginflag = 0;
$email = $_POST['email'];
$phone = $_POST['phone'];
$status = 0;
$id= sprintf('%05d', rand(0, 999999));

if($captcha_success){
	$veriss = odbc_exec($conn,"SELECT user_id, user_email, user_phone FROM MB_USR WHERE user_id='".$account."' OR user_email='".$email."' OR user_phone='".$phone."'");
	$varmis = odbc_result($veriss,1);
	if ($varmis){
	echo '<div align="center">
	  <p align="center"><strong><font size="3" face="Arial" color="red">Tên tài khoản/email/hoặc số điện thoại đã tồn tại!<br><br><p align="center"><input type="submit" onclick="javascript:history.go(-1)" name="ok" class="button" value="BACK" /></p></strong></p>
	</div>';
	}
	else {

	$msquerys="INSERT INTO MB_USR (user_id, user_no, user_name, user_pwd, user_type, login_flag, user_age, user_email, user_phone, user_status) VALUES ('".$account."','".$id."','".$user_name."','".$pass."','".$usertype."','".$loginflag."','".$userage."','".$email."','".$phone."','".$status."')";
	$msresultss=odbc_exec($conn,$msquerys) or die('error');  	

	echo '<div align="center">
	 <p align="center"><strong><img src="./img/common/success.gif"></strong></p><br>
	  <p align="center"><strong><font size="5" face="Arial" color="green">ĐĂNG KÝ THÀNH CÔNG!</font></strong></p><br>
	  <p align="center"><strong<font size="3" face="Arial"><u>Dưới đây là thông tin tài khoản của bạn:</u></strong></p><br>
	  <p align="center"><font size="3" face="Arial"><b>Tài Khoản:</b> '.$account.'</p>
	  <p align="center"><font size="3" face="Arial"><b>Mật Khẩu:</b> ******</p>
	  <p align="center"><font size="3" face="Arial"><b>Mã Tài Khoản:</b> '.$id.'</p>
	  <p align="center"><font size="3" face="Arial"><b>Email:</b> '.$email.' <i><br>(Một email chứa mã kích hoạt sẽ gửi vào địa chỉ email của bạn)</i></p>
	  <p align="center"><font size="3" face="Arial"><b>Số điện thoại:</b> '.$phone.'</p><br><br>
	  <p align="center"><font size="3" face="Arial" color="blue"><strong>Chúc bạn chơi game vui vẻ!!!</strong></p><br>
	  <p align="center"><font size="4" face="Arial" color="blue"><strong><a href="./taikhoan"><img src="./img/common/sidebar_h_welcome.png"></a></strong></p><br>
	  <p align="center"><img src="./img/common/footer2.png" width="30%"></p>
	</div>
	';
	}
}

}
else{
echo '
<div align="center">

  <form action="dangky" method="post" name="kayit" id="kayit" onsubmit="" autocomplete="on">
    <table border="0">
	<tr>
	<h2>Đăng ký tài khoản</h2> <br><b><font color="purple" size="6">BIỆT ĐỘI THẦN TỐC</font></b><br><br>

<div id="sn-reg"><span><center><font color="red" size="3"><u>Lưu ý:</u> tên tài khoản sẽ không thể thay đổi sau khi tạo.</font></center></span>    <span>
<br>
    </span>
</div>
	</tr>
      <tr>
        <td align="left"><font size="2" face="Arial" color="blue"><b>• Tài khoản:</b></td>
        <td><center><input type="text" id="usuario" name="usuario" placeholder=" username" maxlength="15" pattern="^\w{5,15}$" required/></center></td>
      </tr>
      <tr>
        <td align="left"><font size="2" face="Arial" color="blue"><b>• Mật khẩu:</b></td>
        <td><center><input type="password" id="senha" name="senha" placeholder=" password" pattern=".{8,}" required/></center></td>
      </tr>
      <tr>
        <td align="left"><font size="2" face="Arial" color="blue"><b>• Nhập lại mật khẩu:</b></span></td>
        <td><center><input type="password" id="senha2" name="senha2" placeholder=" re-password" pattern=".{8,}" required/></center></td>
      </tr>
	  <tr>
        <td align="left"><font size="2" face="Arial" color="blue"><b>• Email:</b></span></td>
        <td><center><input type="email" id="email" name="email" placeholder=" email" required/></center></td>
      </tr>
	  <tr>
        <td align="left"><font size="2" face="Arial" color="blue"><b>• Số điện thoại:</b></span></td>
        <td><center><input type="text" id="phone" name="phone" placeholder=" phone number" maxlength="11" pattern="^[0-9]{10,11}$" required/></center></td>
      </tr>
	  <tr>
        <td align="left"><font size="2" face="Arial" color="blue"><b>• Câu hỏi bí mật:</b></span></td>
        <td><center><select style="width: 171px;" required>
						<option>Người bạn thân của bạn ở thời thanh thiếu niên tên gì?</option>
						<option>Thú nuôi đầu tiên của bạn tên gì?</option>
						<option>Món ăn đầu tiên mà bạn học nấu là gì?</option>
						<option>Bộ phim đầu tiên mà bạn xem ở rạp chiếu phim là gì?</option>
						<option>Nơi lần đầu tiên bạn đến bằng máy bay là đâu?</option>
						<option>Công việc mơ ước của bạn là gì?</option>
						<option>Biệt danh lúc nhỏ của bạn là gì?</option>
						<option>Tên con đường nơi mà bạn lớn lên là gì?</option>
						<option>Tên đội thể thao yêu thích của bạn là gì?</option>
					</select>
	</td>
      </tr>
	  	  <tr>
        <td align="left"><font size="2" face="Arial" color="blue"><b>• Câu trả lời:</b></span></td>
        <td><center><input type="text" id="answer" name="answer" placeholder=" answer" maxlength="100" required/></center></td>
      </tr>
		<tr>
      <td align="left"><font size="2" face="Arial" color="blue"><b>• Mã xác nhận</b></span></td>
    <td style="width: 188px;height: 22px;padding-left: 16px;">
      <input type="text" id="captcha" name="captcha" placeholder=" captcha" maxlength="6" required/>
    </td>
	<td>
	<img src="./captcha" />
	</td>
  </tr>
          <td align="center">&nbsp;</td>
        <td><center><font size="4" face="Arial" color="BLUE"><input type="submit" onclick="kontrol();" name="ok" class="button" value="Đăng ký" />
		<input type="reset" name="button" class="button" value="Reset"/></td></center></td>
      </tr>
    </table>
  </form>
  <br><br>
</br></br>
  </div>';}
?>

            </div>
        </div>
    </div>
    </div>
</div>
</center>
		<!-- end page -->
		
		<script type="text/javascript">
$(document).ready(function () {
    var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function (e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                switch (e.srcElement.id) {
                    case "usuario":
                        e.target.setCustomValidity("Tên tài khoản chỉ bao gồm a-z, A-Z, 0-9");
                        break;
                    case "senha":
                        e.target.setCustomValidity("Mật khẩu phải từ 8 ký tự trở lên");
                        break;
                    case "senha2":
                        e.target.setCustomValidity("Mật khẩu phải từ 8 ký tự trở lên");
                        break;
                    case "email":
                        e.target.setCustomValidity("Email không hợp lệ");
                        break;	
                    case "phone":
                        e.target.setCustomValidity("Số điện thoại phải có 10 hoặc 11 số");
                        break;
                    case "answer":
                        e.target.setCustomValidity("Chưa nhập câu trả lời");
                        break;						
                    case "captcha":
                        e.target.setCustomValidity("Chưa nhập mã xác nhận");
                        break;								
                }
            }
        };
        elements[i].oninput = function (e) {
            e.target.setCustomValidity("");
        };
    }
})
</script>
		
    </div><!-- end #listitem -->
    <div id="bottomlistitem"></div>
</div><!-- end #listnewspage -->

                </div><!-- end #subcontentC -->
            </div><!-- end #subcontent -->
        </div><!-- end #wrapcontent -->
        <div id="footer" class="clear">
            
        </div><!-- end #footer -->
    </div><!-- end #wrapper -->
    </form>
    <script type="text/javascript" src="./SA/Site/templates/fancybox/jquery.fancybox-1.3.4.pack.js"></script>	
	<script type="text/javascript">
	    $(document).ready(function() {
	        $("#variouspop").fancybox({
	            'width': 615,
	            'height': 800,
	            'autoScale': false,
	            'transitionIn': 'none',
	            'transitionOut': 'none',
	            'type': 'iframe',
	            'scrolling': 'no'
	        });
	    });
</script>
</body>
</html>


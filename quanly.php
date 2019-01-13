<?php
ob_start(); 
session_start();
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
	ACCOUNT MANAGER | Biệt Đội Thần Tốc 2019
</title>
<link rel="shortcut icon" href="http://icons.iconarchive.com/icons/3xhumed/mega-games-pack-33/256/Sudden-Attack-4-icon.png"/>
<link rel="icon" href="/home/img/banner21020757966071655935.jpg">
<link rel="stylesheet" href="./SA/Site/templates/css/style.css" type="text/css" media="screen" charset="utf-8"/>
<link rel="stylesheet" href="./SA/Site/templates/css/stylebarner.css" type="text/css" media="screen" charset="utf-8"/>    

	<meta property="og:title" content="ACCOUNT MANAGER | Biệt Đội Thần Tốc 2019">
	<meta property="og:description" content="Huyền thoại tái sinh!">
	<meta property="og:image" content="https://i.imgur.com/LqhOrjg.jpg?v3">
	<meta property="og:url" content="https://bietdoithantoc.com">
	<meta property="og:site_name" content="BietDoiThanToc.com">

    <script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="./SA/Site/templates/js/jquery.flow.1.2.auto.js"></script>
    <script type="text/javascript" language="javascript" src="./SA/Site/templates/js/ga.js"></script>
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
    
    <link rel="stylesheet" href="./SA/Site/templates/css/stylecontent.css" type="text/css" media="screen" charset="utf-8"/>
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
					<li class="choose" style="margin-left: 5px;width: 222px;margin-top: 15px;"><a href="./giftcode"></a></li>
                    <li class="barnerleft1"><img src="./SA/Site/templates/imagelayout/banner_left.jpg" alt=""/></li>
                </ul>
            </div><!-- end #sidebarleft -->
            <div id="subcontent">
                <div id="subcontentT"></div>
                <div id="subcontentC"> 
                
<div id="listnewspage" style="margin-top:0px;">
    <div id="toplistitem"></div>
    <div id="breadbrum">
        <p><span><b>QUẢN LÝ TÀI KHOẢN</b></span></p>
    </div>
    <div id="listitem">
        <br/>
		<!-- start page -->
<div id="main-wrapper">
            <div id="content" style="width: 100%;">
    <div id="profile-top-content">
        <div id="profile-content-right">
            <div class="profile-content-block">
                <form id="register-form" class="active-form form-login" action="#" method="post">
	<input type="hidden" name="_csrf" value="D7kXtRFBMw7z7GmBtge4j40_Sf2GqWDCIQ_dsI4t3e5fz3uMfi5UWsqbG_Tlbcv9vFsQrvLwUKdOfpr15kWSlw==">
<?php
// Oturumlar
ob_start(); 
session_start();
?>
<?php include "inc/odbc_config.php";?>
<?php include "pando.php";?>
<?php

// MB_USR Üye Bilgileri Çekiyoruz.
// GM_RESULT tan Üye Bilgilerini Eşleştirip Çekiyoruz.
$_SESSION["system"] = "true";
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;

$sql = "SELECT * FROM MB_USR WHERE user_id='$username' and user_pwd='$password'";

$result = odbc_exec($conn, $sql);

$sql2 = "SELECT * FROM GM_RESULT";
$result2 = odbc_exec($conn, $sql2);

//MB_USR
//$user = odbc_result($result, "user_id");
$user_nick = odbc_result($result, "user_nick");
$user_no = odbc_result($result, "user_no");
$user_email = odbc_result($result, "user_email");
$user_phone = odbc_result($result, "user_phone");
$user_status = odbc_result($result, "user_status");

//GM_RESULT
$user_money = odbc_result($result2, "user_money");
$user_cash = odbc_result($result2, "user_cash");
$user_exp = odbc_result($result2, "user_exp");
$user_clan = odbc_result($result2, "clan_member");
$user_level = odbc_result($result2, "level_no");

$user_win = odbc_result($result2, "win_cnt");
$user_lose = odbc_result($result2, "lose_cnt");
$user_kill = odbc_result($result2, "kill_cnt");
$user_death = odbc_result($result2, "death_cnt");
$user_rank = odbc_result($result2, "user_rank");

// MB_USR Üye Bilgilerini çektik.
// GM_RESULT tan Üye Bilgilerini Eşleştirip Çektik.

if ($_SESSION['username'] == '' ) { 
echo 'Vui lòng đăng ký';
header ("location: ./dangky");	
				}
	else{
	echo '
	<br>
	<section class="log-box2">
					<center><img src="./img/common/footer2.png" width="20%"></center>
					<!--login-->
					<div class="login">
<center>
<body>
<!---
<div id="wb_Text1" style="position:absolute;left:150px;top:60px;width:400px;height:16px;z-index:2;text-align:center;">
<span style="color:yellow;font-family:Arial;font-size:15px;"><font color="white"><b>Tên Nhân Vật:&nbsp;&nbsp;&nbsp;&nbsp;</b></font>'?><?php echo $user_nick ? $user_nick : 'Chưa tạo tên nhân vật!';?><?php echo '</span></div>
<div id="wb_Text2" style="position:absolute;left:195px;top:80px;width:300px;height:16px;z-index:3;text-align:center;">
<span style="color:yellow;font-family:Arial;font-size:15px;"><font color="white"><b>Clan:&nbsp;&nbsp;&nbsp;&nbsp</b></font>('.$user_clan.')</span></div>
<div id="wb_Text3" style="position:absolute;left:189px;top:100px;width:300px;height:16px;z-index:4;text-align:center;">
<span style="color:yellow;font-family:Arial;font-size:15px;"><font color="white"><b>Mã Tài Khoản:&nbsp;&nbsp;&nbsp;&nbsp</b></font>('.$user_no.')</span></div>
<div id="wb_Text4" style="position:absolute;right:195px;top:60px;width:300px;height:16px;z-index:5;text-align:center;">
<span style="color:#F87431;font-family:Arial;font-size:15px;">Thắng: '.$user_win.'&nbsp;, Thua: '.$user_lose.'</span></div>
<div id="wb_Text5" style="position:absolute;right:186px;top:81px;width:300px;height:32px;z-index:6;text-align:center;">
<span style="color:#F87431;font-family:Arial;font-size:15px;">Kill:  '.$user_kill.' / Death:  '.$user_death.'</span></div>
<div id="wb_Text6" style="position:absolute;right:195px;top:102px;width:300px;height:16px;z-index:7;text-align:center;">
<span style="color:#F87431;font-family:Arial;font-size:15px;">GP:  '.$user_money.' / CASH:  '.$user_cash.'</span></div>
<div id="wb_Text7" style="position:absolute;center:231px;top:40px;width:106px;height:16px;z-index:8;text-align:center;">
<span style="color:#3333CC;font-family:Arial;font-size:12px;"><b></b></span></div>
<div id="wb_Text8" style="position:absolute;center:95px;top:220px;width:106px;height:16px;z-index:9;text-align:center;">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;"></span></div>
<div id="wb_Text9" style="position:absolute;center:95px;top:236px;width:106px;height:16px;z-index:10;text-align:center;">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;"></span></div>
<div id="wb_Text10" style="position:absolute;center:95px;top:252px;width:106px;height:16px;z-index:11;text-align:center;">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;"></span></div>
<div id="wb_Text11" style="position:absolute;center:308px;top:207px;width:103px;height:16px;z-index:12;text-align:center;">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;"></span></div>
<div id="wb_Text12" style="position:absolute;center:294px;top:225px;width:106px;height:16px;z-index:13;text-align:center;">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;"></span></div>
<div id="wb_Text13" style="position:absolute;center:293px;top:240px;width:106px;height:16px;z-index:14;text-align:center;">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;"></span></div>
<div id="wb_Text14" style="position:absolute;center:293px;top:255px;width:106px;height:16px;z-index:15;text-align:center;">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;"></span></div>
<div id="wb_Text15" style="position:absolute;center:144px;top:390px;width:126px;height:16px;z-index:16;text-align:center;">
<span style="color:#F87431;font-family:Arial;font-size:13px;"></span></div>

--->
</body>


					        
</center>
</a></div>
</section>
	';
} 
	?>


            </div>
        </div>
    </div>
    </div>
</div>
		<!-- end page -->
		
		
		
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

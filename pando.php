<?php
// Oturumlar
ob_start(); 
session_start();
?>
<?php include "inc/odbc_config.php";?>
<?php
include "inc/odbc_config.php";
// MB_USR Üye Bilgileri Çekiyoruz.
// GM_RESULT tan Üye Bilgilerini Eşleştirip Çekiyoruz.
$_SESSION["system"] = "true";
$_SESSION["user_login"] = "user_login";
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$user_no = $_SESSION["user_no"];

$sql = "SELECT * FROM MB_USR WHERE user_id='$username' and user_pwd='$password'";
$result = odbc_exec($conn, $sql);

$sql2 = "SELECT * FROM GM_RESULT WHERE user_no='$user_no2'";
$result2 = odbc_exec($conn, $sql2);

//MB_USR
$user = odbc_result($result, "user_id");
$user_nick = odbc_result($result, "user_nick");
$user_no = odbc_result($result, "user_no");
$user_email = odbc_result($result, "user_email");
$user_phone = odbc_result($result, "user_phone");
$user_status = odbc_result($result, "user_status");

//GM_RESULT
$user_no2 = odbc_result($result2, "user_no");
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


if ($_SESSION['username'] == '' ) { 

echo '<!--log-box-->

				<section class="log-box section">
					<h1><font><font>Chào mừng chiến binh!</font></font></h1>
					<!--login-->
					<div class="login">
						<div class="log-form">
							<div class="nexon-id">
								<input type="text" placeholder="tên đăng nhập" id="username" name="username" required>
							</div><br>
							<div class="password">
								<input type="password" placeholder="mật khẩu" id="password" name="password" required>
							</div>
							
							<div class="btn-login"><a href="" onclick="DoLogin();return false;"><font><font>Đăng nhập</font></font></a></div>
						</div><br>
						<div class="btn-forget"><a href="./forgotpass"><font><font>Quên mật khẩu</font></font></a></div><br>
						<div><font><font><center><a href="dangky"><img src="img/common/btn_regist.png"></a></center></font></font></div>

<br>

					</div><iframe name="loginiframe" style="display:none;" id="loginiframe"></iframe>
                    <script type="text/javascript">
                        function DoLogin() {
                            
                            var form2 = document.getElementById("form2");
                            var tempaction = form2.action;
                            var temptarget = form2.target;
                            form2.action = "check.php";


                            form2.submit();
                            form2.action = tempaction;
                        }
                    </script>
                    <script type="text/javascript">
                        function Login_OnKeydown(e) {
                            if (e && e.keyCode == 13) {
                                DoLogin();
                                return false;
                            }
                            return true;
                        }
                    </script>
					<!--//login--> 
                    
				</section>

				<!--//log-box-->';
				}else{
	echo '
	<section class="log-box2">
					<!--login-->
					<div class="login">
<center>					        
							<style>
                td.span { font-size:xx-small; font-weight:bold; }
                </style>
					<tr>
						<td width="125"><span><b><img src="./img/common/logo.png"><br><br></font>
						<div><font color="blue" size="2">Tên đăng nhập:</font><font color="green" size="4"> '.$user.'</span></font><br></div>
						<div><font color="blue" size="2">Tên nhân vật:</font><font color="red" size="5">&nbsp'?><?php echo $user_nick ? $user_nick : 'Chưa tạo!';?><?php echo '</font></div><br>
						<div><font color="blue" size="2">Clan:</font><font color="orange" size="3">&nbsp'?><?php echo $user_clan ? $user_clan : 'Chưa gia nhập clan!';?><?php echo '</font></div><br>
						<div><font color="blue" size="2">Email:</font><font color="green" size="3"> '.$user_email.'</span></font></div><br>
						<div><font color="blue" size="2">Phone:</font><font color="green" size="3"> '.$user_phone.'</span></font></div><br>
						<div><font color="blue" size="2">ID Number:</font><font color="green" size="3"> '.$user_no.'</span></font></div><br>
						<div><font color="blue" size="2">Cash:</font><font color="green" size="3">&nbsp'?><?php echo $user_money ? $user_money : '0';?><?php echo '</font></div></b><br>
						<div><b><font color="blue" size="2">Account Status:</font>&nbsp'?><?php echo $user_status == 1 ? '<img src="./SA/Site/templates/images/verifired.png" width="25%">' : '<a href=./verify.php title="Xác minh tài khoản"><img src="./SA/Site/templates/images/not_verifired.png" width="25%"></font>';?></b></a> </div>
						</td>
					</tr><br><br>
<tr> 

<?php if(!isset($_SESSION['user_login']) or $_SESSION['user_login']==''){?>
						<a href="index.php"><input class="login_b" type="submit" name="submitButtonName" value="Đăng ký" /></a>
						<?php }else{ ?>
						Chào: <font color=#fff size=4><?=$_SESSION['user_login'];?></font> (<a href="" onclick="return dangxuat();">Đăng xuất</a>)
						<?php }?>
<td><a href="./changepass"><img src="img/common/changepass.png"></a></td> 
<td><a href="./changeemail"><img src="img/common/doiemail.png"></a></td>
<td><a href="./changephone"><img src="img/common/doisdt.png"></a></td>  
<td><a href="./napthe"><img src="img/common/napthe.png"></a></td> 
<td><a href="./logout"><img src="img/common/logout.png"></a></td> 
</tr> 
</center></a></div>
</section><?php
} 
?>
	
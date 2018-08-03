<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	
	<title>meetme</title>
	
	<link rel="shortcut icon" HREF="photos/log.jpg" />
	
	<meta content="Metadescription" name="Insert the description of this page here" />
    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />
	
	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	
	
	<script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
	<script type="text/javascript" SRC="js/superfish/superfish.js"></script>
	<script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
			$("ul.sf-menu").supersubs({ 
				minWidth:    12,   
				maxWidth:    27,   
				extraWidth:  1      
								   
			}).superfish();  
							 
							 
		}); 
	</script>
	
	
	
	<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
	</script>
	
	
	
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
	</script>
<!--===============================================================================================-->
</head>
<style>
ul{
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #333;
}
li{
	float: left;
}
li a{
	display: block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}
li a:hover:not(.active){
	background-color: #111;
}
.active{
	background-color: #111;
}




* {
  margin: 0;
  padding: 0;
  border: 0;
  text-decoration: none;
  outline: none;
}


.login-main {
  width: 300px;
  height: 120px;
  position: relative;
  margin: 100px;
  
  bottom: 0px;
  left: 0px;
  right: 0px;
  background:url("photos/fiend.jpg");
  padding: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  border-radius: 10px;
}
.login-main p {
  text-indent: 10px;
  color:#fff;
}
.box1 {
  background: #fff;
  height: 40px;
  text-indent: 10px;
  width: 90%;
  margin-bottom: 2px;
  color: #3B424D;
  font-size: 15px;
  font-weight: 400;
}
.border1 {
  -webkit-border-radius: 5px 5px 0 0;
  -moz-border-radius: 5px 5px 0 0;
  -ms-border-radius: 5px 5px 0 0;
  -o-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
}
.border2 {
  -webkit-border-radius: 0px 0 5px 5px;
  -moz-border-radius: 0px 0 5px 5px;
  -ms-border-radius: 0px 0 5px 5px;
  -o-border-radius: 0px 0 5px 5px;
  border-radius: 0px 0 5px 5px;
}
.send {
  width: 60px;
  height: 60px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  right: 9px;
  top: 20px;
  border: 5px solid #ff7e68;
  background: #3B424D;
  font-size: 18px;
  color: #fff;
  font-weight: normal;
  text-shadow: 1px 1px 2px #000;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
.send:hover {
  animation: spin 0.3s ease-in-out;
  -webkit-animation: spin 0.3s ease-in-out;
  -moz-animation: spin 0.3s ease-in-out;
  -ms-animation: spin 0.3s ease-in-out;
  -o-animation: spin 0.3s ease-in-out;
  cursor: pointer;
  color:#57FFFF;
}
@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
@-webkit-keyframes spin {
  from {
    -webkit-transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}
@-moz-keyframes spin {
  from {
    -moz-transform: rotate(0deg);
  }
  to {
    -moz-transform: rotate(360deg);
  }
}
@-o-keyframes spin {
  from {
    -o-transform: rotate(0deg);
  }
  to {
    -o-transform: rotate(360deg);
  }
}

</style>
	
<body>
	<ul>
	
	<li><a href="login.php">Login</a></li>
	<li><a href="signup.php">Signup</a></li>
	</ul>
	<div class="limiter">
		<div class="container-login100">
				<div class="login500-pic js-tilt" data-tilt>
					<a href="login.php"><img src="photos/log.jpg" alt="IMG"height="500"width="500"></a>
				</div> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				
				<?php
  		require("session/DBConnection.php");
 		if (isset($_POST['login'])) 
  	{	
	
		$username = $_POST['username'];			
		$password = $_POST['password'];
	
		$result = mysql_query("SELECT * FROM members
				WHERE ((`members`.`username` = '$username') AND (`members`.`password` = '$password') AND (`members`.`confirmation` = '1'))");
				
				if (!$result) 
					{
					
header("location:login.php");
					}
					$numberOfRows = MYSQL_NUMROWS($result);				
					If ($numberOfRows == 0) 
						{
						echo " <font color= 'red'>Invalid username and password!</font>";
						
						}
					else if ($numberOfRows > 0) 
						{
						session_register('is');
						$_SESSION['log']['login']    = TRUE;
						$_SESSION['log']['username'] = $_POST['username'];
						$session = "1";	
		$query = mysql_query("SELECT * FROM members WHERE username = '$username'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	
				$image = $display['image'];
		$insert = "INSERT INTO users SET username = '$username', password = '$password', session_id= '', created_date = CURRENT_TIMESTAMP, modified_date = '0000-00-00 00:00:00', image = '$image'";
	$add_member = mysql_query($insert);
						
				$type= $display['type'];
				if ($type=="Admin"){
				  header("location:memberlist.php");
				  }
				else{
    				header("location:index.php");
    				}
				}
			}
?>
					
				<form id="form1" class="login100-form validate-form" method="post" action="login.php"><br><br>
					<fieldset>
					<span class="login100-form-title">
						 Login
					</span>

					</form>
					<div class="wrap-input100 validate-input" >
						<input id="txt_field" class="input100" type="text" onclick="this.value='';" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input id="password" class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="" aria-hidden="true"></i>
						</span>
					</div>
						<input class="button" value="login" type="submit" name="login"/>
							
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>

						<a class="txt2" href="signup.php"><br>
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	</fieldset>	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	<script type="text/javascript"> Cufon.now(); </script>
	
	<script type="text/javascript"> Cufon.now(); </script>

</body>
</html>
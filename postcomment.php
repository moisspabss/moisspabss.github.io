﻿<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
 <?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>meetme - <?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>	
<link rel="shortcut icon" HREF="photos/log.jpg" />
	
	<!-- Metadescription and MetaKeyWords are used for SEO -->
	<meta content="Metadescription" name="Insert the description of this page here" />
    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />
	
	<!-- JQUERY -->
	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	<!-- -END- JQUERY -->
	
	<!-- Superfish Menu -->
	<script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
	<script type="text/javascript" SRC="js/superfish/superfish.js"></script>
	<script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
			$("ul.sf-menu").supersubs({ 
				minWidth:    12,   // minimum width of sub-menus in em units 
				maxWidth:    27,   // maximum width of sub-menus in em units 
				extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
								   // due to slight rounding differences and font-family 
			}).superfish();  // call supersubs first, then superfish, so that subs are 
							 // not display:none when measuring. Call before initialising 
							 // containing tabs for same reason. 
		}); 
	</script>
	<!-- -END- Superfish Menu -->
	
	<!-- IE6 PNG Transparency Fix -->
	<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
	</script>
	<!-- -END- IE6 PNG Transparency Fix -->
	
	<!-- CUFON Font Replacement -->
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
	</script>
	<!-- -END- CUFON Font Replacement -->
	<style>

#info {
text-transform:capitalize;
font-weight: bold;
}
#names a {
text-transform:capitalize;
color: #51B22E;
 }
#names a:hover {
text-decoration: underline; }

#uu {
text-transform:none;
font-weight: bold;
}
#dd {
font-weight: normal;
color: #FFFFFF;
width: 100px;
text-transform: capitalize;
}
#check {
width: 20px;
float: left;
}

#id {
width: 300px;
font-weight: bold;
color: #FFFF66;
text-transform: none;
}
#divider {
border-top: 1px solid;
}
#sharetext {
width: 300px;
height: 60px;
background: #E8E8E8;
font-family: Arial, 'Helvetica', sans-serif;
font-size: 10px;
color: #000;
}
#share {
width: 300px;
height: auto;
}
#speak {
width: 75px;
margin-left: 230px;
}
#entry-text {
padding-left: 30px;
}
#cap {
text-transform: capitalize;
}
#catchy {
color: #000;
font-weight: bold;
text-transform: capitalize;
}
#type {
color: #008000;
font-weight: bold;
text-transform: capitalize;
}

#but {
padding-left: 200px;
}
#tym {
font-size: 10px;
text-transform:capitalize;
color: #FFCC33;
}
#comment {
color: #FFFFFF;
}
#post {
color: #E5E5E5;
width: 200px;
}
.nn {
color: #33FF00;
text-transform: capitalize;
}

/* -------------------------------------------------------------------------------------- TEASER */
#basic-modal a:hover {
color: #01651B;
text-decoration:underline;
}

#teaser{
	width:200px; height:117px;
	margin:15px 0 0 auto;
	display:block; clear:both;
	color:#FFF;
}
#teaser .cols{
	position:relative;
	width:200px; height:100px;
	margin:10px 0 0 0;
	display:block; float:left;
}
#teaser .cols h4{font-size:20px;}
#teaser .state_1{
	padding:25px 0 0 0px;
	display:block;
	width:195px;
	height:82px;
	position:absolute;
	top:0; left:0;
	z-index:49;
}
#teaser .state_2{
	padding:20px 10px 0 30px;
	display:block;
	width:195px;
	height:87px;
	text-align:center;
	position:absolute;
	top:-5px;
	left:-10px;
	z-index:50;
}

/*#teaser .icon1{
	background:url(../tmp/teaser_icon1.png) no-repeat 15px 5px;
}
#teaser .icon2{
	background:url(../tmp/teaser_icon2.png) no-repeat 15px 5px;
}
#teaser .icon3{
	background:url(../tmp/teaser_icon3.png) no-repeat 15px 5px;
}
*/
/* -------------------------------------------------------------------------------------- MAIN */
h7{	font-size:14px; color: #FFFF66;}
.box {min-height:1px;}
.box:after {display:block; visibility:hidden; clear:both; line-height:0; font-size:0; content:".";}
#photos {margin-bottom:15px; font-size:0; width: 600px;}
#photos img {display:block; float:left; width:116px; height:90px; border:0; margin-right:10px;}
#div {
margin-left: -149px; width: 550px; margin-top: 20px;
width: 545px;
border: none;
}
#quotes {
font-family:"Times New Roman", Courier, monospace;
font-style:italic;
text-align:center;
font-weight: bolder;
font-size: 15px;
line-height: 30px;
text-align: center;
color: #1001C9;
margin-top: 8px;
background: url("photo/b.png");
width: 350px;
height: 120px;
}
.separator_1{
		background:url(../images/highlight_1col.png);
		display:block; clear:both;
		margin:0 auto;
		width:215px; height:40px;
		border-top: 1px dotted #FFF;
	}
.col_1{
		display:block;
		float:left;
		width:215px;
		margin:0 10px;
	}
	.col_1 li{
		padding:0 0 10px 0;
		margin:0 0 10px 0;
		border-bottom:1px solid #333;
	}
	.col_3{
		display:block;
		float:left;
		width:685px;
		margin:0 10px;
	}
	
	.separator_3{
		background: url(../images/highlight_3cols.png);
		display:block; clear:both;
		margin:0 auto;
		width:685px; height:40px;
	}
	quote{ color: #767676;
		margin:0;
		padding-left: 0px;
		padding-right: 520px;
		padding-top: 0px;
		font-size:12px;
		text-align: inherit;
		float:none;
		width: 520px;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-style:italic; }

/*8888*/

body { background: url("images/header4.jpg") repeat-x top center; color:#555;}



#header{ background-color:#111; }



/* Elements ****************************************************************/

a { color:#51B22E; }



hr { background-color:#AAA; color:#AAA; }

blockquote { background:transparent url("../images/quote.png") no-repeat 10px 10px; color:#777; }

blockquote cite { color:#333; }

dt { color:#333; }

ul.green li { background:transparent url("../images/bullet_green.png") no-repeat scroll 7px 7px; }

ul.yellow li { background:transparent url("../images/bullet_yellow.png") no-repeat scroll 7px 7px; }

ul.blue li { background:transparent url("../images/bullet_blue.png") no-repeat scroll 7px 7px; }



img.framed { background-color:#F0F0F0; border:1px solid #AAA; }

a img.framed:hover { background-color:#DDD;  }



fieldset, legend { background-color:#F5F5F5; border:1px solid #AAA; }

input, textarea, select { background-color:#F0F0F0; border:1px solid #AAA; color:#444; }

input.button:hover { background-color:#111; color:#CCC; }



tr { background-color: #F5F5F5; }

th, td { border:1px solid #AAA; }

th { background-color: #F0F0F0; color:#333; }



acronym { border-bottom: 1px dotted #AAA; }

/* -END- Elements **********************************************************/



/* Headings ****************************************************************/

h1, h2, h3, h4, h5, h6 { color:#222; }

h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color:#222; }

h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover { color:#999; }



h1.border, 

h2.border, 

h3.border,

h4.border,

h5.border,

h6.border { border-bottom:1px solid #AAA; }



h1.logo a { background:transparent url("../images/logo.png") no-repeat center left; color:#EEE; }

/* -END-  Headings *********************************************************/



/* Breadcrumb **************************************************************/

#breadcrumb { background:#ddfecd url("../images/border_shadow.png") repeat-x 0 0; border-bottom:1px solid #FFF; border-top:1px solid #EAEAEA; color:#999; }

#breadcrumb input { background-color:#F0F0F0; border:1px solid #CCC; color:#444; }

#breadcrumb input.button { color:#555; }

#breadcrumb input.button:hover { background-color:#111; color:#CCC; }

/* -END- Breadcrumb ********************************************************/



/* Content *****************************************************************/

#content { background:#ddfecd url("../images/border_shadow.png") repeat-x 0 0; border-top:1px solid #EAEAEA; }

/* -END- Content ***********************************************************/



/* Portfolio ***************************************************************/

a.switch_thumb { background:#F0F0F0 url(../images/gallery.png) no-repeat right top; border:1px solid #AAA; color:#444; }

a.switch_thumb:hover { background-color:#111; color:#CCC; }

a.swap { background-position:right bottom; }



ul.portfolio a.lightbox { background:transparent  url("../images/magnifier.png") no-repeat center center; }



ul.portfolio .list_view h3 { border-bottom:1px solid #AAA; }



.portfolio_single h3, 

.portfolio_single h4, 

.portfolio_single h5, 

.portfolio_single h6 { border-bottom:1px solid #AAA; }

/* -END- Portfolio *********************************************************/



/* Blog ********************************************************************/

ul.blog .blog_info { background-color:#111; }

ul.blog .blog_info { color:#CCC; }

ul.blog li.entry h3, 

ul.blog li.entry h4, 

ul.blog li.entry h5, 

ul.blog li.entry h6 { border-bottom:1px solid #AAA; }



ul.blog ul.comments .comment_content { border:1px solid #AAA; }

ul.blog ul.comments .comment_content small { color:#999; }

/* -END- Blog **************************************************************/



/* Blog_brief **************************************************************/

ul.blog_brief .blog_info { background-color:#111; }

ul.blog_brief .blog_info { color:#CCC; }

/* -END- Blog_brief ********************************************************/



/* Sidebar *****************************************************************/

.sidebar h3 { border-bottom:1px solid #AAA; }

.sidebar ul li a { color:#555; }

.sidebar ul li a:hover { color:#999; }

/* -END- Sidebar ***********************************************************/



/* Contact *****************************************************************/

#contact_form span.error { color:#C00; }

/* -END - Contact **********************************************************/



/* Pagination **************************************************************/

ul.pagination { color:#999; }

ul.pagination .current { border:1px solid #AAA; color:#555; }

/* -END- Pagination ********************************************************/



/* Footer ******************************************************************/

#footer { border-bottom:1px solid #000; color:#CCC; }

#footer h2, #footer h3, #footer h4, #footer h5, #footer h6 { color:#DDD; }

#footer ul.pages li a { color:#CCC; }

#footer ul.pages li a:hover { color:#51B22E; }

#footer .flickr img { border:1px solid #888; }

#footer .flickr img:hover { border-color: #FFF; }



#sub_footer { color:#CCC; border-top:1px solid #222; }

#sub_footer  a.logo { background:transparent url("../images/logo-32.png")no-repeat center left; color:#EEE; }

/* -END- Footer ************************************************************/


.container_12,.container_16{margin-left:auto;margin-right:auto;width:1000px}.grid_1,.grid_2,.grid_3,.grid_4,.grid_5,.grid_6,.grid_7,.grid_8,.grid_9,.grid_10,.grid_11,.grid_12,.grid_13,.grid_14,.grid_15,.grid_16{display:inline;float:left;position:relative;margin-left:20px;margin-right:20px}.container_12 .grid_3,.container_16 .grid_4{width:220px}.container_12 .grid_6,.container_16 .grid_8{width:460px}.container_12 .grid_9,.container_16 .grid_12{width:700px}.container_12 .grid_12,.container_16 .grid_16{width:940px}.alpha{margin-left:0}.omega{margin-right:0}.container_12 .grid_1{width:60px}.container_12 .grid_2{width:140px}.container_12 .grid_4{width:300px}.container_12 .grid_5{width:380px}.container_12 .grid_7{width:540px}.container_12 .grid_8{width:620px}.container_12 .grid_10{width:780px}.container_12 .grid_11{width:860px}.container_16 .grid_1{width:40px}.container_16 .grid_2{width:100px}.container_16 .grid_3{width:160px}.container_16 .grid_5{width:280px}.container_16 .grid_6{width:340px}.container_16 .grid_7{width:400px}.container_16 .grid_9{width:520px}.container_16 .grid_10{width:580px}.container_16 .grid_11{width:640px}.container_16 .grid_13{width:760px}.container_16 .grid_14{width:820px}.container_16 .grid_15{width:880px}.container_12 .prefix_3,.container_16 .prefix_4{padding-left:240px}.container_12 .prefix_6,.container_16 .prefix_8{padding-left:480px}.container_12 .prefix_9,.container_16 .prefix_12{padding-left:720px}.container_12 .prefix_1{padding-left:80px}.container_12 .prefix_2{padding-left:160px}.container_12 .prefix_4{padding-left:320px}.container_12 .prefix_5{padding-left:400px}.container_12 .prefix_7{padding-left:560px}.container_12 .prefix_8{padding-left:640px}.container_12 .prefix_10{padding-left:800px}.container_12 .prefix_11{padding-left:880px}.container_16 .prefix_1{padding-left:60px}.container_16 .prefix_2{padding-left:120px}.container_16 .prefix_3{padding-left:180px}.container_16 .prefix_5{padding-left:300px}.container_16 .prefix_6{padding-left:360px}.container_16 .prefix_7{padding-left:420px}.container_16 .prefix_9{padding-left:540px}.container_16 .prefix_10{padding-left:600px}.container_16 .prefix_11{padding-left:660px}.container_16 .prefix_13{padding-left:780px}.container_16 .prefix_14{padding-left:840px}.container_16 .prefix_15{padding-left:900px}.container_12 .suffix_3,.container_16 .suffix_4{padding-right:240px}.container_12 .suffix_6,.container_16 .suffix_8{padding-right:480px}.container_12 .suffix_9,.container_16 .suffix_12{padding-right:720px}.container_12 .suffix_1{padding-right:80px}.container_12 .suffix_2{padding-right:160px}.container_12 .suffix_4{padding-right:320px}.container_12 .suffix_5{padding-right:400px}.container_12 .suffix_7{padding-right:560px}.container_12 .suffix_8{padding-right:640px}.container_12 .suffix_10{padding-right:800px}.container_12 .suffix_11{padding-right:880px}.container_16 .suffix_1{padding-right:60px}.container_16 .suffix_2{padding-right:120px}.container_16 .suffix_3{padding-right:180px}.container_16 .suffix_5{padding-right:300px}.container_16 .suffix_6{padding-right:360px}.container_16 .suffix_7{padding-right:420px}.container_16 .suffix_9{padding-right:540px}.container_16 .suffix_10{padding-right:600px}.container_16 .suffix_11{padding-right:660px}.container_16 .suffix_13{padding-right:780px}.container_16 .suffix_14{padding-right:840px}.container_16 .suffix_15{padding-right:900px}.container_12 .push_3,.container_16 .push_4{left:240px}.container_12 .push_6,.container_16 .push_8{left:480px}.container_12 .push_9,.container_16 .push_12{left:720px}.container_12 .push_1{left:80px}.container_12 .push_2{left:160px}.container_12 .push_4{left:320px}.container_12 .push_5{left:400px}.container_12 .push_7{left:560px}.container_12 .push_8{left:640px}.container_12 .push_10{left:800px}.container_12 .push_11{left:880px}.container_16 .push_1{left:60px}.container_16 .push_2{left:120px}.container_16 .push_3{left:180px}.container_16 .push_5{left:300px}.container_16 .push_6{left:360px}.container_16 .push_7{left:420px}.container_16 .push_9{left:540px}.container_16 .push_10{left:600px}.container_16 .push_11{left:660px}.container_16 .push_13{left:780px}.container_16 .push_14{left:840px}.container_16 .push_15{left:900px}.container_12 .pull_3,.container_16 .pull_4{left:-240px}.container_12 .pull_6,.container_16 .pull_8{left:-480px}.container_12 .pull_9,.container_16 .pull_12{left:-720px}.container_12 .pull_1{left:-80px}.container_12 .pull_2{left:-160px}.container_12 .pull_4{left:-320px}.container_12 .pull_5{left:-400px}.container_12 .pull_7{left:-560px}.container_12 .pull_8{left:-640px}.container_12 .pull_10{left:-800px}.container_12 .pull_11{left:-880px}.container_16 .pull_1{left:-60px}.container_16 .pull_2{left:-120px}.container_16 .pull_3{left:-180px}.container_16 .pull_5{left:-300px}.container_16 .pull_6{left:-360px}.container_16 .pull_7{left:-420px}.container_16 .pull_9{left:-540px}.container_16 .pull_10{left:-600px}.container_16 .pull_11{left:-660px}.container_16 .pull_13{left:-780px}.container_16 .pull_14{left:-840px}.container_16 .pull_15{left:-900px}.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:after{clear:both;content:' ';display:block;font-size:0;line-height:0;visibility:hidden;width:0;height:0}* html .clearfix,*:first-child+html .clearfix{zoom:1}
</style>	
</head>
<?php
include ("session/session.php");
include("session/DBConnection.php");
?>
<body>
<div id="header">
  <div class="container_12">
    <!-- end grid -->
    <div class="grid_9">
      <ul class="sf-menu">
        <li> <a href="index.php">Home</a> </li>
     
              <li><a href="profile.php">Profile</a></li>
              <li><a href="info.php">Info</a></li>
              <li><a href="photos.php">My Photos</a></li>
           
        <li> <a href="friends.php">Friends
          <?php
	$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM friends WHERE friend = '" . $user ."' and status = 'requesting'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	 
				if ($numberOfRows > 0 )
				  echo '<font size="2" color="red">' . $numberOfRows .'</font>' ;
				else
    			 echo " ";	
				?>
        </a> </li>
        <li> <a href="mail.php">Messages
          <?php
$user = $_SESSION['log']['username'];
$status = 'unread';
$result = mysql_query("SELECT * FROM messages WHERE recipient='" . $user."' AND status='$status'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '<font size="1" color="red"><b>' . $numberOfRows .'</b></font>';} 
	?>
        </a> </li>
    
      </ul>
   
    </div>
  
  </div>
 
  <div class="clear"></div>
</div>
<!-- end header -->
	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
				<p><a HREF="home.php">Home</a> » Comments</p>
			</div><!-- end grid -->
			
			<div class="grid_3">
				
			</div><!-- end grid -->
		</div><!-- end container -->
	</div>
	
	<div id="content">
	  <div class="container_16 clearfix">
			<div class="grid_11 suffix_1 clearfix">
				<ul class="blog_brief">
				
<?php
$id = $_GET['pid'];
$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM post WHERE post_id = '$id'";
$result = mysql_query($query);

while($row = mysql_fetch_assoc($result))

{				 echo '<li class="entry clearfix">';
				 echo '<div class="blog_info">';
				 /*echo '<span class="date"></span>';*/
				 echo '<span class="info" style="float: left;">';
$user = $row['username'];
$q = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
$dis = mysql_fetch_array($q);
$ff = $row['friend'];
$ss = mysql_query("SELECT * FROM members WHERE username = '$ff'") or die (mysql_error()); 
$gwa = mysql_fetch_array($ss);
$username =  $_SESSION['log']['username'];
$id = $dis['member_id'];
if($row['username'] == $row['friend']){
if($user == $username){
				 echo '<a href="profile.php" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; 

				 echo '&nbsp;says that..</span>';
				 echo '<div class="clear"></div>';
				 echo '</div>';
				 echo '<img class="framed" height=100 width=80 align="left" SRC="'. $dis['image'] .'" alt="'. $row['firstname'] . " " . $row['lastname'] .'" />';}

				elseif($user != $username){
				 echo '<a href="userprofile.php?userid=' . $id . '" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; 

				 echo '&nbsp;says that..</span>';
				 echo '<div class="clear"></div>';
				 echo '</div>';
				 echo '<img class="framed" height=100 width=80 align="left" SRC="'. $dis['image'] .'" alt="'. $row['firstname'] . " " . $row['lastname'] .'" />'; }
				 echo '<div class="grid_7 omega">';
$str2 = $row['content'];
				 echo '<p style="color: #000;"><a style="color: #000;" HREF="postcomment.php?pid='. $row['post_id'].'">' . wordwrap($str2, 8, "\n", true) . '</a></p><br />';
				 }
				 
		if($row['username'] != $row['friend']){
if($user == $username){
				 echo '<a href="profile.php" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; }
				elseif($user != $username){
				 echo '<a href="userprofile.php?userid=' . $id . '" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; }

				 echo '&nbsp;&nbsp;says to</span>';
				 if($row['friend'] == $username){
				 echo '<a href="profile.php" style="text-transform: capitalize;">';
				 echo '<span style="text-transform: capitalize; font-size: 10px;">' .$row['friend_firstname'] . " " . $row['friend_lastname'] . '</a></span>'; }
				elseif($row['friend'] != $username){
				 echo '<a href="userprofile.php?userid=' . $gwa['member_id'] . '">';
				 echo '<span style="text-transform: capitalize; font-size: 10px;"">' .$row['friend_firstname'] . " " . $row['friend_lastname'] . '</a></span>'; }
				 echo '<div class="clear"></div>';
				 echo '</div>';
				 echo '<img class="framed" height=100 width=80 align="left" SRC="'. $dis['image'] .'" alt="'. $row['firstname'] . " " . $row['lastname'] .'" />';
				 echo '<div class="grid_7 omega">';
$str1 = $row['content'];
				 echo '<p style="color: #000;"><a style="color: #fff;" HREF="postcomment.php?pid='. $row['post_id'].'">' . wordwrap($str1, 8, "\n", true) . '</a></p><br />';
				 }
		 
		 
				 echo '<font style="color:#000099;font-size: 10px;">';
	$days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
		
			echo '</font><br />';

$qqq = mysql_query("SELECT * FROM postcomment WHERE post_id='" . $row['post_id']."'");
	$numberOfRows = MYSQL_NUMROWS($qqq);
	if ($numberOfRows > 0){
	if ($numberOfRows == 1){
	echo '<a HREF="postcomment.php?pid='. $row['post_id'].'"><small>1 comment</small></a>';}
	if ($numberOfRows==3 || $numberOfRows==2){
	echo '<a HREF="postcomment.php?pid='. $row['post_id'].'"><small>' . $numberOfRows. " comments</small></a>";}
	if ($numberOfRows >= 4){
	echo '<a HREF="postcomment.php?pid='. $row['post_id'].'"><small>('. $numberOfRows.')View all comments</small></a>'; }
	}echo '<br /><br />';
	
	$query1  = "SELECT *,
		UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM postcomment WHERE post_id=" . $row['post_id'] . " ORDER BY comment_id";
	$result1 = mysql_query($query1);
	while($row1 = mysql_fetch_assoc($result1))
	{				 
		echo '<br /><div id="comment">';
		$user = $row1['commentby'];
$s = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
$d = mysql_fetch_array($s);
$id = $d['member_id'];

		echo '<img class="framed" height=40 width=40 align="left" SRC="'. $d['image'] .'" alt="'. $row1['firstname'] . " " . $row1['lastname'] .'" />';
		echo '&nbsp;';
		echo '<span class="nn">';
		$username =  $_SESSION['log']['username'];
$id = $d['member_id'];
if($user == $username){
 echo '<a href="profile.php" style="text-transform: capitalize;">';
		echo $row1['firstname'] . " " . $row1['lastname'] . "</a></span>";
		echo '<br />&nbsp;&nbsp;&nbsp;'; }
elseif($user != $username){
 echo '<a href="userprofile.php?userid=' . $id . '" style="text-transform: capitalize;">';
		echo $row1['firstname'] . " " . $row1['lastname'] . "</a></span>";
		echo '<br />&nbsp;&nbsp;&nbsp;'; }	

	$str = $row1['content'] ;
echo '<a style="color: #000;" HREF="postcomment.php?pid='. $row1['post_id'].'">' . wordwrap($str, 8, "\n", true) . '</a>';
				 	
	
		echo '<br />';
		echo '&nbsp;';
		echo '<font style="color:#000099;font-size: 10px;">';
						$days2 = floor($row1['CommentTimeSpent'] / (60 * 60 * 24));
						$remainder = $row1['CommentTimeSpent'] % (60 * 60 * 24);
						$hours = floor($remainder / (60 * 60));
						$remainder = $remainder % (60 * 60);
						$minutes = floor($remainder / 60);
						$seconds = $remainder % 60;	
						if($days2 > 0)
							echo date('F d Y', $row1['date_created']);
						elseif($days2 == 0 && $hours == 0 && $minutes == 0)
							echo "few seconds ago";		
						elseif($days2 == 0 && $hours == 0)
							echo $minutes.' minutes ago';
											
		echo '</font>';				
		echo '</div>';
	
	}
		$qr = mysql_query("SELECT * FROM members WHERE username='".$_SESSION['log']['username'] ."'");
echo "<br />";
while($row3 = mysql_fetch_array($qr))
  {  
	echo '<div class="fieldcomment">';
	echo '<form action="commentcomment.php" method="GET">'; 
	echo'<input type="hidden" name="post_id" value="'. $row['post_id'] .'">';
	echo'<input type="hidden" name="username" value="'. $row3['username'] .'">';
	echo'<input type="hidden" name="firstname" value="'. $row3['firstname'] .'">';
	echo'<input type="hidden" name="lastname" value="'. $row3['lastname'] .'">';
	echo'<input type="hidden" name="picture" value="'. $row3['image'] .'">';
	echo '<img class="framed" height=40 width=40 align="left" SRC="'. $row3['image'] .'" alt="'. $row3['firstname'] . " " . $row3['lastname'] .'" />';
	echo '&nbsp;';
	echo '<input type="text" value="Leave a comment" onclick="this.value=\'\'" style="color: #333333; width: 200px;" name="postcomment" />';
	echo '&nbsp;<input type="submit" value="Post" style="background-color: #333; color: #fff; width: 50px;" name="post" />';
	echo '</form></div>';
	echo '</div></li>';
		} 
}
?>
		
				</ul><!-- end blog , end grid-->
			</div>
		  <!-- end sidebar, end grid -->
          <!-- end grid -->
        </div>
		<!-- end container -->
	</div><!-- end content -->
	<!-- end footer -->
	
	<!-- end subfooter -->
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>

<?php 
include_once 'include/config.php';
include_once 'include/functions.php';

$descr = "Desarrollando tronchantes carácteres binários para hipoglúcidos.";

$uuid = array("0000000000", "0523651489");
$nick = array("pagoru", "Bob");
$smsUUID = array("0a9aAaw3", "9r3VAaw0");
$sms = array("¡Hola que tal estas en esta noche de tequila bom bom, hola nena!", "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA");

$r = 8;

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
	<body>
		<?php include 'include/header.php';?>
		<header></header>
		<div class="d">
			<?php include 'include/in_dashboard.php';?>
			<div class="p">
				<input id="sms" class="box" placeholder="sms" autocomplete="off" type="text">
				<input id="public" class="button" value="public " type="submit">
				<input maxlength="13" id="private" disabled="true" class="boxPrivate" placeholder="user ID" autocomplete="off" type="text">
				<input id="chars" class="boxChars" placeholder="64 characters" type="text" disabled="true">
				<input id="send" class="button" value="Send" type="submit" disabled="true">
				<?php for ($i = 0; $i < $r; $i++):?>
				<div class="sms" <?php if($i < $r - 1):?> style="margin-bottom: 8px;" <?php endif;?>>
					<div class="postUUID">
						<a class="uuid" href="/p?p=<?php echo $uuid[$i];?>"><?php echo getID($uuid[$i])." [".$nick[$i]."]";?></a><a class="smsPost" href="/sms?m=0a9aAaw3">12/01/14 04:23</a>
					</div>
					<div style="background-image: url('images/default.jpg');" class="img_profile"></div>
					<div class="sms_text"><?php echo $sms[$i];?></div>
					<input id="reply" class="button reply" value="Reply" type="submit">
					<input id="reSend" class="button reSend" value="ReSend" type="submit">
					<input id="reSendNumbers" class="button reSendNumbers" value="0" type="submit">
				</div>
				<?php endfor;?>
			</div>
		</div>
		<script><?php include 'js/js.js';?></script>
	</body>
</html>
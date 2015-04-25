<?php 
include_once 'include/config.php';
include_once 'include/functions.php';

$descr = "Desarrollando tronchantes carácteres binários para hipoglúcidos.";

$uuid = array("0000000000", "0523651489");
$nick = array("pagoru", "Bob");
$smsUUID = array("0a9aAaw3", "9r3VAaw0");
$sms = array("¡Hola que tal estas en esta noche de tequila bom bom, hola nena!", "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA");

$mms = array("http://goo.gl/B83cQb");

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
					<?php if(empty($mms[$i])):?>
						<?php include 'include/sms.php';?>
					<?php else:?>
						<?php include 'include/mms.php';?>
					<?php endif;?>
				<?php endfor;?>
			</div>
		</div>
		<script><?php include 'js/js.js';?></script>
	</body>
</html>
<?php 
include_once 'include/config.php';
include_once 'include/functions.php';

$descr = "Desarrollando tronchantes carácteres binários para hipoglúcidos.";

$uuid = array("0000000000", "0523651489");
$nick = array("pagoru", "Bob");
$smsUUID = array("0a9aAaw3", "9r3VAaw0", "9r3VAaw1");
$sms = array("¡Hola que tal estas en esta noche de tequila bom bom, hola nena!", 
"AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA", "", "", "", "No es el rick roll, lo juro por dios!");

$mms = array("gl/B83cQb", "gl/NBJjlc", "gl/9YmvVh", "gl/fPmMsj", "gl/auSMNy", "gl/xlcV4A", "gl/ebVglk");

$r = 8;

$result = MYSQL_open("net", "SELECT * FROM `ProfileUsers` WHERE `UniqueUserId`='0000000000'");
$row = mysql_fetch_array($result);
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
		<?php include 'include/sizedImage.php';?>
		<div class="d">
			<?php include 'include/includes/in_dashboard.php';?>
			<div class="p">
				<?php include 'include/includes/send.php';?>
				<?php for ($i = 0; $i < $r; $i++):?>
					<?php if(empty($mms[$i])):?>
						<?php include 'include/includes/sms.php';?>
					<?php else:?>
						<?php include 'include/includes/mms.php';?>
					<?php endif;?>
				<?php endfor;?>
			</div>
		</div>
		<script><?php include 'js/js.js';?></script>
		<?php echo $row['NickName'];?>
	</body>
</html>
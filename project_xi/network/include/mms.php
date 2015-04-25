<div class="mms" <?php if($i < $r - 1):?> style="margin-bottom: 8px;" <?php endif;?>>
	<div class="postUUID">
		<a class="uuid" href="/p?p=<?php echo $uuid[$i];?>"><?php echo getID($uuid[$i])." [".$nick[$i]."]";?></a><a class="smsPost" href="/sms?m=0a9aAaw3">12/01/14 04:23</a>
	</div>
	<div style="background-image: url('images/default.jpg');" class="img_profile"></div>
	<div class="sms_text"><?php echo $sms[$i];?></div>
	<div class="mmsImage" style="background-image: url('<?php echo $mms[$i]?>'); "></div>
	<input id="reply" class="button reply" value="Reply" type="submit">
	<input id="reSend" class="button reSend" value="ReSend" type="submit">
	<input id="reSendNumbers" class="button reSendNumbers" value="0" type="submit">
</div>
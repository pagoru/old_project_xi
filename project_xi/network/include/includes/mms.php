<?php 
if(getimagesize(getUrlGL($mms[$i]))[0] != null):
?>
<div class="mms" <?php if($i < $r - 1):?> style="margin-bottom: 8px;" <?php endif;?>>
	<div class="postUUID">
		<a class="uuid" href="/p?p=<?php echo $uuid[$i];?>"><?php echo getID($uuid[$i])." [".$nick[$i]."]";?></a><a class="smsPost" href="/sms?m=0a9aAaw3">12/01/14 04:23</a>
	</div>
	<div style="background-image: url('images/default.jpg');" class="img_profile"></div>
	<div class="sms_text"><?php echo $sms[$i];?> <a target="_blank" href="<?php echo getUrlGL($mms[$i])?>"><?php echo $mms[$i];?></a></div>
	<div id="<?php echo $smsUUID[$i];?>" class="mmsImage" style="background-image: url('<?php echo getUrlGL($mms[$i])?>'); "></div>
	<input id="reply" class="button reply" value="Reply" type="submit">
	<input id="reSend" class="button reSend" value="ReSend" type="submit">
	<input id="reSendNumbers" class="button reSendNumbers" value="0" type="submit">
	<script>
		$("#<?php echo $smsUUID[$i];?>").click(function() {
			$(".sizedImage").prop('style', "background-image: url('<?php echo getUrlGL($mms[$i])?>');");
			$("#maxImage").show();
		});
	</script>
</div>
<?php 
elseif (strpos(getRealUrl(getUrlGL($mms[$i])), "youtube.com/watch?v=")):
?>
<div class="mms" <?php if($i < $r - 1):?> style="margin-bottom: 8px;" <?php endif;?>>
	<div class="postUUID">
		<a class="uuid" href="/p?p=<?php echo $uuid[$i];?>"><?php echo getID($uuid[$i])." [".$nick[$i]."]";?></a><a class="smsPost" href="/sms?m=0a9aAaw3">12/01/14 04:23</a>
	</div>
	<div style="background-image: url('images/default.jpg');" class="img_profile"></div>
	<div class="sms_text"><?php echo $sms[$i];?> <a target="_blank" href="<?php echo getUrlGL($mms[$i])?>"><?php echo $mms[$i];?></a></div>
	<div class="mmsImage">
	<iframe src="https://www.youtube.com/embed/
	<?php 
	parse_str( parse_url( getRealUrl(getUrlGL($mms[$i])), PHP_URL_QUERY ), $my_array_of_vars );
	echo $my_array_of_vars['v'];
	?>
	?theme=light&amp;hd=1&amp;rel=0&amp;autohide=1&amp;showinfo=0&amp;wmode=opaque" allowfullscreen="" showinfo="0" frameborder="0" height="196" width="400"></iframe>
	</div>
	<input id="reply" class="button reply" value="Reply" type="submit">
	<input id="reSend" class="button reSend" value="ReSend" type="submit">
	<input id="reSendNumbers" class="button reSendNumbers" value="0" type="submit">
</div>
<?php 
else:
?>
<div class="sms web" <?php if($i < $r - 1):?> style="margin-bottom: 8px;" <?php endif;?>>
	<div class="postUUID">
		<a class="uuid" href="/p?p=<?php echo $uuid[$i];?>">
		<?php echo getID($uuid[$i])." [".$nick[$i]."]";?></a>
		<a class="smsPost" href="/sms?m=0a9aAaw3">12/01/14 04:23
		</a>
	</div>
	<div style="background-image: url('images/default.jpg');" class="img_profile"></div>
	<div class="sms_text"><?php echo $sms[$i];?> <a target="_blank" href="<?php echo getUrlGL($mms[$i])?>"><?php echo $mms[$i];?></a></div>
	<a target="_blank" href="<?php echo getUrlGL($mms[$i]);?>">
		<div id="<?php echo $smsUUID[$i];?>" class="mmsWeb" ><div style="float: left; height: 16px; width: 16px; margin-right: 10px; border-radius: 0px 0px 0px 8px; background-image: url('<?php echo getFavicon(getUrlGL($mms[$i]));?>'); "></div><?php echo getTitle(getUrlGL($mms[$i]));?></div>
	</a>
	<input id="reply" class="button reply" value="Reply" type="submit">
	<input id="reSend" class="button reSend" value="ReSend" type="submit">
	<input id="reSendNumbers" class="button reSendNumbers" value="0" type="submit">
</div>
<?php 
endif;
?>

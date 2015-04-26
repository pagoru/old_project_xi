<div class="first">
	<div class="dash">
		<div class="board">
			<div style="background-image: url('images/default.jpg');" class="img_profile"></div>
			<div class="profileChar">
			<a href="/p?p=<?php echo $uuid[0];?>" class="uuid"><?php echo getID($uuid[0])." [".$nick[0]."]";?></a><br>
			<a>2560 caracteres restantes.</a></div><br>
			<div class="profileDesc">"<?php echo $descr;?>"</div>
			<div class="dashContacts bold">0</div><div class="dashContacts bold">0</div><div class="dashContacts bold">0</div><div class="dashContacts bold">0</div>
			<div class="dashContacts">sms</div><div class="dashContacts">mms</div><div class="dashContacts">contacts</div><div class="dashContacts">add. book</div>
			
		</div>
	</div>
	<div class="f">
		<div class="tt">
			<a class="bold">Tag Topic</a>
			<?php for ($i = 0; $i < 8; $i++):?>
			<div class="tagT bold">#FirstTag<a class="tagTNum">612 tags</a></div>
			<?php endfor;?>
		</div>
	</div>
	<?php include '../footer.php';?>
</div>
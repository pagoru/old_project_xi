<?php 
function getID($uuid){
	
	return substr($uuid, 0, 1)."-".substr($uuid, 1, 3)."-".substr($uuid, 4, 3)."-".substr($uuid, 7, 3);
}

?>
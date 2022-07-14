<?php  
	if(!defined('SOURCES')) die("Error");

	$rowDetailPhoto = $d->rawQuery("select name$lang, photo, link, type from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc",array($type));	
	
?>
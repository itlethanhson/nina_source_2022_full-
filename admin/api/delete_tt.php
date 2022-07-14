<?php
	include "config.php";
	
	$id=$_POST['id'];
	$table=$_POST['table'];

	/*$d->reset();	
	$sql = "delete from #_$table where id='".$id."'";
	$d->query($sql);*/

	$d->rawQuery("delete from #_$table where id='".$id."'",array());
?>
<?php
	include "config.php";

	$table = $_POST['table'];
	$id = $_POST['id'];
	$cot = $_POST['cot'];
	$type = $_POST['type'];

	$row = $d->rawQueryOne("select id, photo from #_".$table." where id = ? and type = ? limit 0,1",array($id,$type));
	$func->deleteFile('../'.UPLOAD_NEWS.$row[$cot]);
	
	$data[$cot] = '';	
	$d->where('id', $id);
	$d->update($table,$data);
?>
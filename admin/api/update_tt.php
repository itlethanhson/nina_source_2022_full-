<?php
	include "config.php";

	$table = $_POST['table'];
	$id = $_POST['id'];
	$name = $_POST['name'];
	$value = $_POST['value'];

	if($name=='namevi'||$name=='thuoctinh1'||$name=='thuoctinh2'){

		$data[$name] = $value;
	
	}else if($name=='regular_price'){
		$data['regular_price'] = str_replace(",","",$value) ;

	}else if($name=='sale_price'){
		$data['sale_price'] = str_replace(",","",$value) ;

	} 
	$d->where('id', $id);
	$d->update($table,$data);
?>
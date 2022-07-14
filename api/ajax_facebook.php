<?php 
	include "config.php";

	//$act = (string)trim(strip_tags($_POST['act']));
	//die($login_member);
	global $d;
	$id_facebook = (string)$_POST['id'];
	$ten = (string)$_POST['name'];
	$email = (string)$_POST['email'];
	$url_img=$_POST['picture']['data']['url'];
	$url_img = explode("?", $url_img);
	
	$check_fb = $d->rawQueryOne("select id,email,ten,username,dienthoai,diachi from #_member where id_facebook = ? limit 0,1",array($id_facebook));

	//Chưa có trong bảng thành viên
	if(empty($check_fb))
	{
		$img_gg=$_POST['picture']['data']['url'];
		$img_gg = explode("?", $img_gg);
		$img_gg =$img_gg[0];
		$img_gg ="https://graph.facebook.com/$id_gg/picture?type=large";
		$data['id_facebook'] = $id_facebook;
		$data['ten'] = $ten;
		$data['username'] = $ten;
		$data['email'] = $email;
		$data['hienthi'] = 1;
		
		if($d->insert('member',$data)){
			$id_insert = $d->getLastInsertId();
			
			$lastlogin = time();
			$login_session = md5($id_facebook.$lastlogin);
			$d->rawQuery("update #_member set login_session = ?, lastlogin = ? where id = ?",array($login_session,$lastlogin,$id_insert));
			$_SESSION[$login_member]['active'] = true;
			$_SESSION[$login_member]['id'] = $id_insert;
			$_SESSION[$login_member]['username'] = $ten;
			$_SESSION[$login_member]['email'] = $email;
			$_SESSION[$login_member]['ten'] = $ten;
			$_SESSION[$login_member]['login_session'] = $login_session;
			$return['thongbao'] = 'Đăng nhập thành công.';
			$return['nhaplai'] = 'nhaplai';
		}
	}
	//Đã đang nhập bàng facebook rùi
	else
	{
		$lastlogin = time();
		$login_session = md5($check_fb['id_facebook'].$lastlogin);
		$d->rawQuery("update #_member set login_session = ?, lastlogin = ? where id = ?",array($login_session,$lastlogin,$check_fb['id']));
		$_SESSION[$login_member]['active'] = true;
		$_SESSION[$login_member]['id'] = $check_fb['id'];
		$_SESSION[$login_member]['username'] = $check_fb['username'];
		$_SESSION[$login_member]['email'] = $check_fb['email'];
		$_SESSION[$login_member]['ten'] = $check_fb['ten'];
		$_SESSION[$login_member]['login_session'] = $login_session;
		$return['thongbao'] = 'Đăng nhập thành công.';
		$return['nhaplai'] = 'nhaplai';
		
	}
	echo json_encode($return);
 ?>
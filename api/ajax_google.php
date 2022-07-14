<?php
	include "config.php";
    
    $id_google = (string)$_POST['id'];
    $ten = (string)$_POST['name'];
    $email = (string)$_POST['email'];
    
    $check_gg = $d->rawQueryOne("select id,email,ten,username,id_google from #_member where id_google = ? limit 0,1",array($id_google));

    //Chưa có trong bảng thành viên
    if(empty($check_gg))
    {
        $data['id_google'] = $id_google;
        $data['ten'] = $ten;
        $data['username'] = $ten;
        $data['email'] = $email;
        $data['hienthi'] = 1;

        if($d->insert('member',$data)){
            $id_insert = $d->getLastInsertId();

            $lastlogin = time();
            $login_session = md5($id_google.$lastlogin);
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
    //Đã đang nhập bàng google rùi
    else
    {
        $lastlogin = time();
        $login_session = md5($id_google.$lastlogin);
        $d->rawQuery("update #_member set login_session = ?, lastlogin = ? where id = ?",array($login_session,$lastlogin,$check_gg['id']));
        $_SESSION[$login_member]['active'] = true;
        $_SESSION[$login_member]['id'] = $check_gg['id'];
        $_SESSION[$login_member]['username'] = $check_gg['username'];
        $_SESSION[$login_member]['email'] = $check_gg['email'];
        $_SESSION[$login_member]['ten'] = $check_gg['ten'];
        $_SESSION[$login_member]['login_session'] = $login_session;
        $return['thongbao'] = 'Đăng nhập thành công.';
        $return['nhaplai'] = 'nhaplai';
       
    }
    echo json_encode($return);
?>
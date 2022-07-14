<?php
    include ("config.php");
    function phantrang_ajax($cur_p , $total_p , $tab_return, $page_per, $table_select, $type_select, $where_select, $id_danhmuc, $id_list='', $showphantrang=1) {
        $pageSize = 5;
        $offset = 2;
        $arr_url = explode('&p',$url);
        $url = $arr_url[0];
        // if ($totalRows<=0) return "";
        $totalPages = $total_p; /*ceil($totalRows/$pageSize);*/;
        if ($totalPages<=1) return "";
        $currentPage = $cur_p;
        settype($currentPage,"int");
        if ($currentPage <=0) $currentPage = 1;
        $firstLink = '<li><a  class="left" data-page="1" data-tab="'.($tab_return).'" data-per="'.($page_per).'" data-table="'.($table_select).'" data-type="'.($type_select).'" data-where="'.($where_select).'"  data-danhmuc="'.($id_danhmuc).'" data-list="'.($id_list).'"  data-showphantrang="'.($showphantrang).'"><i class="fas fa-caret-left"></i></a></li>';
        $lastLink = '<li><a  class="right" data-page="'.($totalPages).'" data-tab="'.($tab_return).'" data-per="'.($page_per).'" data-table="'.($table_select).'" data-type="'.($type_select).'" data-where="'.($where_select).'"  data-danhmuc="'.($id_danhmuc).'" data-list="'.($id_list).'"  data-showphantrang="'.($showphantrang).'"><i class="fas fa-caret-right"></i></a></li>';;
        $from = $currentPage - $offset;
        $to = $currentPage + $offset;
        if ($from <=0) { $from = 1;   $to = $offset*2; }
        if ($to > $totalPages) { $to = $totalPages; }
        for($j = $from; $j <= $to; $j++) {
          if ($j == $currentPage) $links = $links . '<li><a  class="active" data-page="'.($j).'" data-tab="'.($tab_return).'" data-per="'.($page_per).'" data-table="'.($table_select).'" data-type="'.($type_select).'" data-where="'.($where_select).'"  data-danhmuc="'.($id_danhmuc).'" data-list="'.($id_list).'"  data-showphantrang="'.($showphantrang).'">'.$j.'</a></li>';
          else{
        $qt = $url. "&p={$j}";
        $links= $links . '<li><a class="" data-page="'.($j).'" data-tab="'.($tab_return).'" data-per="'.($page_per).'" data-table="'.($table_select).'" data-type="'.($type_select).'" data-where="'.($where_select).'"  data-danhmuc="'.($id_danhmuc).'" data-list="'.($id_list).'"  data-showphantrang="'.($showphantrang).'">'.$j.'</a></li>';
          }
        } //for
        return '<ul class="pages paging-sm">'.$firstLink.$links.$lastLink.'</ul>';
    }
   
    global $config_base,$lang,$config;
    // Lấy trang hiện tại
    $id_danhmuc = (int)$_POST['id_danhmuc'];//die('sacsadvv='.$id_danhmuc);
    $id_list = (int)$_POST['id_list'];
    $page_per = (int)$_POST['page_per'];
    $table_select = (string)$_POST['table_select'];
    $type_select = (string)$_POST['type_select'];
    $where_select = (string)$_POST['where_select'];
    $tab_return = (string)$_POST['tab_return'];
    $where_tmp = " ";
    if($_POST['page']!=0)
    $page = (string)$_POST['page'];
    else
    $page = 1;
    $showphantrang = (int)$_POST['showphantrang'];//echo ($showphantrang);
    // Kiểm tra trang hiện tại có bé hơn 1 hay không
    
    // Số record trên một trang
    $limit = $page_per;
    // Tìm start
    $start = ($limit * $page) - $limit;
    if($id_danhmuc) $where_tmp .= " and id_list=" . $id_danhmuc;
    else $where_tmp .= " ";
    if($id_list) $where_tmp .= " and id_cat=" . $id_list;//$where_select
    else $where_tmp .= " ";
    $where = "find_in_set('hienthi',status) and find_in_set('$where_select',status) and type='$type_select'  $where_tmp order by numb,id desc";
    $text_sql = "select * from table_$table_select where $where limit $start,$limit";

    $sqlc_num="SELECT count(id) as dem FROM table_$table_select where $where";
    $arr_sqlc_num=array(); 
    $count_num = $d->rawQueryOne($sqlc_num,$arr_sqlc_num);
    
    // Tổng số trang
    $page_count = ceil($count_num['dem'] / $page_per);
    
    // Câu truy vấn
    $arr_sqlc_records=array();
    $result_records = $d->rawQuery($text_sql,$arr_sqlc_records);

    if($id_danhmuc){
        $where2 = "find_in_set('hienthi',status) and id=".$id_danhmuc." order by numb,id desc";
        $sqlc_cap1="SELECT slug$lang FROM table_product_list where $where2";
        $arr_sqlc_cap1=array();
        $tencap1 = $d->rawQueryOne($sqlc_cap1,$arr_sqlc_cap1);
        $tenkhongdau = $tencap1['slug'.$lang];
    }else{
        $tenkhongdau = $type_select;
    }
    
    //$result_records = get_result($text_sql);
    //die($config['product']['san-pham']['showbuttonmuahang']);
?>
<?php if($result_records) {

    switch($type_select) {
            case 'san-pham':                
            case 'menu':                
            case 'thuc-don':                
            case 'phu-kien':                
                echo '<div class="pro-in">'.$func->lay_sanpham($result_records).'</div>';
                break;
            case 'thu-vien':
                echo ''.$func->lay_thuvien($result_records,1,THUMBS.'/300x350x1/').'';
                break;
            case 'cong-trinh':
            case 'tin-tuc':
            case 'dich-vu':
                echo ''.$func->lay_baiviet($result_records,'news',THUMBS.'/355x266x1/').'';
                break;
            case 'video':
                echo ''.$func->lay_video($result_records,THUMBS.'/480x360x2/').'';
                break;                
            default:
                echo ''.$func->lay_news($type_select,'',1,0,'','','',1,0,'catchuoi2',0,$result_records,_upload_tintuc_l,1,1,1).'';
                break;
        }     
 } ?>

<?php if($showphantrang==1){ if($page_count>1) echo phantrang_ajax($page,$page_count,$tab_return,$page_per,$table_select,$type_select,$where_select,$id_danhmuc,$id_list,$showphantrang); }else{?>
    <p class="xemthem-sp"><a href="<?=$tenkhongdau?>">Xem thêm</a></p>
<?php } ?>
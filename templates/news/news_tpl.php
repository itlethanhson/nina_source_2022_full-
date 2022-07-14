<div class="title-main"><span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span></div>
<div class="content-main">
    <div class="css_flex_baiviet">
    <?php if(!empty($news)) { 
        //css_baiviet_ngang: thể hiện 4 bài viết 1 hàng  
        // Đóng dấu:   WATERMARK.'/news/355x266x1/'

        echo $func->lay_baiviet($news,'news',THUMBS.'/355x266x1/');

        ?>
    <?php  } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?=khongtimthayketqua?></strong>
            </div>
        </div>
    <?php } ?>
    </div>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>

<?php if($com=='the-bao-hanh'){ 
    $about = $d->rawQueryOne("select noidung$lang from #_static where type = ? limit 0,1",array('nd-'.$type));
    ?>   
    <div class="thebaohanh">
        <div class="gioithieu-l">  
            <div class="flex-ht">
                <div class="input-ht">
                    <input type="text" name="idthe" id="idthe" placeholder="ID - Mã Số Thẻ">
                </div>
                <div class="input-ht">
                    <input type="text" name="tenkh" id="tenkh" placeholder="Tên Khách Hàng">
                </div>
                <div class="button-ht"><a class="submit-timhethong">TRUY XUẤT</a></div>
            </div>
        </div>
    </div>

    <div class="content-main w-clear" id="toc-content"><?=htmlspecialchars_decode($about['noidung'.$lang])?></div>

    <?php if($_GET['idthe']!=''||$_GET['ten']!=''){
        $opt = (isset($thebaohanh[0]['options2']) && $thebaohanh[0]['options2'] != '') ? json_decode($thebaohanh[0]['options2'],true) : null;
        ?>
        <h3 class="title-news">Thông tin thẻ: <?=$thebaohanh[0]['ten'.$lang]?></h3>
        <table style="width:100%" class="table_the">
              <tbody><tr>
                <th>Tên khách hàng</th>
                <th><?=$thebaohanh[0]['ten'.$lang]?></th>
            </tr>
            <tr>
                <td>Mã thẻ</td>
                <td><?=$thebaohanh[0]['mathe']?></td>
            </tr>
            <tr>
                <td>Loại thẻ</td>
                <td><?=$opt['loaithe']?></td>
            </tr>
            <tr>
                <td>Ngày kích hoạt</td>
                <td><?=$opt['ngaykichhoat']?></td>
            </tr>
            <tr>
                <td>Hạn bảo hành</td>
                <td><?=$opt['hanbaohanh']?></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><?=$opt['dienthoai']?></td>
            </tr>
            <tr>
                <td>Bác sĩ </td>
                <td><?=$opt['bacsi']?></td>
            </tr>
            <tr>
                <td>Nha khoa </td>
                <td><?=$opt['nhakhoa']?></td>
            </tr>
            <tr>
                <td>Labo </td>
                <td><?=$opt['labo']?></td>
            </tr>
            <tr>
                <td>Số lượng răng </td>
                <td><?=$opt['soluong']?></td>
            </tr>
        </tbody></table>
    <?php } ?>

<?php } ?>

<?php /*  css thebaohanh?>

.gg-dich{    text-align: right;}
.gg-dich .goog-te-gadget{font-size:0}
.gg-dich .goog-logo-link{display:none !important}
.gg-dich .goog-te-gadget .goog-te-combo{
    height: 34px;
    border: 1px solid #ccc;
    display: inline-block;
    width: 60%;
}
.flex-ht{margin-top: 20px;}
.flex-ht .input-ht{margin-bottom: 20px;width: 100%;}
.flex-ht .input-ht input{width:100%;border: 1px solid #c8dcee;background: #ebf2f8;height: 50px;padding: 0 10px;}
.flex-ht .button-ht a{border: none;width: 140px;background: #0c4ca3;color: #ffffff;opacity: 1;display: block;text-align: center;line-height: 50px;cursor: pointer;}
.flex-ht .button-ht a:hover{color: #ffc000;}
.thebaohanh{max-width: 800px;margin:auto;}
.thebaohanh .gioithieu-l{width: 100%;float: none;}
.thebaohanh .flex-ht{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.thebaohanh .flex-ht .button-ht{
    width: 20%;
}
.thebaohanh .flex-ht .input-ht{
    width: 39%;
}
.title-news{text-align: center;font-family: 'svn-ps';}
.table_the{width:100%;border-collapse:collapse;max-width:600px;margin:auto;}
.table_the tr:nth-child(2n){background:#f1f1f1;}
.table_the th,.table_the td{border:1px solid #d2d2d2;padding:10px 2%;width:50%;}
<?php */ ?>

<?php  /*foreach($news as $k => $v) { ?>
        <div class="news col-md-6">
            <div class="row">
                <a class="news-image col-sm-5" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                    <span class="scale-img">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '160x120x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </span>
                </a>
                <div class="news-info col-sm-7">
                    <h3 class="news-name">
                        <a class="text-decoration-none text-split transition" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                    </h3>
                    <p class="news-time"><?=ngaydang?>: <?=date("d/m/Y h:i A",$v['date_created'])?></p>
                    <div class="news-desc text-split"><?=$v['desc'.$lang]?></div>
                </div>
            </div>
        </div>
    <?php }*/ ?>
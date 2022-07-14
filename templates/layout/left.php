<div class="pro_left">
    <div id="danhmuc">
        <p class="tieude_right">danh mục sản phẩm</p>
        <?=$func->formenu_left('product','san-pham');?>
    </div>

    <div class="hotrotructuyen">
        <p class="tieude_right">hỗ trợ trực tuyến</p>
        <?php $yahoo = $d->rawQuery("select name$lang, id, options2 from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc",array('ho-tro-truc-tuyen')); ?>
        <div class="cont-hotro">

        <?php if(count($yahoo)!=0){?>
            <?php for($i=0;$i<count($yahoo);$i++){
                $optyahoo = (isset($yahoo[$i]['options2']) && $yahoo[$i]['options2'] != '') ? json_decode($yahoo[$i]['options2'],true) : null;
                ?>
            <div class="item-yahoo">
                <div class="name-yaoo"><?=$yahoo[$i]['name'.$lang]?></div>
                <div class="dienthoai-yahoo">Điện thoại: <span><a href="tel:<?=$optyahoo['dienthoai']?>"><?=$optyahoo['dienthoai']?></a></span></div>
                <div class="dienthoai-yahoo"><span>Email: </span><?=$optyahoo['email']?></div>
                <div class="icon-yaoo">
                    <a href="<?=$optyahoo['facebook']?>"><img src="assets/images/hotro_face.png" /></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optyahoo['dienthoai']);?>"><img src="assets/images/zalo-combo.png" /></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="skype:<?=$optyahoo['skype']?>?chat"><img src="assets/images/hotro_skype.png" /></a>            
                </div>        
            </div>
            <?php }?>
        <?php }?> 
              
        </div>
    </div>
</div>
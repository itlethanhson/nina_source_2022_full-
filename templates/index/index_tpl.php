<div class="box-sanpham-tc">
    <div class="wap_1200">
        <div class="title-main"><span>Sản phẩm nổi bật</span></div>
        <div class="page_noibat css_flex_ajax"></div>
    </div>
</div>

<div class="box-sanpham-tc">
    <div class="wap_1200">
        <div class="list_monnb list_tab_slick">
            <a data-id="noibat">Sản phẩm nổi bật</a>
            <a data-id="banchay">Sản phẩm bán chạy</a>
        </div>
        <div class="page_tabloai_slick css_flex_ajax"></div>
    </div>
</div>

<div class="box-sanpham-tc">
	<div class="wap_1200">
	<div class="title-main"><span>Chạy slick theo tab cấp 1</span></div>
    <div class="list_monnb list_slick">
        <a data-id="0" data-id_danhmuc="0">Tất cả</a>
        <?php foreach ($cap1 as $k2 => $v2) { ?>
        <a data-id="<?=$v2['id']?>" data-id_danhmuc="<?=$v2['id']?>"><?=$v2['name'.$lang]?></a>
        <?php } ?>
    </div>
    <div class="page_slick css_flex_ajax"></div>
    </div>
</div>

<?php /*foreach ($cap1 as $k => $v1) {
	$product_id = $func->get_product_id('noibat','san-pham','id_list',$v1['id'],2); 
    if(count($product_id)>0){
    	$sql_cap2 = ("select * from #_product_cat where type='".$v1['type']."' and find_in_set('hienthi',status) and id_list=".$v1['id']." order by numb,id desc");
	    $arr_cap2=array();
		$dmc2 = $d->rawQuery($sql_cap2,$arr_cap2);
?>
<div class="box-sanpham-tc slick_theo_cap2">
	<div class="wap_1200">
	<div class="title-main"><span>Chạy slick cấp 2 <?=$v1['name'.$lang]?></span></div>
    <div class="list_monnb list_slick_cat<?=$v1['id']?>">
        <a data-id_danhmuc="<?=$v1['id']?>" data-id="0">Tất cả</a>
        <?php foreach ($dmc2 as $k2 => $v2) { ?>
        <a data-id_danhmuc="<?=$v1['id']?>" data-id="<?=$v2['id']?>"><?=$v2['name'.$lang]?></a>
        <?php } ?>
    </div>
    <div class="page_slick_cat<?=$v1['id']?> css_flex_ajax"></div>
    </div>
</div>
<?php } }*/ ?>

<?php /*<div class="box-sanpham-tc">
	<div class="wap_1200">
	<div class="title-main"><span>Phân trang theo tab cấp 1</span></div>
    <div class="list_monnb list_sanpham">
        <a data-id="0">Tất cả</a>
        <?php foreach ($cap1 as $k2 => $v2) { ?>
        <a data-id="<?=$v2['id']?>"><?=$v2['name'.$lang]?></a>
        <?php } ?>
    </div>
    <div class="page_sanpham css_flex_ajax"></div>
    </div>
</div>*/ ?>

<?php /*<div class="box-sanpham-tc">
    <div class="wap_1200">
        <div class="title-main"><span>Phân trang theo tag loại</span></div> 
        <div class="list_monnb list_tab">
            <a data-id="noibat">Sản phẩm nổi bật</a>
            <a data-id="banchay">Sản phẩm bán chạy</a>
        </div>
        <div class="page_tabloai css_flex_ajax"></div>
    </div>
</div>*/ ?>

<?php /*foreach ($cap1 as $k => $v1) { 
    $product_id = $func->get_product_id('noibat','san-pham','id_list',$v1['id'],2);       
    if(count($product_id)>0){
    ?>
<div class="box-sanpham-tc">
    <div class="wap_1200">
    <div class="title-main"><span><?=$v1['name'.$lang]?></span></div>
    <div class="page_danhmuc css_flex_ajax page_danhmuc<?=$v1['id']?>"></div>
    </div>
</div>
<?php }}*/ ?>

<?php /*foreach ($cap1 as $k => $v1) {
    $product_id = $func->get_product_id('noibat','san-pham','id_list',$v1['id'],2);    
    if(count($product_id)>0){
    $sql_cap2 = ("select * from #_product_cat where type='san-pham' and find_in_set('hienthi',status) and id_list=".$v1['id']." order by numb,id desc");
    $arr_cap2=array();
	$dmc2 = $d->rawQuery($sql_cap2,$arr_cap2);

?>
<div class="box-sanpham-tc">
    <div class="wap_1200">
    <div class="title-main"><span><?=$v1['name'.$lang]?></span></div>
    <div class="list_monnb list_<?=$v1['id']?>">
        <a data-id="0">Tất cả</a>
        <?php foreach ($dmc2 as $k2 => $v2) { ?>
        <a data-id="<?=$v2['id']?>"><?=$v2['name'.$lang]?></a>
        <?php } ?>
    </div>
    <div class="page_danhmuc css_flex_ajax page_danhmuc_list<?=$v1['id']?>"></div>
    </div>
</div>
<?php }}*/ ?>

<?php if(count($newsnb) || count($videonb)) { ?>
<div class="box-tintuc-video">
	<div class="wap_1200">
		<div class="wap-tin-video">
			<div class="left-intro">
				<p class="title-intro"><span>Tin tức mới</span></p>
				<div class="newshome-intro w-clear">				
					<a class="newshome-best text-decoration-none" href="<?=$newsnb[0][$sluglang]?>" title="<?=$newsnb[0]['name'.$lang]?>">
						<p class="pic-newshome-best scale-img"><img onerror="this.src='<?=THUMBS?>/360x200x2/assets/images/noimage.png';" src="<?=THUMBS?>/360x200x1/<?=UPLOAD_NEWS_L.$newsnb[0]['photo']?>" alt="<?=$newsnb[0]['name'.$lang]?>"></p>
						<h3 class="name-newshome text-split"><?=$newsnb[0]['name'.$lang]?></h3>
						<p class="time-newshome">Ngày đăng: <?=date("d/m/Y",$newsnb[0]['date_created'])?></p>
						<p class="desc-newshome text-split"><?=$newsnb[0]['desc'.$lang]?></p>
						<span class="view-newshome transition"><?=xemthem?></span>
						<?php //$optchinhanh = (isset($newsnb[0]['options']) && $newsnb[0]['options'] != '') ? json_decode($newsnb[0]['options'],true) : null;
					    //echo $optchinhanh["chucvu"]; ?>
					</a>
					<div class="newshome-scroll">
						<ul>
							<?php foreach($newsnb as $v) {?>
								<li>
									<a class="newshome-normal text-decoration-none w-clear" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
										<p class="pic-newshome-normal scale-img"><img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/150x120x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>"></p>
										<div class="info-newshome-normal">
											<h3 class="name-newshome text-split"><?=$v['name'.$lang]?></h3>
											<p class="time-newshome"><?=ngaydang?>: <?=date("d/m/Y",$v['date_created'])?></p>
											<p class="desc-newshome text-split"><?=$v['desc'.$lang]?></p>
										</div>
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="right-intro">
				<p class="title-intro"><span>Video clip</span></p>
				<div class="videohome-intro">
					<?php echo $addons->set('video-fotorama', 'video-fotorama', 4); ?>
					<?php /*echo $addons->set('video-slick', 'video-slick', 4);*/ ?>
					<?php /*echo $addons->set('video-select', 'video-select', 4); */ ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<?php if(count($partner)){ ?>
	<div class="wrap-partner">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<p class="control-carousel prev-carousel prev-partner transition"><i class="fas fa-chevron-left"></i></p>
			<div class="owl-carousel owl-theme owl-partner">
				<?php foreach($partner as $v) { ?>
					<div>
						<a class="partner text-decoration-none" href="<?=$v['link']?>" target="_blank" title="<?=$v['name'.$lang]?>">
							<img onerror="this.src='<?=THUMBS?>/190x100x2/assets/images/noimage.png';" src="<?=THUMBS?>/190x100x2/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>"/>
						</a>
					</div>
				<?php } ?>
			</div>
			<p class="control-carousel next-carousel next-partner transition"><i class="fas fa-chevron-right"></i></p>
		</div>
	</div>
<?php } ?>
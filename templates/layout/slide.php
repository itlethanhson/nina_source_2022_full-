<?php if(count($slider)) { ?>    
    <div class="slideshow">
        <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
        <div class="owl-carousel owl-theme owl-slideshow">
            <?php foreach($slider as $v) { ?>
                <div>
                    <a href="<?=$v['link']?>" target="_blank" title="<?=$v['name'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/1366x600x2/assets/images/noimage.png';" src="<?=THUMBS?>/1366x600x1/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>"/></a>
                </div>
            <?php } ?>
        </div>
        <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
    </div>
<?php } ?>
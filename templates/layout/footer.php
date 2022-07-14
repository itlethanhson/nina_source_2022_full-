<div class="footer">
    <div class="footer-article">
        <div class="wrap-content wap_footer">
           
                <div class="footer-news" id="main_footer">
                    <p class="footer-title"><?=$setting['name'.$lang]?></p>
                    <div class="footer-info"><?=htmlspecialchars_decode($footer['content'.$lang])?></div>
                    <?php /* ?>
                    <ul>
                        <li class="w-clear"><i class="fas fa-map-marker-alt"></i><span></span><?=$optsetting['address']?></li>
                        <li class="w-clear"><i class="fas fa-phone-volume"></i><span></span><?=$optsetting['phone']?></li>
                        <li class="w-clear"><i class="fas fa-envelope"></i><span></span><?=$optsetting['email']?></li>
                        <li class="w-clear"><i class="fas fa-globe"></i><span></span><?=$optsetting['website']?></li>
                    </ul><?php */ ?>
                    <ul class="social social-footer">
                    <?php for($i=0;$i<count($social);$i++) { ?>
                        <li><a href="<?=$social[$i]['link']?>" target="_blank"><img src="<?=UPLOAD_PHOTO_L.$social[$i]['photo']?>" alt="<?=$social[$i]['name'.$lang]?>"></a></li>
                    <?php } ?>
                </ul>
                </div>
                <div class="footer-news">
                    <p class="footer-title"><?=chinhsach?></p>
                    <ul class="footer-ul">
                        <?php foreach($policy as $v) { ?>
                            <li><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="footer-news">
                    <p class="footer-title"><?=dangkynhantin?></p>
                    <p class="newsletter-slogan"><?=slogandangkynhantin?></p>
                    <form class="validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                        <div class="newsletter-input">
                            <input type="email" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[email]" placeholder="<?=nhapemail?>" required />
                            <div class="invalid-feedback"><?=vuilongnhapdiachiemail?></div>
                        </div>
                        <div class="newsletter-button">
                            <input type="submit" class="btn btn-sm btn-danger w-100" name="submit-newsletter" value="<?=gui?>" disabled>
                            <input type="hidden" class="btn btn-sm btn-danger w-100" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                        </div>
                    </form>
                </div>
                <div class="footer-news">
                    <p class="footer-title">Fanpage facebook</p>
                    <?=$addons->set('fanpage-facebook', 'fanpage-facebook', 2);?>
                </div>
        </div>
    </div>
    <div class="footer-tags d-none">
        <div class="wrap-content">
            <p class="footer-title">Tags sản phẩm:</p>
            <ul class="footer-tags-lists w-clear mb-3">
                <?php foreach($tagsProduct as $v) { ?>
                    <li class="mr-1 mb-1"><a class="btn btn-sm btn-danger rounded" href="<?=$v[$sluglang]?>" target="_blank" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                <?php } ?>
            </ul>
            <p class="footer-title">Tags tin tức:</p>
            <ul class="footer-tags-lists w-clear">
                <?php foreach($tagsNews as $v) { ?>
                    <li class="mr-1 mb-1"><a class="btn btn-sm btn-danger rounded" href="<?=$v[$sluglang]?>" target="_blank" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="footer-powered">
        <div class="wrap-content">
            <div class="wap_copy">
                <p class="copyright">2022 Copyright <?=$setting['name'.$lang]?>. Design by Nina.vn</p>
                <p class="statistic">
                    <span><?=dangonline?>: <?=$online?></span>                     
                    <span><?=trongthang?>: <?=$counter['month']?></span>
                    <span><?=tongtruycap?>: <?=$counter['total']?></span>
                    <?php /* ?>
                    <span><?=homnay?>: <?=$counter['today']?></span>
                    <span><?=homqua?>: <?=$counter['yesterday']?></span>
                    <span><?=trongtuan?>: <?=$counter['week']?></span>
                    <?php */ ?>
                </p>
            </div>
        </div>
    </div>
    <?php if(count($chinhanh)>0){ 
            $optnews0 = (isset($chinhanh[0]['options2']) && $chinhanh[0]['options2'] != '') ? json_decode($chinhanh[0]['options2'],true) : null;?>
        <div class="box-hethong">
            <div class="ht-left">
                <?php for($i=0;$i<count($chinhanh);$i++){
                    $optnews = (isset($chinhanh[$i]['options2']) && $chinhanh[$i]['options2'] != '') ? json_decode($chinhanh[$i]['options2'],true) : null;
                    ?>
                    <div class="item-ht" data-id="<?=$chinhanh[$i]['id']?>">
                        <span class="ten"><i class="fal fa-map-marker-alt"></i> <?=$chinhanh[$i]['name'.$lang]?></span> 
                    </div>
                <?php } ?>
            </div>
            <div class="ht-right">
                <?=$optnews0['bando']?>
            </div>
        </div>
    <?php }else{ ?>
    <?php echo $addons->set('footer-map', 'footer-map', 2); } ?>    
    <?=$addons->set('messages-facebook', 'messages-facebook', 2);?>
</div>
<?php if($com!='gio-hang') { ?>
    <a class="cart-fixed text-decoration-none d-none" href="gio-hang" title="Giỏ hàng">
        <i class="fas fa-shopping-bag"></i>
        <span class="count-cart"><?=(!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0?></span>
    </a>
<?php } ?>
<?php /* ?>*/?>


<?php if($deviceType=='mobile'){?>
<div class="toolbar">
    <ul>
        <li>
            <a id="goidien" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>" title="title">
                <?=$func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t1.png', 'alt' => 'Phone'])?><br>
                <span>Gọi điện</span>
            </a>
        </li>
        <li>
            <a id="nhantin" href="sms:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>" title="title">
                <?=$func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t2.png', 'alt' => 'Message'])?><br>
                <span>Nhắn tin</span>
            </a>
        </li>
        <li>
            <a id="chatzalo" href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>" title="title">
                <?=$func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t3.png', 'alt' => 'Zalo'])?><br>
                <span>Chat zalo</span>
            </a>
        </li>
        <li>
            <a id="chatfb" href="<?=$optsetting['fanpage']?>" title="title">
                <?=$func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t4.png', 'alt' => 'Facebook'])?><br>
                <span>Chat facebook</span>
            </a>
        </li>
    </ul>
</div>

<div class="fixbar">
    <ul class="w-clear">
        
        <li>
            <a href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?> ">
                <span class="icon-cart-new"><i class="fas fa-phone-volume element-animation"></i></span><span class="text-link-toolbar">Gọi điện</span>
            </a>
        </li>
        <li>
            <a href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>">
                <span class="icon-goi"><img src="assets/images/icon-t3.png" alt="Zalo"></span><span class="text-link-toolbar">Chat Zalo</span>
            </a>
        </li>   
        <li>
            <a href="<?=$optsetting['fanpage']?>" target="_blank"><!-- //m.me/ -->
                <span class="icon-hotdeal-new"><i class="fab fa-facebook-messenger "></i></span><span class="text-link-toolbar">Messager</span>
            </a>
        </li>
        <li>
            <a href="<?=$optsetting['chiduong'];?>">
                <span class="icon-hotdeal-new"><i class="fas fa-map-marked-alt"></i></span><span class="text-link-toolbar">Chỉ đường</span>
            </a>
        </li>
    </ul>
</div>

<div class="plugbar">
    <ul>
        <li>
            <a href="">
                <i class="fas fa-home"></i>
            </a>
        </li>
        <li>
            <a href="<?=$optsetting['chiduong'];?>">
                <i class="fas fa-map-marker-alt"></i>
            </a>
        </li>
        <li>
            <a href="//m.me/<?=$optsetting['fanpage']?>" target="_blank">
                <span>
                    <?=$func->getImage(['class' => 'lazy w-100', 'size-error' => '50x50x2', 'upload' => 'assets/images/', 'image' => 'MessengerIcon.png', 'alt' => 'Messenger'])?><br>
                </span>
            </a>
        </li>
        <li>
            <a href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>">
                <i class="fas fa-phone-alt"></i>
            </a>
        </li>
        <li>
            <a class="back-to-top" href="javascript:;">
                <i class="fas fa-arrow-alt-circle-up"></i>
            </a>
        </li>
    </ul>
</div>

<div class="support-online">
    <div class="support-content" style="display: block;">
        <a target="_blank" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>" class="not-loading call-now" rel="nofollow">
            <i class="fab fa-whatsapp"></i>
            <div class="animated infinite zoomIn kenit-alo-circle"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill"></div>
            <span>Hotline: <?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?></span>
        </a>
        <a class="mes not-loading" target="_blank" href="<?=$optsetting['chiduong'];?>">
            <i class="fa fa-map-marker"></i>
            <span>Chỉ đường</span>
        </a>
        <a class="mes not-loading" target="_blank" href="//zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>">
            <?=$func->getImage(['class' => 'lazy w-100', 'size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'zalo-combo.png', 'alt' => 'Zalo'])?><br>
            <span>Zalo</span>
        </a>
        <a class="sms not-loading" target="_blank" href="sms:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>">
            <i class="fab fa-weixin"></i>
            <span>SMS: <?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?></span>
        </a>
    </div>
    <a class="btn-support not-loading">
        <div class="animated infinite zoomIn kenit-alo-circle"></div>
        <div class="animated infinite pulse kenit-alo-circle-fill"></div>
        <i class="fa fa-user-circle"></i>
    </a>
</div>

<div class="widget-mobile">
    <div id="my-phone-circle">
        <div class="wcircle-icon"><i class="fa fa-bell shake-anim"></i></div>
        <div class="wcircle-menu">
            <div class="wcircle-menu-item">
                <a href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>"><i class="fa fa-phone"></i></a>
            </div>
            <div class="wcircle-menu-item">
                <a href="sms:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>"><i class="fa fa-comments"></i></a>
            </div>
            <div class="wcircle-menu-item">
                <a href="<?=$optsetting['chiduong'];?>" target="_blankl"><i class="fa fa-map"></i></a>
            </div>
            <div class="wcircle-menu-item">
                <a href="<?=$optsetting['fanpage']?>"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="wcircle-menu-item">
                <a href="//zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>" target="_blank"><?=$func->getImage(['class' => 'lazy w-100', 'size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'zalo-mb.png', 'alt' => 'Zalo'])?><br></a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/jQuery.WCircleMenu-min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        /* Phone circle */
        $('#my-phone-circle').WCircleMenu({
            angle_start : -Math.PI,
            delay: 50,
            distance: 70,
            angle_interval: Math.PI/4,
            easingFuncShow:"easeOutBack",
            easingFuncHide:"easeInBack",
            step:5,
            openCallback:false,
            closeCallback:false,
        });

        /* Phone support */
        $('.support-content').hide();
        $('a.btn-support').click(function (e) {
            e.stopPropagation();
            $('.support-content').slideToggle();
        });
        $('.support-content').click(function (e) {
            e.stopPropagation();
        });
        $(document).click(function () {
            $('.support-content').slideUp();
        });
    })
</script>
<?php } ?>
<div class="menu_mobi_add">
    <a class="logo-mb" href="<?=$configBase?>">
        <img onerror="this.src='<?=THUMBS?>/120x100x2/assets/images/noimage.png';" src="<?=THUMBS?>/120x100x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>"/>
    </a>
    <div class="load-menu"></div>
    <div class="thongtin-mb">
        <ul>
            <li class="w-clear"><i class="fas fa-map-marker-alt"></i><span></span><?=$optsetting['address']?></li>
            <li class="w-clear"><i class="fas fa-phone-volume"></i><span></span><?=$optsetting['phone']?></li>
            <li class="w-clear"><i class="fas fa-envelope"></i><span></span><?=$optsetting['email']?></li>
            <li class="w-clear"><i class="fas fa-globe"></i><span></span><?=$optsetting['website']?></li>
        </ul>
    </div>
</div>
<div class="menu_mobi w-clear">
    <p class="menu_baophu"></p>
    <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>        
    <a class="logo-mobi" href="<?=$configBase?>"><img onerror="this.src='<?=THUMBS?>/120x100x2/assets/images/noimage.png';" class="lazy" data-src="<?=THUMBS?>/120x100x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>"/></a>
    <div class="search-res">
        <p class="icon-search transition"><i class="fa fa-search"></i></p>
        <div class="search-grid w-clear">
            <input type="text" name="keyword2" id="keyword2" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword2');"/>
            <p onclick="onSearch('keyword2');"><i class="fa fa-search"></i></p>
        </div>
    </div>
    <?php /* ?><a href="" class="home_mobi"><i class="fa fa-home" aria-hidden="true"></i></a> */?>
</div>
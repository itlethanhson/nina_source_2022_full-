
    <div id='ninja-slider'>
        <div class="slider-inner">
            <ul>
                  <li>
                      <div class="video">                          
                            <iframe src="//www.youtube.com/embed/<?=$func->getYoutube($videosl['link_video'])?>?rel=0&autoplay=1&mute=1" frameborder="0" allowfullscreen data-autoplay="true"></iframe>
                      </div>
                  </li>
                <?php foreach($slider as $v) { ?>
                  <li>
                      <div class="video">
                            <a href="<?=$v['link']?>" target="_blank" title="<?=$v['name'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/1366x648x2/assets/images/noimage.png';" src="<?=THUMBS?>/1366x648x1/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>"/></a>   
                      </div>
                      <!-- <div class="video-playbutton-layer"></div> -->
                  </li>
                <?php } ?>
            </ul>
        </div>
    </div>
<!--end-->

<!-- //// luu y: truong hop video tu up len
<video playsinline data-autoplay="true" muted>
    <source src="<?=_upload_tintuc_l.$value['upvideo']?>" type="video/mp4">
</video> -->       
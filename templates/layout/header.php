<div class="header">
	<div class="header-top">
		<div class="wrap-content">
			<?php /* ?><p class="info-header"><marquee scrollamount="4"><?=$optsetting['slogan']?></marquee></p><?php */ ?>			
			<p class="info-header"><i class="fal fa-map-marker-alt"></i>Địa chỉ: <?=$optsetting['address']?></p>
			<p class="info-header"><i class="fal fa-envelope"></i>Email: <?=$optsetting['email']?></p>
			<p class="info-header"><i class="fa-light fa-phone-volume"></i>Hotline: <?=$optsetting['hotline']?></p>
			<ul class="social social-header">
				<?php foreach($social as $k => $v) { ?>
					<li><a href="<?=$v['link']?>" target="_blank"><img src="<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>"></a></li>
				<?php } ?>
			</ul>
			<div class="lang-header d-none">
	            <a href="ngon-ngu/vi/"><img src="assets/images/vi.jpg" alt="Vi"></a>
	            <a href="ngon-ngu/en/"><img src="assets/images/en.jpg" alt="Vi"></a>
	            <?php /* ?><div class="gg-dich"><div id="google_translate_element"></div>
				<script type="text/javascript">
				function googleTranslateElementInit() {
				 new google.translate.TranslateElement({ pageLanguage: 'en', multilanguagePage: true}, 'google_translate_element');
				}
				</script>
				<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				<script async src="https://www.googletagmanager.com/gtag/js?id=AW-870479654"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){ dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'AW-870479654'); </script></div> */?>


				<?php /* ?><script type='text/javascript' src='assets/js/flags.js'></script>
					<script type="text/javascript">
					   function GoogleLanguageTranslatorInit() {
					   new google.translate.TranslateElement({pageLanguage: 'vi', autoDisplay: false }, 'google_language_translator');}
					        </script><script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=GoogleLanguageTranslatorInit">
					</script>				

					<div class="langCon">
					    <div class="execphpwidget">
					        <div id="flags">
					            <a href="" onclick="doGoogleLanguageTranslator('vi|vi'); return false;" title="Việt Nam" class="flag vi"><img src="assets/images/vi.jpg" border="0" /></a>
					            <a href="" onclick="doGoogleLanguageTranslator('vi|en'); return false;" title="English" class="flag en"><img src="assets/images/en.jpg" border="0" /></a>
					            <a href="" onclick="doGoogleLanguageTranslator('vi|zh-CN'); return false;" title="Chinese" class="flag en"><img src="assets/images/cn.png" border="0" /></a>
					        </div>
					         <div id="google_language_translator"></div>
					    </div>
					</div>*/?>
	        </div>
	        <?php /*if(array_key_exists($loginMember, $_SESSION) && $_SESSION[$loginMember]['active'] == true) { ?>
	        	<div class="user-header">
		        	<a href="account/thong-tin">
		        		<span>Hi, <?=$_SESSION[$loginMember]['username']?></span>
		        	</a>
		        	<a href="account/dang-xuat">
		        		<i class="fas fa-sign-out-alt"></i>
		        		<span><?=dangxuat?></span>
		        	</a>
		        </div>
	        <?php } else { ?>
	        	<div class="user-header">
		        	<a href="account/dang-nhap">
		        		<i class="fas fa-sign-in-alt"></i>
		        		<span><?=dangnhap?></span>
		        	</a>
		        	<a href="account/dang-ky">
		        		<i class="fas fa-user-plus"></i>
		        		<span><?=dangky?></span>
		        	</a>
		        </div>
	        <?php }*/ ?>
		</div>
	</div>
	<div class="header-bottom">
		<div class="wrap-content">
			<a class="logo-header" href="<?=$configBase?>">
				<img onerror="this.src='<?=THUMBS?>/120x100x2/assets/images/noimage.png';" src="<?=THUMBS?>/120x100x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>"/>
			</a>
			<a class="banner-header" href="<?=$configBase?>">
				<img onerror="this.src='<?=THUMBS?>/730x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/730x120x2/<?=UPLOAD_PHOTO_L.$banner['photo']?>"/>
			</a>
			<a class="hotline-header">
				<p>Hotline:</p>
				<span><?=($optsetting['hotline'])?></span>
			</a>
			<a class="email-header">
				<p>Email:</p>
				<span><?=($optsetting['email'])?></span>
			</a>
		</div>
	</div>
</div>
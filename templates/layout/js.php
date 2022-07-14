<!-- Js Config -->
<script type="text/javascript">
    var NN_FRAMEWORK = NN_FRAMEWORK || {};
    var CONFIG_BASE = '<?= $configBase ?>';
    var ASSET = '<?= ASSET ?>';
    var WEBSITE_NAME = '<?= (!empty($setting['name' . $lang])) ? addslashes($setting['name' . $lang]) : '' ?>';
    var TIMENOW = '<?= date("d/m/Y", time()) ?>';
    var SHIP_CART = <?= (!empty($config['order']['ship'])) ? 'true' : 'false' ?>;
    var RECAPTCHA_ACTIVE = <?= (!empty($config['googleAPI']['recaptcha']['active'])) ? 'true' : 'false' ?>;
    var RECAPTCHA_SITEKEY = '<?= $config['googleAPI']['recaptcha']['sitekey'] ?>';
    var GOTOP = ASSET + 'assets/images/top.png';
    var LANG = {
        'no_keywords': '<?= chuanhaptukhoatimkiem ?>',
        'delete_product_from_cart': '<?= banmuonxoasanphamnay ?>',
        'no_products_in_cart': '<?= khongtontaisanphamtronggiohang ?>',
        'ward': '<?= phuongxa ?>',
        'back_to_home': '<?= vetrangchu ?>',
    };
</script>

<!-- Js Files -->
<?php
    $js->set("js/jquery.min.js");
    $js->set("js/lazyload.min.js");
    $js->set("bootstrap/bootstrap.js");
    $js->set("js/wow.min.js");    
    $js->set("confirm/confirm.js");
    $js->set("holdon/HoldOn.js");
    //$js->set("mmenu/mmenu.js");
    $js->set("easyticker/easy-ticker.js");
    $js->set("fotorama/fotorama.js");
    $js->set("owlcarousel2/owl.carousel.js");
    $js->set("magiczoomplus/magiczoomplus.js");
    $js->set("slick/slick.js");
    $js->set("fancybox3/jquery.fancybox.js");
    $js->set("photobox/photobox.js");
    $js->set("simplenotify/simple-notify.js");
    //$js->set("fileuploader/jquery.fileuploader.min.js");
    //$js->set("datetimepicker/php-date-formatter.min.js");
    //$js->set("datetimepicker/jquery.mousewheel.js");
    //$js->set("datetimepicker/jquery.datetimepicker.js");
    $js->set("simplyscroll/jquery.simplyscroll.js");
    $js->set("js/functions.js");
    $js->set("js/phantrang_ajax.js");
    $js->set("js/comment.js");
    $js->set("js/apps.js");
    echo $js->get();
?>

<?php if (!empty($config['googleAPI']['recaptcha']['active'])) { ?>
    <!-- Js Google Recaptcha V3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?= $config['googleAPI']['recaptcha']['sitekey'] ?>"></script>
    <script type="text/javascript">
        grecaptcha.ready(function() {
            /* Newsletter */
            generateCaptcha('Newsletter', 'recaptchaResponseNewsletter');

            <?php if ($source == 'contact') { ?>
                /* Contact */
                generateCaptcha('contact', 'recaptchaResponseContact');
            <?php } ?>
        });
    </script>
<?php } ?>

<?php if (!empty($config['oneSignal']['active'])) { ?>
    <!-- Js OneSignal -->
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script type="text/javascript">
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "<?= $config['oneSignal']['id'] ?>"
            });
        });
    </script>
<?php } ?>

<!-- Js Structdata -->
<?php include TEMPLATE . LAYOUT . "strucdata.php"; ?>

<!-- Js Addons -->
<?= $addons->set('script-main', 'script-main', 2); ?>
<?= $addons->get(); ?>

<!-- Js Body -->
<?= htmlspecialchars_decode($setting['bodyjs']) ?>

<?php if($source=='index'){?>
       
    <script>
        $(document).ready(function() {
            /*$('.chay-tintuc,.chay-duan').slick({
                lazyLoad: 'progressive', infinite: true, accessibility:true, vertical:false, slidesToShow: 4,  
                slidesToScroll: 1, autoplay:true,  autoplaySpeed:3000, speed:1000, arrows:true, 
                centerMode:false,  dots:false,  draggable:true,  responsive: [ 
                {  breakpoint: 800, settings: { slidesToShow: 2, slidesToScroll: 1,arrows:true } } ]
            });*/

            /* phan trang san pham noi bat */
            init_paging('', 'page_noibat', 4, 'product', 'san-pham', 'noibat',1);
            /* phan trang san pham noi bat */

            /* Slick theo tab loai */
            $(document).on('click', '.list_tab_slick a', function(event) {
                event.preventDefault();
                $(this).parent('.list_tab_slick').find('a').removeClass('active');
                $(this).addClass('active');
                init_slick_loai('list_tab_slick', 'page_tabloai_slick', 40, 'product', 'san-pham',1,'loai_noibat');
            });
            init_slick_loai('list_tab_slick', 'page_tabloai_slick', 40, 'product', 'san-pham',1,'loai_noibat');
            /* Slick theo tab loai */
            
            /* Chạy slick theo tab cap 1 */
            $(document).on('click', '.list_slick a', function(event) {
                event.preventDefault();
                $(this).parent('.list_slick').find('a').removeClass('active');
                $(this).addClass('active');
                init_run_slick('list_slick', 'page_slick', 15, 'product', 'san-pham', 'noibat',1);
            });
            init_run_slick('list_slick', 'page_slick', 15, 'product', 'san-pham', 'noibat',1);
            /* Chạy slick theo tab cap 1 */

            /* Chạy slick theo tab cap 2 */
            <?php /*foreach ($cap1 as $k => $v1) {?>
            $(document).on('click', '.list_slick_cat<?=$v1['id']?> a', function(event) {
                event.preventDefault();
                $(this).parent('.list_slick_cat<?=$v1['id']?>').find('a').removeClass('active');
                $(this).addClass('active');
                init_run_slick_cap2('list_slick_cat<?=$v1['id']?>', 'page_slick_cat<?=$v1['id']?>', 15, 'product', 'san-pham', 'noibat',1,<?=$v1['id']?>);
            });
            init_run_slick_cap2('list_slick_cat<?=$v1['id']?>', 'page_slick_cat<?=$v1['id']?>', 15, 'product', 'san-pham', 'noibat',1,<?=$v1['id']?>);
            <?php }*/ ?>
            /* Chạy slick theo tab cap 2 */
            
            /* phan trang theo tab cap 1 */
            /*$(document).on('click', '.list_sanpham a', function(event) {
                event.preventDefault();
                $(this).parent('.list_sanpham').find('a').removeClass('active');
                $(this).addClass('active');
                init_paging('list_sanpham', 'page_sanpham', 4, 'product', 'san-pham', 'noibat',1);
            });
            init_paging('list_sanpham', 'page_sanpham', 4, 'product', 'san-pham', 'noibat',1);*/
            /* phan trang theo tab cap 1 */

            /* phan trang theo tab loai */
            /*$(document).on('click', '.list_tab a', function(event) {
                event.preventDefault();
                $(this).parent('.list_tab').find('a').removeClass('active');
                $(this).addClass('active');
                init_paging_loai('list_tab', 'page_tabloai', 4, 'product', 'san-pham',1);
            });
            init_paging_loai('list_tab', 'page_tabloai', 4, 'product', 'san-pham',1);*/
            /* phan trang theo tab loai */
                
            /* phan trang san pham for cap 1 */
            <?php /*foreach ($cap1 as $k => $v) { ?>
                init_paging_category('<?=$v['id']?>', 'page_danhmuc<?=$v['id']?>', 4, 'product', 'san-pham', 'noibat',1); 
            <?php }*/ ?>
            /* phan trang san pham for cap 1 */
                
            /* phan trang theo cap 2 chay for cap 1 */
            <?php /*foreach ($cap1 as $k => $v) { ?>    
                init_paging_category_list('<?=$v['id']?>', 'list_<?=$v['id']?>', 'page_danhmuc_list<?=$v['id']?>', 4, 'product', 'san-pham', 'noibat',1);
   
                $(document).on('click', '.list_<?=$v['id']?> a', function(event) {
                    event.preventDefault();
                    $(this).parent('.list_<?=$v['id']?>').find('a').removeClass('active');
                    $(this).addClass('active');
                    init_paging_category_list('<?=$v['id']?>', 'list_<?=$v['id']?>', 'page_danhmuc_list<?=$v['id']?>', 4, 'product', 'san-pham', 'noibat',1);
                });   
            <?php }*/ ?>
            /* phan trang theo cap 2 chay for cap 1 */
        });           
    </script>

    <script>
        /*$(document).ready(function(){               
            var fired77 = false;
            window.addEventListener("scroll", function(){
            if ((document.documentElement.scrollTop != 0 && fired77 === false) || (document.body.scrollTop != 0 && fired77 === false)) {
                $('.load-video-tc').load('api/ajax_video_slick.php');
                fired77 = true;
            }
            }, true);
        });
    
        // fancybox tu dong hien hình con
        <?php for($i = 0, $count_quytrinh1 = count($duan); $i < $count_quytrinh1; $i++){ ?>
            $('[data-fancybox="gallery<?=$duan[$i]['id']?>"]').fancybox({
                loop : true,
                transitionDuration : 100,
                animationDuration : 500,
                animationEffect : "fade",
                buttons : [
                    'slideShow',
                    'fullScreen',
                    'thumbs',
                    //'share',
                    'download',
                    //'zoom',
                    'close'
                ],
                slideShow : {
                    autoStart : false,
                    speed     : 300,
                },
                thumbs : {
                autoStart : true,
                },
            });
            <?php } ?>
        */
    </script>
    
<?php } ?>

<script type="text/javascript">
    /*$(document).ready(function(e) {            
            var id_item = '';       
       
            $(".item-ht").click(function(){
                $('.item-ht').removeClass('act-item');
                id_item = $(this).data('id');
                $(this).addClass('act-item');
                xuly();                                                 
            });
            
            function xuly(){
                $.ajax({
                    url: 'api/ajax_bando.php',
                    type: 'POST',
                    dataType: 'html',
                    data: {id_item: id_item},                       
                    beforeSend: function(){
                        $("#loading").fadeIn(600);
                    },
                    success: function(result){
                        $("#loading").fadeOut(600);
                        $('.ht-right').html(result);                                        
                        return false;
                    }
                })              
            }           
    });*/
</script>
<?php if($com=='gio-hang') { ?>
<script type="text/javascript">
    /*$(document).ready(function(e) {
        $('#xuathd').click(function() {
            if($('#xuathd').is(":checked")){
                $('div.box-xuathoadon').show('400');
            }else{
                $('div.box-xuathoadon').hide('400');
            }
        });        
    });*/
</script>
<?php } ?>
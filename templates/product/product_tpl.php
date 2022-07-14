
<?php /* ?><div class="sanpham_col_flex w-clear">
        <?php include TEMPLATE.LAYOUT."left.php"; ?>
        <div class="pro_right">*/?>


        <div class="title-main"><span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span></div>
        <div class="content-main w-clear">
            <div class="css_flex_product">
            <?php if(!empty($product)) { 
                echo $func->lay_sanpham($product);
                //WATERMARK.'/product/360x390x1/'
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

<?php /* ?>
</div>
    </div> */?>






    <?php  /*foreach($product as $k => $v) { ?>
        <div class="product">
            <a class="box-product text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                <p class="pic-product scale-img">
                    <?=$func->getImage(['sizes' => '270x270x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                </p>
                <h3 class="name-product text-split"><?=$v['name'.$lang]?></h3>
                <p class="price-product">
                    <?php if($v['discount']) { ?>
                        <span class="price-new"><?=$func->formatMoney($v['sale_price'])?></span>
                        <span class="price-old"><?=$func->formatMoney($v['regular_price'])?></span>
                        <span class="price-per"><?='-'.$v['discount'].'%'?></span>
                    <?php } else { ?>
                        <span class="price-new"><?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe?></span>
                    <?php } ?>
                </p>
            </a>
            <p class="cart-product w-clear">
                <span class="btn btn-sm btn-success cart-add addcart mr-2" data-id="<?=$v['id']?>" data-action="addnow">Thêm vào giỏ hàng</span>
                <span class="btn btn-sm btn-danger cart-buy addcart" data-id="<?=$v['id']?>" data-action="buynow">Mua ngay</span>
            </p>
        </div>
    <?php }*/ ?>
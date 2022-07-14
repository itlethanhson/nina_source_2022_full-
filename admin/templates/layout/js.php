<!-- Js Config -->
<script type="text/javascript">
	var CONFIG_BASE = '<?=$configBase?>';
	var TOKEN = '<?=TOKEN?>';
    var ADMIN = '<?=ADMIN?>';
    var ASSET = '<?=ASSET?>';
	var LINK_FILTER = '<?=(!empty($linkFilter)) ? $linkFilter : ''?>';
	var ID = <?=(!empty($id)) ? $id : 0?>;
	var COM = '<?=(!empty($com)) ? $com : ''?>';
	var ACT = '<?=(!empty($act)) ? $act : ''?>';
	var TYPE = '<?=(!empty($type)) ? $type : ''?>';
	var HASH = '<?=$func->generateHash()?>';
	var ACTIVE_GALLERY = <?=(!empty($flagGallery) && !empty($gallery)) ? 'true' : 'false'?>;
	var BASE64_QUERY_STRING = '<?=base64_encode($_SERVER['QUERY_STRING'])?>';
	var LOGIN_PAGE = <?=(empty($_SESSION[$loginAdmin]['active'])) ? 'true' : 'false'?>;
	var MAX_DATE = '<?=date("Y/m/d",time())?>';
	var CHARTS = <?=(!empty($charts)) ? json_encode($charts) : '{}'?>;
	var ADD_OR_EDIT_PERMISSIONS = <?=(!empty($com) && $com == 'user' && !empty($act) && in_array($act, array('add_permission_group', 'edit_permission_group'))) ? 'true' : 'false'?>;
	var IMPORT_IMAGE_EXCELL = <?=(!empty($com) && $com == 'import' && !empty($config['import']['images'])) ? 'true' : 'false'?>;
	var ORDER_ADVANCED_SEARCH = <?=(!empty($com) && $com == 'order' && !empty($config['order']['search'])) ? 'true' : 'false'?>;
	var ORDER_MIN_TOTAL = <?=(!empty($minTotal)) ? $minTotal : 1?>;
	var ORDER_MAX_TOTAL = <?=(!empty($maxTotal)) ? $maxTotal : 1?>;
	var ORDER_PRICE_FROM = <?=(!empty($price_from)) ? $price_from : 1?>;
	var ORDER_PRICE_TO = <?=(!empty($price_to)) ? $price_to : ((!empty($maxTotal)) ? $maxTotal : 1)?>;
</script>

<!-- Js Files -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/confirm/confirm.js"></script>
<script src="assets/select2/select2.full.js"></script>
<script src="assets/sumoselect/jquery.sumoselect.js"></script>
<script src="assets/datetimepicker/php-date-formatter.min.js"></script>
<script src="assets/datetimepicker/jquery.mousewheel.js"></script>
<script src="assets/datetimepicker/jquery.datetimepicker.js"></script>
<script src="assets/daterangepicker/daterangepicker.js"></script>
<script src="assets/rangeSlider/ion.rangeSlider.js"></script>
<script src="assets/js/priceFormat.js"></script>
<script src="assets/jscolor/jscolor.js"></script>
<script src="assets/filer/jquery.filer.js"></script>
<script src="assets/holdon/HoldOn.js"></script>
<script src="assets/sortable/Sortable.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/adminlte.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script src="assets/apexcharts/apexcharts.min.js"></script>
<script src="assets/simplenotify/simple-notify.js"></script>
<script src="assets/comment/comment.js"></script>
<script src="assets/js/apps.js"></script>

<?php if(isset($config['product'][$type]['thuoctinh_gia']) && $config['product'][$type]['thuoctinh_gia'] == true) { ?>
	<script>
		$(document).ready(function(){
			$('.themphantu').click(function(){							
				if($(this).attr('idd')=='addoption'){
					$(this).before('<div class="hopsanpham"><div class="chi2"><input type="text" class="tenmau" name="tentt[]" value="" placeholder="Tên" /></div><div class="chi2"><input type="text" class="tenmau" name="thuoctinh1[]" value="" placeholder="Thuộc tính 1" /></div><div class="chi2"><input type="text" class="tenmau" name="thuoctinh2[]" value="" placeholder="Thuộc tính 2" /></div><div class="chi2"><input type="text" class="gia format-price" name="giatt[]" value="" placeholder="Giá" /></div><div class="chi2"><input type="text" class="gia format-price" name="giakmtt[]" value="" placeholder="Giá khuyến mãi" /><input type="hidden" class="tenmau" name="thuoctinh[]" value="product"/></div><div class="delete_tt"><img src="assets/images/delete.png" alt=""/></div><div class="clear"></div></div>');
				}
			});
			$('.uploadsp').keyup(function(event) {
				var id = $(this).attr('rel');
				var table = $(this).attr('data-table');
				var name = $(this).attr('data-name');
				var value = $(this).val();
				$.ajax({
					type:'POST',
					url:"api/update_tt.php",
					data:{id:id,table:table,name:name,value:value},
					success:function(re){
							
					}
				});	
			});
		});
	$('body').on('click', '.delete_tt img', function(event) {

		$(this).parents('.hopsanpham').remove();
		var id = $(this).attr('rel');
		var table = $(this).attr('data-table');
		
		$.ajax({
			type:'POST',
			url:"api/delete_tt.php",
			data:{id:id,table:table},
			success:function(re){						
			}
		});
	});
</script>
<?php } ?>
<script>
		$(document).ready(function(){
			
			$('body').on('click', '.delete_1hinh img', function(event) {
				var id = $(this).attr('data-id');
				var table = $(this).attr('data-table');
				var cot = $(this).attr('data-cot');
				var type = $(this).attr('data-type');
				var vitrixoa = $(this).attr('data-vitrixoa');
				$.ajax({
					type:'POST',
					url:"api/xoa1hinh.php",
					data:{id:id,table:table,cot:cot,type:type},
					success:function(re){
						$('#'+vitrixoa).html('');
						alert('Xóa hình thành công');

					}
				});	
			});
		});	
</script>
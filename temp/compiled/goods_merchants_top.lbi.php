<?php if ($this->_var['goods']['user_id']): ?>
<div class="g-d-store-info">
	<div class="item">
		<a href="<?php echo $this->_var['goods']['store_url']; ?>" class="s-name" target="_blank"><?php echo $this->_var['goods']['rz_shopName']; ?></a>
		<?php if ($this->_var['shop_information']['is_IM'] == 1 || $this->_var['shop_information']['is_dsc']): ?>
			<a id="IM" onclick="openWin(this)" href="javascript:;" goods_id="<?php echo $this->_var['goods']['goods_id']; ?>" class="s-a-kefu"><i class="icon i-kefu"></i></a>
		<?php else: ?>
			<?php if ($this->_var['basic_info']['kf_type'] == 1): ?>
			<a href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['basic_info']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8" class="s-a-kefu" target="_blank"><i class="icon"></i></a>
			<?php else: ?>
			<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['basic_info']['kf_qq']; ?>&site=qq&menu=yes" class="s-a-kefu" target="_blank"><i class="icon"></i></a>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<div class="item dsc-store-item">
		<div class="s-score">
			<span class="score-icon"><span class="score-icon-bg" style="width:<?php echo $this->_var['merch_cmt']['cmt']['all_zconments']['allReview']; ?>%;"></span></span>
			<span><?php echo $this->_var['merch_cmt']['cmt']['all_zconments']['score']; ?></span>
			<i class="iconfont icon-down"></i>
		</div>
		<div class="s-score-info">
			<div class="s-cover"></div>
			<div class="g-s-parts">
				<div class="parts-tit">
					<span class="col1"><?php echo $this->_var['lang']['seller_score']; ?></span>
					<span class="col2">&nbsp;</span>
					<span class="col3"><?php echo $this->_var['lang']['industry_compare']; ?></span>
				</div>
				<div class="parts-item parts-goods">
					<span class="col1"><?php echo $this->_var['lang']['goods']; ?></span>
					<span class="col2 <?php if ($this->_var['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 1): ?>ftx-02<?php elseif ($this->_var['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 2): ?>average<?php else: ?>ftx-01<?php endif; ?>"><?php echo $this->_var['merch_cmt']['cmt']['commentRank']['zconments']['score']; ?><i class="iconfont icon-arrow-<?php if ($this->_var['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 1): ?>up<?php elseif ($this->_var['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 2): ?>average<?php else: ?>down<?php endif; ?>"></i></span>
					<span class="col3"><?php echo $this->_var['merch_cmt']['cmt']['commentRank']['zconments']['up_down']; ?>%</span>
				</div>
				<div class="parts-item parts-goods">
					<span class="col1"><?php echo $this->_var['lang']['service']; ?></span>
					<span class="col2 <?php if ($this->_var['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 1): ?>ftx-02<?php elseif ($this->_var['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 2): ?>average<?php else: ?>ftx-01<?php endif; ?>"><?php echo $this->_var['merch_cmt']['cmt']['commentServer']['zconments']['score']; ?><i class="iconfont icon-arrow-<?php if ($this->_var['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 1): ?>up<?php elseif ($this->_var['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 2): ?>average<?php else: ?>down<?php endif; ?>"></i></span>
					<span class="col3"><?php echo $this->_var['merch_cmt']['cmt']['commentServer']['zconments']['up_down']; ?>%</span>
				</div>
				<div class="parts-item parts-goods">
					<span class="col1"><?php echo $this->_var['lang']['deliver_goods']; ?></span>
					<span class="col2 <?php if ($this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 1): ?>ftx-02<?php elseif ($this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 2): ?>average<?php else: ?>ftx-01<?php endif; ?>"><?php echo $this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['score']; ?><i class="iconfont icon-arrow-<?php if ($this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 1): ?>up<?php elseif ($this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 2): ?>average<?php else: ?>down<?php endif; ?>"></i></span>
					<span class="col3"><?php echo $this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['up_down']; ?>%</span>
				</div>
			</div>
			<div class="tel"><?php echo $this->_var['lang']['telephone']; ?>：<?php echo $this->_var['basic_info']['kf_tel']; ?></div>
			<div class="store-href">
				<a href="<?php echo $this->_var['goods']['store_url']; ?>" class="store-home"><i class="iconfont icon-home-store"></i><?php echo $this->_var['lang']['Go_to_store']; ?></a>
			</div>
		</div>
	</div>
	<div class="item">
		<a href="javascript:void(0);" ectype="collect_store" data-type='store' data-value='{"userid":<?php echo $this->_var['user_id']; ?>,"storeid":<?php echo $this->_var['goods']['user_id']; ?>}' data-url="http://<?php echo $_SERVER['SERVER_NAME']; ?><?php echo $_SERVER['PHP_SELF']; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>" class="gz-store-top s-follow"></a>
	</div>
</div>
<?php endif; ?>

<script type="text/javascript">
$(function(){
	goods_collect_store(<?php echo empty($this->_var['goods']['user_id']) ? '0' : $this->_var['goods']['user_id']; ?>);
});
</script>
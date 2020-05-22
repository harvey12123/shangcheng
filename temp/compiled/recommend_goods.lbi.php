
<div class="seckill-all">
	<div class="title"><img src="themes/ecmoban_dsc2017/images/seckill_title_bg.png"></div>
	<div class="seckill-warp">
		<ul class="gb-index-list clearfix">
		<?php $_from = $this->_var['guess_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_77351900_1589790291');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_77351900_1589790291']):
        $this->_foreach['foo']['iteration']++;
?>
			<li class="mod-shadow-card">
				<div class="p-img"><a href="<?php echo $this->_var['goods_0_77351900_1589790291']['url']; ?>"><img src="<?php echo $this->_var['goods_0_77351900_1589790291']['goods_thumb']; ?>"></a></div>
				<div class="p-name"><a href="<?php echo $this->_var['goods_0_77351900_1589790291']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_77351900_1589790291']['goods_name']); ?>"><?php echo $this->_var['goods_0_77351900_1589790291']['goods_name']; ?></a></div>
				<div class="p-lie clearfix">
					<div class="p-pirce"><?php echo $this->_var['goods_0_77351900_1589790291']['sec_price_formated']; ?></div>
					<div class="p-del"><del><?php echo $this->_var['goods_0_77351900_1589790291']['market_price_formated']; ?></del></div>
				</div>
				<div class="p-number clearfix">
					<span><?php echo $this->_var['lang']['sold_alt']; ?><?php echo $this->_var['goods_0_77351900_1589790291']['percent']; ?>%</span>
					<div class="timebar"><i style="width:<?php echo $this->_var['goods_0_77351900_1589790291']['percent']; ?>%;"></i></div>
				</div>				
				<a href="<?php echo $this->_var['goods_0_77351900_1589790291']['url']; ?>" class="btn sc-redBg-btn"><?php echo $this->_var['lang']['button_buy']; ?></a>
			</li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
</div>
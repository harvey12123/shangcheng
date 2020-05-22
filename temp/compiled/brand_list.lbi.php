<?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'brand');$this->_foreach['brand'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['brand']):
        $this->_foreach['brand']['iteration']++;
?>
<li>
	<a href="<?php echo $this->_var['brand']['url']; ?>" class="img" target="_blank">
    	<img src="<?php if ($this->_var['brand']['index_img']): ?><?php echo $this->_var['brand']['index_img']; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/brand_defalut.jpg<?php endif; ?>" alt="">
        <div class="brand_desc<?php if (! $this->_var['brand']['brand_desc']): ?> brand_desc_notic<?php endif; ?>">
        	<div class="tit"><?php echo $this->_var['lang']['brand_desc']; ?></div>
            <div class="info"><?php if ($this->_var['brand']['brand_desc']): ?><?php echo sub_str($this->_var['brand']['brand_desc'],50); ?><?php else: ?><p><?php echo $this->_var['lang']['notime_desc']; ?></p><?php endif; ?></div>
        </div>
        <div class="mask"></div>
    </a>
	<div class="b-logo">
		<a href="javascript:;" class="follow" data-bid="<?php echo $this->_var['brand']['brand_id']; ?>" ectype="coll_brand"><?php if ($this->_var['brand']['is_collect'] > 0): ?><i class="iconfont icon-zan-alts"></i><span ectype="follow_span"><?php echo $this->_var['lang']['follow_yes']; ?></span><?php else: ?><i class="iconfont icon-zan-alt"></i><span ectype="follow_span"><?php echo $this->_var['lang']['follow']; ?></span><?php endif; ?></a>
		<img src="<?php echo $this->_var['brand']['brand_logo']; ?>" alt="<?php echo $this->_var['brand']['brand_name']; ?>">
	</div>
	<div class="slogan"><?php echo $this->_var['brand']['brand_name']; ?></div>
</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php if ($this->_var['ad_child']): ?>
<?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_68599400_1589785796');$this->_foreach['noad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noad']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_68599400_1589785796']):
        $this->_foreach['noad']['iteration']++;
?>
<div class="item item<?php echo $this->_foreach['noad']['iteration']; ?>">
    <div class="item-top">
        <a href="<?php echo $this->_var['ad_0_68599400_1589785796']['ad_link']; ?>" target="_blank"><img src="<?php echo $this->_var['ad_0_68599400_1589785796']['ad_code']; ?>"></a>
    </div>
    <div class="item-bot">
        <div class="tit"><?php echo $this->_var['ad_0_68599400_1589785796']['b_title']; ?></div>
        <div class="desc"><?php echo $this->_var['ad_0_68599400_1589785796']['s_title']; ?></div>
    </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
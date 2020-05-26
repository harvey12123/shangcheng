<?php if ($this->_var['ad_child']): ?>
<?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_85888300_1590458480');$this->_foreach['noad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noad']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_85888300_1590458480']):
        $this->_foreach['noad']['iteration']++;
?>
<div class="item"><i style="background:url(<?php echo $this->_var['ad_0_85888300_1590458480']['ad_code']; ?>) center center no-repeat;width:<?php echo $this->_var['ad_0_85888300_1590458480']['ad_width']; ?>;height:<?php echo $this->_var['ad_0_85888300_1590458480']['ad_height']; ?>;display:display;float:left"></i><span><?php echo $this->_var['cat_name']; ?></span></div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
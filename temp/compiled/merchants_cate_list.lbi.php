

<?php if ($this->_var['cate_list']): ?>
<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate');if (count($_from)):
    foreach ($_from AS $this->_var['cate']):
?>
<?php if ($this->_var['user_center']): ?>
<div class="checkbox_item">
	<input type="checkbox" name="cateChild[]" class="ui-checkbox" value="<?php echo $this->_var['cate']['cat_id']; ?>" id="cateChild_<?php echo $this->_var['cate']['cat_id']; ?>">
	<label for="cateChild_<?php echo $this->_var['cate']['cat_id']; ?>" class="ui-label"><?php echo $this->_var['cate']['cat_name']; ?></label>
</div>
<?php else: ?>
<div class="cart-checkbox"><input type="checkbox" name="cateChild[]" class="ui-checkbox CheckBoxShop" value="<?php echo $this->_var['cate']['cat_id']; ?>" id="cate_<?php echo $this->_var['cate']['cat_id']; ?>"><label for="cate_<?php echo $this->_var['cate']['cat_id']; ?>"><?php echo $this->_var['cate']['cat_name']; ?></label></div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<input name="oneCat_id" value="<?php echo $this->_var['cat_id']; ?>" id="oneCat_id" type="hidden">
<?php else: ?>
<?php echo $this->_var['lang']['select_one_category']; ?>
<?php endif; ?>


<div class="panel-body">
    <div class="panel-tit"><span><?php echo $this->_var['title']['fields_titles']; ?></span></div>
    <div class="cue"><?php echo $this->_var['title']['titles_annotation']; ?></div>
    <div class="list"><?php echo $this->fetch('library/cententFields.lbi'); ?></div>
    <div class="view-sample" style="display:none">
        <div class="img-wrap">
            <img width="180" height="180" alt="" src="http://seller.shop.jd.com/common/images/ruzhu/x_1.jpg">
        </div>
        <div class="t-c mt10">
            <a class="link-blue" target="_blank" href="http://seller.shop.jd.com/common/images/ruzhu/1.jpg"><?php echo $this->_var['lang']['View_larger']; ?></a>
        </div>
    </div>
</div>
<?php if ($this->_var['title']['cententFields']): ?>
<script type="text/javascript">
<?php $_from = $this->_var['title']['cententFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fields');if (count($_from)):
    foreach ($_from AS $this->_var['fields']):
?>
<?php $_from = $this->_var['fields']['dateTimeForm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('dk', 'date');if (count($_from)):
    foreach ($_from AS $this->_var['dk'] => $this->_var['date']):
?>
/*日期*/
var opts_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?> = {
	'targetId':'<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>',
	'triggerId':['<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>'],
	'alignId':'<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>',
	'hms':'off',
	'format':'-'
}
xvDate(opts_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>);
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<?php endif; ?>

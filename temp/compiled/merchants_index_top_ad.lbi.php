<?php if ($this->_var['ad_child']): ?>
<?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['noad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['noad']['iteration']++;
?>
<div class="sett-banner" style="background:url(<?php echo $this->_var['ad']['ad_code']; ?>) center center no-repeat;">
    <div class="banner-auto">
        <div class="s-b-tit">
            <h3><?php echo $this->_var['lang']['sett_title']; ?></h3>
            <div class="s-b-line"></div>
        </div>
        <div class="s-b-btn">
            <a href="javascript:void(0);" data-url="<?php echo $this->_var['url_merchants_steps']; ?>" class="im-sett" ectype="url_merchants_steps"><?php echo $this->_var['lang']['settled_down']; ?></a>
            <a href="javascript:void(0);" data-url="<?php echo $this->_var['url_merchants_steps_site']; ?>" class="view-prog" ectype="url_merchants_steps"><?php echo $this->_var['lang']['settled_down_schedule']; ?></a>
        </div>
    </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<script type="text/javascript">
$("*[ectype='url_merchants_steps']").on("click",function(){
	var url = $(this).data("url");
	var user_id = "<?php echo $this->_var['user_id']; ?>"
	if(user_id > 0){
		location.href = url;
	}else{
		var back_url = "merchants.php";
		$.notLogin("get_ajax_content.php?act=get_login_dialog",back_url);
	}
});
</script>
<?php endif; ?>
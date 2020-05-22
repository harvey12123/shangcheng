<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
</head>

<body>
    <?php echo $this->fetch('library/page_header_common.lbi'); ?>
    <div class="content">
		<?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['brand_index_ad'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <div class="brand-main" ectype='brandMain'>
            <div class="w w1200">
                <div class="brand-title"><span><?php echo $this->_var['lang']['brand_special_area']; ?></span></div>
                <div class="brand-cate" ectype="brandCate">
                    <a href="javascript:;" class="curr" data-catid="0" ectype="cateItem"><?php echo $this->_var['lang']['brand_all']; ?></a><i class="point">·</i>
					<?php $_from = $this->_var['top_cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['cat']):
        $this->_foreach['cat']['iteration']++;
?>
					<a href="javascript:;" data-catid="<?php echo $this->_var['cat']['cat_id']; ?>" ectype="cateItem"><?php echo $this->_var['cat']['cat_name']; ?></a><?php if (! ($this->_foreach['cat']['iteration'] == $this->_foreach['cat']['total'])): ?><i class="point">·</i><?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
                <div class="brand-list" ectype="brandList">
                    <ul ectype="items">
                        <?php echo $this->fetch('/library/brand_list.lbi'); ?>
                    </ul>
                </div>
            </div>
        </div>
		<input type="hidden" name="user_id" value="<?php echo empty($this->_var['user_id']) ? '0' : $this->_var['user_id']; ?>">
    </div>
    <div class="rTop returnHide" ectype="rTop"><img src="themes/ecmoban_dsc2017/images/returnTop.png"></div>
	<?php 
$k = array (
  'name' => 'user_menu_position',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'parabola.js,cart_common.js,cart_quick_links.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/asyLoadfloor.js"></script>
	<script type="text/javascript">
		$.scrollTop("*[ectype='brandList']","*[ectype='rTop']");
		$.scrollLoad("*[ectype='brandMain']", "*[ectype='brandList'] *[ectype='items']", "li", {url:'brand.php', data:'act=load_more_brand'})		
	</script>
</body>
</html>

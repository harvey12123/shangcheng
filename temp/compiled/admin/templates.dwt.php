<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"></a><?php echo $this->_var['lang']['seller']; ?> - <?php echo $this->_var['lang']['store_template_gl']; ?></div>
        <div class="content">
			<?php echo $this->fetch('library/seller_manage_tab.lbi'); ?>
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                	<div class="mian-info">
                        <div class="template-list template-ksh-list mt10">
                        	<ul>
								<?php $_from = $this->_var['available_templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'template');$this->_foreach['template'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['template']['total'] > 0):
    foreach ($_from AS $this->_var['template']):
        $this->_foreach['template']['iteration']++;
?>
                            	<li <?php if ($this->_var['default_tem'] == $this->_var['template']['code']): ?>class="curr"<?php endif; ?>>
                                	<div class="tit"><?php echo $this->_var['template']['name']; ?>-<a href="<?php if ($this->_var['template']['author_uri']): ?><?php echo $this->_var['template']['author_uri']; ?><?php else: ?>#<?php endif; ?>" target="_blank"/><?php echo $this->_var['template']['author']; ?></a></div>
                                    <div class="span"><?php echo $this->_var['template']['desc']; ?></div>
                                    <div class="img">
                                    	<?php if ($this->_var['template']['screenshot']): ?><img width="263" height="338" src="<?php echo $this->_var['template']['screenshot']; ?>" data-src-wide="<?php echo $this->_var['template']['template']; ?>" border="0" id="<?php echo $this->_var['template']['code']; ?>" class="pic"/><?php endif; ?>
                                    </div>
                                    <div class="info">
                                        <p><a href="<?php echo $this->_var['template']['template']; ?>" class="nyroModal" target="_blank"><?php echo $this->_var['lang']['view_big_img']; ?></a></p>
                                        <p class="mt5">
                                            <a href="../merchants_store.php?merchant_id=<?php echo $this->_var['ru_id']; ?>&tem=<?php echo $this->_var['template']['code']; ?>" class="ml10" target="_blank" ><?php echo $this->_var['lang']['preview_template']; ?></a>
                                            <a href="visual_editing.php?act=template_information&tem=<?php echo $this->_var['template']['code']; ?>&merchant_id=<?php echo $this->_var['ru_id']; ?>" class="ml10"><?php echo $this->_var['lang']['edit_template_info']; ?></a>
                                            <a href="javascript:removeTemplate('<?php echo $this->_var['template']['code']; ?>','<?php echo $this->_var['ru_id']; ?>')" class="ml10"><?php echo $this->_var['lang']['remove_template']; ?></a>
                                        </p>
                                    </div>
									<?php if ($this->_var['default_tem'] == $this->_var['template']['code']): ?>
                                    <i class="ing"></i>
									<?php endif; ?>
                                </li>								
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
		// 点击查看图片
		$(function(){
			//$(".nyroModal").nyroModal();
		});
    </script>	
	<script type="text/javascript">
	<!--
	
	function removeTemplate(code,ru_id){
		if(code){
			if(confirm("<?php echo $this->_var['lang']['removeTemplate']; ?>")){
				Ajax.call('visual_editing.php', "act=removeTemplate&code=" + code + "&ru_id=" + ru_id, removeTemplateResponse, 'POST', 'JSON');
			}
		}else{
			alert('<?php echo $this->_var['lang']['selectRemoveTemplate']; ?>');
		}
	}
	
	function removeTemplateResponse(data){
		if(data.error == 0){
			location.href = data.url;
		}else{
			alert(data.content);
		}
	}
	
	//查看模板演示大图
	function maxImg(){
		var carrousel = $(".carrousel");
		var width = $(window).width();
		var height = $(window).height();
		
		$(".portrait").click(function(e){
			var parent = $(this).parents('.templates_content');
			var src = parent.find(".pic").attr("data-src-wide");
			carrousel.find("img").attr("src",src);
			carrousel.fadeIn(200);
		});
		
		carrousel.find(".carr_close").click(function(e){
			carrousel.find("img").attr("src",'');
			carrousel.fadeOut(200);
		});
		
		$(".carrousel .wrapper").css({'width':(width*0.6),'height':(height*0.8)});
	}
	maxImg();
	//-->
	
	</script>
</body>
</html>

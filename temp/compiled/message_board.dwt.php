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

<body class="bg-ligtGary">
    <?php echo $this->fetch('library/page_header_common.lbi'); ?>
    <div class="content">
        <div class="feedback-main">
            <div class="w w1200">
                <h2 class="feedback-title"><?php echo $this->_var['lang']['feedback']; ?></h2>
                <div class="feedback-tip clearfix">
                    <div class="avatar">
                        <img src="themes/ecmoban_dsc2017/images/admin_avatar.png" alt="">
                        <p><?php echo $this->_var['lang']['admin']; ?></p>
                    </div>
                    <div class="message">
                        <p><?php echo $this->_var['lang']['message_user']; ?>： </p>
                        <p><?php echo $this->_var['lang']['message_reply']; ?></p>
                    </div>
                </div>
                <div class="feedback-write feedback-tip-two clearfix">
                	<?php echo $this->fetch('library/message_list.lbi'); ?>
                </div>
				<div class="feedback-write mt30 clearfix">
					<div class="ratelist-content">
					<?php echo $this->fetch('library/pages.lbi'); ?>
					</div>	
				</div>				
                <div class="feedback-write clearfix">
                    <div class="avatar">
                        <img src="<?php if ($this->_var['user_id']): ?><?php if ($this->_var['user_info']['user_picture']): ?><?php echo $this->_var['user_info']['user_picture']; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/touxiang.jpg<?php endif; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/avatar.png<?php endif; ?>" alt="">
                    </div>				
                    <div class="message">
                        <form action="message.php" method="post" name="formMsg" class="feedback-form">
                            <div class="form-row">
                                <div class="ff-hd"><span class="red">*</span><?php echo $this->_var['lang']['message_board_type']; ?></div>
                                <div class="ff-bd clearfix">
									<?php $_from = $this->_var['lang']['message_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['item']['iteration']++;
?>
									<?php if ($this->_var['key'] <= 4): ?>
                                    <div class="radio-item">
                                        <input type="radio" name="msg_type" id="msg_type-<?php echo $this->_var['key']; ?>" class="ui-radio" <?php if (($this->_foreach['item']['iteration'] <= 1)): ?>checked="checked"<?php endif; ?> value="<?php echo $this->_var['key']; ?>">
                                        <label for="msg_type-<?php echo $this->_var['key']; ?>" class="ui-radio-label"><?php echo $this->_var['item']; ?></label>
                                    </div>
									<?php endif; ?>
									<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="ff-hd"><span class="red">*</span><?php echo $this->_var['lang']['message_title']; ?></div>
                                <div class="ff-bd clearfix">
                                    <input type="text" name="msg_title" class="text" placeholder="">
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="ff-hd"><span class="red">*</span><?php echo $this->_var['lang']['message_notic']; ?>：</div>
                                <div class="ff-bd clearfix">
                                    <textarea name="msg_content" id="" cols="30" rows="10" class="textarea"></textarea>
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="ff-hd"><span class="red">*</span><?php echo $this->_var['lang']['message_tel']; ?>：</div>
                                <div class="ff-bd clearfix">
                                    <input type="text" name="user_email" class="text" placeholder="<?php echo $this->_var['lang']['con_email']; ?>">
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <?php if ($this->_var['enabled_captcha']): ?>
                            <div class="form-row">
                                <div class="ff-hd"><span class="red">*</span><?php echo $this->_var['lang']['comment_captcha']; ?>：</div>
                                <div class="ff-bd clearfix">
                                    <div class="captcha_input">
                                        <input type="text" class="text w100" id="captcha" name="captcha">
                                        <img src="captcha_verify.php?captcha=is_common&<?php echo $this->_var['rand']; ?>" alt="captcha" class="captcha_img" onClick="this.src='captcha_verify.php?captcha=is_common&'+Math.random()" data-key="captcha_common" />
                                    </div>
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="form-row">
                            	<input type="submit" name="submit" class="sc-btn sc-redBg-btn" value="<?php echo $this->_var['lang']['submit_goods']; ?>" id="btnSubmit" />
                                <!--<a href="javascript:$('form[name=formMsg]').submit();" class="sc-btn sc-redBg-btn">提交</a>-->
                            	<input type="hidden" name="act" value="act_add_message" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php 
$k = array (
  'name' => 'user_menu_position',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'common.js,cart_common.js,parabola.js,cart_quick_links.js,jquery.validation.min.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
	<script type="text/javascript">
	<?php $_from = $this->_var['lang']['message_board_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	

	/**
	 * 提交留言信息
	*/
	$(function(){
		$("#btnSubmit").on("click",function(){
			//判断用户是否登录
			if(user_id <= 0){
				<?php if ($this->_var['rewrite']): ?>
				var back_url = "message.html";	
				<?php else: ?>
				var back_url = "message.php";
				<?php endif; ?>
				$.notLogin("get_ajax_content.php?act=get_login_dialog",back_url);
				return false;
			}else{
				if($("form[name='formMsg']").valid()){
					$("form[name='formMsg']").submit();
				}
			}
		});
		
		$("form[name='formMsg']").validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.form-row').find('div.form_prompt');
				error_div.html("").append(error);
			},
			ignore:".ignore",
			rules : {
				msg_title : {
					required : true,
					minlength: 2,
					maxlength: 50
				},
				msg_content:{
					required : true
				},
				user_email:{
					required : true,
					email : true
				}
				<?php if ($this->_var['enabled_captcha']): ?>
				,captcha:{
					required : true,
					maxlength : 4,
					remote : {
						cache: false,
						async:false,
						type:'POST',
						url:'ajax_dialog.php?act=ajax_captcha&seKey='+$("input[name='captcha']").siblings(".captcha_img").data("key"),
						data:{
							captcha:function(){
								return $("input[name='captcha']").val();
							}
						},
						dataFilter:function(data,type){
							if(data == "false"){
								$("input[name='captcha']").siblings(".captcha_img").click();
							}
							return data;
						}
					}
				}
				<?php endif; ?>
			},
			messages : {
				msg_title : {
					required : "<i class='iconfont icon-info-sign'></i> <?php echo $this->_var['lang']['commentTitle_not']; ?>",
					minlength: "<i class='iconfont icon-info-sign'></i> <?php echo $this->_var['lang']['commentTitle_xz']; ?>",
					maxlength: "<i class='iconfont icon-info-sign'></i> <?php echo $this->_var['lang']['commentTitle_xz']; ?>"
				},
				msg_content : {
					required : "<i class='iconfont icon-info-sign'></i> <?php echo $this->_var['lang']['content_not']; ?>"
				},
				user_email:{
					required : "<i class='iconfont icon-info-sign'></i> " + msg_empty_email,
					email : "<i class='iconfont icon-info-sign'></i> " + msg_error_email
				}
				<?php if ($this->_var['enabled_captcha']): ?>
				,captcha:{
					required : "<i class='iconfont icon-info-sign'></i> " + json_languages.captcha_not,
					maxlength: "<i class='iconfont icon-info-sign'></i> " + json_languages.captcha_xz,
					remote : "<i class='iconfont icon-info-sign'></i> " + json_languages.captcha_cw
				}
				<?php endif; ?>
			},
			success:function(label){
				label.removeClass().addClass("succeed").html("<i></i>");
			},
			onkeyup:function(element,event){
				var name = $(element).attr("name");
				if(name == "captcha"){
					//不可去除，当是验证码输入必须失去焦点才可以验证（错误刷新验证码）
					return true;
				}else{
					$(element).valid();
				}
			}
		});
	});
	
	/**
	 * 首页分类树 头部
	 */
	function cat_tree_2(){
	  Ajax.call('message.php', 'act=cat_tree_two', cat_tree_2Response, 'GET', 'JSON');
	}

	/**
	 * 接收返回的信息
	 */
	function cat_tree_2Response(res)
	{
		$('.category_tree_2').html(res.content);
	}
	</script>
</body>
</html>

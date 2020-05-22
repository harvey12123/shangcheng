<?php if ($this->_var['article_comment']): ?>
<?php $_from = $this->_var['article_comment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['comment']):
        $this->_foreach['no']['iteration']++;
?>
<div class="com-list-item" id="comment_show">
	<div class="com-user-name">
		<div class="user-ico">
			<?php if ($this->_var['comment']['user_picture']): ?>
			<img src="<?php echo $this->_var['comment']['user_picture']; ?>" width="50" height="50">
			<?php else: ?>
			<img src="themes/ecmoban_dsc2017/images/touxiang.jpg" width="50" height="50" />
			<?php endif; ?>
		</div>
		<div class="user-txt"><?php echo htmlspecialchars($this->_var['comment']['username']); ?></div>
	</div>
	<div class="com-item-warp">
		<div class="ciw-top">
			<div class="ciw-actor-info">
				<?php $_from = $this->_var['comment']['goods_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['tag']):
        $this->_foreach['no']['iteration']++;
?>
                <?php if ($this->_var['tag']['txt']): ?>			
				<span><?php echo $this->_var['tag']['txt']; ?></span>
                <?php endif; ?>			
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>			
			</div>
			<div class="ciw-time"><?php echo $this->_var['comment']['add_time']; ?></div>
		</div>
		
		<div class="ciw-content">
			<div class="com-warp">
				<div class="com-txt"><?php echo $this->_var['comment']['content']; ?></div>
				<div class="com-operate">
                	<div class="com-operate-warp">
                        <a href="javascript:void(0);" class="nice comment_nice<?php if ($this->_var['comment']['useful'] > 0): ?> selected<?php endif; ?>" data-commentid="<?php echo $this->_var['comment']['id']; ?>" data-idvalue="<?php echo $this->_var['comment']['id_value']; ?>"><i class="iconfont icon-thumb"></i><em class='reply-nice<?php echo $this->_var['comment']['id']; ?>'><?php echo $this->_var['comment']['useful']; ?></em></a>
                    </div>
				</div>
			</div>
            <?php if ($this->_var['comment']['re_content']): ?>
            <div class="reply_info">
                <div class="item"><em><?php echo $this->_var['comment']['shop_name']; ?>：</em><?php echo $this->_var['comment']['re_content']; ?></div>
            </div>
            <?php endif; ?>	
		</div>
	</div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
<div class="discuss-left">
<form method="post" action="article.php" id="theFrom">
<div class="review-form" id="doPost" name="doPost">
	<div class="r-u-name">
		<div class="u-ico"><img src="<?php if ($this->_var['user_id']): ?><?php if ($this->_var['user_info']['user_picture']): ?><?php echo $this->_var['user_info']['user_picture']; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/touxiang.jpg<?php endif; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/avatar.png<?php endif; ?>"></div>
		<span>发表评论</span>
	</div>
	<div class="item">
		<div class="item-label"><em class="red">*</em>&nbsp;<?php echo $this->_var['lang']['content']; ?>：</div>
		<div class="item-value">
			<textarea class="textarea" id="test_content" name="content"></textarea>
			<div class="form_prompt"></div>
		</div>
	</div>
	<div class="item">
		<div class="item-label">&nbsp;</div>
		<div class="item-value">
			<input type="hidden" name="act" value="add_comment" />
			<input type="hidden" name="article_id" value="<?php echo $this->_var['id']; ?>" />	
			<input type="button" class="btn sc-redBg-btn" ectype="submit" value="<?php echo $this->_var['lang']['publish']; ?>">
		</div>
	</div>
</div>
</form>
</div>
<?php if ($this->_var['count'] > $this->_var['size']): ?>
<div class="pages26">
    <div class="pages">
        <div class="pages-it">
        <?php echo $this->_var['pager']; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
<script type="text/javascript">
	$(function(){
		$('.comment_nice').click(function(){
			var T = $(this);
			var comment_id = T.data('commentid');
			var goods_id = T.data('idvalue');
			var type = 'comment';
			
			Ajax.call('comment.php', 'act=add_useful&id=' + comment_id + '&goods_id=' + goods_id + '&type=' + type, niceResponse, 'GET', 'JSON');
		});
	});

	function niceResponse(res){
		if(res.err_no == 1){
			var back_url = res.url;
			$.notLogin("get_ajax_content.php?act=get_login_dialog",back_url);
			return false;
		}else if(res.err_no == 0){
			$(".reply-nice" + res.id).html(res.useful);
            $(".comment_nice").addClass("selected");
		}
	}
	
	$(document).on("click","[ectype='submit']",function(){		
		var user_id = $("input[name='user_id']").val();
		var article_id = $("input[name='article_id']").val();
		//判断是否登录
		if(user_id == 0){
			var back_url = "article.php?id=" + article_id;
			$.notLogin("get_ajax_content.php?act=get_login_dialog",back_url);
			return false;
		}
			
		var content = $("#test_content").val();
		if(!content){
			var message = "评论内容不能为空！";
			pbDialog(message,"",0);
			return false;
		}else{
			Ajax.call('article.php', 'act=add_comment&content=' + content + '&article_id=' + article_id, function(data){
				if(data.error){
					pbDialog(data.message,"",0);
				}else{
					pbDialog(data.message,"",1,'','',58,true,function(){location.reload();});					
				}
			}, 'GET', 'JSON');
		}		
	})

</script>
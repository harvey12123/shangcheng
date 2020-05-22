<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['goods_alt']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">		
        	<?php echo $this->fetch('library/seller_comment_tab.lbi'); ?>
        	<div class="explanation" id="explanation">
            	<div class="ex_tit">
					<i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span>
                    <?php if ($this->_var['open'] == 1): ?>
                    <div class="view-case">
                    	<div class="view-case-tit"><i></i><?php echo $this->_var['lang']['view_tutorials']; ?></div>
                        <div class="view-case-info">
                        	<a href="http://help.ecmoban.com/article-4709.html" target="_blank"><?php echo $this->_var['lang']['tutorials_bonus_list_one']; ?></a>
                        </div>
                    </div>			
                    <?php endif; ?>				
				</div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-head">
                    <div class="fl">
                    	<a href="comment_seller.php?act=baseline"><div class="fbutton"><div class="add" title="<?php echo $this->_var['lang']['seller_industry_baseline']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['lang']['seller_industry_baseline']; ?></span></div></div></a>
                    </div>				
                    <div class="refresh">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
					<div class="search">
                    	<form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
						<?php echo $this->fetch('library/search_store.lbi'); ?>
                    	<div class="input">
                        	<input type="text" name="keywords" class="text nofocus" placeholder="<?php echo $this->_var['lang']['user_name']; ?>" autocomplete="off">
							<input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                	<div class="list-div" id="listDiv">
						<?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['user_name']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['order_id']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['goods_steps_name']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['product_desc']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['seller_fwtd']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['logistics_speed']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['logistics_senders']; ?></div></th>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['comment_time']; ?></div></th>
                                    <th width="7%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['rank_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>
                            	<tr>
                                    <td><div class="tDiv"><?php echo $this->_var['comment']['sid']; ?></div></td>
									<td><div class="tDiv"><?php if ($this->_var['comment']['user_name']): ?><?php echo $this->_var['comment']['user_name']; ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['comment']['order_sn']; ?></div></td>
									<td><div class="tDiv"><?php if ($this->_var['comment']['ru_name']): ?><font style="color:#F00;"><?php echo $this->_var['comment']['ru_name']; ?></font><?php else: ?><?php echo $this->_var['lang']['self']; ?><?php endif; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['comment']['desc_rank']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['comment']['service_rank']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['comment']['delivery_rank']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['comment']['sender_rank']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['comment']['add_time']; ?></div></td>                             
                                    <td class="handle">
                                        <div class="tDiv a1">
                                            <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['comment']['sid']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>								
                                        </div>
                                    </td>
                                </tr>
								<?php endforeach; else: ?>
								<tr><td class="no-records" colspan="20"><?php echo $this->_var['lang']['no_records']; ?></td></tr>								
								<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
                                	<td colspan="10">
                                        <div class="list-page">
                                           <?php echo $this->fetch('library/page.lbi'); ?>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
						<?php if ($this->_var['full_page']): ?>
                    </div>
                </div>
            </div>
		</div>
	</div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
	listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
	cfm = new Object();
	cfm['allow'] = '<?php echo $this->_var['lang']['cfm_allow']; ?>';
	cfm['remove'] = '<?php echo $this->_var['lang']['cfm_remove']; ?>';
	cfm['deny'] = '<?php echo $this->_var['lang']['cfm_deny']; ?>';
	
	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	function confirm_bath()
	{
		var action = document.forms['listForm'].elements['sel_action'].value;
		
		return confirm(cfm[action]);
	}
	</script>
</body>
</html>
<?php endif; ?>

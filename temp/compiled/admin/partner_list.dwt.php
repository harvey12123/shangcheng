<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
 
<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['11_system']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit">
					<i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span>
                    <?php if ($this->_var['open'] == 1): ?>
                    <div class="view-case">
                    	<div class="view-case-tit"><i></i><?php echo $this->_var['lang']['view_tutorials']; ?></div>
                        <div class="view-case-info">
                        	<a href="http://www.jabrielcloud.com" target="_blank"><?php echo $this->_var['lang']['tutorials_bonus_list_one']; ?></a>
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
                        <a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>
                </div>
                <div class="common-content">
                	<div class="list-div" id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                    <th width="20%"><div class="tDiv"><a href="javascript:listTable.sort('link_name');"><?php echo $this->_var['lang']['link_name']; ?></a></div></th>
                                    <th width="35%"><div class="tDiv"><a href="javascript:listTable.sort('link_url');"><?php echo $this->_var['lang']['link_url']; ?></a></div></th>
                                    <th width="20%"><div class="tDiv"><a href="javascript:listTable.sort('link_logo');"><?php echo $this->_var['lang']['link_logo']; ?></a></div></th>
                                    <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('show_order');"><?php echo $this->_var['lang']['show_order']; ?></a></div></th>
                                    <th width="10%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['links_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
                            	<tr>
                                    <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['link']['link_name']); ?></div></td>
                                   	<td>
                                        <div class="tDiv">
                                        	<a href="<?php echo $this->_var['link']['link_url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['link']['link_url']); ?></a>
                                        </div>
                                    </td>
                                    <td>
                                    	<div class="tDiv">
										<?php if ($this->_var['link']['link_logo']): ?>
											<span class="show">
                                                <a href="<?php echo $this->_var['link']['link_logo']; ?>" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="<?php echo $this->_var['link']['link_logo']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                            </span>
										<?php endif; ?>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><input name="sort_order" class="text w40" value="<?php echo $this->_var['link']['show_order']; ?>" onkeyup="listTable.editInput(this, 'edit_show_order',<?php echo $this->_var['link']['link_id']; ?> )" type="text"></div></td>
                                    <td class="handle">
                                        <div class="tDiv a2">
                                            <a href="friend_partner.php?act=edit&id=<?php echo $this->_var['link']['link_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['link']['link_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
                                    <td colspan="12">
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
   //分页传值
	listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;

	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	$(function(){
		$(".nyroModal").nyroModal();
	});
    </script>
</body>
</html>
<?php endif; ?>

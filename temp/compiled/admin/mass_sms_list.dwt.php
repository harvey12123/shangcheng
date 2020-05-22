<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['08_members']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit">
					<i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span>
                    <?php if ($this->_var['open'] == 1): ?>
                        <?php if (! $this->_var['ads_type']): ?>
                        <div class="view-case">
                            <div class="view-case-tit"><i></i><?php echo $this->_var['lang']['view_tutorials']; ?></div>
                            <div class="view-case-info">
                                <a href="http://help.ecmoban.com/article-6893.html" target="_blank"><?php echo $this->_var['lang']['tutorials_bonus_list_one']; ?></a>
                            </div>
                        </div>
                        <?php endif; ?>	
                    <?php endif; ?>				
				</div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head">
                   	<?php if ($this->_var['action_link']): ?>
                    <div class="fl">
                        <a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>
                    <?php endif; ?>
                    <div class="refresh<?php if (! $this->_var['action_link']): ?> ml0<?php endif; ?>">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                </div>
                <div class="common-content">
                	<div class="list-div"  id="listDiv">
                        <?php endif; ?>
                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <tr>
                                    <th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                    <th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <?php if ($this->_var['sms_type'] > 0): ?>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['sign_name']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['sms_cdoe']; ?></div></th>
                                    <?php endif; ?>
                                    <th width="25%"><div class="tDiv"><?php echo $this->_var['lang']['temp_content']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['add_time']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['send_out_result']; ?></div></th>
                                    <th width="20%" class="handle"><?php echo $this->_var['lang']['handler']; ?></div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['mass_sms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'note');if (count($_from)):
    foreach ($_from AS $this->_var['note']):
?>
                                <tr>
                                    <td class="sign"><div class="tDiv"><input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['note']['id']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['note']['id']; ?>" /><label for="checkbox_<?php echo $this->_var['note']['id']; ?>" class="checkbox_stars"></label></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['note']['id']; ?></div></td>
                                    <?php if ($this->_var['sms_type'] > 0): ?>
                                    <td><div class="tDiv"><?php echo $this->_var['note']['set_sign']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['note']['temp_id']; ?></div></td>
                                    <?php endif; ?>
                                    <td><div class="tDiv"><?php echo $this->_var['note']['temp_content']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['note']['add_time']; ?></div></td>
                                    <td><div class="tDiv">
                                        <div class="tlist"><span><?php echo $this->_var['lang']['result']['0']; ?>：<?php echo $this->_var['note']['wait_count']; ?> <?php echo $this->_var['lang']['tiao']; ?></span></div>
                                        <div class="tlist"><span><?php echo $this->_var['lang']['result']['1']; ?>：<?php echo $this->_var['note']['success_count']; ?> <?php echo $this->_var['lang']['tiao']; ?></span></div>
                                        <div class="tlist"><span><?php echo $this->_var['lang']['result']['2']; ?>：<?php echo $this->_var['note']['failure_count']; ?> <?php echo $this->_var['lang']['tiao']; ?></span></div>
                                    </div></td>
                                    <td class="handle">
                                        <div class="tDiv a3">
                                            <a href="mass_sms.php?act=log_list&template_id=<?php echo $this->_var['note']['id']; ?>" title="<?php echo $this->_var['lang']['send_sms']; ?>" class="btn_log"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['send_sms']; ?></a>
                                            <a href="mass_sms.php?act=edit&id=<?php echo $this->_var['note']['id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:confirm_redirect('<?php echo $this->_var['lang']['remove_confirm']; ?>', 'mass_sms.php?act=remove&id=<?php echo $this->_var['note']['id']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
                                <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8">
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
	
	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
</body>
</html>
<?php endif; ?>

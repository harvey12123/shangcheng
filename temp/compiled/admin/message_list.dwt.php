<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['juris']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">		
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                </ul>
            </div>
			<div class="flexilist">
                <div class="common-head">
                    <div class="fl">
                    	<a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>
                    <div class="refresh">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                    <div class="search">
                    	<form method="post" action="javascript:searchMessage()" name="theForm">
                    	<div class="imitate_select select_w140 mr0">
                            <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                            <ul>
                            	<?php $_from = $this->_var['lang']['message_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'msg');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['msg']):
?>
                            	<li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['msg']; ?></a></li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                            <input name="msg_type" type="hidden" value="0">
                        </div>
                        <div class="input input-not-left"><button class="not_btn" name="secrch_btn"></button></div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                	<form method="POST" action="message.php?act=drop_msg" name="listForm">
                	<div class="list-div" id="listDiv">
                    <?php endif; ?>
                    <table cellpadding="1" cellspacing="1">
                    	<thead>
                        <tr>
                        	<th width="3%" class="sign">
                                <div class="tDiv">
                                    <input type="checkbox" name="all_list" class="checkbox" id="all_list">
                                    <label for="all_list" class="checkbox_stars"></label>
                                </div>
                            </th>
                            <th width="5%">
                                <div class="tDiv">
                                    <a href="javascript:listTable.sort('message_id');"><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_message_id']; ?>
                                </div>
                            </th>
                            <th width="30%"><div class="tDiv"><a href="javascript:listTable.sort('title'); "><?php echo $this->_var['lang']['title']; ?></a><?php echo $this->_var['sort_title']; ?></div></th>
                            <th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('sender_id'); "><?php echo $this->_var['lang']['sender_id']; ?></a><?php echo $this->_var['sort_sender_id']; ?></div></th>
                            <th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('sent_time'); "><?php echo $this->_var['lang']['send_date']; ?></a><?php echo $this->_var['sort_send_date']; ?></div></th>
                            <th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('read_time'); "><?php echo $this->_var['lang']['read_date']; ?></a><?php echo $this->_var['sort_read_date']; ?></div></th>
                            <th width="20%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                        </tr>
                        </thead>
                        <tbody>
                    	<?php $_from = $this->_var['message_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'msg');if (count($_from)):
    foreach ($_from AS $this->_var['msg']):
?>
                        <tr>
                        	<td class="sign">
                            	<div class="tDiv">
                                	<input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['msg']['message_id']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['msg']['message_id']; ?>" />
                                    <label for="checkbox_<?php echo $this->_var['msg']['message_id']; ?>" class="checkbox_stars"></label>
                                </div>
                            </td>
                            <td><div class="tDiv"><?php echo $this->_var['msg']['message_id']; ?></div></td>
                            <td><div class="tDiv"><?php echo sub_str(htmlspecialchars($this->_var['msg']['title']),35); ?></div></td>
                            <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['msg']['user_name']); ?></div></td>
                            <td><div class="tDiv"><?php echo $this->_var['msg']['sent_time']; ?></div></td>
                            <td><div class="tDiv"><?php echo empty($this->_var['msg']['read_time']) ? 'N/A' : $this->_var['msg']['read_time']; ?></div></td>
                            <td class="handle">
                            	<div class="tDiv a2">
                                    <a href="message.php?act=view&id=<?php echo $this->_var['msg']['message_id']; ?>" title="<?php echo $this->_var['lang']['view_msg']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view']; ?></a>
                                    <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['msg']['message_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </tbody>
                        <tfoot>
                        	<tr>
                                <td colspan="10">
                                    <div class="tDiv">
                                        <div class="tfoot_btninfo"><input type="submit" name="drop" id="btnSubmit" value="<?php echo $this->_var['lang']['drop']; ?>" class="btn btn_disabled" disabled="true" ectype="btnSubmit" /></div>
                                        <div class="list-page">
                                            <?php echo $this->fetch('library/page.lbi'); ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <?php if ($this->_var['full_page']): ?>
                    </div>
                    </form>
                </div>    
            </div>
    	</div>        
	</div>    
    <?php echo $this->fetch('library/pagefooter.lbi'); ?>            
	<script type="text/javascript">
	listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo $this->_var['page_count']; ?>;
	
	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	/**
	* 查询留言
	*/
	function searchMessage()
	{
		listTable.filter.msg_type = document.forms['theForm'].elements['msg_type'].value;
		listTable.filter.page = 1;
		listTable.loadList();
	}
    </script>
</body>
</html>
<?php endif; ?>
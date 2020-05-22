<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php if ($this->_var['type'] == 1): ?><?php echo $this->_var['lang']['ectouch']; ?><?php else: ?><?php echo $this->_var['lang']['ad_type1']; ?><?php endif; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit">
					<i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span>
                    <?php if ($this->_var['open'] == 1): ?>
                        <?php if (! $this->_var['type']): ?>
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
                        <div class="refresh">
                        <div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                        <div class="refresh_span"><?php echo $this->_var['lang']['refresh']; ?> - <?php echo $this->_var['lang']['total_data']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['data']; ?></div>
                    </div>
                     <form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                        <div class="search">
                            <div class="input">
                                <input type="text" name="keyword" class="text nofocus" placeholder="<?php echo $this->_var['lang']['position_name']; ?>" autocomplete="off" />
                                <input type="submit" value="" class="not_btn" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="common-content">
                	<div class="list-div" id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['position_name']; ?></div></th>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['goods_steps_name']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['posit_width']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['posit_height']; ?></div></th>
                                    <th width="18%"><div class="tDiv"><?php echo $this->_var['lang']['position_model']; ?></div></th>
                                    <th width="19%"><div class="tDiv"><?php echo $this->_var['lang']['position_desc']; ?></div></th>
                                    <th width="15%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['position_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                            	<tr>
                                    <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['list']['position_name']); ?></div></td>
                                    <?php if ($this->_var['list']['is_public'] == 1): ?>
                                        <?php if ($this->_var['priv_ru'] == 1): ?>
                                        <td><div class="tDiv"><font style="color:#F60;"><?php echo $this->_var['lang']['common']; ?></font></div></td>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <?php if ($this->_var['priv_ru'] == 1): ?>
                                        <td><div class="tDiv"><?php if ($this->_var['list']['user_name']): ?><font style="color:#F00;"><?php echo $this->_var['list']['user_name']; ?></font><?php else: ?><font class="blue"><?php echo $this->_var['lang']['19_self_support']; ?></font><?php endif; ?></div></td>
                                        <?php endif; ?>
                                    <?php endif; ?>   
                                    <td><div class="tDiv"><?php echo $this->_var['list']['ad_width']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['ad_height']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['position_model']; ?></div></td>
                                    <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['list']['position_desc']); ?></div></td>
                                    <td class="handle">
                                        <div class="tDiv a3">
                                            <a href="<?php if ($this->_var['type'] == 1): ?>touch_ads.php<?php else: ?>ads.php<?php endif; ?>?act=list&pid=<?php echo $this->_var['list']['position_id']; ?>" title="<?php echo $this->_var['lang']['view']; ?><?php echo $this->_var['lang']['ad_content']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view']; ?></a>
                                            <a href="<?php if ($this->_var['type'] == 1): ?>touch_ad_position.php<?php else: ?>ad_position.php<?php endif; ?>?act=edit&id=<?php echo $this->_var['list']['position_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['list']['position_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
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

<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="javascript:;" ectype='goback' class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php if ($this->_var['ads_type'] == 1): ?><?php echo $this->_var['lang']['ectouch']; ?><?php else: ?><?php echo $this->_var['lang']['ad_type1']; ?><?php endif; ?> - <?php echo $this->_var['ur_here']; ?></div>
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
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['adv_list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['adv_list']['1']; ?></li>
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
                    <div class="search">
                        <form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                        <div class="select" id="keyword">
                            <div class="label"><?php echo $this->_var['lang']['position_id']; ?>：</div>
                            <div id="keywordselect" class="imitate_select select_w320 mr0">
                                <div class="cite"><?php echo $this->_var['lang']['select_position_id']; ?></div>
                                <ul>
                                   <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['select_position_id']; ?></a></li>
                                   <?php $_from = $this->_var['position_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pos');if (count($_from)):
    foreach ($_from AS $this->_var['pos']):
?>
                                   <li><a href="javascript:;" data-value="<?php echo $this->_var['pos']['position_id']; ?>"><?php echo $this->_var['pos']['position_name']; ?> [<?php echo $this->_var['pos']['ad_width']; ?>×<?php echo $this->_var['pos']['ad_height']; ?>]</a></li>
                                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                                <input name="pid" type="hidden" value="0" id="keywordval">
                            </div>
                        </div>
                        <div class="select">
                            <div class="label"><?php echo $this->_var['lang']['advance_date_position']; ?>：</div>					
                            <div id="advance_date" class="imitate_select select_w145">
                                <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                <ul>
                                   <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                   <li><a href="javascript:;" data-value="1"><?php echo $this->_var['lang']['advance_date_position']; ?></a></li>
                                   <li><a href="javascript:;" data-value="2"><?php echo $this->_var['lang']['end_position']; ?></a></li>
                                </ul>
                                <input name="advance_date" type="hidden" value="0">
                            </div>
                        </div>
                        <div class="input">
                            <input type="text" name="keyword" class="text nofocus" placeholder="<?php echo $this->_var['lang']['ad_name']; ?>" autocomplete="off" /><input type="submit" value="" class="not_btn" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                	<div class="list-div"  id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                    <th width="5%"><div class="tDiv"><a href="javascript:listTable.sort('ad_id'); "><?php echo $this->_var['lang']['record_id']; ?></a></div></th>
                                    <th width="14%"><div class="tDiv"><a href="javascript:listTable.sort('ad_name'); "><?php echo $this->_var['lang']['ad_name']; ?></a></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['goods_steps_name']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('position_id'); "><?php echo $this->_var['lang']['position_id']; ?></a></div></th>
                                    <th width="8%"><div class="tDiv"><a href="javascript:listTable.sort('media_type'); "><?php echo $this->_var['lang']['media_type']; ?></a></div></th>
                                    <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('start_date'); "><?php echo $this->_var['lang']['start_date']; ?></a></div></th>
                                    <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('end_date'); "><?php echo $this->_var['lang']['end_date']; ?></a></div></th>
                                    <th width="8%"><div class="tDiv tc"><a href="javascript:listTable.sort('click_count'); "><?php echo $this->_var['lang']['click_count']; ?></a></div></th>
                                    <th width="8%"><div class="tDiv tc"><?php echo $this->_var['lang']['ads_stats']; ?></div></th>
                                    <th width="12%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['ads_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                            	<tr>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['ad_id']; ?></div></td>
                                    <td><div class="tDiv"><span onclick="listTable.edit(this, 'edit_ad_name', <?php echo $this->_var['list']['ad_id']; ?>)" title="<?php echo htmlspecialchars($this->_var['list']['ad_name']); ?>" data-toggle="tooltip" class="span"><?php echo htmlspecialchars($this->_var['list']['ad_name']); ?></span></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['list']['user_name']): ?><font class="red"><?php echo $this->_var['list']['user_name']; ?></font><?php else: ?><font class="blue"><?php echo $this->_var['lang']['self']; ?></font><?php endif; ?></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['list']['position_id'] == 0): ?><?php echo $this->_var['lang']['outside_posit']; ?><?php else: ?><?php echo $this->_var['list']['position_name']; ?><?php endif; ?></div></td>
                                    <td>
                                        <div class="tDiv">
                                            <?php if (( $this->_var['list']['type'] == $this->_var['lang']['imgage'] )): ?>
                                            <span class="show">
                                                <a href="<?php echo $this->_var['list']['ad_code']; ?>" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="<?php echo $this->_var['list']['ad_code']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['start_date']; ?></div></td>
                                    <td><div class="tDiv<?php if ($this->_var['list']['advance_date'] == 1): ?> org<?php elseif ($this->_var['list']['advance_date'] == 2): ?> red<?php endif; ?>"><?php if ($this->_var['list']['advance_date'] == 2): ?><?php echo $this->_var['lang']['has_ended']; ?><?php else: ?><?php echo $this->_var['list']['end_date']; ?><?php endif; ?></div></td>
                                    <td><div class="tDiv tc"><?php echo $this->_var['list']['click_count']; ?></div></td>
                                    <td><div class="tDiv tc"><?php echo $this->_var['list']['ad_stats']; ?></div></td>
                                    <td class="handle">
                                        <div class="tDiv a3">
                                            <?php if ($this->_var['list']['position_id'] == 0): ?>
                                            <a href="<?php if ($this->_var['ads_type'] == 1): ?>touch_ads.php<?php else: ?>ads.php<?php endif; ?>?act=add_js&type=<?php echo $this->_var['list']['media_type']; ?>&id=<?php echo $this->_var['list']['ad_id']; ?>" title="<?php echo $this->_var['lang']['add_js_code']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view_content']; ?></a>
                                            <?php endif; ?>
                                            <a href="<?php if ($this->_var['ads_type'] == 1): ?>touch_ads.php<?php else: ?>ads.php<?php endif; ?>?act=edit&id=<?php echo $this->_var['list']['ad_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['list']['ad_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
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
		
		$(function(){
			//点击查看图片
			$('.nyroModal').nyroModal();
		});
    </script>
</body>
</html>
<?php endif; ?>

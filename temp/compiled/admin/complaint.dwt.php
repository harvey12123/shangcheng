<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['order_word']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="tabs_info">
            	<ul>
                    <?php if (! $this->_var['rs_id']): ?><li <?php if ($this->_var['act_type'] == 'complaint_conf'): ?>class="curr"<?php endif; ?>><a href="<?php echo $this->_var['action_link2']['href']; ?>"><?php echo $this->_var['action_link2']['text']; ?></a></li><?php endif; ?>
                    <li <?php if ($this->_var['act_type'] == 'list'): ?>class="curr"<?php endif; ?>><a href="<?php echo $this->_var['action_link']['href']; ?>"><?php echo $this->_var['action_link']['text']; ?></a></li>
                    <?php if (! $this->_var['rs_id']): ?><li <?php if ($this->_var['act_type'] == 'title'): ?>class="curr"<?php endif; ?>><a href="<?php echo $this->_var['action_link1']['href']; ?>"><?php echo $this->_var['action_link1']['text']; ?></a></li><?php endif; ?>
                </ul>
            </div>
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['2']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-head">
                   	<div class="refresh ml0">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                    
                    <div class="search">
                        <form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                            <div class="select">
                                <div class="fl"><?php echo $this->_var['lang']['complaint_state_title']; ?>：</div>
                                <div class="imitate_select select_w170">
                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                    <ul>
                                       <li><a href="javascript:;" data-value="-1"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                       <li><a href="javascript:;" data-value="5"><?php echo $this->_var['lang']['complaint_state']['0']; ?></a></li>
                                        <li><a href="javascript:;" data-value="1"><?php echo $this->_var['lang']['complaint_state']['1']; ?></a></li>
                                        <li><a href="javascript:;" data-value="2"><?php echo $this->_var['lang']['complaint_state']['2']; ?></a></li>
                                        <li><a href="javascript:;" data-value="3"><?php echo $this->_var['lang']['complaint_state']['3']; ?></a></li>
                                        <li><a href="javascript:;" data-value="4"><?php echo $this->_var['lang']['complaint_state']['4']; ?></a></li>
                                    </ul>
                                    <input name="handle_type" type="hidden" value="-1">
                                </div>
                            </div>
                            <div class="input">
                                <input type="text" name="keywords" class="text nofocus" placeholder="<?php echo $this->_var['lang']['user_name']; ?>/<?php echo $this->_var['lang']['order_sn']; ?>" autocomplete="off" />
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
                                  <th width="4%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                  <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['order_sn']; ?></div></th>
                                  <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['steps_shop_name']; ?></div></th>
                                  <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['complain_user']; ?></div></th>
                                  <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['complain_title']; ?></div></th>
                                  <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['complaint_content']; ?></div></th>
                                  <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['complain_img']; ?></div></th>
                                  <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['appeal_content']; ?></div></th>
                                  <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['appeal_img']; ?></div></th>
                                  <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['complaint_state_title']; ?></div></th>
                                  <th width="6%"><div align="center"><?php echo $this->_var['lang']['handler']; ?></div></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $_from = $this->_var['complaint_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'complaint');if (count($_from)):
    foreach ($_from AS $this->_var['complaint']):
?>
                                <tr>
                                  <td>
                                      <div class="tDiv"><?php echo $this->_var['complaint']['complaint_id']; ?>
                                          <?php if ($this->_var['complaint']['has_talk'] == 1): ?><p class="red"><?php echo $this->_var['lang']['unread_info']; ?></p><?php endif; ?>
                                      </div>
                                  </td>
                                  <td><div class="tDiv"><a href="order.php?act=info&order_id=<?php echo $this->_var['complaint']['order_id']; ?>"><?php echo $this->_var['complaint']['order_sn']; ?></a></div></td>
                                  <td><div class="tDiv"><font class="red"><?php echo $this->_var['complaint']['shop_name']; ?></font></div></td>
                                  <td><div class="tDiv"><?php echo $this->_var['complaint']['user_name']; ?></div></td>
                                  <td><div class="tDiv"><?php echo $this->_var['complaint']['title_name']; ?></div></td>
                                  <td><div class="tDiv"><?php echo $this->_var['complaint']['complaint_content']; ?></div></td>
                                  <td>
                                      <div class="tDiv">
                                          <?php $_from = $this->_var['complaint']['img_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['img']):
?>
                                          <span class="show">
                                              <a target="_blank" href="<?php echo $this->_var['img']['img_file']; ?>" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="<?php echo $this->_var['img']['img_file']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                          </span>
                                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                      </div>
                                  </td> 
                                  <td><div class="tDiv"><?php echo $this->_var['complaint']['appeal_messg']; ?></div></td>
                                  <td>
                                      <div class="tDiv">
                                          <?php $_from = $this->_var['complaint']['appeal_img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['img']):
?>
                                          <span class="show">
                                              <a target="_blank" href="<?php echo $this->_var['img']['img_file']; ?>" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="<?php echo $this->_var['img']['img_file']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                          </span>
                                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                      </div>
                                  </td> 
                                  <td>
                                      <div class="tDiv">
                                          <p><?php echo $this->_var['lang']['complaint_state'][$this->_var['complaint']['complaint_state']]; ?></p>
                                      </div>
                                  </td>
                                  <td class="handle"><div class="tDiv a3" align="center">
                                    <a href="complaint.php?act=view&complaint_id=<?php echo $this->_var['complaint']['complaint_id']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view']; ?></a>
                                    <?php if ($this->_var['complaint']['complaint_state'] == 4): ?>
                                    <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['complaint']['complaint_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                    <?php endif; ?>
                                  </div></td>
                                </tr>
                              <?php endforeach; else: ?>
                              <tr><td class="no-records" colspan="11"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                              <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>   
                            <tfoot>
                            	<tr>
                                    <td colspan="11">
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
	listTable.act_type = '<?php echo $this->_var['act_type']; ?>';

	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </script>
</body>
</html>
<?php endif; ?>

<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['goods_alt']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<?php echo $this->fetch('library/shipping_menu_tab.lbi'); ?>					
        	<div class="explanation m10" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['2']; ?></li>
                </ul>
            </div>
            <?php echo $this->fetch('library/common_tabs_info.lbi'); ?>
            <div class="flexilist">
                <div class="common-head">
                    <div class="fl">
                    	<a href="goods_transport.php?act=add"><div class="fbutton"><div class="add" title="<?php echo $this->_var['lang']['add_transport']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['lang']['add_transport']; ?></span></div></div></a>
                    </div>				
					<div class="refresh ml0">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                    <div class="search">
                    	<form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">				
						<?php echo $this->fetch('library/search_store.lbi'); ?>
                        <?php if ($this->_var['common_tabs']['info']): ?>
                        <div class="select m0">
                            <div class="imitate_select select_w170">
                                <div class="cite"><?php echo $this->_var['lang']['adopt_status']; ?></div>
                                <ul>
                                    <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['adopt_status']; ?></a></li>
                                    <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['not_audited']; ?></a></li>
                                    <li><a href="javascript:;" data-value="2" class="ftx-01"><?php echo $this->_var['lang']['audited_not_adopt']; ?></a></li>
                                    <li><a href="javascript:;" data-value="3" class="ftx-01"><?php echo $this->_var['lang']['audited_yes_adopt']; ?></a></li>
                                </ul>
                                <input name="review_status" type="hidden" value="0" id="">
                            </div>
                        </div>
                        <?php endif; ?>
                    	<div class="input">
                        	<input type="text" name="keyword" class="text nofocus" placeholder="<?php echo $this->_var['lang']['filename']; ?>" autocomplete="off" />
                            <input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                        </div>
                        </form>
                    </div>                    
                </div>
                <div class="common-content">
					<form method="POST" action="goods_transport.php?act=batch_drop" name="listForm">
                	<div class="list-div" id="listDiv">
						<?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                	<th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <?php if ($this->_var['filter']['seller_list'] == 1): ?>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['goods_steps_name']; ?></div></th>
                                    <?php endif; ?>
                                    <th width="17%"><div class="tDiv"><?php echo $this->_var['lang']['title']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['shipping_title']; ?></div></th>
                                    <th width="17%"><div class="tDiv"><?php echo $this->_var['lang']['type']['name']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['update_time']; ?></div></th>
                                    <th class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['transport_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                            	<tr>
                                    <td class="sign"><div class="tDiv">
										<input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['list']['tid']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['list']['tid']; ?>" />
										<label for="checkbox_<?php echo $this->_var['list']['tid']; ?>" class="checkbox_stars"></label>
									</div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['tid']; ?></div></td>
                                    <?php if ($this->_var['filter']['seller_list'] == 1): ?>
                                    <td><div class="tDiv"><font class="red"><?php echo $this->_var['list']['shop_name']; ?></font></div></td>
                                    <?php endif; ?>
                                    <td>
                                    	<div class="tDiv">
											<span onclick="listTable.edit(this, 'edit_title', <?php echo $this->_var['list']['tid']; ?>)" title="<?php echo htmlspecialchars($this->_var['list']['title']); ?>" data-toggle="tooltip" class="span"><?php echo htmlspecialchars($this->_var['list']['title']); ?></span>
										</div>
                                    </td>
                                    <td>
                                    	<div class="tDiv">
                                        	<?php if ($this->_var['list']['shipping_title']): ?>
												<?php echo htmlspecialchars($this->_var['list']['shipping_title']); ?>
                                            <?php else: ?>
                                            	(<?php echo $this->_var['lang']['kong']; ?>)
                                            <?php endif; ?>
										</div>
                                    </td>
                                    <td>
                                    	<div class="tDiv">
                                        <?php if ($this->_var['list']['freight_type'] == 1): ?>
                                        	<?php echo $this->_var['lang']['freight_type']['two']; ?>
                                        <?php else: ?>
                                            <?php echo $this->_var['lang']['freight_type']['one']; ?>
                                            <em class="red">(
                                            <?php if ($this->_var['list']['type'] == 1): ?>
                                            	<?php echo $this->_var['lang']['type']['on']; ?>
                                            <?php else: ?>
                                            	<?php echo $this->_var['lang']['type']['off']; ?>
                                            <?php endif; ?>
                                            )</em>
                                        <?php endif; ?>    
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['update_time']; ?></div></td>
									<td class="handle">
                                        <div class="tDiv ht_tdiv">
                                            <a href="goods_transport.php?act=edit&tid=<?php echo $this->_var['list']['tid']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['list']['tid']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                        </div>	
									</td>
                                </tr>
								<?php endforeach; else: ?>
								<tr><td class="no-records"  colspan="20"><?php echo $this->_var['lang']['no_records']; ?></td></tr>								
								<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
                                	<td colspan="10">
                                        <div class="tDiv">
                                            <div class="tfoot_btninfo">
                                                <div class="shenhe">
                                                    <input name="drop_type_id" type="submit" id="btnSubmit" value="<?php echo $this->_var['lang']['drop']; ?>" disabled="true" class="btn btn_disabled" ectype="btnSubmit" />
                                                </div>
                                            </div>
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
	<script type="text/javascript" language="JavaScript">
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

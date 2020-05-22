<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['separate_name']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">		
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['1']; ?></li>
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
                            <div class="select_w120 imitate_select">
                                <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                <ul>
                                   <li><a href="javascript:;" data-value=""><?php echo $this->_var['lang']['sch_stats']['all']; ?></a></li>
                                   <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['sch_stats']['0']; ?></a></li>
                                   <li><a href="javascript:;" data-value="1"><?php echo $this->_var['lang']['sch_stats']['1']; ?></a></li>
                                   <li><a href="javascript:;" data-value="2"><?php echo $this->_var['lang']['sch_stats']['2']; ?></a></li>
                                </ul>
                                <input name="status" type="hidden" value="">
                            </div>
                            <div class="input">
                                <input type="text" name="order_sn" class="text nofocus" placeholder="<?php echo $this->_var['lang']['sch_order']; ?>" autocomplete="off" />
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
                                	<th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['order_id']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['order_stats']['name']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['sch_stats']['name']; ?></div></th>
                                    <th width="25%"><div class="tDiv"><?php echo $this->_var['lang']['log_info']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['separate_type']; ?></div></th>
                                    <th width="15%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['logdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                            	<tr>
                                    <td><div class="tDiv"><a href="order.php?act=info&order_id=<?php echo $this->_var['val']['order_id']; ?>"><?php echo $this->_var['val']['order_sn']; ?></a></div></td>
									<td><div class="tDiv"><?php echo $this->_var['lang']['order_stats'][$this->_var['val']['order_status']]; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['lang']['sch_stats'][$this->_var['val']['is_separate']]; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['val']['info']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['lang']['separate_by'][$this->_var['val']['separate_type']]; ?></div></td>                             
                                    <td class="handle">
                                        <div class="tDiv a2">
                                            <?php if ($this->_var['val']['is_separate'] == 0 && $this->_var['val']['separate_able'] == 1 && $this->_var['on'] == 1): ?>
                                            <a href="javascript:confirm_redirect(separate_confirm, 'affiliate_ck.php?act=separate&oid=<?php echo $this->_var['val']['order_id']; ?>')" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['affiliate_separate']; ?></a>
                                            <a href="javascript:confirm_redirect(cancel_confirm, 'affiliate_ck.php?act=del&oid=<?php echo $this->_var['val']['order_id']; ?>')" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['affiliate_cancel']; ?></a>
                                            <?php elseif ($this->_var['val']['is_separate'] == 1): ?>
                                            <a href="javascript:confirm_redirect(rollback_confirm, 'affiliate_ck.php?act=rollback&logid=<?php echo $this->_var['val']['log_id']; ?>')" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['affiliate_rollback']; ?></a>
                                            <?php else: ?>
                                            -
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
								<?php endforeach; else: ?>
                                <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_ads']; ?></td></tr>
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
	<script type="Text/Javascript" language="JavaScript">
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

<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['08_members']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <div class="tabs_info">
            	<ul>
                    <li<?php if ($this->_var['filter']['process_type'] == 0): ?> class="curr"<?php endif; ?>><a href="user_account.php?act=list&process_type=0"><?php echo $this->_var['lang']['recharge_apply']; ?></a></li>
                    <li<?php if ($this->_var['filter']['process_type'] == 1): ?> class="curr"<?php endif; ?>><a href="user_account.php?act=list&process_type=1"><?php echo $this->_var['lang']['put_forward_apply']; ?></a></li>
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
                <?php if ($this->_var['filter']['process_type'] == 0): ?>
                <div class="common-content mb10">
                    <div class="switch_info">
                        <div class="stat_order_search stat_order_search2">
                            <form action="" method="post" id="" name="selectForm">
                                <div class="search_item">
                                    <strong class="label_txt"><?php echo $this->_var['lang']['keyword']; ?>：</strong>
                                    <input type="text" name="keywords" class="text w250" autocomplete="off" placeholder="<?php echo $this->_var['lang']['keywords_notic']; ?>">
                                </div>
                                <div class="search_item">
                                    <strong class="label_txt"><?php echo $this->_var['lang']['pay_mothed']; ?>：</strong>
                                    <div class="imitate_select select_w145">
                                        <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                        <ul>
                                           <li><a href="javascript:;" data-value=""><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                           <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'list_0_10447500_1589964964');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['list_0_10447500_1589964964']):
?>
                                           <li><a href="javascript:;" data-value="<?php echo $this->_var['k']; ?>"><?php echo $this->_var['list_0_10447500_1589964964']; ?></a></li>
                                           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </ul>
                                        <input name="payment" type="hidden" value="" id="order_referer_val">
                                    </div>
                                </div>
                                <div class="search_item">
                                    <strong class="label_txt"><?php echo $this->_var['lang']['pay_state']; ?>：</strong>
                                    <div class="imitate_select select_w145">
                                        <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                        <ul>
                                           <li><a href="javascript:;" data-value="-1"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                           <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['unconfirm']; ?></a></li>
                                           <li><a href="javascript:;" data-value="1"><?php echo $this->_var['lang']['confirm']; ?></a></li>
                                           <li><a href="javascript:;" data-value="2"><?php echo $this->_var['lang']['cancel']; ?></a></li>
                                        </ul>
                                        <input name="is_paid" type="hidden" value="-1" id="order_referer_val">
                                    </div>
                                </div>
                                <div class="search_item">
                                    <strong class="label_txt">&nbsp</strong>
                                    <a href="javascript:void(0);" class="btn btn30 blue_btn ml0" ectype="searchButton"><i class="icon icon-search"></i><?php echo $this->_var['lang']['btn_search']; ?></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if ($this->_var['filter']['process_type'] == 1): ?>
                <div class="common-content mb10">
                    <div class="switch_info">
                        <div class="stat_order_search stat_order_search2">
                            <form action="" method="post" id="" name="selectForm">
                                <div class="search_item">
                                    <strong class="label_txt"><?php echo $this->_var['lang']['keyword']; ?>：</strong>
                                    <input type="text" name="keywords" class="text w250" autocomplete="off" placeholder="会员名称/手机号/邮箱">
                                </div>
                                <div class="search_item">
                                    <strong class="label_txt"><?php echo $this->_var['lang']['surplus_time']; ?>：</strong>
                                    <div class="text_time" id="text_time_start">
                                        <input type="text" class="text" name="start_date" value="" id="start_date" value="" autocomplete="off" readonly>
                                    </div>
                                    <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                    <div class="text_time" id="text_time_end">
                                        <input type="text" class="text" name="end_date" value="" id="end_date" value="" autocomplete="off" readonly>
                                    </div>
                                </div>
                                <div class="search_item">
                                    <strong class="label_txt"><?php echo $this->_var['lang']['status']; ?>：</strong>
                                    <div class="imitate_select select_w145">
                                        <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                        <ul>
                                           <li><a href="javascript:;" data-value="-1"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                           <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['unconfirm']; ?></a></li>
                                           <li><a href="javascript:;" data-value="1"><?php echo $this->_var['lang']['confirm']; ?></a></li>
                                           <li><a href="javascript:;" data-value="2"><?php echo $this->_var['lang']['cancel']; ?></a></li>
                                        </ul>
                                        <input name="is_paid" type="hidden" value="-1" id="order_referer_val">
                                    </div>
                                </div>
                                <div class="search_item">
                                    <strong class="label_txt">&nbsp</strong>
                                    <a href="javascript:void(0);" class="btn btn30 blue_btn ml0" ectype="searchButton"><i class="icon icon-search"></i><?php echo $this->_var['lang']['btn_search']; ?></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            	<div class="common-head">
                    <div class="fl">
                    	<a href="<?php echo $this->_var['action_link']['href']; ?>"/><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>
                    <div class="refresh">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                    <div class="search">
                    	<form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                        <div class="input">
                            <input type="text" name="keywords" class="text nofocus" placeholder="<?php echo $this->_var['lang']['user_id']; ?>" autocomplete="off" />
							<input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                    <form method="POST" action="user_account.php" name="listForm" onsubmit="return confirm('<?php echo $this->_var['lang']['user_account_confirm']; ?>');">
                        <div class="list-div" id="listDiv">
                            <?php endif; ?>
                            <table cellpadding="0" cellspacing="0" border="0">
                                <thead>
                                    <tr>
                                        <th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                        <th width="5%"><?php echo $this->_var['lang']['record_id']; ?></th>
                                        <th width="14%"><div class="tDiv"><a href="javascript:listTable.sort('user_name', 'DESC'); "><?php echo $this->_var['lang']['user_id']; ?></a><?php echo $this->_var['sort_user_name']; ?></div></th>
                                        <th width="13%"><div class="tDiv"><a href="javascript:listTable.sort('add_time', 'DESC'); "><?php echo $this->_var['lang']['add_date']; ?></a><?php echo $this->_var['sort_add_time']; ?></div></th>
                                        <th width="9%"><div class="tDiv"><a href="javascript:listTable.sort('process_type', 'DESC'); "><?php echo $this->_var['lang']['process_type']; ?></a><?php echo $this->_var['sort_process_type']; ?></div></th>
                                        <th width="9%"><div class="tDiv"><a href="javascript:listTable.sort('amount', 'DESC'); "><?php echo $this->_var['lang']['surplus_amount']; ?></a><?php echo $this->_var['sort_amount']; ?></div></th>
                                        <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('payment', 'DESC'); "><?php echo $this->_var['lang']['pay_mothed']; ?></a><?php echo $this->_var['sort_payment']; ?></div></th>
                                        <th width="11%"><div class="tDiv"><a href="javascript:listTable.sort('is_paid', 'DESC'); "><?php echo $this->_var['lang']['status']; ?></a><?php echo $this->_var['sort_is_paid']; ?></div></th>
                                        <th width="11%"><div class="tDiv"><?php echo $this->_var['lang']['admin_user']; ?></div></th>
                                        <th width="16%"><div class="tc"><?php echo $this->_var['lang']['handler']; ?></div></th>
                                	</tr>
                                </thead>
                                <tbody>
                                    <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <tr>
                                        <td class="sign"><div class="tDiv"><input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['item']['id']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['item']['id']; ?>" /><label for="checkbox_<?php echo $this->_var['item']['id']; ?>" class="checkbox_stars"></label></div></td>
                                        <td><?php echo $this->_var['item']['id']; ?></td>
                                        <td><div class="tDiv"><?php if ($this->_var['item']['user_name']): ?><?php echo $this->_var['item']['user_name']; ?><?php else: ?><?php echo $this->_var['lang']['no_user']; ?><?php endif; ?></div></td>
                                        <td><div class="tDiv"><?php echo $this->_var['item']['add_date']; ?></div></td>
                                        <td><div class="tDiv"><?php echo $this->_var['item']['process_type_name']; ?></div></td>
                                        <td><div class="tDiv"><?php echo $this->_var['item']['surplus_amount']; ?><?php if ($this->_var['item']['deposit_fee'] != 0): ?><span class="red">(手续费：<?php echo $this->_var['item']['deposit_fee']; ?>)</span><?php endif; ?></div></td>
                                        <td ><div class="tDiv"><?php if ($this->_var['item']['payment']): ?><?php echo $this->_var['item']['payment']; ?><?php else: ?>N/A<?php endif; ?></div></td>
                                        <td>
                                        <div class="tDiv">
                                        	<?php if ($this->_var['item']['process_type'] == 1): ?>
                                            	<?php if ($this->_var['item']['is_paid'] == 1): ?>
                                                    <?php echo $this->_var['lang']['is_confirm']; ?>
                                                <?php elseif ($this->_var['item']['is_paid'] == 2): ?>
                                                    <?php echo $this->_var['lang']['dismiss']; ?>
                                                <?php else: ?>
                                                    <?php echo $this->_var['lang']['unconfirm']; ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if ($this->_var['item']['is_paid'] == 1): ?>
                                                    <?php echo $this->_var['lang']['confirm']; ?>
                                                <?php elseif ($this->_var['item']['is_paid'] == 2): ?>   
                                                    <?php echo $this->_var['lang']['confirm_nopay']; ?>
                                                <?php else: ?>
                                                    <?php echo $this->_var['lang']['unconfirm']; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                        </td>
                                        <td><div class="tDiv"><?php echo $this->_var['item']['admin_user']; ?></div></td>
                                        <td class="handle">
                                            <div class="tDiv a2">  
                                                <?php if ($this->_var['item']['is_paid']): ?>
                                                <a href="user_account.php?act=edit&id=<?php echo $this->_var['item']['id']; ?>" title="<?php echo $this->_var['lang']['surplus']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                                <?php else: ?>
                                                <a href="user_account.php?act=check&id=<?php echo $this->_var['item']['id']; ?>" title="<?php echo $this->_var['lang']['check']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['check']; ?></a>
                                                <?php if ($this->_var['item']['process_type'] == 0): ?>
                                                <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['item']['id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['drop']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                                <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="12">
                                            <div class="tDiv">
                                                <div class="tfoot_btninfo">
                                                    <input type="hidden" name="act" value="batch" />
                                                    <input type="submit" value="完成" id="btnSubmit" name="btnSubmit" ectype="btnSubmit" class="btn btn_disabled" disabled="">
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
            <div class="gj_search">
                <div class="search-gao-list" id="searchBarOpen">
                    <i class="icon icon-zoom-in"></i><?php echo $this->_var['lang']['advanced_search']; ?>
                </div>
                <div class="search-gao-bar">
                    <div class="handle-btn" id="searchBarClose"><i class="icon icon-zoom-out"></i><?php echo $this->_var['lang']['pack_up']; ?></div>
                    <div class="title"><h3><?php echo $this->_var['lang']['advanced_search']; ?></h3></div>
                    <form method="get" name="formSearch_senior" action="javascript:searchUser()">
                        <div class="searchContent">
                            <div class="layout-box">
                                <dl>
                                    <dt><?php echo $this->_var['lang']['user_id']; ?></dt>
                                    <dd><input type="text" value="" name="keyword" id="user_name" class="s-input-txt" autocomplete="off" /></dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <div class="select_w145 imitate_select">
                                            <div class="cite"><?php echo $this->_var['lang']['process_type']; ?></div>
                                            <ul>
                                               <li><a href="javascript:;" data-value="-1"><?php echo $this->_var['lang']['process_type']; ?></a></li>
                                               <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['surplus_type_0']; ?></a></li>
                                               <li><a href="javascript:;" data-value="1"><?php echo $this->_var['lang']['surplus_type_1']; ?></a></li>
                                            </ul>
                                            <input name="process_type" type="hidden" value="-1">
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <div class="select_w145 imitate_select">
                                            <div class="cite"><?php echo $this->_var['lang']['pay_mothed']; ?></div>
                                            <ul>
                                               <li><a href="javascript:;" data-value=""><?php echo $this->_var['lang']['pay_mothed']; ?></a></li>
                                               <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'list_0_11193400_1589964964');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['list_0_11193400_1589964964']):
?>
                                               <li><a href="javascript:;" data-value="<?php echo $this->_var['k']; ?>"><?php echo $this->_var['list_0_11193400_1589964964']; ?></a></li>
                                               <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </ul>
                                            <input name="payment" type="hidden" value="">
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <div class="select_w145 imitate_select">
                                            <div class="cite"><?php echo $this->_var['lang']['status']; ?></div>
                                            <ul>
                                               <li><a href="javascript:;" data-value="-1"><?php echo $this->_var['lang']['status']; ?></a></li>
                                               <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['unconfirm']; ?></a></li>
                                               <li><a href="javascript:;" data-value="1"><?php echo $this->_var['lang']['confirm']; ?></a></li>
                                               <li><a href="javascript:;" data-value="2"><?php echo $this->_var['lang']['cancel']; ?></a></li>
                                            </ul>
                                            <input name="is_paid" type="hidden" value="-1">
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="bot_btn">
                            <input type="submit" class="btn red_btn" name="tj_search" value="<?php echo $this->_var['lang']['button_inquire']; ?>" /><input type="reset" class="btn btn_reset" name="reset" value="<?php echo $this->_var['lang']['button_reset_alt']; ?>" />
                        </div>
                    </form>
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
		//列表导航栏设置下路选项
	$(".ps-container").perfectScrollbar();
			
	//高级搜索
	$.divselect("#divselect","#quesetion");
	
	/**
	 * 搜索用户
	 */
	function searchUser()
	{
		var frm = $("form[name='formSearch_senior']");
		listTable.filter['keywords'] = Utils.trim(frm.find("input[name='keyword']").val());
		listTable.filter['process_type'] = frm.find("input[name='process_type']").val();
		listTable.filter['payment'] = Utils.trim(frm.find("input[name='payment']").val());
		listTable.filter['is_paid'] = frm.find("input[name='is_paid']").val();
		listTable.filter['page'] = 1;
		listTable.loadList();
	}
	$.gjSearch("-240px");  //高级搜索

    <?php if ($this->_var['filter']['process_type'] == 1): ?>
    //日期选择插件调用start sunle
    var opts1 = {
        'targetId':'start_date',//时间写入对象的id
        'triggerId':['start_date'],//触发事件的对象id
        'alignId':'start_date',//日历对齐对象
        'format':'-',//时间格式 默认'YYYY-MM-DD HH:MM:SS'
        'min':'' //最小时间
    },opts2 = {
        'targetId':'end_date',
        'triggerId':['end_date'],
        'alignId':'end_date',
        'format':'-',
        'min':''
    }
    xvDate(opts1);
    xvDate(opts2);
    //日期选择插件调用end sunle
    <?php endif; ?>

    //统计
    $(function(){
        $(document).on('click', "[ectype='searchButton']", function(){
            searchData();
        })
    })

    function searchData()
    {
        <?php if ($this->_var['filter']['process_type'] == 0): ?>
        listTable.filter['payment'] = Utils.trim(document.forms['selectForm'].elements['payment'].value);
        <?php else: ?>
        listTable.filter['add_start_date'] = Utils.trim(document.forms['selectForm'].elements['start_date'].value);
        listTable.filter['add_end_date'] = Utils.trim(document.forms['selectForm'].elements['end_date'].value);
        <?php endif; ?>
        listTable.filter['is_paid'] = Utils.trim(document.forms['selectForm'].elements['is_paid'].value);
        listTable.filter['keywords'] = Utils.trim(document.forms['selectForm'].elements['keywords'].value);

        listTable.filter['page'] = 1;
        listTable.loadList();
    }
    </script>
</body>
</html>
<?php endif; ?>

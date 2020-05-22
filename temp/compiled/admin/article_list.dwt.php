<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php if ($this->_var['back_url']): ?><a href="<?php echo $this->_var['back_url']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php endif; ?><?php echo $this->_var['lang']['article']; ?> - <?php echo $this->_var['ur_here']; ?></div>
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
                    <div class="fl">
                    	<a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>
                    <div class="refresh">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                    <div class="search">
                        <form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                            <div  class="select_w120 imitate_select">
                                <div class="cite"><?php echo $this->_var['lang']['all_cat']; ?></div>
                                <ul>
                                   <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['all_cat']; ?></a></li>
                                   <?php echo $this->_var['cat_select']; ?>
                                </ul>
                                <input name="cat_id" type="hidden" value="0">
                            </div>
                            
                            <div class="input">
                                <input type="text" name="keyword" class="text nofocus" placeholder="<?php echo $this->_var['lang']['title']; ?>" autocomplete="off" />
                                <input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                    <form method="POST" action="article.php?act=batch_remove" name="listForm">
                	<div class="list-div" id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                            	<tr>
                                    <th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                    <th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['article_id']; ?></div></th>
                                    <th width="21%"><div class="tDiv"><a href="javascript:listTable.sort('title'); "><?php echo $this->_var['lang']['title']; ?></a></div></th>
                                    <th width="20%"><div class="tDiv"><a href="javascript:listTable.sort('cat_id'); "><?php echo $this->_var['lang']['cat']; ?></a></div></th>
                                    <th width="8%"><div class="tDiv"><a href="javascript:listTable.sort('article_type'); "><?php echo $this->_var['lang']['article_type']; ?></a></div></th>
                                    <th width="8%"><div class="tDiv"><a href="javascript:listTable.sort('sort_order'); "><?php echo $this->_var['lang']['sort_order']; ?></a></div></th>
                                    <th width="8%"><div class="tDiv"><a href="javascript:listTable.sort('is_open'); "><?php echo $this->_var['lang']['is_open']; ?></a></div></th>
                                    <th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('add_time'); "><?php echo $this->_var['lang']['add_time']; ?></a></div></th>
                                    <th width="20%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                            	<tr>
                                    <td class="sign"><div class="tDiv"><input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['list']['article_id']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['list']['article_id']; ?>" /><label for="checkbox_<?php echo $this->_var['list']['article_id']; ?>" class="checkbox_stars"></label></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['article_id']; ?></div></td>
                                    <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['list']['title']); ?></div></td>
                                    <td><div class="tDiv"><!-- <?php if ($this->_var['list']['cat_id'] > 0): ?> --><?php echo htmlspecialchars($this->_var['list']['cat_name']); ?><!-- <?php else: ?> --><?php echo $this->_var['lang']['reserve']; ?><!-- <?php endif; ?> --></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['list']['article_type'] == 0): ?><?php echo $this->_var['lang']['common']; ?><?php else: ?><?php echo $this->_var['lang']['top']; ?><?php endif; ?></div></td>
                                    <td><div class="tDiv"><input type="text" name="sort_order" class="text w40" value="<?php echo $this->_var['list']['sort_order']; ?>" onkeyup="listTable.editInput(this, 'edit_sort_order', <?php echo $this->_var['list']['article_id']; ?>)"/></div></td>
                                    <td>
                                    	<div class="tDiv">
                                            <div class="switch <?php if ($this->_var['list']['is_open'] == 1): ?>active<?php endif; ?>" title="<?php if ($this->_var['list']['is_open'] == 1): ?>是<?php else: ?>否<?php endif; ?>" onclick="listTable.switchBt(this, 'toggle_show', <?php echo $this->_var['list']['article_id']; ?>)">
                                            	<div class="circle"></div>
                                            </div>
                                            <input type="hidden" value="0" name="">
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['date']; ?></div></td>
                                    <td class="handle">
                                        <div class="tDiv a3">
                                            <a href="../article.php?id=<?php echo $this->_var['list']['article_id']; ?>" target="_blank" title="<?php echo $this->_var['lang']['view']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view']; ?></a>
                                            <a href="article.php?act=edit&id=<?php echo $this->_var['list']['article_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                             <!-- <?php if ($this->_var['list']['cat_id'] > 0): ?> --><a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['list']['article_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a><!--<?php endif; ?>-->
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
                                        <div class="tDiv">
                                            <div class="tfoot_btninfo">
                                                <input type="hidden" name="act" value="batch" />
                                                <div class="item">
                                                    <div class="label_value">
                                                        <div id="type_select" class="imitate_select select_w120">
                                                          <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                                          <ul>
                                                             <li><a href="javascript:;" data-value="" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                                             <li><a href="javascript:;" data-value="button_remove" class="ftx-01"><?php echo $this->_var['lang']['button_remove']; ?></a></li>
                                                             <li><a href="javascript:;" data-value="button_hide" class="ftx-01"><?php echo $this->_var['lang']['button_hide']; ?></a></li>
                                                             <li><a href="javascript:;" data-value="button_show" class="ftx-01"><?php echo $this->_var['lang']['button_show']; ?></a></li>
                                                             <li><a href="javascript:;" data-value="move_to" class="ftx-01"><?php echo $this->_var['lang']['move_to']; ?></a></li>
                                                          </ul>
                                                          <input name="type" type="hidden" value=""  id="type_val">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item" style="display: none;" id="review_status">
                                                    <div class="label_value">
                                                        <div  class="imitate_select select_w120">
                                                          <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                                          <ul>
                                                                <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                                                <?php echo $this->_var['cat_select']; ?>
                                                          </ul>
                                                          <input name="target_cat" type="hidden" value="0" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="submit" value="<?php echo $this->_var['lang']['button_submit_alt']; ?>" id="btnSubmit" name="btnSubmit" ectype="btnSubmit" class="btn btn_disabled" disabled="">
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
    <script type="text/javascript">
    listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
    listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
    <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    $.divselect("#type_select","#type_val",function(obj){
        changeAction();
    });
	
	function changeAction(){
		var frm = $("form[name='listForm']");
		var type = $("input[name='type']").val();
		var review_status = $("#review_status");
		
		// 切换分类列表的显示
		review_status.css("display",type == 'move_to' ? '' : 'none');
		
		if(!$('#btnSubmit').disabled && confirmSubmit(frm, false)){
			frm.submit();
		}
	}
	
	/**
	* @param: bool ext 其他条件：用于转移分类
	*/
	function confirmSubmit(frm, ext){
		if ($("input[name='type']").val() == 'button_remove'){
			return confirm(drop_confirm);
		}else if ($("input[name='type']").val() == 'not_on_sale'){
			return confirm(batch_no_on_sale);
		}else if ($("input[name='type']").val() == 'move_to'){
			ext = (ext == undefined) ? true : ext;
			return ext && $("input[name='target_cat']").val() != 0;
		}else if($("input[name='type']").val() == ''){
			return false;
		}else{
			return true;
		}
	}
    </script>     
</body>
</html>
<?php endif; ?>

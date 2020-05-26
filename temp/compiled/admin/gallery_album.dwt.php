<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['goods_alt']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <?php echo $this->fetch('library/common_tabs_info.lbi'); ?>   
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
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['2']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-head">
                    <div class="fl">
                    	<?php if (! $this->_var['common_tabs']['info']): ?><a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a><?php endif; ?>
                        <?php if ($this->_var['action_link1']): ?>
                        <a href="<?php echo $this->_var['action_link1']['href']; ?>"><div class="fbutton"><div class="reply" title="<?php echo $this->_var['action_link1']['text']; ?>"><span><i class="icon icon-reply"></i><?php echo $this->_var['action_link1']['text']; ?></span></div></div></a>
                        <?php endif; ?>
                    </div>
                    <div class="refresh<?php if (! $this->_var['action_link'] || $this->_var['common_tabs']['info']): ?> ml0<?php endif; ?>">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                    <div class="search">
                    	<form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
						<?php echo $this->fetch('library/search_store.lbi'); ?>
                    	<div class="input">
                        	<input type="text" name="album_mame" class="text nofocus" placeholder="<?php echo $this->_var['lang']['album_mame']; ?>" autocomplete="off" />
                            <input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                    <form method="post" action="gallery_album.php" name="listForm" onsubmit="return confirm(batch_drop_confirm);">
                	<div class="list-div" id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <tr>
                                    <th width="8%" class="sign"><div class="tDiv tl ml20"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars mr50"></label></div></th>
                                    <th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['album_mame']; ?></div></th>
                                    <th width="7%"><div class="tDiv"><?php echo $this->_var['lang']['gallery_count']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['shop_name']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['album_cover']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['album_desc']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['sort_order']; ?></div></th>
                                    <th width="15%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['gallery_album']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'agency');if (count($_from)):
    foreach ($_from AS $this->_var['agency']):
?>
                            	<tr>
                                    <td class="sign">
                                        <div class="tDiv">
                                            <input type="checkbox" name="checkboxes[]" class="checkbox" value="<?php echo $this->_var['agency']['album_id']; ?>" id="checkbox_<?php echo $this->_var['agency']['album_id']; ?>" />
                                            <label for="checkbox_<?php echo $this->_var['agency']['album_id']; ?>" class="checkbox_stars"></label>
                                            <div class="setup_span ml10">
                                            	<em><i class="icon icon-cog"></i><?php echo $this->_var['lang']['setup']; ?><i class="arrow"></i></em>
                                                <ul>
                                                	<?php if (! $this->_var['common_tabs']['info']): ?><li><a href="gallery_album.php?act=add&parent_id=<?php echo $this->_var['agency']['album_id']; ?>"><?php echo $this->_var['lang']['add_next_level']; ?></a></li><?php endif; ?>
                                                    <li><a href="gallery_album.php?act=list&parent_id=<?php echo $this->_var['agency']['album_id']; ?>&seller_list=<?php echo $this->_var['filter']['seller_list']; ?>"><?php echo $this->_var['lang']['view_next_level']; ?></a></li>
                                                    <?php if (! $this->_var['common_tabs']['info']): ?><li><a href="javascript:void(0);" ectype="transfer_pic" data-cid="<?php echo $this->_var['agency']['album_id']; ?>"><?php echo $this->_var['lang']['transfer_img']; ?></a></li><?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><?php echo $this->_var['agency']['album_id']; ?></div></td>
                                    <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['agency']['album_mame']); ?></div></td>
                                    <td><div class="tDiv"><?php echo nl2br($this->_var['agency']['gallery_count']); ?></div></td>
                                    <td><div class="tDiv red"><?php echo nl2br($this->_var['agency']['shop_name']); ?></div></td>
                                    <td>
                                        <div class="tDiv">
                                            <?php if ($this->_var['agency']['album_cover']): ?>
                                            <span class="show">
                                                <a href="../<?php echo $this->_var['agency']['album_cover']; ?>" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../<?php echo $this->_var['agency']['album_cover']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                            </span>
                                            <?php else: ?>
                                            <span class="show">
                                                <a href="../data/gallery_album/hover_image.png" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../data/gallery_album/hover_image.png" ectype="tooltip" title="tooltip"></i></a>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><?php echo nl2br($this->_var['agency']['album_desc']); ?></div></td>
                                    <td><div class="tDiv"><input type="text" name="sort_order" class="text w40" value="<?php echo $this->_var['agency']['sort_order']; ?>" onkeyup="listTable.editInput(this, 'edit_sort_order', <?php echo $this->_var['agency']['album_id']; ?>)"/></div></td>
                                    <td class="handle">
                                        <div class="tDiv a2">
                                            <a href="gallery_album.php?act=view&id=<?php echo $this->_var['agency']['album_id']; ?>" title="<?php echo $this->_var['lang']['view']; ?>" class="btn_see mr10"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view']; ?></a>
                                            <a href="gallery_album.php?act=edit&id=<?php echo $this->_var['agency']['album_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['agency']['album_id']; ?>, '<?php echo $this->_var['lang']['ckdelete_album']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
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
                                                <input name="act" type="hidden" value="remove_batch" />
                                                <input name="remove" type="submit" ectype="btnSubmit" value="<?php echo $this->_var['lang']['drop']; ?>" class="btn btn_disabled" disabled />
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
        
    $(".ps-container").perfectScrollbar();
    
    //转移分类
    $(document).on('click',"*[ectype='transfer_pic']",function(){
        var inherit = 0;
		var album_id = $(this).data("cid");
        
        if(confirm('<?php echo $this->_var['lang']['zi_album_handle']; ?>')){
            inherit = 1
        }
		
        $.jqueryAjax("gallery_album.php", "act=move_pic&album_id="+album_id+"&inherit=" + inherit, function(data){
			
			goods_visual_desc('<?php echo $this->_var['lang']['transfer_img']; ?>',732,data.content,function(){
				$("#movepicalbum").submit();
			},"transfer_dialog","<?php echo $this->_var['lang']['start_transfer']; ?>","<?php echo $this->_var['lang']['close']; ?>");

			reset_select("#transfer_dialog");
        });
    });
</script>     
</body>
</html>
<?php endif; ?>

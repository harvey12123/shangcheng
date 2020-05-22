<?php if ($this->_var['temp'] == 'shop_banner'): ?>
<div class="tishi">
	<div class="tishi_info">
    	<?php if (! $this->_var['uploadImage']): ?>
        <p class="first"><?php echo $this->_var['lang']['pagetip_shop_banner_1']; ?></p>
        <?php else: ?>
        <p class="first"><?php echo $this->_var['lang']['pagetip_shop_banner_2']; ?></p>
        <p><?php echo $this->_var['lang']['pagetip_shop_banner_3']; ?></p>
        <i class="icon"></i>
        <?php endif; ?>
    </div>
</div>
<?php if ($this->_var['hierarchy'] != 3): ?>
<div class="tab">
	<ul class="clearfix">
    	<li class="current"><?php echo $this->_var['lang']['setup_content']; ?></li>
        <?php if (! $this->_var['uploadImage'] && $this->_var['mode'] != 'h-streamer'): ?><li><?php echo $this->_var['lang']['setup_display']; ?></li><?php endif; ?>
    </ul>
</div>
<?php endif; ?>
<div class="modal-body">
    <div class="body_info" <?php if ($this->_var['hierarchy'] == 3): ?> style="display:none"<?php endif; ?> id="banner_info">
        <div class="ps_table">
            <table id="addpictable" class="table">
                <thead>
                    <tr>
                        <th><?php echo $this->_var['lang']['imgage']; ?></th>
                        <?php if ($this->_var['uploadImage'] != 1): ?>
                        <th><?php echo $this->_var['lang']['image_link']; ?></th>
                        <th class="center"><?php echo $this->_var['lang']['sort_order']; ?></th>
                        <?php if ($this->_var['mode'] == 'lunbo'): ?>
                        <th class="center"><?php echo $this->_var['lang']['background_color']; ?></th>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_var['titleup'] == 1 || $this->_var['mode'] == 'fh-pindao'): ?>
                        <th class="center"><?php echo $this->_var['lang']['main_title']; ?></th>
                        <th class="center"><?php echo $this->_var['lang']['sub_title']; ?></th>
                        <?php elseif ($this->_var['titleup'] == 2): ?>
                        <th class="center"><?php echo $this->_var['lang']['description']; ?></th>
                        <?php endif; ?>
                        <th class="center"><?php echo $this->_var['lang']['handler']; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $_from = $this->_var['banner_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['item']):
?>
                        <tr>
                            <td>
                                <div class="img">
                                    <span><img src="<?php echo $this->_var['item']['pic_src']; ?>"></span>
                                    <input type="hidden" name="pic_src[]" value="<?php echo $this->_var['item']['pic_src']; ?>"/>
                                </div>
                            </td>
                            <?php if ($this->_var['uploadImage'] != 1): ?>
                            <td>
                                <input type="text" name="link[]" value="<?php echo $this->_var['item']['link']; ?>" class="form-control">
                            </td>
                            <td class="center">
                                <input type="text" value="<?php echo $this->_var['item']['sort']; ?>" name="sort[]" class="form-control small">
                            </td>
                            <?php if ($this->_var['mode'] == 'lunbo'): ?>
                            <td class="center">
                                <input type="text" value="<?php echo $this->_var['item']['bg_color']; ?>" name="bg_color[]" class="form-control small">
                            </td>
                            <?php endif; ?>
                            <?php endif; ?>
                            <?php if ($this->_var['titleup'] == 1 || $this->_var['titleup'] == 2 || $this->_var['mode'] == 'fh-pindao'): ?>
                            <td class="center">
                                <input type="text" value="<?php echo $this->_var['item']['title']; ?>" name="title[]" class="form-control small">
                            </td>
                            <?php if ($this->_var['titleup'] == 1 || $this->_var['mode'] == 'fh-pindao'): ?>
                            <td class="center">
                                <input type="text" value="<?php echo $this->_var['item']['subtitle']; ?>" name="subtitle[]" class="form-control small">
                            </td>
                            <?php endif; ?>
                            <?php endif; ?>
                            <td class="center">
                                <a href="javascript:;" class="pic_del del"><?php echo $this->_var['lang']['drop']; ?></a>
                            </td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr class="notic">
                            <td colspan="10"><?php echo $this->_var['lang']['click_empty_or_upload_btn']; ?></td>
                        </tr>    
                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </tbody>
            </table>
        </div>
        <div class="images_space">
            <div class="goods_gallery mt20" ectype="album-warp">
                <div class="nav">
                    <form action="" id="gallery_pic" method="post" enctype="multipart/form-data"  runat="server">
                        <div class="fl" ectype="albumFilter">
                            <div class="imitate_select select_w220" id="album_id">
                                <div class="cite"><?php echo $this->_var['lang']['please_select_album']; ?></div>		
                                <ul style="display: none;" class="ps-container" ectype="album_list_check">
                                    <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                    <?php $_from = $this->_var['cat_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                    <li><a href="javascript:;" data-value="<?php echo $this->_var['list']['album_id']; ?>" class="ftx-01"><?php echo $this->_var['list']['name']; ?></a></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                                <input name="album_id" type="hidden" value="<?php echo $this->_var['album_id']; ?>" id="album_id_val">
                            </div>
                            <div class="imitate_select select_w220" id="sort_name">
                                <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                <ul style="display: none;" class="ps-container">
                                    <li><a href="javascript:;" data-value="2" class="ftx-01"><?php echo $this->_var['lang']['sort_update_desc']; ?></a></li>
                                    <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['sort_update_asc']; ?></a></li>
                                    <li><a href="javascript:;" data-value="3" class="ftx-01"><?php echo $this->_var['lang']['sort_picsize_asc']; ?></a></li>
                                    <li><a href="javascript:;" data-value="4" class="ftx-01"><?php echo $this->_var['lang']['sort_picsize_desc']; ?></a></li>
                                    <li><a href="javascript:;" data-value="5" class="ftx-01"><?php echo $this->_var['lang']['sort_picname_asc']; ?></a></li>
                                    <li><a href="javascript:;" data-value="6" class="ftx-01"><?php echo $this->_var['lang']['sort_picname_desc']; ?></a></li>
                                </ul>
                                <input name="sort_name" type="hidden" value="2" id="sort_name_val">
                            </div>
                        </div>
                        <div class="updata_btn">
                        	<a href="javascript:void(0);" class="btn30 sc-btn red_btn"><?php echo $this->_var['lang']['upload_image']; ?><input name="file" type="file"></a>
                            <a href="javascript:void(0);" class="btn30 sc-btn red_btn" ectype="add_album"><?php echo $this->_var['lang']['add_album']; ?></a>
                        </div>
                    </form>
                </div>
                
                <div class="table_list" ectype='pic_list'>
                    <div class="gallery_album" data-act="get_albun_pic" data-inid="pic_list" data-url='get_ajax_content.php' data-where="sort_name=<?php echo $this->_var['filter']['sort_name']; ?>&album_id=<?php echo $this->_var['filter']['album_id']; ?>">
                        <ul class="ga-images-ul">
                            <?php $_from = $this->_var['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pic_list_0_55477200_1589783468');if (count($_from)):
    foreach ($_from AS $this->_var['pic_list_0_55477200_1589783468']):
?>
                            <li><a href="javascript:;" onclick="addpic('<?php echo $this->_var['pic_list_0_55477200_1589783468']['pic_file']; ?>',this)"><img src="<?php echo $this->_var['pic_list_0_55477200_1589783468']['pic_file']; ?>"><span class="pixel"><?php echo $this->_var['pic_list_0_55477200_1589783468']['pic_spec']; ?></span></a></li>
                            <?php endforeach; else: ?>
                            <li class="notic"><?php echo $this->_var['lang']['no_image']; ?></li>
                            <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                        <div class="clear"></div>
                        <?php echo $this->fetch('library/lib_page.lbi'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body_info" <?php if ($this->_var['hierarchy'] != 3): ?>style="display:none;"<?php endif; ?>>
    	<div class="control_list<?php if ($this->_var['mode'] == 'topBanner'): ?> hide<?php endif; ?>">
        	<?php if ($this->_var['mode'] != 'storeAdv1' && $this->_var['mode'] != 'fh-haohuo' && $this->_var['mode'] != 'h-phb' && $this->_var['mode'] != 'fh-hot' && $this->_var['mode'] != 'fh-discount' && $this->_var['mode'] != 'fh-pindao'): ?>
            <div class="control_item">
                <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_image_height']; ?></div>
                <div class="control_value">
                <?php if ($this->_var['mode'] == 'lunbo'): ?>
                <input type="text" name="picHeight" value="<?php if ($this->_var['spec_attr']['picHeight']): ?><?php echo $this->_var['spec_attr']['picHeight']; ?><?php else: ?>600<?php endif; ?>" class="shop_text" autocomplete="off" /><span>px</span><span><?php echo $this->_var['lang']['pleas_upload_300_600']; ?></span>
                <?php elseif ($this->_var['mode'] == 'advImg1'): ?>
                <input type="text" name="picHeight" value="<?php if ($this->_var['spec_attr']['picHeight']): ?><?php echo $this->_var['spec_attr']['picHeight']; ?><?php else: ?>400<?php endif; ?>" class="shop_text" autocomplete="off" /><span>px</span><span><?php echo $this->_var['lang']['accord_input_height_default']; ?>400</span>
                <?php elseif ($this->_var['mode'] == 'advImg2'): ?>
                <input type="text" name="picHeight" value="<?php if ($this->_var['spec_attr']['picHeight']): ?><?php echo $this->_var['spec_attr']['picHeight']; ?><?php else: ?>650<?php endif; ?>" class="shop_text" autocomplete="off" /><span>px</span><span><?php echo $this->_var['lang']['accord_input_height_default']; ?>650</span>
                <?php elseif ($this->_var['mode'] == 'advImg3'): ?>
                <input type="text" name="picHeight" value="<?php if ($this->_var['spec_attr']['picHeight']): ?><?php echo $this->_var['spec_attr']['picHeight']; ?><?php else: ?>380<?php endif; ?>" class="shop_text" autocomplete="off" /><span>px</span><span><?php echo $this->_var['lang']['accord_input_height_default']; ?>380</span>
                <?php elseif ($this->_var['mode'] == 'advImg4'): ?>
                <input type="text" name="picHeight" value="<?php if ($this->_var['spec_attr']['picHeight']): ?><?php echo $this->_var['spec_attr']['picHeight']; ?><?php else: ?>250<?php endif; ?>" class="shop_text" autocomplete="off" /><span>px</span><span><?php echo $this->_var['lang']['accord_input_height_default']; ?>250</span>
                <?php else: ?>
                <div class="fl mr10"><input type="text" name="picHeight" value="<?php if ($this->_var['spec_attr']['picHeight']): ?><?php echo $this->_var['spec_attr']['picHeight']; ?><?php else: ?>500<?php endif; ?>" class="shop_text" ectype="required" data-msg="<?php echo $this->_var['lang']['please_input_image_height_in_set']; ?>" autocomplete="off" /><span>px</span></div>
                <div class="notic"><?php echo $this->_var['lang']['pleas_upload_300_500']; ?></div>
                <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($this->_var['mode'] == 'lunbo'): ?>
            <!-- <div class="control_item">
           		<div class="control_text">广告宽度：</div>
                <div class="control_value">
                	<div class="checkbox_items">
                        <div class="checkbox_item">
                            <input type="radio" name="picWidth" value="758" class="ui-radio" id="w758" <?php if ($this->_var['spec_attr']['picWidth'] != '1920'): ?>checked<?php endif; ?> >
                            <label class="ui-radio-label" for="w758">758px</label>
                        </div>
                        <div class="checkbox_item">
                            <input type="radio" name="picWidth" value="1920" class="ui-radio" id="w1920" <?php if ($this->_var['spec_attr']['picWidth'] == '1920'): ?>checked<?php endif; ?>>
                            <label class="ui-radio-label" for="w1920">1920px</label>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_switch_effect']; ?></div>
                <div class="control_value">
                	<div class="checkbox_items">
                        <div class="checkbox_item">
                            <input type="radio" name="slide_type" value="fold" class="ui-radio" id="shade" <?php if ($this->_var['spec_attr']['slide_type'] != 'roll'): ?>checked<?php endif; ?> >
                            <label class="ui-radio-label" for="shade"><?php echo $this->_var['lang']['gradient']; ?></label>
                        </div>
                        <div class="checkbox_item">
                            <input type="radio" name="slide_type" value="roll" class="ui-radio" id="roll" <?php if ($this->_var['spec_attr']['slide_type'] == 'roll'): ?>checked<?php endif; ?>>
                            <label class="ui-radio-label" for="roll"><?php echo $this->_var['lang']['roll']; ?></label>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($this->_var['mode'] == 'advImg1'): ?>
            <div class="control_item">
           		<div class="control_text"><?php echo $this->_var['lang']['label_ad_width']; ?></div>
                <div class="control_value">
                	<div class="checkbox_items">
                        <div class="checkbox_item">
                            <input type="radio" name="picWidth" value="1200" class="ui-radio" id="w1200" <?php if ($this->_var['spec_attr']['picWidth'] != '1920'): ?>checked<?php endif; ?> >
                            <label class="ui-radio-label" for="w1200">1200px</label>
                        </div>
                        <div class="checkbox_item">
                            <input type="radio" name="picWidth" value="1920" class="ui-radio" id="w1920" <?php if ($this->_var['spec_attr']['picWidth'] == '1920'): ?>checked<?php endif; ?>>
                            <label class="ui-radio-label" for="w1920">1920px</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="control_item">
           		<div class="control_text"><?php echo $this->_var['lang']['label_whether_switch']; ?></div>
                <div class="control_value">
                	<div class="checkbox_items">
                        <div class="checkbox_item">
                            <input type="radio" name="slide_type" value="yesSlide" class="ui-radio" id="yesSlide" <?php if ($this->_var['spec_attr']['slide_type'] != 'noSlide'): ?>checked<?php endif; ?> >
                            <label class="ui-radio-label" for="yesSlide"><?php echo $this->_var['lang']['gradient']; ?></label>
                        </div>
                        <div class="checkbox_item">
                            <input type="radio" name="slide_type" value="noSlide" class="ui-radio" id="noSlide" <?php if ($this->_var['spec_attr']['slide_type'] == 'noSlide'): ?>checked<?php endif; ?>>
                            <label class="ui-radio-label" for="noSlide"><?php echo $this->_var['lang']['roll']; ?></label>
                        </div>
                    </div>
                </div>
            </div>    
            <?php endif; ?>
            <?php if ($this->_var['mode'] == 'advImg4'): ?>
            <div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_display_mode']; ?></div>
                <div class="control_value">
                	<div class="itemsLayout line-item3" data-line="row3">
                    	<div class="itemsLayoutShot <?php if ($this->_var['spec_attr']['itemsLayout'] == 'row3'): ?>dtselected<?php endif; ?>"><a href="javascript:void(0);"><span></span></a></div>
                        <div class="dd"><?php echo $this->_var['lang']['display']; ?>3<?php echo $this->_var['lang']['ge_ad_position']; ?><br>（<?php echo $this->_var['lang']['recommend_size']; ?>394*394）</div>
                    </div>
                    <div class="itemsLayout line-item4" data-line="row4">
                    	<div class="itemsLayoutShot <?php if ($this->_var['spec_attr']['itemsLayout'] == 'row4'): ?>dtselected<?php endif; ?>"><a href="javascript:void(0);"><span></span></a></div>
                        <div class="dd"><?php echo $this->_var['lang']['display']; ?>4<?php echo $this->_var['lang']['ge_ad_position']; ?><br>（<?php echo $this->_var['lang']['recommend_size']; ?>292*350）</div>
                    </div>
                    <div class="itemsLayout line-item5" data-line="row5">
                    	<div class="itemsLayoutShot <?php if ($this->_var['spec_attr']['itemsLayout'] == 'row5'): ?>dtselected<?php endif; ?>"><a href="javascript:void(0);"><span></span></a></div>
                        <div class="dd"><?php echo $this->_var['lang']['display']; ?>5<?php echo $this->_var['lang']['ge_ad_position']; ?><br>（<?php echo $this->_var['lang']['recommend_size']; ?>232*337）</div>
                    </div>
                    <div class="itemsLayout line-item6" data-line="row6">
                    	<div class="itemsLayoutShot <?php if ($this->_var['spec_attr']['itemsLayout'] == 'row6' || $this->_var['spec_attr']['itemsLayout'] == ''): ?>dtselected<?php endif; ?>"><a href="javascript:void(0);"><span></span></a></div>
                        <div class="dd"><?php echo $this->_var['lang']['display']; ?>6<?php echo $this->_var['lang']['ge_ad_position']; ?><br>（<?php echo $this->_var['lang']['recommend_size']; ?>190*250）</div>
                    </div>
                </div>
            </div>
            <input name="itemsLayout" type="hidden" value="<?php if ($this->_var['spec_attr']['itemsLayout']): ?><?php echo $this->_var['spec_attr']['itemsLayout']; ?><?php else: ?>row6<?php endif; ?>"/>
            <?php endif; ?>
            <?php if ($this->_var['mode'] == 'advImg3'): ?>
            <div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_display_mode']; ?></div>
                <div class="control_value">
                	<div class="itemsLayout line-item-left-right" data-line="left-right">
                    	<div class="itemsLayoutShot <?php if ($this->_var['spec_attr']['itemsLayout'] == 'left-right' || $this->_var['spec_attr']['itemsLayout'] == ''): ?>dtselected<?php endif; ?>"><a href="javascript:void(0);"><span></span></a></div>
                        <div class="dd"><?php echo $this->_var['lang']['ad_mode']; ?> 1</div>
                    </div>
                    <div class="itemsLayout line-item-right-left" data-line="right-left">
                    	<div class="itemsLayoutShot <?php if ($this->_var['spec_attr']['itemsLayout'] == 'right-left'): ?>dtselected<?php endif; ?>"><a href="javascript:void(0);"><span></span></a></div>
                        <div class="dd"><?php echo $this->_var['lang']['ad_mode']; ?> 2</div>
                    </div>
                </div>
            </div>
            <input name="itemsLayout" type="hidden" value="<?php if ($this->_var['spec_attr']['itemsLayout']): ?><?php echo $this->_var['spec_attr']['itemsLayout']; ?><?php else: ?>left-right<?php endif; ?>"/>
            <?php endif; ?>
            <?php if ($this->_var['mode'] == 'fh-hot'): ?>
            <div class="control_item">
                <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_module_name']; ?></div>
                <div class="control_value"><input type="text" value="<?php echo $this->_var['spec_attr']['lift']; ?>" class="text" name="lift" autocomplete="off" placeholder="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['pleas_input_lift_title_in_set']; ?>" /><div class="notic"><?php echo $this->_var['lang']['module_name_limit_2_4']; ?></div></div>
            </div>
           	<div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_display_mode']; ?></div>
                <div class="control_value">
                	<div class="itemsLayout mb0">
                    	<div class="itemsLayoutShot itemsLayoutShotHot dtselected"><a href="javascript:void(0);"><span></span></a></div>
                    </div>
                </div>
            </div>    
            <?php endif; ?>
            <?php if ($this->_var['mode'] == 'fh-discount'): ?>
            <div class="control_item">
                <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_module_name']; ?></div>
                <div class="control_value"><input type="text" value="<?php echo $this->_var['spec_attr']['lift']; ?>" class="text" name="lift" autocomplete="off" placeholder="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['pleas_input_lift_title_in_set']; ?>" /><div class="notic"><?php echo $this->_var['lang']['module_name_limit_2_4']; ?></div></div>
            </div>
           	<div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_set_background']; ?></div>
                <div class="control_value">
                	<div class="imgup_div" ectype="imgControl">
                        <a href="javascript:void(0);" class="upload_image upload_image_min" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['ad_background_image']; ?>" data-number="1"><?php echo $this->_var['lang']['select_upload_background_image']; ?></a>
                        <div class="imgup_icon" ectype="imgValue" data-name="homeAdvBg">
                            <?php if ($this->_var['spec_attr']['homeAdvBg']): ?>
                            <a href="<?php echo $this->_var['spec_attr']['homeAdvBg']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['spec_attr']['homeAdvBg']; ?>>')" onmouseout="toolTip()"></i></a>
                            <?php endif; ?>
                            <input type="hidden" value="<?php echo $this->_var['spec_attr']['homeAdvBg']; ?>" class="text" name="homeAdvBg[]" autocomplete="off" >
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($this->_var['mode'] == 'fh-haohuo' || $this->_var['mode'] == 'h-phb'): ?>
            <?php if ($this->_var['hierarchy'] == 1): ?>
            <div class="control_item">
                <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_module_name']; ?></div>
                <div class="control_value"><input type="text" value="<?php echo $this->_var['lift']; ?>" class="text" name="lift" autocomplete="off" placeholder="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['pleas_input_lift_title_in_set']; ?>" /><div class="notic"><?php echo $this->_var['lang']['module_name_limit_2_4']; ?></div></div>
            </div>
            <?php endif; ?>
            <input type="hidden" name="hierarchy" value="<?php echo $this->_var['hierarchy']; ?>">
            <div class="control_item">
                <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_module_title']; ?></div>
                <div class="control_value">
                	<div class="fl mr10"><input type="text" name="toptitle" value="<?php if ($this->_var['spec_attr']['toptitle']): ?><?php echo $this->_var['spec_attr']['toptitle']; ?><?php else: ?><?php endif; ?>" class="floor_title" ectype="required" data-msg="<?php echo $this->_var['lang']['select_input_module_title']; ?>" autocomplete="off" /></div>
                </div>
            </div>
            <div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_module_link']; ?></div>
                <div class="control_value">
                	<div class="fl mr10"><input type="text" name="toptitle_url" value="<?php if ($this->_var['spec_attr']['toptitle_url']): ?><?php echo $this->_var['spec_attr']['toptitle_url']; ?><?php else: ?>http://<?php endif; ?>" class="floor_title" ectype="required" data-msg="<?php echo $this->_var['lang']['select_input_module_title']; ?>" autocomplete="off" /></div>
                </div>
            </div>
            <?php if ($this->_var['hierarchy'] == 3): ?>
            <div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_set_goods']; ?></div>
                <div class="control_value">
                        <a href="javascript:void(0);" class="hdle" ectype="setup_Activity_goods">
                            <?php echo $this->_var['lang']['set_goods']; ?>
                            <input type="hidden" name="activity_goods" value="<?php echo $this->_var['spec_attr']['activity_goods']; ?>">
                            <input type="hidden" name="activity_type" value="<?php echo $this->_var['spec_attr']['activity_type']; ?>">
                        </a>
                </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <?php if ($this->_var['mode'] == 'fh-pindao'): ?>
            <div class="control_item">
                <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_module_name']; ?></div>
                <div class="control_value"><input type="text" value="<?php echo $this->_var['spec_attr']['lift']; ?>" class="text" name="lift" autocomplete="off" placeholder="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['pleas_input_lift_title_in_set']; ?>" /><div class="notic"><?php echo $this->_var['lang']['module_name_limit_2_4']; ?></div></div>
            </div>
            <?php endif; ?>
            <div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_whether_new_window']; ?></div>
                <div class="control_value">
                	<div class="checkbox_items">
                        <div class="checkbox_item">
                            <input type="radio" name="target" value="_blank" class="ui-radio" id="blank" <?php if ($this->_var['spec_attr']['target'] != '_self'): ?>checked<?php endif; ?> >
                            <label class="ui-radio-label" for="blank"><?php echo $this->_var['lang']['yes']; ?></label>
                        </div>
                        <div class="checkbox_item">
                            <input type="radio" name="target" value="_self" class="ui-radio" id="self" <?php if ($this->_var['spec_attr']['target'] == '_self'): ?>checked<?php endif; ?>>
                            <label class="ui-radio-label" for="self"><?php echo $this->_var['lang']['no']; ?></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="control_list<?php if ($this->_var['mode'] != 'topBanner'): ?> hide<?php endif; ?>">
            <div class='control_item'>
                <div class="tit_head mb10">
                    <div class="control_item">
                        <div class="control_text"><?php echo $this->_var['lang']['label_background_color']; ?></div>
                        <div class="control_value">
                            <input type="text" name="navColor" class="navColor" value="<?php if ($this->_var['spec_attr']['navColor']): ?><?php echo $this->_var['spec_attr']['navColor']; ?><?php else: ?>#dbe0e4<?php endif; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      
<script type="text/javascript">
    $.divselect("#album_id","#album_id_val",function(obj){
        var val = obj.attr("data-value");
        changedpic(val,obj,0);
    });
	
    $.divselect("#sort_name","#sort_name_val",function(obj){
		 var sort = obj.attr("data-value");
        changedpic(0,obj,0,sort);
    });
    
	$("input[name='file']").change(function(){
		var album_id = $("input[name='album_id']").val();
		if(album_id > 0){
			var actionUrl = "gallery_album.php?act=upload_pic";
			$(this).parents("#gallery_pic").ajaxSubmit({
				type: "POST",
				dataType: "json",
				url: actionUrl,
				data: {"action": "TemporaryImage"},
				success: function (data) {
					if (data.error == "1") {
						alert(data.massege);
					}else{
						changedpic(0);
					}
				},
				async: true
			});
		}else{
			alert(jl_please_select_album);
		}
	});
	
	function addpic(src,obj){
		var i = 0;
		var mode = "<?php echo $this->_var['mode']; ?>";
		var length = "<?php echo $this->_var['pic_number']; ?>";
		var uploadImage = "<?php echo $this->_var['uploadImage']; ?>";
		var titleup = "<?php echo $this->_var['titleup']; ?>";
		var id = $(obj).parents(".pb").attr("id");
		var table = $("#"+id).find(".table");
		
		table.find('tr').each(function(){
			i++
		});
		
		if(table.find('tr.notic').length>0){
			i-=1;
		}
		
		if(length< i  && length != 0){
			alert(jl_module_max_add+length+jl_ge_image);
		}else{
			if(mode != "lunbo"){
				if(uploadImage == 1){
					var html = '<tr><td><div class="img"><span><img src="'+src+'"></span><input type="hidden" name="pic_src[]" value="'+src+'"/></div></td><td class="center"><a href="javascript:;" class="pic_del del">'+jl_delete+'</a></td></tr>';
				}else{
					var title = '';
					if(titleup == 1 || mode == 'fh-pindao'){
						title = '<td class="center"><input type="text" value="" name="title[]" class="form-control small"></td><td class="center"> <input type="text" value="" name="subtitle[]" class="form-control small"></td>';
					}else if(titleup == 2){
						title = '<td class="center"><input type="text" value="" name="title[]" class="form-control small"></td>';
					}
					var html = '<tr><td><div class="img"><span><img src="'+src+'"></span><input type="hidden" name="pic_src[]" value="'+src+'"/></div></td><td><input type="text" name="link[]" class="form-control"></td><td class="center"><input type="text" value="1" name="sort[]" class="form-control small"></td>' + title + '<td class="center"><a href="javascript:;" class="pic_del del">'+jl_delete+'</a></td></tr>';
				}
			}else{
				var html = '<tr><td><div class="img"><span><img src="'+src+'"></span><input type="hidden" name="pic_src[]" value="'+src+'"/></div></td><td><input type="text" name="link[]" class="form-control"></td><td class="center"><input type="text" value="1" name="sort[]" class="form-control small"></td><td class="center"><input type="text" value="" name="bg_color[]" class="form-control small"></td><td class="center"><a href="javascript:;" class="pic_del del">'+jl_delete+'</a></td></tr>';
			}
			
			if(table.find(".notic").length>0){
				table.find(".notic").remove();
			}
			table.find("tbody").prepend(html);
		}
		pbct("#"+id);
	}
	
    <?php if ($this->_var['mode'] == 'topBanner'): ?>
    var navColor = $(".navColor").val();
	$(".navColor").spectrum({
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		showInput: true,
		color: navColor,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		palette: [
			["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
			"rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
			["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
			"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
			["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
			"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
			"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
			"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
			"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
			"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
			"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
			"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
			"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
			"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
		]
	});
	$(".sp-choose").click(function(){
		var val = $(this).parents(".sp-picker-container").find(".sp-input").val();
		$(".navColor").val(val);
	});
    <?php endif; ?>
	
	$("input[name='is_title']").on("click",function(){
		var val = $(this).val();
		if(val == 1){
			$(this).parents(".control_list").find(".tit_head").show();
		}else{
			$(this).parents(".control_list").find(".tit_head").hide();
		}
	});
</script>
<?php endif; ?>

<?php if ($this->_var['temp'] == 'goods_info'): ?>
<div class="tishi">
	<div class="tishi_info">
        <p class="first"><?php echo $this->_var['lang']['pagetip_shop_banner_goods_info']; ?></p>
    </div>
</div>

<?php if ($this->_var['goods_type'] != 1): ?>
<div class="tab">
	<ul class="clearfix">
    	<li class="current"><?php echo $this->_var['lang']['setup_content']; ?></li>
        <li><?php echo $this->_var['lang']['setup_display']; ?></li>
    </ul>
</div>
<?php endif; ?>

<div class="modal-body">
	<div class="body_info floor_info">
        <div class="search">
            <div class="select_box mr10">
                <div class="categorySelect fl">
                    <div class="selection">
                        <input type="text" name="category_name" id="category_name" class="text w250 mr0 valid" value="<?php if ($this->_var['parent_category']): ?><?php echo $this->_var['parent_category']; ?><?php else: ?><?php echo $this->_var['lang']['category_top']; ?><?php endif; ?>" autocomplete="off" readonly data-filter="cat_name" />
                        <input type="hidden" name="cat_id" ectype="goods_cat_dialog" id="category_id" value="<?php echo empty($this->_var['cat_id']) ? '0' : $this->_var['cat_id']; ?>" data-filter="cat_id" />
                    </div>
                    <div class="select-container" style="display:none;">
                        <?php echo $this->fetch('library/filter_category.lbi'); ?>
                    </div>
                </div>
            </div>
            <div class="select_box mr10">
                <div class="categorySelect fl">
                    <div class="selection">
                        <input type="text" name="brand_name" id="brand_name" class="text w120 mr0 valid" value="<?php echo $this->_var['lang']['select_barnd']; ?>" autocomplete="off" readonly data-filter="brand_name" />
                        <input type="hidden" name="brand_id" id="brand_id" value="<?php echo empty($this->_var['brand_id']) ? '0' : $this->_var['brand_id']; ?>" data-filter="brand_id" />
                    </div>
                    <div class="brand-select-container" style="display:none;">
                        <?php echo $this->fetch('library/filter_brand.lbi'); ?>
                    </div>
                </div>  
            </div>
            <div class="search_con mr10"><input width="20" name="keyword_brand" type="text" id="keyword_brand" class="text text_6 mr0"></div>
            <a href="javascript:void(0);" class="sc-btn fl" ectype="changedgoods"><?php echo $this->_var['lang']['button_submit_alt']; ?></a>
            <div class="checkobx-item">
                <input type="checkbox" name="is_selected" id="is_selected" class="ui-checkbox" onclick="checkd_selected(this)"/>
                <label class="ui-label" for="is_selected"><?php echo $this->_var['lang']['selected_goods']; ?></label>
            </div>
        </div>
        <div class="table_list" ectype='goods_list'>
            <div class="gallery_album" data-act="changedgoods" data-goods='1' data-inid="goods_list" data-url='get_ajax_content.php' data-where="cat_id=<?php echo $this->_var['filter']['cat_id']; ?>&sort_order=<?php echo $this->_var['filter']['sort_order']; ?>&keyword=<?php echo $this->_var['filter']['keyword']; ?>&search_type=<?php echo $this->_var['filter']['search_type']; ?>&goods_id=<?php echo $this->_var['filter']['goods_id']; ?>&type=1">
                <ul class="ga-goods-ul" id="goods_list">
                    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['gl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gl']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['gl']['iteration']++;
?>
                    <li class="on">
                        <div class="img"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></div>
                        <div class="name"><?php echo $this->_var['goods']['goods_name']; ?></div>
                        <div class="price"><?php echo $this->_var['goods']['shop_price']; ?></div>
                        <div class="choose"><a href="javascript:void(0);" class="on" onclick="selected_goods(this,'<?php echo $this->_var['goods']['goods_id']; ?>')"><i class="iconfont icon-gou"></i><?php echo $this->_var['lang']['selected']; ?></a></div>
                    </li>
                    <?php endforeach; else: ?>
                    <li class="notic"><?php echo $this->_var['lang']['please_search_goods']; ?></li>
                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="body_info floor_info" style="display:none;">
        <div class="control_list">
        	<div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_whether_show_title']; ?></div>
                <div class="control_value">
                	<div class="checkbox_items">
                        <div class="checkbox_item">
                        	<input type="radio" name="is_title" value="1" class="ui-radio" id="is_title_1" <?php if ($this->_var['arr']['is_title'] != 0): ?> checked <?php endif; ?>>
                        	<label class="ui-radio-label" for="is_title_1"><?php echo $this->_var['lang']['yes']; ?></label>
                        </div>
                        <div class="checkbox_item">
                        	<input type="radio" name="is_title" value="0" class="ui-radio" id="is_title_0" <?php if ($this->_var['arr']['is_title'] == 0): ?> checked <?php endif; ?>>
                            <label class="ui-radio-label" for="is_title_0"><?php echo $this->_var['lang']['no']; ?></label>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="tit_head mb10"<?php if ($this->_var['arr']['is_title'] == 0): ?> style="display:none;"<?php endif; ?>>
                <div class="control_item">
                    <div class="control_text"><?php echo $this->_var['lang']['label_title_name']; ?></div>
                    <div class="control_value"><input name="cat_name" type="text" class="text text2" size="25" value="<?php echo $this->_var['arr']['cat_name']; ?>"></div>
                </div>
                <?php if ($this->_var['mode'] != "guessYouLike"): ?>
                <div class="control_item">
                    <div class="control_text"><?php echo $this->_var['lang']['label_floor_desc']; ?></div>
                    <div class="control_value"><input name="cat_desc" type="text" class="text" size="25" value="<?php echo $this->_var['arr']['cat_desc']; ?>"></div>
                </div>
                <div class="control_item">
                    <div class="control_text"><?php echo $this->_var['lang']['label_text_display']; ?></div>
                    <div class="control_value">
                        <select class="select" name="align">
                            <option value="left" <?php if ($this->_var['arr']['align'] == 'left'): ?>checked <?php endif; ?>><?php echo $this->_var['lang']['align_left']; ?></option>
                            <option value="center" <?php if ($this->_var['arr']['align'] == 'center'): ?>checked <?php endif; ?>><?php echo $this->_var['lang']['align_center']; ?></option>
                            <option value="regiht" <?php if ($this->_var['arr']['align'] == 'regiht'): ?>checked <?php endif; ?>><?php echo $this->_var['lang']['align_right']; ?></option>
                        </select>
                    </div>
                </div>              
                 <?php endif; ?>
            </div>
            <?php if ($this->_var['mode'] != "guessYouLike"): ?>
            <div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_display_mode']; ?></div>
                <div class="control_value">
                	<div class="itemsLayout line-item3" data-line="row3">
                    	<div class="itemsLayoutShot <?php if ($this->_var['arr']['itemsLayout'] == 'row3'): ?>dtselected<?php endif; ?>"><a href="javascript:void(0);"><span></span></a></div>
                        <div class="dd"><?php echo $this->_var['lang']['one_row_display']; ?>3<?php echo $this->_var['lang']['ge']; ?><?php echo $this->_var['lang']['goods_alt']; ?></div>
                    </div>
                    <div class="itemsLayout line-item4" data-line="row4">
                    	<div class="itemsLayoutShot <?php if ($this->_var['arr']['itemsLayout'] == 'row4'): ?>dtselected<?php endif; ?>"><a href="javascript:void(0);"><span></span></a></div>
                        <div class="dd"><?php echo $this->_var['lang']['one_row_display']; ?>4<?php echo $this->_var['lang']['ge']; ?><?php echo $this->_var['lang']['goods_alt']; ?></div>
                    </div>
                    <div class="itemsLayout line-item5" data-line="row5">
                    	<div class="itemsLayoutShot <?php if ($this->_var['arr']['itemsLayout'] == 'row5'): ?>dtselected<?php endif; ?>"><a href="javascript:void(0);"><span></span></a></div>
                        <div class="dd"><?php echo $this->_var['lang']['one_row_display']; ?>5<?php echo $this->_var['lang']['ge']; ?><?php echo $this->_var['lang']['goods_alt']; ?></div>
                    </div>
                </div>
            </div>
            <input name="itemsLayout" type="hidden" value="<?php echo $this->_var['arr']['itemsLayout']; ?>"/>
            <?php else: ?>
            <div class="control_item">
                <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_module_name']; ?></div>
                <div class="control_value"><input type="text" value="<?php echo $this->_var['lift']; ?>" class="text" name="lift" autocomplete="off" placeholder="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['pleas_input_lift_title_in_set']; ?>" /><div class="notic"><?php echo $this->_var['lang']['module_name_limit_2_4']; ?></div></div>
            </div>
            <?php endif; ?>
        </div>    
    </div>
	<input type="hidden" name="search_type" value="<?php echo $this->_var['search_type']; ?>"/>
	<input type="hidden" name="goods_id" value="<?php echo $this->_var['goods_id']; ?>"/>
    <input type="hidden" name="goods_ids" value="<?php echo $this->_var['arr']['goods_ids']; ?>"/>
    <input type="hidden" value="<?php echo $this->_var['arr']['ru_id']; ?>" ectype="dialogRuId"/>
</div>
<script type="text/javascript" src="js/dsc_admin2.0.js"></script>
<script type="text/javascript">
    ajaxchangedgoods(1);
    function checkd_selected(obj){
		var obj = $(obj);
		var is_selected =$("input[name='is_selected']").is(':checked');
		var length = obj.parents(".floor_info").find(".table_list li.on").length;
		var type = 1;
        if(is_selected == true){
            $(".icon-gou").parents('li').show();
			$(".icon-dsc-plus").parents('li').hide();
			
			if(length < 6){
				$("*[ectype='goods_list']").perfectScrollbar("destroy");
			}
            type = 0;
        }else{
            $(".icon-gou,.icon-dsc-plus").parents('li').show();
			$("*[ectype='goods_list']").perfectScrollbar();
        }
        ajaxchangedgoods(type);
    }
    
    function ajaxchangedgoods(type){
        var cat_id = $(".pb [ectype='goods_cat_dialog']").val();
		var brand_id = $(".pb input[name='brand_id']").val();
        var keyword = $(".pb input[name='keyword_brand']").val();
        var goods_ids = $(".pb input[name='goods_ids']").val();
        var ru_id  = $(".pb *[ectype='dialogRuId']").val();
		var search_type = $(".pb input[name='search_type']").val();
		var goods_id = $(".pb input[name='goods_id']").val();
		$("[ectype='goods_list']").html("<i class='icon-spin'><img src='images/visual/load.gif' width='30' height='30'></i>");
		
		function ajax(){
			Ajax.call('get_ajax_content.php?is_ajax=1&act=changedgoods', "cat_id="+cat_id+"&keyword="+keyword+"&goods_ids="+goods_ids+"&type="+type + "&resetRrl=1&search_type=" + search_type + "&goods_id=" + goods_id + "&ru_id="+ru_id + "&brand_id="+brand_id, function(data){
				$("[ectype='goods_list']").html(data.content);
				
				$("*[ectype='goods_list']").perfectScrollbar("destroy");
				$("*[ectype='goods_list']").perfectScrollbar();
			} , 'POST', 'JSON');
		}
		
		setTimeout(function(){ajax()},300);
    }

	//选中商品
	function selected_goods(obj,goods_id){
		var obj = $(obj);
		var arr = '';
		var goods_ids = $("input[name='goods_ids']").val();
		var good_number = "<?php echo $this->_var['good_number']; ?>";
		var verinumber = true;
		
		if(obj.hasClass("on")){
			obj.removeClass("on");
			obj.html('<i class="iconfont icon-dsc-plus"></i>'+js_select);
			arr = goods_ids.split(',');
			for(var i =0;i<arr.length;i++){
				if(arr[i] == goods_id){
					 arr.splice(i,1);
				}
			}
		}else{
			if(good_number > 0){
				arr = goods_ids.split(',');
				if(arr.length >= good_number){
					alert(jl_module_max_add + good_number + jl_ge_goods);
					verinumber = false;
				}
			}
			if(verinumber){
				$(obj).addClass('on');
				$(obj).html('<i class="iconfont icon-gou"></i>'+js_selected);
				if(goods_ids){
					arr = goods_ids + ','+goods_id;
				}else{
					arr = goods_id;
				}
			}
		}
		if(verinumber){
			$("input[name='goods_ids']").val(arr);
		}
	}
	
	$("input[name='is_title']").on("click",function(){
		var val = $(this).val();
		if(val == 1){
			$(this).parents(".control_list").find(".tit_head").show();
		}else{
			$(this).parents(".control_list").find(".tit_head").hide();
		}
	});
</script>
<?php endif; ?>

<?php if ($this->_var['temp'] == 'header'): ?>
<div class="tishi">
	<div class="tishi_info">
	<p class="first"><?php echo $this->_var['lang']['pagetip_shop_banner_1']; ?></p>
    <p><?php echo $this->_var['lang']['pagetip_shop_banner_header_2']; ?></p>
    </div>
</div>
<div class="tab">
	<ul class="clearfix">
    	<li class="current"><?php echo $this->_var['lang']['setup_content']; ?></li>
    </ul>
</div>
<div class="modal-body">
	<div class="control_list">
        <div class="control_item">
            <div class="control_text"><?php echo $this->_var['lang']['label_set_type']; ?></div>
            <div class="control_value">
            	<label><input type="radio" name="header_type" value="defalt_type" class="checkbox" <?php if ($this->_var['content']['header_type'] != 'custom_type'): ?>checked<?php endif; ?>><span><?php echo $this->_var['lang']['default_type']; ?></span></label>
                <label><input type="radio" name="header_type" value="custom_type" class="checkbox" <?php if ($this->_var['content']['header_type'] == 'custom_type'): ?>checked<?php endif; ?>><span><?php echo $this->_var['lang']['custom_type']; ?></span></label>
            </div>
        </div>
        <div class="defalt_type" <?php if ($this->_var['content']['header_type'] != 'defalt_type'): ?>style="display:none;"<?php endif; ?>>
            <div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_head_image']; ?></div>
                <form  action="" id="fileForm" method="post"  enctype="multipart/form-data"  runat="server" >
                    <div class="control_value relative">
                        <a href="javascript:void(0);" class="uploader-button">
                        	<span class="btn-text"><?php echo $this->_var['lang']['select_file']; ?></span>
                        	<div class="file-input-wrapper"><input type="file" name="headerFile" value="<?php echo $this->_var['lang']['upload_image']; ?>" id="headerFile"  class="file-header-img"></div>
                        </a>
                        <div class="preview-box"><input name="fileimg" type="hidden" value="<?php if ($this->_var['content']['headerbg_img']): ?><?php echo $this->_var['content']['headerbg_img']; ?><?php else: ?>../data/gallery_album/ksh_bg.jpg<?php endif; ?>"/><img id="headerbg_img" src="<?php if ($this->_var['content']['headerbg_img']): ?><?php echo $this->_var['content']['headerbg_img']; ?><?php else: ?>../data/gallery_album/ksh_bg.jpg<?php endif; ?>" height="86"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="custom_type" <?php if ($this->_var['content']['header_type'] == 'defalt_type'): ?>style="display:none;"<?php endif; ?>>
        	<div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_custom_content']; ?></div>
                <div class="control_value over">
                    <?php echo $this->_var['FCKeditor']; ?>
                </div>
            </div>
        </div>
        <div class="control_item">
            <div class="control_text"><?php echo $this->_var['lang']['label_height']; ?></div>
            <div class="control_value"><input type="text" name="picHeight" value="<?php if ($this->_var['content']['picHeight']): ?><?php echo $this->_var['content']['picHeight']; ?><?php else: ?>128<?php endif; ?>" class="shop_text" autocomplete="off" /><span>px</span><span><?php echo $this->_var['lang']['please_set_120_150']; ?></span></div>
        </div>
	</div>        
</div>
<script type="text/javascript">
    var suffix = "<?php echo $this->_var['content']['suffix']; ?>";
	$.upload_file("input[name='headerFile']","topic.php?act=header_bg&name=headerFile&suffix="+suffix,"#headerbg_img");
	
	$(document).on("click","input[name='header_type']",function(){
		if($(this).val() == "defalt_type"){
			$(".defalt_type").show().siblings(".custom_type").hide();
			pbct();
		}else{
			$(".custom_type").show().siblings(".defalt_type").hide();
			pbct();
		}
	});
</script>
<?php endif; ?>

<?php if ($this->_var['temp'] == 'custom'): ?>
<div class="tishi">
	<div class="tishi_info">
        <p class="first"><?php echo $this->_var['lang']['note_getcat_atr_1']; ?></p>
    </div>
</div>

<div class="modal-body">
	<div class="control_list">
    	<div class="control_item">
            <div class="control_text auto"><em class="red">*</em><?php echo $this->_var['lang']['label_module_name']; ?></div>
            <div class="control_value"><input type="text" value="<?php echo $this->_var['lift']; ?>" class="text" name="lift" autocomplete="off" placeholder="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['pleas_input_lift_title_in_set']; ?>" /><div class="notic"><?php echo $this->_var['lang']['module_name_limit_2_4']; ?></div></div>
        </div>
        <div class="control_item control_item_quan">
            <div class="control_value"><?php echo $this->_var['FCKeditor']; ?></div>
        </div>
	</div>
</div>
<?php endif; ?>

<?php if ($this->_var['temp'] == 'h-need' || $this->_var['temp'] == 'h-master' || $this->_var['temp'] == 'h-storeRec'): ?>
<!--首页广告一-->
<div class="tishi">
	<div class="tishi_info">
    	<?php if ($this->_var['temp'] == 'h-need'): ?>
        <p class="first"><?php echo $this->_var['lang']['pagetip_shop_banner_h_need']; ?></p>
    	<?php elseif ($this->_var['temp'] == 'h-master'): ?>
        <p class="first"><?php echo $this->_var['lang']['pagetip_shop_banner_h_master']; ?></p>
        <?php elseif ($this->_var['temp'] == 'h-storeRec'): ?>
        <p class="first"><?php echo $this->_var['lang']['pagetip_shop_banner_h_storeRec']; ?></p>
        <?php endif; ?>
    </div>
</div>
<form action="" id="<?php echo $this->_var['temp']; ?>Insert" method="post"  enctype="multipart/form-data"  runat="server" >
<div class="control_list">
	<div class="control_item">
        <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_module_name']; ?></div>
        <div class="control_value"><input type="text" value="<?php echo $this->_var['lift']; ?>" class="text" name="lift" autocomplete="off" placeholder="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" /><div class="notic"><?php echo $this->_var['lang']['module_name_limit_2_4']; ?></div></div>
    </div> 
    <?php if ($this->_var['temp'] == 'h-master' || $this->_var['temp'] == 'h-storeRec'): ?>
    <div class="control_item">
        <div class="control_text"><?php echo $this->_var['lang']['label_ad_title']; ?></div>
        <div class="control_value"><input type="text" value="<?php echo $this->_var['masterTitle']; ?>" class="text" name="masterTitle" placeholder="<?php echo $this->_var['lang']['ad_title']; ?>" autocomplete="off"/></div>
    </div>   
    <?php endif; ?>
    <?php if ($this->_var['temp'] == 'h-need'): ?>
    <div class="control_item">
        <div class="control_text"><?php echo $this->_var['lang']['label_title_color']; ?></div>
        <div class="control_value"><input type="text" name="needColor" class="navColor" value="<?php if ($this->_var['needColor']): ?><?php echo $this->_var['needColor']; ?><?php else: ?>#fff<?php endif; ?>"></div>
    </div> 
    <?php endif; ?>
	<div class="control_item">
        <div class="control_text"><?php echo $this->_var['lang']['label_ad_content']; ?></div>
        <div class="control_value">
            <div class="quick_items">
                <?php if ($this->_var['spec_attr']): ?>
                <?php $_from = $this->_var['spec_attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'arr');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['arr']):
?>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['ad']; ?><?php if ($this->_var['key'] == 0): ?><?php echo $this->_var['lang']['num_1']; ?><?php elseif ($this->_var['key'] == 1): ?><?php echo $this->_var['lang']['num_2']; ?><?php elseif ($this->_var['key'] == 2): ?><?php echo $this->_var['lang']['num_3']; ?><?php elseif ($this->_var['key'] == 3): ?><?php echo $this->_var['lang']['num_4']; ?><?php elseif ($this->_var['key'] == 4): ?><?php echo $this->_var['lang']['num_5']; ?><?php endif; ?></div>
                    <div class="content">
                        <div class="adv_item"><em class="red">&nbsp;</em><input type="text" value="<?php echo $this->_var['arr']['title']; ?>" class="text" name="title[]" placeholder="<?php echo $this->_var['lang']['title']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><em class="red">&nbsp;</em><input type="text" value="<?php echo $this->_var['arr']['subtitle']; ?>" class="text" name="subtitle[]" placeholder="<?php echo $this->_var['lang']['sub_title']; ?>" autocomplete="off" ></div>
                        <div class="adv_item">
                            <em class="red">*</em>
                            <div class="imgup_div" ectype="imgControl">
                                <a href="javascript:void(0);" class="upload_image upload_image_min" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['ad_background_image']; ?>" data-number="1"><?php if ($this->_var['temp'] == 'h-storeRec'): ?><?php echo $this->_var['lang']['select_shop_logo']; ?><?php else: ?><?php echo $this->_var['lang']['select_upload_background_image']; ?><?php endif; ?></a>
                                <div class="imgup_icon" ectype="imgValue" data-name="homeAdvBg">
                                    <?php if ($this->_var['arr']['homeAdvBg']): ?>
                                    <a href="<?php echo $this->_var['arr']['homeAdvBg']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['arr']['homeAdvBg']; ?>>')" onmouseout="toolTip()"></i></a>
                                    <?php endif; ?>
                                    <input type="hidden" value="<?php echo $this->_var['arr']['homeAdvBg']; ?>" class="text" name="homeAdvBg[]" autocomplete="off" >
                                </div>
                            </div>
                        </div>
                        <div class="adv_item">
                        	<em class="red">*</em>
                            <div class="imgup_div" ectype="imgControl">
                                <a href="javascript:void(0);" class="upload_image upload_image_max" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['adv_image']; ?>" data-number="1"><?php if ($this->_var['temp'] == 'h-storeRec'): ?><?php echo $this->_var['lang']['select_shop_main_img']; ?><?php else: ?><?php echo $this->_var['lang']['select_upload_ad_img']; ?><?php endif; ?></a>
                                <div class="imgup_icon" ectype="imgValue" data-name="original_img">
                                    <?php if ($this->_var['arr']['original_img']): ?>
                                    <a href="<?php echo $this->_var['arr']['original_img']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['arr']['original_img']; ?>>')" onmouseout="toolTip()"></i></a>
                                    <?php endif; ?>
                                    <input type="hidden" value="<?php echo $this->_var['arr']['original_img']; ?>" class="text" name="original_img[]" autocomplete="off" >
                                </div>
                            </div>
                        </div>
                        <div class="adv_item"><em class="red">&nbsp;</em><input type="text" value="<?php echo $this->_var['arr']['url']; ?>" class="text" name="url[]" placeholder="<?php echo $this->_var['lang']['link_address']; ?>" autocomplete="off" ></div>
                    </div>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php else: ?>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['ad']; ?><?php echo $this->_var['lang']['num_1']; ?></div>
                    <div class="content">
                        <div class="adv_item"><em class="red">&nbsp;</em><input type="text" value="" class="text" name="title[]" placeholder="<?php echo $this->_var['lang']['title']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><em class="red">&nbsp;</em><input type="text" value="" class="text" name="subtitle[]" placeholder="<?php echo $this->_var['lang']['sub_title']; ?>" autocomplete="off" ></div>
						<div class="adv_item">
                        	<em class="red">*</em>
                            <div class="imgup_div" ectype="imgControl">
                                <a href="javascript:void(0);" class="upload_image upload_image_min" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['ad_background_image']; ?>" data-number = '1'><?php if ($this->_var['temp'] == 'h-storeRec'): ?><?php echo $this->_var['lang']['select_shop_logo']; ?><?php else: ?><?php echo $this->_var['lang']['select_upload_background_image']; ?><?php endif; ?></a>
                                <div class="imgup_icon" ectype="imgValue" data-name="homeAdvBg"><input type="hidden" value="" class="text" name="homeAdvBg[]" autocomplete="off" ></div>
                            </div>
                        </div>
                        <div class="adv_item">
                        	<em class="red">*</em>
                            <div class="imgup_div" ectype="imgControl">
                                <a href="javascript:void(0);" class="upload_image upload_image_max" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['adv_image']; ?>" data-number = '1'><?php if ($this->_var['temp'] == 'h-storeRec'): ?><?php echo $this->_var['lang']['select_shop_main_img']; ?><?php else: ?><?php echo $this->_var['lang']['select_upload_ad_img']; ?><?php endif; ?></a>
                                <div class="imgup_icon" ectype="imgValue" data-name="original_img"><input type="hidden" value="" class="text" name="original_img[]" autocomplete="off" ></div>
                            </div>
                        </div>
                        <div class="adv_item"><em class="red">&nbsp;</em><input type="text" value="" class="text" name="url[]" placeholder="<?php echo $this->_var['lang']['link_address']; ?>" autocomplete="off" ></div>
                    </div>
                </div>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['ad']; ?><?php echo $this->_var['lang']['num_2']; ?></div>
                    <div class="content">
                        <div class="adv_item"><input type="text" value="" class="text" name="title[]" placeholder="<?php echo $this->_var['lang']['title']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><input type="text" value="" class="text" name="subtitle[]" placeholder="<?php echo $this->_var['lang']['sub_title']; ?>" autocomplete="off" ></div>
						<div class="adv_item">
                        	<em class="red">*</em>
                            <div class="imgup_div" ectype="imgControl">
                                <a href="javascript:void(0);" class="upload_image upload_image_min" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['ad_background_image']; ?>" data-number = '1'><?php if ($this->_var['temp'] == 'h-storeRec'): ?><?php echo $this->_var['lang']['select_shop_logo']; ?><?php else: ?><?php echo $this->_var['lang']['select_upload_background_image']; ?><?php endif; ?></a>
                                <div class="imgup_icon" ectype="imgValue" data-name="homeAdvBg"><input type="hidden" value="" class="text" name="homeAdvBg[]" autocomplete="off" ></div>
                            </div>
                        </div>
                        <div class="adv_item">
                        	<em class="red">*</em>
                            <div class="imgup_div" ectype="imgControl">
                                <a href="javascript:void(0);" class="upload_image upload_image_max" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['adv_image']; ?>" data-number = '1'><?php if ($this->_var['temp'] == 'h-storeRec'): ?><?php echo $this->_var['lang']['select_shop_main_img']; ?><?php else: ?><?php echo $this->_var['lang']['select_upload_ad_img']; ?><?php endif; ?></a>
                                <div class="imgup_icon" ectype="imgValue" data-name="original_img"><input type="hidden" value="" class="text" name="original_img[]" autocomplete="off" ></div>
                            </div>
                        </div>
                        <div class="adv_item"><em class="red">&nbsp;</em><input type="text" value="" class="text" name="url[]" placeholder="<?php echo $this->_var['lang']['link_address']; ?>" autocomplete="off" ></div>
                    </div>
                </div>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['ad']; ?><?php echo $this->_var['lang']['num_3']; ?></div>
                    <div class="content">
                        <div class="adv_item"><input type="text" value="" class="text" name="title[]" placeholder="<?php echo $this->_var['lang']['title']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><input type="text" value="" class="text" name="subtitle[]" placeholder="<?php echo $this->_var['lang']['sub_title']; ?>" autocomplete="off" ></div>
						<div class="adv_item">
                        	<em class="red">*</em>
                            <div class="imgup_div" ectype="imgControl">
                                <a href="javascript:void(0);" class="upload_image upload_image_min" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['ad_background_image']; ?>" data-number = '1'><?php if ($this->_var['temp'] == 'h-storeRec'): ?><?php echo $this->_var['lang']['select_shop_logo']; ?><?php else: ?><?php echo $this->_var['lang']['select_upload_background_image']; ?><?php endif; ?></a>
                                <div class="imgup_icon" ectype="imgValue" data-name="homeAdvBg"><input type="hidden" value="" class="text" name="homeAdvBg[]" autocomplete="off" ></div>
                            </div>
                        </div>
                        <div class="adv_item">
                        	<em class="red">*</em>
                            <div class="imgup_div" ectype="imgControl">
                                <a href="javascript:void(0);" class="upload_image upload_image_max" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['adv_image']; ?>" data-number = '1'><?php if ($this->_var['temp'] == 'h-storeRec'): ?><?php echo $this->_var['lang']['select_shop_main_img']; ?><?php else: ?><?php echo $this->_var['lang']['select_upload_ad_img']; ?><?php endif; ?></a>
                                <div class="imgup_icon" ectype="imgValue" data-name="original_img"><input type="hidden" value="" class="text" name="original_img[]" autocomplete="off" ></div>
                            </div>
                        </div>
                        <div class="adv_item"><em class="red">&nbsp;</em><input type="text" value="" class="text" name="url[]" placeholder="<?php echo $this->_var['lang']['link_address']; ?>" autocomplete="off" ></div>
                    </div>
                </div>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['ad']; ?><?php echo $this->_var['lang']['num_4']; ?></div>
                    <div class="content">
                        <div class="adv_item"><input type="text" value="" class="text" name="title[]" placeholder="<?php echo $this->_var['lang']['title']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><input type="text" value="" class="text" name="subtitle[]" placeholder="<?php echo $this->_var['lang']['sub_title']; ?>" autocomplete="off" ></div>
						<div class="adv_item">
                        	<em class="red">*</em>
                            <div class="imgup_div" ectype="imgControl">
                                <a href="javascript:void(0);" class="upload_image upload_image_min" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['ad_background_image']; ?>" data-number = '1'><?php if ($this->_var['temp'] == 'h-storeRec'): ?><?php echo $this->_var['lang']['select_shop_logo']; ?><?php else: ?><?php echo $this->_var['lang']['select_upload_background_image']; ?><?php endif; ?></a>
                                <div class="imgup_icon" ectype="imgValue" data-name="homeAdvBg"><input type="hidden" value="" class="text" name="homeAdvBg[]" autocomplete="off" ></div>
                            </div>
                        </div>
                        <div class="adv_item">
                        	<em class="red">*</em>
                            <div class="imgup_div" ectype="imgControl">
                                <a href="javascript:void(0);" class="upload_image upload_image_max" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['adv_image']; ?>" data-number = '1'><?php if ($this->_var['temp'] == 'h-storeRec'): ?><?php echo $this->_var['lang']['select_shop_main_img']; ?><?php else: ?><?php echo $this->_var['lang']['select_upload_ad_img']; ?><?php endif; ?></a>
                                <div class="imgup_icon" ectype="imgValue" data-name="original_img"><input type="hidden" value="" class="text" name="original_img[]" autocomplete="off" ></div>
                            </div>
                        </div>
                        <div class="adv_item"><em class="red">&nbsp;</em><input type="text" value="" class="text" name="url[]" placeholder="<?php echo $this->_var['lang']['link_address']; ?>" autocomplete="off" ></div>
                    </div>
                </div>
                <?php if ($this->_var['temp'] != 'h-storeRec'): ?>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['ad']; ?><?php echo $this->_var['lang']['num_5']; ?></div>
                    <div class="content">
                        <div class="adv_item"><input type="text" value="" class="text" name="title[]" placeholder="<?php echo $this->_var['lang']['title']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><input type="text" value="" class="text" name="subtitle[]" placeholder="<?php echo $this->_var['lang']['sub_title']; ?>" autocomplete="off" ></div>
						<div class="adv_item">
                        	<em class="red">*</em>
                            <div class="imgup_div" ectype="imgControl">
                                <a href="javascript:void(0);" class="upload_image upload_image_min" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['ad_background_image']; ?>" data-number = '1'><?php echo $this->_var['lang']['select_upload_background_image']; ?></a>
                                <div class="imgup_icon" ectype="imgValue" data-name="homeAdvBg"><input type="hidden" value="" class="text" name="homeAdvBg[]" autocomplete="off" ></div>
                            </div>
                        </div>
                        <div class="adv_item">
                        	<em class="red">*</em>
                            <div class="imgup_div" ectype="imgControl">
                                <a href="javascript:void(0);" class="upload_image upload_image_max" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['adv_image']; ?>" data-number = '1'><?php echo $this->_var['lang']['select_upload_ad_img']; ?></a>
                                <div class="imgup_icon" ectype="imgValue" data-name="original_img"><input type="hidden" value="" class="text" name="original_img[]" autocomplete="off" ></div>
                            </div>
                        </div>
                        <div class="adv_item"><em class="red">&nbsp;</em><input type="text" value="" class="text" name="url[]" placeholder="<?php echo $this->_var['lang']['link_address']; ?>" autocomplete="off" ></div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="mode" value="<?php echo $this->_var['temp']; ?>">
</form>
<script>
        <?php if ($this->_var['temp'] == 'h-need'): ?>
    var navColor = $(".navColor").val();
	$(".navColor").spectrum({
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		showInput: true,
		color: navColor,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		palette: [
			["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
			"rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
			["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
			"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
			["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
			"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
			"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
			"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
			"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
			"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
			"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
			"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
			"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
			"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
		]
	});
	$(".sp-choose").click(function(){
		var val = $(this).parents(".sp-picker-container").find(".sp-input").val();
		$(".navColor").val(val);
	});
        <?php endif; ?>
</script>
<?php endif; ?>

<?php if ($this->_var['temp'] == 'h-brand'): ?> 
<!--首页品牌-->
<form action="" id="<?php echo $this->_var['temp']; ?>Insert" method="post"  enctype="multipart/form-data"  runat="server" >
<div class="control_list">
	<div class="control_item">
        <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_module_name']; ?></div>
        <div class="control_value"><input type="text" value="<?php echo $this->_var['lift']; ?>" class="text" name="lift" autocomplete="off" placeholder="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" /><div class="notic"><?php echo $this->_var['lang']['module_name_limit_2_4']; ?></div></div>
    </div> 
	<div class="control_item">
        <div class="control_text"><?php echo $this->_var['lang']['label_brand_ad']; ?></div>
        <div class="control_value" ectype="imgControl">
        	<a href="javascript:void(0);" class="upload_image mb0" ectype="uploadImage" data-title="<?php echo $this->_var['lang']['brand_ad']; ?>" data-number="<?php if ($this->_var['suffix'] == 'backup_festival_1'): ?>3<?php else: ?>1<?php endif; ?>"<?php if ($this->_var['suffix'] == 'backup_festival_1'): ?> data-titleup="1"<?php endif; ?> data-link="1" data-showlink="1"><?php echo $this->_var['lang']['select_upload_img']; ?></a>
            <div class="imgup_icon" ectype='imgValue' data-name='barndAdv'>
                <?php $_from = $this->_var['spec_attr']['barndAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                <a href="<?php if ($this->_var['item']): ?><?php echo $this->_var['item']; ?><?php else: ?>data/gallery_album/visualDefault/homeIndex_007.jpg<?php endif; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php if ($this->_var['item']): ?><?php echo $this->_var['item']; ?><?php else: ?>data/gallery_album/visualDefault/homeIndex_007.jpg<?php endif; ?>>')" onmouseout="toolTip()"></i></a>
                <input name="barndAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php $_from = $this->_var['spec_attr']['barndAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                <input name="barndAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php $_from = $this->_var['spec_attr']['barndAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                <input name="barndAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                
                <?php $_from = $this->_var['spec_attr']['barndAdvTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                <input name="barndAdvTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php $_from = $this->_var['spec_attr']['barndAdvSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                <input name="barndAdvSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
    </div>
    <div class="control_item">
        <div class="control_text"><?php echo $this->_var['lang']['label_select_display_brand']; ?></div>
        <div class="control_value gallery_album" data-act="brand_query" data-inid="brand_list" data-url='dialog.php' ectype='brand_list' data-bandnumber="<?php if ($this->_var['suffix'] == 'backup_festival_1'): ?>29<?php else: ?>17<?php endif; ?>">
            <ul class="brand_list">
                <?php $_from = $this->_var['recommend_brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['brand']):
?>
                <li ectype='cliclkBrand' data-type="homeBrand" data-brand='<?php echo $this->_var['brand']['brand_id']; ?>'<?php if ($this->_var['brand']['selected'] == 1): ?> class="selected"<?php endif; ?>><a href="JavaScript:void(0);"><img src="<?php echo $this->_var['brand']['brand_logo']; ?>" title="<?php echo $this->_var['brand']['brand_name']; ?>"></a><b></b></li>
                <?php endforeach; else: ?>
                <li class="notic"><?php echo $this->_var['lang']['no_brand']; ?></li>
                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <div class="clear"></div>
            <?php echo $this->fetch('library/lib_page.lbi'); ?>
        </div>
    </div>
</div>
<input name='brand_ids' type='hidden' value='<?php echo $this->_var['spec_attr']['brand_ids']; ?>'>
<input type="hidden" name="mode" value="<?php echo $this->_var['temp']; ?>">
<input type="hidden" name="bandnumber" value="<?php if ($this->_var['suffix'] == 'backup_festival_1'): ?>29<?php else: ?>17<?php endif; ?>">
<input type="hidden" name="suffix" value="<?php echo $this->_var['suffix']; ?>">
</form>
<?php endif; ?>



<?php if ($this->_var['temp'] == 'homeFloor'): ?>
<!--首页楼层-->
<form action="" id="<?php echo $this->_var['mode']; ?>Insert" method="post" enctype="multipart/form-data" runat="server" >
    <div class="tab">
        <ul class="clearfix">
            <li class="current"><?php echo $this->_var['lang']['floor_cate_set']; ?></li>
            <li><?php echo $this->_var['lang']['floor_ad_set']; ?></li>
            <?php if ($this->_var['mode'] != 'homeFloorFive' && $this->_var['mode'] != 'homeFloorEight' && $this->_var['mode'] != 'homeFloorNine' && $this->_var['mode'] != 'homeFloorTen' && $this->_var['mode'] != 'storeOneFloor1' && $this->_var['mode'] != 'storeTwoFloor1' && $this->_var['mode'] != 'storeThreeFloor1' && $this->_var['mode'] != 'storeFourFloor1' && $this->_var['mode'] != 'storeFiveFloor1' && $this->_var['mode'] != 'topicOneFloor' && $this->_var['mode'] != 'topicTwoFloor' && $this->_var['mode'] != 'topicThreeFloor'): ?>
            <li><?php echo $this->_var['lang']['floor_brand_set']; ?></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="modal-body hfloor">
        <div class="body_info">
            <div class="control_list">
                <div class="control_item">
                    <?php if ($this->_var['hierarchy'] != '2'): ?>
                    <div class="control_item">
                        <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_module_name']; ?></div>
                        <div class="control_value"><input type="text" value="<?php echo $this->_var['lift']; ?>" class="text" name="lift" autocomplete="off" placeholder="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" /><div class="notic"><?php echo $this->_var['lang']['module_name_limit_2_4']; ?></div></div>
                    </div>
                    <?php endif; ?>
                    <div class="control_item">
                        <div class="control_text"><?php echo $this->_var['lang']['label_title']; ?></div>
                        <div class="control_value"><input type="text" value="<?php echo $this->_var['spec_attr']['floor_title']; ?>" class="text" name="floor_title" autocomplete="off" placeholder="<?php echo $this->_var['lang']['floor_title']; ?>"  data-msg="<?php echo $this->_var['lang']['floor_title']; ?>" /><div class="notic"><?php echo $this->_var['lang']['ftitle_empty_default_cate']; ?></div></div>
                    </div>
                    <?php if ($this->_var['mode'] == 'storeOneFloor1' || $this->_var['mode'] == 'storeTwoFloor1' || $this->_var['mode'] == 'storeThreeFloor1' || $this->_var['mode'] == 'storeFourFloor1' || $this->_var['mode'] == 'storeFiveFloor1' || $this->_var['mode'] == "topicOneFloor"): ?>
                    <div class="control_item">
                        <div class="control_text"><?php echo $this->_var['lang']['label_subtitle']; ?></div>
                        <div class="control_value"><input type="text" value="<?php echo $this->_var['spec_attr']['sub_title']; ?>" class="text" name="sub_title" autocomplete="off" placeholder="<?php echo $this->_var['lang']['sub_title']; ?>"  data-msg="<?php echo $this->_var['lang']['sub_title']; ?>" /></div>
                    </div>
                    <?php endif; ?>
                    <div class="control_item">
                    <div class="control_text lh30"><?php echo $this->_var['lang']['label_floor_cate']; ?></div>
                    <div class="control_value">
                        <div class="imitate_select select_w220" id="cat_id">
                            <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                            <ul>
                                <li><a href="javascript:void(0);" data-value=""><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                <?php $_from = $this->_var['cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                <li<?php if ($this->_var['list']['cat_id'] == $this->_var['spec_attr']['Selected']): ?> class="current"<?php endif; ?>><a href="javascript:void(0);" data-value="<?php echo $this->_var['list']['cat_id']; ?>"><?php echo $this->_var['list']['cat_name']; ?></a></li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                            <input name="" value="<?php echo $this->_var['spec_attr']['Selected']; ?>" type="hidden" id='cat_id_val'/>
                        </div>
                        <div class="cat_floor">
                            <?php if ($this->_var['spec_attr']['catChild']): ?>
                            <div class="imitate_select select_w220" id="cat_id1">
                                <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                <ul>
                                    <li><a href="javascript:void(0);" data-value=""><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                    <?php $_from = $this->_var['spec_attr']['catChild']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                    <li <?php if ($this->_var['list']['cat_id'] == $this->_var['spec_attr']['cat_id']): ?> class="current"<?php endif; ?>><a href="javascript:void(0);" data-value="<?php echo $this->_var['list']['cat_id']; ?>"><?php echo $this->_var['list']['cat_name']; ?></a></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                                <input name="" value="<?php echo $this->_var['spec_attr']['cat_id']; ?>" type="hidden" id='cat_id_val1'/>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php if ($this->_var['mode'] == 'homeFloorFour' || $this->_var['mode'] == 'homeFloorFive' || $this->_var['mode'] == 'homeFloorSeven' || $this->_var['mode'] == 'homeFloorSix' || $this->_var['mode'] == 'homeFloorEight' || $this->_var['mode'] == 'homeFloorTen' || $this->_var['mode'] == 'storeOneFloor1' || $this->_var['mode'] == 'storeTwoFloor1' || $this->_var['mode'] == 'storeThreeFloor1' || $this->_var['mode'] == 'storeFourFloor1' || $this->_var['mode'] == 'storeFiveFloor1' || $this->_var['mode'] == "topicOneFloor" || $this->_var['mode'] == "topicTwoFloor" || $this->_var['mode'] == "topicThreeFloor"): ?>
                        <a href="javascript:void(0);" class="hdle" ectype="setupGoods" data-top='1' data-goodsnumber="<?php if ($this->_var['mode'] == 'homeFloorSeven'): ?>6<?php else: ?>12<?php endif; ?>"><?php echo $this->_var['lang']['set_goods']; ?><input name="top_goods" type="hidden" value='<?php echo $this->_var['spec_attr']['top_goods']; ?>'/></a>
                        <?php endif; ?>
                    </div>
                    <input name="Floorcat_id" type="hidden" value='<?php echo $this->_var['spec_attr']['cat_id']; ?>'/>
                    </div>
                </div>
                <?php if ($this->_var['mode'] != "storeOneFloor1" && $this->_var['mode'] != 'storeTwoFloor1' && $this->_var['mode'] != 'storeFourFloor1' && $this->_var['mode'] != 'storeFiveFloor1'): ?>
                <div class="control_item"<?php if ($this->_var['mode'] == 'storeThreeFloor1' && $this->_var['spec_attr']['floorMode'] != 1): ?> style="display:none;"<?php endif; ?>>
                    <div class="control_text lh30"><?php echo $this->_var['lang']['label_floor_cate_level2']; ?></div>
                    <div class="control_value" data-catnumber="<?php if ($this->_var['mode'] == 'homeFloorModule'): ?>2<?php elseif ($this->_var['mode'] == 'homeFloorTen'): ?>5<?php elseif ($this->_var['mode'] == 'topicOneFloor'): ?>3<?php elseif ($this->_var['mode'] == 'FhomeFloorModule'): ?>4<?php else: ?>6<?php endif; ?>" data-goodsnumber="<?php if ($this->_var['mode'] == 'homeFloorModule'): ?>4<?php else: ?>12<?php endif; ?>">
                        <?php if ($this->_var['spec_attr']['juniorCat']): ?>
                            <?php $_from = $this->_var['spec_attr']['catInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'value');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['value']):
        $this->_foreach['name']['iteration']++;
?>
                            <div class="item" ectype="item">
                                <div class="imitate_select select_w220" ectype="iselectErji">
                                    <div class="cite" ectype="tit"><?php echo $this->_var['lang']['please_select']; ?></div>
                                    <ul>
                                        <li><a href="javascript:void(0);" data-value=""><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                        <?php $_from = $this->_var['spec_attr']['juniorCat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                        <li<?php if ($this->_var['list']['cat_id'] == $this->_var['value']['cat_id']): ?> class="current"<?php endif; ?>><a href="javascript:void(0);" data-value="<?php echo $this->_var['list']['cat_id']; ?>"><?php echo $this->_var['list']['cat_name']; ?></a></li>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                    <input name="cateValue[]" type="hidden" value="<?php echo $this->_var['value']['cat_id']; ?>" <?php if ($this->_var['mode'] == 'storeThreeFloor1'): ?>ectype="required" data-msg="<?php echo $this->_var['lang']['please_select_cate_level2']; ?>"<?php endif; ?> />
                                </div>
                                <?php if (($this->_foreach['name']['iteration'] <= 1)): ?>
                                <a href="javascript:void(0);" class="hdle" ectype="addCate"><?php echo $this->_var['lang']['add_cate']; ?></a>
                                <?php endif; ?>
                                <a href="javascript:void(0);" class="hdle" ectype="setupGoods">
                                    <?php echo $this->_var['lang']['set_goods']; ?>
                                    <input type="hidden" name="cat_goods[]" value="<?php echo $this->_var['value']['cat_goods']; ?>">
                                </a>
                                <?php if (! ($this->_foreach['name']['iteration'] <= 1)): ?>
                                <a href="javascript:void(0);" class="hdle" ectype="removeCate"><?php echo $this->_var['lang']['delete_cate']; ?></a>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        <?php else: ?>
                        <div class="item" ectype="item">
                            <div class="imitate_select select_w220" ectype="iselectErji">
                                <div class="cite" ectype="tit"><?php echo $this->_var['lang']['please_select']; ?></div>
                                <ul>
                                    <li><a href="javascript:void(0);" data-value=""><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                </ul>
                                <input name="cateValue[]" type="hidden" value="" ectype="cateValue" />
                            </div>
                            <a href="javascript:void(0);" class="hdle" ectype="addCate"><?php echo $this->_var['lang']['add_cate']; ?></a>
                            <a href="javascript:void(0);" class="hdle" ectype="setupGoods" style="display:none;">
                                <?php echo $this->_var['lang']['set_goods']; ?>
                                <input type="hidden" name="cat_goods[]" value="<?php echo $this->_var['value']['cat_goods']; ?>">
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if ($this->_var['mode'] != 'homeFloorNine' && $this->_var['mode'] != 'storeOneFloor1' && $this->_var['mode'] != 'storeTwoFloor1' && $this->_var['mode'] != 'storeThreeFloor1' && $this->_var['mode'] != 'storeFourFloor1' && $this->_var['mode'] != 'storeFiveFloor1' && $this->_var['mode'] != 'topicOneFloor' && $this->_var['mode'] != 'topicTwoFloor' && $this->_var['mode'] != 'topicThreeFloor'): ?>
                <div class="control_item">
                    <div class="control_text lh30"><?php echo $this->_var['lang']['label_set_color']; ?></div>
                    <div class="control_value">
                        <div class="color-item color-item1<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-1' || ! $this->_var['spec_attr']['typeColor']): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" value="floor-color-type-1">
                            <i></i>
                        </div>
                        <div class="color-item color-item2<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-2'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-2">
                            <i></i>
                        </div>
                        <div class="color-item color-item3<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-3'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-3">
                            <i></i>
                        </div>
                        <div class="color-item color-item4<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-4'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-4">
                            <i></i>
                        </div>
                        <div class="color-item color-item5<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-5'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-5">
                            <i></i>
                        </div>
                        <div class="color-item color-item6<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-6'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-6">
                            <i></i>
                        </div>
                        <div class="color-item color-item7<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-7'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-7">
                            <i></i>
                        </div>
                        <div class="color-item color-item8<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-8'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-8">
                            <i></i>
                        </div>
                        <div class="color-item color-item9<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-9'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-9">
                            <i></i>
                        </div>
                        <div class="color-item color-item10<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-10'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-10">
                            <i></i>
                        </div>
                        <div class="color-item color-item11<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-11'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-11">
                            <i></i>
                        </div>
                        <div class="color-item color-item12<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-12'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-12">
                            <i></i>
                        </div>
                        <div class="color-item color-item13<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-13'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-13">
                            <i></i>
                        </div>
                        <div class="color-item color-item14<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-14'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-14">
                            <i></i>
                        </div>
                        
                        <div class="color-item color-item15<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-15'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-15">
                            <i></i>
                        </div>
                        <div class="color-item color-item16<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-16'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-16">
                            <i></i>
                        </div>
                        <div class="color-item color-item17<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-17'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-17">
                            <i></i>
                        </div>
                        <div class="color-item color-item18<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-18'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-18">
                            <i></i>
                        </div>
                        
                        <div class="color-item color-item19<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-19'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-19">
                            <i></i>
                        </div>
                        <div class="color-item color-item20<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-20'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-20">
                            <i></i>
                        </div>
                        <div class="color-item color-item21<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-21'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-21">
                            <i></i>
                        </div>
                        <div class="color-item color-item22<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-22'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-22">
                            <i></i>
                        </div>
                        
                        <div class="color-item color-item23<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-23'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-23">
                            <i></i>
                        </div>
                        <div class="color-item color-item24<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-24'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-24">
                            <i></i>
                        </div>
                        <div class="color-item color-item25<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-25'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-25">
                            <i></i>
                        </div>
                        <div class="color-item color-item26<?php if ($this->_var['spec_attr']['typeColor'] == 'floor-color-type-26'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" name="" value="floor-color-type-26">
                            <i></i>
                        </div>
                        <input type="hidden" name="typeColor" value="<?php if ($this->_var['spec_attr']['typeColor']): ?><?php echo $this->_var['spec_attr']['typeColor']; ?><?php else: ?>floor-color-type-1<?php endif; ?>">
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if ($this->_var['mode'] == 'storeOneFloor1' || $this->_var['mode'] == 'storeTwoFloor1' || $this->_var['mode'] == 'storeThreeFloor1' || $this->_var['mode'] == 'storeFourFloor1' || $this->_var['mode'] == 'storeFiveFloor1' || $this->_var['mode'] == 'topicOneFloor' || $this->_var['mode'] == 'topicTwoFloor' || $this->_var['mode'] == 'topicThreeFloor'): ?>
                <div class="control_item">
                    <div class="control_text lh30"><?php echo $this->_var['lang']['label_title_color']; ?></div>
                    <div class="control_value">
                        <div class="color-item font-color-1<?php if ($this->_var['spec_attr']['fontColor'] == 'font-color-type-1' || ( ! $this->_var['spec_attr']['fontColor'] && $this->_var['mode'] != 'storeOneFloor1' && $this->_var['mode'] != 'storeFourFloor1' && $this->_var['mode'] != 'storeFiveFloor1' && $this->_var['mode'] != 'topicThreeFloor' )): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" value="font-color-type-1">
                            <i></i>
                        </div>
                        <div class="color-item font-color-2<?php if ($this->_var['spec_attr']['fontColor'] == 'font-color-type-2' || ( ! $this->_var['spec_attr']['fontColor'] && ( $this->_var['mode'] == 'storeOneFloor1' || $this->_var['mode'] == 'storeFourFloor1' || $this->_var['mode'] == 'topicThreeFloor' ) )): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" value="font-color-type-2">
                            <i></i>
                        </div>
                        <div class="color-item font-color-3<?php if ($this->_var['spec_attr']['fontColor'] == 'font-color-type-3'): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" value="font-color-type-3">
                            <i></i>
                        </div>
                        <div class="color-item font-color-4<?php if ($this->_var['spec_attr']['fontColor'] == 'font-color-type-4' || ( ! $this->_var['spec_attr']['fontColor'] && $this->_var['mode'] == 'storeFiveFloor1' )): ?> selected<?php endif; ?>" ectype="colorItem">
                            <input type="hidden" value="font-color-type-4">
                            <i></i>
                        </div>
                        <input type="hidden" name="fontColor" value="<?php if ($this->_var['spec_attr']['fontColor']): ?><?php echo $this->_var['spec_attr']['fontColor']; ?><?php else: ?><?php if ($this->_var['mode'] == 'storeOneFloor1'): ?>font-color-type-2<?php else: ?>font-color-type-1<?php endif; ?><?php endif; ?>">
                    </div>
            	</div>
                <?php endif; ?>        
            </div>
        </div>
        <div class="body_info" style="display:none;">
            <div class="control_list">
                <div class="control_item control_item_quan">
                    <div class="control_value">
                        <div class="floormodeItem<?php if ($this->_var['mode'] == 'homeFloorModule'): ?> floormodeModuleItem<?php endif; ?><?php if ($this->_var['spec_attr']['floorMode'] < 2): ?> selected<?php endif; ?>" ectype="floormodeItem">
                        	<div class="img"><img src="images/visual/<?php echo $this->_var['mode']; ?>_01.jpg"></div>
                            <div class="checkbox_item">
                            	<input type="radio" name="floorMode" value="1" data-pattern="<?php echo $this->_var['floor_style']['0']; ?>"<?php if ($this->_var['mode'] == 'homeFloorTen' || $this->_var['mode'] == 'topicOneFloor' || $this->_var['mode'] == 'topicTwoFloor' || $this->_var['mode'] == 'topicThreeFloor' || $this->_var['mode'] == "storeThreeFloor1"): ?> data-catepmer="0"<?php endif; ?> class="ui-radio" id="floorMode_1"<?php if ($this->_var['spec_attr']['floorMode'] < 2): ?> checked<?php endif; ?>/>
                            	<label class="ui-radio-label" for="floorMode_1"><?php echo $this->_var['lang']['floor_ad_template']; ?><?php echo $this->_var['lang']['num_1']; ?></label>
                            </div>
                            <div ectype="floorModehide" class="hide">
                                <?php if ($this->_var['spec_attr']['floorMode'] == 1): ?>
                                <div ectype="leftBanner">
                                    <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBanner[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <?php $_from = $this->_var['spec_attr']['leftBannerLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['leftAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['leftAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['rightAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  

                                    <?php $_from = $this->_var['spec_attr']['rightAdvTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div ectype="leftBanner">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>   
                        </div>
                        <?php if ($this->_var['mode'] != "FhomeFloorModule"): ?>
                        <div class="floormodeItem<?php if ($this->_var['mode'] == 'homeFloorModule'): ?> floormodeModuleItem<?php endif; ?><?php if ($this->_var['spec_attr']['floorMode'] == 2): ?> selected<?php endif; ?>" ectype="floormodeItem">
                        	<div class="img"><img src="images/visual/<?php echo $this->_var['mode']; ?>_02.jpg"></div>
                            <div class="checkbox_item">
                            	<input type="radio" name="floorMode" value="2" data-pattern="<?php echo $this->_var['floor_style']['1']; ?>"<?php if ($this->_var['mode'] == 'homeFloorTen' || $this->_var['mode'] == 'topicOneFloor' || $this->_var['mode'] == 'topicTwoFloor' || $this->_var['mode'] == 'topicThreeFloor' || $this->_var['mode'] == "storeThreeFloor1"): ?> data-catepmer="0"<?php endif; ?> class="ui-radio" id="floorMode_2"<?php if ($this->_var['spec_attr']['floorMode'] == 2): ?> checked<?php endif; ?> />
                            	<label class="ui-radio-label" for="floorMode_2"><?php echo $this->_var['lang']['floor_ad_template']; ?><?php echo $this->_var['lang']['num_2']; ?></label>
                            </div>
                            <div ectype="floorModehide" class="hide">
                                <?php if ($this->_var['spec_attr']['floorMode'] == 2): ?>
                                <div ectype="leftBanner">
                                    <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBanner[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <?php $_from = $this->_var['spec_attr']['leftBannerLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
                                    <?php $_from = $this->_var['spec_attr']['leftBannerTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['leftAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['leftAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['rightAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  

                                    <?php $_from = $this->_var['spec_attr']['rightAdvTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div ectype="leftBanner">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="floormodeItem<?php if ($this->_var['mode'] == 'homeFloorModule'): ?> floormodeModuleItem<?php endif; ?><?php if ($this->_var['spec_attr']['floorMode'] == 3): ?> selected<?php endif; ?>" ectype="floormodeItem">
                        	<div class="img"><img src="images/visual/<?php echo $this->_var['mode']; ?>_03.jpg"></div>
                            <div class="checkbox_item">
                            	<input type="radio" name="floorMode" value="3" data-pattern="<?php echo $this->_var['floor_style']['2']; ?>"<?php if ($this->_var['mode'] == 'homeFloorTen' || $this->_var['mode'] == 'topicOneFloor' || $this->_var['mode'] == 'topicTwoFloor' || $this->_var['mode'] == 'topicThreeFloor' || $this->_var['mode'] == "storeThreeFloor1"): ?> data-catepmer="0"<?php endif; ?> class="ui-radio" id="floorMode_3"<?php if ($this->_var['spec_attr']['floorMode'] == 3): ?> checked<?php endif; ?>/>
                            	<label class="ui-radio-label" for="floorMode_3"><?php echo $this->_var['lang']['floor_ad_template']; ?><?php echo $this->_var['lang']['num_3']; ?></label>
                            </div>
                            <div ectype="floorModehide" class="hide">
                                <?php if ($this->_var['spec_attr']['floorMode'] == 3): ?>
                                <div ectype="leftBanner">
                                    <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBanner[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <?php $_from = $this->_var['spec_attr']['leftBannerLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['leftAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['leftAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['rightAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  

                                    <?php $_from = $this->_var['spec_attr']['rightAdvTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div ectype="leftBanner">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($this->_var['mode'] != "storeTwoFloor1" && $this->_var['mode'] != "topicOneFloor" && $this->_var['mode'] != "topicThreeFloor" && $this->_var['mode'] != "FhomeFloorModule"): ?>
                        <div class="floormodeItem<?php if ($this->_var['mode'] == 'homeFloorModule'): ?> floormodeModuleItem<?php endif; ?><?php if ($this->_var['spec_attr']['floorMode'] == 4): ?> selected<?php endif; ?> last" ectype="floormodeItem">
                        	<div class="img"><img src="images/visual/<?php echo $this->_var['mode']; ?>_04.jpg"></div>
                            <div class="checkbox_item">
                            	<input type="radio" name="floorMode" value="4" class="ui-radio" data-pattern="<?php echo $this->_var['floor_style']['3']; ?>"<?php if ($this->_var['mode'] == 'homeFloorTen' || $this->_var['mode'] == 'topicOneFloor' || $this->_var['mode'] == 'topicTwoFloor' || $this->_var['mode'] == 'topicThreeFloor' || $this->_var['mode'] == "storeThreeFloor1"): ?> data-catepmer="0"<?php endif; ?> id="floorMode_4"<?php if ($this->_var['spec_attr']['floorMode'] == 4): ?> checked<?php endif; ?>/>
                            	<label class="ui-radio-label" for="floorMode_4"><?php echo $this->_var['lang']['floor_ad_template']; ?><?php echo $this->_var['lang']['num_4']; ?></label>
                            </div>
                            <div ectype="floorModehide" class="hide">
                                <?php if ($this->_var['spec_attr']['floorMode'] == 4): ?>
                                <div ectype="leftBanner">
                                    <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBanner[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <?php $_from = $this->_var['spec_attr']['leftBannerLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <?php $_from = $this->_var['spec_attr']['leftBannerTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['leftAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['leftAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['rightAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  

                                    <?php $_from = $this->_var['spec_attr']['rightAdvTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div ectype="leftBanner">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endif; ?>
						<?php if ($this->_var['mode'] == "homeFloorFive" || $this->_var['mode'] == "homeFloorSeven" || $this->_var['mode'] == "homeFloorEight"): ?>
                        <div class="floormodeItem<?php if ($this->_var['spec_attr']['floorMode'] == 5): ?> selected<?php endif; ?>" ectype="floormodeItem">
                            <div class="img"><img src="images/visual/<?php echo $this->_var['mode']; ?>_05.jpg"></div>
                            <div class="checkbox_item">
                            	<input type="radio" name="floorMode" value="5" data-pattern="<?php echo $this->_var['floor_style']['4']; ?>"<?php if ($this->_var['mode'] == 'homeFloorTen' || $this->_var['mode'] == 'topicOneFloor' || $this->_var['mode'] == 'topicTwoFloor' || $this->_var['mode'] == 'topicThreeFloor' || $this->_var['mode'] == "storeThreeFloor1"): ?> data-catepmer="0"<?php endif; ?> class="ui-radio" id="floorMode_5"<?php if ($this->_var['spec_attr']['floorMode'] == 5): ?> checked<?php endif; ?>/>
                            	<label class="ui-radio-label" for="floorMode_5"><?php echo $this->_var['lang']['floor_ad_template']; ?><?php echo $this->_var['lang']['num_5']; ?></label>
                            </div>
                            <div ectype="floorModehide" class="hide">
                                <?php if ($this->_var['spec_attr']['floorMode'] == 5): ?>
                                <div ectype="leftBanner">
                                    <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBanner[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <?php $_from = $this->_var['spec_attr']['leftBannerLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
                                    <?php $_from = $this->_var['spec_attr']['leftBannerTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['leftAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['leftAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['rightAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  

                                    <?php $_from = $this->_var['spec_attr']['rightAdvTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div ectype="leftBanner">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
						<?php endif; ?>
                    </div>
                </div>
                <div class="control_item control_item_cent" ectype="floorMode">
                    <div class="control_text lh30"><span class="cor cor1"></span><?php echo $this->_var['lang']['label_switch_ad_img']; ?></div>
                    <div class="control_value lh30" ectype="imgControl">
                        <a href="javascript:void(0);" class="blue fl" ectype="uploadImage" data-uploadimagetype="home" data-title="<?php echo $this->_var['lang']['switch_ad_img']; ?>"  data-number="<?php if ($this->_var['mode'] == 'homeFloorThree'): ?>5<?php else: ?>3<?php endif; ?>" <?php if ($this->_var['mode'] == 'homeFloorEight' || $this->_var['mode'] == 'FhomeFloorModule'): ?>data-titleup="1"<?php endif; ?>><?php echo $this->_var['lang']['select_upload_img']; ?></a>
                        <div class="imgup_icon" ectype="imgValue" data-name="leftBanner">
                            <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                            <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </div>
                </div>
               	
                <div class="control_item control_item_cent" ectype="floorMode">
                    <div class="control_text lh30"><span class="cor cor2"></span><?php echo $this->_var['lang']['label_common_ad_img']; ?></div>
                    <div class="control_value lh30" ectype="imgControl">
                        <a href="javascript:void(0);" class="blue fl" ectype="uploadImage" data-uploadimagetype="home" data-title="<?php echo $this->_var['lang']['common_ad_img']; ?>" data-number="2"><?php echo $this->_var['lang']['select_upload_img']; ?></a>
                        <div class="imgup_icon" ectype="imgValue" data-name="leftAdv">
                            <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                            <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </div>
                </div>
                
                <div class="control_item control_item_cent" ectype="floorMode">
                    <div class="control_text lh30"><span class="cor cor3"></span><?php echo $this->_var['lang']['label_title_ad_img']; ?></div>
                    <div class="control_value lh30" ectype="imgControl">
                        <a href="javascript:void(0);" class="blue fl" ectype="uploadImage" data-uploadimagetype="home" data-title="<?php echo $this->_var['lang']['title_ad_img']; ?>" <?php if ($this->_var['mode'] != 'homeFloorFour' && $this->_var['mode'] != 'homeFloorSix'): ?>data-titleup="1"<?php endif; ?> data-number="<?php if ($this->_var['mode'] == 'homeFloor'): ?>5<?php elseif ($this->_var['mode'] == 'homeFloorFour' || $this->_var['mode'] == 'homeFloorFive'): ?>3<?php elseif ($this->_var['mode'] == 'homeFloorSix'): ?>2<?php elseif ($this->_var['mode'] == 'homeFloorSeven'): ?>1<?php else: ?>4<?php endif; ?>"><?php echo $this->_var['lang']['select_upload_img']; ?></a>
                        <div class="imgup_icon" ectype="imgValue" data-name="rightAdv">
                            <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                            <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </div>
                </div>    
            </div>        
        </div>
        <div class="body_info" style="display:none;">
            <div class="control_item">
                <div class="checkobx-item">
                    <input type="checkbox" id="selected_brand" name="is_selected" class="ui-checkbox fl" onclick="selected_brands(this)">
                    <label class="ui-label" for="selected_brand"><?php echo $this->_var['lang']['already_selected_brand']; ?></label>
                </div>
            </div>
            <div class="brand_list mt10" ectype='brand_list' data-bandnumber="<?php if ($this->_var['mode'] == 'homeFloorModule'): ?>5<?php else: ?>10<?php endif; ?>">
            	<div class="notic"><?php echo $this->_var['lang']['please_floor_cate_or_no_brand']; ?></div>
            </div>
        </div>
    </div>
    <input type="hidden" name="mode" value="<?php echo $this->_var['mode']; ?>">
    <input name='brand_ids' type='hidden' value='<?php echo $this->_var['spec_attr']['brand_ids']; ?>'>
</form>
<script type="text/javascript">
    var mode = "<?php echo $this->_var['mode']; ?>";
    if(mode != 'homeFloorFive'){
        $(function(){
            var cat_id = $("input[name='Floorcat_id']").val();
            var brand_ids = $("input[name='brand_ids']").val();
            if(cat_id > 0){
                searchFloorBrand(cat_id,brand_ids);
            }
        })
    }
    
    function selected_brands(obj){
        var brand_ids = $("input[name='brand_ids']").val();
        var cat_id = $("input[name='Floorcat_id']").val();
        if(cat_id > 0){
            var is_selected =$("input[name='is_selected']").is(':checked');
            if(is_selected){
                is_selected = 1;
            }else{
                is_selected = 0;
            }
            searchFloorBrand(cat_id,brand_ids,is_selected);
        }
    }
    //select下拉默认值赋值
    $('.imitate_select').each(function(){
		var sel_this = $(this)
		var val = sel_this.children('input[type=hidden]').val();
		sel_this.find('a').each(function(){
			if($(this).attr('data-value') == val){
				sel_this.children('.cite').html($(this).html());
			}
		})
    });
	
    $.divselect("#cat_id","#cat_id_val",function(obj){
        var val = obj.attr("data-value");
        $("input[name='Floorcat_id']").val(val);
		$("input[name='top_goods']").val('');
        getChildCat(val,1);
    });
	
    $.divselect("#cat_id1","#cat_id_val1",function(obj){
        var val = obj.attr("data-value");
        $("input[name='Floorcat_id']").val(val);
        getChildCat(val);
    });
	
    function getChildCat(cat_id,type){
        Ajax.call('get_ajax_content.php', 'act=getChildCat&cat_id=' + cat_id, function(result){
            if(type == 1){
                $(".cat_floor").html(result.content);
            }
            $("*[ectype='addCate']").parents(".item").find("ul").html(result.contentChild);
            $("*[ectype='addCate']").parents(".item").find(".cite").html(jl_please_select);
            $("*[ectype='addCate']").parents(".item").find("input[type='hidden']").val("");
            $("*[ectype='addCate']").parents(".item").siblings().remove();
			$("input[name='brand_ids']").val(""); //切换楼层一级分类时 清空已选择过的楼层品牌id
            if(mode != 'homeFloorFive'){
                searchFloorBrand(cat_id);
            }
        }, 'POST', 'JSON');
    }
	
	function searchFloorBrand(cat_id,brand_ids,is_selected){
		Ajax.call('get_ajax_content.php', 'is_ajax=1&act=filter_list&search_type=get_content&FloorBrand=1&cat_id=' + cat_id + "&brand_ids=" + brand_ids + "&is_selected=" + is_selected, function(result){
			$("*[ectype='brand_list']").html(result.FloorBrand);
		   
		   	$("ul.brand_list").hover(function(){
				$("ul.brand_list").perfectScrollbar("destroy");
				$("ul.brand_list").perfectScrollbar();
		   	});
		}, 'POST', 'JSON');
	}
		
	//楼层广告模板选择
	$.divselect("#fm-select","#floorMode",function(obj){
        var val = obj.attr("data-value");
		var nyroModal = obj.parents("*[ectype='iselect']").siblings(".nyroModal");
        
		for(var i = 1; i < 9; i++){
			if(val == i){
				nyroModal.attr("href","images/visual/homeFloor_0" + i + ".jpg");
				nyroModal.find("i").attr("onmouseover","toolTip('<img src=images/visual/homeFloor_0" + i + ".jpg>')");
			}
		}
    });
	
	//判断模板模式选中后图片选择
	$(document).on("click","*[ectype='floormodeItem']",function(){
		var val = $(this).find("input[type='radio']").val(),
			pattern = $(this).find("input[type='radio']").data("pattern"),
			catepmer = $(this).find("input[type='radio']").data("catepmer"),
			arr = new Array(),
			imgNumberArr = <?php echo $this->_var['imgNumberArr']; ?>;
			
		$(this).addClass("selected").siblings().removeClass("selected");
		$(this).find("input[type='radio']").prop("checked",true);
		
		pattern = pattern.toString();

		if(pattern.indexOf(',') > 0){
			arr = pattern.split(',');
		}else{
			arr = pattern;
		}
		
		$("*[ectype='floorMode']").hide();
		
		for(var i = 0; i<arr.length;i++){
			$("*[ectype='floorMode']").eq((arr[i]-1)).show();
		}
		
		for(var i in imgNumberArr){
			if(i == val){
				$.each(imgNumberArr[i],function(index,value){
					$("[data-name='"+index+"']").siblings("*[ectype='uploadImage']").attr("data-number",value);
				});
			}
		}
		var _this = $(this);
		$("*[ectype='imgValue']").each(function(){
			var name = $(this).data("name");
			var imgHtml = _this.find("[ectype='" + name + "']").find("[ectype='advimg']").html();
			$(this).html(imgHtml);
		});
		
		//判断是否显示二级分类
		if(catepmer == 0){
			$("*[ectype='iselectErji']").parents(".control_item").hide();
			$("*[ectype='iselectErji']").parents(".control_item").find("*[ectype='required']").attr("ectype","requiredno")
		}else if(catepmer == 1){
			$("*[ectype='iselectErji']").parents(".control_item").show();
			$("*[ectype='iselectErji']").parents(".control_item").find("*[ectype='required']").attr("ectype","required")
		}
	});
	
	//默认编辑弹框时模板模式选中
	var radioVal = $("input[name='floorMode']:checked").val();
	$("#floorMode_"+ radioVal).click();
</script>
<?php endif; ?>

<?php if ($this->_var['temp'] == 'vipEdit'): ?>
<!--首页个人信息栏-->
<div class="control_list">
    <div class="control_item">
        <div class="control_text"><?php echo $this->_var['lang']['label_hot_article']; ?></div>
        <div class="control_value">
            <input type="text" value="<?php echo $this->_var['index_article_cat']; ?>" name="index_article_cat" class="text text_2" placeholder="<?php echo $this->_var['lang']['select_article_id_comma_split']; ?>" autocomplete="off" />
        </div>
    </div>
    <div class="control_item">
        <div class="control_text"><?php echo $this->_var['lang']['label_fast_entry']; ?></div>
        <div class="control_value">
            <div class="quick_items">
                <?php $_from = $this->_var['quick']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'quick');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['quick']):
?>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['quick']['zh_cn']; ?></div>
                    <div class="content">
                        <div class="adv_item"><input type="text" class="text" value="<?php echo $this->_var['quick']['quick_name']; ?>" name="quick_name[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['name']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><input type="text" class="text" value="<?php echo $this->_var['quick']['quick_url']; ?>" name="quick_url[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['link']; ?>" autocomplete="off" ></div>
                        <a href="javascript:void(0);" class="blue" ectype="quickIcon"><?php echo $this->_var['lang']['select_icon']; ?></a>
                        <div class="iconItems" ectype="iconItems">
                        	<i class="trian_icon"></i>
                        	<div class="iconItems-warp">
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_<?php echo $this->_var['key']; ?>" class="ui-radio" data-name="browse" value="browse" id="radio_<?php echo $this->_var['key']; ?>_browse" <?php if ($this->_var['quick']['style_icon'] == 'browse'): ?>checked<?php endif; ?> />
                                    <label for="radio_<?php echo $this->_var['key']; ?>_browse" class="ui-radio-label"><i class="iconfont icon-browse"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_<?php echo $this->_var['key']; ?>" class="ui-radio" data-name="zan" value="zan" id="radio_<?php echo $this->_var['key']; ?>_zan" <?php if ($this->_var['quick']['style_icon'] == 'zan'): ?>checked<?php endif; ?>/>
                                    <label for="radio_<?php echo $this->_var['key']; ?>_zan" class="ui-radio-label"><i class="iconfont icon-zan-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_<?php echo $this->_var['key']; ?>" class="ui-radio" data-name="order" value="order" id="radio_<?php echo $this->_var['key']; ?>_order" <?php if ($this->_var['quick']['style_icon'] == 'order'): ?>checked<?php endif; ?>/>
                                    <label for="radio_<?php echo $this->_var['key']; ?>_order" class="ui-radio-label"><i class="iconfont icon-order"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_<?php echo $this->_var['key']; ?>" class="ui-radio" data-name="password" value="password" id="radio_<?php echo $this->_var['key']; ?>_password" <?php if ($this->_var['quick']['style_icon'] == 'password'): ?>checked<?php endif; ?>/>
                                    <label for="radio_<?php echo $this->_var['key']; ?>_password" class="ui-radio-label"><i class="iconfont icon-password-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_<?php echo $this->_var['key']; ?>" class="ui-radio" data-name="share" value="share" id="radio_<?php echo $this->_var['key']; ?>_share" <?php if ($this->_var['quick']['style_icon'] == 'share'): ?>checked<?php endif; ?>/>
                                    <label for="radio_<?php echo $this->_var['key']; ?>_share" class="ui-radio-label"><i class="iconfont icon-share-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_<?php echo $this->_var['key']; ?>" class="ui-radio" data-name="settled" value="settled" id="radio_<?php echo $this->_var['key']; ?>_settled" <?php if ($this->_var['quick']['style_icon'] == 'settled'): ?>checked<?php endif; ?>/>
                                    <label for="radio_<?php echo $this->_var['key']; ?>_settled" class="ui-radio-label"><i class="iconfont icon-settled"></i></label>
                                </div>
                            </div>
                                <input type="hidden" name="style_icon[]" value="<?php echo $this->_var['quick']['style_icon']; ?>">
                        </div>
                    </div>
                </div>
                <?php endforeach; else: ?>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['num_1']; ?></div>
                    <div class="content">
                        <div class="adv_item"><input type="text" value="" class="text" name="quick_name[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['name']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><input type="text" value="" class="text" name="quick_url[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['link']; ?>" autocomplete="off" ></div>
                        <a href="javascript:void(0);" class="blue" ectype="quickIcon"><?php echo $this->_var['lang']['select_icon']; ?></a>
                    	<div class="iconItems" ectype="iconItems">
                        	<i class="trian_icon"></i>
                        	<div class="iconItems-warp">
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_1" class="ui-radio" data-name="browse" value="browse" id="radio_1_browse" checked />
                                    <label for="radio_1_browse" class="ui-radio-label"><i class="iconfont icon-browse"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_1" class="ui-radio" data-name="zan" value="zan" id="radio_1_zan" />
                                    <label for="radio_1_zan" class="ui-radio-label"><i class="iconfont icon-zan-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_1" class="ui-radio" data-name="order" value="order" id="radio_1_order" />
                                    <label for="radio_1_order" class="ui-radio-label"><i class="iconfont icon-order"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_1" class="ui-radio" data-name="password" value="password" id="radio_1_password" />
                                    <label for="radio_1_password" class="ui-radio-label"><i class="iconfont icon-password-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_1" class="ui-radio" data-name="share" value="share" id="radio_1_share" />
                                    <label for="radio_1_share" class="ui-radio-label"><i class="iconfont icon-share-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_1" class="ui-radio" data-name="settled" value="settled" id="radio_1_settled" />
                                    <label for="radio_1_settled" class="ui-radio-label"><i class="iconfont icon-settled"></i></label>
                                </div>
                            </div>
                                <input type="hidden" name="style_icon[]" value="browse">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['num_2']; ?></div>
                    <div class="content">
                        <div class="adv_item"><input type="text" value="" class="text" name="quick_name[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['name']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><input type="text" value="" class="text" name="quick_url[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['link']; ?>" autocomplete="off" ></div>
                        <a href="javascript:void(0);" class="blue" ectype="quickIcon"><?php echo $this->_var['lang']['select_icon']; ?></a>
                    	<div class="iconItems" ectype="iconItems">
                        	<i class="trian_icon"></i>
                            <div class="iconItems-warp">
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_2" class="ui-radio" data-name="browse" value="browse" id="radio_2_browse"/>
                                    <label for="radio_2_browse" class="ui-radio-label"><i class="iconfont icon-browse"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_2" class="ui-radio" data-name="zan" value="zan" id="radio_2_zan" checked />
                                    <label for="radio_2_zan" class="ui-radio-label"><i class="iconfont icon-zan-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_2" class="ui-radio" data-name="order" value="order" id="radio_2_order" />
                                    <label for="radio_2_order" class="ui-radio-label"><i class="iconfont icon-order"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_2" class="ui-radio" data-name="password" value="password" id="radio_2_password" />
                                    <label for="radio_2_password" class="ui-radio-label"><i class="iconfont icon-password-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_2" class="ui-radio" data-name="share" value="share" id="radio_2_share" />
                                    <label for="radio_2_share" class="ui-radio-label"><i class="iconfont icon-share-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_2" class="ui-radio" data-name="settled" value="settled" id="radio_2_settled" />
                                    <label for="radio_2_settled" class="ui-radio-label"><i class="iconfont icon-settled"></i></label>
                                </div>
                            </div>
                                <input type="hidden" name="style_icon[]" value="zan">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['num_3']; ?></div>
                    <div class="content">
                        <div class="adv_item"><input type="text" value="" class="text" name="quick_name[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['name']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><input type="text" value="" class="text" name="quick_url[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['link']; ?>" autocomplete="off" ></div>
                        <a href="javascript:void(0);" class="blue" ectype="quickIcon"><?php echo $this->_var['lang']['select_icon']; ?></a>
                    	<div class="iconItems" ectype="iconItems">
                        	<i class="trian_icon"></i>
                            <div class="iconItems-warp">
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_3" class="ui-radio" data-name="browse" value="browse" id="radio_3_browse" />
                                    <label for="radio_3_browse" class="ui-radio-label"><i class="iconfont icon-browse"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_3" class="ui-radio" data-name="zan" value="zan" id="radio_3_zan" />
                                    <label for="radio_3_zan" class="ui-radio-label"><i class="iconfont icon-zan-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_3" class="ui-radio" data-name="order" value="order" id="radio_3_order" checked />
                                    <label for="radio_3_order" class="ui-radio-label"><i class="iconfont icon-order"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_3" class="ui-radio" data-name="password" value="password" id="radio_3_password" />
                                    <label for="radio_3_password" class="ui-radio-label"><i class="iconfont icon-password-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_3" class="ui-radio" data-name="share" value="share" id="radio_3_share" />
                                    <label for="radio_3_share" class="ui-radio-label"><i class="iconfont icon-share-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_3" class="ui-radio" data-name="settled" value="settled" id="radio_3_settled" />
                                    <label for="radio_3_settled" class="ui-radio-label"><i class="iconfont icon-settled"></i></label>
                                </div>
                            </div>
                            <input type="hidden" name="style_icon[]" value="order">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['num_4']; ?></div>
                    <div class="content">
                        <div class="adv_item"><input type="text" value="" class="text" name="quick_name[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['name']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><input type="text" value="" class="text" name="quick_url[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['link']; ?>" autocomplete="off" ></div>
                        <a href="javascript:void(0);" class="blue" ectype="quickIcon"><?php echo $this->_var['lang']['select_icon']; ?></a>
                    	<div class="iconItems" ectype="iconItems">
                        	<i class="trian_icon"></i>
                            <div class="iconItems-warp">
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_4" class="ui-radio" data-name="browse" value="browse" id="radio_4_browse" />
                                    <label for="radio_4_browse" class="ui-radio-label"><i class="iconfont icon-browse"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_4" class="ui-radio" data-name="zan" value="zan" id="radio_4_zan" />
                                    <label for="radio_4_zan" class="ui-radio-label"><i class="iconfont icon-zan-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_4" class="ui-radio" data-name="order" value="order" id="radio_4_order" />
                                    <label for="radio_4_order" class="ui-radio-label"><i class="iconfont icon-order"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_4" class="ui-radio" data-name="password" value="password" id="radio_4_password" checked />
                                    <label for="radio_4_password" class="ui-radio-label"><i class="iconfont icon-password-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_4" class="ui-radio" data-name="share" value="share" id="radio_4_share" />
                                    <label for="radio_4_share" class="ui-radio-label"><i class="iconfont icon-share-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_4" class="ui-radio" data-name="settled" value="settled" id="radio_4_settled" />
                                    <label for="radio_4_settled" class="ui-radio-label"><i class="iconfont icon-settled"></i></label>
                                </div>
                            </div>
                            <input type="hidden" name="style_icon[]" value="password">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['num_5']; ?></div>
                    <div class="content">
                        <div class="adv_item"><input type="text" value="" class="text" name="quick_name[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['name']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><input type="text" value="" class="text" name="quick_url[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['link']; ?>" autocomplete="off" ></div>
                        <a href="javascript:void(0);" class="blue" ectype="quickIcon"><?php echo $this->_var['lang']['select_icon']; ?></a>
                    	<div class="iconItems" ectype="iconItems">
                        	<i class="trian_icon"></i>
                            <div class="iconItems-warp">
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_5" class="ui-radio" data-name="browse" value="browse" id="radio_5_browse" />
                                    <label for="radio_5_browse" class="ui-radio-label"><i class="iconfont icon-browse"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_5" class="ui-radio" data-name="zan" value="zan" id="radio_5_zan" />
                                    <label for="radio_5_zan" class="ui-radio-label"><i class="iconfont icon-zan-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_5" class="ui-radio" data-name="order" value="order" id="radio_5_order" />
                                    <label for="radio_5_order" class="ui-radio-label"><i class="iconfont icon-order"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_5" class="ui-radio" data-name="password" value="password" id="radio_5_password" />
                                    <label for="radio_5_password" class="ui-radio-label"><i class="iconfont icon-password-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_5" class="ui-radio" data-name="share" value="share" id="radio_5_share" checked />
                                    <label for="radio_5_share" class="ui-radio-label"><i class="iconfont icon-share-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_5" class="ui-radio" data-name="settled" value="settled" id="radio_5_settled" />
                                    <label for="radio_5_settled" class="ui-radio-label"><i class="iconfont icon-settled"></i></label>
                                </div>
                            </div>
                            <input type="hidden" name="style_icon[]" value="share">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="title"><?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['num_6']; ?></div>
                    <div class="content">
                        <div class="adv_item"><input type="text" value="" class="text" name="quick_name[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['name']; ?>" autocomplete="off" /></div>
                        <div class="adv_item"><input type="text" value="" class="text" name="quick_url[]" placeholder="<?php echo $this->_var['lang']['fast_entry']; ?><?php echo $this->_var['lang']['link']; ?>" autocomplete="off" ></div>
                        <a href="javascript:void(0);" class="blue" ectype="quickIcon"><?php echo $this->_var['lang']['select_icon']; ?></a>
                    	<div class="iconItems" ectype="iconItems">
                        	<i class="trian_icon"></i>
                            <div class="iconItems-warp">
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_6" class="ui-radio" data-name="browse" value="browse" id="radio_6_browse" />
                                    <label for="radio_6_browse" class="ui-radio-label"><i class="iconfont icon-browse"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_6" class="ui-radio" data-name="zan" value="zan" id="radio_6_zan" />
                                    <label for="radio_6_zan" class="ui-radio-label"><i class="iconfont icon-zan-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_6" class="ui-radio" data-name="order" value="order" id="radio_6_order" />
                                    <label for="radio_6_order" class="ui-radio-label"><i class="iconfont icon-order"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_6" class="ui-radio" data-name="password" value="password" id="radio_6_password" />
                                    <label for="radio_6_password" class="ui-radio-label"><i class="iconfont icon-password-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_6" class="ui-radio" data-name="share" value="share" id="radio_6_share" />
                                    <label for="radio_6_share" class="ui-radio-label"><i class="iconfont icon-share-alt"></i></label>
                                </div>
                                <div class="iconItem">
                                    <input type="radio" name="style_icon_6" class="ui-radio" data-name="settled" value="settled" id="radio_6_settled" checked />
                                    <label for="radio_6_settled" class="ui-radio-label"><i class="iconfont icon-settled"></i></label>
                                </div>
                            </div>
                            <input type="hidden" name="style_icon[]" value="settled">
                        </div>
                    </div>
                </div>
                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
    </div>
    <input type="hidden" name="suffix" value="<?php echo $this->_var['suffix']; ?>">
</div>
<?php endif; ?>

<?php if ($this->_var['temp'] == 'nav_mode'): ?>
<div class="tishi">
	<p class="first"><?php echo $this->_var['lang']['note_getcat_atr_1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['pagetip_shop_banner_nav_mode']; ?></p>
</div>
<div class="tab">
	<ul class="clearfix">
    	<li class="current"><?php echo $this->_var['lang']['setup_content']; ?></li>
    </ul>
</div>
<div class="modal-body">
	<div class="body_info">
    	<div class="ov_list ps_table">
            <form action="" id="navInsert" method="post"  enctype="multipart/form-data"  runat="server" >
                <table class="table" data-table="navtable">
                    <thead>
                        <tr>
                            <th width="25%"><?php echo $this->_var['lang']['cate_name']; ?></th>
                            <th width="24%"><?php echo $this->_var['lang']['link_address']; ?></th>
                            <th width="10%" class="center"><?php echo $this->_var['lang']['sort_order']; ?></th>
                            <th width="20%" class="center"><?php echo $this->_var['lang']['handler']; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_from = $this->_var['navigator']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'navigator');if (count($_from)):
    foreach ($_from AS $this->_var['navigator']):
?>
                        <tr>
                            <td><input type="text"name='navname[]' value="<?php echo $this->_var['navigator']['name']; ?>"></td>
                            <td><input type="text" name='navurl[]' value="<?php echo $this->_var['navigator']['url']; ?>"></td>
                            <td class="center"><input type="text" name='navvieworder[]' class="small" value="<?php echo $this->_var['navigator']['vieworder']; ?>"></td>

                            <td class="center"><a href="javascript:void(0);" onclick="remove_topicnav(this)" class="pic_del del"><?php echo $this->_var['lang']['drop']; ?></a></td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr class="notic">
                            <td colspan="4"><?php echo $this->_var['lang']['now_no_custom_cate_click_add']; ?></td>
                        </tr>
                        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </tbody>
                </table>
                <input type="hidden" name="mode" value="<?php echo $this->_var['temp']; ?>" />
            </form>
        </div>
        <div class="addCatagory tfoot_btninfo">
            <div class="imitate_select select_w120 <?php if ($this->_var['topic_type'] > 0): ?>hide<?php endif; ?>" id='catagory_type_nav'>
                <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>		
                <ul style="display: none;" class="ps-container">
                    <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                    <li><a href="javascript:;" data-value="1"  class="ftx-01"><?php echo $this->_var['lang']['custom_cate']; ?></a></li>
                    <li><a href="javascript:;" data-value="2"  class="ftx-01"><?php echo $this->_var['lang']['system_cate']; ?></a></li>
                </ul>
                <input name="" type="hidden" value="" id='catagory_type_nav_val'>
            </div>
            <input type="text" name="custom_catagory" class="text" />
            <div class="imitate_select select_w220 hide" id='system'>
                <div class="cite"><?php echo $this->_var['lang']['please_select_system_cate']; ?></div>		
                <ul style="display: none;" class="ps-container">
                    <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['please_select_system_cate']; ?></a></li>
                    <?php $_from = $this->_var['system']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'system');if (count($_from)):
    foreach ($_from AS $this->_var['system']):
?>
                    <li><a href="javascript:;" ectype="system_<?php echo $this->_var['system']['id']; ?>" data-value="<?php echo $this->_var['system']['id']; ?>" data-url="<?php echo $this->_var['system']['url']; ?>" data-vieworder="<?php echo $this->_var['system']['vieworder']; ?>" class="ftx-01"><?php echo $this->_var['system']['name']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <input name="system" type="hidden" value="">
            </div>
            <a href="javascript:void(0);" class="btn"><?php echo $this->_var['lang']['add_new_cate']; ?></a>
        </div>
    </div>

</div>
<script type="text/javascript">
        $.divselect("#catagory_type_nav","#catagory_type_nav_val",function(obj){
            var val = $(obj).data('value');
            if(val == 2){
                $("input[name='custom_catagory']").hide();
                $("#system").show();
            }else{
                $("input[name='custom_catagory']").show();
                $("#system").hide();
            }
        });
	var navColor = $(".navColor").val();
	$(".navColor").spectrum({
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		showInput: true,
		color: navColor,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		palette: [
			["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
			"rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
			["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
			"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
			["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
			"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
			"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
			"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
			"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
			"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
			"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
			"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
			"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
			"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
		]
	});
        function remove_topicnav(obj){
            $(obj).parents('tr').remove();
        }
	$(".sp-choose").click(function(){
		var val = $(this).parents(".sp-picker-container").find(".sp-input").val();
		$(".navColor").val(val);
	});

	$(".body_info").on("click",".addCatagory .btn",function(){
		var tbody = $(this).parents(".body_info").find("tbody");
		var nav_name = '',
                    navurl = '',
                    navvieworder = '',
                    catagory_type = $("#catagory_type_nav_val").val();
		if(tbody.find(".notic").length>0){
			tbody.find(".notic").remove();
		}
                if(catagory_type == 2){
                    var system = $('input[name="system"]').val();
                    var obj = $("[ectype='system_" + system +"']");
                    nav_name = obj.html();
                    navurl = obj.data('url');
                    navvieworder = obj.data('vieworder');
                }else{
                    nav_name = $("input[name='custom_catagory']").val();
                }
		
                var html = '';
                if(nav_name){
                    html += '<tr><td><input type="text" value="' +nav_name+ '" name="navname[]"></td>';
                    html += '<td><input type="text" value="' + navurl +'" name="navurl[]"></td>';
                    html += '<td class="center"><input type="text" class="small" value="' + navvieworder +'" name="navvieworder[]"></td>';
                    html += '<td class="center"><a href="javascript:void(0);" onclick="remove_topicnav(this)" class="pic_del del"><?php echo $this->_var['lang']['drop']; ?></a></td></tr>';
                    tbody.append(html)
                }else{
                    alert(jl_cate_no_empty);
                }
               
	});
</script>
<?php endif; ?>

<?php if ($this->_var['temp'] == 'h-promo' || $this->_var['temp'] == 'h-sepmodule' || $this->_var['temp'] == 'h-seckill'): ?>
<?php if ($this->_var['temp'] == 'h-seckill111'): ?>
<div class="tishi">
	<div class="tishi_info">
        <p class="first"><?php echo $this->_var['lang']['pagetip_shop_banner_h_seckill_1']; ?></p>
        <p><?php echo $this->_var['lang']['pagetip_shop_banner_h_seckill_2']; ?></p>
        <i class="icon"></i>
    </div>
</div>
<?php endif; ?>
<form action="" id="<?php echo $this->_var['temp']; ?>Insert" method="post"  enctype="multipart/form-data"  runat="server" >
    <?php if ($this->_var['activity_dialog'] != 1): ?>
    <div class="tab">
        <ul class="clearfix">
            <li class="current"><?php echo $this->_var['lang']['setup_content']; ?></li>
            <li><?php echo $this->_var['lang']['setup_display']; ?></li>
        </ul>
    </div>
    <?php endif; ?>
    <div class="modal-body">
        <div class="body_info floor_info">
        	<?php if ($this->_var['temp'] == 'h-sepmodule'): ?>
            <div class="sepItem">
                <div class="label"><?php echo $this->_var['lang']['label_activity_type']; ?></div>
                <div class="checkbox_items">
                    <?php if ($this->_var['activity_dialog'] == 1): ?>
                    <div class="checkbox_item"> 
                        <input name="PromotionType" type="radio" class="ui-radio" value="is_new" ectype='PromotionType' id="PromotionType6"<?php if ($this->_var['spec_attr']['PromotionType'] == 'is_new'): ?> checked="checked"<?php endif; ?>>
                        <label for="PromotionType6" class="ui-radio-label"><?php echo $this->_var['lang']['new']; ?></label>
                    </div>
                    <div class="checkbox_item"> 
                        <input name="PromotionType" type="radio" class="ui-radio" value="is_best" ectype='PromotionType' id="PromotionType7"<?php if ($this->_var['spec_attr']['PromotionType'] == 'is_best'): ?> checked="checked"<?php endif; ?>>
                        <label for="PromotionType7" class="ui-radio-label"><?php echo $this->_var['lang']['boutique']; ?></label>
                    </div>
                    <div class="checkbox_item"> 
                        <input name="PromotionType" type="radio" class="ui-radio" value="is_hot" ectype='PromotionType' id="PromotionType8"<?php if ($this->_var['spec_attr']['PromotionType'] == 'is_hot'): ?> checked="checked"<?php endif; ?>>
                        <label for="PromotionType8" class="ui-radio-label"><?php echo $this->_var['lang']['hot']; ?></label>
                    </div>
                    <?php endif; ?>
                    <div class="checkbox_item"> 
                        <input name="PromotionType" type="radio" class="ui-radio" value="snatch" ectype='PromotionType' id="PromotionType1"<?php if ($this->_var['spec_attr']['PromotionType'] == 'snatch' || ! $this->_var['spec_attr']['PromotionType']): ?> checked="checked"<?php endif; ?>>
                        <label for="PromotionType1" class="ui-radio-label"><?php echo $this->_var['lang']['02_snatch_list']; ?></label>
                    </div>
                    <div class="checkbox_item"> 
                        <input name="PromotionType" type="radio" class="ui-radio" value="auction" ectype='PromotionType' id="PromotionType2"<?php if ($this->_var['spec_attr']['PromotionType'] == 'auction'): ?> checked="checked"<?php endif; ?>>
                        <label for="PromotionType2" class="ui-radio-label"><?php echo $this->_var['lang']['10_auction']; ?></label>
                    </div>
                    <div class="checkbox_item"> 
                        <input name="PromotionType" type="radio" class="ui-radio" value="group_buy" ectype='PromotionType' id="PromotionType3"<?php if ($this->_var['spec_attr']['PromotionType'] == 'group_buy'): ?> checked="checked"<?php endif; ?>>
                        <label for="PromotionType3" class="ui-radio-label"><?php echo $this->_var['lang']['08_group_buy']; ?></label>
                    </div>
                    <div class="checkbox_item"> 
                        <input name="PromotionType" type="radio" class="ui-radio" value="exchange" ectype='PromotionType' id="PromotionType4"<?php if ($this->_var['spec_attr']['PromotionType'] == 'exchange'): ?> checked="checked"<?php endif; ?>>
                        <label for="PromotionType4" class="ui-radio-label"><?php echo $this->_var['lang']['integral_mall']; ?></label>
                    </div>
                    <div class="checkbox_item"> 
                        <input name="PromotionType" type="radio" class="ui-radio" value="presale" ectype='PromotionType' id="PromotionType5"<?php if ($this->_var['spec_attr']['PromotionType'] == 'presale'): ?> checked="checked"<?php endif; ?>>
                        <label for="PromotionType5" class="ui-radio-label"><?php echo $this->_var['lang']['16_presale']; ?></label>
                    </div>
                    
                </div>
            </div>
            <?php endif; ?>
            <?php if ($this->_var['temp'] == 'h-seckill'): ?>
            <div class="sepItem">
                <div class="label"><?php echo $this->_var['lang']['label_seckill_time_block']; ?></div>
                <div class="checkbox_items">
                    <?php $_from = $this->_var['seckill_time_bucket']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'data');$this->_foreach['day'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['day']['total'] > 0):
    foreach ($_from AS $this->_var['data']):
        $this->_foreach['day']['iteration']++;
?>
                    <div class="checkbox_item"> 
                        <input name="time_bucket" type="radio" class="ui-radio" value="<?php echo $this->_var['data']['id']; ?>" ectype='time_bucket' id="time_bucket_<?php echo $this->_foreach['day']['iteration']; ?>" <?php if ($this->_var['time_bucket'] > 0): ?><?php if ($this->_var['time_bucket'] == $this->_var['data']['id']): ?>checked="checked"<?php endif; ?><?php else: ?><?php if (! $this->_var['data']['is_end'] && $this->_var['data']['status']): ?> checked="checked"<?php endif; ?><?php endif; ?>>
                        <label for="time_bucket_<?php echo $this->_foreach['day']['iteration']; ?>" class="ui-radio-label"><?php echo $this->_var['data']['title']; ?></label>
                    </div>
                    <input type="hidden" name="goods_ids[<?php echo $this->_var['data']['id']; ?>]" value="<?php echo $this->_var['data']['goods_ids']; ?>"/>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="search">
                <div class="select_box mr10">
                    <div class="categorySelect fl">
                        <div class="selection">
                            <input type="text" name="category_name" id="category_name" class="text w250 mr0 valid" value="<?php if ($this->_var['parent_category']): ?><?php echo $this->_var['parent_category']; ?><?php else: ?><?php echo $this->_var['lang']['category_top']; ?><?php endif; ?>" autocomplete="off" readonly data-filter="cat_name" />
                            <input type="hidden" name="cat_id" id="category_id" value="<?php echo empty($this->_var['cat_id']) ? '0' : $this->_var['cat_id']; ?>" data-filter="cat_id" />
                        </div>
                        <div class="select-container" style="display:none;">
                            <?php echo $this->fetch('library/filter_category.lbi'); ?>
                        </div>
                    </div>
                </div>
				<div class="select_box mr10">
					<div class="categorySelect fl">
						<div class="selection">
							<input type="text" name="brand_name" id="brand_name" class="text w120 mr0 valid" value="<?php echo $this->_var['lang']['select_barnd']; ?>" autocomplete="off" readonly data-filter="brand_name" />
							<input type="hidden" name="brand_id" id="brand_id" value="<?php echo empty($this->_var['brand_id']) ? '0' : $this->_var['brand_id']; ?>" data-filter="brand_id" />
						</div>
						<div class="brand-select-container" style="display:none;">
							<?php echo $this->fetch('library/filter_brand.lbi'); ?>
						</div>
					</div>  
				</div>
                <div class="search_con mr10"><input width="20" name="keyword_brand" type="text" id="keyword_brand" class="text text_6 mr0"></div>
                <a href="javascript:void(0);" class="btn fl" ectype="changedgoods"><?php echo $this->_var['lang']['button_submit_alt']; ?></a>
                <div class="checkobx-item">
                    <input type="checkbox" name="is_selected" id="is_selected" class="ui-checkbox" onclick="checkd_selected(this)"/>
                    <label class="ui-label" for="is_selected"><?php echo $this->_var['lang']['selected_goods']; ?></label>
                </div>
            </div>
            <div class="table_list" ectype='goods_list'>
                <div class="gallery_album" data-act="changedpromotegoods" data-goods='1' data-inid="goods_list" data-url='dialog.php' data-where="type=1">
                    <ul class="ga-goods-ul" id="goods_list">
                        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['gl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gl']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['gl']['iteration']++;
?>
                        <li class="<?php if ($this->_var['goods']['is_selected'] == 1): ?>on<?php endif; ?>">
                            <div class="img"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></div>
                            <div class="name"><?php echo $this->_var['goods']['goods_name']; ?></div>
                            <div class="price"><?php if ($this->_var['spec_attr']['PromotionType'] == 'exchange'): ?><?php echo $this->_var['goods']['exchange_integral']; ?><?php else: ?><?php if ($this->_var['goods']['promote_price'] != ''): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?><?php endif; ?></div>
                            <div class="choose">
                                <a href="javascript:void(0);" class="<?php if ($this->_var['goods']['is_selected'] == 1): ?> on<?php endif; ?>" onclick="selected_goods(this,'<?php echo $this->_var['goods']['goods_id']; ?>')">
                                   <i class="iconfont <?php if ($this->_var['goods']['is_selected'] == 1): ?>icon-gou<?php else: ?>icon-dsc-plus<?php endif; ?>"></i><?php if ($this->_var['goods']['is_selected'] == 1): ?><?php echo $this->_var['lang']['selected']; ?><?php else: ?><?php echo $this->_var['lang']['btn_select']; ?><?php endif; ?>
                                </a>
                                <?php if ($this->_var['temp'] == 'h-sepmodule' && $this->_var['activity_dialog'] != 1): ?>
                                <div class="checkbox_item"> 
                                    <input name="recommend" type="radio" class="ui-radio" value="<?php echo $this->_var['goods']['goods_id']; ?>" id="recommend<?php echo $this->_var['goods']['goods_id']; ?>"<?php if ($this->_var['spec_attr']['recommend'] == $this->_var['goods']['goods_id']): ?> checked="checked"<?php endif; ?>>
                                    <label for="recommend<?php echo $this->_var['goods']['goods_id']; ?>" class="ui-radio-label-shou"><i class="iconfont icon-thumb"></i><?php echo $this->_var['lang']['main_push']; ?></label>
                                </div>
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endforeach; else: ?>
                        <li class="notic"><?php echo $this->_var['lang']['please_search_goods']; ?></li>
                        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                    <div class="clear"></div>
                    <?php echo $this->fetch('library/lib_page.lbi'); ?>
                </div>
            </div>
        </div>
        <div class="body_info floor_info" style="display:none;">
            <div class="control_list">
                <?php if ($this->_var['temp'] != 'h-seckill'): ?>
                <div class="tit_head mb10">
                    <div class="control_item">
                        <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_main_push_bg_color']; ?></div>
                        <div class="control_value">
                            <input type="text" name="navColor" class="navColor" value="<?php if ($this->_var['temp'] == 'h-promo'): ?><?php if ($this->_var['spec_attr']['navColor']): ?><?php echo $this->_var['spec_attr']['navColor']; ?><?php else: ?>#ed5f5f<?php endif; ?><?php elseif ($this->_var['temp'] == 'h-sepmodule'): ?><?php if ($this->_var['spec_attr']['navColor']): ?><?php echo $this->_var['spec_attr']['navColor']; ?><?php else: ?>#9893f4<?php endif; ?><?php endif; ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="tit_head mb10">
                    <div class="control_item">
                        <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_main_title']; ?></div>
                        <div class="control_value"><input name="title" type="text" class="text text2" size="25" value="<?php echo $this->_var['spec_attr']['title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['please_input_title_in_set']; ?>"></div>
                    </div>
                </div>
                <div class="tit_head mb10">
                     <div class="control_item">
                        <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_subtitle']; ?></div>
                        <div class="control_value"><input name="subtitle" type="text" class="text text2" size="25" value="<?php echo $this->_var['spec_attr']['subtitle']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['please_input_subtitle_in_set']; ?>"></div>
                    </div>
                </div>
                <?php if ($this->_var['hierarchy'] != '2'): ?>
                <div class="tit_head mb10">
                    <div class="control_item">
                        <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_module_name']; ?></div>
                        <div class="control_value"><input name="lift" type="text" class="text text2" size="25" value="<?php echo $this->_var['lift']; ?>" placeholder="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['pleas_input_lift_title_in_set']; ?>"><div class="notic"><?php echo $this->_var['lang']['module_name_limit_2_4']; ?></div></div>
                    </div>
                </div>
                <?php endif; ?>
            </div>    
        </div>
        <?php if ($this->_var['temp'] != 'h-seckill'): ?>
        <input type="hidden" name="goods_ids" value="<?php echo $this->_var['spec_attr']['goods_ids']; ?>"/>
        <?php endif; ?>
        <input type="hidden" name="hierarchy" value="<?php echo $this->_var['hierarchy']; ?>">
        <input type="hidden" name="mode" value="<?php echo $this->_var['temp']; ?>" ectype="dialog_mode">
        <input type="hidden" name="suffix" value="<?php echo $this->_var['suffix']; ?>">
        <input type="hidden" name="activity_dialog" value="<?php echo $this->_var['activity_dialog']; ?>">
    </div>
</form>
<script type="text/javascript" src="js/dsc_admin2.0.js"></script>
<script type="text/javascript">
    $(function(){
        var PromotionType = "<?php echo $this->_var['spec_attr']['PromotionType']; ?>";
        if(!PromotionType){
            ajaxchangedgoods(1);
        }
    });
     checkd_selected($("#is_selected"));
    function checkd_selected(obj){
		var obj = $(obj);
		var is_selected =$("input[name='is_selected']").is(':checked');
		var length = obj.parents(".floor_info").find(".table_list li.on").length;
		var type = 1;
        if(is_selected == true){
            $(".icon-gou").parents('li').show();
			$(".icon-dsc-plus").parents('li').hide();
			
			if(length < 6){
				$("*[ectype='goods_list']").perfectScrollbar("destroy");
			}
            type = 0;
        }else{
            $(".icon-gou,.icon-dsc-plus").parents('li').show();
			$("*[ectype='goods_list']").perfectScrollbar();
        }
        ajaxchangedgoods(type);
    }
    function ajaxchangedgoods(type){
        var temp = "<?php echo $this->_var['temp']; ?>";
        var where = '';
        var goods_ids = '';
        if(temp == 'h-sepmodule'){
            var PromotionType = $("input[name='PromotionType']:checked").val();
            var recommend = $("input[name='recommend']:checked").val();
            var activity_dialog = $("input[name='activity_dialog']").val();
            where = "&PromotionType="+PromotionType + "&recommend=" + recommend + "&activity_dialog=" + activity_dialog;
        }else if(temp == 'h-seckill'){
            var time_bucket = $("input[name='time_bucket']:checked").val();
            if(time_bucket == '' || typeof time_bucket == 'undefined'){
                time_bucket = "-1";
            }else{
                goods_ids = $("input[name='goods_ids[" + time_bucket + "]']").val();
            }
            where = "&time_bucket=" + time_bucket;
        }
        var cat_id = $("input[name='cat_id']").val();
		var brand_id = $("input[name='brand_id']").val();
        var keyword = $("input[name='keyword_brand']").val();
        if(temp != 'h-seckill'){
            goods_ids = $("input[name='goods_ids']").val();
        }
		
		$("[ectype='goods_list']").html("<i class='icon-spin'><img src='images/visual/load.gif' width='30' height='30'></i>");
       
	    function ajax(){
			Ajax.call('dialog.php?is_ajax=1&act=changedpromotegoods', "cat_id="+cat_id+"&keyword="+keyword+"&goods_ids="+goods_ids+"&type="+type  + "&brand_id="+brand_id + where + "&temp=" + temp, function(data){
				$("[ectype='goods_list']").html(data.content);
				
				$("*[ectype='goods_list']").perfectScrollbar("destroy");
				$("*[ectype='goods_list']").perfectScrollbar();
			} , 'POST', 'JSON');
		}
		
		setTimeout(function(){ajax()},300);
    }

	//选中商品
	function selected_goods(obj,goods_id){
                var mode = "<?php echo $this->_var['temp']; ?>",
                    obj = $(obj),
		    arr = '',
                    goods_ids = '',
                    time_bucket = '';
		if(mode == 'h-seckill'){
                    time_bucket = $("input[name='time_bucket']:checked").val();
                   if(time_bucket == '' || typeof time_bucket == 'undefined'){
                       goods_ids = '';
                   }else{
                       goods_ids = $("input[name='goods_ids[" + time_bucket + "]']").val();
                   }
                }else{
                    goods_ids = $("input[name='goods_ids']").val();
                }
                var verinumber = true;
		if(obj.hasClass("on")){
			obj.removeClass("on");
			obj.html('<i class="iconfont icon-dsc-plus"></i>'+js_select);
			arr = goods_ids.split(',');
			for(var i =0;i<arr.length;i++){
				if(arr[i] == goods_id){
					 arr.splice(i,1);
				}
			}
		}else{
                    var length = 5;
                    var activity_dialog = "<?php echo $this->_var['activity_dialog']; ?>";
                    if(activity_dialog == 1){
                        length = 6;
                    }
                    if(mode == 'h-sepmodule'){
                        arr = goods_ids.split(',');
                        if(arr.length >= length){
                            alert(jl_module_max_add + length + jl_ge_goods);
                            verinumber = false;
                        }
                    }
                    if(verinumber){
                        $(obj).addClass('on');
			$(obj).html('<i class="iconfont icon-gou"></i>'+js_selected);
			if(goods_ids){
					arr = goods_ids + ','+goods_id;
			}else{
					arr = goods_id;
			}
                    }
			
		}
                if(verinumber){
                    if(mode == 'h-seckill'){
                        $("input[name='goods_ids[" + time_bucket + "]']").val(arr);
                    }else{
                        $("input[name='goods_ids']").val(arr);
                    }
                    
                }
	}
	
	$("input[name='is_title']").on("click",function(){
		var val = $(this).val();
		if(val == 1){
			$(this).parents(".control_list").find(".tit_head").show();
		}else{
			$(this).parents(".control_list").find(".tit_head").hide();
		}
	});
    var navColor = $(".navColor").val();
	$(".navColor").spectrum({
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		showInput: true,
		color: navColor,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		palette: [
			["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
			"rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
			["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
			"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
			["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
			"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
			"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
			"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
			"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
			"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
			"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
			"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
			"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
			"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
		]
	});
	$(".sp-choose").click(function(){
		var val = $(this).parents(".sp-picker-container").find(".sp-input").val();
		$(".navColor").val(val);
	});
</script>
<?php endif; ?>

<?php if ($this->_var['temp'] == 'fh-haohuo'): ?>
<form action="" id="<?php echo $this->_var['temp']; ?>Insert" method="post" enctype="multipart/form-data" runat="server">
    <div class="tab">
        <ul class="clearfix">
            <li class="current"><?php echo $this->_var['lang']['setup_content']; ?></li>
            <li><?php echo $this->_var['lang']['setup_display']; ?></li>
        </ul>
    </div>
    <div class="modal-body">
        <div class="body_info" id="banner_info">
            <div class="ps_table">
                <table id="addpictable" class="table">
                    <thead>
                        <tr>
                            <th><?php echo $this->_var['lang']['imgage']; ?></th>
                            <?php if ($this->_var['uploadImage'] != 1): ?>
                            <th><?php echo $this->_var['lang']['image_link']; ?></th>
                            <th class="center"><?php echo $this->_var['lang']['sort_order']; ?></th>
                            <?php if ($this->_var['mode'] == 'lunbo'): ?>
                            <th class="center"><?php echo $this->_var['lang']['background_color']; ?></th>
                            <?php endif; ?>
                            <?php endif; ?>
                            <?php if ($this->_var['titleup'] == 1 || $this->_var['mode'] == 'fh-pindao'): ?>
                            <th class="center"><?php echo $this->_var['lang']['main_title']; ?></th>
                            <th class="center"><?php echo $this->_var['lang']['sub_title']; ?></th>
                            <?php elseif ($this->_var['titleup'] == 2): ?>
                            <th class="center"><?php echo $this->_var['lang']['description']; ?></th>
                            <?php endif; ?>
                            <th class="center"><?php echo $this->_var['lang']['handler']; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_from = $this->_var['banner_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['item']):
?>
                            <tr>
                                <td>
                                    <div class="img">
                                        <span><img src="<?php echo $this->_var['item']['pic_src']; ?>"></span>
                                        <input type="hidden" name="pic_src[]" value="<?php echo $this->_var['item']['pic_src']; ?>"/>
                                    </div>
                                </td>
                                <?php if ($this->_var['uploadImage'] != 1): ?>
                                <td>
                                    <input type="text" name="link[]" value="<?php echo $this->_var['item']['link']; ?>" class="form-control">
                                </td>
                                <td class="center">
                                    <input type="text" value="<?php echo $this->_var['item']['sort']; ?>" name="sort[]" class="form-control small">
                                </td>
                                <?php if ($this->_var['mode'] == 'lunbo'): ?>
                                <td class="center">
                                    <input type="text" value="<?php echo $this->_var['item']['bg_color']; ?>" name="bg_color[]" class="form-control small">
                                </td>
                                <?php endif; ?>
                                <?php endif; ?>
                                <?php if ($this->_var['titleup'] == 1 || $this->_var['titleup'] == 2 || $this->_var['mode'] == 'fh-pindao'): ?>
                                <td class="center">
                                    <input type="text" value="<?php echo $this->_var['item']['title']; ?>" name="title[]" class="form-control small">
                                </td>
                                <?php if ($this->_var['titleup'] == 1 || $this->_var['mode'] == 'fh-pindao'): ?>
                                <td class="center">
                                    <input type="text" value="<?php echo $this->_var['item']['subtitle']; ?>" name="subtitle[]" class="form-control small">
                                </td>
                                <?php endif; ?>
                                <?php endif; ?>
                                <td class="center">
                                    <a href="javascript:;" class="pic_del del"><?php echo $this->_var['lang']['drop']; ?></a>
                                </td>
                            </tr>
                        <?php endforeach; else: ?>
                            <tr class="notic">
                                <td colspan="10"><?php echo $this->_var['lang']['click_empty_or_upload_btn']; ?></td>
                            </tr>    
                        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </tbody>
                </table>
            </div>
            <div class="images_space">
                <div class="goods_gallery mt20" ectype="album-warp">
                    <div class="nav">
                        <form action="" id="gallery_pic" method="post" enctype="multipart/form-data"  runat="server">
                            <div class="fl" ectype="albumFilter">
                                <div class="imitate_select select_w220" id="album_id">
                                    <div class="cite"><?php echo $this->_var['lang']['please_select_album']; ?></div>		
                                    <ul style="display: none;" class="ps-container" ectype="album_list_check">
                                        <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                        <?php $_from = $this->_var['cat_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                        <li><a href="javascript:;" data-value="<?php echo $this->_var['list']['album_id']; ?>" class="ftx-01"><?php echo $this->_var['list']['name']; ?></a></li>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                    <input name="album_id" type="hidden" value="<?php echo $this->_var['album_id']; ?>" id="album_id_val">
                                </div>
                                <div class="imitate_select select_w220" id="sort_name">
                                    <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                    <ul style="display: none;" class="ps-container">
                                        <li><a href="javascript:;" data-value="2" class="ftx-01"><?php echo $this->_var['lang']['sort_update_desc']; ?></a></li>
                                        <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['sort_update_asc']; ?></a></li>
                                        <li><a href="javascript:;" data-value="3" class="ftx-01"><?php echo $this->_var['lang']['sort_picsize_asc']; ?></a></li>
                                        <li><a href="javascript:;" data-value="4" class="ftx-01"><?php echo $this->_var['lang']['sort_picsize_desc']; ?></a></li>
                                        <li><a href="javascript:;" data-value="5" class="ftx-01"><?php echo $this->_var['lang']['sort_picname_asc']; ?></a></li>
                                        <li><a href="javascript:;" data-value="6" class="ftx-01"><?php echo $this->_var['lang']['sort_picname_desc']; ?></a></li>
                                    </ul>
                                    <input name="sort_name" type="hidden" value="2" id="sort_name_val">
                                </div>
                            </div>
                            <div class="updata_btn">
                                <a href="javascript:void(0);" class="btn30 sc-btn red_btn"><?php echo $this->_var['lang']['upload_image']; ?><input name="file" type="file"></a>
                                <a href="javascript:void(0);" class="btn30 sc-btn red_btn" ectype="add_album"><?php echo $this->_var['lang']['add_album']; ?></a>
                            </div>
                        </form>
                    </div>
                    
                    <div class="table_list" ectype='pic_list'>
                        <div class="gallery_album" data-act="get_albun_pic" data-inid="pic_list" data-url='get_ajax_content.php' data-where="sort_name=<?php echo $this->_var['filter']['sort_name']; ?>&album_id=<?php echo $this->_var['filter']['album_id']; ?>">
                            <ul class="ga-images-ul">
                                <?php $_from = $this->_var['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pic_list_0_63514900_1589783468');if (count($_from)):
    foreach ($_from AS $this->_var['pic_list_0_63514900_1589783468']):
?>
                                <li><a href="javascript:;" onclick="addpic('<?php echo $this->_var['pic_list_0_63514900_1589783468']['pic_file']; ?>',this)"><img src="<?php echo $this->_var['pic_list_0_63514900_1589783468']['pic_file']; ?>"><span class="pixel"><?php echo $this->_var['pic_list_0_63514900_1589783468']['pic_spec']; ?></span></a></li>
                                <?php endforeach; else: ?>
                                <li class="notic"><?php echo $this->_var['lang']['no_image']; ?></li>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                            <div class="clear"></div>
                            <?php echo $this->fetch('library/lib_page.lbi'); ?>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
        
        <div class="body_info floor_info" style="display:none;">
        	<div class="control_list">
            	<div class="control_item">
                    <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_main_title']; ?></div>
                    <div class="control_value"><input name="title" type="text" class="text text2" size="25" value="<?php echo $this->_var['spec_attr']['title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['please_input_title_in_set']; ?>"></div>
                </div>
            	<div class="control_item">
                    <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_subtitle']; ?></div>
                    <div class="control_value"><input name="subtitle" type="text" class="text text2" size="25" value="<?php echo $this->_var['spec_attr']['subtitle']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['please_input_subtitle_in_set']; ?>"></div>
                </div>
                <div class="tit_head mb10">
                    <div class="control_item">
                        <div class="control_text"><em class="red">*</em><?php echo $this->_var['lang']['label_module_name']; ?></div>
                        <div class="control_value"><input name="lift" type="text" class="text text2" size="25" value="<?php echo $this->_var['lift']; ?>" placeholder="<?php echo $this->_var['lang']['pleas_input_lift_title']; ?>" ectype="required" data-msg="<?php echo $this->_var['lang']['pleas_input_lift_title_in_set']; ?>"><div class="notic"><?php echo $this->_var['lang']['module_name_limit_2_4']; ?></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</form>
<script type="text/javascript">
    $.divselect("#album_id","#album_id_val",function(obj){
        var val = obj.attr("data-value");
        changedpic(val,obj,0);
    });
	
    $.divselect("#sort_name","#sort_name_val",function(obj){
		 var sort = obj.attr("data-value");
        changedpic(0,obj,0,sort);
    });
    
	$("input[name='file']").change(function(){
		var album_id = $("input[name='album_id']").val();
		if(album_id > 0){
			var actionUrl = "gallery_album.php?act=upload_pic";
			$("#gallery_pic").ajaxSubmit({
				type: "POST",
				dataType: "json",
				url: actionUrl,
				data: {"action": "TemporaryImage"},
				success: function (data) {
					if (data.error == "1") {
						alert(data.massege);
					}else{
						changedpic(0);
					}
				},
				async: true
			});
		}else{
			alert(jl_please_select_album);
		}
	});
	
	function addpic(src,obj){
		var i = 0;
		var mode = "<?php echo $this->_var['mode']; ?>";
		var length = "<?php echo $this->_var['pic_number']; ?>";
		var uploadImage = "<?php echo $this->_var['uploadImage']; ?>";
		var titleup = "<?php echo $this->_var['titleup']; ?>";
		var id = $(obj).parents(".pb").attr("id");
		
		$("#addpictable").find('tr').each(function(){
			i++
		});
		
		if($("#addpictable").find('tr.notic').length>0){
			i-=1;
		}

		if( length< i  && length != 0){
			alert(jl_module_max_add+length+jl_ge_image);
		}else{
			if(mode != "lunbo"){
				if(uploadImage == 1){
					var html = '<tr><td><div class="img"><span><img src="'+src+'"></span><input type="hidden" name="pic_src[]" value="'+src+'"/></div></td><td class="center"><a href="javascript:;" class="pic_del del"><?php echo $this->_var['lang']['drop']; ?></a></td></tr>';
				}else{
					var title = '';
					if(titleup == 1 || mode == 'fh-pindao'){
						title = '<td class="center"><input type="text" value="" name="title[]" class="form-control small"></td><td class="center"> <input type="text" value="" name="subtitle[]" class="form-control small"></td>';
					}else if(titleup == 2){
						title = '<td class="center"><input type="text" value="" name="title[]" class="form-control small"></td>';
					}
					var html = '<tr><td><div class="img"><span><img src="'+src+'"></span><input type="hidden" name="pic_src[]" value="'+src+'"/></div></td><td><input type="text" name="link[]" class="form-control"></td><td class="center"><input type="text" value="1" name="sort[]" class="form-control small"></td>' + title + '<td class="center"><a href="javascript:;" class="pic_del del"><?php echo $this->_var['lang']['drop']; ?></a></td></tr>';
				}
			}else{
				var html = '<tr><td><div class="img"><span><img src="'+src+'"></span><input type="hidden" name="pic_src[]" value="'+src+'"/></div></td><td><input type="text" name="link[]" class="form-control"></td><td class="center"><input type="text" value="1" name="sort[]" class="form-control small"></td><td class="center"><input type="text" value="" name="bg_color[]" class="form-control small"></td><td class="center"><a href="javascript:;" class="pic_del del"><?php echo $this->_var['lang']['drop']; ?></a></td></tr>';
			}
			
			if($("#addpictable").find(".notic").length>0){
				$("#addpictable").find(".notic").remove();
			}
			$("#addpictable").find("tbody").prepend(html);
		}
		pbct("#"+id);
	}
	
    <?php if ($this->_var['mode'] == 'topBanner'): ?>
    var navColor = $(".navColor").val();
	$(".navColor").spectrum({
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		showInput: true,
		color: navColor,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		palette: [
			["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
			"rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
			["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
			"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
			["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
			"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
			"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
			"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
			"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
			"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
			"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
			"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
			"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
			"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
		]
	});
	$(".sp-choose").click(function(){
		var val = $(this).parents(".sp-picker-container").find(".sp-input").val();
		$(".navColor").val(val);
	});
    <?php endif; ?>
	
	$("input[name='is_title']").on("click",function(){
		var val = $(this).val();
		if(val == 1){
			$(this).parents(".control_list").find(".tit_head").show();
		}else{
			$(this).parents(".control_list").find(".tit_head").hide();
		}
	});
</script>
<?php endif; ?>

<?php if ($this->_var['temp'] == 'navigator'): ?>
<div class="tishi">
	<div class="tishi_info">
	<p class="first"><?php echo $this->_var['lang']['note_getcat_atr_1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['pagetip_shop_banner_nav_mode']; ?></p>
    </div>
</div>
<div class="tab">
	<ul class="clearfix">
    	<li class="current"><?php echo $this->_var['lang']['setup_content']; ?></li>
        <?php if ($this->_var['topic_type'] != 'topic_type'): ?><li><?php echo $this->_var['lang']['setup_display']; ?></li><?php endif; ?>
    </ul>
</div>
<div class="modal-body">
	<div class="body_info">
    	<div class="ov_list">
        <form action="" id="navInsert" method="post"  enctype="multipart/form-data"  runat="server" >
    	<table class="table" data-table="navtable">
        	<thead>
                <tr>
                    <th width="30%"><?php echo $this->_var['lang']['cate_name']; ?></th>
                    <th width="25%"><?php echo $this->_var['lang']['link_address']; ?></th>
                    <th width="15%" class="center"><?php echo $this->_var['lang']['sort_order']; ?></th>
                    <?php if ($this->_var['topic_type'] != 'topic_type'): ?>
                    <th width="20%" class="center"><?php echo $this->_var['lang']['whether_display']; ?></th>
                    <?php endif; ?>
                    <th width="15%" class="center"><?php echo $this->_var['lang']['handler']; ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $_from = $this->_var['navigator']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'navigator');if (count($_from)):
    foreach ($_from AS $this->_var['navigator']):
?>
            	<tr>
                	<td><input type="text" <?php if ($this->_var['topic_type'] != 'topic_type'): ?>onchange = "edit_nav(this.value ,'<?php echo $this->_var['navigator']['id']; ?>','edit_navname')"<?php endif; ?> name="navname[]" value="<?php echo $this->_var['navigator']['name']; ?>"></td>
                    <td><input type="text" <?php if ($this->_var['topic_type'] != 'topic_type'): ?>onchange = "edit_nav(this.value ,'<?php echo $this->_var['navigator']['id']; ?>','edit_navurl')"<?php endif; ?> name="navurl[]" value="<?php echo $this->_var['navigator']['url']; ?>"></td>
                    <td class="center"><input type="text" <?php if ($this->_var['topic_type'] != 'topic_type'): ?>onchange = "edit_nav(this.value ,'<?php echo $this->_var['navigator']['id']; ?>','edit_navvieworder')"<?php endif; ?> class="small" name="navvieworder[]" value="<?php echo $this->_var['navigator']['vieworder']; ?>"></td>
                    <?php if ($this->_var['topic_type'] != 'topic_type'): ?>
                    <td class="center" id="nav_<?php echo $this->_var['navigator']['id']; ?>"><img onclick = "edit_nav('<?php echo $this->_var['navigator']['ifshow']; ?>' ,'<?php echo $this->_var['navigator']['id']; ?>','edit_ifshow','1')" src="<?php if ($this->_var['navigator']['ifshow'] == 1): ?>images/yes.gif<?php else: ?>images/no.gif<?php endif; ?>"/></td>
                    <?php endif; ?>
                    <td class="center"><a href="javascript:void(0);" <?php if ($this->_var['topic_type'] != 'topic_type'): ?>onclick="remove_nav('<?php echo $this->_var['navigator']['id']; ?>')"<?php else: ?>onclick="remove_topicnav(this)"<?php endif; ?> class="pic_del del"><?php echo $this->_var['lang']['drop']; ?></a></td>
                </tr>
                <?php endforeach; else: ?>
                <tr class="notic">
                    <td colspan="4"><?php echo $this->_var['lang']['now_no_custom_cate_click_add']; ?></td>
                </tr>
            	<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </tbody>
        </table>
            </form>
        </div>
        <div class="addCatagory" ectype="addCatagory">
            <input type="text" name="custom_catagory" class="text"/>
            <a href="javascript:void(0);" class="btn" ectype="topic_btn"><?php echo $this->_var['lang']['add_new_cate']; ?></a>
        </div>
    </div>
    <div class="body_info" style="display:none;">
    	<div class="control_list">
            <div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_nav_bg_color']; ?></div>
                <div class="control_value">
                    <input type="text" name="navColor" class="navColor" value="<?php if ($this->_var['attr']['navColor']): ?><?php echo $this->_var['attr']['navColor']; ?><?php else: ?>#000<?php endif; ?>">
                </div>
            </div>
            <div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_whether_new_window']; ?></div>
                <div class="control_value">
                	<label><input type="radio" name="target" value="_blank" class="checkbox" <?php if ($this->_var['attr']['target'] == '_blank'): ?> checked<?php endif; ?>><span><?php echo $this->_var['lang']['yes']; ?></span></label>
                    <label><input type="radio" name="target" value="_self" class="checkbox" <?php if ($this->_var['attr']['target'] == '_self'): ?> checked<?php endif; ?>><span><?php echo $this->_var['lang']['no']; ?></span></label>
                </div>
            </div>
            <div class="control_item">
                <div class="control_text"><?php echo $this->_var['lang']['label_text_display']; ?></div>
                <div class="control_value">
                	<select class="select" name="align">
                        <option value="left" <?php if ($this->_var['attr']['align'] == 'left'): ?>selected="selected" <?php endif; ?>><?php echo $this->_var['lang']['align_left']; ?></option>
                        <option value="center" <?php if ($this->_var['attr']['align'] == 'center'): ?>selected="selected" <?php endif; ?>><?php echo $this->_var['lang']['align_center']; ?></option>
                        <option value="regiht" <?php if ($this->_var['attr']['align'] == 'regiht'): ?>selected="selected" <?php endif; ?>><?php echo $this->_var['lang']['align_right']; ?></option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	var navColor = $(".navColor").val();
	$(".navColor").spectrum({
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		showInput: true,
		color: navColor,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		palette: [
			["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
			"rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
			["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
			"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
			["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
			"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
			"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
			"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
			"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
			"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
			"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
			"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
			"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
			"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
		]
	});
	$(".sp-choose").click(function(){
		var val = $(this).parents(".sp-picker-container").find(".sp-input").val();
		$(".navColor").val(val);
	});
        function remove_topicnav(obj){
            $(obj).parents('tr').remove();
        }
        function edit_nav(val,id,act,type){
            if(id > 0){
                if(type == 0){
                    Ajax.call('get_ajax_content.php?is_ajax=1&act='+act, "val=" +encodeURIComponent(val) + "&id=" + id , edit_navnameResponse, 'POST', 'JSON');
                }else{
                    Ajax.call('get_ajax_content.php?is_ajax=1&act='+act, "val=" +encodeURIComponent(val) + "&id=" + id , edit_ifshowResponse, 'POST', 'JSON');
                }
                
            }else{
                alert(jl_navbar_no_exist);
            }
        }

        function edit_navnameResponse(data){
            if(data.error == 0){
                alert(data.content);
            }
        }
        function edit_ifshowResponse(data){
            var obj = $("#nav_"+data.id);
            if(data.error == 0){
                alert(data.content);
            }else{
                if(data.content == 0){
                    obj.html(data.content)
                }else{
                    obj.html(data.content)
                }
            }
        }
        function remove_nav(id){
            if(id > 0){
                Ajax.call('get_ajax_content.php?is_ajax=1&act=remove_nav', "id=" + id , remove_navResponse, 'POST', 'JSON');
            }else{
                alert(jl_navbar_no_exist);
            }
        }

        function remove_navResponse(data){
            if(data.error == 0){
                alert(data.content);
            }
        }
       
</script>
<?php endif; ?>
<?php if ($this->_var['temp'] == 'edit_cmsAdv'): ?>
<form action="" id="<?php echo $this->_var['mode']; ?>Insert" method="post" enctype="multipart/form-data" runat="server">
    <div class="modal-body hfloor">
        <div class="body_info">
            <div class="control_list">
                <div class="control_item control_item_quan">
                    <div class="control_value">
                        <div class="floormodeItem<?php if ($this->_var['spec_attr']['floorMode'] < 2): ?> selected<?php endif; ?>" ectype="floormodeItem">
                        	<div class="img"><img src="images/visual/<?php echo $this->_var['mode']; ?>_01.jpg"></div>
                            <div class="checkbox_item">
                            	<input type="radio" name="floorMode" value="1" data-pattern="<?php echo $this->_var['floor_style']['0']; ?>" data-catepmer="0" class="ui-radio" id="floorMode_1"<?php if ($this->_var['spec_attr']['floorMode'] < 2): ?> checked<?php endif; ?>/>
                            	<label class="ui-radio-label" for="floorMode_1"><?php echo $this->_var['lang']['ad_template']; ?><?php echo $this->_var['lang']['num_1']; ?></label>
                            </div>
                            <div ectype="floorModehide" class="hide">
                                <?php if ($this->_var['spec_attr']['floorMode'] == 1): ?>
                                <div ectype="leftBanner">
                                    <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBanner[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <?php $_from = $this->_var['spec_attr']['leftBannerLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                     <?php $_from = $this->_var['spec_attr']['leftBannerTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['leftAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['leftAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                   <?php $_from = $this->_var['spec_attr']['leftAdvTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['rightAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  

                                    <?php $_from = $this->_var['spec_attr']['rightAdvTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    
                                    <?php $_from = $this->_var['spec_attr']['rightAdvSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div ectype="leftBanner">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>   
                        </div>
                        <div class="floormodeItem<?php if ($this->_var['spec_attr']['floorMode'] == 2): ?> selected<?php endif; ?>" ectype="floormodeItem">
                        	<div class="img"><img src="images/visual/<?php echo $this->_var['mode']; ?>_02.jpg"></div>
                            <div class="checkbox_item">
                            	<input type="radio" name="floorMode" value="2" data-pattern="<?php echo $this->_var['floor_style']['1']; ?>"<?php if ($this->_var['mode'] == 'topicOneFloor' || $this->_var['mode'] == "storeThreeFloor1"): ?> data-catepmer="0"<?php endif; ?> class="ui-radio" id="floorMode_2"<?php if ($this->_var['spec_attr']['floorMode'] == 2): ?> checked<?php endif; ?> />
                            	<label class="ui-radio-label" for="floorMode_2"><?php echo $this->_var['lang']['ad_template']; ?><?php echo $this->_var['lang']['num_2']; ?></label>
                            </div>
                            <div ectype="floorModehide" class="hide">
                                <?php if ($this->_var['spec_attr']['floorMode'] == 2): ?>
                                <div ectype="leftBanner">
                                    <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBanner[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <?php $_from = $this->_var['spec_attr']['leftBannerLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['leftAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['leftAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['rightAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  

                                    <?php $_from = $this->_var['spec_attr']['rightAdvTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div ectype="leftBanner">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="floormodeItem<?php if ($this->_var['spec_attr']['floorMode'] == 3): ?> selected<?php endif; ?>" ectype="floormodeItem">
                        	<div class="img"><img src="images/visual/<?php echo $this->_var['mode']; ?>_03.jpg"></div>
                            <div class="checkbox_item">
                            	<input type="radio" name="floorMode" value="3" data-pattern="<?php echo $this->_var['floor_style']['2']; ?>" data-catepmer="0" class="ui-radio" id="floorMode_3"<?php if ($this->_var['spec_attr']['floorMode'] == 3): ?> checked<?php endif; ?>/>
                            	<label class="ui-radio-label" for="floorMode_3"><?php echo $this->_var['lang']['ad_template']; ?><?php echo $this->_var['lang']['num_3']; ?></label>
                            </div>
                            <div ectype="floorModehide" class="hide">
                                <?php if ($this->_var['spec_attr']['floorMode'] == 3): ?>
                                <div ectype="leftBanner">
                                    <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBanner[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <?php $_from = $this->_var['spec_attr']['leftBannerLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <?php $_from = $this->_var['spec_attr']['leftBannerSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftBannerSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['leftAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['leftAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="leftAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdv[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                    <?php $_from = $this->_var['spec_attr']['rightAdvLink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvLink[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSort[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  

                                    <?php $_from = $this->_var['spec_attr']['rightAdvTitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvTitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   

                                    <?php $_from = $this->_var['spec_attr']['rightAdvSubtitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <input name="rightAdvSubtitle[]" type="hidden" value="<?php echo $this->_var['item']; ?>">
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    <div ectype="advimg">
                                        <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                        <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div ectype="leftBanner">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="leftAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <div ectype="rightAdv">
                                    <div ectype="advimg">
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control_item control_item_cent" ectype="floorMode">
                    <div class="control_text lh30"><span class="cor cor1"></span><?php echo $this->_var['lang']['label_switch_ad_img']; ?></div>
                    <div class="control_value lh30" ectype="imgControl">
                        <a href="javascript:void(0);" class="blue fl" ectype="uploadImage" data-uploadimagetype="home" data-title="<?php echo $this->_var['lang']['switch_ad_img']; ?>"  data-number="<?php if ($this->_var['mode'] == 'homeFloorThree'): ?>5<?php else: ?>3<?php endif; ?>" data-titleup="2"><?php echo $this->_var['lang']['select_upload_img']; ?></a>
                        <div class="imgup_icon" ectype="imgValue" data-name="leftBanner">
                            <?php $_from = $this->_var['spec_attr']['leftBanner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                            <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </div>
                </div>
               	
                <div class="control_item control_item_cent" ectype="floorMode">
                    <div class="control_text lh30"><span class="cor cor2"></span><?php echo $this->_var['lang']['label_common_ad_img']; ?></div>
                    <div class="control_value lh30" ectype="imgControl">
                        <a href="javascript:void(0);" class="blue fl" ectype="uploadImage" data-uploadimagetype="home" data-title="<?php echo $this->_var['lang']['common_ad_img']; ?>" data-number="2" data-titleup="2"><?php echo $this->_var['lang']['select_upload_img']; ?></a>
                        <div class="imgup_icon" ectype="imgValue" data-name="leftAdv">
                            <?php $_from = $this->_var['spec_attr']['leftAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                            <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </div>
                </div>
                
                <div class="control_item control_item_cent" ectype="floorMode">
                    <div class="control_text lh30"><span class="cor cor3"></span><?php echo $this->_var['lang']['label_title_ad_img']; ?></div>
                    <div class="control_value lh30" ectype="imgControl">
                        <a href="javascript:void(0);" class="blue fl" ectype="uploadImage" data-uploadimagetype="home" data-title="<?php echo $this->_var['lang']['title_ad_img']; ?>" <?php if ($this->_var['mode'] != 'homeFloorFour' && $this->_var['mode'] != 'homeFloorSix'): ?>data-titleup="1"<?php endif; ?> data-number="<?php if ($this->_var['mode'] == 'homeFloor'): ?>5<?php elseif ($this->_var['mode'] == 'homeFloorFour' || $this->_var['mode'] == 'homeFloorFive'): ?>3<?php elseif ($this->_var['mode'] == 'homeFloorSix'): ?>2<?php elseif ($this->_var['mode'] == 'homeFloorSeven'): ?>1<?php else: ?>4<?php endif; ?>"><?php echo $this->_var['lang']['select_upload_img']; ?></a>
                        <div class="imgup_icon" ectype="imgValue" data-name="rightAdv">
                            <?php $_from = $this->_var['spec_attr']['rightAdv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                            <?php if ($this->_var['item']): ?><a href="<?php echo $this->_var['item']; ?>" class="nyroModal" target="_blank"><i class="iconfont icon-image" onmouseover="toolTip('<img src=<?php echo $this->_var['item']; ?>>')" onmouseout="toolTip()"></i></a><?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </div>
                </div>    
            </div>        
        </div>
        
    </div>
    <input type="hidden" name="mode" value="<?php echo $this->_var['mode']; ?>">
    <input name='brand_ids' type='hidden' value='<?php echo $this->_var['spec_attr']['brand_ids']; ?>'>
</form>
<script type="text/javascript">
	//楼层广告模板选择
	$.divselect("#fm-select","#floorMode",function(obj){
        var val = obj.attr("data-value");
		var nyroModal = obj.parents("*[ectype='iselect']").siblings(".nyroModal");
        
		for(var i = 1; i < 9; i++){
			if(val == i){
				nyroModal.attr("href","images/visual/homeFloor_0" + i + ".jpg");
				nyroModal.find("i").attr("onmouseover","toolTip('<img src=images/visual/homeFloor_0" + i + ".jpg>')");
			}
		}
    });
	
	//判断模板模式选中后图片选择
	$(document).on("click","*[ectype='floormodeItem']",function(){
		var val = $(this).find("input[type='radio']").val(),
			pattern = $(this).find("input[type='radio']").data("pattern"),
			catepmer = $(this).find("input[type='radio']").data("catepmer"),
			arr = new Array(),
			imgNumberArr = <?php echo $this->_var['imgNumberArr']; ?>;
			
		$(this).addClass("selected").siblings().removeClass("selected");
		$(this).find("input[type='radio']").prop("checked",true);
		
		pattern = pattern.toString();

		if(pattern.indexOf(',') > 0){
			arr = pattern.split(',');
		}else{
			arr = pattern;
		}
		$("*[ectype='floorMode']").hide();
		
		for(var i = 0; i<arr.length;i++){
			$("*[ectype='floorMode']").eq((arr[i]-1)).show();
		}
		for(var i in imgNumberArr){
			if(i == val){
				$.each(imgNumberArr[i],function(index,value){
					$("[data-name='"+index+"']").siblings("*[ectype='uploadImage']").attr("data-number",value);
				});
			}
		}
		var _this = $(this);
		$("*[ectype='imgValue']").each(function(){
			var name = $(this).data("name");
			var imgHtml = _this.find("[ectype='" + name + "']").find("[ectype='advimg']").html();
			$(this).html(imgHtml);
		});
		
		//判断是否显示二级分类
		if(catepmer == 0){
			$("*[ectype='iselectErji']").parents(".control_item").hide();
			$("*[ectype='iselectErji']").parents(".control_item").find("*[ectype='required']").attr("ectype","requiredno")
		}else if(catepmer == 1){
			$("*[ectype='iselectErji']").parents(".control_item").show();
			$("*[ectype='iselectErji']").parents(".control_item").find("*[ectype='required']").attr("ectype","required")
		}
	});
	
	//默认编辑弹框时模板模式选中
	var radioVal = $("input[name='floorMode']:checked").val();
	$("#floorMode_"+ radioVal).click();
</script>
<?php endif; ?>
<?php if ($this->_var['temp'] == 'edit_cmsarti'): ?>
<form action="" id="<?php echo $this->_var['mode']; ?>Insert" method="post" enctype="multipart/form-data" runat="server" class="cms_dialog_main">
<div class="tishi">
	<div class="tishi_info">
        <p class="first"><?php echo $this->_var['lang']['note_getcat_atr_1']; ?></p>
        <i class="icon"></i>
    </div>
</div>
<div class="modal-body">
    <div class="body_info" id="banner_info">
        <div class="images_space">
            <div class="goods_gallery mt20" ectype="album-warp">
                <div class="nav navbot">
                    <div class="fl">
                        <div class="imitate_select select_w220" id="cat_id" data-level="1">
                            <div class="cite"><?php echo $this->_var['lang']['please_select_article_cate']; ?></div>		
                            <ul style="display: none;" class="ps-container" ectype="articlecat">
                                <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['please_select_article_cate']; ?></a></li>
                                <?php echo $this->_var['cat_select']; ?>
                            </ul>
                            <input name="" type="hidden" value="" id="cat_id_val">
                        </div>
                        <a href="javascript:void(0);" class="btn30 sc-btn red_btn" ectype="add_cat"><?php echo $this->_var['lang']['button_submit_alt']; ?></a>
                    </div>
                    <input name="articat_id" type="hidden">
                    <input name="cat_name" type="hidden">
                </div>
            </div>
        </div>
        <div class="ps_table mt10">
            <table id="addpictable" class="table">
                <thead>
                    <tr>
                        <th width="35%"><?php echo $this->_var['lang']['cate_name']; ?></th>
                        <th width="25%"><?php echo $this->_var['lang']['article_id']; ?></th>
                        <th width="15%" class="tc"><?php echo $this->_var['lang']['sort_order']; ?></th>
                        <th width="25%" class="tc"><?php echo $this->_var['lang']['handler']; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $_from = $this->_var['spec_attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['item']):
?>
                    <tr>
                        <td><?php echo $this->_var['item']['cat_name']; ?><input type="hidden" name="cat_idsign[]" value="<?php echo $this->_var['item']['cat_id']; ?>"></td>
                        <td>
                            <div ectype='atr_id_list'>
                                <?php echo $this->_var['item']['article_id']; ?>
                                <input ectype="article_id" name="article_id[<?php echo $this->_var['item']['cat_id']; ?>]" value="<?php echo $this->_var['item']['article_id']; ?>" type="hidden">
                                <input ectype='def_article_id' name='def_article_id[<?php echo $this->_var['item']['cat_id']; ?>]' value='<?php echo $this->_var['item']['def_article_id']; ?>' type='hidden'>
                            </div>
                        </td>
                        <td class="tc"><input type='text' value='<?php echo $this->_var['item']['sort']; ?>' name='sort[<?php echo $this->_var['item']['cat_id']; ?>]' class='form-control small'></td>
                        <td class="tc"><a href='javascript:void(0);' class='btn30 sc-btn blue_btn mr10' ectype='getcat_atr' data-id='<?php echo $this->_var['item']['cat_id']; ?>'><?php echo $this->_var['lang']['select_article']; ?></a><a href='javascript:;' class='btn30 sc-btn blue_btn' ectype='cat_del'><?php echo $this->_var['lang']['drop']; ?></a></td>
                    </tr>
                    <?php endforeach; else: ?>
                    <tr class="notic"><td colspan="4"><?php echo $this->_var['lang']['click_cate_select_article']; ?></td></tr>
                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>  
<input type="hidden" name="mode" value="<?php echo $this->_var['mode']; ?>">
</form>
<?php endif; ?>
<?php if ($this->_var['temp'] == 'edit_cmsgoods'): ?>
<form action="" id="<?php echo $this->_var['mode']; ?>Insert" method="post" enctype="multipart/form-data" runat="server">
<div class="tishi">
	<div class="tishi_info">
        <p class="first"><?php echo $this->_var['lang']['note_getcat_atr_1']; ?></p>
    </div>
</div>
<div class="tab">
	<ul class="clearfix">
    	<li class="current"><?php echo $this->_var['lang']['001_goods_setting']; ?></li>
        <li><?php echo $this->_var['lang']['setup_article']; ?></li>
    </ul>
</div>

<div class="modal-body">
	<div class="body_info floor_info">
		<div class="control_list">
            <div class="tit_head mb10">
                <div class="control_item">
                    <div class="control_text"><?php echo $this->_var['lang']['label_goods_title']; ?></div>
                    <div class="control_value"><input name="goods_title" type="text" class="text text2" size="25" value="<?php echo $this->_var['spec_attr']['goods_title']; ?>"></div>
                </div>
            </div>
        </div>
        <div class="search">
            <div class="select_box mr10">
                <div class="categorySelect fl">
                    <div class="selection">
                        <input type="text" name="category_name" id="category_name" class="text w250 mr0 valid" value="<?php if ($this->_var['parent_category']): ?><?php echo $this->_var['parent_category']; ?><?php else: ?><?php echo $this->_var['lang']['category_top']; ?><?php endif; ?>" autocomplete="off" readonly data-filter="cat_name" />
                        <input type="hidden" name="cat_id" ectype="goods_cat_dialog" id="category_id" value="<?php echo empty($this->_var['spec_attr']['cat_id']) ? '0' : $this->_var['spec_attr']['cat_id']; ?>" data-filter="cat_id" />
                    </div>
                    <div class="select-container" style="display:none;">
                        <?php echo $this->fetch('library/filter_category.lbi'); ?>
                    </div>
                </div>
            </div>
            <div class="select_box mr10">
                <div class="categorySelect fl">
                    <div class="selection">
                        <input type="text" name="brand_name" id="brand_name" class="text w120 mr0 valid" value="<?php echo $this->_var['lang']['select_barnd']; ?>" autocomplete="off" readonly data-filter="brand_name" />
                        <input type="hidden" name="brand_id" id="brand_id" value="<?php echo empty($this->_var['brand_id']) ? '0' : $this->_var['brand_id']; ?>" data-filter="brand_id" />
                    </div>
                    <div class="brand-select-container" style="display:none;">
                        <?php echo $this->fetch('library/filter_brand.lbi'); ?>
                    </div>
                </div>  
            </div>
            <div class="search_con mr10"><input width="20" name="keyword_brand" type="text" id="keyword_brand" class="text text_6 mr0"></div>
            <a href="javascript:void(0);" class="sc-btn fl" ectype="changedgoods"><?php echo $this->_var['lang']['button_submit_alt']; ?></a>
            <div class="checkobx-item">
                <input type="checkbox" name="is_selected" id="is_selected" class="ui-checkbox" onclick="checkd_selected(this)"/>
                <label class="ui-label" for="is_selected"><?php echo $this->_var['lang']['selected_goods']; ?></label>
            </div>
        </div>
        <div class="table_list" ectype='goods_list'>
            <div class="gallery_album" data-act="changedgoods" data-goods='1' data-inid="goods_list" data-url='get_ajax_content.php' data-where="cat_id=<?php echo $this->_var['filter']['cat_id']; ?>&sort_order=<?php echo $this->_var['filter']['sort_order']; ?>&keyword=<?php echo $this->_var['filter']['keyword']; ?>&search_type=<?php echo $this->_var['filter']['search_type']; ?>&goods_id=<?php echo $this->_var['filter']['goods_id']; ?>&type=1">
                <ul class="ga-goods-ul" id="goods_list">
                    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['gl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gl']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['gl']['iteration']++;
?>
                    <li class="on">
                        <div class="img"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></div>
                        <div class="name"><?php echo $this->_var['goods']['goods_name']; ?></div>
                        <div class="price"><?php echo $this->_var['goods']['shop_price']; ?></div>
                        <div class="choose"><a href="javascript:void(0);" class="on" onclick="selected_goods(this,'<?php echo $this->_var['goods']['goods_id']; ?>')"><i class="iconfont icon-gou"></i><?php echo $this->_var['lang']['selected']; ?></a></div>
                    </li>
                    <?php endforeach; else: ?>
                    <li class="notic"><?php echo $this->_var['lang']['please_search_goods']; ?></li>
                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="body_info cms_body_info" style="display:none;">
        <div class="control_list">
            <div class="tit_head mb10">
                <div class="control_item">
                    <div class="control_text"><?php echo $this->_var['lang']['label_article_title']; ?></div>
                    <div class="control_value"><input name="article_title" type="text" class="text text2" size="25" value="<?php echo $this->_var['spec_attr']['article_title']; ?>"></div>
                </div>
            </div>
        </div>
        <div class="images_space">
            <div class="goods_gallery" ectype="album-warp">
                <div class="nav navbot">
                    <div class="fl">
                        <div class="imitate_select select_w220" id="cat_id" data-level="1">
                            <div class="cite"><?php echo $this->_var['lang']['please_select_article_cate']; ?></div>		
                            <ul style="display: none;" class="ps-container" ectype="articlecat">
                                <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['please_select_article_cate']; ?></a></li>
                                <?php echo $this->_var['cat_select']; ?>
                            </ul>
                            <input name="" type="hidden" value="" id="cat_id_val">
                        </div>
                        <a href="javascript:void(0);" class="btn30 sc-btn red_btn" ectype="get_cat_article"><?php echo $this->_var['lang']['button_submit_alt']; ?></a>
                        
                    </div>
                    <div class="checkobx-item">
                        <input type="checkbox" name="arti_selected" id="arti_selected" class="ui-checkbox" onclick="checkd_article(this)"/>
                        <label class="ui-label" for="arti_selected"><?php echo $this->_var['lang']['selected_article']; ?></label>
                    </div>
                    <input name="articat_id" type="hidden" id="on_cat_id" vlaue="<?php echo $this->_var['spec_attr']['articat_id']; ?>">
                    <input name="cat_name" type="hidden">
                </div>
            </div>
        </div>
        <div class="table_list" ectype='atr_list'>
                    <div class="gallery_album" data-act="getcat_atr" data-inid="atr_list" data-url='get_ajax_content.php' data-where="cat_id=<?php echo $this->_var['cat_id']; ?>&old_article=<?php echo $this->_var['filter']['old_article']; ?>">
                        <div class="ps_table mt10">
                            <table id="addpictable" class="table">
                                <thead>
                                    <tr>
                                        <th width="20%"><?php echo $this->_var['lang']['article_id']; ?></th>
                                        <th width="35%"><?php echo $this->_var['lang']['article_name']; ?></th>
                                        <th width="15%" class="tc"><?php echo $this->_var['lang']['selected_article_sort']; ?></th>
                                        <th width="25%" class="tc"><?php echo $this->_var['lang']['handler']; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $_from = $this->_var['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                    <tr>
                                        <td><?php echo $this->_var['list']['article_id']; ?></td>
                                        <td><?php echo $this->_var['list']['title']; ?></td>
                                        <td class="tc"><input type='text' value='<?php echo $this->_var['item']['sort']; ?>' name='sort[<?php echo $this->_var['item']['cat_id']; ?>]' class='form-control small'></td>
                                        <td class="tc"><div class="choose"><a href="javascript:;" onclick="addatr('<?php echo $this->_var['list']['article_id']; ?>',this)" <?php if ($this->_var['list']['selected'] == 1): ?> class="on"<?php endif; ?>><em><?php if ($this->_var['list']['selected'] == 1): ?><i class="iconfont icon-gou"></i><?php echo $this->_var['lang']['selected']; ?><?php else: ?><i class="iconfont icon-dsc-plus"></i><?php echo $this->_var['lang']['btn_select']; ?><?php endif; ?></em></a></div></td>
                                    </tr>
                                    <?php endforeach; else: ?>
                                    <tr class="notic"><td colspan="4"><?php echo $this->_var['lang']['this_cate_no_article']; ?></td></tr>
                                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="clear"></div>
                        <?php echo $this->fetch('library/lib_page.lbi'); ?>
                    </div>
                </div>
    </div>
    <input type='hidden' name='def_article' value='<?php echo $this->_var['spec_attr']['def_article']; ?>'>
	<input type="hidden" name="search_type" value=""/>
	<input type="hidden" name="goods_id" value="<?php echo $this->_var['goods_id']; ?>"/>
    <input type="hidden" name="goods_ids" value="<?php echo $this->_var['spec_attr']['goods_ids']; ?>"/>
    <input type="hidden" value="0" ectype="dialogRuId"/>
    <input type='hidden' name='select_article_ids' value='<?php echo $this->_var['spec_attr']['article_ids']; ?>'>
     <input type="hidden" name="mode" value="<?php echo $this->_var['mode']; ?>">
</div>
</form>
<script type="text/javascript" src="js/dsc_admin2.0.js"></script>
<script type="text/javascript">
ajaxchangedgoods(1);
    function ajaxchangedgoods(type){
        var cat_id = $(".pb [ectype='goods_cat_dialog']").val();
                var brand_id = $(".pb input[name='brand_id']").val();
        var keyword = $(".pb input[name='keyword_brand']").val();
        var goods_ids = $(".pb input[name='goods_ids']").val();
        var ru_id  = $(".pb *[ectype='dialogRuId']").val();
                var search_type = $(".pb input[name='search_type']").val();
                var goods_id = $(".pb input[name='goods_id']").val();
                $("[ectype='goods_list']").html("<i class='icon-spin'><img src='images/visual/load.gif' width='30' height='30'></i>");
		
                function ajax(){
                        Ajax.call('get_ajax_content.php?is_ajax=1&act=changedgoods', "cat_id="+cat_id+"&keyword="+keyword+"&goods_ids="+goods_ids+"&type="+type + "&resetRrl=1&search_type=" + search_type + "&goods_id=" + goods_id + "&ru_id="+ru_id + "&brand_id="+brand_id, function(data){
                                $("[ectype='goods_list']").html(data.content);
				
                                $("*[ectype='goods_list']").perfectScrollbar("destroy");
                                $("*[ectype='goods_list']").perfectScrollbar();
                        } , 'POST', 'JSON');
                }
		
                setTimeout(function(){ajax()},300);
    }
    function checkd_selected(obj){
		var obj = $(obj);
		var is_selected =$("input[name='is_selected']").is(':checked');
		var length = obj.parents(".floor_info").find(".table_list li.on").length;
		var type = 1;
        if(is_selected == true){
            $(".icon-gou").parents('li').show();
			$(".icon-dsc-plus").parents('li').hide();
			
			if(length < 6){
				$("*[ectype='goods_list']").perfectScrollbar("destroy");
			}
            type = 0;
        }else{
            $(".icon-gou,.icon-dsc-plus").parents('li').show();
			$("*[ectype='goods_list']").perfectScrollbar();
        }
        ajaxchangedgoods(type);
    }
    //选中商品
	function selected_goods(obj,goods_id){
		var obj = $(obj);
		var arr = '';
		var goods_ids = $("input[name='goods_ids']").val();
		var good_number = 4;
		var verinumber = true;
		
		if(obj.hasClass("on")){
			obj.removeClass("on");
			obj.html('<i class="iconfont icon-dsc-plus"></i>'+js_select);
			arr = goods_ids.split(',');
			for(var i =0;i<arr.length;i++){
				if(arr[i] == goods_id){
					 arr.splice(i,1);
				}
			}
		}else{
			if(good_number > 0){
				arr = goods_ids.split(',');
				if(arr.length >= good_number){
					alert(jl_module_max_add + good_number + jl_ge_goods);
					verinumber = false;
				}
			}
			if(verinumber){
				$(obj).addClass('on');
				$(obj).html('<i class="iconfont icon-gou"></i>'+js_selected);
				if(goods_ids){
					arr = goods_ids + ','+goods_id;
				}else{
					arr = goods_id;
				}
			}
		}
		if(verinumber){
			$("input[name='goods_ids']").val(arr);
		}
	}
       
        get_cat_article(0,1);
</script>
<?php endif; ?>
<script type="text/javascript">
	pbct();

	$(".table_list,.ps_table").perfectScrollbar("destroy");
	$(".table_list,.ps_table").perfectScrollbar();
	
	$(".select-container").hover(function(){
		$(".select-list").perfectScrollbar("destroy");
		$(".select-list").perfectScrollbar();
	});	
	
	$(document).click(function(e){
		//仿select
		if(e.target.className !='cite' && !$(e.target).parents("div").is(".imitate_select")){
			$('.imitate_select ul').hide();
		}
		
		//分类
		if(e.target.id !='category_name' && !$(e.target).parents("div").is(".select-container")){
			$('.categorySelect .select-container').hide();
		}
	});
</script>

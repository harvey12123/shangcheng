<div class="panel-body">
    <div class="panel-tit"><span><?php echo $this->_var['title']['fields_titles']; ?></span></div>
    <div class="cue"><?php echo $this->_var['title']['titles_annotation']; ?></div>
    <div class="list">
    	<?php echo $this->fetch('library/cententFields.lbi'); ?>
    	
        <div class="item">
            <div class="label">
                <em>*</em>
                <span><?php echo $this->_var['lang']['Expected_store_type']; ?>：</span>
            </div>
            <div class="value">
                <div class="imitate_select w120" id="ec_shoprz_type">
                	<div class="cite"><span><?php if ($this->_var['title']['parentType']['shoprz_type'] == 1): ?><?php echo $this->_var['lang']['flagship_store']; ?><?php elseif ($this->_var['title']['parentType']['shoprz_type'] == 2): ?><?php echo $this->_var['lang']['exclusive_shop']; ?><?php elseif ($this->_var['title']['parentType']['shoprz_type'] == 3): ?><?php echo $this->_var['lang']['franchised_store']; ?><?php else: ?><?php echo $this->_var['lang']['all_option']; ?><?php endif; ?></span><i class="iconfont icon-down"></i></div>
                    <ul>
                    	<li><a href="javascript:void(0);" data-value="0"><?php echo $this->_var['lang']['all_option']; ?></a></li>
                        <li><a href="javascript:void(0);" data-value="1"><?php echo $this->_var['lang']['flagship_store']; ?></a></li>
                        <li><a href="javascript:void(0);" data-value="2"><?php echo $this->_var['lang']['exclusive_shop']; ?></a></li>
                        <li><a href="javascript:void(0);" data-value="3"><?php echo $this->_var['lang']['franchised_store']; ?></a></li>
                    </ul>
                </div>
                <input type="hidden" name="ec_shoprz_type" value="<?php if ($this->_var['title']['parentType']['shoprz_type'] == 1): ?>1<?php elseif ($this->_var['title']['parentType']['shoprz_type'] == 2): ?>2<?php elseif ($this->_var['title']['parentType']['shoprz_type'] == 3): ?>3<?php else: ?>0<?php endif; ?>" id="ec_shoprz_type_val" />
                
                <div class="imitate_select w130 ml10" id="ec_subShoprz_type" style="display:<?php if ($this->_var['title']['parentType']['shoprz_type'] == 1): ?>block<?php else: ?>none<?php endif; ?>;">
                	<div class="cite"><span><?php if ($this->_var['title']['parentType']['subShoprz_type'] == 1): ?><?php echo $this->_var['lang']['subShoprz_type']['0']; ?><?php elseif ($this->_var['title']['parentType']['subShoprz_type'] == 2): ?><?php echo $this->_var['lang']['subShoprz_type']['1']; ?><?php elseif ($this->_var['title']['parentType']['subShoprz_type'] == 3): ?><?php echo $this->_var['lang']['subShoprz_type']['2']; ?><?php else: ?><?php echo $this->_var['lang']['all_option']; ?><?php endif; ?></span><i class="iconfont icon-down"></i></div>
                    <ul>
                    	<li><a href="javascript:void(0);" data-value="0"><?php echo $this->_var['lang']['all_option']; ?></a></li>
                        <li><a href="javascript:void(0);" data-value="1"><?php echo $this->_var['lang']['subShoprz_type']['0']; ?></a></li>
                        <li><a href="javascript:void(0);" data-value="2"><?php echo $this->_var['lang']['subShoprz_type']['1']; ?></a></li>
                        <li><a href="javascript:void(0);" data-value="3"><?php echo $this->_var['lang']['subShoprz_type']['2']; ?></a></li>
                    </ul>
                </div>
                <input type="hidden" name="ec_subShoprz_type" value="<?php if ($this->_var['title']['parentType']['subShoprz_type'] == 1): ?>1<?php elseif ($this->_var['title']['parentType']['subShoprz_type'] == 2): ?>2<?php elseif ($this->_var['title']['parentType']['subShoprz_type'] == 3): ?>3<?php else: ?>0<?php endif; ?>" id="ec_subShoprz_type_val" class="<?php if ($this->_var['title']['parentType']['shoprz_type'] != 1): ?>ignore<?php endif; ?>" />
                
                <div class="orange" ectype="shopSellerPrompt">
                	<div class="item" style="display: <?php if ($this->_var['title']['parentType']['shoprz_type'] == 1): ?>block<?php else: ?>none<?php endif; ?>;"><?php echo $this->_var['lang']['subShoprz_type_desc']; ?></div>
                    <div class="item" style="display: <?php if ($this->_var['title']['parentType']['shoprz_type'] == 2): ?>block<?php else: ?>none<?php endif; ?>;"><?php echo $this->_var['lang']['parentType_shoprz_type']; ?></div>
                    <div class="item" style="display: <?php if ($this->_var['title']['parentType']['shoprz_type'] == 3): ?>block<?php else: ?>none<?php endif; ?>;"><?php echo $this->_var['lang']['parentType_shoprz_type_one']; ?></div>
                </div>
                <div class="shopType" ectype="shopType" id="shopSellerType1" style="display:<?php if ($this->_var['title']['parentType']['shoprz_type'] == 1): ?>block<?php else: ?>none<?php endif; ?>">
                    <div class="item-item" style="display:<?php if ($this->_var['title']['parentType']['subShoprz_type'] == 2): ?>block<?php else: ?>none<?php endif; ?>;" id="subShoprz_type2">
                        <div class="item-warp"><span><?php echo $this->_var['lang']['subShoprz_type_one']; ?>：</span><a class="link-blue" href="http://seller.shop.jd.com/apply/getQualificationTemplate.action?_t=164" target="_blank" style="display:none"><?php echo $this->_var['lang']['subShoprz_type_two']; ?></a></div>
                        <div class="item-warp">
                            <div class="word"><?php echo $this->_var['lang']['License_validity_period']; ?>：</div>
                            <div class="text_time">
                                <input id="shop_expireDateStart" class="text text-2 jdate narrow" type="text" size="20" readonly value="<?php echo $this->_var['title']['parentType']['shop_expireDateStart']; ?>" name="ec_shop_expireDateStart">
                                <span>&mdash;</span>
                                <input id="shop_expireDateEnd" class="text text-2 jdate narrow" type="text" size="20" readonly value="<?php echo $this->_var['title']['parentType']['shop_expireDateEnd']; ?>" name="ec_shop_expireDateEnd" >
                                <div class="cart-checkbox fr">
                                    <input type="checkbox" id="authorizeCheckBox" value="1" name="ec_shop_permanent" class="ui-checkbox" onClick="get_shopTime_term(this);" <?php if ($this->_var['title']['parentType']['shop_permanent'] == 1): ?>checked<?php endif; ?>>
                                    <label for="authorizeCheckBox" class="ui-label">永久</label>
                                </div>
                            </div>
                        </div>
                        <div class="item-warp" id="container2">
                            <div class="word"><?php echo $this->_var['lang']['upload_file']; ?>：</div>
                            <div class="item-con">
                            	<div class="type-file-box">
                                    <input type="button" name="button" class="type-file-button" id="button" value="" />
                                    <input type="file" name="ec_authorizeFile" class="type-file-file" value="<?php echo $this->_var['title']['parentType']['authorizeFile']; ?>" data-state="" hidefocus="true" />
                                    <?php if ($this->_var['title']['parentType']['authorizeFile']): ?><a href="<?php echo $this->_var['title']['parentType']['authorizeFile']; ?>" class="chakan" target="_blank"><?php echo $this->_var['lang']['view']; ?></a><?php endif; ?>
                                    <input type="text" name="textfile" class="type-file-text" value="<?php echo $this->_var['title']['parentType']['authorizeFile']; ?>" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-item" style="display: <?php if ($this->_var['title']['parentType']['subShoprz_type'] == 3): ?>block<?php else: ?>none<?php endif; ?>;" id="subShoprz_type3">
                        <div class="item-warp">
                            <div class="word" style="width:auto;"><?php echo $this->_var['lang']['ec_shop_hypermarketFile']; ?>：</div>
                            <div id="container1" class="item-con">
                                <div class="type-file-box">
                                    <input type="button" name="button" class="type-file-button" id="button" value="" />
                                    <input type="file" name="ec_shop_hypermarketFile" class="type-file-file" value="<?php echo $this->_var['title']['parentType']['shop_hypermarketFile']; ?>" data-state="" hidefocus="true" />
                                    <?php if ($this->_var['title']['parentType']['shop_hypermarketFile']): ?><a href="<?php echo $this->_var['title']['parentType']['shop_hypermarketFile']; ?>" class="chakan" target="_blank"><?php echo $this->_var['lang']['view']; ?></a><?php endif; ?>
                                    <input type="text" name="textfile" class="type-file-text" value="<?php echo $this->_var['title']['parentType']['shop_hypermarketFile']; ?>" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-sample" style="display:none">
            <div class="img-wrap">
                <img width="180" height="180" alt="" src="http://seller.shop.jd.com/common/images/ruzhu/x_1.jpg">
            </div>
            <div class="t-c mt10">
                <a class="link-blue" target="_blank" href="http://seller.shop.jd.com/common/images/ruzhu/1.jpg"><?php echo $this->_var['lang']['View_larger']; ?></a>
            </div>
        </div>
    </div>    
</div>
<script type="text/javascript">
//时间选择
var opts2 = {
	'targetId':'shop_expireDateStart',
	'triggerId':['shop_expireDateStart'],
	'alignId':'shop_expireDateStart',
	'format':'-'
},opts3 = {
	'targetId':'shop_expireDateEnd',
	'triggerId':['shop_expireDateEnd'],
	'alignId':'shop_expireDateEnd',
	'format':'-'
}
xvDate(opts2);
xvDate(opts3);
</script>
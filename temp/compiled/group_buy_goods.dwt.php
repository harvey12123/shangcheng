<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<link rel="stylesheet" type="text/css" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/goods_fitting.css" />
<link rel="stylesheet" type="text/css" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/suggest.css" />
<link rel="stylesheet" type="text/css" href="js/calendar/calendar.min.css" />
</head>

<body>
	<?php echo $this->fetch('library/page_header_common.lbi'); ?>
	<div class="full-main-n">
        <div class="w w1200 relative">
			<?php echo $this->fetch('library/ur_here.lbi'); ?>
			<?php echo $this->fetch('library/goods_merchants_top.lbi'); ?>
        </div>
    </div>
    <div class="container">
    	<div class="w w1200">
        	<div class="product-info mt20 group-buy">
            	<?php echo $this->fetch('library/goods_gallery.lbi'); ?>
                <div class="product-wrap">
                    <form action="group_buy.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
                	<div class="name"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></div>
                    <?php if ($this->_var['goods']['goods_brief']): ?>
                    <div class="newp"><?php echo $this->_var['goods']['goods_brief']; ?></div>
					<?php endif; ?>
                    <div class="activity-title">
                    	<div class="activity-type"><i class="iconfont icon-time"></i><?php echo $this->_var['lang']['Group_purchase']; ?></div>
                        <div class="sk-time-cd">
                            <div class="sk-cd-tit"><?php if ($this->_var['goods']['is_end'] == 1 || $this->_var['orderG_number'] > $this->_var['group_buy']['restrict_amount'] || $this->_var['orderG_number'] == $this->_var['group_buy']['restrict_amount']): ?><?php echo $this->_var['lang']['end_time']; ?><?php else: ?><?php echo $this->_var['lang']['residual_time']; ?><?php endif; ?></div>
                            <div class="cd-time <?php if (! ( $this->_var['goods']['is_end'] == 1 || $this->_var['orderG_number'] > $this->_var['group_buy']['restrict_amount'] || $this->_var['orderG_number'] == $this->_var['group_buy']['restrict_amount'] )): ?>time<?php endif; ?>" ectype="time" data-time="<?php echo $this->_var['group_buy']['end_time']; ?>">
                                <?php if ($this->_var['goods']['is_end'] == 1): ?>
                                    <?php echo $this->_var['group_buy']['end_time']; ?>
                                <?php else: ?>
                                    <div class="days">00</div>
                                    <span class="split">:</span>
                                    <div class="hours">00</div>
                                    <span class="split">:</span>
                                    <div class="minutes">00</div>
                                    <span class="split">:</span>
                                    <div class="seconds">00</div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="summary">
                    	<div class="summary-price-wrap">
                        	<div class="s-p-w-wrap">
                                <div class="summary-item si-shop-price">
                                    <div class="si-tit"><?php echo $this->_var['lang']['group_buy_price']; ?></div>
                                    <div class="si-warp">
                                        <strong class="shop-price"><em>￥</em><?php echo $this->_var['group_buy']['price_ladder']['0']['price']; ?></strong>
                                    </div>
                                </div>
                                <div class="summary-item si-market-price">
                                    <div class="si-tit"><?php echo $this->_var['lang']['market_price']; ?></div>
                                    <div class="si-warp"><div class="m-price"><em>￥</em><?php echo $this->_var['group_buy']['market_price']; ?></div></div>
                                </div>
                                <div class="si-info">
                                    <div class="si-cumulative"><?php echo $this->_var['lang']['Sales_count']; ?><em><?php echo $this->_var['group_buy']['valid_goods']; ?></em></div>
                                    <div class="si-cumulative"><?php echo $this->_var['lang']['Collection_count']; ?><em><?php echo $this->_var['goods']['collect_count']; ?></em></div>
                                </div>
                                <?php if ($this->_var['two_code']): ?>
                                <div class="si-phone-code">
                                    <div class="qrcode-wrap">
                                        <div class="qrcode_tit"><?php echo $this->_var['lang']['summary_phone']; ?><i class="iconfont icon-qr-code"></i></div>
                                        <div class="qrcode_pop">
                                            <div class="mobile-qrcode"><img src="<?php echo $this->_var['weixin_img_url']; ?>" alt="<?php echo $this->_var['lang']['two_code']; ?>" title="<?php echo $this->_var['weixin_img_text']; ?>" width="175"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if ($this->_var['group_buy']['deposit'] > 0): ?>
                                <div class="summary-item si-shop-price">
                                    <div class="si-tit"><?php echo $this->_var['lang']['gb_deposit']; ?></div>
                                    <div class="si-warp"><?php echo $this->_var['group_buy']['formated_deposit']; ?></div>
                                </div>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </div>
                        </div>
                        
                        <div class="summary-basic-info">
							<?php if ($this->_var['price_ladder']): ?>
                        	<div class="summary-item is-ladder">
                                <div class="si-tit"><?php echo $this->_var['lang']['staircase_price']; ?></div>
                                <div class="si-warp">
                                	<a href="javascript:void(0);" class="link-red" ectype="view_priceLadder"><?php echo $this->_var['lang']['view_staircase_price']; ?></a>
                                    <dl class="priceLadder" ectype="priceLadder">
                                    	<dt>
                                        	<span><?php echo $this->_var['lang']['number_to']; ?></span>
                                            <span><?php echo $this->_var['lang']['price']; ?></span>
                                        </dt>
                                        <?php $_from = $this->_var['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'rank');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['rank']):
?>
                                        <dd>
                                        	<span><?php echo $this->_var['rank']['amount']; ?></span>
                                            <span><?php echo $this->_var['rank']['formated_price']; ?></span>
                                        </dd>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </dl>
                                </div>
                            </div>
							<?php endif; ?>
                        	<div class="summary-item is-stock">
                            	<div class="si-tit"><?php echo $this->_var['lang']['distribution']; ?></div>
                                <div class="si-warp">
                                    <span class="initial-area">
                                        <?php if ($this->_var['adress']['city']): ?>
                                            <?php echo $this->_var['adress']['city']; ?>
                                        <?php else: ?>
                                            <?php echo $this->_var['basic_info']['city']; ?>
                                        <?php endif; ?> 
                                    </span><span><?php echo $this->_var['lang']['zhi']; ?></span>
                                    <div class="store-selector">
                                    	<div class="text-select" id="area_address" ectype="areaSelect"></div>
                                    </div>
									
                                    <div class="store-warehouse">
                                    	<div class="store-prompt" id="isHas_warehouse_num"><?php echo $this->_var['lang']['isHas_warehouse_num']; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-item is-service">
                                <div class="si-tit"><?php echo $this->_var['lang']['service']; ?></div>
                                <div class="si-warp">
                                    <div class="fl"> 
                                    <?php if ($this->_var['goods']['user_id'] > 0): ?>
                                        <?php echo $this->_var['lang']['you']; ?> <a href="<?php echo $this->_var['goods']['store_url']; ?>" class="link-red" target="_blank"><?php echo $this->_var['goods']['rz_shopName']; ?></a> <?php echo $this->_var['lang']['After_sale_service']; ?>
                                    <?php else: ?>
                                        <?php echo $this->_var['lang']['you']; ?> <a href="javascript:void(0)" class="link-red"><?php echo $this->_var['goods']['rz_shopName']; ?></a> <?php echo $this->_var['lang']['After_sale_service']; ?>
                                    <?php endif; ?>
                                    </div>
                                    <div class="fl pl10" id="user_area_shipping"></div>
                                </div>
                            </div>
                            <?php if ($this->_var['group_buy']['restrict_amount']): ?>
                            <div class="summary-item is-xiangou">
                            	<div class="si-tit"><?php echo $this->_var['lang']['gb_restrict_amount']; ?></div>
                                <div class="si-warp">
                                	<em id="restrict_amount" ectype="restrictNumber" data-value="<?php echo $this->_var['group_buy']['restrict_amount']; ?>"><?php echo $this->_var['group_buy']['restrict_amount']; ?></em>
                                    <span><?php if ($this->_var['goods']['goods_unit']): ?><?php echo $this->_var['goods']['goods_unit']; ?><?php elseif ($this->_var['goods']['measure_unit']): ?><?php echo $this->_var['goods']['measure_unit']; ?><?php endif; ?></span>
                                    <span>（<?php echo $this->_var['lang']['js_languages']['Already_buy']; ?>：<em id="orderG_number" ectype="orderGNumber" data-value="<?php echo empty($this->_var['orderG_number']) ? '0' : $this->_var['orderG_number']; ?>"><?php echo empty($this->_var['orderG_number']) ? '0' : $this->_var['orderG_number']; ?></em>&nbsp;<?php if ($this->_var['goods']['goods_unit']): ?><?php echo $this->_var['goods']['goods_unit']; ?><?php elseif ($this->_var['goods']['measure_unit']): ?><?php echo $this->_var['goods']['measure_unit']; ?><?php endif; ?>）</span>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if ($this->_var['group_buy']['gift_integral']): ?>
                            <div class="summary-item is-integral">
                            	<div class="si-tit"><?php echo $this->_var['lang']['gb_gift_integral']; ?></div>
                                <div class="si-warp">
                                	<?php echo $this->_var['group_buy']['gift_integral']; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
							<?php if ($this->_var['spec']['values']): ?>
                            <div class="summary-item is-attr goods_info_attr" ectype="is-attr" data-type="<?php if ($this->_var['spec']['attr_type'] == 1): ?>radio<?php else: ?>checkeck<?php endif; ?>">
                            	<div class="si-tit"><?php echo $this->_var['spec']['name']; ?></div>
								<?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                                <div class="si-warp">
									<ul>
                                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');$this->_foreach['attrvalues'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attrvalues']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
        $this->_foreach['attrvalues']['iteration']++;
?>  
									<?php if ($this->_var['spec']['is_checked'] > 0): ?>
                                    <li class="item <?php if ($this->_var['value']['checked'] == 1): ?> selected<?php endif; ?>" date-rev="<?php echo $this->_var['value']['img_site']; ?>" data-name="<?php echo $this->_var['value']['id']; ?>">
                                        <b></b>
                                        <a href="javascript:void(0);">
											<?php if ($this->_var['value']['img_flie']): ?>
											<img src="<?php echo $this->_var['value']['img_flie']; ?>" width="24" height="24" />
											<?php endif; ?>
											<i><?php echo $this->_var['value']['label']; ?></i>
											<input id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="<?php if ($this->_var['spec']['attr_type'] == 2): ?>checkbox<?php else: ?>radio<?php endif; ?>" data-attrtype="<?php if ($this->_var['spec']['attr_type'] == 2): ?>2<?php else: ?>1<?php endif; ?>" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" autocomplete="off" class="hide" />
											<?php if ($this->_var['value']['checked'] == 1): ?>
											<script type="text/javascript">
												$(function(){
													$("#spec_value_<?php echo $this->_var['value']['id']; ?>").prop("checked", true);
												});
											</script>
											<?php endif; ?>
                                        </a>
                                    </li>
									<?php else: ?>
                                    <li class="item <?php if ($this->_var['key'] == 0): ?> selected<?php endif; ?>">
                                        <b></b>
                                        <a href="javascript:void(0);" name="<?php echo $this->_var['value']['id']; ?>" class="noimg">
											<i><?php echo $this->_var['value']['label']; ?></i>
											<input id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="<?php if ($this->_var['spec']['attr_type'] == 2): ?>checkbox<?php else: ?>radio<?php endif; ?>" data-attrtype="<?php if ($this->_var['spec']['attr_type'] == 2): ?>2<?php else: ?>1<?php endif; ?>" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" autocomplete="off" class="hide" /></a> 
											<?php if ($this->_var['key'] == 0): ?>
											<script type="text/javascript">
												$(function(){
													$("#spec_value_<?php echo $this->_var['value']['id']; ?>").prop("checked", true);
												});
											</script>
											<?php endif; ?>											
                                        </a>
                                    </li>									
									<?php endif; ?>
									<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                </div>
								<?php else: ?>
								...
								<?php endif; ?>
                            </div>
							<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            
                            <div class="summary-item is-number">
                            	<div class="si-tit"><?php echo $this->_var['lang']['number_to']; ?></div>
                                <div class="si-warp">
                                	<div class="amount-warp">
                                        <input class="text buy-num" id="quantity" ectype="quantity" value="1" name="number" defaultnumber="1">
                                        <div class="a-btn">
                                            <a href="javascript:void(0);" class="btn-add" ectype="btnAdd"><i class="iconfont icon-up"></i></a>
                                            <a href="javascript:void(0);" class="btn-reduce btn-disabled" ectype="btnReduce"><i class="iconfont icon-down"></i></a>
                                            <input type="hidden" name="perNumber" id="perNumber" ectype="perNumber" value="0">
                                    		<input type="hidden" name="perMinNumber" id="perMinNumber" ectype="perMinNumber" value="1">
                                        </div>
                                    </div>
                                    <span><?php echo $this->_var['lang']['goods_inventory']; ?>&nbsp;<em id="goods_attr_num" ectype="goods_attr_num"></em>&nbsp;<?php if ($this->_var['goods']['goods_unit']): ?><?php echo $this->_var['goods']['goods_unit']; ?><?php else: ?><?php echo $this->_var['goods']['measure_unit']; ?><?php endif; ?></span>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="choose-btns ml60 clearfix">
                            <?php if ($this->_var['goods']['is_end'] == 1 || ( $this->_var['orderG_number'] > $this->_var['group_buy']['restrict_amount'] && $this->_var['group_buy']['restrict_amount'] > 0 ) || ( $this->_var['orderG_number'] == $this->_var['group_buy']['restrict_amount'] && $this->_var['group_buy']['restrict_amount'] > 0 )): ?>
                            <a href="javascript:void(0);" class="btn-invalid"><?php echo $this->_var['lang']['Group_purchase_end']; ?></a>
                            <?php else: ?>
                            <a href="javascript:void(0);" class="btn-append" ectype="btn-group-buy" data-minamount="<?php echo $this->_var['min_amount']; ?>"><?php echo $this->_var['lang']['Group_purchase_now']; ?><?php echo $this->_var['lang']['shopping']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <input type="hidden" value="" name="goods_attr_id" id="goods_attr_id" />
                    <input type="hidden" value="<?php echo $this->_var['cfg']['add_shop_price']; ?>" name="add_shop_price" ectype="add_shop_price" />
                    <input type="hidden" value="<?php echo $this->_var['goods']['goods_id']; ?>" id="good_id" name="good_id">
                    <input type="hidden" value="<?php echo $this->_var['group_buy']['group_buy_id']; ?>" name="group_buy_id" />
                    <input type="hidden" value="<?php echo $this->_var['group_buy']['restrict_amount']; ?>" name="restrictShop" ectype="restrictShop" />
                    </form>
                </div>
                
                <div class="track">
                	<div class="track_warp">
                    	<div class="track-tit"><h3><?php echo $this->_var['lang']['see_to_see']; ?></h3><span></span></div>
                        <div class="track-con">
                        	<ul>
                                <?php $_from = $this->_var['look_top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'look_top_0_74095700_1590253325');$this->_foreach['looktop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['looktop']['total'] > 0):
    foreach ($_from AS $this->_var['look_top_0_74095700_1590253325']):
        $this->_foreach['looktop']['iteration']++;
?>
                                <li>
                                    <a href="group_buy.php?act=view&id=<?php echo $this->_var['look_top_0_74095700_1590253325']['act_id']; ?>" target="_blank"><img src="<?php echo $this->_var['look_top_0_74095700_1590253325']['goods_thumb']; ?>" width="140" height="140"><p class="price"><?php echo $this->_var['look_top_0_74095700_1590253325']['ext_info']['cur_price']; ?></p></a>
                                </li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                        <div class="track-more">
                        	<a href="javascript:void(0);" class="sprite-up"><i class="iconfont icon-up"></i></a>
                            <a href="javascript:void(0);" class="sprite-down"><i class="iconfont icon-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="goods-main-layout">
            	<div class="g-m-left">
                	<?php echo $this->fetch('library/goods_merchants.lbi'); ?>
                    <div class="g-main g-recommend">
                    	<div class="mt">
                        	<h3><?php echo $this->_var['lang']['other_group_buy']; ?></h3>
                        </div>
                        <div class="mc">
                        	<div class="mc-warp">
                            	<ul>
                                    <?php $_from = $this->_var['merchant_group_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'merchant_group_goods_0_74297400_1590253325');$this->_foreach['buytop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['buytop']['total'] > 0):
    foreach ($_from AS $this->_var['merchant_group_goods_0_74297400_1590253325']):
        $this->_foreach['buytop']['iteration']++;
?>
                                        <li>
                                            <div class="p-img"><a href="group_buy.php?act=view&id=<?php echo $this->_var['merchant_group_goods_0_74297400_1590253325']['act_id']; ?>" target="_blank"><img src="<?php echo $this->_var['merchant_group_goods_0_74297400_1590253325']['goods_thumb']; ?>" width="130" height="130"></a></div>
                                            <div class="p-name"><a href="group_buy.php?act=view&id=<?php echo $this->_var['merchant_group_goods_0_74297400_1590253325']['act_id']; ?>" title="<?php echo htmlspecialchars($this->_var['merchant_group_goods_0_74297400_1590253325']['act_name']); ?>" target="_blank"><?php echo $this->_var['merchant_group_goods_0_74297400_1590253325']['act_name']; ?></a></div>
                                            <div class="p-price"><?php echo $this->_var['merchant_group_goods_0_74297400_1590253325']['shop_price']; ?></div>
                                        </li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="g-main g-recommend">
                    	<div class="mt">
                        	<h3><?php echo $this->_var['lang']['Buy_and_buy']; ?></h3>
                        </div>
                        <div class="mc">
                        	<div class="mc-warp">
                            	<ul>
                                    <?php $_from = $this->_var['buy_top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'buy_top_0_74602400_1590253325');$this->_foreach['buytop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['buytop']['total'] > 0):
    foreach ($_from AS $this->_var['buy_top_0_74602400_1590253325']):
        $this->_foreach['buytop']['iteration']++;
?>
                                    <li>
                                        <div class="p-img"><a href="group_buy.php?act=view&id=<?php echo $this->_var['buy_top_0_74602400_1590253325']['act_id']; ?>" target="_blank"><img src="<?php echo $this->_var['buy_top_0_74602400_1590253325']['goods_thumb']; ?>" width="130" height="130"></a></div>
                                        <div class="p-name"><a href="group_buy.php?act=view&id=<?php echo $this->_var['buy_top_0_74602400_1590253325']['act_id']; ?>" title="<?php echo htmlspecialchars($this->_var['buy_top_0_74602400_1590253325']['goods_name']); ?>" target="_blank"><?php echo $this->_var['buy_top_0_74602400_1590253325']['goods_name']; ?></a></div>
                                        <div class="p-price"><?php echo $this->_var['buy_top_0_74602400_1590253325']['ext_info']['cur_price']; ?></div>
                                    </li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-m-detail">
                	<div class="gm-tabbox" ectype="gm-tabs">
                    	<ul class="gm-tab">
                            <li ectype="gm-tab-item" class="curr"><?php echo $this->_var['lang']['details_order']; ?></li>
                            <li ectype="gm-tab-item"><?php echo $this->_var['lang']['introduce_pic']; ?></li>
                            <li ectype="gm-tab-item"><?php echo $this->_var['lang']['evaluate_user']; ?></li>
                        </ul>
                        <div class="extra"></div>
                        <div class="gm-tab-qp-bort" ectype="qp-bort"></div>
                    </div>
                    <div class="gm-floors" ectype="gm-floors">
                    	<div class="gm-f-item gm-f-parameter" ectype="gm-item">
                        	<dl class="goods-para">
                                <dd class="column"><span><?php echo $this->_var['lang']['goods_name']; ?>：<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></span></dd>
                                <dd class="column"><span><?php echo $this->_var['lang']['Commodity_number']; ?>：<?php echo $this->_var['goods']['goods_sn']; ?></span></dd>
                                <dd class="column"><span><?php echo $this->_var['lang']['seller_store']; ?>：<a href="<?php echo $this->_var['goods']['store_url']; ?>" title="<?php echo $this->_var['goods']['rz_shopName']; ?>" target="_blank"><?php echo $this->_var['goods']['rz_shopName']; ?></a></span></dd>
                                <?php if ($this->_var['cfg']['show_goodsweight']): ?>
                                <dd class="column"><span><?php echo $this->_var['lang']['weight']; ?>：<?php echo $this->_var['goods']['goods_weight']; ?></span></dd>
                                <?php endif; ?>
                                <?php if ($this->_var['cfg']['show_addtime']): ?>
                                <dd class="column"><span><?php echo $this->_var['lang']['add_time']; ?><?php echo $this->_var['goods']['add_time']; ?></span></dd>
                                <?php endif; ?>
                            </dl>
                        	<dl class="goods-para mt10">
                                <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
                                	<?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                                    <dd class="column"><span title="<?php echo $this->_var['property']['value']; ?>"><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></span></dd>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                <div class="clear"></div>
                                <?php echo $this->_var['group_buy']['group_buy_desc']; ?>
                            </dl>
                        </div>
                        <div class="gm-f-item gm-f-details" ectype="gm-item">
                        	<div class="gm-title">
                            	<h3><?php echo $this->_var['lang']['introduce_pic']; ?></h3>
                            </div>
                            <p><?php echo $this->_var['group_buy']['goods_desc']; ?></p>
                        </div>
                        <div class="gm-floors" ectype="gm-floors">
                    	<div class="gm-f-item gm-f-parameter" ectype="gm-item">
							<?php if ($this->_var['properties']): ?>
                        	<dl class="goods-para">
								<?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
								<?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                                <dd class="column"><span title="<?php echo $this->_var['property']['value']; ?>"><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></span></dd>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </dl>
							<?php endif; ?>
							<?php if ($this->_var['extend_info']): ?>
							<dl class="goods-para">
								<?php $_from = $this->_var['extend_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'info');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['info']):
?>	
								<dd class="column"><span title="<?php echo htmlspecialchars($this->_var['info']); ?>"><?php echo $this->_var['key']; ?>：<?php echo htmlspecialchars($this->_var['info']); ?></span></dd>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</dl>
							<?php endif; ?>
                        </div>
                        <div class="gm-f-item gm-f-comment" ectype="gm-item">
                        	<div class="gm-title">
                            	<h3><?php echo $this->_var['lang']['comment_sunburn']; ?></h3>
								<?php 
$k = array (
  'name' => 'goods_comment_title',
  'goods_id' => $this->_var['goods']['goods_id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                            </div>
                            <div class="gm-warp">
                            	<div class="praise-rate-warp">
                                	<div class="rate">
                                    	<strong><?php echo $this->_var['comment_all']['goodReview']; ?></strong>
                                        <span class="rate-span">
                                        	<span class="tit"><?php echo $this->_var['lang']['Rate_praise']; ?></span>
                                            <span class="bf">%</span>
                                        </span>
                                    </div>
                                    <div class="actor-new">
                                    	<dl>
											<?php $_from = $this->_var['goods']['impression_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
											<dd><?php echo $this->_var['tag']['txt']; ?>(<?php echo $this->_var['tag']['num']; ?>)</dd>
											<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </dl>
                                    </div>
                                </div>
								<div class="com-list-main">
								<?php echo $this->fetch('library/comments.lbi'); ?>
								</div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="clear"></div>
                <?php if ($this->_var['history_goods']): ?>
                <div class="rection">
                	<div class="ftit"><h3><?php echo $this->_var['lang']['guess_love']; ?></h3></div>
                    <ul>
                        <?php $_from = $this->_var['history_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_76593500_1590253325');$this->_foreach['his_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['his_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_76593500_1590253325']):
        $this->_foreach['his_goods']['iteration']++;
?>
                        <?php if ($this->_foreach['his_goods']['iteration'] <= 5): ?>
                        <li>
                            <div class="p-img"><a href="<?php echo $this->_var['goods_0_76593500_1590253325']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_76593500_1590253325']['goods_thumb']; ?>" width="232" height="232"></a></div>
                            <div class="p-name"><a href="<?php echo $this->_var['goods_0_76593500_1590253325']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_76593500_1590253325']['short_name']); ?>" target="_blank"><?php echo $this->_var['goods_0_76593500_1590253325']['short_name']; ?></a></div>
                            <div class="p-price">
                                <?php if ($this->_var['releated_goods_data']['promote_price'] != ''): ?>
                                <?php echo $this->_var['goods_0_76593500_1590253325']['formated_promote_price']; ?>
                                <?php else: ?>
                                <?php echo $this->_var['goods_0_76593500_1590253325']['shop_price']; ?>
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php 
$k = array (
  'name' => 'user_menu_position',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
   
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,jquery.yomi.js,common.js,cart_common.js,warehouse_area.js,magiczoomplus.js,cart_quick_links.js')); ?>
    
	<script type="text/javascript" src="js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
	<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    
    <script type="text/javascript">
	//商品详情悬浮框
	goods_desc_floor();
	
	//商品相册小图滚动
	$(".spec-list").slide({mainCell:".spec-items ul",effect:"left",trigger:"click",pnLoop:false,autoPage:true,scroll:1,vis:5,prevCell:".spec-prev",nextCell:".spec-next"});
	
	//右侧看了又看上下滚动
	$(".track_warp").slide({mainCell:".track-con ul",effect:"top",pnLoop:false,autoPlay:false,autoPage:true,prevCell:".sprite-up",nextCell:".sprite-down",vis:3});
	
	//商品搭配切换
	$(".combo-inner").slide({titCell:".tab-nav li",mainCell:".tab-content",titOnClassName:"curr",trigger:"click"});
	
	//商品搭配 多个商品滚动切换
	$(".combo-items").slide({mainCell:".combo-items-warp ul",effect:"left",pnLoop:false,autoPlay:false,autoPage:true,prevCell:".o-prev",nextCell:".o-next",vis:4});
	
	//左侧新品 热销 推荐排行切换
	$(".g-rank").slide({titCell:".mc-tab li",mainCell:".mc-content",titOnClassName:"curr",trigger:"click"});
	
	/*团购倒计时*/
	$("*[ectype='time']").each(function(){
		$(this).yomi();
	});
    </script>
    <script type="text/javascript">
    	var goods_id = <?php echo $this->_var['goods']['goods_id']; ?>;
		var goodsId = <?php echo $this->_var['goods']['goods_id']; ?>;
		var isReturn = false;
		var add_shop_price = $("*[ectype='add_shop_price']").val();
		
		$(function(){
			if(add_shop_price == 0){
				$(":input[name='goods_attr_id']").val('');
			}
		});
		
		/**
		 * 点选可选属性或改变数量时修改商品价格的函数
		 */
		function changePrice(onload)
		{
			
			var qty = 1;
			var goods_attr_id = '';
			var goods_attr = '';
			var attr_id = '';
			var attr = '';
		   
		   var region_id = $(":input[name='region_id']").val();
			var area_id = $(":input[name='area_id']").val();
	
			goods_attr_id = getSelectedAttributes(document.forms['ECS_FORMBUY']);		
			$("#goods_attr_id").val(goods_attr_id);
	
			if(onload != 'onload'){
				if(add_shop_price == 0){
					attr_id = getSelectedAttributesGroup(document.forms['ECS_FORMBUY']);
					goods_attr = '&goods_attr=' + attr_id;
				}
				Ajax.call('group_buy.php', 'act=price&id=' + goodsId + '&attr=' + goods_attr_id + goods_attr + '&number=' + qty + '&warehouse_id=' + region_id + '&area_id=' + area_id, changePriceResponse, 'GET', 'JSON');
			}else{
				attr = '&attr=' + goods_attr_id;
				Ajax.call('group_buy.php', 'act=price&id=' + goodsId + attr + '&number=' + qty + '&warehouse_id=' + region_id + '&area_id=' + area_id + '&onload=' + onload, changePriceResponse, 'GET', 'JSON');
			}
		}
		
		/**
		 * 接收返回的信息
		 */
		function changePriceResponse(res)
		{
		  if (res.err_msg.length > 0)
		  {
			pbDialog(res.err_msg,"",0);
		  }
		  else
		  {
			document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
			//中国联通 --zhuo satrt
			if (document.getElementById('goods_attr_num'))
			{
				$("*[ectype='goods_attr_num']").html(res.attr_number);
		  		$("*[ectype='perNumber']").val(res.attr_number);
				
				if(res.err_no == 2){
					$('#isHas_warehouse_num').html(json_languages.shiping_prompt);
				}else{
					if (document.getElementById('isHas_warehouse_num')){
						var isHas;
						if(res.attr_number > 0){
							isHas = '<strong>'+json_languages.Have_goods+'</strong>，'+json_languages.Deliver_back_order;
						}else{
							isHas = '<strong>'+json_languages.No_goods+'</strong>，'+ json_languages.goods_over;
						}
					
						$('#isHas_warehouse_num').html(isHas);
					}
				}
			}
		  }
		  if(res.onload == "onload"){
			quantity();
		  }
		}
    </script>
    <?php 
$k = array (
  'name' => 'goods_delivery_area_js',
  'area' => $this->_var['area'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
</body>
</html>

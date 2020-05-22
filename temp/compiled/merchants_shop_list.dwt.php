<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<link rel="stylesheet" type="text/css" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/suggest.css" />
</head>

<body>
	<?php echo $this->fetch('library/page_header_common.lbi'); ?>
    <div class="w w1200">
    	<div class="crumbs-nav">
            <div class="crumbs-nav-main clearfix">
                <div class="crumbs-nav-item">
                    <span><?php echo $this->_var['lang']['all_attribute']; ?></span>
                    <span class="arrow">></span>
                    <?php if ($this->_var['display'] == 'list'): ?>
                    <span><?php echo $this->_var['lang']['total']; ?><?php echo $this->_var['shop_count']; ?><?php echo $this->_var['lang']['home_shop']; ?></span>
                    <?php else: ?>
                    <span><?php echo $this->_var['lang']['total']; ?><?php echo $this->_var['shop_count']; ?><?php echo $this->_var['lang']['jian_goods']; ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    	<div class="w w1200">
            <div class="filter">
            	<div class="filter-wrap">
                	<div class="filter-left">
                    	<div class="styles">
                            <ul class="items" ectype="fsortTab">
                                <li class="item <?php if ($this->_var['display'] == 'list' && $this->_var['sort'] == 'shop_id'): ?>current<?php endif; ?>" data-type="store"><a href="search.php?keywords=<?php echo $this->_var['search_keywords']; ?>&category=<?php echo $this->_var['category']; ?>&store_search_cmt=<?php echo $this->_var['search_type']; ?>&sort=shop_id&order=<?php echo $this->_var['order']; ?>&display=list" title="<?php echo $this->_var['lang']['seller_store']; ?><?php echo $this->_var['lang']['pattern']; ?>"><span class="iconfont icon-store-alt"></span><?php echo $this->_var['lang']['seller_store']; ?></a></li>
                                <li class="item <?php if ($this->_var['display'] == 'grid'): ?>current<?php endif; ?>" data-type="large"><a href="search.php?keywords=<?php echo $this->_var['search_keywords']; ?>&category=<?php echo $this->_var['category']; ?>&store_search_cmt=<?php echo $this->_var['search_type']; ?>&sort=<?php echo $this->_var['sort']; ?>&order=<?php echo $this->_var['order']; ?>&display=grid" title="<?php echo $this->_var['lang']['big_pic']; ?><?php echo $this->_var['lang']['pattern']; ?>"><span class="iconfont icon-switch-grid"></span><?php echo $this->_var['lang']['big_pic']; ?></a></li>
                                <li class="item <?php if ($this->_var['display'] == 'text'): ?>current<?php endif; ?>" data-type="samll"><a href="search.php?keywords=<?php echo $this->_var['search_keywords']; ?>&category=<?php echo $this->_var['category']; ?>&store_search_cmt=<?php echo $this->_var['search_type']; ?>&sort=<?php echo $this->_var['sort']; ?>&order=<?php echo $this->_var['order']; ?>&display=text" title="<?php echo $this->_var['lang']['Small_pic']; ?><?php echo $this->_var['lang']['pattern']; ?>"><span class="iconfont icon-switch-list"></span><?php echo $this->_var['lang']['Small_pic']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <?php if ($this->_var['display'] != 'list'): ?>
                    <div class="filter-right">
                    	<div class="button-page">
                        	<span class="pageState"><span><?php echo $this->_var['page']; ?></span>/<?php echo $this->_var['pager']['page_count']; ?></span>
                            <a <?php if ($this->_var['pager']['page_next']): ?><?php else: ?>style="color:#666;"<?php endif; ?> href="<?php if ($this->_var['pager']['page_next']): ?><?php echo $this->_var['pager']['page_next']; ?><?php else: ?>javascript:void(0);<?php endif; ?>"><i class="iconfont icon-left"></i></a>
                            <a <?php if ($this->_var['pager']['page_prev']): ?><?php else: ?>style="color:#666;"<?php endif; ?> href="<?php if ($this->_var['pager']['page_prev']): ?><?php echo $this->_var['pager']['page_prev']; ?><?php else: ?>javascript:void(0);<?php endif; ?>"><i class="iconfont icon-right"></i></a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($this->_var['display'] == 'list'): ?>
            <div class="store-shop-list" id="store_shop_list">
            	<div class="ss-warp">
                    <?php $_from = $this->_var['store_shop_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'shop');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['shop']):
?>
                    <div class="ss-item">
                        <div class="ss-info">
                            <div class="ss-i-info">
                                <div class="ss-i-top">
                                    <div class="logo"><a href="<?php echo $this->_var['shop']['shop_url']; ?>"><img src="<?php echo $this->_var['shop']['logo_thumb']; ?>"></a></div>
                                    <div class="r-info">
                                        <div class="ss-tit"><?php echo $this->_var['shop']['shopName']; ?>
											
											<?php if ($this->_var['shop']['is_IM'] == 1 || $this->_var['shop']['is_dsc']): ?>
											<a href="javascript:;" id="IM" onclick="openWin(this)" ru_id="<?php echo $this->_var['shop']['ru_id']; ?>" class="p-kefu<?php if ($this->_var['shop']['ru_id'] == 0): ?> p-c-violet<?php endif; ?>"><i class="iconfont icon-kefu"></i></a>
											<?php else: ?>
												<?php if ($this->_var['shop']['kf_type'] == 1): ?>
												<a href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['shop']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8" class="p-kefu<?php if ($this->_var['shop']['ru_id'] == 0): ?> p-c-violet<?php endif; ?>" target="_blank"><i class="iconfont icon-kefu"></i></a>
												<?php else: ?>
												<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['shop']['kf_qq']; ?>&site=qq&menu=yes" class="p-kefu<?php if ($this->_var['shop']['ru_id'] == 0): ?> p-c-violet<?php endif; ?>" target="_blank"><i class="iconfont icon-kefu"></i></a>
												<?php endif; ?>
											<?php endif; ?>
																					
										</div>
										<?php if ($this->_var['shop']['self_run']): ?>
										<div class="seller-sr"><?php echo $this->_var['lang']['self_run']; ?></div>
										<?php endif; ?>
										<div class="ss-desc">
                                            <p><?php echo $this->_var['lang']['Main_brand']; ?>： 
                                            <?php $_from = $this->_var['shop']['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['nobrand'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nobrand']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['nobrand']['iteration']++;
?>
                                                <?php if (! ($this->_foreach['nobrand']['iteration'] == $this->_foreach['nobrand']['total'])): ?>
                                                    <?php echo $this->_var['brand']['brand_name']; ?>,
                                                <?php else: ?>
                                                    <?php echo $this->_var['brand']['brand_name']; ?>
                                                <?php endif; ?>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </p>
                                            <p><?php echo $this->_var['lang']['seat_of']; ?>：<?php echo $this->_var['shop']['address']; ?></p>
                                        </div>
                                        <div class="ss-btn">
                                            <a onclick="get_collect_store(2, <?php echo $this->_var['shop']['ru_id']; ?>);" href="javascript:void(0);" class="btn"><?php echo $this->_var['lang']['follow_store']; ?></a>
                                            <a href="<?php echo $this->_var['shop']['shop_url']; ?>" class="btn"><?php echo $this->_var['lang']['enter_the_shop']; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="ss-i-bottom">
                                    <div class="ss-contrast">
                                        <div class="ssc-top">
                                            <span class="col1"><?php echo $this->_var['lang']['Store_score']; ?></span>
                                            <span class="col2"><?php echo $this->_var['lang']['goods']; ?></span>
                                            <span class="col3"><?php echo $this->_var['lang']['service']; ?></span>
                                            <span class="col4"><?php echo $this->_var['lang']['Deliver_goods']; ?></span>
                                        </div>
                                        <div class="ssc-content">
                                            <span class="col1">&nbsp;</span>
                                            <span class="col2"><?php echo $this->_var['shop']['merch_cmt']['cmt']['commentRank']['zconments']['score']; ?></span>
                                            <span class="col3"><?php echo $this->_var['shop']['merch_cmt']['cmt']['commentServer']['zconments']['score']; ?></span>
                                            <span class="col4"><?php echo $this->_var['shop']['merch_cmt']['cmt']['commentDelivery']['zconments']['score']; ?></span>
                                       </div>
                                        <div class="ssc-bottom">
                                            <span class="col1"><?php echo $this->_var['lang']['peer_comparison']; ?></span>
                                            <span class="col2"><?php echo $this->_var['shop']['merch_cmt']['cmt']['commentRank']['zconments']['goodReview']; ?>%<i class="iconfont icon-arrow-<?php if ($this->_var['shop']['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 1): ?>up<?php elseif ($this->_var['shop']['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 2): ?>average<?php else: ?>down<?php endif; ?>"></i></span>
                                            <span class="col3"><?php echo $this->_var['shop']['merch_cmt']['cmt']['commentServer']['zconments']['goodReview']; ?>%<i class="iconfont icon-arrow-<?php if ($this->_var['shop']['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 1): ?>up<?php elseif ($this->_var['shop']['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 2): ?>average<?php else: ?>down<?php endif; ?>"></i></span>
                                            <span class="col4"><?php echo $this->_var['shop']['merch_cmt']['cmt']['commentDelivery']['zconments']['goodReview']; ?>%<i class="iconfont icon-arrow-<?php if ($this->_var['shop']['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 1): ?>up<?php elseif ($this->_var['shop']['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 2): ?>average<?php else: ?>down<?php endif; ?>"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ss-i-goods">
                                <?php if ($this->_var['shop']['goods_list']): ?>
                                <ul>
                                    <?php $_from = $this->_var['shop']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['store_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['store_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['store_goods']['iteration']++;
?>
                                    <?php if (($this->_foreach['store_goods']['iteration'] - 1) < 4): ?>
                                    <li class="opacity_img">
                                        <div class="p-img"><a href="<?php echo $this->_var['goods']['goods_url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a></div>
                                        <div class="p-name"><a href="<?php echo $this->_var['goods']['goods_url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></a></div>
                                        <div class="p-price">
                                            <?php if ($this->_var['goods']['promote_price'] != ''): ?>
                                                <?php echo $this->_var['goods']['promote_price']; ?>
                                            <?php else: ?>
                                                <?php echo $this->_var['goods']['shop_price']; ?>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                    <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                                <?php else: ?>
                                <div class="no_records">
                                    <i class="no_icon_two"></i>
                                    <div class="no_info">
                                        <h3><?php echo $this->_var['lang']['information_null']; ?></h3>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="s-more">
                            <span class="sm-wrap"><a href="<?php echo $this->_var['shop']['store_shop_url']; ?>" target="_blank"><?php echo $this->_var['lang']['More_options']; ?><i class="iconfont icon-down"></i></a></span>
                        </div>
                    </div>
                    <?php endforeach; else: ?>
                    <div class="no_records no_records_1200">
                        <i class="no_icon_two"></i>
                        <div class="no_info">
                            <h3><?php echo $this->_var['lang']['information_null']; ?></h3>
                        </div>
                    </div>
                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
                <?php if ($this->_var['count'] > $this->_var['size']): ?>
                <div class="w1200 pagePtb">
                    <div class="pages">
                        <?php echo $this->_var['pager']; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php else: ?>
            <div class="g-view w">
                <div class="store-shop-list">
                    <div class="goods-list" ectype="gMain">
                        <?php if ($this->_var['display'] == 'grid'): ?>
                            <ul class="gl-warp gl-warp-large">
                                <?php $_from = $this->_var['shop_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                                <?php if ($this->_var['goods']['goods_id']): ?>
                                <li class="gl-item">
                                    <div class="gl-i-wrap">
                                        <div class="p-img"><a href="<?php echo $this->_var['goods']['goods_url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" /></a></div>
                                        <?php if ($this->_var['goods']['pictures']): ?>
                                        <div class="sider">
                                            <ul>
                                                <?php $_from = $this->_var['goods']['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['picture'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['picture']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['picture']['iteration']++;
?>
                                                <?php if (($this->_foreach['picture']['iteration'] - 1) < 6): ?>
                                                <li <?php if (($this->_foreach['picture']['iteration'] - 1) == 0): ?> class="curr"<?php endif; ?>><img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" width="26" height="26" /></li>
                                                <?php endif; ?>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </ul>
                                        </div>
                                        <?php endif; ?>
                                        <div class="p-lie">
                                            <div class="p-price">
                                                <?php if ($this->_var['goods']['promote_price'] != ''): ?>
                                                    <?php echo $this->_var['goods']['promote_price']; ?>
                                                <?php else: ?>
                                                    <?php echo $this->_var['goods']['shop_price']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="p-num"><?php echo $this->_var['lang']['Sold']; ?><em><?php echo $this->_var['goods']['sales_volume']; ?></em><?php echo $this->_var['lang']['jian']; ?></div>
                                        </div>
                                        <div class="p-name"><a href="<?php echo $this->_var['goods']['goods_url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?></a></div>
                                        <div class="p-store">
                                            <a href="<?php echo $this->_var['goods']['shop_url']; ?>" title="<?php echo $this->_var['goods']['shop_name']; ?>" class="store" target="_blank"><?php echo $this->_var['goods']['shop_name']; ?></a>
                                            
                                            <?php if ($this->_var['goods']['is_IM'] == 1 || $this->_var['goods']['is_dsc']): ?>
                                            <a href="javascript:;" id="IM" onclick="openWin(this)" goods_id="<?php echo $this->_var['goods']['goods_id']; ?>" class="p-kefu"><i class="iconfont icon-kefu"></i></a>
                                            <?php else: ?>
                                                <?php if ($this->_var['goods']['kf_type'] == 1): ?>
                                                <a href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['goods']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8" class="p-kefu" target="_blank"><i class="iconfont icon-kefu"></i></a>
                                                <?php else: ?>
                                                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['goods']['kf_qq']; ?>&site=qq&menu=yes" class="p-kefu" target="_blank"><i class="iconfont icon-kefu"></i></a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            
                                        </div>
                                        <?php if ($this->_var['goods']['is_new'] || $this->_var['goods']['is_hot'] || $this->_var['goods']['is_best'] || $this->_var['goods']['is_shipping'] || $this->_var['goods']['self_run']): ?>
                                        <div class="p-activity">
                                            <?php if ($this->_var['goods']['is_new']): ?>
                                            <span class="tag tac-mn">
                                                <i class="i-left"></i>
                                                <?php echo $this->_var['lang']['is_new']; ?>
                                                <i class="i-right"></i>
                                            </span>
                                            <?php endif; ?>
                                            <?php if ($this->_var['goods']['is_hot']): ?>
                                            <span class="tag tac-mh">
                                                <i class="i-left"></i>
                                                <?php echo $this->_var['lang']['is_hot']; ?>
                                                <i class="i-right"></i>
                                            </span>
                                            <?php endif; ?>
                                            <?php if ($this->_var['goods']['is_best']): ?>
                                            <span class="tag tac-mb">
                                                <i class="i-left"></i>
                                                <?php echo $this->_var['lang']['is_best']; ?>
                                                <i class="i-right"></i>
                                            </span>
                                            <?php endif; ?>
                                            <?php if ($this->_var['goods']['is_shipping']): ?>
                                                <span class="tag tac-by">
                                                <i class="i-left"></i>
                                                <?php echo $this->_var['lang']['Free_shipping']; ?>
                                                <i class="i-right"></i>
                                            </span>
                                            <?php endif; ?>
                                            <?php if ($this->_var['goods']['self_run']): ?>
                                                <span class="tag tac-sr">
                                                <i class="i-left"></i>
                                                <?php echo $this->_var['lang']['self_run']; ?>
                                                <i class="i-right"></i>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                        <?php else: ?>
                        				<div class="p-activity">&nbsp;</div>
                                        <?php endif; ?>
                                        <div class="p-operate">
                                            <a href="javascript:void(0);" id="compareLink">
                                                <input id="<?php echo $this->_var['goods']['goods_id']; ?>" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, <?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['type']; ?>', '<?php echo $this->_var['goods']['goods_thumb']; ?>', '<?php echo $this->_var['goods']['shop_price']; ?>', '<?php echo $this->_var['goods']['market_price']; ?>')">
                                                <label class="ui-label" for="<?php echo $this->_var['goods']['goods_id']; ?>"><?php echo $this->_var['lang']['compare']; ?></label>
                                            </a>
                                            <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="choose-btn-coll<?php if ($this->_var['goods']['is_collect']): ?> selected<?php endif; ?>"><i class="iconfont<?php if ($this->_var['goods']['is_collect']): ?> icon-zan-alts<?php else: ?> icon-zan-alt<?php endif; ?>"></i><?php echo $this->_var['lang']['btn_collect']; ?></a>
                                            <?php if ($this->_var['goods']['prod'] == 1): ?>
                                                <?php if ($this->_var['goods']['goods_number'] > 0): ?>
                                                <a href="javascript:void(0);" onClick="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>,0,event,this,'flyItem2');" rev="<?php echo $this->_var['goods']['goods_thumb']; ?>" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="<?php echo $this->_var['lang']['select_attr']; ?>" class="addcart">
                                                    <i class="iconfont icon-carts"></i><?php echo $this->_var['lang']['add_to_cart']; ?>
                                                </a>
                                                <?php else: ?>
                                                <a href="javascript:void(0);"  class="addcart"><i class="iconfont icon-carts"></i><?php echo $this->_var['lang']['have_no_goods']; ?></a>
                                                <?php endif; ?>
                                            <?php else: ?>
                                            <a href="javascript:void(0);" onClick="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>,0,event,this,'flyItem');" class="addcart" rev="<?php echo $this->_var['goods']['goods_thumb']; ?>"><i class="iconfont icon-carts"></i><?php echo $this->_var['lang']['add_to_cart']; ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </li>
                                <?php endif; ?> 
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                            </ul>
                            <?php echo $this->fetch('library/pages.lbi'); ?>
                        	<div id="flyItem" class="fly_item"><img src="" width="40" height="40"></div>
                        <?php elseif ($this->_var['display'] == 'text'): ?>
                            <ul class="gl-warp gl-warp-large">
                                <?php $_from = $this->_var['shop_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['name']['iteration']++;
?>
                                <?php if ($this->_var['goods']['goods_id']): ?>
                                <li class="gl-h-item <?php if ($this->_foreach['name']['iteration'] % 2 != 0): ?>item_bg<?php endif; ?>">
                                    <div class="gl-i-wrap">
                                        <div class="col col-1">
                                            <div class="p-img"><a href="<?php echo $this->_var['goods']['goods_url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" /></a></div>
                                            <div class="p-right">
												<div class="p-name fl"><a href="<?php echo $this->_var['goods']['goods_url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" target="_blank"><?php if ($this->_var['goods']['self_run']): ?><div class="seller-sr fl"><?php echo $this->_var['lang']['self_run']; ?></div>&nbsp;&nbsp;<?php endif; ?><?php echo $this->_var['goods']['goods_name']; ?></a></div>
                                                <div class="p-lie">
                                                    <div class="p-num"><?php echo $this->_var['lang']['sales_volume']; ?>：<?php echo $this->_var['goods']['sales_volume']; ?></div>
                                                    <div class="p-comm"><?php echo $this->_var['lang']['comments_rank']; ?>：<?php echo $this->_var['goods']['cmt_count']; ?> +</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-2">
                                            <div class="p-store">
                                                <a href="<?php echo $this->_var['goods']['store_url']; ?>" title="<?php echo $this->_var['goods']['shop_name']; ?>" target="_blank"><?php echo $this->_var['goods']['shop_name']; ?></a>
                                                
                                            <?php if ($this->_var['goods']['is_IM'] == 1 || $this->_var['goods']['is_dsc']): ?>
                                            <a href="javascript:;" id="IM" onclick="openWin(this)" goods_id="<?php echo $this->_var['goods']['goods_id']; ?>" class="p-kefu"><i class="iconfont icon-kefu"></i></a>
                                            <?php else: ?>
                                                <?php if ($this->_var['goods']['kf_type'] == 1): ?>
                                                <a href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['goods']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8" class="p-kefu" target="_blank"><i class="iconfont icon-kefu"></i></a>
                                                <?php else: ?>
                                                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['goods']['kf_qq']; ?>&site=qq&menu=yes" class="p-kefu" target="_blank"><i class="iconfont icon-kefu"></i></a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            
                                            </div>
                                        </div>
                                        <div class="col col-3">
                                            <div class="p-price">
                                                <div class="shop-price">
                                                    <?php if ($this->_var['goods']['promote_price'] != ''): ?>
                                                        <?php echo $this->_var['goods']['promote_price']; ?>
                                                    <?php else: ?>
                                                        <?php echo $this->_var['goods']['shop_price']; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="original-price"><?php echo $this->_var['goods']['market_price']; ?></div>
                                            </div>
                                        </div>
                                        <div class="col col-4">
                                            <div class="p-operate">
                                                <a href="javascript:void(0);" id="compareLink">
                                                <input id="<?php echo $this->_var['goods']['goods_id']; ?>" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, <?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['type']; ?>', '<?php echo $this->_var['goods']['goods_thumb']; ?>', '<?php echo $this->_var['goods']['shop_price']; ?>', '<?php echo $this->_var['goods']['market_price']; ?>')">
                                                <label class="ui-label" for="<?php echo $this->_var['goods']['goods_id']; ?>"><?php echo $this->_var['lang']['compare']; ?></label>
                                            </a>
                                            <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="choose-btn-coll<?php if ($this->_var['goods']['is_collect']): ?> selected<?php endif; ?>"><i class="iconfont<?php if ($this->_var['goods']['is_collect']): ?> icon-zan-alts<?php else: ?> icon-zan-alt<?php endif; ?>"></i><?php echo $this->_var['lang']['btn_collect']; ?></a>
                                            <?php if ($this->_var['goods']['prod'] == 1): ?>
                                                <?php if ($this->_var['goods']['goods_number'] > 0): ?>
                                                <a href="javascript:void(0);" onClick="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>,0,event,this,'flyItem2');" rev="<?php echo $this->_var['goods']['goods_thumb']; ?>" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="<?php echo $this->_var['lang']['select_attr']; ?>" class="addcart">
                                                    <i class="iconfont icon-carts"></i><?php echo $this->_var['lang']['add_to_cart']; ?>
                                                </a>
                                                <?php else: ?>
                                                <a href="javascript:void(0);"  class="addcart"><i class="iconfont icon-carts"></i><?php echo $this->_var['lang']['have_no_goods']; ?></a>
                                                <?php endif; ?>
                                            <?php else: ?>
                                            <a href="javascript:void(0);" onClick="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>,0,event,this,'flyItem2');" class="addcart" rev="<?php echo $this->_var['goods']['goods_thumb']; ?>"><i class="iconfont icon-carts"></i><?php echo $this->_var['lang']['add_to_cart']; ?></a>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endif; ?> 
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                            </ul>
                            <?php echo $this->fetch('library/pages.lbi'); ?>
                        	<div id="flyItem2" class="fly_item2"><img src="" width="40" height="40"></div>
                        <?php endif; ?>
						
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
             <?php endif; ?>
			<?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['recommend_merchants'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </div>
    </div>
    
    	 
    <?php echo $this->fetch('library/duibi.lbi'); ?>
    
    
    <?php 
$k = array (
  'name' => 'user_menu_position',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    <input name="script_name" value="<?php echo $this->_var['script_name']; ?>" type="hidden" />
	<input name="cur_url" value="<?php echo $this->_var['cur_url']; ?>" type="hidden" />
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,common.js,compare.js,cart_common.js,parabola.js,shopping_flow.js,cart_quick_links.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
	<script type="text/javascript">
    $(function(){
		$(".gl-i-wrap").slide({mainCell:".sider ul",effect:"left",pnLoop:false,autoPlay:false,autoPage:true,prevCell:".sider-prev",nextCell:".sider-next",vis:5});
		
		//对比初始化
		Compare.init();
	});
    </script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <meta name="robots" content="noindex, nofollow">
    <title><?php echo $this->_var['lang']['visual_home_title']; ?></title>
    <link rel="shortcut icon" href="../favicon.ico" />
    <link rel="icon" href="../animated_favicon.gif" type="image/gif" />
    
	<link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/layoutit.css" />
    <link rel="stylesheet" type="text/css" href="css/layer.css" />
    <link rel="stylesheet" type="text/css" href="css/dsc_visual.css" />
    <link rel="stylesheet" type="text/css" href="css/color.css" />
    <link rel="stylesheet" type="text/css" href="css/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="css/purebox.css" />
    <link rel="stylesheet" type="text/css" href="../js/spectrum-master/spectrum.css" />
    <link rel="stylesheet" type="text/css" href="../js/perfect-scrollbar/perfect-scrollbar.min.css" />
    <?php echo $this->smarty_insert_scripts(array('files'=>'../js/jquery-1.9.1.min.js,../js/jquery.json.js,../js/transport_jquery.js,../js/perfect-scrollbar/perfect-scrollbar.min.js,../js/jquery.nyroModal.js,../js/plupload.full.min.js,../js/jquery.SuperSlide.2.1.1.js,../js/jquery.form.js,../js/lib_wlmobanFunc.js,../js/visualization.js,../js/jquery.cookie.js,../js/spectrum-master/spectrum.js,../js/jquery-ui/jquery-ui.min.js,common.js,layer.js')); ?>
    <script type="text/javascript">
    //这里把JS用到的所有语言都赋值到这里
    <?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
</head>
<body>
    <div class="main-wrapper">
        <div class="dp_leftcolumn">
            <ul class="tab-bar">
                <li class="modules">
                    <div class="wrap">
                        <div class="left-line"></div>
                        <i class="iconfont icon-template"></i>
                        <span><?php echo $this->_var['lang']['modules_one']; ?></span>
                        <b class="b-small"></b>
                    </div>
                </li>
                <li class="page-content">
                    <div class="wrap">
                        <div class="left-line"></div>
                        <i class="iconfont icon-visual-con"></i>
                        <span><?php echo $this->_var['lang']['modules_three']; ?></span>
                        <b class="b-small"></b>
                    </div>
                </li>
                <li class="page-head">
                    <div class="wrap">
                        <div class="left-line"></div>
                        <i class="iconfont icon-store-alt"></i>
                        <span><?php echo $this->_var['lang']['modules_four']; ?></span>
                        <b class="b-small"></b>
                    </div>
                </li>
            </ul>
            <ul class="toolbar">
                <li class="li modules-slide" ectype="toolbar_li">
                    <b class="iconfont icon-cha" ectype="close"></b>
                    <div class="inside">
                        <p class="red"><?php echo $this->_var['lang']['modules_inside']; ?></p>                        
                    </div>
                    <div class="modules-box">
                        <div class="modules-wrap modules-wrap-current">
                            <div class="head" ectype="head"><span><?php echo $this->_var['lang']['modules_head_1']; ?></span><i class="iconfont icon-xia"></i></div>
                            <div class="module-list clearfix">
                            	<?php if ($this->_var['pc_page']['tem'] != 'backup_festival_1'): ?>
                                <div class="visual-item lyrow lunbotu" data-mode="lunbo" data-purebox="adv" data-li="1" data-length="5" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_01.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_1']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="banner home-banner">
                                        	<div class="bd">
                                            	<ul data-type="range">
                                                    <li><a href="#"><img src="../data/gallery_album/visualDefault/shop_banner_pic.jpg"></a></li>
                                                </ul>
                                            </div>
                                            <div class="hd"><ul></ul></div>
                                            <div class="vip-outcon">
                                                <div class="vip-con">
                                                    <div class="insertVipEdit" data-mode="insertVipEdit">
                                                        <div class="userVip-info" ectype="user_info">
                                                            <div class="avatar">
                                                                <a href="user.php?act=profile"><img src="../themes/wlmoban_dsc2017/images/avatar.png"></a>
                                                            </div>
                                                            <div class="login-info">
                                                                <span><?php echo $this->_var['lang']['welcome_to']; ?><?php echo $this->_var['shop_name']; ?>!</span>
                                                                <a href="user.php" class="login-button"><?php echo $this->_var['lang']['login']; ?></a>
                                                                <a href="merchants.php" target="_blank" class="register_button"><?php echo $this->_var['lang']['register_button']; ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="vip-item">
                                                            <div class="tit">
                                                                <a href="javascript:void(0);" class="tab_head_item on">网店信息</a>
                                                                <a href="javascript:void(0);" class="tab_head_item">网店帮助分类</a>
                                                            </div>
                                                            <div class="con">
                                                                <ul>
                                                                    <li><a href="article.php?id=5" target="_blank">免责条款</a></li>
                                                                    <li><a href="article.php?id=4" target="_blank">联系我们</a></li>
                                                                    <li><a href="article.php?id=3" target="_blank">咨询热点</a></li>
                                                                </ul>
                                                                <ul style="display: none;">
                                                                    <li><a href="article.php?id=61" target="_blank">堂主的一封信：文旅新零售平台 我们已获得初步成功！</a></li>
                                                                    <li><a href="article.php?id=58" target="_blank">文旅新零售平台多用户商城系统版本升级 1.2版正式发布</a></li>
                                                                    <li><a href="article.php?id=64" target="_blank">中国联通问答系统“问答堂”正式上线，产品相关问答一搜全知道</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="vip-item">
                                                            <div class="tit">快捷入口</div>
                                                            <div class="kj_con">
                                                                <div class="item item_1">
                                                                    <a href="history_list.php" target="_blank">
                                                                        <i class="iconfont icon-browse"></i>
                                                                        <span>我的浏览</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_2">
                                                                    <a href="user.php?act=collection_list" target="_blank">
                                                                        <i class="iconfont icon-zan-alt"></i>
                                                                        <span>我的收藏</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_3">
                                                                    <a href="user.php?act=order_list" target="_blank">
                                                                        <i class="iconfont icon-order"></i>
                                                                        <span>我的订单</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_4">
                                                                    <a href="user.php?act=account_safe" target="_blank">
                                                                        <i class="iconfont icon-password-alt"></i>
                                                                        <span>账号安全</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_5">
                                                                    <a href="user.php?act=affiliate" target="_blank">
                                                                        <i class="iconfont icon-share-alt"></i>
                                                                        <span>我要分享</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_6">
                                                                    <a href="merchants.php" target="_blank">
                                                                        <i class="iconfont icon-settled"></i>
                                                                        <span>商家入驻</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="setup_box" data-html="not">
                                                        <div class="barbg"></div>
                                                        <a href="javascript:void(0);" class="move-edit" ectype='vipEdit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-need" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/8.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_home']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="need-channel clearfix" id="h-need" data-type="range" data-lift="">
                                            <div class="channel-column" style="background:url(../data/gallery_album/visualDefault/ad_03_pic_02.jpg) no-repeat;">
                                                <div class="column-title">
                                                	<h3>主标题</h3>
                                                    <p>副标题</p>
                                                </div>
                                                <div class="column-img"><img src="../data/gallery_album/visualDefault/homeIndex_008.png"></div>
                                                <a href="#" target="_blank" class="column-btn">去看看</a>
                                            </div>
                                            <div class="channel-column" style="background:url(../data/gallery_album/visualDefault/ad_03_pic_02.jpg) no-repeat;">
                                                <div class="column-title">
                                                	<h3>主标题</h3>
                                                    <p>副标题</p>
                                                </div>
                                                <div class="column-img"><img src="../data/gallery_album/visualDefault/homeIndex_008.png"></div>
                                                <a href="#" target="_blank" class="column-btn">去看看</a>
                                            </div>
                                            <div class="channel-column" style="background:url(../data/gallery_album/visualDefault/ad_03_pic_02.jpg) no-repeat;">
                                                <div class="column-title">
                                                	<h3>主标题</h3>
                                                    <p>副标题</p>
                                                </div>
                                                <div class="column-img"><img src="../data/gallery_album/visualDefault/homeIndex_008.png"></div>
                                                <a href="#" target="_blank" class="column-btn">去看看</a>
                                            </div>
                                            <div class="channel-column" style="background:url(../data/gallery_album/visualDefault/ad_03_pic_02.jpg) no-repeat;">
                                                <div class="column-title">
                                                	<h3>主标题</h3>
                                                    <p>副标题</p>
                                                </div>
                                                <div class="column-img"><img src="../data/gallery_album/visualDefault/homeIndex_008.png"></div>
                                                <a href="#" target="_blank" class="column-btn">去看看</a>
                                            </div>
                                            <div class="channel-column" style="background:url(../data/gallery_album/visualDefault/ad_03_pic_02.jpg) no-repeat;">
                                                <div class="column-title">
                                                	<h3>主标题</h3>
                                                    <p>副标题</p>
                                                </div>
                                                <div class="column-img"><img src="../data/gallery_album/visualDefault/homeIndex_008.png"></div>
                                                <a href="#" target="_blank" class="column-btn">去看看</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-promo" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/5.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_promo']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="promoWarp clearfix" id="h-promo" data-type="range" data-lift="">
                                            <div class="tit" style="background-color:#ed5f5f;">
                                                <h3>主标题</h3>
                                                <span>此标题</span>
                                                <i class="titIcon"></i>
                                            </div>
                                            <ul>
                                                <li class="opacity_img">
                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                    <div class="info">
                                                        <div class="price">￥370.50</div>
                                                        <div class="name"><a href="#" target="_blank">夏季短袖连衣裙新款打底裙碎</a></div>
                                                        <div class="time" ectype="time">
                                                            <span class="label">剩余时间：</span>
                                                            <span class="days">00</span>
                                                            <em>：</em>
                                                            <span class="hours">00</span>
                                                            <em>：</em>
                                                            <span class="minutes">00</span>
                                                            <em>：</em>
                                                            <span class="seconds">00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="opacity_img">
                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                    <div class="info">
                                                        <div class="price">￥370.50</div>
                                                        <div class="name"><a href="#" target="_blank">夏季短袖连衣裙新款打底裙碎</a></div>
                                                        <div class="time" ectype="time">
                                                            <span class="label">剩余时间：</span>
                                                            <span class="days">00</span>
                                                            <em>：</em>
                                                            <span class="hours">00</span>
                                                            <em>：</em>
                                                            <span class="minutes">00</span>
                                                            <em>：</em>
                                                            <span class="seconds">00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="opacity_img">
                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                    <div class="info">
                                                        <div class="price">￥370.50</div>
                                                        <div class="name"><a href="#" target="_blank">夏季短袖连衣裙新款打底裙碎</a></div>
                                                        <div class="time" ectype="time">
                                                            <span class="label">剩余时间：</span>
                                                            <span class="days">00</span>
                                                            <em>：</em>
                                                            <span class="hours">00</span>
                                                            <em>：</em>
                                                            <span class="minutes">00</span>
                                                            <em>：</em>
                                                            <span class="seconds">00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="opacity_img">
                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                    <div class="info">
                                                        <div class="price">￥370.50</div>
                                                        <div class="name"><a href="#" target="_blank">夏季短袖连衣裙新款打底裙碎</a></div>
                                                        <div class="time" ectype="time">
                                                            <span class="label">剩余时间：</span>
                                                            <span class="days">00</span>
                                                            <em>：</em>
                                                            <span class="hours">00</span>
                                                            <em>：</em>
                                                            <span class="minutes">00</span>
                                                            <em>：</em>
                                                            <span class="seconds">00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="opacity_img">
                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                    <div class="info">
                                                        <div class="price">￥370.50</div>
                                                        <div class="name"><a href="#" target="_blank">夏季短袖连衣裙新款打底裙碎</a></div>
                                                        <div class="time" ectype="time">
                                                            <span class="label">剩余时间：</span>
                                                            <span class="days">00</span>
                                                            <em>：</em>
                                                            <span class="hours">00</span>
                                                            <em>：</em>
                                                            <span class="minutes">00</span>
                                                            <em>：</em>
                                                            <span class="seconds">00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow homeseckill w1200" data-mode="h-seckill" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/5.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_seckill']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="seckill-channel promoWarp clearfix" id="h-seckill" data-type="range" data-lift="">
                                            <div class="box-hd clearfix">
                                                <i class="box_hd_arrow"></i>
                                                <i class="box_hd_dec"></i>
                                                <i class="box-hd-icon"></i>
                                                <div class="sk-time-cd">
                                                    <div class="sk-cd-tit">距结束</div>
                                                    <div class="cd-time fl" ectype="time" data-time="2018-01-13 12:00:00">
                                                        <div class="days hide">00</div>
                                                        <span class="split hide">天</span>
                                                        <div class="hours">00</div>
                                                        <span class="split">时</span>
                                                        <div class="minutes">00</div>
                                                        <span class="split">分</span>
                                                        <div class="seconds">00</div>
                                                        <span class="split">秒</span>
                                                    </div>
                                                </div>
                                                <div class="sk-more"><a href="seckill.php" target="_blank">更多秒杀</a> <i class="arrow"></i></div>
                                            </div>
                                            <div class="box-bd clearfix">
                                                <ul>
                                                    <li class="opacity_img">
                                                        <div class="p-img"><a href="seckill.php?id=50" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png" class="img-lazyload"></a></div>
                                                        <div class="p-name"><a href="seckill.php?id=50" target="_blank" title="中国香港进口首选沙嗲味牛肉脯80g">中国香港进口首选沙嗲味牛肉脯80g</a></div>
                                                        <div class="p-over">
                                                            <div class="p-info">
                                                                <div class="p-price">
                                                                    <span class="shop-price"><em>¥</em>17.00</span>
                                                                    <span class="original-price"><em>¥</em>23.88</span>
                                                                </div>
                                                            </div>
                                                            <div class="p-btn">
                                                                <a href="seckill.php?id=50&amp;act=view" target="_blank">立即抢购</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="opacity_img">
                                                        <div class="p-img"><a href="seckill.php?id=23" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png" class="img-lazyload"></a></div>
                                                        <div class="p-name"><a href="seckill.php?id=23" target="_blank" title="天瀛男装2014新款男装 男士长袖T恤 修身韩版男T恤打底衫潮牌衣服男t桖 黑色 L">天瀛男装2014新款男装 男士长袖T恤 修身韩版男T恤打底衫潮牌衣服男t桖 黑色 L</a></div>
                                                        <div class="p-over">
                                                            <div class="p-info">
                                                                <div class="p-price">
                                                                    <span class="shop-price"><em>¥</em>153.00</span>
                                                                    <span class="original-price"><em>¥</em>81.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="p-btn">
                                                                <a href="seckill.php?id=23&amp;act=view" target="_blank">立即抢购</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="opacity_img">
                                                        <div class="p-img"><a href="seckill.php?id=54" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png" class="img-lazyload"></a></div>
                                                        <div class="p-name"><a href="seckill.php?id=54" target="_blank" title="韩国进口Murgerbon美极棒海苔2g*10包">韩国进口Murgerbon美极棒海苔2g*10包</a></div>
                                                        <div class="p-over">
                                                            <div class="p-info">
                                                                <div class="p-price">
                                                                    <span class="shop-price"><em>¥</em>54.30</span>
                                                                    <span class="original-price"><em>¥</em>80.28</span>
                                                                </div>
                                                            </div>
                                                            <div class="p-btn">
                                                                <a href="seckill.php?id=54&amp;act=view" target="_blank">立即抢购</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="opacity_img">
                                                        <div class="p-img"><a href="seckill.php?id=26" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png" class="img-lazyload"></a></div>
                                                        <div class="p-name"><a href="seckill.php?id=26" target="_blank" title="媞沫 2014夏装新品女装 宽松假两件蝙蝠短袖印花雪纺衫 粉色 S">媞沫 2014夏装新品女装 宽松假两件蝙蝠短袖印花雪纺衫 粉色 S</a></div>
                                                        <div class="p-over">
                                                            <div class="p-info">
                                                                <div class="p-price">
                                                                    <span class="shop-price"><em>¥</em>153.00</span>
                                                                    <span class="original-price"><em>¥</em>70.80</span>
                                                                </div>
                                                            </div>
                                                            <div class="p-btn">
                                                                <a href="seckill.php?id=26&amp;act=view" target="_blank">立即抢购</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="opacity_img">
                                                        <div class="p-img"><a href="seckill.php?id=53" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png" class="img-lazyload"></a></div>
                                                        <div class="p-name"><a href="seckill.php?id=53" target="_blank" title="美国进口Almond Roca乐家扁桃仁糖375g">美国进口Almond Roca乐家扁桃仁糖375g</a></div>
                                                        <div class="p-over">
                                                            <div class="p-info">
                                                                <div class="p-price">
                                                                    <span class="shop-price"><em>¥</em>49.50</span>
                                                                    <span class="original-price"><em>¥</em>80.28</span>
                                                                </div>
                                                            </div>
                                                            <div class="p-btn">
                                                                <a href="seckill.php?id=53&amp;act=view" target="_blank">立即抢购</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a href="javascript:void(0);" class="prev"><i class="iconfont icon-left"></i></a>
                                            	<a href="javascript:void(0);" class="next"><i class="iconfont icon-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200 not-draggable" data-mode="h-sepmodule" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/6.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_sepmodule']; ?></span>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="sepmodule clearfix" id="h-sepmodule" data-type="range" data-lift="">
                                            <div class="module" ectype="module">
                                                <div class="sepmodule_warp" data-hierarchy='1'>
                                                    <div class="sepmod-left" style="background-color:#9893f4;">
                                                        <div class="tit">
                                                            <h3>主标题</h3>
                                                            <div class="subtit"><em style="background-color:#9893f4;">次标题<i></i></em><span></span></div>
                                                            <i class="tit_icon"></i>
                                                        </div>
                                                        <div class="opacity_img sepmod-goods">
                                                            <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                            <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            <div class="price">￥0.00</div>
                                                        </div>
                                                        <i class="titIcon"></i>
                                                    </div>
                                                    <div class="sepmod-right">
                                                        <ul>
                                                            <li class="opacity_img sepmod-goods">
                                                                <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                            <li class="opacity_img sepmod-goods">
                                                                <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                            <li class="opacity_img sepmod-goods">
                                                                <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                            <li class="opacity_img sepmod-goods">
                                                                <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="setup_box">
                                                    <div class="barbg"></div>
                                                    <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                                    <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                                    <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                                    <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                                </div>
                                            </div>
                                            <div class="module fr" ectype="module">
                                                <div class="sepmodule_warp" data-hierarchy='2'>
                                                    <div class="sepmod-left" style="background-color:#9893f4;">
                                                        <div class="tit">
                                                            <h3>主标题</h3>
                                                            <div class="subtit"><em style="background-color:#9893f4;">次标题<i></i></em><span></span></div>
                                                            <i class="tit_icon"></i>
                                                        </div>
                                                        <div class="sepmod-goods">
                                                            <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                            <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            <div class="price">￥0.00</div>
                                                        </div>
                                                        <i class="titIcon"></i>
                                                    </div>
                                                    <div class="sepmod-right">
                                                        <ul>
                                                            <li class="sepmod-goods">
                                                                <div class="img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                            <li class="sepmod-goods">
                                                                <div class="img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                            <li class="sepmod-goods">
                                                                <div class="img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                            <li class="sepmod-goods">
                                                                <div class="img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                                <div class="setup_box">
                                                    <div class="barbg"></div>
                                                    <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                                    <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                                    <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                                    <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200 brandList" data-mode="h-brand" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/7.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_brand']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="brand-channel clearfix" id="h-brand" data-type="range" data-lift="">
                                        	<div class="home-brand-adv slide_lr_info"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_007.jpg" class="slide_lr_img"></a></div>
                                            <div ectype="homeBrand">
                                                <div class="brand-list" id="recommend_brands">
                                                    <ul>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                    </ul>
                                                    <input type="hidden" name="user_id" value="0">
                                                    <a href="javascript:void(0);" ectype="changeBrand" class="refresh-btn"><i class="iconfont icon-rotate-alt"></i><span>换一批</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-streamer" data-purebox="adv" ectype="visualItme" data-length="1">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/8.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_streamer']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="adv_module">
                                            <div class="hd"><ul></ul></div>
                                            <div class="bd">
                                                <ul data-type="range">
                                                    <li><a href=""><img src="../data/gallery_album/visualDefault/ad_01_pic.jpg"></a></li>
                                                </ul>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-master" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/9.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_master']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="master-channel" id="h-master" data-type="range" data-lift="">
                                            <div class="ftit"><h3>达人专区</h3></div>
                                            <div class="master-con">
                                                <div class="m-c-item m-c-i-1" style="background:url(../data/gallery_album/visualDefault/homeIndex_003.jpg) center center no-repeat;">
                                                    <div class="m-c-main">
                                                        <div class="title">
                                                            <h3>主标题</h3>
                                                            <span>次标题</span>
                                                        </div>
                                                        <a href="http://" class="m-c-btn" target="_blank">去见识</a>
                                                    </div>
                                                    <div class="img"><a href="http://" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_009.png"></a></div>
                                                </div>
                                                <div class="m-c-item m-c-i-2" style="background:url(../data/gallery_album/visualDefault/homeIndex_003.jpg) center center no-repeat;">
                                                    <div class="m-c-main">
                                                        <div class="title">
                                                            <h3>主标题</h3>
                                                            <span>次标题</span>
                                                        </div>
                                                        <a href="http://" class="m-c-btn" target="_blank">去见识</a>
                                                    </div>
                                                    <div class="img"><a href="http://" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_009.png"></a></div>
                                                </div>
                                                <div class="m-c-item m-c-i-3" style="background:url(../data/gallery_album/visualDefault/homeIndex_003.jpg) center center no-repeat;">
                                                    <div class="m-c-main">
                                                        <div class="title">
                                                            <h3>主标题</h3>
                                                            <span>次标题</span>
                                                        </div>
                                                        <a href="http://" class="m-c-btn" target="_blank">去见识</a>
                                                    </div>
                                                    <div class="img"><a href="http://" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_009.png"></a></div>
                                                </div>
                                                <div class="m-c-item m-c-i-4" style="background:url(../data/gallery_album/visualDefault/homeIndex_003.jpg) center center no-repeat;">
                                                    <div class="m-c-main">
                                                        <div class="title">
                                                            <h3>主标题</h3>
                                                            <span>次标题</span>
                                                        </div>
                                                        <a href="http://" class="m-c-btn" target="_blank">去见识</a>
                                                    </div>
                                                    <div class="img"><a href="http://" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_009.png"></a></div>
                                                </div>
                                                <div class="m-c-item m-c-i-5" style="background:url(../data/gallery_album/visualDefault/homeIndex_003.jpg) center center no-repeat;">
                                                    <div class="m-c-main">
                                                        <div class="title">
                                                            <h3>主标题</h3>
                                                            <span>次标题</span>
                                                        </div>
                                                        <a href="http://" class="m-c-btn" target="_blank">去见识</a>
                                                    </div>
                                                    <div class="img"><a href="http://" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_009.png"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-storeRec" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/10.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_storeRec']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="store-channel" id="h-storeRec" data-type="range" data-lift="">
                                            <div class="ftit"><h3>推荐店铺</h3></div>
                                            <div class="rec-store-list">
                                            	<div class="rec-store-item opacity_img">
                                                    <a href="#" target="_blank">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/homeIndex_005.jpg"></div>
                                                        <div class="info">
                                                            <div class="s-logo"><div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_001.jpg"></div></div>
                                                            <div class="s-title">
                                                                <div class="tit">主标题</div>
                                                                <div class="ui-tit">次标题</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="rec-store-item opacity_img">
                                                    <a href="#" target="_blank">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/homeIndex_005.jpg"></div>
                                                        <div class="info">
                                                            <div class="s-logo"><div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_001.jpg"></div></div>
                                                            <div class="s-title">
                                                                <div class="tit">主标题</div>
                                                                <div class="ui-tit">次标题</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="rec-store-item opacity_img">
                                                    <a href="#" target="_blank">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/homeIndex_005.jpg"></div>
                                                        <div class="info">
                                                            <div class="s-logo"><div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_001.jpg"></div></div>
                                                            <div class="s-title">
                                                            	<div class="tit">主标题</div>
                                                                <div class="ui-tit">次标题</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="rec-store-item opacity_img">
                                                    <a href="#" target="_blank">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/homeIndex_005.jpg"></div>
                                                        <div class="info">
                                                            <div class="s-logo"><div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_001.jpg"></div></div>
                                                            <div class="s-title">
                                                            	<div class="tit">主标题</div>
                                                                <div class="ui-tit">次标题</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="guessYouLike" data-purebox="goods" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_guessYouLike']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="lift-channel clearfix" id="guessYouLike" data-type="range" data-lift="">
                                            <div class="goodstitle" data-goodsTitle='title'>
                                                <div class="ftit"><h3>还没逛够</h3></div>
                                            </div>
                                            <ul>
                                            	<li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow" data-mode="custom" data-purebox="cust" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_04.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['custom']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="custom" data-type="range" data-lift=""><div class="default ui-draggable ui-box-display"><?php echo $this->_var['lang']['custom_default_content']; ?></div></div>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div class="visual-item lyrow lunbotu" data-mode="lunbo" data-purebox="adv" data-li="1" data-length="5" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_01.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_1']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="banner-wrapper">
                                        	<div class="nav-placeholder">导航栏占位区</div>
                                            <div class="banner home-banner">
                                                <div class="bd">
                                                    <ul data-type="range">
                                                        <li><a href="#"><img src="../data/gallery_album/visualDefault/shop_banner_pic.jpg"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="hd">
                                                    <ul></ul>
                                                </div>
                                            </div>
                                            <div class="vip-outcon">
                                                <div class="vip-con">
                                                    <div class="insertVipEdit" data-mode="insertVipEdit">
                                                        <div class="userVip-info" ectype="user_info">
                                                            <div class="avatar">
                                                                <a href="#"><img src="../themes/wlmoban_dsc2017/images/avatar.png"></a>
                                                            </div>
                                                            <div class="login-info">
                                                                <span>Hi，欢迎来到<?php echo $this->_var['shop_name']; ?>!</span>
                                                                <a href="user.php" class="login-button">请登录</a>
                                                                <a href="merchants.php" target="_blank" class="register_button">我要开店</a>
                                                            </div>
                                                        </div>
                                                        <div class="vip-item">
                                                            <div class="tit">
                                                                <a href="javascript:void(0);" class="tab_head_item on">网店信息</a>
                                                                <a href="javascript:void(0);" class="tab_head_item">网店帮助分类</a>
                                                            </div>
                                                            <div class="con">
                                                                <ul>
                                                                    <li><a href="article.php?id=5" target="_blank">免责条款</a></li>
                                                                    <li><a href="article.php?id=4" target="_blank">联系我们</a></li>
                                                                    <li><a href="article.php?id=3" target="_blank">咨询热点</a></li>
                                                                </ul>
                                                                <ul style="display: none;">
                                                                    <li><a href="article.php?id=61" target="_blank">堂主的一封信：文旅新零售平台 我们已获得初步成功！</a></li>
                                                                    <li><a href="article.php?id=58" target="_blank">文旅新零售平台多用户商城系统版本升级 1.2版正式发布</a></li>
                                                                    <li><a href="article.php?id=64" target="_blank">中国联通问答系统“问答堂”正式上线，产品相关问答一搜全知道</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="vip-item">
                                                            <div class="tit">快捷入口</div>
                                                            <div class="kj_con">
                                                                <div class="item item_1">
                                                                    <a href="history_list.php" target="_blank">
                                                                        <div class="img-browse"></div>
                                                                        <span>浏览足迹</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_2">
                                                                    <a href="user.php?act=collection_list" target="_blank">
                                                                        <div class="img-zan"></div>
                                                                        <span>我的收藏</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_3">
                                                                    <a href="user.php?act=order_list" target="_blank">
                                                                        <div class="img-order"></div>
                                                                        <span>我的订单</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_4">
                                                                    <a href="user.php?act=account_safe" target="_blank">
                                                                        <div class="img-password"></div>
                                                                        <span>我的钱包</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_5">
                                                                    <a href="user.php?act=affiliate" target="_blank">
                                                                        <div class="img-share"></div>
                                                                        <span>售后申请</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_6">
                                                                    <a href="merchants.php" target="_blank">
                                                                        <div class="img-settled"></div>
                                                                        <span>商家入驻</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="setup_box" data-html="not">
                                                        <div class="barbg"></div>
                                                        <a href="javascript:void(0);" class="move-edit" ectype='vipEdit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="fh-hot" data-purebox="adv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/8.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_hot']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="index-festival-adv">
                                            <ul data-type="range" id="fh-hot" data-lift="">
                                                <li class="festival-adv-top"><img src="images/visual/festival_home/festival_home_1.png"></li>
                                                <li class="festival-adv-bot">
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/festival_adv_1.png"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/festival_adv_2.png"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/festival_adv_3.png"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/festival_adv_4.png"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/festival_adv_5.png"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-seckill" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/5.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_seckill']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="seckill-channel" id="h-seckill" data-type="range" data-lift="">
                                            <div class="box-hd clearfix">
                                                <h3>好货大聚惠</h3>
                                                <div class="tit">周年庆第一波，每天5场限时秒杀</div>
                                                <div class="seckill-more"><a href="#" target="_blank">更多周年好货<i class="iconfont icon-right"></i></a></div>
                                            </div>
                                            <div class="box-bd clearfix">
                                                <ul>
                                                    <li class="opacity_img">
                                                        <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                        <div class="p-name"><a href="#" target="_blank">韩版秋冬时尚修身显瘦连帽小棉袄韩版秋冬时尚修身显瘦连帽小棉袄</a></div>
                                                        <div class="p-price">
                                                            <span class="shop-price"><em>¥</em>5888.00</span>
                                                            <span class="original-price"><em>¥</em>5888.00</span>
                                                        </div>
                                                    </li>
                                                    <li class="opacity_img">
                                                        <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                        <div class="p-name"><a href="#" target="_blank">韩版秋冬时尚修身显瘦连帽小棉袄韩版秋冬时尚修身显瘦连帽小棉袄</a></div>
                                                        <div class="p-price">
                                                            <span class="shop-price"><em>¥</em>5888.00</span>
                                                            <span class="original-price"><em>¥</em>5888.00</span>
                                                        </div>
                                                    </li>
                                                    <li class="opacity_img">
                                                        <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                        <div class="p-name"><a href="#" target="_blank">韩版秋冬时尚修身显瘦连帽小棉袄韩版秋冬时尚修身显瘦连帽小棉袄</a></div>
                                                        <div class="p-price">
                                                            <span class="shop-price"><em>¥</em>5888.00</span>
                                                            <span class="original-price"><em>¥</em>5888.00</span>
                                                        </div>
                                                    </li>
                                                    <li class="opacity_img">
                                                        <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                        <div class="p-name"><a href="#" target="_blank">韩版秋冬时尚修身显瘦连帽小棉袄韩版秋冬时尚修身显瘦连帽小棉袄</a></div>
                                                        <div class="p-price">
                                                            <span class="shop-price"><em>¥</em>5888.00</span>
                                                            <span class="original-price"><em>¥</em>5888.00</span>
                                                        </div>
                                                    </li>
                                                    <li class="opacity_img">
                                                        <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                        <div class="p-name"><a href="#" target="_blank">韩版秋冬时尚修身显瘦连帽小棉袄韩版秋冬时尚修身显瘦连帽小棉袄</a></div>
                                                        <div class="p-price">
                                                            <span class="shop-price"><em>¥</em>5888.00</span>
                                                            <span class="original-price"><em>¥</em>5888.00</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a href="javascript:void(0);" class="prev"><i class="iconfont icon-left"></i></a>
												<a href="javascript:void(0);" class="next"><i class="iconfont icon-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="fh-discount" data-purebox="adv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/7.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_discount']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="index-venue-adv">
                                            <div class="venue_warpper" data-type="range" id="fh-discount" data-lift="">
                                                <div class="venue_act_list">
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_act_list_1.jpg"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_act_list_2.jpg"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_act_list_3.jpg"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_act_list_4.jpg"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_act_list_5.jpg"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_act_list_6.jpg"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_act_list_7.jpg"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_act_list_8.jpg"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_act_list_9.jpg"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_act_list_10.jpg"></a>
                                                </div>
                                                <div class="venue_shop_list">
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_shop_list_1.jpg"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_shop_list_2.jpg"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_shop_list_3.jpg"></a>
                                                    <a href="#" target="_blank"><img src="images/visual/festival_home/adv/venue_shop_list_4.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200 brandList" data-mode="h-brand" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/7.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_brand']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="brand-channel clearfix" id="h-brand" data-type="range" data-lift="">
                                            <div class="brand-adv-warp">
                                                <div class="brand-adv-item brand-adv-item-1">
                                                    <div class="brand-item-head">
                                                        <span class="cn">品牌闪购</span>
                                                        <span class="en">BRAND SALE</span>
                                                        <a href="#" class="more">更多<i class="iconfont icon-right"></i></a>
                                                    </div>
                                                    <div class="brand-item-img"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/brand-adv-item-1.jpg"></a></div>
                                                </div>
                                                <div class="brand-adv-item brand-adv-item-2">
                                                    <div class="brand-item-head">
                                                        <span class="cn">超级品牌日</span>
                                                        <span class="en">SUPER BRAND</span>
                                                        <a href="#" class="more">更多<i class="iconfont icon-right"></i></a>
                                                    </div>
                                                    <div class="brand-item-img"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/brand-adv-item-2.jpg"></a></div>
                                                </div>
                                                <div class="brand-adv-item brand-adv-item-3">
                                                    <div class="brand-item-head">
                                                        <span class="cn">品牌活动</span>
                                                        <span class="en">BRAND ACTIVITY</span>
                                                        <a href="#" class="more">更多<i class="iconfont icon-right"></i></a>
                                                    </div>
                                                    <div class="brand-item-img"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/brand-adv-item-3.jpg"></a></div>
                                                </div>
                                            </div>
                                            <div class="brand-list" id="recommend_brands">
                                                <ul>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        <div class="brand-mash">
                                                            <div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
                                                            <div class="coupon"><a href="#" target="_blank"><span>关注人数 <em id="collect_count_204">1</em></span><div class="click-enter">点击进入</div></a></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <input type="hidden" name="user_id" value="0">
                                                <a href="javascript:void(0);" ectype="changeBrand" class="refresh-btn"><i class="iconfont icon-rotate-alt"></i><span>换一批</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="fh-haohuo" data-purebox="adv" data-li="1" ectype="visualItme" data-length='7'>
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/7.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_haohuo']; ?></span>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="second-wrapper clearfix" id="h-haohuo" data-type="range" data-lift="">
                                            <div class="module hh-module" ectype="module">
                                            	<div class="sepmodule_warp" data-hierarchy='1'>
                                                    <div class="title">
                                                        <h5>发现好货</h5>
                                                        <a href="#" class="more" target="_blank"><span>更多好货</span><i class="iconfont icon-right"></i></a>
                                                    </div>
                                                    <div class="second-content">
                                                        <ul>
                                                            <li class="first">
                                                                <div class="p-img p-img-scale"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/second_1.jpg"></a></div>
                                                                <div class="p-name">阿迪达斯三叶草</div>
                                                                <div class="p-desc">也许是每一款经典系列都应该有一个独特的故事吧</div>
                                                                <a href="#" class="sew_btn" target="_blank">点击查看</a>
                                                            </li>
                                                            <li class="sew-item">
                                                                <div class="p-img p-img-scale"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/second_2.jpg"></a></div>
                                                                <div class="p-info">
                                                                    <div class="p-name">攀升兄弟</div>
                                                                    <div class="p-desc">I7独显主机</div>
                                                                </div>
                                                            </li>
                                                            <li class="sew-item">
                                                                <div class="p-img p-img-scale"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/second_3.jpg"></a></div>
                                                                <div class="p-info">
                                                                    <div class="p-name">360行车记录</div>
                                                                    <div class="p-desc">夜视 监控 电子狗 蓝牙</div>
                                                                </div>
                                                            </li>
                                                            <li class="sew-item">
                                                                <div class="p-img p-img-scale"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/second_4.jpg"></a></div>
                                                                <div class="p-info">
                                                                    <div class="p-name">三星55吋</div>
                                                                    <div class="p-desc">4K处理器流畅不卡顿</div>
                                                                </div>
                                                            </li>
                                                            <li class="sew-item">
                                                                <div class="p-img p-img-scale"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/second_5.jpg"></a></div>
                                                                <div class="p-info">
                                                                    <div class="p-name">海尔对开门</div>
                                                                    <div class="p-desc">风冷无霜 低温净味</div>
                                                                </div>
                                                            </li>
                                                            <li class="sew-item">
                                                                <div class="p-img p-img-scale"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/second_6.jpg"></a></div>
                                                                <div class="p-info">
                                                                    <div class="p-name">华为智能腕表</div>
                                                                    <div class="p-desc">防水蓝宝石玻璃镜面</div>
                                                                </div>
                                                            </li>
                                                            <li class="sew-item">
                                                                <div class="p-img p-img-scale"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/second_7.jpg"></a></div>
                                                                <div class="p-info">
                                                                    <div class="p-name">OPPO R11</div>
                                                                    <div class="p-desc">新品热力红 30天免息</div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                                <div class="setup_box">
                                                    <div class="barbg"></div>
                                                    <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                                    <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                                    <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                                    <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                                </div>
                                            </div>
                                            <div class="module tj-module" ectype="module">
                                            	<div class="sepmodule_warp" data-hierarchy='2'>
                                                    <div class="title">
                                                        <h5>特色推荐</h5>
                                                        <a href="#" class="more" target="_blank"><span>更多特色推荐</span><i class="iconfont icon-right"></i></a>
                                                    </div>
                                                    <div class="second-content">
                                                        <div class="tj-item tj-item-1">
                                                            <p class="tit"><a href="#" target="_blank"><i class="tj-icon">纸 因有爱</i>用心呵护您和家人的健康</a></p>
                                                            <ul class="clearfix">
                                                                <li><div class="p-img p-img-scale"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/second_35.jpg"></a></div></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tj-item tj-item-1">
                                                            <p class="tit"><a href="#" target="_blank"><i class="tj-icon">纸 因有爱</i>用心呵护您和家人的健康</a></p>
                                                            <ul class="clearfix">
                                                                <li><div class="p-img p-img-scale"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/second_36.jpg"></a></div></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tj-item tj-item-1">
                                                            <p class="tit"><a href="#" target="_blank"><i class="tj-icon">纸 因有爱</i>用心呵护您和家人的健康</a></p>
                                                            <ul class="clearfix">
                                                                <li><div class="p-img p-img-scale"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/second_37.jpg"></a></div></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tj-item tj-item-1">
                                                            <p class="tit"><a href="#" target="_blank"><i class="tj-icon">纸 因有爱</i>用心呵护您和家人的健康</a></p>
                                                            <ul class="clearfix">
                                                                <li><div class="p-img p-img-scale"><a href="#" target="_blank"><img src="images/visual/festival_home/adv/second_38.jpg"></a></div></li>
                                                            </ul>
                                                        </div>
                                                        <div class="line"></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="setup_box">
                                                    <div class="barbg"></div>
                                                    <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                                    <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                                    <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                                    <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-phb" data-purebox="adv" data-li="1" ectype="visualItme" data-length="5">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/7.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_phb']; ?></span>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="second-wrapper secondwh-wrapper clearfix" id="h-phb" data-type="range" data-lift="">
                                            <div class="module tm-module" ectype="module">
                                                <div class="sepmodule_warp" data-hierarchy='1'>
                                                <div class="title">
                                                    <h5>特卖</h5>
                                                    <a href="#" class="more" target="_blank"><span>更多特卖</span><i class="iconfont icon-right"></i></a>
                                                </div>
                                                <div class="second-content">
                                                    <ul>
                                                        <li class="first">
                                                            <a href="#" target="_blank">
                                                                <div class="p-name">新年心愿单</div>
                                                                <div class="p-desc">满269减50,满999减100</div>
                                                                <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_16.jpg" alt=""></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <div class="p-name">茵曼 新年新衣</div>
                                                                <div class="p-desc">满500减100</div>
                                                                <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_17.jpg" alt=""></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <div class="p-name">茵曼 新年新衣</div>
                                                                <div class="p-desc">满500减100</div>
                                                                <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_18.jpg" alt=""></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <div class="p-name">茵曼 新年新衣</div>
                                                                <div class="p-desc">满500减100</div>
                                                                <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_19.jpg" alt=""></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <div class="p-name">茵曼 新年新衣</div>
                                                                <div class="p-desc">满500减100</div>
                                                                <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_20.jpg" alt=""></div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                </div>
                                                <div class="setup_box">
                                                    <div class="barbg"></div>
                                                    <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                                    <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                                    <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                                    <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                                </div>
                                            </div>
                                            <div class="module xp-module" ectype="module">
                                                <div class="sepmodule_warp" data-hierarchy='2'>
                                                <div class="title">
                                                    <h5>新品</h5>
                                                    <a href="#" class="more" target="_blank"><span>更多新品</span><i class="iconfont icon-right"></i></a>
                                                </div>
                                                <div class="second-content">
                                                    <ul>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <div class="p-name">茵曼 新年新衣</div>
                                                                <div class="p-desc">满500减100</div>
                                                                <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_17.jpg" alt=""></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <div class="p-name">茵曼 新年新衣</div>
                                                                <div class="p-desc">满500减100</div>
                                                                <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_17.jpg" alt=""></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <div class="p-name">茵曼 新年新衣</div>
                                                                <div class="p-desc">满500减100</div>
                                                                <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_17.jpg" alt=""></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <div class="p-name">茵曼 新年新衣</div>
                                                                <div class="p-desc">满500减100</div>
                                                                <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_18.jpg" alt=""></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <div class="p-name">茵曼 新年新衣</div>
                                                                <div class="p-desc">满500减100</div>
                                                                <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_19.jpg" alt=""></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <div class="p-name">茵曼 新年新衣</div>
                                                                <div class="p-desc">满500减100</div>
                                                                <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_20.jpg" alt=""></div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                </div>
                                                <div class="setup_box">
                                                    <div class="barbg"></div>
                                                    <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                                    <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                                    <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                                    <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                                </div>
                                            </div>
                                            <div class="module phb-module" ectype="module">
                                                <div class="sepmodule_warp" data-hierarchy='3'>
                                                <div class="title">
                                                    <h5>排行榜</h5>
                                                    <a href="#" class="more" target="_blank"><span>精品风向标</span><i class="iconfont icon-right"></i></a>
                                                </div>
                                                <div class="second-content">
                                                    <div class="com-list">
                                                        <div class="com-ul">
                                                            <div class="com-li">
                                                                <a href="#" target="_blank">
                                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                    <div class="p-name">【享12期免息】Apple iPhone X 64GB 深空灰 移动联通电信4G手机</div>
                                                                    <div class="p-price"><em>¥</em>8388.00</div>
                                                                    <i class="ph-icon ph-icon1">1</i>
                                                                </a>
                                                            </div>
                                                            <div class="com-li">
                                                                <a href="#" target="_blank">
                                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                    <div class="p-name">【享12期免息】Apple iPhone X 64GB 深空灰 移动联通电信4G手机</div>
                                                                    <div class="p-price"><em>¥</em>8388.00</div>
                                                                    <i class="ph-icon ph-icon2">2</i>
                                                                </a>
                                                            </div>
                                                            <div class="com-li">
                                                                <a href="#" target="_blank">
                                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                    <div class="p-name">【享12期免息】Apple iPhone X 64GB 深空灰 移动联通电信4G手机</div>
                                                                    <div class="p-price"><em>¥</em>8388.00</div>
                                                                    <i class="ph-icon ph-icon3">3</i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="com-ul">
                                                            <div class="com-li">
                                                                <a href="#" target="_blank">
                                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                    <div class="p-name">【享12期免息】Apple iPhone X 64GB 深空灰 移动联通电信4G手机</div>
                                                                    <div class="p-price"><em>¥</em>8388.00</div>
                                                                    <i class="ph-icon ph-icon4">4</i>
                                                                </a>
                                                            </div>
                                                            <div class="com-li">
                                                                <a href="#" target="_blank">
                                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                    <div class="p-name">【享12期免息】Apple iPhone X 64GB 深空灰 移动联通电信4G手机</div>
                                                                    <div class="p-price"><em>¥</em>8388.00</div>
                                                                    <i class="ph-icon ph-icon5">5</i>
                                                                </a>
                                                            </div>
                                                            <div class="com-li">
                                                                <a href="#" target="_blank">
                                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                    <div class="p-name">【享12期免息】Apple iPhone X 64GB 深空灰 移动联通电信4G手机</div>
                                                                    <div class="p-price"><em>¥</em>8388.00</div>
                                                                    <i class="ph-icon ph-icon6">6</i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="setup_box">
                                                    <div class="barbg"></div>
                                                    <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                                    <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                                    <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                                    <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="fh-pindao" data-purebox="adv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/8.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_home']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="pindao-enter clearfix">
                                            <ul class="clearfix" data-type="range" id="fh-pindao" data-lift="">
                                                <li class="item1">
                                                    <a href="#" target="_blank">
                                                        <span class="line n-line"></span>
                                                        <p class="name">文旅生鲜</p>
                                                        <span class="line w-line"></span>
                                                        <p class="desc">年货鲜到家 满299减120</p>
                                                        <img src="images/visual/festival_home/adv/pindao-enter-1.png" alt="">
                                                    </a>
                                                </li>
                                                <li class="item2">
                                                    <a href="#" target="_blank">
                                                        <span class="line n-line"></span>
                                                        <p class="name">文旅生鲜</p>
                                                        <span class="line w-line"></span>
                                                        <p class="desc">年货鲜到家 满299减120</p>
                                                        <img src="images/visual/festival_home/adv/pindao-enter-2.png" alt="">
                                                    </a>
                                                </li>
                                                <li class="item3">
                                                    <a href="#" target="_blank">
                                                        <span class="line n-line"></span>
                                                        <p class="name">文旅生鲜</p>
                                                        <span class="line w-line"></span>
                                                        <p class="desc">年货鲜到家 满299减120</p>
                                                        <img src="images/visual/festival_home/adv/pindao-enter-3.png" alt="">
                                                    </a>
                                                </li>
                                                <li class="item4">
                                                    <a href="#" target="_blank">
                                                        <span class="line n-line"></span>
                                                        <p class="name">文旅生鲜</p>
                                                        <span class="line w-line"></span>
                                                        <p class="desc">年货鲜到家 满299减120</p>
                                                        <img src="images/visual/festival_home/adv/pindao-enter-4.png" alt="">
                                                    </a>
                                                </li>
                                                <li class="item5">
                                                    <a href="#" target="_blank">
                                                        <span class="line n-line"></span>
                                                        <p class="name">文旅生鲜</p>
                                                        <span class="line w-line"></span>
                                                        <p class="desc">年货鲜到家 满299减120</p>
                                                        <img src="images/visual/festival_home/adv/pindao-enter-5.png" alt="">
                                                    </a>
                                                </li>
                                                <li class="item6">
                                                    <a href="#" target="_blank">
                                                        <span class="line n-line"></span>
                                                        <p class="name">文旅生鲜</p>
                                                        <span class="line w-line"></span>
                                                        <p class="desc">年货鲜到家 满299减120</p>
                                                        <img src="images/visual/festival_home/adv/pindao-enter-6.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200 not-draggable" data-mode="FhomeFloorModule" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['floor']; ?></span>
                                        </div>
                                    </div>
                                    <div class="floormodule festival-floormodule mr10" ectype="module">
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                        <div class="view" data-hierarchy='1'>
                                            <div class="floor-content" data-type="range">
                                                <div class="floor-line-con floorTwo floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                                    <div class="floor-hd" ectype="floorTit">
                                                    	<div class="title">
                                                            <div class="title-name">热门手机</div>
                                                            <div class="keyword">
                                                                <a href="#" target="_blank">智能手表</a>
                                                                <a href="#" target="_blank">智能手表</a>
                                                                <a href="#" target="_blank">智能手表</a>
                                                                <a href="#" target="_blank">智能手表</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="floor-bd">
                                                        <div class="left-img">
                                                            <a href="#" target="_blank">
                                                                <div class="p-img"><img src="images/visual/festival_home/adv/second_21.jpg"></div>
                                                                <div class="p-info">
                                                                    <div class="p-name">疯抢2018元神券</div>
                                                                    <div class="p-desc">iPhone X 12期免息限量抢</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="ul-list-img">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_22.jpg"></div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_23.jpg"></div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_24.jpg"></div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_25.jpg"></div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="bottom-list">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_26.jpg"></div>
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_27.jpg"></div>
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_28.jpg"></div>
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="brand-list">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
                                                                <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
                                                                <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
                                                                <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
                                                                <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
                                                                <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="floormodule festival-floormodule" ectype="module">
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                        <div class="view" data-hierarchy='2'>
                                            <div class="floor-content" data-type="range">
                                                <div class="floor-line-con floorFestival floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                                    <div class="floor-hd" ectype="floorTit">
                                                    	<div class="title">
                                                            <div class="title-name">热门手机</div>
                                                            <div class="keyword">
                                                                <a href="#" target="_blank">智能手表</a>
                                                                <a href="#" target="_blank">智能手表</a>
                                                                <a href="#" target="_blank">智能手表</a>
                                                                <a href="#" target="_blank">智能手表</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="floor-bd">
                                                        <div class="left-img">
                                                            <a href="#" target="_blank">
                                                                <div class="p-img"><img src="images/visual/festival_home/adv/second_21.jpg"></div>
                                                                <div class="p-info">
                                                                    <div class="p-name">疯抢2018元神券</div>
                                                                    <div class="p-desc">iPhone X 12期免息限量抢</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="ul-list-img">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_22.jpg"></div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_23.jpg"></div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_24.jpg"></div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_25.jpg"></div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="bottom-list">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_26.jpg"></div>
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_27.jpg"></div>
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank">
                                                                        <div class="p-img p-img-scale"><img src="images/visual/festival_home/adv/second_28.jpg"></div>
                                                                        <div class="p-name">Mate10 Pro限量抢购</div>
                                                                        <div class="p-desc">华为爆款最高省600</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="brand-list">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
                                                                <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
                                                                <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
                                                                <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
                                                                <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
                                                                <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-streamer" data-purebox="adv" ectype="visualItme" data-length="1">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/8.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_streamer']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="adv_module">
                                            <div class="hd"><ul></ul></div>
                                            <div class="bd">
                                                <ul data-type="range">
                                                    <li><a href=""><img src="../data/gallery_album/visualDefault/ad_01_pic.jpg"></a></li>
                                                </ul>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="guessYouLike" data-purebox="goods" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['modules_txt_guessYouLike']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="lift-channel clearfix" id="guessYouLike" data-type="range" data-lift="">
                                            <div class="goodstitle" data-goodsTitle='title'>
                                                <div class="ftit"><h3>还没逛够</h3></div>
                                            </div>
                                            <ul>
                                            	<li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow" data-mode="custom" data-purebox="cust" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_04.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['custom']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="custom" data-type="range" data-lift=""><div class="default ui-draggable ui-box-display">自定义内容，可以用来展示店铺的特色区域。</div></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if ($this->_var['pc_page']['tem'] != 'backup_festival_1'): ?>
                        <div class="modules-wrap modules-wrap-current mt20">
                            <div class="head" ectype="head"><span><?php echo $this->_var['lang']['modules_head_4']; ?></span><i class="iconfont icon-xia"></i></div>
                            <div class="module-list clearfix">
								<!--楼层模板一-->
                                <div class="visual-item lyrow w1200" data-mode="homeFloor" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['floor_1']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                            <div class="floor-line-con floorOne floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="floor-hd" ectype="floorTit">
                                                	<i class="box_hd_arrow"></i>
    												<i class="box_hd_dec"></i>
                                                	<div class="hd-tit">主分类名称</div>
                                                    <div class="hd-tags">
                                                    	<ul>
                                                        	<li class="first current">
                                                            	<span>新品推荐</span>
                                                                <i class="arrowImg"></i>
                                                            </li>
                                                            <li ectype="floor_cat_content">
                                                            	<span>次级分类</span>
                                                                <i class="arrowImg"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="floor-bd bd-mode-01">
                                                	<div class="bd-left">
                                                    	<div class="floor-left-slide">
                                                        	<div class="bd">
                                                            	<ul>
                                                                	<li><a href="#"><img src="../data/gallery_album/visualDefault/homeIndex_002.jpg" width="232" height="570"></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="hd"><ul></ul></div>
                                                        </div>
                                                        <div class="floor-left-adv">
                                                        	<a href="http://" class="mb10" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_004.jpg" width="232" height="280"></a>
                                                            <a href="http://" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_004.jpg" width="232" height="280"></a>
                                                        </div>
                                                    </div>
                                                    <div class="bd-right">
                                                    	<div class="floor-tabs-content clearfix">
                                                        	<div class="f-r-main f-r-m-adv">
                                                            	<div class="f-r-m-item">
                                                                	<a href="http://" target="_blank">
                                                                        <div class="title">
                                                                            <h3>主标题</h3>
                                                                            <span>次标题</span>
                                                                        </div>
                                                                        <img src="../data/gallery_album/visualDefault/homeIndex_004.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="f-r-m-item">
                                                                	<a href="http://" target="_blank">
                                                                        <div class="title">
                                                                            <h3>主标题</h3>
                                                                            <span>次标题</span>
                                                                        </div>
                                                                        <img src="../data/gallery_album/visualDefault/homeIndex_004.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="f-r-m-item">
                                                                	<a href="http://" target="_blank">
                                                                        <div class="title">
                                                                            <h3>主标题</h3>
                                                                            <span>次标题</span>
                                                                        </div>
                                                                        <img src="../data/gallery_album/visualDefault/homeIndex_004.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="f-r-m-item">
                                                                	<a href="http://" target="_blank">
                                                                        <div class="title">
                                                                            <h3>主标题</h3>
                                                                            <span>次标题</span>
                                                                        </div>
                                                                        <img src="../data/gallery_album/visualDefault/homeIndex_004.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="f-r-m-item f-r-m-i-double">
                                                                	<a href="http://" target="_blank">
                                                                        <div class="title">
                                                                            <h3>主标题</h3>
                                                                            <span>次标题</span>
                                                                        </div>
                                                                        <img src="../data/gallery_album/visualDefault/homeIndex_006.jpg">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="floor-fd">
                                                    <div class="floor-fd-brand clearfix">
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
								<!--楼层模板二-->
                                <div class="visual-item lyrow w1200 not-draggable" data-mode="homeFloorModule" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['floor_2']; ?></span>
                                        </div>
                                    </div>
                                    <div class="module floormodule mr8" ectype="module">
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                        <div class="view" data-hierarchy='1'>
                                            <div class="floor-content" data-type="range">
                                                <div class="floor-line-con floorTwo floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                                    <div class="floor-hd" ectype="floorTit">
                                                    	<i class="box_hd_arrow"></i>
    													<i class="box_hd_dec"></i>
                                                        <div class="hd-tit">主分类名称</div>
                                                        <div class="hd-tags">
                                                            <ul>
                                                                <li class="first current">
                                                                    <span>新品推荐</span>
                                                                    <i class="arrowImg"></i>
                                                                </li>
                                                                <li ectype="floor_cat_content">
                                                                    <span>次级分类</span>
                                                                    <i class="arrowImg"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="floor-bd">
                                                        <div class="bd-left">
                                                            <div class="floor-left-slide">
                                                                <div class="bd">
                                                                    <ul>
                                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_013.jpg"></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="hd"><ul></ul></div>
                                                            </div>
                                                        </div>
                                                        <div class="bd-right">
                                                            <div class="floor-tabs-content clearfix">
                                                                <div class="f-r-main f-r-m-adv">
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="f-r-main">
                                                                    <ul class="p-list">
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="floor-fd">
                                                        <div class="floor-fd-brand clearfix">
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="module floormodule" ectype="module">
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                        <div class="view" data-hierarchy='2'>
                                            <div class="floor-content" data-type="range">
                                                <div class="floor-line-con floorTwo floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                                    <div class="floor-hd" ectype="floorTit">
                                                        <div class="hd-tit">主分类名称</div>
                                                        <div class="hd-tags">
                                                            <ul>
                                                                <li class="first current">
                                                                    <span>新品推荐</span>
                                                                    <i class="arrowImg"></i>
                                                                </li>
                                                                <li ectype="floor_cat_content">
                                                                    <span>次级分类</span>
                                                                    <i class="arrowImg"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="floor-bd">
                                                        <div class="bd-left">
                                                            <div class="floor-left-slide">
                                                                <div class="bd">
                                                                    <ul>
                                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_013.jpg"></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bd-right">
                                                            <div class="floor-tabs-content clearfix">
                                                                <div class="f-r-main f-r-m-adv">
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="f-r-main">
                                                                    <ul class="p-list">
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="floor-fd">
                                                        <div class="floor-fd-brand clearfix">
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
								<!--楼层模板三-->
								<div class="visual-item lyrow w1200" data-mode="homeFloorThree" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['floor_3']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                            <div class="floor-line-con floorThree floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="floor-hd" ectype="floorTit">
                                                	<div class="hd-tit">主分类名称</div>
                                                    <div class="hd-tags">
                                                    	<ul>
                                                        	<li class="first current">新品推荐</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="floor-bd FT-bd-more-01">
                                                    <ul>
                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual232x590.jpg"></a></li>
                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual232x590.jpg"></a></li>
                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual232x590.jpg"></a></li>
                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual232x590.jpg"></a></li>
                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual232x590.jpg"></a></li>
                                                    </ul>
                                                </div>
												<div class="floor-fd">
                                                    <div class="floor-fd-brand clearfix">
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								<!--楼层模板四-->
								<div class="visual-item lyrow w1200" data-mode="homeFloorFour" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['floor_4']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                            <div class="floor-line-con floorFour floor-color-type-3" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="floor-hd" ectype="floorTit">
                                                	<div class="hd-tit">主分类名称</div>
                                                    <div class="hd-tags">
                                                    	<ul>
                                                        	<li class="first current">新品推荐</li>
															<li>连衣裙</li>
															<li>毛衣外套</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="floor-bd FF-bd-more-01">
													<div class="bd-left">
														<div class="floor-left-adv">
															<a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual200x520.jpg"></a>
														</div>
														<div class="p-list">
															<ul>
																<li class="left-child opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li class="right-child opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li class="left-child opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li class="right-child opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="bd-right">
														<div class="floor-left-adv">
															<a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual200x520.jpg"></a>
														</div>
														<div class="p-list">
															<ul>
																<li class="left-child opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li class="opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li class="left-child opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li class="opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
								<!--楼层模板五-->
								<div class="visual-item lyrow w1200" data-mode="homeFloorFive" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['floor_5']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                            <div class="floor-line-con floorFive floor-color-type-5" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="floor-hd" ectype="floorTit">
                                                	<div class="hd-tit"><i class="iconfont icon-ele"></i><em class="iconfont icon-spot"></em>主分类名称</div>
                                                    <div class="hd-tags">
                                                    	<ul>
                                                        	<li class="first current">新品推荐</li>
															<li>连衣裙</li>
															<li>毛衣外套</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="floor-bd FFI-bd-more-01">
													<div class="bd-left">
														<div class="floor-left-slide">
															<div class="bd">
																<ul>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual477x450.jpg"></a></li>
																</ul>
															</div>
															<div class="hd">
																<ul></ul>
															</div>
														</div>
														<div class="floor-left-adv">
															<ul>
																<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual236x450.jpg"></a></li>
																<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual236x450.jpg"></a></li>
																<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual236x450.jpg"></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="floor-fd">
													<div class="floor-fd-slide">
														<div class="bd">
															<ul>
																<li>
																	<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																	<div class="p-info">
																		<div class="p-name"><a href="#" target="_blank">唐人基 灌汤鱼丸180g*4袋 福州鱼丸 贡丸冷冻肉丸海鲜</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li>
																	<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																	<div class="p-info">
																		<div class="p-name"><a href="#" target="_blank">唐人基 灌汤鱼丸180g*4袋 福州鱼丸 贡丸冷冻肉丸海鲜</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li>
																	<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																	<div class="p-info">
																		<div class="p-name"><a href="#" target="_blank">唐人基 灌汤鱼丸180g*4袋 福州鱼丸 贡丸冷冻肉丸海鲜</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li>
																	<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																	<div class="p-info">
																		<div class="p-name"><a href="#" target="_blank">唐人基 灌汤鱼丸180g*4袋 福州鱼丸 贡丸冷冻肉丸海鲜</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li>
																	<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																	<div class="p-info">
																		<div class="p-name"><a href="#" target="_blank">唐人基 灌汤鱼丸180g*4袋 福州鱼丸 贡丸冷冻肉丸海鲜</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
															</ul>
														</div>
														<a href="javascript:void(0);" class="ff-prev"></a>
														<a href="javascript:void(0);" class="ff-next"></a>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							
								<!--楼层模板六-->
								<div class="visual-item lyrow w1200" data-mode="homeFloorSix" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['floor_6']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                            <div class="floor-line-con floorSix floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="floor-hd" ectype="floorTit">
                                                	<div class="hd-tit"><i class="icon"></i>主分类名称</div>
                                                    <div class="hd-tags">
                                                    	<ul>
                                                        	<li class="first current">新品推荐</li>
															<li>连衣裙</li>
															<li>毛衣外套</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="floor-bd FS-bd-more-01">
													<div class="bd-left">
														<div class="floor-left-slide">
															<div class="bd">
																<ul>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual400x480.jpg"></a></li>
																</ul>
															</div>
															<div class="hd">
																<ul></ul>
															</div>
														</div>
														<div class="floor-brand">
															<div class="fb-bd">
																<ul>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
																</ul>
															</div>
															<a href="javascript:void(0);" class="prev"><i class="iconfont icon-left"></i></a>
															<a href="javascript:void(0);" class="next"><i class="iconfont icon-right"></i></a>
														</div>
													</div>
													<div class="bd-right">
														<div class="floor-left-adv">
															<ul>
																<li class="f-bd-item child-double">
																	<a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual400x240.jpg"></a>
																	<a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual400x240.jpg"></a>
																</li>
																<li class="f-bd-item"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual200x480.jpg"></a></li>
																<li class="f-bd-item"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual200x480.jpg"></a></li>
															</ul>
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								<!--楼层模板七-->
								<div class="visual-item lyrow w1200" data-mode="homeFloorSeven" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['floor_7']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                            <div class="floor-line-con floorSeven floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="ftit"><h3>逛了又逛</h3></div>
                                                <div class="floor-bd FSE-bd-more-01">
													<div class="bd-left">
														<div class="floor-left-slide">
															<div class="bd">
																<ul>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual400x440.jpg"></a></li>
																</ul>
															</div>
															<div class="hd">
																<ul></ul>
															</div>
														</div>
														<div class="floor-nav">
															<ul>
																<li class="curr">新品推荐<i></i></li>
																<li>休闲食品<i></i></li>
																<li>油粮调味<i></i></li>
																<li>肉类<i></i></li>
																<li>休闲食品<i></i></li>
															</ul>
														</div>
													</div>
													<div class="bd-right">
														<div class="floor-left-adv">
															<a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual200x440.jpg"></a>
														</div>
														<div class="floor-tabs-content">
															<div class="f-r-main f-r-curr">
																<ul class="p-list">
																	<li class="child-curr opacity_img">
																		<div class="product">
																			<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																			<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																			<div class="p-price"><em>¥</em>370.50</div>
																		</div>
																	</li>
																	<li class="child-curr opacity_img">
																		<div class="product">
																			<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																			<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																			<div class="p-price"><em>¥</em>370.50</div>
																		</div>
																	</li>
																	<li class="child-curr opacity_img">
																		<div class="product">
																			<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																			<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																			<div class="p-price"><em>¥</em>370.50</div>
																		</div>
																	</li>
																	<li class="opacity_img">
																		<div class="product">
																			<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																			<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																			<div class="p-price"><em>¥</em>370.50</div>
																		</div>
																	</li>
																	<li class="opacity_img">
																		<div class="product">
																			<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																			<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																			<div class="p-price"><em>¥</em>370.50</div>
																		</div>
																	</li>
																	<li class="opacity_img">
																		<div class="product">
																			<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																			<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																			<div class="p-price"><em>¥</em>370.50</div>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--楼层模板八-->
                                <div class="visual-item lyrow w1200" data-mode="homeFloorEight" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['floor_8']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                        	<div class="floor-line-con floorEight floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                                <div class="floor-hd" ectype="floorTit">
                                                    <div class="hd-tit">电器/数码</div>
                                                    <div class="hd-tags">
                                                        <ul>
                                                            <li class="first current">新品推荐</li>
                                                            <li>电脑整机</li>
                                                            <li>大家店</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="floor-bd FE-bd-more-02">
                                                    <div class="bd-left">
                                                        <div class="floor_silder floor_silder1">
                                                            <div class="bd">
                                                                <ul>
                                                                    <li class="img_first">
                                                                        <a href="#" target="_blank">
                                                                            <div class="silder-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                            <div class="silder-title">
                                                                                <h3>开启品质生活1</h3>
                                                                                <span>爱上新家电</span>
                                                                            </div>
                                                                        </a>
                                                                        <div class="color_mask"></div>
                                                                    </li>
                                                                    <li class="img_second">
                                                                        <a href="#" target="_blank">
                                                                            <div class="silder-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                            <div class="silder-title">
                                                                                <h3>开启品质生活2</h3>
                                                                                <span>爱上新家电</span>
                                                                            </div>
                                                                        </a>
                                                                        <div class="color_mask"></div>
                                                                    </li>
                                                                    <li class="img_third">
                                                                        <a href="#" target="_blank">
                                                                            <div class="silder-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                            <div class="silder-title">
                                                                                <h3>开启品质生活3</h3>
                                                                                <span>爱上新家电</span>
                                                                            </div>
                                                                        </a>
                                                                        <div class="color_mask"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="hd"><ul></ul></div>
                                                        </div>
                                                    </div>
                                                    <div class="bd-right">
                                                        <div class="floor-tabs-content clearfix">
                                                            <ul class="p-list">
                                                                <li class="child-double opacity_img"><div class="floor-left-adv"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual484x215.jpg"></a></div></li>
                                                                <li class="li opacity_img">
                                                                    <div class="product">
                                                                        <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                        <div class="p-name"><a href="#" target="_blank">微软Surface Pro 二合一平板...</a></div>
                                                                        <div class="p-price">¥5780.00</div>
                                                                    </div>
                                                                </li>
                                                                <li class="li opacity_img">
                                                                    <div class="product">
                                                                        <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                        <div class="p-name"><a href="#" target="_blank">微软Surface Pro 二合一平板...</a></div>
                                                                        <div class="p-price">¥5780.00</div>
                                                                    </div>
                                                                </li>
                                                                <li class="li opacity_img">
                                                                    <div class="product">
                                                                        <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                        <div class="p-name"><a href="#" target="_blank">微软Surface Pro 二合一平板...</a></div>
                                                                        <div class="p-price">¥5780.00</div>
                                                                    </div>
                                                                </li>
                                                                <li class="li opacity_img">
                                                                    <div class="product">
                                                                        <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                        <div class="p-name"><a href="#" target="_blank">微软Surface Pro 二合一平板...</a></div>
                                                                        <div class="p-price">¥5780.00</div>
                                                                    </div>
                                                                </li>
                                                                <li class="li opacity_img">
                                                                    <div class="product">
                                                                        <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                        <div class="p-name"><a href="#" target="_blank">微软Surface Pro 二合一平板...</a></div>
                                                                        <div class="p-price">¥5780.00</div>
                                                                    </div>
                                                                </li>
                                                                <li class="li opacity_img">
                                                                    <div class="product">
                                                                        <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                        <div class="p-name"><a href="#" target="_blank">微软Surface Pro 二合一平板...</a></div>
                                                                        <div class="p-price">¥5780.00</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                	</div>
                            	</div>
                                
                                <!--楼层模板九-->
                                <div class="visual-item lyrow w1200" data-mode="homeFloorNine" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['floor_9']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                        	<div class="floor-line-con floorNine floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                                <i class="floor-tit-arrow"></i>
                                                <div class="floor-hd" ectype="floorTit">
                                                    <div class="hd-tags">
                                                        <ul>
                                                            <li class="current">电动车</li>
                                                            <li>跑步机</li>
                                                            <li>跑步机</li>
                                                            <li>跑步机</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="floor-bd FN-bd-more-01">
                                                    <div class="bd-left">
                                                        <div class="bd-left-title"><h3>服装</h3><i></i></div>
                                                        <div class="floor-left-slide">
                                                            <div class="bd">
                                                                <ul>
                                                                    <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual160x472.jpg"></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="hd">
                                                                <ul></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bd-right">
                                                        <div class="floor-tabs-content">
                                                            <div class="f-r-main f-r-m-adv">
                                                                <div class="f-r-m-items">
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <img src="../data/gallery_album/visualDefault/visual245x255.jpg">
                                                                            <div class="title">
                                                                                <h3>主标题</h3>
                                                                                <span>次标题</span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <img src="../data/gallery_album/visualDefault/visual245x255.jpg">
                                                                            <div class="title">
                                                                                <h3>主标题</h3>
                                                                                <span>次标题</span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <img src="../data/gallery_album/visualDefault/visual245x255.jpg">
                                                                            <div class="title">
                                                                                <h3>主标题</h3>
                                                                                <span>次标题</span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <img src="../data/gallery_album/visualDefault/visual245x255.jpg">
                                                                            <div class="title">
                                                                                <h3>主标题</h3>
                                                                                <span>次标题</span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="floor-left-adv">
                                                             		<a href="#" target="_blank" class="adv-module"><img src="../data/gallery_album/visualDefault/visual490x255.jpg"></a>
                                                                	<a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual245x255.jpg"></a>
                                                                    <a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual245x255.jpg"></a>
                                                                </div>
                                                                <div class="floor-left-adv"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                	</div>
                            	</div>
                                
                                <!--楼层模板十-->
                                <div class="visual-item lyrow w1200" data-mode="homeFloorTen" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt"><?php echo $this->_var['lang']['floor_10']; ?></span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                        	<div class="floor-line-con floorTen floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="floor-title">
                                                    <div class="floor-title-con">
                                                        <i class="left-arrow"></i>
                                                        <h3>美容美妆</h3>
                                                        <i class="right-arrow"></i>
                                                    </div>
                                                </div>
                                                <div class="floor-bd FTEN-bd-more-01">
                                                    <div class="bd-left">
                                                        <div class="floor-left-slide">
                                                            <div class="bd">
                                                                <ul>
                                                                    <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual200x472.jpg"></a></li>
                                                                    <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual200x472.jpg"></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="hd">
                                                                <ul></ul>
                                                            </div>
                                                        </div>
                                                        <div class="floor-nav">
                                                            <ul>
                                                                <li>滋润面膜</li>
                                                                <li>爽肤水</li>
                                                                <li>祛痘祛斑</li>
                                                                <li>敏感肌</li>
                                                                <li>祛痘祛斑</li>
                                                                <li>敏感肌</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="bd-right">
                                                        <div class="floor-tabs-content">
                                                            <div class="f-r-main f-r-m-adv">
                                                            	<ul class="p-list" ectype="pList">
                                                                    <li class="li opacity_img">
                                                                        <div class="product">
                                                                            <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                            <div class="p-name"><a href="#" target="_blank">美迪惠尔水润保湿面膜10片</a></div>
                                                                            <div class="p-price">¥5780.00</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="li opacity_img">
                                                                        <div class="product">
                                                                            <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                            <div class="p-name"><a href="#" target="_blank">美迪惠尔水润保湿面膜10片</a></div>
                                                                            <div class="p-price">¥5780.00</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="li opacity_img">
                                                                        <div class="product">
                                                                            <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                            <div class="p-name"><a href="#" target="_blank">美迪惠尔水润保湿面膜10片</a></div>
                                                                            <div class="p-price">¥5780.00</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="child-double opacity_img">
                                                                        <div class="floor-left-adv"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual400x236.jpg"></a></div>
                                                                    </li>
                                                                    <li class="li opacity_img">
                                                                        <div class="product">
                                                                            <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                            <div class="p-name"><a href="#" target="_blank">美迪惠尔水润保湿面膜10片</a></div>
                                                                            <div class="p-price">¥5780.00</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="li opacity_img">
                                                                        <div class="product">
                                                                            <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                            <div class="p-name"><a href="#" target="_blank">美迪惠尔水润保湿面膜10片</a></div>
                                                                            <div class="p-price">¥5780.00</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="li opacity_img">
                                                                        <div class="product">
                                                                            <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                            <div class="p-name"><a href="#" target="_blank">美迪惠尔水润保湿面膜10片</a></div>
                                                                            <div class="p-price">¥5780.00</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="li opacity_img">
                                                                        <div class="product">
                                                                            <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                            <div class="p-name"><a href="#" target="_blank">美迪惠尔水润保湿面膜10片</a></div>
                                                                            <div class="p-price">¥5780.00</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="li opacity_img">
                                                                        <div class="product">
                                                                            <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                            <div class="p-name"><a href="#" target="_blank">美迪惠尔水润保湿面膜10片</a></div>
                                                                            <div class="p-price">¥5780.00</div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                	</div>            
                                </div> 
							</div>
                        </div>
                        <?php endif; ?>
                    </div>
                </li>
                <li class="li page-content-slide" data-style="content" ectype="toolbar_li">
                    <b class="iconfont icon-cha" ectype="close"></b>
                    <div class="page-head-bg-content">
                        <div class="page-head-bg-content-wrap">
                            <div class="page-head-bg">
                                <label class="tit"><?php echo $this->_var['lang']['page_content_bg']; ?>：</label>
                                <input type="hidden" class="tm-picker-trigger" value="<?php echo $this->_var['content']['bg_color']; ?>" />
                                <input type="checkbox" class="ui-checkbox" name="content_dis" value="1" id="content_dis" <?php if ($this->_var['content']['if_show'] == 1): ?>checked<?php endif; ?>/> 
                                <label for="content_dis" class="ui-label"><?php echo $this->_var['lang']['display']; ?></label>
                            </div>
                            <div class="page-head-bgimg clearfix">
                                <form action="" id="bgfileForm" method="post"  enctype="multipart/form-data"  runat="server" >
                                    <div><label class="tit"><?php echo $this->_var['lang']['page_content_imgbg']; ?>：</label></div>
                                    <div class="bgimg"><input name="fileimg" type="hidden" value="<?php if ($this->_var['content']['img_file']): ?><?php echo $this->_var['content']['img_file']; ?><?php else: ?>../data/gallery_album/visualDefault/bgimg.gif<?php endif; ?>"/><img id="confilefile" src="<?php if ($this->_var['content']['img_file']): ?><?php echo $this->_var['content']['img_file']; ?><?php else: ?>../data/gallery_album/visualDefault/bgimg.gif<?php endif; ?>" alt=""></div>
                                    <div class="action">
                                        <div class="action-btn action-btn_bg">
                                            <a href="javascript:void(0);" class="ks-uploader-button">
                                                <span class="btn-text"><?php echo $this->_var['lang']['uploader_img']; ?></span>
                                                <div class="file-input-wrapper"><input type="file" name="confile" value="<?php echo $this->_var['lang']['uploader_img']; ?>" class="file-input"></div>
                                            </a>
                                            <a href="javascript:void(0);" class="delete" ectype="delete_bg"></a>
                                        </div>
                                        <div class="content">
                                            <div><?php echo $this->_var['lang']['imgbg_file_gs']; ?></div>
                                            <div><?php echo $this->_var['lang']['imgbg_file_dx']; ?></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bg-show clearfix" <?php if ($this->_var['content']['img_file'] == ''): ?>style="display:none;"<?php endif; ?>>
                                <div><?php echo $this->_var['lang']['bg_display']; ?>：</div>
                                <div class="bg-show-nr">
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['bgrepeat'] == 'repeat'): ?>class="current"<?php endif; ?> data-bg-show="repeat"><?php echo $this->_var['lang']['repeat']; ?></a>
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['bgrepeat'] == 'repeat-y'): ?>class="current"<?php endif; ?> data-bg-show="repeat-y"><?php echo $this->_var['lang']['repeat_y']; ?></a>
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['bgrepeat'] == 'repeat-x'): ?>class="current"<?php endif; ?> data-bg-show="repeat-x"><?php echo $this->_var['lang']['repeat_x']; ?></a>
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['bgrepeat'] == 'no-repeat'): ?>class="current"<?php endif; ?> data-bg-show="no-repeat"><?php echo $this->_var['lang']['no_repeat']; ?></a>
                                </div>
                            </div>
                            <div class="bg-align clearfix" <?php if ($this->_var['content']['img_file'] == ''): ?>style="display:none;"<?php endif; ?>>
                                <div><?php echo $this->_var['lang']['bg_align']; ?>：</div>
                                <div class="bg-align-nr">
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['align'] == 'left'): ?>class="current"<?php endif; ?> data-bg-align="left"><?php echo $this->_var['lang']['bg_align_left']; ?></a>
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['align'] == 'center'): ?>class="current"<?php endif; ?> data-bg-align="center"><?php echo $this->_var['lang']['bg_align_center']; ?></a>
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['align'] == 'right'): ?>class="current"<?php endif; ?> data-bg-align="right"><?php echo $this->_var['lang']['bg_align_right']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="li page-content-slide" data-style="adv" ectype="toolbar_li">
                	<div class="inside">
                        <p class="red ml0"><?php echo $this->_var['lang']['modules_slide']; ?></p>                        
                    </div>
                    <b class="iconfont icon-cha" ectype="close"></b>
                    <div class="page-head-bg-content pt0">
                        <div class="page-head-bg-content-wrap">
                            <form  action="" id="advfileForm" method="post"  enctype="multipart/form-data"  runat="server" >
                                <div class="overflow">
                                    <label class="tit"><?php echo $this->_var['lang']['modules_slide_url']; ?>：</label>
                                    <input type="text" value="<?php echo $this->_var['bonusadv']['fileurl']; ?>" name="adv_url" class="text mt10" placeholder="http(s)://"/>
                                </div>
                                <div class="page-head-bgimg clearfix">
                                    <div><label class="tit"><?php echo $this->_var['lang']['modules_slide_bgimg']; ?>：</label></div>
                                    <div class="bgimg"><img src="<?php if ($this->_var['bonusadv']['img_file']): ?><?php echo $this->_var['bonusadv']['img_file']; ?><?php else: ?>../data/gallery_album/visualDefault/bgimg.gif<?php endif; ?>" alt="" id="bonusadvfile"></div>
                                    <div class="action">
                                        <div class="action-btn">
                                            <a href="javascript:void(0);" class="ks-uploader-button">
                                                <span class="btn-text"><?php echo $this->_var['lang']['uploader_img']; ?></span>
                                                <div class="file-input-wrapper"><input type="file" name="advfile" value="<?php echo $this->_var['lang']['uploader_img']; ?>" class="file-input"></div>
                                            </a>
                                            <a href="javascript:void(0);" class="delete" ectype="delete_adv"></a>
                                        </div>
                                        <div class="content">
                                        	<div><?php echo $this->_var['lang']['imgbg_file_gs']; ?></div>
                                            <div><?php echo $this->_var['lang']['imgbg_file_cc']; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow mt20">
                                    <button type="button" ectype="adcSubmit" class="button"><?php echo $this->_var['lang']['submit']; ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="db_main">
            <div class="design-nav-wrap">
                <div class="btns">
                    <a href="javascript:void(0);" class="btn btn_blue" ectype="downloadModal"><?php echo $this->_var['lang']['downloadModal']; ?></a>
                    <a href="javascript:void(0);" class="btn" <?php if ($this->_var['is_temp'] == 0): ?>style="display:none"<?php endif; ?> ectype="back" ><?php echo $this->_var['lang']['visual_back']; ?></a>
                    <a href="javascript:void(0);" class="btn" ectype="preview" ><?php echo $this->_var['lang']['preview']; ?></a>
                    <a href="javascript:void(0);" class="btn" ectype="information" ><?php echo $this->_var['lang']['information']; ?></a>
                </div>
            </div>
            <div class="pc-page pc-home <?php if ($this->_var['pc_page']['tem'] == 'backup_festival_1'): ?>festival_home<?php endif; ?>" ectype="visualShell"><?php if ($this->_var['pc_page']['out']): ?><?php echo $this->_var['pc_page']['out']; ?><?php else: ?><?php echo $this->fetch('library/pc_page.lbi'); ?><?php endif; ?></div>
        </div>
        
        <div class="df_hidden">
        	<input type="hidden" name="suffix" value="<?php echo $this->_var['pc_page']['tem']; ?>" data-section="<?php echo $this->_var['vis_section']; ?>"/>
            <div id="preview-layout"></div>
            <div id="head-layout"></div>
            <div id="topBanner-layout"></div>
        </div>
    </div>
    
	<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.purebox.js,../js/jquery.picTip.js')); ?>
	<script type="text/javascript">
        function getcolor(){
            var color = $(".tm-picker-trigger").val();
            if(color == ''){
                color = "#fff";
            }
			
            //商品名称颜色设置
			$(".page-head-bg .tm-picker-trigger").spectrum({
				showInitial: true,
				showPalette: true,
				showSelectionPalette: true,
				showInput: true,
				color: color,
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
        }
		getcolor();
		
		//商品分类选择
		$.category();
		
		//banner轮播广告
		function sider(){
			$(".shop_banner,.adv_module").slide({titCell:".hd ul",mainCell:".bd ul",trigger:"click",delayTime:0});
		}   
		/****************************************楼层弹框内容里js end***************************************/
    </script>
</body>
</html>
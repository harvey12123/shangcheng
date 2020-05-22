<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
</head>

<body>
    <?php echo $this->fetch('library/page_header_seckill.lbi'); ?>
    <div class="content">
		<?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['seckill_top_ad'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <div class="seckill-main">
            <div class="w w1200">
            	<div class="seckill-hot-goods">
                	<div class="seckill-time-tabs" ectype="seckillTab">
                    	<ul>
							<?php $_from = $this->_var['seckill_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tb');$this->_foreach['sec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sec']['total'] > 0):
    foreach ($_from AS $this->_var['tb']):
        $this->_foreach['sec']['iteration']++;
?>
							<?php if (($this->_foreach['sec']['iteration'] - 1) < 5): ?>
                        	<li <?php if (! $this->_var['tb']['is_end'] && $this->_var['tb']['status']): ?>class="curr"<?php endif; ?><?php if ($this->_foreach['sec']['total'] == 5): ?> style="width:20%;"<?php endif; ?>>
                                <strong><?php if ($this->_var['tb']['tomorrow']): ?><?php echo $this->_var['lang']['tomorrow']; ?>  <?php endif; ?><?php echo $this->_var['tb']['title']; ?></strong>
                                <div class="time" ectype="time" data-time="<?php if (! $this->_var['tb']['is_end'] && ! $this->_var['tb']['status']): ?><?php echo $this->_var['tb']['begin_time_formated']; ?><?php elseif (! $this->_var['tb']['is_end'] && $this->_var['tb']['status']): ?><?php echo $this->_var['tb']['end_time_formated']; ?><?php endif; ?>">
									<?php if (! $this->_var['tb']['is_end'] && ! $this->_var['tb']['status']): ?>
									<span><?php echo $this->_var['lang']['distance_start']; ?></span>
                                    <span class="hours">15</span>
                                    <em>:</em>
                                    <span class="minutes">40</span>
                                    <em>:</em>
                                    <span class="seconds">10</span>									
									<?php elseif (! $this->_var['tb']['is_end'] && $this->_var['tb']['status']): ?>
									<span><?php echo $this->_var['lang']['distance_end']; ?></span>
                                    <span class="hours">15</span>
                                    <em>:</em>
                                    <span class="minutes">40</span>
                                    <em>:</em>
                                    <span class="seconds">10</span>
									<?php else: ?>
									<span><?php echo $this->_var['lang']['has_ended']; ?></span>
									<?php endif; ?>                                   
                                </div>
								<?php if (! $this->_var['tb']['is_end'] && ! $this->_var['tb']['status']): ?>
								<i><?php echo $this->_var['lang']['begin_minute']; ?></i>
								<?php elseif (! $this->_var['tb']['is_end'] && $this->_var['tb']['status']): ?>
								<i><?php echo $this->_var['lang']['have_in_hand']; ?></i>
								<?php else: ?>
								<i><?php echo $this->_var['lang']['has_ended']; ?></i>
								<?php endif; ?>  
                            </li>
							<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                    </div>
					<div class="seckill-warp">
					<?php $_from = $this->_var['seckill_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tb');$this->_foreach['sec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sec']['total'] > 0):
    foreach ($_from AS $this->_var['tb']):
        $this->_foreach['sec']['iteration']++;
?>
					<?php if (($this->_foreach['sec']['iteration'] - 1) < 5): ?>
                    	<ul class="gb-index-list clearfix" <?php if (! ( ! $this->_var['tb']['is_end'] && $this->_var['tb']['status'] )): ?>style="display:none;"<?php endif; ?>>
							<?php $_from = $this->_var['tb']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                        	<li class="mod-shadow-card">
                            	<div class="p-img"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a></div>
                                <div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?></a></div>
                                <div class="p-lie clearfix">
                                	<div class="p-pirce"><?php echo $this->_var['goods']['sec_price_formated']; ?></div>
                                    <div class="p-del"><del><?php echo $this->_var['goods']['market_price_formated']; ?></del></div>
                                </div>
                                <div class="p-number clearfix">
                                	<span><?php echo $this->_var['lang']['Sold']; ?><?php echo $this->_var['goods']['percent']; ?>%</span>
                                    <div class="timebar"><i style="width:<?php echo $this->_var['goods']['percent']; ?>%;"></i></div>
                                </div>
								<?php if (! $this->_var['tb']['is_end'] && ! $this->_var['tb']['status']): ?>
                                <a href="javascript:;" ectype="collSecGoods" data-id="<?php echo $this->_var['goods']['id']; ?>" class="btn <?php if ($this->_var['goods']['is_remind']): ?>sc-redBg-btn<?php else: ?>sc-greenBg-btn<?php endif; ?>">
                                <?php if ($this->_var['goods']['is_remind']): ?><?php echo $this->_var['lang']['cancel_remind_me']; ?><?php else: ?><?php echo $this->_var['lang']['remind_me']; ?><?php endif; ?>
                                </a>
								<?php elseif (! $this->_var['tb']['is_end'] && $this->_var['tb']['status']): ?>
                                <?php if ($this->_var['goods']['sec_num'] <= 0): ?>
                                <a href="javascript:;" class="btn sc-redBg-btn"><?php echo $this->_var['lang']['over_tobuy']; ?></a>
                                <?php else: ?>
                                <a href="<?php echo $this->_var['goods']['url']; ?>"  target="_blank" class="btn sc-redBg-btn">
								<?php echo $this->_var['lang']['button_buy']; ?>
								</a>
                                <?php endif; ?>                   
								<?php else: ?>
                                <a href="<?php echo $this->_var['goods']['url']; ?>"  target="_blank" class="btn sc-redBg-btn">
								<?php echo $this->_var['lang']['has_ended']; ?>
                                </a> 
								<?php endif; ?> 	
                            </li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</div>
                </div>
			<?php echo $this->fetch('library/recommend_goods.lbi'); ?>
            </div>
        </div>
    </div>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,jquery.yomi.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    <script type="text/javascript">
	$(function(){
		$("*[ectype='time']").each(function(){
			$(this).yomi();
		});
		
		$("*[ectype='seckillTab'] li").on("click",function(){
			var index = $(this).index();
			$(this).addClass("curr").siblings().removeClass("curr");
			
			$(".seckill-warp").find("ul").eq(index).show().siblings().hide();
		});
	}); 
    </script>
</body>
</html>

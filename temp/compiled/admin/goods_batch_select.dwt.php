<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['goods_alt']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<?php echo $this->fetch('library/batch_tab.lbi'); ?>
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['select']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['select']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['select']['2']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['select']['3']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
					<form name="theForm" method="post" action="goods_batch.php?act=edit" onsubmit="return getGoodsIDs()">
                    <div class="step" ectype="filter" data-filter="goods">
                        <div class="step_content">
                        	<div class="batch_tab">
                            	<div class="checkbox_items">
                                	<div class="checkbox_item">
                                    	<input type="radio" name="select_method" id="sm_cat" class="ui-radio-16x16" value="cat" checked />
                                        <label for="sm_cat" class="ui-radio-label-16x16"><?php echo $this->_var['lang']['by_cat']; ?></label>
                                    </div>
                                    <div class="checkbox_item">
                                    	<input type="radio" name="select_method" id="sm_sn" value="sn" class="ui-radio-16x16" />
                                        <label for="sm_sn" class="ui-radio-label-16x16"><?php echo $this->_var['lang']['by_sn']; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div id="category_brand_screen">
                                <div class="goods_search_div">
									<div class="goods_search_div">
										<div class="search_select">
											<div class="categorySelect">
												<div class="selection">
													<input type="text" name="category_name" id="category_name" class="text w250 valid" value="<?php echo $this->_var['lang']['select_cat']; ?>" autocomplete="off" readonly data-filter="cat_name" />
													<input type="hidden" name="category_id" id="category_id" value="0" data-filter="cat_id" />
												</div>
												<div class="select-container" style="display:none;">
													<?php echo $this->fetch('library/filter_category.lbi'); ?>
												</div>
											</div>
										</div>
										<div class="search_select">
											<div class="brandSelect">
												<div class="selection">
													<input type="text" name="brand_name" id="brand_name" class="text w120 valid" value="<?php echo $this->_var['lang']['select_barnd']; ?>" autocomplete="off" readonly data-filter="brand_name" />
													<input type="hidden" name="brand_id" id="brand_id" value="0" data-filter="brand_id" />
												</div>
												<div class="brand-select-container" style="display:none;">
													<?php echo $this->fetch('library/filter_brand.lbi'); ?>
												</div>
											</div>                            
										</div>
										<input type="text" name="keyword" class="text w150" value="" placeholder=<?php echo $this->_var['lang']['input_keywords']; ?> data-filter="keyword" autocomplete="off" />
										<a href="javascript:void(0);" class="btn btn30" ectype="search"><i class="icon icon-search"></i><?php echo $this->_var['lang']['search_word']; ?></a>
									</div>
                                </div>
                                <div class="move_div">
                                    <div class="move_left">
                                        <h4><?php echo $this->_var['lang']['src_list']; ?></h4>
                                        <div class="move_info">
                                            <div class="move_list">
												<?php echo $this->fetch('library/move_left.lbi'); ?>
                                            </div>
                                        </div>
                                        <div class="move_handle">
                                            <a href="javascript:void(0);" class="btn btn25 moveAll" ectype="moveAll"><?php echo $this->_var['lang']['check_all']; ?></a>
                                            <a href="javascript:void(0);" class="btn btn25 red_btn" ectype="sub" data-operation="add_edit_goods"><?php echo $this->_var['lang']['button_submit_alt']; ?></a>
                                        </div>
                                    </div>
                                    <div class="move_middle">
                                        <div class="move_point" data-operation="add_edit_goods"></div>
                                    </div>
                                    <div class="move_right">
                                        <h4><?php echo $this->_var['lang']['dest_list']; ?></h4>
                                        <div class="move_info">
                                            <div class="move_list">
												<?php echo $this->fetch('library/move_right.lbi'); ?>	
                                            </div>
                                        </div>
                                        <div class="move_handle">
                                            <a href="javascript:void(0);" class="btn btn25 moveAll" ectype="moveAll"><?php echo $this->_var['lang']['check_all']; ?></a>
											<a href="javascript:void(0);" class="btn btn25 btn_red" ectype="sub" data-operation="drop_edit_goods"><?php echo $this->_var['lang']['remove']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sn_screen" style="display:none;">
                            	<div class="move_div">
                                	<div class="move_all tc">
                                    	<h4><?php echo $this->_var['lang']['input_sn']; ?></h4>
                                        <textarea name="sn_list" id="sn_list" class="textarea"></textarea>
                                    </div>
                                </div>
                            </div>    
                            <div class="move_buttom_div pt30 tc">
                            	<div class="checkbox_items">
                                	<div class="checkbox_item">
                                    	<input type="radio" name="edit_method" id="edit_oneby" class="ui-radio" checked value="each"/>
                                        <label for="edit_oneby" class="ui-radio-label"><?php echo $this->_var['lang']['edit_each']; ?></label>
                                    </div>
                                    <div class="checkbox_item">
                                    	<input type="radio" name="edit_method" id="edit_unified" class="ui-radio" value="all"/>
                                        <label for="edit_unified" class="ui-radio-label"><?php echo $this->_var['lang']['edit_all']; ?></label>
                                    </div>
                                </div>
								<input type="submit" name="submit" value="<?php echo $this->_var['lang']['go_edit']; ?>" class="btn btn35 red_btn mt30" />
								<input type="hidden" name="goods_ids" value="" />								
                            </div>
                        </div>
                    </div>
					</form>
                </div>
            </div>
		</div>
	</div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
		//批量修改方式切换
		$(".batch_tab").find("input[type='radio']").on("click",function(){
			var value = $(this).val();
			if(value == "cat"){
				$("#category_brand_screen").show();
				$("#sn_screen").hide();
			}else{
				$("#category_brand_screen").hide();
				$("#sn_screen").show();
			}
		});
		
		//取得选择的商品id，赋值给隐藏变量。同时检查是否选择或输入了商品
		function getGoodsIDs()
		{
			if (document.getElementById('sm_cat').checked)
			{
				var idArr = new Array();
				//获取商品id
				$(".step[ectype=filter] .move_right .move_list ul li.current").each(function(){
					idArr.push($(this).data("value"));
				});
				
				if (idArr.length <= 0)
				{
					alert(please_select_goods);
					return false;
				}
				else
				{
					document.forms['theForm'].elements['goods_ids'].value = idArr.join(',');
					return true;
				}
			}
			else
			{
				if (document.forms['theForm'].elements['sn_list'].value == '')
				{
					alert(please_input_sn);
					return false;
				}
				else
				{
					return true;
				}
			}
		}
    </script>
</body>
</html>

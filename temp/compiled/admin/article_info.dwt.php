<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['article']; ?> - <?php echo $this->_var['ur_here']; ?></div>
		<div class="content">
        	<div class="tabs_info">
            	<ul>
                    <li class="curr"><a href="javascript:void(0);"><?php echo $this->_var['lang']['tab_general']; ?></a></li>
                    <li><a href="javascript:void(0);"><?php echo $this->_var['lang']['tab_content']; ?></a></li>
                    <li><a href="javascript:void(0);"><?php echo $this->_var['lang']['tab_goods']; ?></a></li>
                </ul>
            </div>
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="mian-info">
                    <form action="article.php" method="post" enctype="multipart/form-data" name="theForm" id="article_form">
                        <div class="switch_info" style="display:block;">
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['title']; ?>：</div>
                                <div class="label_value">
                                    <input type="text" name="title" class="text" value="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" maxlength="40" autocomplete="off" id="title"/>
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <!-- <?php if ($this->_var['article']['cat_id'] >= 0): ?> -->
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['cat']; ?>：</div>
                                <div class="label_value">
                                    <div id="parent_cat" class="imitate_select select_w320">
                                      <div class="cite"><?php if ($this->_var['cat_name']): ?><?php echo $this->_var['cat_name']; ?><?php else: ?><?php echo $this->_var['lang']['select_plz']; ?><?php endif; ?></div>
                                      <ul>
                                         <?php echo $this->_var['cat_select']; ?>
                                      </ul>
                                      <input name="article_cat" type="hidden" value="<?php echo $this->_var['article']['cat_id']; ?>" id="parent_cat_val">
                                    </div>
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['article_type']; ?>：</div>
                                <div class="label_value">
                                    <div class="checkbox_items">
                                        <div class="checkbox_item">
                                            <input type="radio" class="ui-radio" name="article_type" id="sex_0" value="0" <?php if ($this->_var['article']['article_type'] == 0): ?>checked<?php endif; ?> />
                                            <label for="sex_0" class="ui-radio-label"><?php echo $this->_var['lang']['common']; ?></label>
                                        </div>
                                        <div class="checkbox_item">
                                            <input type="radio" class="ui-radio" name="article_type" id="sex_1" value="1" <?php if ($this->_var['article']['article_type'] == 1): ?>checked<?php endif; ?> />
                                            <label for="sex_1" class="ui-radio-label"><?php echo $this->_var['lang']['top']; ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['is_open']; ?>：</div>
                                <div class="label_value">
                                    <div class="checkbox_items">
                                        <div class="checkbox_item">
                                            <input type="radio" class="ui-radio" name="is_open" id="sex_3" value="1" <?php if ($this->_var['article']['is_open'] == 1): ?>checked<?php endif; ?> />
                                            <label for="sex_3" class="ui-radio-label"><?php echo $this->_var['lang']['isopen']; ?></label>
                                        </div>
                                        <div class="checkbox_item">
                                            <input type="radio" class="ui-radio" name="is_open" id="sex_4" value="0" <?php if ($this->_var['article']['is_open'] == 0): ?>checked<?php endif; ?> />
                                            <label for="sex_4" class="ui-radio-label"><?php echo $this->_var['lang']['isclose']; ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <?php else: ?> -->
                            <input type="hidden" name="article_cat" value="-1" id="parent_cat_val"/>
                            <input type="hidden" name="article_type" value="0" />
                            <input type="hidden" name="is_open" value="1" />
                            <!-- <?php endif; ?> -->
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['author']; ?>：</div>
                                <div class="label_value"><input type="text" name="author" class="text" autocomplete="off" value="<?php echo htmlspecialchars($this->_var['article']['author']); ?>"/></div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['email']; ?>：</div>
                                <div class="label_value"><input type="text" name="author_email" class="text" autocomplete="off" value="<?php echo htmlspecialchars($this->_var['article']['author_email']); ?>"/></div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['keywords']; ?>：</div>
                                <div class="label_value"><input type="text" name="keywords" class="text" autocomplete="off" value="<?php echo htmlspecialchars($this->_var['article']['keywords']); ?>"/></div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['lable_description']; ?>：</div>
                                <div class="label_value">
                                	<textarea name="description" class="textarea"><?php echo htmlspecialchars($this->_var['article']['description']); ?></textarea>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['sort_order']; ?>：</div>
                                <div class="label_value"><input type="text" name="sort_order" class="text text_2" autocomplete="off" id="sort_order" value="<?php if ($this->_var['article']['sort_order'] != ''): ?><?php echo htmlspecialchars($this->_var['article']['sort_order']); ?><?php else: ?>50<?php endif; ?>"/></div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['external_links']; ?>：</div>
                                <div class="label_value"><input type="text" name="link_url" class="text" autocomplete="off" id="link_url" value="<?php if ($this->_var['article']['link'] != ''): ?><?php echo htmlspecialchars($this->_var['article']['link']); ?><?php else: ?>http://<?php endif; ?>"/></div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['upload_file']; ?>：</div>
                                <div class="label_value">
									<div class="type-file-box">
										<input type="button" name="button" id="button" class="type-file-button" value="" />
										<input type="file" class="type-file-file" id="file" name="file" data-state="imgfile" size="30" hidefocus="true" value="" />
										<?php if ($this->_var['article']['file_url']): ?>
										<span class="show">
											<a href="<?php echo $this->_var['article']['file_url']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="<?php echo $this->_var['article']['file_url']; ?>" ectype="tooltip" title="tooltip"></i></a>
										</span>
										<input type="text" name="textfile" class="type-file-text" id="textfield" value="<?php echo $this->_var['article']['file_url']; ?>" autocomplete="off" readonly />
										<?php endif; ?>
									</div>
									<?php if ($this->_var['article']['file_url']): ?>
									<a href="article.php?act=del_file&article_id=<?php echo $this->_var['article']['article_id']; ?>" class="btn red_btn h30 mr10 fl" style="line-height:30px;"><?php echo $this->_var['lang']['drop']; ?></a>
									<?php endif; ?>
                                    <div class="notic"><?php echo $this->_var['lang']['upload_file_notic']; ?></div>
								</div>	
                        	</div>
                        </div>    
                        <div class="switch_info" style="display:none">
                            <div class="item">
                                <?php echo $this->_var['FCKeditor']; ?>
                            </div>
                        </div>
                        <div class="switch_info" style="display:none">
                            <div class="step"  ectype="filter">
                                <div class="step_content">
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
                                        <input type="hidden" name="ru_id" value="<?php echo $this->_var['ru_id']; ?>" />
                                        <input type="text" name="keyword" class="text w150" placeholder=<?php echo $this->_var['lang']['input_keywords']; ?> autocomplete="off" data-filter="keyword" autocomplete="off" />
                                        <a href="javascript:void(0);" class="btn btn30" onclick="searchGoods()" ><i class="icon icon-search"></i><?php echo $this->_var['lang']['search_word']; ?></a>
                                    </div>
                                    <div class="move_div">
                                        <div class="move_left">
                                            <h4><?php echo $this->_var['lang']['all_goods']; ?></h4>
                                            <div class="move_info">
                                                <div class="move_list" id="source_select">
                                                    <ul>
                                                    </ul>	
                                                </div>
                                            </div>
                                            <div class="move_handle">
                                                <a href="javascript:void(0);" class="btn btn25 moveAll" ectype="moveAll"><?php echo $this->_var['lang']['check_all']; ?></a>
                                                <a href="javascript:void(0);" ectype="sub" data-operation="add_link_artic_goods" class="btn btn25 red_btn"><?php echo $this->_var['lang']['button_submit_alt']; ?></a>
                                            </div>
                                        </div>
                                        <div class="move_middle">
                                            <div class="move_point" onclick="addGoods()"></div>
                                        </div>
                                        <div class="move_right">
                                            <h4><?php echo $this->_var['lang']['group_goods']; ?></h4>
                                            <div class="move_info">
                                                <div class="move_list" id="target_select" >
                                                    <ul>
														<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
														<li data-value="<?php echo $this->_var['goods']['goods_id']; ?>" data-text="<?php echo $this->_var['goods']['goods_name']; ?>"><i class="sc_icon sc_icon_no"></i><a href="javascript:;" data-value="<?php echo $this->_var['goods']['goods_id']; ?>" class="ftx-01"><?php echo $this->_var['goods']['goods_name']; ?></a></li>
														<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                    </ul>											
                                                </div>
                                            </div>
                                            <div class="move_handle">
                                                <a href="javascript:void(0);" class="btn btn25 moveAll" ectype="moveAll"><?php echo $this->_var['lang']['check_all']; ?></a>
												<a href="javascript:void(0);" ectype="sub" data-operation="drop_link_artic_goods" class="btn btn25 btn_red"><?php echo $this->_var['lang']['remove']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info_btn info_btn_bf100 button-info-item0" id="info_btn_bf100">
                            <div class="label">&nbsp;</div>
                            <div class="value">
                                <input type="submit" name="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button mr10" id="submitBtn" />
                                <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
                                <input type="hidden" name="old_title" value="<?php echo $this->_var['article']['title']; ?>"/>
                                <input type="hidden" name="id" value="<?php echo $this->_var['article']['article_id']; ?>" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
        $(function(){
            $('.nyroModal').nyroModal();
        })
    
        //会员基本信息 div仿select 
        $.divselect("#parent_cat","#parent_cat_val",function(obj){
			var select = obj.parents("#parent_cat");
			var val = obj.attr("cat_type");
			catChanged(val);
        });
    
        $(function(){
			$("#submitBtn").click(function(){
				if($("#article_form").valid()){
					$("#article_form").submit();
				}
			});
		
			$('#article_form').validate({
				errorPlacement:function(error, element){
					var error_div = element.parents('div.label_value').find('div.form_prompt');
					element.parents('div.label_value').find(".notic").hide();
					error_div.append(error);
				},
                ignore:'.ignore',
				rules : {
					title : {
						required : true
					},
                    article_cat :{
                        required : true
                    }
				},
				messages : {
					title : {
						required : '<i class="icon icon-exclamation-sign"></i>'+no_title
					},
                    article_cat : {
                        required : '<i class="icon icon-exclamation-sign"></i>'+no_cat
                    }
				}
			});
        });
    
        /**
        * 选取上级分类时判断选定的分类是不是底层分类
        */
        function catChanged(cat_type)
        {
			<?php if ($this->_var['cat_name']): ?>
				var text = "<?php echo $this->_var['cat_name']; ?>";
			<?php else: ?>
				var text = "<?php echo $this->_var['lang']['select_plz']; ?>";
			<?php endif; ?>
		
			if (cat_type == '')
			{
				cat_type = 1;
			}
			if (cat_type == 2 || cat_type == 4)
			{
				alert(not_allow_add);
				$("#parent_cat_val").val(0);
				$("#parent_cat .cite").html(text);
				return false;
			}
			return true;
        }
		
        function searchGoods(){
			var filters   = new Object;
			filters.cat_id = $("input[name='category_id']").val();
			filters.brand_id = $("input[name='brand_id']").val();
			filters.keyword = Utils.trim($("input[name='keyword']").val());
            $("#source_select").find("ul").html('<i class="icon-spinner icon-spin"></i>');
			
            setTimeout(function(){
                $.jqueryAjax("bonus.php?is_ajax=1&act=get_goods_list","JSON="+$.toJSON(filters), searchGoodsResponse, 'GET', 'JSON');
            },300);
        }
		
        function searchGoodsResponse(result){
            $("#source_select").find("li").remove();
            $("#source_select").find("ul").html('');
            var step = $("#source_select").parents(".step[ectype=filter]:first");
            var goods = result.content;
            if (goods)
            {
                    for (i = 0; i < goods.length; i++)
                    {
                            $("#source_select").children("ul").append("<li data-value='"+goods[i].value+"'><i class='sc_icon sc_icon_ok'></i><a href='javascript:;' data-value='"+goods[i].value+"' class='ftx-01'>"+goods[i].text+"</a><input type='hidden' name='user_search[]' value='"+goods[i].value+"'></li>")
                    }
            }
            step.find(".move_list").perfectScrollbar();
                        
        }
		
        function addGoods()
        {
            var step = $("#source_select").parents(".step[ectype=filter]:first");
			$("#source_select").find("li").each(function(){
				if($(this).attr("class") == 'current'){
					var user = $(this).text();
					var user_id = $(this).find("input").val();
					var exists = false;
					$("#target_select").find("li").each(function(){
						if($(this).find("input").val() == user_id){
							exists = true;
							return false;
						}
					})
					if(exists == false){
						$("#target_select").children("ul").append("<li><i class='sc_icon sc_icon_no'></i><a href='javascript:void(0);'>"+user+"</a><input type='hidden' name='target_select[]' value='"+user_id+"'></li>")		  
					}
				}
			});       
			step.find(".move_left .move_list, .move_all .move_list").perfectScrollbar();
        }
    
        function delGoods()
        {
			<!-- var filters  = new Array(); -->
			$("#target_select").find("li").each(function(){
				if($(this).attr("class") == 'current'){
					<!-- filters.push($(this).find("a").data("value")); -->
					$(this).remove();
				}
			});
        }
    </script>
</body>
</html>

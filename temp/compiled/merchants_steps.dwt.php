<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<link href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/merchants.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="js/perfect-scrollbar/perfect-scrollbar.min.css" />
<link rel="stylesheet" type="text/css" href="js/calendar/calendar.min.css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'calendar/calendar.min.js')); ?>
</head>

<body class="merchants">
<?php echo $this->fetch('library/page_header_merchants.lbi'); ?>
<div class="container settled-container <?php if ($this->_var['step'] != 'stepSubmit'): ?>bg-ligtGary<?php else: ?>settled-prog-container<?php endif; ?>">
    <div class="w w1200">
        <div class="sett-process-warp clearfix">
            <?php if ($this->_var['step'] != 'stepSubmit'): ?>
            <div class="s-p-steps">
                <ul>
                    <li class="<?php if ($this->_var['sid'] == 1): ?>curr<?php elseif ($this->_var['sid'] > 1 || $this->_var['step'] == 'stepSubmit'): ?> cur<?php endif; ?>">
                        <span>1. <?php echo $this->_var['lang']['merchants_step_one']; ?></span>
                        <i class="iconfont icon-arrow-right-alt"></i>
                    </li>
                    <li class="<?php if ($this->_var['sid'] == 2): ?> curr<?php elseif ($this->_var['sid'] > 2 || $this->_var['step'] == 'stepSubmit'): ?> cur<?php endif; ?>">
                        <span>2. <?php echo $this->_var['lang']['merchants_step_two']; ?></span>
                        <i class="iconfont icon-arrow-right-alt"></i>
                    </li>
                    <li class="<?php if ($this->_var['sid'] == 3): ?> curr<?php elseif ($this->_var['sid'] > 3 || $this->_var['step'] == 'stepSubmit'): ?> cur<?php endif; ?>">
                        <span>3. <?php echo $this->_var['lang']['merchants_step_three']; ?></span>
                        <i class="iconfont icon-arrow-right-alt"></i>
                    </li>
                    <li class="last<?php if ($this->_var['step'] == 'stepSubmit'): ?> curr<?php elseif ($this->_var['sid'] > 4): ?> cur<?php endif; ?>">
                        <span>4. <?php echo $this->_var['lang']['merchants_step_four']; ?></span>
                    </li>
                </ul>
            </div>
            <?php endif; ?>
            
            <?php if ($this->_var['sid'] == 1): ?>
            <div class="panel">
                <form id="stepForm" action="merchants_steps_action.php" method="post" name="stepForm">
                    <div class="panel-content">
                        <div class="bg-warp sid-frist">
                            <div class="title"><?php echo $this->_var['lang']['merchants_step_five']; ?></div>
                            <div class="textareay">
                                <div class="agreement">
                                    <?php echo $this->_var['steps']['article_centent']; ?>
                                </div>
                            </div>
                            <div class="btn-group">
                                <input name="agreement" type="hidden" value="1" />
                                <input name="nextStepBtn" class="btn" type="submit" value="<?php echo $this->_var['steps']['fields_next']; ?>" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>    
            <?php else: ?>
            <div class="panel">
            <?php if ($this->_var['step'] != 'stepSubmit'): ?>
            <form enctype="multipart/form-data" id="stepForm" method="post" action="merchants_steps_action.php" name="stepForm">
                <div class="panel-content">
                    <div class="bg-warp">
                        <div class="title">
                            <span><?php echo $this->_var['process']['process_title']; ?></span>
                        </div>
                        <?php $_from = $this->_var['steps_title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'title');if (count($_from)):
    foreach ($_from AS $this->_var['title']):
?>
                            <?php if ($this->_var['title']['special_type'] == 1 && $this->_var['title']['fields_special'] != ''): ?>
                            <div class="prompt"><?php echo $this->_var['title']['fields_special']; ?></div>
                            <?php endif; ?>
                            
                            <?php if ($this->_var['title']['steps_style'] == 0): ?>
                                <?php echo $this->fetch('library/basic_type.lbi'); ?>
                            <?php elseif ($this->_var['title']['steps_style'] == 1): ?>
                                <?php echo $this->fetch('library/shop_type.lbi'); ?>
                            <?php elseif ($this->_var['title']['steps_style'] == 2): ?>
                                <?php echo $this->fetch('library/cate_type.lbi'); ?>
                            <?php elseif ($this->_var['title']['steps_style'] == 3): ?>
                                <?php echo $this->fetch('library/brank_type.lbi'); ?> 
                            <?php elseif ($this->_var['title']['steps_style'] == 4): ?>
                                <?php echo $this->fetch('library/shop_info.lbi'); ?>
                            <?php endif; ?>
                            <?php if ($this->_var['title']['special_type'] == 2 && $this->_var['title']['fields_special'] != ''): ?>
                            <div class="btn-group">
                                <?php if ($this->_var['brandView'] != 'addBrand'): ?>
                                    <?php echo $this->_var['title']['fields_special']; ?>
                                <?php endif; ?>    
                            </div>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                </div>
                <?php if ($this->_var['brandView'] != 'addBrand'): ?>
                <div class="btn-group">
                    <input type="hidden" name="numAdd" value="1" id="numAdd" />
                    <input type="hidden" name="pid_key" value="<?php echo $this->_var['pid_key']; ?>" />
                    <input type="hidden" name="sid" value="<?php echo $this->_var['sid']; ?>" />
                    <input type="hidden" name="step" value="<?php echo $this->_var['step']; ?>" />
                    
                    <?php if ($this->_var['pid_key'] > 1 || $this->_var['sid'] >= 3): ?>
                    <input type="button" value="<?php echo $this->_var['lang']['merchants_step_Seven']; ?>" class="btn btn-w" id="js-pre-step" />
                    <?php endif; ?>
                    
                    <?php if ($this->_var['brandView'] == 'brandView'): ?>
                    <input type="hidden" name="brandView" value="<?php echo $this->_var['brandView']; ?>" />
                    <input type="submit" value="<?php echo $this->_var['lang']['Preservation']; ?>" class="btn" id="nextStepBtn" />
                    <?php elseif ($this->_var['brandView'] == 'add_brand'): ?>
                    <input type="hidden" name="brandView" value="<?php echo $this->_var['brandView']; ?>" />
                    <?php else: ?>
                        <?php if ($this->_var['process']['fields_next']): ?>
                        <input type="submit" value="<?php echo $this->_var['process']['fields_next']; ?>" class="btn" id="nextStepBtn" />
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </form>
            <?php else: ?>
            <div class="settled-prog-warp">
                <div class="che"><img src="themes/wlmoban_dsc2017/images/che.png"></div>
                <div class="spw-cont">
                    <div class="spw-tit"><h1><?php echo $this->_var['lang']['review_progress']; ?></h1></div>
                    
                    <div class="spw-mian <?php if ($this->_var['shop_info']['merchants_audit'] == 0): ?>spw-wait<?php elseif ($this->_var['shop_info']['merchants_audit'] == 1): ?>spw-success<?php elseif ($this->_var['shop_info']['merchants_audit'] == 2): ?>spw-fail<?php endif; ?>">
                        <i class="spw-icon"></i>
                        <div class="spw-info">
                            <h2>
                                <?php if ($this->_var['shop_info']['merchants_audit'] == 0): ?>
                                <?php echo $this->_var['lang']['under_review_one']; ?>
                                <?php elseif ($this->_var['shop_info']['merchants_audit'] == 1): ?>
                                <?php echo $this->_var['lang']['under_review_two']; ?>
                                <?php elseif ($this->_var['shop_info']['merchants_audit'] == 2): ?>
                                <?php echo $this->_var['lang']['under_review_three']; ?>
                                <?php endif; ?>
                            </h2>
                            <div class="spw-txt">
                                <p><?php echo $this->_var['lang']['merchants_step_complete_one']; ?></p>
                                <?php if ($this->_var['shop_info']['merchants_audit'] == 1): ?>
                                <span><?php echo $this->_var['lang']['merchants_step_complete_two']; ?>：<em><?php echo $this->_var['shop_info']['hopeLoginName']; ?></em></span>
                                <?php endif; ?>
                                <span><?php echo $this->_var['lang']['audit_shop_one']; ?>：<strong class="orange2"><?php echo $this->_var['shop_info']['shop_name']; ?></strong></span>
                                <span><?php echo $this->_var['lang']['audit_shop_two']; ?>：<em><?php echo $this->_var['shop_info']['shop_class_keyWords']; ?></em></span>
                                <?php if ($this->_var['shop_info']['merchants_audit'] == 2 && $this->_var['shop_info']['merchants_message']): ?>
                                <span><?php echo $this->_var['lang']['reply_comment']; ?>：<strong class="red"><?php echo $this->_var['shop_info']['merchants_message']; ?></strong></span>
                                <?php endif; ?>
                            </div>
                            <?php if ($this->_var['shop_info']['merchants_audit'] == 2 || $this->_var['shop_info']['merchants_audit'] == 0): ?>
                                <?php if ($this->_var['shop_info']['steps_audit'] == 0): ?>
                                <div class="spw-btn"><a href="merchants_steps.php?step=stepOne&pid_key=0" class="btn sc-redBg-btn"><?php echo $this->_var['lang']['reapply']; ?></a></div>
                                <?php endif; ?>
                            <?php elseif ($this->_var['shop_info']['merchants_audit'] == 1): ?>
                            <div class="spw-btn"><a href="seller/index.php" target="_blank" class="btn sc-redBg-btn"><?php echo $this->_var['lang']['merchant_login']; ?></a></div>
                            <?php elseif ($this->_var['shop_info']['merchants_audit'] == 0): ?>
                            <!--<div class="spw-btn"><a href="user.php" target="_blank" class="btn sc-redBg-btn">用户中心</a></div>-->
                            <?php endif; ?>
                            <div class="setted-footer"><a href="index.php" class="ftx-05"><?php echo $this->_var['lang']['back_home']; ?></a><a href="user.php" class="ftx-05"><?php echo $this->_var['lang']['user_center']; ?></a><?php if ($this->_var['shop_info']['merchants_audit'] == 1): ?><a href="user.php?act=merchants_upgrade"  class="ftx-05"><?php echo $this->_var['lang']['seller_Grade']; ?></a><?php endif; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/page_footer_flow.lbi'); ?>
</body>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.divbox.js,common.js,shopping_flow.js,region.js,utils.js,perfect-scrollbar/perfect-scrollbar.min.js,jquery.validation.min.js,lib_wlmobanFunc.js')); ?>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";

/* 日期勾选永久 */
function get_shopTime_term(t){
	var parent = $(t).parent(".cart-checkbox");
	var input = parent.siblings("input[type='text']");
	
	if($(t).is(":checked")){
		parent.addClass("cart-checkbox-checked");
		input.val('');
		input.removeClass("jdate");
	}else{
		parent.removeClass("cart-checkbox-checked");
		input.addClass("jdate");
	}
}

$(function(){
	//默认加载主营类目
	var shop_categoryMain = $("#shop_categoryMain_id_val").val();
	selectChildCate(shop_categoryMain);
	
	/* 添加详细类目 */
	$("#addCategoryBtn").on("click",function(){
		var content = $("#divSCA .mod").clone();
		$("#divSCA .mod").remove();
		
		pb({
			id:"dialogCate",
			title:"<?php echo $this->_var['lang']['Add_category']; ?>",
			width:560,
			content:content,
			ok_title:"<?php echo $this->_var['lang']['assign']; ?>",
			cl_title:"<?php echo $this->_var['lang']['is_cancel']; ?>",
			onOk:function(){
				scanCodeDialog("#dialogCate");
				
				//类目提交
				selectChildCate_cheked();
			},
			onCancel:function(){
				scanCodeDialog("#dialogCate");
			},
			onClose:function(){
				scanCodeDialog("#dialogCate");
			}
		});
	});
	
	//类目关闭弹窗
	function scanCodeDialog(obj){
		var obj = $(obj).find(".mod");
		var cp = obj.clone();
		$("#divSCA").append(cp);
	}
	
	//类目复选框选择
	$(document).on("click","input[name='cateChild[]']",function(){
		if($(this).prop("checked") == true){
			$(this).parent().addClass("cart-checkbox-checked");
		}else{
			$(this).parent().removeClass("cart-checkbox-checked");
		}
	});
	
	//二级类目全选
	$(document).on("click","#getCateAll",function(){
		var t = $(this);
		
		if(t.prop("checked") == true){
			t.parent().addClass("cart-checkbox-checked");
			$("#steps_re_span").find("input[name='cateChild[]']").prop("checked",true);
			$("#steps_re_span").find(".cart-checkbox").addClass("cart-checkbox-checked");
		}else{
			t.parent().removeClass("cart-checkbox-checked");
			$("#steps_re_span").find("input[name='cateChild[]']").prop("checked",false);
			$("#steps_re_span").find(".cart-checkbox").removeClass("cart-checkbox-checked");
		}
	});
	
	//返回上一步
	$("#js-pre-step").click(function(){
		var pid_key = <?php echo $this->_var['pid_key']; ?> - 2;
		var step='<?php echo $this->_var['step']; ?>';
		
		if(step>-1){
			location.href="merchants_steps.php?step="+step+"&pid_key="+pid_key;	
		}else{
			history.go(-1);
		}
	});
	
	//入驻验证
	$("#nextStepBtn").click(function(){
		$("#stepForm").validate({
			ignore : ".ignore"
		});
		
		$("input[name='ec_shoprz_type']").rules("add",{
			min : 1,
			messages : {
				min : json_languages.merchants_step_error_one
			}
		});
		
		$("input[name='ec_subShoprz_type']").rules("add",{
			min : 1,
			messages : {
				min : json_languages.merchants_step_error_three
			}
		});
		
		$("input[name='ec_shop_categoryMain']").rules("add",{
			min : 1,
			messages : {
				min : json_languages.merchants_step_error_four
			}
		});
		
		$("input[name='detailed_category']").rules("add",{
			min : 1,
			messages : {
				min : '<?php echo $this->_var['lang']['please_Add_category']; ?>'
			}
		});
		
		$("input[name='title_brand_list']").rules("add",{
			min : 1,
			messages : {
				min : json_languages.merchants_step_error_two
			}
		});
		
		$("input[name='ec_bank_name_letter']").rules("add",{
			required : true,
			isEnglish : true,
			messages : {
				required : json_languages.merchants_step_error_En,
				isEnglish : json_languages.merchants_step_error_En_name
			}
		});
		
		$("input[name='ec_brandFirstChar']").rules("add",{
			required:true,
			maxlength : 1,			
			messages : {
				required: json_languages.merchants_step_error_six,
				maxlength : json_languages.merchants_step_error_shou_null
			}
		});
		
		$("input[name='ec_brandLogo']").rules("add",{
			required : 1,
			messages : {
				required :  json_languages.merchants_step_error_seven
			}
		});
		
		$("input[name='ec_brandType']").rules("add",{
			min : 1,
			messages : {
				min :  json_languages.merchants_step_error_Eight
			}
		});
		
		$("input[name='ec_brand_operateType']").rules("add",{
			min : 1,
			messages : {
				min : json_languages.merchants_step_error_Nine
			}
		});
		
		var shoprz_brand_length = $("input[name='ec_shoprz_brandName']").size();
		
		if(shoprz_brand_length > 0){
			$("input[name='ec_shoprz_brandName']").rules("add",{
				required:true,
				messages : {
					required : json_languages.merchants_step_error_brand
				}
			});
		}

		$("input[name='ec_shop_class_keyWords']").rules("add",{
			required:true,
			messages : {
				required : json_languages.merchants_step_cata_key
			}
		});
		
		$("input[name='ec_rz_shopName']").rules("add",{
			required:true,
			messages : {
				required : json_languages.merchants_step_error_Eleven
			}
		});
		
		$("input[name='ec_hopeLoginName']").rules("add",{
			required:true,
			messages : {
				required : json_languages.merchants_step_error_Twelve
			}
		});
	});	
});


/* 期望店铺类型选择 */
$.divselect("#ec_shoprz_type","#ec_shoprz_type_val",function(obj){
	var val = obj.data("value");
	
	if(val == 0){
		$("#subShoprz_Html").html(json_languages.merchants_step_error_one);
		$("#ec_subShoprz_type").hide();
		$("*[ectype='shopType']").hide();
	}else{
		if(val == 1){
			$("#ec_subShoprz_type").show();
			$("#ec_subShoprz_type_val").removeClass("ignore");
			$("*[ectype='shopType']").show();
		}else{
			$("#ec_subShoprz_type").hide();
			$("*[ectype='shopType']").hide();
			$("#ec_subShoprz_type_val").addClass("ignore");
		}
		
		$("*[ectype='shopSellerPrompt']").find(".item").eq(val-1).show().siblings().hide();
		
		$("#subShoprz_Html").html('');
	}
});

/* 期望旗舰店店铺选择 */
$.divselect("#ec_subShoprz_type","#ec_subShoprz_type_val",function(obj){
	var val = obj.data("value");
	
	if(val == 0){
		$("#subShoprz_Html").html(json_languages.merchants_step_error_three);
		$("*[ectype='shopType']").hide();
		$("*[ectype='shopType']").find(".item-item").hide();
	}else{
		$("*[ectype='shopType']").show();
		if(val != 1){
			$("*[ectype='shopType']").find(".item-item").eq(val-2).show().siblings().hide();
		}else{
			$("*[ectype='shopType']").find(".item-item").hide();
		}
		
		$("#subShoprz_Html").html('');
	}
});

/* 主营类目选择 */
$.divselect("#shop_categoryMain_id","#shop_categoryMain_id_val",function(obj){
	var val = obj.data("value");
	var name = obj.text();
	if(val != 0){
		$("#cate_Html").html('');
		selectChildCate(val);
		
		//给弹出窗口一级目录赋值
		$("#addCategoryMain_Id_val").val(val);
		$("#addCategoryMain_Id .cite").find("span").html(name);
	}else{
		$("#cate_Html").html(json_languages.merchants_step_error_four);		
	}
});

$.divselect("#addCategoryMain_Id","#addCategoryMain_Id_val",function(obj){
	var val = obj.data("value");
	var name = obj.text();
	
	selectChildCate(val);
	
	//给主营类目赋值
	$("#shop_categoryMain_id_val").val(val);
	$("#shop_categoryMain_id .cite").find("span").html(name);
});

//选择一级类目查找二级类目
function selectChildCate(val,type,cateArr){
	if(typeof(type) == 'undefined'){
		type = 0;
	}
	
	if(typeof(cateArr) == 'undefined'){
		cateArr = '';
	}

	Ajax.call('merchants_steps.php?step=addChildCate', 'cat_id=' + val + '&type=' + type + '&cateArr=' + $.toJSON(cateArr),function(result){
		if(result.error == 1){
			pbDialog(result.message,"",0);
			location.href = 'user.php';
		}else{
			$('#steps_re_span').html(result.content);
			$('#getCateAll').attr('checked',false);
			
			if(result.type == 1){ //取消二级类目
				$('#detailCategoryTable').html(result.cate_checked); //删除二级类目列表
				$('#category_permanent').html(result.catePermanent); //以及类目证件列表
			}
		}
	}, 'POST', 'JSON');
}

//添加二级类目
function selectChildCate_cheked(){
	var cateArr = new Object();
	var child = new Array();
	var cateChild = $("#dialogCate").find("input[name='cateChild[]']");
	for(i=0; i<cateChild.length; i++){
		if(cateChild[i].checked == true){
			child[i] = cateChild[i].value;
		}else{
			child[i] = '';
		}
	}
	
	//记录详细类目数量 验证时用到
	$("input[name='detailed_category']").val(cateChild.length);
	
	cateArr.cat_id = child;
	
	Ajax.call('merchants_steps.php?step=addChildCate_checked', 'cat_id=' + $.toJSON(cateArr),function(result){
		if(result.error == 1){
			pbDialog(result.message,"",0);
			location.href = 'user.php';
		}else{
			$('#detailCategoryTable').html(result.content); //二级类目别表
			$('#category_permanent').html(result.catePermanent); //以及类目证件列表
		}
	}, 'POST', 'JSON');
}

//删除二级类目
function deleteChildCate(ct_id){
	Ajax.call('merchants_steps.php?step=deleteChildCate_checked', 'ct_id=' + ct_id,function(result){
		if(result.error == 1){
			pbDialog(result.message,"",0);
			location.href = 'user.php';
		}else{
			$('#detailCategoryTable').html(result.content); //删除类目
			$('#category_permanent').html(result.catePermanent); //以及类目证件列表
		}	
	}, 'POST', 'JSON');
}


/* 添加品牌资质 */
function addBrandTable(obj)
{  
	var add_num = 1000;
	var num = document.getElementById('numAdd').value;
	if(num < add_num){
		var src  = obj.parentNode.parentNode;
		var idx  = rowindex(src);
		var tbl  = document.getElementById('brand-table');
		var row  = tbl.insertRow(idx + 1);
		//var cell = row.insertCell(-1);
		row.innerHTML = src.innerHTML.replace(/(.*)(addBrandTable)(.*)(\[)(\+)/i, "$1removeBrandTable$3$4-").replace('"expiredDate_permanent"','\"expiredDate_permanent'+num+'\"');
		row.innerHTML = row.innerHTML.replace('"expiredDate_permanent"','\"expiredDate_permanent'+num+'\"');
	  	
		num++;
		document.getElementById('numAdd').value = num;
	}else{
		alert(add_limit + add_num +add_ci);
	}
	
	for(i=0;i<num;i++){
		var expiredDate = document.getElementsByName("ec_expiredDateInput[]");
		expiredDate[i].id = 'expiredDateInput_' + i;
	}
}

/* 删除品牌资质 */
function removeBrandTable(obj,b_fid)
{
	if(b_fid > 0){
		if (confirm(json_languages.merchants_step_remove)){
		   location.href = 'merchants_steps.php?step=<?php echo $this->_var['step']; ?>&pid_key=<?php echo $this->_var['b_pidKey']; ?>&ec_shop_bid=<?php echo $this->_var['ec_shop_bid']; ?>&del_bFid=' + b_fid + '&brandView=brandView';
	   }
	}else{
		var row = rowindex(obj.parentNode.parentNode);
		var tbl = document.getElementById('brand-table');
		
		tbl.deleteRow(row);
		
		var num = document.getElementById('numAdd').value;
		num--;
		document.getElementById('numAdd').value = num;
		
		for(i=0;i<num;i++){
			var radioCheckbox_val = document.getElementsByName("radioCheckbox_val[]");
			radioCheckbox_val[i].value = i;
		}
	}
}

/* 删除品牌 */
function get_deleteBrand(bid){
	if (confirm(json_languages.merchants_step_remove)){
		location.href = 'merchants_steps.php?step=<?php echo $this->_var['step']; ?>&pid_key=<?php echo $this->_var['b_pidKey']; ?>&ec_shop_bid=' + bid + '&del=deleteBrand';
	}
}
</script>
</html>
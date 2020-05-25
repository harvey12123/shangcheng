<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['11_system']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<?php echo $this->fetch('library/shipping_menu_tab.lbi'); ?>		
        	<div class="explanation" id="explanation">
            	<div class="ex_tit">
                <i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span>
                <?php if ($this->_var['open'] == 1): ?>
                <div class="view-case">
                	<div class="view-case-tit"><i></i><?php echo $this->_var['lang']['view_tutorials']; ?></div>
                    <div class="view-case-info">
                    	<a href="http://www.jabrielcloud.com/article-3141.html" target="_blank"><?php echo $this->_var['lang']['tutorials_bonus_list_one']; ?></a>
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
                <div class="common-content">
                	<div class="list-div">
                        <table class="table_layout">
                        	<thead>
                            	<tr>
                                  <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['shipping_name']; ?></div></th>
                                  <th width="30%"><div class="tDiv"><?php echo $this->_var['lang']['shipping_url']; ?></div></th>
                                  <!--<th width="7%"><div class="tDiv"><?php echo $this->_var['lang']['insure']; ?></div></th>-->
                                  <th width="7%"><div class="tDiv"><?php echo $this->_var['lang']['support_cod']; ?></div></th>
                                  <th width="7%"><div class="tDiv"><?php echo $this->_var['lang']['kuaidiniao_dayin']; ?></div></th>
                                  <th width="7%"><div class="tDiv"><?php echo $this->_var['lang']['default_mode']; ?></div></th>
                                  <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['sort_order']; ?></div></th>
                                  <th width="22%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                              </tr>
                            </thead>
                            <tbody>
                            	<?php $_from = $this->_var['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'module');if (count($_from)):
    foreach ($_from AS $this->_var['module']):
?>
                                <?php if (( $this->_var['seller_shopinfo']['ru_id'] > 0 && $this->_var['module']['install'] == 1 && $this->_var['module']['code'] != 'cac' ) || $this->_var['seller_shopinfo']['ru_id'] == 0): ?>
                                <tr>
                                    <td>
                                    	<div class="tDiv">
                                        <?php if ($this->_var['module']['install'] == 1): ?>
                                        	<div class="editSpanInput" ectype="editSpanInput">
                                        		<span onclick="listTable.edit(this, 'edit_name', '<?php echo $this->_var['module']['code']; ?>')"><?php echo $this->_var['module']['name']; ?></span>
                                            	<i class="icon icon-edit"></i>									
                                            </div>
                                        <?php else: ?>
                                            <?php echo $this->_var['module']['name']; ?>
                                        <?php endif; ?>
                                        </div>
                                    </td>
                                    <td>
                                    	<div class="tDiv">
                                          <?php if ($this->_var['module']['install'] == 1): ?>
                                          <span onclick="listTable.edit(this, 'edit_desc', '<?php echo $this->_var['module']['code']; ?>'); return false;"><?php echo $this->_var['module']['desc']; ?></span>
                                          <?php else: ?>
                                          <span><?php echo $this->_var['module']['desc']; ?></span>
                                          <?php endif; ?>
                                        </div>
                                    </td>
                                    <!--<td>
                                    	<div class="tDiv">
                                          <?php if ($this->_var['module']['install'] == 1 && $this->_var['module']['is_insure'] != 0): ?>
                                          <span onclick="listTable.edit(this, 'edit_insure', '<?php echo $this->_var['module']['code']; ?>'); return false;"><?php echo $this->_var['module']['insure_fee']; ?></span>
                                          <?php else: ?>
                                          <?php echo $this->_var['module']['insure_fee']; ?>
                                          <?php endif; ?>
                                        </div>
                                    </td>-->
                                    <td><div class="tDiv"><?php if ($this->_var['module']['cod'] == 1): ?><img src="images/yes.png" alt="<?php echo $this->_var['lang']['yes']; ?>" title="<?php echo $this->_var['lang']['yes']; ?>"><?php else: ?><img src="images/no.png" alt="<?php echo $this->_var['lang']['no']; ?>" title="<?php echo $this->_var['lang']['no']; ?>"><?php endif; ?></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['module']['kdniao_print'] == 1): ?><img src="images/yes.png" alt="<?php echo $this->_var['lang']['yes']; ?>" title="<?php echo $this->_var['lang']['yes']; ?>"><?php else: ?><img src="images/no.png" alt="<?php echo $this->_var['lang']['no']; ?>" title="<?php echo $this->_var['lang']['no']; ?>"><?php endif; ?></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['seller_shopinfo']['ru_id'] == 0 && $this->_var['module']['id'] == $this->_var['seller_shopinfo']['shipping_id']): ?><img src="images/yes.png" title="<?php echo $this->_var['module']['name']; ?><?php echo $this->_var['lang']['enabled']; ?>"><?php else: ?><img src="images/no.png" alt="<?php echo $this->_var['lang']['no']; ?>" title="<?php echo $this->_var['lang']['no']; ?>"><?php endif; ?></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['module']['install'] == 1): ?><span onclick="listTable.edit(this, 'edit_order', '<?php echo $this->_var['module']['code']; ?>'); return false;"><?php echo $this->_var['module']['shipping_order']; ?></span><?php else: ?>0<?php endif; ?></div></td>
                                    <td class="handle handle_tr tr">
                                        <div class="tDiv">
                                          <?php if ($this->_var['module']['install'] == 1): ?>
                                              <?php if ($this->_var['module']['kdniao_print'] == 1): ?>
                                                  <a href="javascript:void(0);" class="btn_region" ectype="account_setting" data-id="<?php echo $this->_var['module']['id']; ?>" data-code="<?php echo $this->_var['module']['code']; ?>"><i class="icon icon-cog"></i><?php echo $this->_var['lang']['kuaidiniao_set']; ?></a>
                                              <?php endif; ?>
                                          <a href="javascript:confirm_redirect(lang_removeconfirm,'shipping.php?act=uninstall&code=<?php echo $this->_var['module']['code']; ?>')" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['uninstall']; ?></a>
                                          <?php if ($this->_var['module']['code'] == 'cac'): ?>
                                          <a href="shipping_area.php?act=list&shipping=<?php echo $this->_var['module']['id']; ?>" class="btn_region"><i class="sc_icon icon-map-marker"></i><?php echo $this->_var['lang']['shipping_area']; ?></a> 
                                          <?php endif; ?>
                                          <a href="shipping.php?act=edit_print_template&shipping=<?php echo $this->_var['module']['id']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['shipping_print_edit']; ?></a>
                                          <?php else: ?>
                                          <a href="shipping.php?act=install&code=<?php echo $this->_var['module']['code']; ?>" class="btn_inst"><i class="sc_icon sc_icon_inst"></i><?php echo $this->_var['lang']['install']; ?></a>
                                          <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; else: ?>
                                <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.purebox.js')); ?>
	<script type="text/javascript">
	//帐号设置
	$(document).on('click', "*[ectype='account_setting']", function(){
		var id = $(this).data('id');
		$.jqueryAjax('shipping.php', 'act=account_setting&id='+id, function(data){
			var content = data.content;
			pb({
				id:"setting_dialog",
				title:'<?php echo $this->_var['lang']['zhanghu_set']; ?>',
				width:500,
				content:content,
				ok_title:"<?php echo $this->_var['lang']['button_submit_alt']; ?>",
				cl_title:"<?php echo $this->_var['lang']['cancel']; ?>",
				drag:true,
				foot:true,
				onOk:function(){
					save_account();
				}
			});		
		})
	})
	//保存设置
	function save_account(){
		var obj = $("#setting_dialog");
    var this_data = obj.find("form").serialize();
		$.jqueryAjax('shipping.php', this_data, function(data){
      pbDialog('<?php echo $this->_var['lang']['set_success']; ?>', '', 1);
		}, 'post')
	}

  //帐号申请
  $(document).on('click', "*[ectype='account_apply']", function(){
    var id = $(this).data('id');
    $.jqueryAjax('shipping.php', 'act=account_apply&id='+id, function(data){
      var content = data.content;
      pb({
        id:"apply_dialog",
        title:'<?php echo $this->_var['lang']['customer_apply']; ?>',
        width:700,
        content:content,
        ok_title:"<?php echo $this->_var['lang']['button_submit_alt']; ?>",
		cl_title:"<?php echo $this->_var['lang']['cancel']; ?>",
        drag:true,
        foot:true,
        onOk:function(){
          submit_account();
        }
      });   
    })
  })
  //提交申请
  function submit_account(){
    var obj = $("#apply_dialog");
    var this_data = obj.find("form").serialize();
    $.jqueryAjax('shipping.php', this_data, function(data){
      if(data.error == 1){
        pbDialog("<?php echo $this->_var['lang']['subimt_apply_fail']; ?>", data.message, 0);
      }else{
        pbDialog("<?php echo $this->_var['lang']['subimt_apply_success']; ?>", '', 1);
      }
    }, 'post')
  }
	</script>	
</body>
</html>

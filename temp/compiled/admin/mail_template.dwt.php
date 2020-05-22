<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
		<div class="title"><?php echo $this->_var['lang']['12_template']; ?> - <?php echo $this->_var['lang']['mail_template']; ?></div>
		<div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info mian-info-temp">
                    	<form method="post" name="theForm" action="mail_template.php?act=save_template">
                    	<div class="switch_info" id="conent_area">
                        <?php endif; ?>
                        	<div class="items">
                            	<div class="item">
                                	<div class="label"><?php echo $this->_var['lang']['select_template']; ?></div>
                                    <div class="label_value">
                                        <div id="selTemplate" class="imitate_select select_w320" rank="1">
                                        	<div class="cite"><?php echo $this->_var['lang']['select_cat']; ?></div>
                                            <ul>
                                                <?php $_from = $this->_var['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'vo');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['vo']):
?>
                                                <li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['vo']; ?></a></li>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </ul>
                                        	<input name="catFirst" type="hidden" value="<?php echo $this->_var['cur']; ?>" id="selTemplate_val">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                	<div class="label"><?php echo $this->_var['lang']['mail_subject']; ?>：</div>
                                    <div class="label_value"><input type="text" name="subject" id="subject" value="<?php echo $this->_var['template']['template_subject']; ?>" class="text" /></div>
                                </div>
                                <div class="item">
                                	<div class="label"><?php echo $this->_var['lang']['mail_type']; ?>：</div>
                                    <div class="label_value">
                                    	<div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" name="mail_type" class="ui-radio" value="0" id="mail_type0" <?php if ($this->_var['template']['is_html'] == '0'): ?>checked="true"<?php endif; ?> onclick="javascript:change_editor();"/>
                                                <label class="ui-radio-label" for="mail_type0"><?php echo $this->_var['lang']['mail_plain_text']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" name="mail_type" class="ui-radio" value="1" id="mail_type1" <?php if ($this->_var['template']['is_html'] == '1'): ?>checked="true"<?php endif; ?> onclick="javascript:change_editor();"/>
                                                <label class="ui-radio-label" for="mail_type1"><?php echo $this->_var['lang']['mail_html']; ?></label>
                                            </div>
                                        	<input type="hidden" name="tpl" value="<?php echo $this->_var['tpl']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                	<div class="label">&nbsp;</div>
                                    <div class="label_value">
                                    	<div class="mail_tmp">
                                        <?php if ($this->_var['template']['is_html'] == '1'): ?>
                                          <?php echo $this->_var['FCKeditor']; ?>
                                        <?php else: ?>
                                          <textarea name="content" id="content" data-value='111' rows="16" class="textarea"><?php echo $this->_var['template']['template_content']; ?></textarea>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                	<div class="label">&nbsp;</div>
                                    <div class="label_value info_btn"><input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" /></div>
                                </div>
                            </div>
                            <?php if ($this->_var['full_page']): ?>
                        </div>
                    	</form>
                    </div>
                </div>
    		</div>
    	</div>                            
	</div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    
    <script type="text/javascript">
        $.divselect("#selTemplate","#selTemplate_val",function(obj){
            var val = obj.data("value");
            loadTemplate(val);
        });
    
        var orgContent = '';
        
        /* 定义页面状态变量 */
        var STATUS_is_html = '<?php echo $this->_var['template']['is_html']; ?>'; //文本邮件|HTML邮件
        
        /**
         * 修改页面状态变量
         */
        function update_page_status_variables()
        {
          var em = document.forms['theForm'].elements;
        
          /* STATUS_is_html */
          var em_radio = em['mail_type'];
        
          for (i = 0; i < em_radio.length; i++)
          {
            if (em_radio[i].checked)
            {
              STATUS_is_html = em_radio[i].value;
        
              break;
            }
          }
        }
        
        /**
         * 载入模板
         */
        function loadTemplate(tpl)
        {
          curContent = document.getElementById('content').value;
        
          if (orgContent != curContent && orgContent != '')
          {
            if (!confirm(save_confirm))
            {
              return;
            }
          }
          Ajax.call('mail_template.php?is_ajax=1&act=loat_template', 'tpl=' + tpl, loadTemplateResponse, "GET", "JSON");
        }
        
        /**
         * 更改邮件类型
         */
        function change_editor()
        {
          var em = document.forms['theForm'].elements;
        
          //取单选框 mail_type 的当前选中值
          var em_radio = em['mail_type'];
        
          for (i = 0; i < em_radio.length; i++)
          {
            if (em_radio[i].checked)
            {
              type = em_radio[i].value;
              break;
            }
          }
        
          //如果 onclick 是当前选中的单选框
          if (STATUS_is_html == type)
          {
            return; //返回空值
          }
        
          var tpl = document.getElementById('selTemplate_val').value;
          Ajax.call('mail_template.php?is_ajax=1&act=loat_template&mail_type=' + type, 'tpl=' + tpl, loadTemplateResponse, "GET", "JSON");
        }
        
        /**
         * 将模板的内容载入到文本框中
         */
        function loadTemplateResponse(result, textResult)
        {
          if (result.error == 0)
          {
            document.getElementById('conent_area').innerHTML = result.content;
        
            orgContent = '';
          }
        
          update_page_status_variables();
        
          if (result.message.length > 0)
          {
            alert(result.message);
          }
        }
        
        /**
         * 保存模板内容
         */
        function saveTemplate()
        {
            var selTemp = document.getElementById('selTemplate').value;
            var subject = document.getElementById('subject').value;
            var content = document.getElementById('content').value;
            var type    = 0;
            var em      = document.forms['theForm'].elements;
        
            for (i = 0; i < em.length; i++)
            {
                if (em[i].type == 'radio' && em[i].name == 'mail_type' && em[i].checked)
                {
                    type = em[i].value;
                }
            }
        
            Ajax.call('mail_template.php?is_ajax=1&act=save_template', 'tpl=' + selTemp + "&subject=" + subject + "&content=" + content + "&is_html=" + type, saveTemplateResponse, "POST", "JSON");
        }
        
        /**
         * 提示用户保存成功或失败
         */
        function saveTemplateResponse(result)
        {
          if (result.error == 0)
          {
            orgContent = document.getElementById('content').value;
          }
          else
          {
            document.getElementById('content').value = orgContent;
          }
        
          if (result.message.length > 0)
          {
            alert(result.message);
          }
        }
    </script>
    
</body>
</html>
<?php endif; ?>
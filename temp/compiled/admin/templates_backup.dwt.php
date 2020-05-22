<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
<div class="warpper">
<div class="title"><?php echo $this->_var['lang']['12_template']; ?> - <?php echo $this->_var['lang']['template_backup']; ?></div>
<!-- start templates list -->
<div class="content">
<div class="explanation" id="explanation">
    <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
    <ul>
        <li><?php echo $this->_var['lang']['operation_prompt_content']['backup']['0']; ?></li>
        <li><?php echo $this->_var['lang']['operation_prompt_content']['backup']['1']; ?></li>
    </ul>
</div>
<div class="list-div mt20">
    <table width="100%" cellpadding="1" cellspacing="1">
        <tr>
            <th><div class="tDiv"><?php echo $this->_var['lang']['cur_setting_template']; ?></div></th>
        </tr>
    	<?php if ($this->_var['files']): ?>
        <tr>
            <td>
            <form action="template.php" method="post" >
                <table cellpadding="1" cellspacing="1">
                <tr>
                    <td colspan="3">
                        <div class="tDiv"><input type="checkbox" name="chkall" class="ui-checkbox" id="chkall" onclick="checkall(this.form, 'files[]')"><label class="ui-label" for="chkall"><?php echo $this->_var['lang']['select_all']; ?></label></div>
                    </td>
                </tr>
                <tr>
                <?php $_from = $this->_var['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'file');$this->_foreach['template'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['template']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['file']):
        $this->_foreach['template']['iteration']++;
?>
                    <?php if ($this->_foreach['template']['iteration'] > 1 && ( $this->_foreach['template']['iteration'] - 1 ) % 3 == 0): ?>
                        </tr><tr>
                    <?php endif; ?>
                    <td width="30%"><div class="tDiv"><input type="checkbox" name="files[]" value="<?php echo $this->_var['key']; ?>" class="ui-checkbox" id="files_<?php echo $this->_var['key']; ?>"><label class="ui-label" for="files_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['file']; ?></label></div></td>
                    <?php if (($this->_foreach['template']['iteration'] == $this->_foreach['template']['total'])): ?>
                        <?php if ($this->_foreach['template']['iteration'] % 3 == 0): ?>
                        </tr>
                        <?php elseif ($this->_foreach['template']['iteration'] % 3 == 1): ?>
                            <td width="30%">&nbsp;</td>
                            <td width="30%">&nbsp;</td>
                        </tr>
                    <?php else: ?>
                        <td>&nbsp;</td>
                    </tr>
                    <?php endif; ?>
                <?php endif; ?>
            	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
            	<td colspan="3"><div class="tDiv"><label class="fl lh28"><?php echo $this->_var['lang']['remarks']; ?>：</label><input type="text" name="remarks" size="40" class="text" /></div></td>
            </tr>
            <tr>
                <td colspan="3">
                	<div class="info_btn tc pt20 pb20">
                        <input type="hidden" name="act" value="act_backup_setting" />
                        <input type="submit" value="<?php echo $this->_var['lang']['backup_setting']; ?>" class="button fn" />
                    </div>
                </td>
            </tr>
            </table>
        </form>
        </td>
    </tr>
    </table>
    <table class="list-div mt20" cellpadding="1" cellspacing="1">
    	<?php else: ?>
    	<tr>
        	<td colspan="2"><div class="tDiv"><?php echo $this->_var['lang']['no_setting_template']; ?></div></td>
        </tr>
        <?php endif; ?>
        <tr>
        	<th width="80%"><div class="tDiv"><?php echo $this->_var['lang']['cur_backup']; ?></div></th>
            <th width="20%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
        </tr>
        <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'remarks');if (count($_from)):
    foreach ($_from AS $this->_var['remarks']):
?>
            <tr>
            	<td><div class="tDiv"><?php echo $this->_var['remarks']['content']; ?></div></td>
                <td class="handle">
                    <div class="tDiv a2">
                        <a href="template.php?act=restore_backup&remarks=<?php echo $this->_var['remarks']['url']; ?>" class="btn_see"><i class="icon icon-cog"></i><?php echo $this->_var['lang']['restore']; ?></a>
                        <a href="template.php?act=del_backup&remarks=<?php echo $this->_var['remarks']['url']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr><td colspan="2" align="center" style="padding:40px 0; color:#999;"><?php echo $this->_var['lang']['no_backup']; ?></td></tr>
        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
</div>
</div>
</div>
<?php echo $this->fetch('library/pagefooter.lbi'); ?>

	<script type="text/javascript">
    function checkall(frm, chk)
    {
        for (i = 0; i < frm.elements.length; i++)
        {
            if (frm.elements[i].name == chk)
            {
                frm.elements[i].checked = frm.elements['chkall'].checked;
            }
        }
    }
    </script>

</body>
</html>
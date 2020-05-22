<?php if ($this->_var['msg_lists']): ?>
<div class="avatar">
    <img src="themes/ecmoban_dsc2017/images/admin_avatar.png" alt="">
</div>
<div class="message">
<?php $_from = $this->_var['msg_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'msg');$this->_foreach['message_lists'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['message_lists']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['msg']):
        $this->_foreach['message_lists']['iteration']++;
?>
    <div class="item">
        <div class="item-l"><h2><?php echo $this->_var['msg']['msg_type']; ?></h2><span class="time"><?php echo $this->_var['msg']['msg_time']; ?></span></div>
        <div class="item-r">
            <div class="content-item-tit">
                <div class="tit"><span class="ftx-10"><?php echo $this->_var['msg']['user_name']; ?><?php if ($this->_var['msg']['user_name'] == ''): ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?>：</span><?php if ($this->_var['msg']['id_value'] > 0): ?><?php echo $this->_var['lang']['feed_user_comment']; ?>&nbsp;&nbsp;<a href="<?php echo $this->_var['msg']['preg_replace']; ?>" target="_blank" title="<?php echo $this->_var['msg']['goods_name']; ?>"><?php echo $this->_var['msg']['goods_name']; ?></a><?php endif; ?><?php echo $this->_var['msg']['msg_content']; ?></div>
            </div>
            <?php if ($this->_var['msg']['re_content']): ?>
            <div class="hf"><h3><?php echo $this->_var['lang']['shopman_reply']; ?>：</h3><?php echo $this->_var['msg']['re_content']; ?></div>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?>
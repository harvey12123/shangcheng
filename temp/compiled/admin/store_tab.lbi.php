<div class="tabs_info">
    <ul>
        <li <?php if ($this->_var['menu_select']['current'] == '12_seller_store'): ?>class="curr"<?php endif; ?>>
            <a href="offline_store.php?act=list&type=1"><?php echo $this->_var['lang']['12_offline_store']; ?></a>
        </li>
        <li <?php if ($this->_var['menu_select']['current'] == '16_seller_users_real'): ?>class="curr"<?php endif; ?>>
            <a href="offline_store.php?act=order_stats&type=1"><?php echo $this->_var['lang']['store_statistics']; ?></a>
        </li>
    </ul>
</div>	
<div class="tabs_info">
    <ul>
        <li <?php if ($this->_var['menu_select']['current'] == '03_shipping_list'): ?>class="curr"<?php endif; ?>><a href="shipping.php?act=list"><?php echo $this->_var['lang']['03_shipping_list']; ?></a></li>
        <li <?php if ($this->_var['menu_select']['current'] == '04_shipping_transport'): ?>class="curr"<?php endif; ?>><a href="goods_transport.php?act=list"><?php echo $this->_var['lang']['freight_manage']; ?></a></li>
        <li <?php if ($this->_var['menu_select']['current'] == '05_area_list'): ?>class="curr"<?php endif; ?>><a href="area_manage.php?act=list"><?php echo $this->_var['lang']['05_area_list']; ?></a></li>
        <li <?php if ($this->_var['menu_select']['current'] == '09_region_area_management'): ?>class="curr"<?php endif; ?>><a href="region_area.php?act=list"><?php echo $this->_var['lang']['09_region_area_management']; ?></a></li>
        <li <?php if ($this->_var['menu_select']['current'] == '09_warehouse_management'): ?>class="curr"<?php endif; ?>><a href="warehouse.php?act=list"><?php echo $this->_var['lang']['09_warehouse_management']; ?></a></li>
        <li <?php if ($this->_var['menu_select']['current'] == 'shipping_date_list'): ?>class="curr"<?php endif; ?>><a href="shipping.php?act=date_list"><?php echo $this->_var['lang']['self_lifting_time']; ?></a></li>
    </ul>
</div>
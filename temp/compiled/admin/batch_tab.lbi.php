<div class="tabs_info">
    <ul>
    	<li <?php if ($this->_var['menu_select']['current'] == '15_batch_edit'): ?>class="curr"<?php endif; ?>><a href="goods_batch.php?act=select"><?php echo $this->_var['lang']['batch_edit_goods']; ?></a></li>
        <li <?php if ($this->_var['menu_select']['current'] == '12_batch_pic'): ?>class="curr"<?php endif; ?>><a href="picture_batch.php"><?php echo $this->_var['lang']['batch_handle_picture']; ?></a></li>
        <li <?php if ($this->_var['menu_select']['current'] == '13_batch_add'): ?>class="curr"<?php endif; ?>><a href="goods_batch.php?act=add"><?php echo $this->_var['lang']['batch_upload_goods']; ?></a></li>
        <li <?php if ($this->_var['menu_select']['current'] == '14_goods_export'): ?>class="curr"<?php endif; ?>><a href="goods_export.php?act=goods_export"><?php echo $this->_var['lang']['batch_export_goods']; ?></a></li>
        <li <?php if ($this->_var['menu_select']['current'] == 'goods_auto'): ?>class="curr"<?php endif; ?>><a href="goods_auto.php?act=list"><?php echo $this->_var['lang']['batch_auto_nosale']; ?></a></li>
        
        <?php if ($this->_var['menu_select']['current'] == 'warehouse_attr_batch'): ?>
        <li <?php if ($this->_var['menu_select']['current'] == 'warehouse_attr_batch'): ?>class="curr"<?php endif; ?>><a href="goods_warehouse_attr_batch.php?act=add"><?php echo $this->_var['lang']['batch_upload_warehouse_attr']; ?></a></li>
        <?php endif; ?>
        
        <?php if ($this->_var['menu_select']['current'] == 'area_attr_batch'): ?>
        <li <?php if ($this->_var['menu_select']['current'] == 'area_attr_batch'): ?>class="curr"<?php endif; ?>><a href="goods_area_attr_batch.php?act=add"><?php echo $this->_var['lang']['batch_upload_area_attr']; ?></a></li>
        <?php endif; ?>
        
        <?php if ($this->_var['menu_select']['current'] == 'back_area_batch_list'): ?>
        <li <?php if ($this->_var['menu_select']['current'] == 'back_area_batch_list'): ?>class="curr"<?php endif; ?>><a href="goods_area_batch.php?act=add"><?php echo $this->_var['lang']['batch_upload_goods_area']; ?></a></li>
        <?php endif; ?>
        
        <?php if ($this->_var['menu_select']['current'] == 'warehouse_batch'): ?>
        <li <?php if ($this->_var['menu_select']['current'] == 'warehouse_batch'): ?>class="curr"<?php endif; ?>><a href="goods_warehouse_batch.php?act=add"><?php echo $this->_var['lang']['batch_upload_warehouse_stock']; ?></a></li>
        <?php endif; ?>
        
        <?php if ($this->_var['menu_select']['current'] == 'produts_batch'): ?>
        <li <?php if ($this->_var['menu_select']['current'] == 'produts_batch'): ?>class="curr"<?php endif; ?>><a href="goods_produts_batch.php?act=add&goods_id=<?php echo $this->_var['goods_id']; ?>"><?php echo $this->_var['lang']['batch_upload_goods_produts']; ?></a></li>
        <?php endif; ?>
        
        <?php if ($this->_var['menu_select']['current'] == 'produts_warehouse_batch'): ?>
        <li <?php if ($this->_var['menu_select']['current'] == 'produts_warehouse_batch'): ?>class="curr"<?php endif; ?>><a href="goods_produts_warehouse_batch.php?act=add&goods_id=<?php echo $this->_var['goods_id']; ?>&warehouse_id=<?php echo $this->_var['warehouse_id']; ?>"><?php echo $this->_var['lang']['batch_upload_warehouse_goods']; ?></a></li>
        <?php endif; ?>
        
        <?php if ($this->_var['menu_select']['current'] == 'produts_area_batch'): ?>
        <li <?php if ($this->_var['menu_select']['current'] == 'produts_area_batch'): ?>class="curr"<?php endif; ?>><a href="goods_produts_area_batch.php?act=add&goods_id=<?php echo $this->_var['goods_id']; ?>&area_id=<?php echo $this->_var['area_id']; ?>"><?php echo $this->_var['lang']['batch_upload_area_goods']; ?></a></li>
        <?php endif; ?>
    </ul>
</div>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
 
<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['19_merchants_store']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<?php echo $this->fetch('library/seller_comment_tab.lbi'); ?>
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul> 
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['grade']['0']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
						<div class="list-div">
						<?php echo $this->_var['lang']['current_modification_data']; ?><?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?><?php echo $this->_var['lang']['tiao']; ?>
						</div>
						<div style=" width:100px; height:10px; clear:both; overflow:hidden;"></div>
						<div class="list-div">
						<table id="listTable">
							<tr>
                            	<th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?><div></th>
                            	<th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['upload_grade']['seller_id']; ?></div></th>
								<th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['upload_grade']['shop_name']; ?></div></th>
								<th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['upload_grade']['goods_desc_consistent']; ?></div></th>
								<th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['upload_grade']['service_attitude']; ?></div></th>
                                <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['upload_grade']['logistics_delivery']; ?></div></th>
                                <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['upload_grade']['comment_number']; ?></div></th>
							</tr>
						</table>
						</div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.purebox.js')); ?>
    <script type="text/javascript">
        $(function(){
            start(<?php echo $this->_var['page']; ?>);
			ajax_title();
        });
        
        function start(page)
        {
            Ajax.call('merchants_users_list.php?act=ajax_seller_grade', 'page=' + page, start_response, 'POST', 'JSON');
        }
        
        /**
         * 处理反馈信息
         * @param: result
         * @return
         */
        function start_response(result)
        {
            if(result.is_stop == 1){
                var tbl = document.getElementById("listTable"); //获取表格对象
                var row = tbl.insertRow(-1);
                
				cell = row.insertCell(0);
                cell.innerHTML = "<div class='tDiv'>"+result.filter_page+"</div>";
                cell = row.insertCell(1);
                cell.innerHTML = "<div class='tDiv'>"+result.list.user_id+"</div>";
                cell = row.insertCell(2);
                cell.innerHTML = "<div class='tDiv'>"+result.list.shop_name+"</div>";
                cell = row.insertCell(3);
                cell.innerHTML = "<div class='tDiv'>"+result.list.desc+"</div>";
				cell = row.insertCell(4);
                cell.innerHTML = "<div class='tDiv'>"+result.list.service+"</div>";
				cell = row.insertCell(5);
                cell.innerHTML = "<div class='tDiv'>"+result.list.delivery+"</div>";
				cell = row.insertCell(6);
                cell.innerHTML = "<div class='tDiv'>"+result.list.mc_all+"</div>";
				
                if(result.is_stop == 1){
                    start(result.page);
                }	
            }
            
            if(result.is_stop == 0){
				$("#title_name").addClass("red");
                $("#title_name").html(title_name_one_grade);
            }else{
				$("#title_name").html(title_name_two_grade);
			}
        }
    </script>
</body>
</html>
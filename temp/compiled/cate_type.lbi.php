
<div class="panel-body">
    <div class="panel-tit"><span><?php echo $this->_var['title']['fields_titles']; ?></span></div>
    <div class="cue"><?php echo $this->_var['title']['titles_annotation']; ?></div>
    <div class="list">
        <?php echo $this->fetch('library/cententFields.lbi'); ?>
        <div class="item">
            <div class="label">
                <em>*</em>
                <span><?php echo $this->_var['lang']['Main_category']; ?>：</span>
            </div>
            <div class="value">
                <div class="imitate_select w200 shop_categoryMain" id="shop_categoryMain_id">
                    <div class="cite"><span><?php echo $this->_var['lang']['Please_select']; ?></span><i class="iconfont icon-down"></i></div>
                    <ul>
                        <li><a href="javascript:void(0);" data-value="0"><?php echo $this->_var['lang']['Please_select']; ?></a></li>
                        <?php $_from = $this->_var['title']['first_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate');if (count($_from)):
    foreach ($_from AS $this->_var['cate']):
?>
                        <li><a href="javascript:void(0);" data-value="<?php echo $this->_var['cate']['cat_id']; ?>"><?php echo $this->_var['cate']['cat_name']; ?></a></li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                    <input type="hidden" name="ec_shop_categoryMain" value="<?php echo $this->_var['title']['parentType']['shop_categoryMain']; ?>" id="shop_categoryMain_id_val" />
                </div>
                <label class="error" id="cate_Html"></label>
            </div>
        </div>
        <div class="item">
            <div class="label">
                <em>*</em>
                <span><?php echo $this->_var['lang']['Detailed_category']; ?>：</span>
            </div>
            <div class="value">
                <input id="addCategoryBtn" class="btns" type="button" value="<?php echo $this->_var['lang']['add']; ?>">
                <a class="ml10 ftx-05" target="_blank" href="article.php?id=42"><?php echo $this->_var['lang']['category_Cost']; ?> >></a>
                <input type="hidden" name="detailed_category" value="<?php echo $this->_var['category_count']; ?>" />
                <div id="divSCA">
                    <div class="mod">
                        <div class="mod_list">
                            <div class="mod-label"><?php echo $this->_var['lang']['one_category']; ?>：</div>
                            <div class="mod-value">
                                <div class="imitate_select w200" id="addCategoryMain_Id">
                                    <div class="cite"><span><?php echo $this->_var['lang']['Please_select']; ?></span><i class="iconfont icon-down"></i></div>
                                    <ul>
                                        <li><a href="javascript:void(0);" data-value="0"><?php echo $this->_var['lang']['Please_select']; ?></a></li>
                                        <?php $_from = $this->_var['title']['first_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate');if (count($_from)):
    foreach ($_from AS $this->_var['cate']):
?>
                                        <li><a href="javascript:void(0);" data-value="<?php echo $this->_var['cate']['cat_id']; ?>"><?php echo $this->_var['cate']['cat_name']; ?></a></li>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                    <input type="hidden" name="addCategoryMain" value="<?php echo $this->_var['title']['parentType']['shop_categoryMain']; ?>" id="addCategoryMain_Id_val" />
                                </div>
                            </div>
                        </div>
                        <div class="mod_list">
                            <div class="mod-label"><?php echo $this->_var['lang']['two_category']; ?>：</div>
                            <div class="mod-value">
                                <div class="cart-checkbox">
                                    <input type="checkbox" class="ui-checkbox CheckBoxShop" name="addCategoryBtn[]" id="getCateAll">
                                    <label for="getCateAll"><?php echo $this->_var['lang']['check_all_back']; ?></label>
                                </div>
                            </div>
                            <div class="mod_span" id="steps_re_span"><?php echo $this->_var['lang']['select_one_category']; ?></div>
                        </div>
                    </div>  
                </div>
                <div id="detailCategoryTable">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="200"><?php echo $this->_var['lang']['Serial_number']; ?></th>
                                <th width="300"><?php echo $this->_var['lang']['one_category']; ?></th>
                                <th width="300"><?php echo $this->_var['lang']['two_category']; ?></th>
                                <th width="110"><?php echo $this->_var['lang']['handle']; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($this->_var['category_info']): ?>
                        <?php $_from = $this->_var['category_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'category');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['category']):
?>
                            <tr class="seller_category">
                                <td>
                                    <p>
                                        <span class="index"><?php echo $this->_var['k']; ?></span>
                                        <input type="hidden" value="<?php echo $this->_var['category']['cat_id']; ?>" name="cat_id[]" class="cId">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <input type="hidden" value="<?php echo $this->_var['category']['parent_name']; ?>" name="parent_name[]" class="cl1Name">
                                        <?php echo $this->_var['category']['parent_name']; ?>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <input type="hidden" value="<?php echo $this->_var['category']['cat_name']; ?>" name="cat_name[]" class="cl2Name">
                                        <?php echo $this->_var['category']['cat_name']; ?>
                                    </p>
                                </td>
                                <td align="center"><p><a class="ftx-05 removeDetailCategoryBtn" href="javascript:void(0);" onClick="deleteChildCate(<?php echo $this->_var['category']['ct_id']; ?>)"><span><?php echo $this->_var['lang']['drop']; ?></span></a></p></td>
                            </tr>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="label">
                <span><?php echo $this->_var['lang']['Corresponding_zizhi']; ?>：</span>
            </div>
            <div class="value deletePane">
                <div class="tit"><?php echo $this->_var['lang']['Corresponding_zizhi_one']; ?><a class="ftx-05" target="_blank" href="article.php?id=42">《<?php echo $this->_var['lang']['hangye_zizhi_bz']; ?>》</a>。</div>
                <div id="category_permanent">
                    <table id="detailCategoryQuaTable" class="table">
                        <thead>
                            <tr>
                                <th width="250"><?php echo $this->_var['lang']['leimu_name']; ?></th>
                                <th width="150"><?php echo $this->_var['lang']['zizhi_name']; ?></th>
                                <th width="250"><?php echo $this->_var['lang']['Electronic']; ?></th>
                                <th width="260"><?php echo $this->_var['lang']['Due_date']; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_from = $this->_var['permanent_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('pk', 'permanent');if (count($_from)):
    foreach ($_from AS $this->_var['pk'] => $this->_var['permanent']):
?>
                            <tr>
                                <td>
                                    <?php echo $this->_var['permanent']['cat_name']; ?><input type="hidden" value="<?php echo $this->_var['permanent']['cat_id']; ?>" name="permanentCat_id_<?php echo $this->_var['permanent']['cat_id']; ?>[]">
                                </td>
                                <td>
                                    <?php echo $this->_var['permanent']['dt_title']; ?>
                                    <input type="hidden" value="<?php echo $this->_var['permanent']['dt_id']; ?>" name="permanent_title_<?php echo $this->_var['permanent']['cat_id']; ?>[]">
                                </td>
                                <td>
                                    <div class="type-file-box">
                                        <input type="button" name="button" class="type-file-button" id="button" value="" />
                                        <input type="file" name="permanentFile_<?php echo $this->_var['permanent']['cat_id']; ?>[]" class="type-file-file" value="<?php echo $this->_var['permanent']['permanent_file']; ?>" data-state="" hidefocus="true" />
                                        <?php if ($this->_var['permanent']['permanent_file']): ?><a href="<?php echo $this->_var['permanent']['permanent_file']; ?>" class="chakan" target="_blank"><?php echo $this->_var['lang']['view']; ?></a><?php endif; ?>
                                        <input type="text" name="textfile" class="type-file-text" style="width:150px;" value="<?php echo $this->_var['permanent']['permanent_file']; ?>" readonly />
                                    </div>
                                </td>
                                <td>
                                    <?php if ($this->_var['permanent']['permanent_date']): ?>
                                    <div class="cart-checkbox">
                                    <input id="categoryId_date_<?php echo $this->_var['permanent']['dt_id']; ?>" class="text text-2 jdate narrow" type="text" size="17" readonly value="<?php echo $this->_var['permanent']['permanent_date']; ?>" name="categoryId_date_<?php echo $this->_var['permanent']['cat_id']; ?>[]">
                                    <input type="checkbox" id="categoryId_permanent_<?php echo $this->_var['permanent']['dt_id']; ?>" value="1" name="categoryId_permanent_<?php echo $this->_var['permanent']['cat_id']; ?>[]" class="ui-checkbox CheckBoxShop" >
                                    <label for="categoryId_permanent_<?php echo $this->_var['permanent']['dt_id']; ?>" class="ui-label-14"><?php echo $this->_var['lang']['permanent']; ?></label>
                                    </div>
                                    <?php else: ?>
                                    <div class="cart-checkbox">
                                    <input id="categoryId_date_<?php echo $this->_var['permanent']['dt_id']; ?>" class="text text-2 jdate narrow" type="text" size="17" readonly value="" name="categoryId_date_<?php echo $this->_var['permanent']['cat_id']; ?>[]">
                                    <input type="checkbox" id="categoryId_permanent_<?php echo $this->_var['permanent']['dt_id']; ?>" <?php if ($this->_var['permanent']['cate_title_permanent'] == 1): ?>checked<?php endif; ?> value="1" name="categoryId_permanent_<?php echo $this->_var['pk']; ?>" class="ui-checkbox CheckBoxShop">
                                    <label for="categoryId_permanent_<?php echo $this->_var['permanent']['dt_id']; ?>" class="ui-label-14"><?php echo $this->_var['lang']['permanent']; ?></label>
                                    </div>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <script type="text/javascript">
                                var opts_<?php echo $this->_var['permanent']['dt_id']; ?> = {
                                    'targetId':'categoryId_date_<?php echo $this->_var['permanent']['dt_id']; ?>',
                                    'triggerId':['categoryId_date_<?php echo $this->_var['permanent']['dt_id']; ?>'],
                                    'alignId':'categoryId_date_<?php echo $this->_var['permanent']['dt_id']; ?>',
                                    'hms':'off',
                                    'format':'-'
                                }
                                xvDate(opts_<?php echo $this->_var['permanent']['dt_id']; ?>);
                            </script>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
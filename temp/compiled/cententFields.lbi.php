
<?php $_from = $this->_var['title']['cententFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fields');if (count($_from)):
    foreach ($_from AS $this->_var['fields']):
?>
<div class="item">
    <div class="label">
        <em><?php if ($this->_var['fields']['will_choose'] == 1 && $this->_var['choose_process'] == 1): ?>*<?php endif; ?></em>
        <span><?php echo $this->_var['fields']['fieldsFormName']; ?>：</span>
    </div>
    <div class="value">
        <?php if ($this->_var['fields']['chooseForm'] == 'input'): ?>
            <input class="text<?php if ($this->_var['fields']['will_choose'] == 1 && $this->_var['choose_process'] == 1): ?> required<?php if ($this->_var['fields']['textFields'] == 'contactEmail'): ?> email<?php endif; ?><?php if ($this->_var['fields']['textFields'] == 'contactPhone'): ?> isMobile<?php endif; ?><?php endif; ?>" type="text" value="<?php echo $this->_var['fields']['titles_centents']; ?>" size="<?php echo $this->_var['fields']['inputForm']; ?>" name="<?php echo $this->_var['fields']['textFields']; ?>" id="<?php echo $this->_var['fields']['textFields']; ?>">
        <?php elseif ($this->_var['fields']['chooseForm'] == 'other'): ?>
            <?php if ($this->_var['fields']['otherForm'] == 'textArea'): ?>
                <select name="<?php echo $this->_var['fields']['textFields']; ?>[]" class="catselectB" id="selCountries_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 1, 'selProvinces_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['sn']; ?>')" <?php if ($this->_var['fields']['will_choose'] == 1 && $this->_var['choose_process'] == 1): ?>required<?php endif; ?>>
                  <option value=""><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['lang']['country']; ?></option>
                  <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
                  <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['fields']['textAreaForm']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </select>
                <select name="<?php echo $this->_var['fields']['textFields']; ?>[]" class="catselectB" id="selProvinces_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 2, 'selCities_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['sn']; ?>')" <?php if ($this->_var['fields']['will_choose'] == 1 && $this->_var['choose_process'] == 1): ?>required<?php endif; ?>>
                  <option value=""><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['lang']['province']; ?></option>
                  <?php if ($this->_var['fields']['province_list']): ?>
                  <?php $_from = $this->_var['fields']['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province_0_50138800_1590313227');if (count($_from)):
    foreach ($_from AS $this->_var['province_0_50138800_1590313227']):
?>
                  <option value="<?php echo $this->_var['province_0_50138800_1590313227']['region_id']; ?>" <?php if ($this->_var['fields']['textAreaForm']['province'] == $this->_var['province_0_50138800_1590313227']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province_0_50138800_1590313227']['region_name']; ?></option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <?php else: ?>
                  <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province_0_50222900_1590313227');if (count($_from)):
    foreach ($_from AS $this->_var['province_0_50222900_1590313227']):
?>
                  <option value="<?php echo $this->_var['province_0_50222900_1590313227']['region_id']; ?>"><?php echo $this->_var['province_0_50222900_1590313227']['region_name']; ?></option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <?php endif; ?>
                </select>
                <select name="<?php echo $this->_var['fields']['textFields']; ?>[]" class="catselectB" id="selCities_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 3, 'selDistricts_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['sn']; ?>')" <?php if ($this->_var['fields']['will_choose'] == 1 && $this->_var['choose_process'] == 1): ?>required<?php endif; ?>>
                  <option value=""><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['lang']['city']; ?></option>
                  <?php if ($this->_var['fields']['city_list']): ?>
                  <?php $_from = $this->_var['fields']['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
                  <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['fields']['textAreaForm']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <?php else: ?>
                  <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
                  <option value="<?php echo $this->_var['city']['region_id']; ?>"><?php echo $this->_var['city']['region_name']; ?></option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <?php endif; ?>
                </select>
                <select name="<?php echo $this->_var['fields']['textFields']; ?>[]" class="catselectB" id="selDistricts_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['sn']; ?>" <?php if ($this->_var['fields']['textAreaForm']['district'] == 0): ?>style="display:none"<?php endif; ?>>
                  <option value=""><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['lang']['area']; ?></option>
                  <?php if ($this->_var['fields']['district_list']): ?>
                  <?php $_from = $this->_var['fields']['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
                  <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['fields']['textAreaForm']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <?php else: ?>
                  <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
                  <option value="<?php echo $this->_var['district']['region_id']; ?>"><?php echo $this->_var['district']['region_name']; ?></option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <?php endif; ?>
                </select>
            <?php elseif ($this->_var['fields']['otherForm'] == 'dateFile'): ?>
                <div class="type-file-box">
                    <input type="button" name="button" class="type-file-button" id="button" value="" />
                    <input type="file" name="<?php echo $this->_var['fields']['textFields']; ?>" class="type-file-file" value="<?php echo $this->_var['fields']['titles_centents']; ?>" <?php if ($this->_var['fields']['will_choose'] == 1 && $this->_var['choose_process'] == 1 && $this->_var['fields']['titles_centents'] == ''): ?>required<?php endif; ?> data-state="" hidefocus="true" />
                    <?php if ($this->_var['fields']['titles_centents'] != ''): ?><a href="<?php echo $this->_var['fields']['titles_centents']; ?>" class="chakan" target="_blank"><?php echo $this->_var['lang']['view']; ?></a><?php endif; ?>
                    <input type="text" name="textfile" class="type-file-text" value="<?php echo $this->_var['fields']['titles_centents']; ?>" readonly />
                    <input type="hidden" name="text_<?php echo $this->_var['fields']['textFields']; ?>" value="<?php echo $this->_var['fields']['titles_centents']; ?>" />
                </div>
                
                <!--<input name="<?php echo $this->_var['fields']['textFields']; ?>" type="file" <?php if ($this->_var['fields']['will_choose'] == 1 && $this->_var['choose_process'] == 1): ?>required<?php endif; ?> />
                <input name="text_<?php echo $this->_var['fields']['textFields']; ?>" type="hidden" value="<?php echo $this->_var['fields']['titles_centents']; ?>" />
                <?php if ($this->_var['fields']['titles_centents'] != ''): ?><a href="<?php echo $this->_var['fields']['titles_centents']; ?>" class="chakan" target="_blank"><?php echo $this->_var['lang']['view']; ?></a><?php endif; ?>
                <label class="error" id="<?php echo $this->_var['fields']['textFields']; ?>"></label>-->
            <?php elseif ($this->_var['fields']['otherForm'] == 'dateTime'): ?> 
                <?php $_from = $this->_var['fields']['dateTimeForm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('dk', 'date');if (count($_from)):
    foreach ($_from AS $this->_var['dk'] => $this->_var['date']):
?>
                    <?php if ($this->_var['dk'] == 0): ?>  
                    <input id="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>" class="text text-2 jdate narrow" type="text" size="<?php echo $this->_var['date']['dateSize']; ?>" readonly value="<?php echo $this->_var['date']['dateCentent']; ?>" name="<?php echo $this->_var['fields']['textFields']; ?>[]"> 
                    <?php else: ?>
                    <span>—</span>
                    <input id="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>" class="text text-2 jdate narrow" type="text" size="<?php echo $this->_var['date']['dateSize']; ?>" readonly value="<?php echo $this->_var['date']['dateCentent']; ?>" name="<?php echo $this->_var['fields']['textFields']; ?>[]"> 
                    <div class="cart-checkbox fr">
                        <input type="checkbox" class="ui-checkbox CheckBoxShop" onclick="get_shopTime_term(this)" name="shopTime_term" value="1" id="shopTime_term" <?php if ($this->_var['fields']['shopTime_term'] == 1): ?>checked<?php endif; ?>>
                        <label for="shopTime_term"><?php echo $this->_var['lang']['permanent']; ?></label>
                    </div>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endif; ?>
        <?php elseif ($this->_var['fields']['chooseForm'] == 'textarea'): ?>
            <textarea name="<?php echo $this->_var['fields']['textFields']; ?>" cols="<?php echo $this->_var['fields']['cols']; ?>" rows="<?php echo $this->_var['fields']['rows']; ?>" <?php if ($this->_var['fields']['will_choose'] == 1 && $this->_var['choose_process'] == 1): ?>required<?php endif; ?>><?php echo $this->_var['fields']['titles_centents']; ?></textarea>  
        <?php elseif ($this->_var['fields']['chooseForm'] == 'select'): ?>  
            <select name="<?php echo $this->_var['fields']['textFields']; ?>" <?php if ($this->_var['fields']['will_choose'] == 1 && $this->_var['choose_process'] == 1): ?>required<?php endif; ?>>
                <option value="0" selected="selected"><?php echo $this->_var['lang']['please_select']; ?></option>
            <?php $_from = $this->_var['fields']['selectList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'selectList');if (count($_from)):
    foreach ($_from AS $this->_var['selectList']):
?>
                <option value="<?php echo $this->_var['selectList']; ?>" <?php if ($this->_var['fields']['titles_centents'] == $this->_var['selectList']): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['selectList']; ?></option>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </select>    
        <?php elseif ($this->_var['fields']['chooseForm'] == 'radio'): ?>
            <div class="value-checkbox">   
            <?php $_from = $this->_var['fields']['radioCheckboxForm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('rc_k', 'radio');$this->_foreach['sex'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sex']['total'] > 0):
    foreach ($_from AS $this->_var['rc_k'] => $this->_var['radio']):
        $this->_foreach['sex']['iteration']++;
?>
                <div class="value-item <?php if ($this->_var['fields']['titles_centents']): ?><?php if ($this->_var['fields']['titles_centents'] == $this->_var['radio']['radioCheckbox']): ?>selected<?php else: ?><?php if ($this->_var['rc_k'] == 0): ?>checked<?php endif; ?><?php endif; ?><?php else: ?><?php if ($this->_foreach['sex']['iteration'] < 2): ?>selected<?php endif; ?><?php endif; ?>"><input name="<?php echo $this->_var['fields']['textFields']; ?>" class="ui-radio" id="<?php echo $this->_var['fields']['textFields']; ?>-<?php echo ($this->_foreach['sex']['iteration'] - 1); ?>" type="radio" value="<?php echo $this->_var['radio']['radioCheckbox']; ?>" <?php if ($this->_var['fields']['titles_centents'] == $this->_var['radio']['radioCheckbox']): ?>checked="checked"<?php else: ?><?php if ($this->_var['rc_k'] == 0): ?>checked="checked"<?php endif; ?><?php endif; ?> /><label for="<?php echo $this->_var['fields']['textFields']; ?>-<?php echo ($this->_foreach['sex']['iteration'] - 1); ?>" class="ui-radio-label"><?php echo $this->_var['radio']['radioCheckbox']; ?></label></div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        <?php elseif ($this->_var['fields']['chooseForm'] == 'checkbox'): ?> 
            <div class="chekbox-items">  
            <?php $_from = $this->_var['fields']['radioCheckboxForm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('rc_k', 'checkbox');if (count($_from)):
    foreach ($_from AS $this->_var['rc_k'] => $this->_var['checkbox']):
?>
            <div class="chekbox-item fl mr20">
                <input name="<?php echo $this->_var['fields']['textFields']; ?>[]" type="checkbox" value="<?php echo $this->_var['checkbox']['radioCheckbox']; ?>" class="ui-checkbox" id="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['checkbox']['radioCheckbox']; ?>" <?php if ($this->_var['fields']['titles_centents'] == $this->_var['checkbox']['radioCheckbox']): ?>checked="checked"<?php else: ?><?php if ($this->_var['rc_k'] == 0): ?>checked="checked"<?php endif; ?><?php endif; ?> <?php if ($this->_var['fields']['will_choose'] == 1 && $this->_var['choose_process'] == 1): ?>required<?php endif; ?> />
                <label class="ui-label" for="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['checkbox']['radioCheckbox']; ?>"><?php echo $this->_var['checkbox']['radioCheckbox']; ?></label>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        <?php endif; ?>
        <div class="org"><?php echo $this->_var['fields']['formSpecial']; ?></div>
        <div class="verify" id="error_<?php echo $this->_var['fields']['textFields']; ?>"></div>
    </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
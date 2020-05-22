<?php

echo '<form id="js-setting">
                        <div class="install_file install_config">
                        	<div class="item" style="display:none">
                                <div class="title"><h1>';
echo $lang['mobile_check'];
echo '</h1></div>
                                <div class="list">
                                    <div class="item">
                                        <div class="label">';
echo $lang['mobile_num'];
echo '</div>
                                        <div class="value"><input type="text" name="mobile" style="width:200px;" class="text" value="" />&nbsp;&nbsp;<input id="send_mobile_code" class="send_mobile_code" type="button" value="';
echo $lang['send_mobile_code'];
echo '" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="label">';
echo $lang['mobile_check_code'];
echo '</div> 
                                        <div class="value"><input type="text" name="mobile_code"  value="" class="text"/><br/><span class="ts">(';
echo $lang['mobile_code_explain'];
echo ')</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title"><h1>';
echo $lang['db_account'];
echo '</h1></div>
                                <div class="list">
                                    <div class="item">
                                        <div class="label">';
echo $lang['db_host'];
echo '</div>
                                        <div class="value"><input type="text" name="js-db-host" class="text" value="localhost" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="label">';
echo $lang['db_port'];
echo '</div> 
                                        <div class="value"><input type="text" name="js-db-port"  value="3306" class="text"/></div>
                                    </div>
                                    <div class="item">
                                        <div class="label">';
echo $lang['db_user'];
echo '</div> 
                                        <div class="value"><input type="text" name="js-db-user" class="text" value="root" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="label">';
echo $lang['db_pass'];
echo '</div>
                                        <div class="value"><input type="password" name="js-db-pass" class="text" value="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="label">';
echo $lang['db_name'];
echo '</div> 
                                        <div class="value">
                                        	<input type="text" name="js-db-name" id="" class="text" value="" />
                                            <div class="rot"><span>或</span><select id="sqlSelect" name="js-db-list"><option>';
echo $lang['db_list'];
echo '</option></select></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label">';
echo $lang['db_prefix'];
echo '</div> 
                                        <div class="value"><input type="text" name="js-db-prefix" class="text" value="dsc_" /><br/><span class="ts">(';
echo $lang['change_prefix'];
echo ')</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title"><h1>';
echo $lang['admin_account'];
echo '</h1></div>
                                <div class="list">
                                	<div class="item">
                                    	<div class="label">';
echo $lang['admin_name'];
echo '</div> 
                                        <div class="value"><input type="text" name="js-admin-name" class="text" value="" /></div>
                                    </div>
                                    <div class="item">
                                    	<div class="label">';
echo $lang['admin_password'];
echo '</div> 
                                        <div class="value">
                                        <input type="password" name="js-admin-password" class="text" value="" />
                                        <span id="js-admin-password-result"></span>
                                        </div>
                                        <div class="pwd-strength weak" id="Safety_style">
                                        	<span class="pwd-strength-weak">';
echo $lang['pwd_lower'];
echo '</span>
                                            <span class="pwd-strength-middle">';
echo $lang['pwd_middle'];
echo '</span>
                                            <span class="pwd-strength-strong">';
echo $lang['pwd_high'];
echo '</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                    	<div class="label">';
echo $lang['admin_password2'];
echo '</div> 
                                        <div class="value">
                                        <input type="password" name="js-admin-password2" class="text" value="" />
                                        <span id="js-admin-confirmpassword-result"></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                    	<div class="label">';
echo $lang['admin_email'];
echo '</div> 
                                        <div class="value"><input type="text" name="js-admin-email" class="text" value="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item last">
                                <div class="title"><h1>';
echo $lang['mix_options'];
echo '</h1></div>
                                <div class="list">
                                    <div class="item">
                                    	<div class="label">';
echo $lang['select_lang_package'];
echo '</div> 
                                        <div class="value">
                                        	';

if (EC_CHARSET == 'gbk') {
	echo '                                        	<div class="item-item">
                                            	<input type="radio" name="js-system-lang" id="js-system-lang-zh_cn" value="zh_cn" checked=\'true\'/>
                                                <label for="chinese">';
	echo $lang['simplified_chinese'];
	echo '</label>
                                                <label class="yellow" for="yzm">(';
	echo $lang['current_version_lang'];
	echo ')</label>
                                            </div>
                                            ';
}
else if (EC_CHARSET == 'utf-8') {
	echo '                                            <div class="item-item">
                                            	<input type="radio" name="js-system-lang" id="js-system-lang-zh_cn" value="zh_cn"/>
                                                <label for="chinese">';
	echo $lang['simplified_chinese'];
	echo '</label>
                                                <label class="yellow" for="yzm">(';
	echo $lang['current_version_lang'];
	echo ')</label>
                                            </div>
                                            <div class="item-item" style="display:none;">
                                            	<input type="radio" name="js-system-lang" disabled id="js-system-lang-zh_tw" value="zh_tw" />
                                                <label for="tchinese">';
	echo $lang['traditional_chinese'];
	echo '</label>
                                            </div>
                                            <div class="item-item" style="display:none;">
                                            	<input type="radio" name="js-system-lang" disabled id="js-system-lang-en_us" value="en_us" />
                                                <label for="english">';
	echo $lang['americanese'];
	echo '</label>
                                            </div>
                                            ';
}
else if (EC_CHARSET == 'big5') {
	echo '                                            <div class="item-item" style="display:none;">
                                            	<input type="radio" name="js-system-lang" disabled id="js-system-lang-zh_tw" value="zh_tw" checked=\'true\' />
                                                <label for="tchinese">';
	echo $lang['traditional_chinese'];
	echo '</label>
                                            </div>
                                            ';
}

echo '                                        </div>
                                    </div>
                                    ';

if ($show_timezone == 'yes') {
	echo '                                    <div class="item">
                                    	<div class="label">';
	echo $lang['set_timezone'];
	echo '</div> 
                                        <div class="value">
                                        	<select name="js-timezones" class="text">
                                            ';

	foreach ($timezones as $key => $item) {
		echo '                                                        <option value="';
		echo $key;
		echo '" ';

		if ($key == $local_timezone) {
			echo 'selected="true"';
			$found = true;
		}

		echo '>';
		echo $item;
		echo '</option>
                                            ';
	}

	echo '                                            ';

	if (!$found) {
		echo '                                                        <option value="';
		echo $local_timezone;
		echo '" selected="true">';
		echo $local_timezone;
		echo '</option>
                                            ';
	}

	echo '                                               </select>
                                        </div>
                                    </div>
                                    ';
}

echo '                                    <div class="item">
                                    	<div class="label">';
echo $lang['disable_captcha'];
echo '</div> 
                                        <div class="value">
                                        	<div class="check-item">
                                                <input type="checkbox" id="yzm" name="js-disable-captcha" ';
echo $checked . $disabled;
echo ' />
                                                <label class="yellow" for="yzm">(';
echo $lang['captcha_notice'];
echo ')</label>
                                            </div>
                                        </div>
                                    </div>
                                    ';

if (file_exists(ROOT_PATH . 'demo')) {
	echo '                                    <div class="item">
                                    	<div class="label">';
	echo $lang['install_demo'];
	echo '</div> 
                                        <div class="value">
                                        	<div class="check-item">
                                        	<input type="checkbox" name="js-install-demo" id="testData"/>
                                            <label class="yellow" for="testData">(';
	echo $lang['demo_notice'];
	echo ')</label>
                                            </div>
                                        </div>
                                    </div>
                                    ';
}

echo '                                </div>
                            </div>
                        </div>
                        <div class="tfoot">
                            <div class="tfoot_right">
                            <input type="button" id="js-pre-step" class="btn" value="';
echo $lang['prev_step'] . $lang['check_system_environment'];
echo '" />
                            <input id="js-install-at-once" type="submit" class="btn last btn-curr" value="';
echo $lang['install_at_once'];
echo '" />
                            </div>
                            <input name="userinterface" type="hidden" value="';
echo $userinterface;
echo '" />
                            <input name="ucapi" type="hidden" value="';
echo $ucapi;
echo '" />
                            <input name="ucfounderpw" type="hidden" value="';
echo $ucfounderpw;
echo '" />
                        </div>
                        
                    </form>
';

?>

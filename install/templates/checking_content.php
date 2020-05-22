<?php

echo '<script type="text/javascript" src="js/check.js"></script>
<form method="post">
<div class="install_file">
                    	<div class="item">
                        	<div class="title"><h1>';
echo $lang['system_environment'];
echo '</h1></div>
                            <div class="list">
                            	<ul>
                                ';

foreach ($system_info as $info_item) {
	echo '                                	<li>
                                    	<div class="list-left">';
	echo $info_item[0];
	echo '</div>
                                        <div class="list-right">';
	echo $info_item[1];
	echo '</div>
                                    </li>
                                ';
}

echo '                                </ul>
                            </div>
                        </div>
                        <div class="item">
                        	<div class="title"><h1>';
echo $lang['dir_priv_checking'];
echo '</h1></div>
                            <div class="list">
                            	<ul>
                                ';

foreach ($dir_checking as $checking_item) {
	echo '                                    <li>
                                    	<div class="list-left">';
	echo $checking_item[0];
	echo '</div>
                                        <div class="list-right green">
                                            ';

	if ($checking_item[1] == $lang['can_write']) {
		echo '                                               ';
		echo $checking_item[1];
		echo '                                            ';
	}
	else {
		echo '                                               ';
		echo $checking_item[1];
		echo '                                            ';
	}

	echo '                                        </div>
                                    </li>
                                ';
}

echo '                                </ul>
                            </div>
                        </div>
                        <div class="item ';

if (empty($rename_priv)) {
	echo ' last ';
}

echo '">
                        	<div class="title"><h1>';
echo $lang['template_writable_checking'];
echo '</h1></div>
                            <div class="list">
                            ';

if ($has_unwritable_tpl == 'yes') {
	echo '              					';

	foreach ($template_checking as $checking_item) {
		echo '                            		<p style="color:red;">';
		echo $checking_item;
		echo '</p>
                                ';
	}

	echo '              				';
}
else {
	echo '                             		<p class="green">';
	echo $template_checking;
	echo '</p>
          					';
}

echo '                            </div>
                        </div>
                         ';

if (!empty($rename_priv)) {
	echo '                        <div class="item last">
                        	<div class="title"><h1>';
	echo $lang['rename_priv_checking'];
	echo '</h1></div>
                            <div class="list">
                           		';

	foreach ($rename_priv as $checking_item) {
		echo '                            		<p style="color:red;">';
		echo $checking_item;
		echo '</p>
                             	';
	}

	echo '                            </div>
                        </div>
                         ';
}

echo '                    </div>
                    <div class="tfoot">
                    	<div class="tfoot_left">
                        	<input type="button" class="btn aga" id="js-recheck" value="';
echo $lang['recheck'];
echo '"  />
                        </div>
                        <div class="tfoot_right">
                        	<input type="button" class="btn" id="js-pre-step" value="';
echo $lang['prev_step'];
echo $lang['welcome_page'];
echo '"  />
                            <input type="submit" class="btn last btn-curr" id="js-submit" value="';
echo $lang['next_step'] . $lang['config_system'];
echo '" ';
echo $disabled;
echo ' />
                        </div>
                        <input name="userinterface" id="userinterface" type="hidden" value="';
echo $userinterface;
echo '" />
                        <input name="ucapi" type="hidden" value="';
echo $ucapi;
echo '" />
                        <input name="ucfounderpw" type="hidden" value="';
echo $ucfounderpw;
echo '" />
                    </div>
</form>';

?>

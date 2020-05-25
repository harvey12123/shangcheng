<?php

function instheader()
{
	global $charset;
	global $tools_version;
	echo '<html><head>' . ('<meta http-equiv="Content-Type" content="text/html; charset=' . $charset . '">') . ('<title>UCenter 浼氬憳鏁版嵁瀵煎叆宸ュ叿' . $tools_version . '</title>') . "<style type=\"text/css\">\r\n        a {\r\n            color: #3A4273;\r\n            text-decoration: none\r\n        }\r\n\r\n        a:hover {\r\n            color: #3A4273;\r\n            text-decoration: underline\r\n        }\r\n\r\n        body, table, td {\r\n            color: #3A4273;\r\n            font-family: Tahoma, Verdana, Arial;\r\n            font-size: 12px;\r\n            line-height: 20px;\r\n            scrollbar-base-color: #E3E3EA;\r\n            scrollbar-arrow-color: #5C5C8D\r\n        }\r\n        form {\r\n            margin:0;\r\n            padding:0\r\n        }\r\n        input {\r\n            color: #085878;\r\n            font-family: Tahoma, Verdana, Arial;\r\n            font-size: 12px;\r\n            background-color: #3A4273;\r\n            color: #FFFFFF;\r\n            scrollbar-base-color: #E3E3EA;\r\n            scrollbar-arrow-color: #5C5C8D\r\n        }\r\n\r\n        .install {\r\n            font-family: Arial, Verdana;\r\n            font-size: 20px;\r\n            font-weight: bold;\r\n            color: #000000\r\n        }\r\n\r\n        .message {\r\n            background: #E3E3EA;\r\n            padding: 20px;\r\n        }\r\n\r\n        .altbg1 {\r\n            background: #E3E3EA;\r\n        }\r\n\r\n        .altbg2 {\r\n            background: #EEEEF6;\r\n        }\r\n\r\n        .header td {\r\n            color: #FFFFFF;\r\n            background-color: #3A4273;\r\n            text-align: center;\r\n        }\r\n\r\n        .option td {\r\n            text-align: center;\r\n        }\r\n\r\n        .redfont {\r\n            color: #FF0000;\r\n        }\r\n        .p_indent{\r\n            text-indent:2em;\r\n        }\r\n        div.msg{\r\n            text-indent:2em;\r\n            line-height:30px;\r\n            height:30px;\r\n        }\r\n        </style>\r\n        <script type=\"text/javascript\">\r\n        function redirect(url) {\r\n            window.location=url;\r\n        }\r\n        function \$(id) {\r\n            return document.getElementById(id);\r\n        }\r\n        </script>\r\n        </head>" . '<body bgcolor="#298296" text="#000000"><div id="append_parent"></div>' . '<table width="95%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"><tr><td>' . '<table width="98%" border="0" cellspacing="0" cellpadding="0" align="center"><tr>' . ('<td class="install" height="30" valign="bottom"><font color="#FF0000">&gt;&gt;</font> UCenter 浼氬憳鏁版嵁瀵煎叆宸ュ叿' . $tools_version) . '</td></tr><tr><td><hr noshade align="center" width="100%" size="1"></td></tr><tr><td colspan="2">';
}

function instfooter()
{
	echo '</td></tr><tr><td><hr noshade align="center" width="100%" size="1"></td></tr>' . '<tr><td align="center">' . '<b style="font-size: 11px">Powered by <a href="http://demo.jabrielcloud.com" target="_blank"><span style="color:#FF6100">wlshop</span>' . '</a></b>&nbsp; &copy; 2015-2020 涓婃捣鍟嗘淳缃戠粶绉戞妧鏈夐檺鍏?徃銆侟br /><br />' . '</td></tr></table></td></tr></table>' . '</body></html>';
}

function showmessage($message, $url_forward = '', $msgtype = 'message', $extra = '', $delaymsec = 1000)
{
	if ($msgtype == 'form') {
		$message = '<form method="post" action="' . $url_forward . '" name="hidden_form">' . ('<br><p class="p_indent">' . $message . "</p>\n " . $extra . '</form><br>') . "<script type=\"text/javascript\">\r\n            setTimeout(\"document.forms['hidden_form'].submit()\", " . $delaymsec . ");\r\n        </script>";
	}
	else {
		if ($url_forward) {
			$message .= '<script>setTimeout("redirect(\'' . $url_forward . '\');", ' . $delaymsec . ');</script>';
			$message .= '<br><div align="right">[<a href="' . $script_name . '" style="color:red">鍋滄?杩愯?</a>]<br><br><a href="' . $url_forward . '">濡傛灉鎮ㄧ殑娴忚?鍣ㄩ暱鏃堕棿娌℃湁鑷?姩璺宠浆锛岃?鐐瑰嚮杩欓噷锛?/a></div>';
		}
		else {
			$message .= '<br /><br /><br />';
		}

		$message = '<br>' . $message . $extra . '<br><br>';
	}

	echo $message;
	instfooter();
	exit();
}

function get_mysql_charset()
{
	global $db;
	global $prefix;
	$tmp_charset = '';
	$query = $db->query('SHOW CREATE TABLE `' . $prefix . 'users`', 'SILENT');

	if ($query) {
		$tablestruct = $db->fetch_array($query, MYSQL_NUM);
		preg_match('/CHARSET=(\\w+)/', $tablestruct[1], $m);

		if (!empty($m)) {
			if (strpos($m[1], 'utf') === 0) {
				$tmp_charset = str_replace('utf', 'utf-', $m[1]);
			}
			else {
				$tmp_charset = $m[1];
			}
		}
	}

	return $tmp_charset;
}

function getgpc($k, $var = 'G')
{
	switch ($var) {
	case 'G':
		$var = &$_GET;
		break;

	case 'P':
		$var = &$_POST;
		break;

	case 'C':
		$var = &$_COOKIE;
		break;

	case 'R':
		$var = &$_REQUEST;
		break;
	}

	return isset($var[$k]) ? $var[$k] : NULL;
}

$charset = 'utf-8';
$tools_version = 'v1.0';
$mysql_version = '';
$wlshop_version = '';
$mysql_charset = '';
$wlshop_charset = '';
$convert_charset = array('utf-8' => 'gbk', 'gbk' => 'utf-8');
$convert_tables_file = 'data/convert_tables.php';
$rpp = 500;
define('ROOT_PATH', str_replace('\\', '/', substr(__FILE__, 0, -20)));
define('IN_ECS', true);
require ROOT_PATH . 'data/config.php';
require ROOT_PATH . 'includes/cls_wlshop.php';
require ROOT_PATH . 'includes/cls_mysql.php';
require ROOT_PATH . 'includes/lib_common.php';

if (defined('EC_CHARSET')) {
	$ec_charset = EC_CHARSET;
}
else {
	$ec_charset = '';
}

$wlshop_version = str_replace('v', '', VERSION);
$wlshop_charset = $ec_charset;
$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name, '', 0, 1);
$mysql_version = $db->version;
$mysql_charset = get_mysql_charset();
$step = getgpc('step');
$step = empty($step) ? 1 : $step;

if ($wlshop_version < '2.6.0') {
	$step = 'halt';
}

if (!defined('UC_DBUSER') && !defined('UC_DBPW') && !defined('UC_DBNAME')) {
	$uc_config = $db->getOne('SELECT value FROM ' . $prefix . 'shop_config WHERE code=\'integrate_config\'');
	$uc_config = unserialize($uc_config);
	if (!empty($uc_config['db_user']) && !empty($uc_config['db_pass']) && !empty($uc_config['db_name'])) {
		define('UC_CONNECT', $uc_config['uc_connect']);
		define('UC_DBHOST', $uc_config['db_host']);
		define('UC_DBUSER', $uc_config['db_user']);
		define('UC_DBPW', $uc_config['db_pass']);
		define('UC_DBNAME', $uc_config['db_name']);
		define('UC_DBCHARSET', $uc_config['db_charset']);
		define('UC_DBTABLEPRE', '`' . $uc_config['db_name'] . '`.' . $uc_config['db_pre']);
		define('UC_DBCONNECT', '0');
		define('UC_KEY', $uc_config['uc_key']);
		define('UC_API', $uc_config['uc_url']);
		define('UC_CHARSET', $uc_config['uc_charset']);
		define('UC_IP', $uc_config['uc_ip']);
		define('UC_APPID', $uc_config['uc_id']);
		define('UC_PPP', '20');
	}
	else {
		$step = 'halt';
	}
}

ob_start();
instheader();

if ($step == 1) {
	$ext_msg = '<a href="?step=start"><font size="3" color="red"><b>&gt;&gt;&nbsp;濡傛灉鎮ㄥ凡纭??涓婇潰鐨勪娇鐢ㄨ?鏄?璇风偣杩欓噷杩涜?瀵煎叆</b></font></a><br /><br /><a href="index.php"><font size="2"><b>&gt;&gt;&nbsp;濡傛灉鎮ㄩ渶瑕佹墽琛屽崌绾х▼搴忥紝璇风偣杩欓噷杩涜?鍗囩骇</b></font></a>';
	echo "<h4>鏈?浆鎹㈢▼搴忓彧鑳介拡wlshop2.6.0鎴栬€呬互涓婄増鏈?▼搴忕殑鏁版嵁瀵煎叆<br /></h4>\r\n瀵煎叆涔嬪墠<b>鍔″繀澶囦唤鏁版嵁搴撹祫鏂橖/b>锛岄伩鍏嶅?鍏ュけ璐ョ粰鎮ㄥ甫鏉ユ崯澶变笌涓嶄究<br /><br />\r\n\r\n<p>瀵煎叆绋嬪簭浣跨敤璇存槑锛欬/p>\r\n<ol>\r\n    <li>鍙?敮鎸佷粠UCenter鏁版嵁搴撳埌wlshop鏁版嵁搴撶殑瀵煎叆</li>\r\n    <li>鍙??鍏ヤ細鍛樼殑鐢ㄦ埛鍚嶃€侀偖绠便€佸瘑鐮侊紝杩欎簺鍩烘湰淇℃伅銆備笉浼氱牬鍧忓師鏈変細鍛樻暟鎹?/li>\r\n</ol>\r\n\r\n<p>鎮ㄥ綋鍓嶇▼搴忎笌鏁版嵁搴撶殑淇℃伅锛欬/p>\r\n<ul>\r\n    <li>绋嬪簭鐗堟湰锛?wlshop_version</li>\r\n    <li>绋嬪簭缂栫爜锛?wlshop_charset</li>\r\n    <li>MySQL鐗堟湰锛?mysql_version</li>\r\n    <li>MySQL缂栫爜锛?mysql_charset</li>\r\n</ul>\r\n" . $ext_msg;
	instfooter();
}
else if ($step == 'halt') {
	echo "    <p><h4>鍑洪敊浜嗭紒</h4></p>\r\n    <p>\r\n        <ol>\r\n            <li>鎮ㄥ綋鍓嶇殑绋嬪簭鐗堟湰灏忎簬2.6.0锛汓/li>\r\n            <li>鎮ㄧ殑閰嶇疆鏂囦欢涓庢暟鎹?〃涓?己灏慤Center鐨勯厤缃?俊鎭?€侟/li>\r\n        </ol>\r\n    </p>\r\n    <p><h4>璇峰厛鍗囩骇鎮ㄧ殑绋嬪簭鍐嶈繘琛屽?鍏ャ€侟/h4></p>";
	instfooter();
}
else if ($step == 'start') {
	$limit = getgpc('limit', 'P');
	$update = getgpc('update', 'P');
	$insert = getgpc('insert', 'P');
	$success = getgpc('success', 'P');
	$error = getgpc('error', 'P');
	$item_num = 500;
	$statistics = array('update' => 0, 'insert' => 0, 'success' => 0, 'error' => 0);

	if (empty($limit)) {
		$limit = 0;
	}

	$uc_db = new cls_mysql(UC_DBHOST, UC_DBUSER, UC_DBPW, UC_DBNAME, UC_DBCHARSET, 0, 1);
	$total_members = $uc_db->getOne('SELECT COUNT(*) FROM ' . UC_DBTABLEPRE . 'members');
	$sql = 'SELECT uid, username, password, email, salt FROM ' . UC_DBTABLEPRE . ('members ORDER BY uid ASC LIMIT ' . $limit . ', ' . $item_num);
	$uc_query = $uc_db->query($sql);

	while ($member = $uc_db->fetch_array($uc_query)) {
		$user_exists = $db->getOne('SELECT COUNT(*) FROM ' . $prefix . 'users WHERE `user_name`=\'' . $member['username'] . '\'');

		if (!$user_exists) {
			$sql = 'INSERT INTO ' . $prefix . 'users (`email`, `user_name`, `password`, `salt`) VALUES(\'' . $member['email'] . '\', \'' . $member['username'] . '\', \'' . $member['password'] . '\', \'2' . $member['salt'] . '\')';
			++$statistics['insert'];
		}
		else {
			$sql = 'UPDATE ' . $prefix . 'users SET `password`=\'' . $member['password'] . '\', `salt`=\'2' . $member['salt'] . '\' WHERE `user_name`=\'' . $member['username'] . '\'';
			++$statistics['update'];
		}

		$db->query($sql);

		if (0 < $db->affected_rows()) {
			++$statistics['success'];
		}
		else {
			++$statistics['error'];
		}
	}

	if ($total_members < $limit + $item_num) {
		$update += $statistics['update'];
		$insert += $statistics['insert'];
		$success += $statistics['success'];
		$error += $statistics['error'];
		$message = '<p>鍏辨湁 <strong>' . $total_members . '</strong> 涓?細鍛樻暟鎹?/p><p>瀵煎叆瀹屾垚锛?/p><p><ul><li>鏇存柊鐨勭敤鎴锋暟鎹?細' . $update . ' 鏉狘/li><li>鏂板?鐨勭敤鎴锋暟鎹?細' . $insert . ' 鏉狘/li><li>鎴愬姛鐨勭敤鎴锋暟鎹?細' . $success . ' 鏉狘/li><li>鍑洪敊鐨勭敤鎴锋暟鎹?細' . $error . ' 鏉狘/li></ul></p><p><a href="index.php"><b>&gt;&gt;&nbsp;濡傛灉鎮ㄩ渶瑕佹墽琛屽崌绾х▼搴忥紝璇风偣杩欓噷杩涜?鍗囩骇</b></a></p>';
		showmessage($message);
	}
	else {
		$update += $statistics['update'];
		$insert += $statistics['insert'];
		$success += $statistics['success'];
		$error += $statistics['error'];
		$total_item = $limit + $item_num;
		$extra = '<input type="hidden" name="update" value="' . $update . '" /><input type="hidden" name="insert" value="' . $insert . '" /><input type="hidden" name="success" value="' . $success . '" /><input type="hidden" name="error" value="' . $error . '" /><input type="hidden" name="limit" value="' . $total_item . '" />';
		$message = '<p>鍏辨湁 <strong>' . $total_members . '</strong> 涓?細鍛樻暟鎹?/p><p>褰撳墠鍦ㄥ?鍏 ' . $limit . ' - ' . $total_item . ' 鐨勪細鍛樻暟鎹?/p><p><ul><li>鏇存柊鐨勭敤鎴锋暟鎹?細' . $update . ' 鏉狘/li><li>鏂板?鐨勭敤鎴锋暟鎹?細' . $insert . ' 鏉狘/li><li>鎴愬姛鐨勭敤鎴锋暟鎹?細' . $success . ' 鏉狘/li><li>鍑洪敊鐨勭敤鎴锋暟鎹?細' . $error . ' 鏉狘/li></ul></p>';
		showmessage($message, '?step=start', 'form', $extra);
	}
}

ob_end_flush();

?>

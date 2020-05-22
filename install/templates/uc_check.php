<?php

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>';
echo $lang['setup_title'];
echo '</title>
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/transport.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/uccheck.js"></script>
<script type="text/javascript" src="js/draggable.js"></script>
<script type="text/javascript">
var $_LANG = {};
';

foreach ($lang['js_languages'] as $key => $item) {
	echo '$_LANG["';
	echo $key;
	echo '"] = "';
	echo $item;
	echo '";
';
}

echo '</script>
</head>
<body id="checking">
';
include ROOT_PATH . 'install/templates/header.php';
echo '<form id="js-setup" method="post">
<table border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;">
<tr>
<td valign="top">
<div id="wrapper" style="padding-bottom:50px;height:250px;">
  <h3 style="margin-bottom:50px;">';
echo $lang['ucenter'];
echo '</h3>
  
<table width="550" class="list">
<tr>
    <td align="right">请选择用户接口方式：</td>
    <td><input type="radio" id="user_interface_1" name="user_interface" value="ecshop" checked="checked" /><label for="user_interface_1">ECShop方式</label>
    <input type="radio" id="user_interface_2" name="user_interface" value="ucenter" /><label for="user_interface_2">UCenter方式</label></td>
</tr>
<tr>
    <td colspan="2"><hr /></td>
</tr>
<tbody id="ucenter" style="display:none">
<tr>
    <td colspan="2">';
echo $lang['uc_intro'];
echo '</td>
</tr>
<tr>
    <td width="200" align="right">';
echo $lang['ucapi'];
echo '：</td>
    <td align="left"><input name="js-ucapi" type="text" id="js-ucapi"  value="';
echo $ucapi;
echo '" size="40" />  <span id="ucapinotice" style="color:#FF0000"></span></td>
</tr>
<tr id="ucip"></tr>
<tr>

            <td width="200" align="right">';
echo $lang['ucfounderpw'];
echo '</td>
            <td align="left"><input name="js-ucfounderpw" type="password" id="js-ucfounderpw"  value="';
echo $ucfounderpw;
echo '" size="40" /> <span id="ucfounderpwnotice" style="color:#FF0000"></span></td>
</tr>
</tbody>
<tr><td>&nbsp;</td><td></td></tr>
</table>

  
  </div></td>
<td width="227" valign="top" background="images/install-step3-';
echo $installer_lang;
echo '.gif">&nbsp;</td>
</tr>
<tr>
  <td><div id="install-btn"><input type="button" class="button" id="js-pre-step" class="button" value="';
echo $lang['prev_step'];
echo $lang['welcome_page'];
echo '"  /> <input id="js-submit" type="button" class="button" value="';
echo $lang['check_ucenter'];
echo '" /></div>
  </td><td></td>
</tr>
</table>
<div id="js-monitor" style="display:none;text-align:left;position:absolute;top:45%;left:35%;width:300px;z-index:1000;border:1px solid #000;">
    <h3 id="js-monitor-title">';
echo $lang['monitor_title'];
echo '</h3>
    <div style="background:#fff;padding-bottom:20px;">
        <img id="js-monitor-loading" src=\'images/loading.gif\' /><br /><br />
        <strong id="js-monitor-wait-please" style=\'color:blue;width:65%;float:left;margin-left:3px;\'></strong>
        <span id="js-monitor-view-detail" style="color:gray;cursor:pointer;;float:right;margin-right:3px;"></span>
    </div>
    <iframe id="js-monitor-notice" src="templates/notice.htm" style="display:none;"></iframe>
    <img id="js-monitor-close" src=\'./images/close.gif\' style="position:absolute;top:10px;right:10px;cursor:pointer;" />
</div>
<div id="copyright">
    <div id="copyright-inside">

      ';
include ROOT_PATH . 'install/templates/copyright.php';
echo '</div>
</div>
</form>

</body>
</html>';

?>

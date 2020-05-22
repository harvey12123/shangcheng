<?php

echo '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>';
echo $lang['install_error_title'];
echo '</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/install.css" rel="stylesheet" type="text/css" />
</head>

<body>
';
include ROOT_PATH . 'install/templates/header.php';
echo '    <div class="wrapper">
    	<div class="w1000">
        	<div class="install_end">
            	<div class="end_left"><img src="./images/fail.png" /></div>
                <div class="end_right">
                        <h1>';

if ($exists == 1) {
	echo $lang['install_done_title'];
}
else {
	echo $lang['install_error_title'];
}

echo '</h1>
                    <span></span>
                    <p>';
echo $err_msg;
echo '</p>
                </div>
            </div>
        </div>
        <div class="footer">
            ';
include ROOT_PATH . 'install/templates/copyright.php';
echo '        </div>
    </div>
</body>
</html>';

?>

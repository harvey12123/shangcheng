<?php

echo '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>';
echo $lang['install_done_title'];
echo '</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/install.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/transport.js"></script>
</head>

<body>
';
include ROOT_PATH . 'install/templates/header.php';
echo '    <div class="wrapper">
    	<div class="w1000" id="content">
        	
        </div>
        <div class="footer">
            ';
include ROOT_PATH . 'install/templates/copyright.php';
echo '        </div>
    </div>
<script type="text/javascript">
Ajax.call(\'cloud.php?step=done\',\'\', welcome_api, \'GET\', \'TEXT\',\'FLASE\');
function welcome_api(result)
{
  if(result)
  {
    setInnerHTML(\'content\',result);
  }
}
</script>

</body>
</html>';

?>

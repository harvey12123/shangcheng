<?php


define('IN_ECS', true);

require(dirname(__FILE__) . '/../includes/init.php');
require(ROOT_PATH . 'includes/lib_payment.php');
require(ROOT_PATH . 'includes/lib_order.php');


$pay_code = 'wxpay';

$payment  = get_payment($pay_code);


$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

if(!empty($postStr)){
    $postData = (array)simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
    $postData['AppKey'] = $payment['wxpay_paysignkey'];
    foreach($postData as $k=>$v){
        $_GET[$k] = $v;
    }

    $plugin_file = ROOT_PATH . 'includes/modules/payment/' . $pay_code . '.php';

    if (file_exists($plugin_file)) {

        include_once($plugin_file);
        require(ROOT_PATH . 'includes/lib_clips.php');
        require(ROOT_PATH . 'includes/lib_transaction.php');

		$order_id = $GLOBALS['db']->getOne('SELECT order_id FROM '.$GLOBALS['ecs']->table('order_info').' WHERE order_sn = '.$_GET['ProductId']);
        $order = get_order_detail($order_id);


        ksort($_GET);
        reset($_GET);

        $string = '';
        foreach($_GET as $k=>$v){
            if(null != $v && 'null' != $v && 'AppSignature' != $k && 'SignMethod' != $k){
                $string .= strtolower($k) .'='. $v .'&';
            }
        }
        $string = substr($string, 0, -1);

        $sign = $_GET['AppSignature'];

        $content = SHA1($string);

        $wxpayObj = new $pay_code();

        if($sign == $content){

            echo $wxpayObj->getpackage($order, $payment, 0, "ok");
        }
        else{
             echo $wxpayObj->getpackage($order, $payment, 1, "签名验证失败");
             exit; 
        }
        exit;
    } 
    else {
        echo $wxpayObj->getpackage($order, $payment, 1, "插件文件不存在");
        exit;
    }
}
else{
    echo 'fail';
    exit;
}

function logResult($word='') {
    $fp = fopen("log.txt","a");
    flock($fp, LOCK_EX) ;
    fwrite($fp,"执行日期：".strftime("%Y%m%d%H%M%S",time())."\n".$word."\n");
    flock($fp, LOCK_UN);
    fclose($fp);
}
?>
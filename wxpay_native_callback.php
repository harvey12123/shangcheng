<?php

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require(ROOT_PATH . 'includes/lib_payment.php');


$pay_code = 'wxpay';

$payment  = get_payment($pay_code);


$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
if(!empty($postStr)){
    $postdata = json_decode(json_encode(simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
    $plugin_file = ROOT_PATH . 'includes/modules/payment/' . $pay_code . '.php';

    if (file_exists($plugin_file)) {

        include_once($plugin_file);


        $wxsign = $postdata['sign'];
        unset($postdata['sign']);

        foreach ($postdata as $k => $v)
        {
            $Parameters[$k] = $v;
        }

        ksort($Parameters);

        $buff = "";
        foreach ($Parameters as $k => $v)
        {
            $buff .= $k . "=" . $v . "&";
        }
        $String;
        if (strlen($buff) > 0) 
        {
            $String = substr($buff, 0, strlen($buff)-1);
        }

        $String = $String."&key=".$payment['wxpay_key'];

        $String = md5($String);

        $sign = strtoupper($String);

        if ($wxsign == $sign) {

           if($postdata['result_code'] == 'SUCCESS'){

                $out_trade_no = explode('O', $postdata['out_trade_no']);
                $order_sn = $out_trade_no[0];
                $log_id = $out_trade_no[1];
				

                order_paid($log_id, 2, '', $order_sn);


                $sql = "update ".$GLOBALS['ecs']->table('pay_log')." set openid = '".$postdata['openid']."', transid = '".$postdata['transaction_id']."' where log_id = '" .$log_id. "'";
                $GLOBALS['db']->query($sql);
           }
           $returndata['return_code'] = 'SUCCESS';
        }
        else{
            $returndata['return_code'] = 'FAIL';
            $returndata['return_msg'] = '签名失败';
        }
        
    } 
    else {
        $returndata['return_code'] = 'FAIL';
        $returndata['return_msg'] = '插件不存在';
    }
}else{
    $returndata['return_code'] = 'FAIL';
    $returndata['return_msg'] = '无数据返回';
}

$xml = "<xml>";
foreach ($returndata as $key=>$val)
{
     if (is_numeric($val))
     {
        $xml.="<".$key.">".$val."</".$key.">"; 

     }
     else
        $xml.="<".$key."><![CDATA[".$val."]]></".$key.">";  
}
$xml.="</xml>";

echo $xml;
exit;
?>
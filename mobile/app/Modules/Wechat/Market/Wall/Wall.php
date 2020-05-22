<?php

namespace App\Modules\Wechat\Market\Wall;

use App\Extensions\Wechat;
use Endroid\QrCode\QrCode;
use App\Modules\Wechat\Controllers\PluginController;


class Wall extends PluginController
{
    private $weObj = '';
    private $wechat_id = 0;
    private $market_id = 0;
    private $marketing_type = 'wall';

    protected $config = [];

    
    public function __construct($config = [])
    {
        parent::__construct();

        $this->plugin_name = $this->marketing_type = strtolower(basename(__FILE__, '.php'));
        $this->config = $config;
        $this->wechat_ru_id = isset($this->config['wechat_ru_id']) ? $this->config['wechat_ru_id'] : 0;
        $this->config['plugin_path'] = 'Market';

        
        $this->wechat_id = dao('wechat')->where(['status' => 1, 'ru_id' => $this->wechat_ru_id])->getField('id');

        $this->market_id = I('wall_id', 0, 'intval');
        if (empty($this->market_id)) {
            $this->redirect('index/index/index');
        }

        $this->plugin_themes = __ROOT__ . '/public/assets/wechat/' . $this->marketing_type;
        $this->assign('plugin_themes', $this->plugin_themes);
    }

    
    public function actionWallMsg()
    {
        
        $wall = dao('wechat_marketing')->field('id, name, logo, background, starttime, endtime, config, description, support')->where(['id' => $this->market_id, 'marketing_type' => 'wall', 'wechat_id' => $this->wechat_id])->find();

        $wall['status'] = get_status($wall['starttime'], $wall['endtime']); 

        $wall['logo'] = get_wechat_image_path($wall['logo']);
        $wall['background'] = get_wechat_image_path($wall['background']);

        if ($wall['status'] == 1) {
            
            $sql = "SELECT u.nickname, u.headimg, m.content, m.addtime, u.wechatname FROM {pre}wechat_wall_msg m LEFT JOIN {pre}wechat_wall_user u ON m.user_id = u.id WHERE m.status = 1 and u.wall_id = " . $this->market_id . " AND u.wechat_id = " . $this->wechat_id . " ORDER BY m.addtime DESC LIMIT 0, 10";
            $list = $this->model->query($sql);
            if ($list) {
                usort($list, function ($a, $b) {
                    if ($a['addtime'] == $b['addtime']) {
                        return 0;
                    }
                    return $a['addtime'] > $b['addtime'] ? 1 : -1;
                });
                foreach ($list as $k => $v) {
                    $list[$k]['addtime'] = local_date('Y-m-d H:i:s', $v['addtime']);
                }
            }

            $sql = "SELECT count(*) as num FROM {pre}wechat_wall_msg m LEFT JOIN {pre}wechat_wall_user u ON m.user_id = u.id WHERE m.status = 1 AND u.wall_id = " . $this->market_id . "  AND u.wechat_id = " . $this->wechat_id . " ORDER BY m.addtime DESC";
            $num = $this->model->query($sql);
            $this->assign('msg_count', $num[0]['num']);
        }

        $this->assign('wall', $wall);
        $this->assign('list', $list);
        $this->show_display('wallmsg', $this->config);
    }

    
    public function actionWallUser()
    {
        if (IS_AJAX) {
            $result['error'] = 0;
            $result['errMsg'] = '';

            $wall_id = I('get.wall_id');
            if (empty($wall_id)) {
                $result['error'] = 1;
                exit(json_encode($result));
            }

            $url = __HOST__ . url('wechat/index/market_show', ['type' => 'wall', 'function' => 'wall_user_wechat', 'wall_id' => $wall_id, 'wechat_ru_id' => $this->wechat_ru_id]);

            
            $path = dirname(ROOT_PATH) .'/data/attached/wall/';
            $water_logo = ROOT_PATH . 'public/img/shop_app_icon.png';
            
            $qrcode = $path . 'wall_qrcode_' . $wall_id. '.png';

            if (!is_dir($path)) {
                @mkdir($path);
            }

            if (!file_exists($qrcode)) {
                $qrCode = new QrCode($url);

                $qrCode->setSize(357);
                $qrCode->setMargin(15);
                $qrCode->setLogoPath($water_logo); 
                $qrCode->setLogoWidth(60);
                $qrCode->writeFile($qrcode); 
            }

            $image_name = 'data/attached/wall/' . basename($qrcode);
            $outImg = __STATIC__ . '/'.$image_name;

            $result['qr_code'] = $outImg;
            exit(json_encode($result));
        }
        
        $wall = dao('wechat_marketing')->field('id, name, logo, background, starttime, endtime, config, description, support,status')->where(['id' => $this->market_id, 'marketing_type' => 'wall', 'wechat_id' => $this->wechat_id])->find();

        $wall['status'] = get_status($wall['starttime'], $wall['endtime']); 

        $wall['logo'] = get_wechat_image_path($wall['logo']);
        $wall['background'] = get_wechat_image_path($wall['background']);

        
        $list = dao('wechat_wall_user')->field('nickname, headimg, wechatname, headimgurl')->where(['wall_id' => $this->market_id, 'status' => 1, 'wechat_id' => $this->wechat_id])->order('addtime desc')->select();
        

        
        $total = dao('wechat_wall_user')->where(['status' => 1, 'wechat_id' => $this->wechat_id])->count();
        $this->assign('total', $total);

        $this->assign('wall', $wall);
        $this->assign('list', $list);
        $this->show_display('walluser', $this->config);
    }

    
    public function actionWallPrize()
    {
        
        $wall = dao('wechat_marketing')->field('id, name, logo, background, starttime, endtime, config, description, support')->where(['id' => $this->market_id, 'marketing_type' => 'wall', 'wechat_id' => $this->wechat_id])->find();
        if ($wall) {
            $wall['config'] = unserialize($wall['config']);
            $wall['logo'] = get_wechat_image_path($wall['logo']);
            $wall['background'] = get_wechat_image_path($wall['background']);
        }
        
        $sql = "SELECT u.nickname, u.headimg, u.id, u.wechatname, u.headimgurl FROM {pre}wechat_prize p LEFT JOIN {pre}wechat_wall_user u ON u.openid = p.openid WHERE u.wall_id = " . $this->market_id . " AND u.status = 1 AND p.wechat_id = ". $this->wechat_id ." AND u.openid in (SELECT openid FROM {pre}wechat_prize WHERE market_id = " . $this->market_id . " AND wechat_id = " . $this->wechat_id . " AND activity_type = 'wall') GROUP BY u.id ORDER BY p.dateline ASC";
        $rs = $this->model->query($sql);
        $list = [];
        if ($rs) {
            foreach ($rs as $k => $v) {
                $list[$k + 1] = $v;
            }
        }
        $prize_user = count($rs);
        
        $total = dao('wechat_wall_user')->where(['status' => 1, 'wechat_id' => $this->wechat_id])->count();
        $total = $total - $prize_user;

        $this->assign('total', $total);
        
        $this->assign('wall', $wall);
        $this->show_display('wallprize', $this->config);
    }

    
    public function actionNoPrize()
    {
        if (IS_AJAX) {
            $result['errCode'] = 0;
            $result['errMsg'] = '';

            $wall_id = I('get.wall_id');
            if (empty($wall_id)) {
                $result['errCode'] = 1;
                exit(json_encode($result));
            }
            $wall = dao('wechat_marketing')->field('id, name, starttime, endtime, config')->where(['id' => $wall_id, 'marketing_type' => 'wall', 'wechat_id' => $this->wechat_id])->find();
            if (empty($wall)) {
                $result['errCode'] = 2;
                $result['errMsg'] = '活动不存在';
                exit(json_encode($result));
            }
            $wall['status'] = get_status($wall['starttime'], $wall['endtime']); 
            if ($wall['status'] != 1) {
                $result['errCode'] = 2;
                $result['errMsg'] = '活动尚未开始或者已结束';
                exit(json_encode($result));
            }
            
            $sql = "SELECT nickname, headimg, id, wechatname, headimgurl FROM {pre}wechat_wall_user WHERE wall_id = " . $wall_id . " AND status = 1 AND openid not in (SELECT openid FROM {pre}wechat_prize WHERE market_id = " . $wall_id . " AND wechat_id = " . $this->wechat_id . " AND activity_type = 'wall') ORDER BY addtime DESC";
            $no_prize = $this->model->query($sql);
            if (empty($no_prize)) {
                $result['errCode'] = 2;
                $result['errMsg'] = '暂无参与抽奖用户';
                exit(json_encode($result));
            }

            $result['data'] = $no_prize;
            exit(json_encode($result));
        }
    }

    
    public function actionStartDraw()
    {
        if (IS_AJAX) {
            $result['errCode'] = 0;
            $result['errMsg'] = '';

            $wall_id = I('get.wall_id');
            if (empty($wall_id)) {
                $result['errCode'] = 1;
                exit(json_encode($result));
            }
            $wall = dao('wechat_marketing')->field('id, name, starttime, endtime, config')->where(['id' => $wall_id, 'marketing_type' => 'wall', 'wechat_id' => $this->wechat_id])->find();
            if (empty($wall)) {
                $result['errCode'] = 2;
                $result['errMsg'] = '活动不存在';
                exit(json_encode($result));
            }
            $wall['status'] = get_status($wall['starttime'], $wall['endtime']); 
            if ($wall['status'] != 1) {
                $result['errCode'] = 2;
                $result['errMsg'] = '活动尚未开始或者已结束';
                exit(json_encode($result));
            }

            $sql = "SELECT u.nickname, u.headimg, u.openid, u.id, u.wechatname, u.headimgurl FROM {pre}wechat_wall_user u LEFT JOIN {pre}wechat_prize p ON u.openid = p.openid WHERE u.wall_id = '$wall_id' AND u.status = 1 AND u.wechat_id = '$this->wechat_id' AND u.openid not in (SELECT openid FROM {pre}wechat_prize WHERE market_id = '$wall_id' AND wechat_id = '$this->wechat_id' AND activity_type = 'wall') GROUP by u.openid ORDER BY u.addtime DESC";
            $list = $this->model->query($sql);
            if ($list) {
                
                $key = mt_rand(0, count($list) - 1);
                $rs = isset($list[$key]) ? $list[$key] : $list[0];

                
                if ($rs) {
                    $data['wechat_id'] = $this->wechat_id;
                    $data['openid'] = $rs['openid'];
                    $data['issue_status'] = 0;
                    $data['dateline'] = gmtime();
                    $data['prize_type'] = 1;
                    $data['prize_name'] = '微信墙活动中奖';
                    $data['activity_type'] = 'wall';
                    $data['market_id'] = $wall_id;
                    dao('wechat_prize')->data($data)->add();
                }

                $result['data'] = $rs;
                exit(json_encode($result));
            }
        }
        $result['errCode'] = 2;
        $result['errMsg'] = '暂无数据';
        exit(json_encode($result));
    }

    
    public function actionResetDraw()
    {
        if (IS_AJAX) {
            $result['errCode'] = 0;
            $result['errMsg'] = '';

            $wall_id = I('get.wall_id');
            if (empty($wall_id)) {
                $result['errCode'] = 1;
                exit(json_encode($result));
            }
            $wall = dao('wechat_marketing')->field('id, name, starttime, endtime, config')->where(['id' => $wall_id, 'marketing_type' => 'wall', 'wechat_id' => $this->wechat_id])->find();
            if (empty($wall)) {
                $result['errCode'] = 2;
                $result['errMsg'] = '活动不存在';
                exit(json_encode($result));
            }
            $wall['status'] = get_status($wall['starttime'], $wall['endtime']); 
            if ($wall['status'] != 1) {
                $result['errCode'] = 2;
                $result['errMsg'] = '活动尚未开始或者已结束';
                exit(json_encode($result));
            }
            
            
            
            

            
            
            $sql = "SELECT count(*) as num FROM {pre}wechat_prize p LEFT JOIN {pre}wechat_wall_user u ON u.openid = p.openid WHERE u.wall_id = " . $this->market_id . " AND u.status = 1 AND p.wechat_id = ". $this->wechat_id ." AND u.openid in (SELECT openid FROM {pre}wechat_prize WHERE market_id = " . $this->market_id . " AND wechat_id = " . $this->wechat_id . " AND activity_type = 'wall') GROUP BY u.id ORDER BY p.dateline ASC";
            $num = $this->model->query($sql);
            $total = dao('wechat_wall_user')->where(['status' => 1, 'wechat_id' => $this->wechat_id])->count();
            $rs['total_num'] = $total - $num[0]['num'];
            $result['data'] = $rs;
            exit(json_encode($result));
        }
        $result['errCode'] = 2;
        $result['errMsg'] = '无效的请求';
        exit(json_encode($result));
    }

    
    public function actionWallUserWechat()
    {
        if (!empty($_SESSION['openid'])) {
            if (IS_POST) {
                $wall_id = I('post.wall_id', '', 'intval');

                if (empty($wall_id)) {
                    show_message("请选择对应的活动");
                }
                $data['nickname'] = I('post.nickname', '', ['htmlspecialchars','trim']);
                if (empty($data['nickname'])) {
                    show_message("请输入姓名");
                }
                $nickname = dao('wechat_wall_user')->where(['nickname' => $data['nickname'], 'wall_id' => $wall_id, 'wechat_id' => $this->wechat_id])->getField('nickname');
                if (!empty($nickname)) {
                    show_message("该姓名已被使用，请重新填写");
                }

                $data['sign_number'] = I('post.sign_number');
                if (empty($data['sign_number'])) {
                    show_message("请输入号码");
                }
                $sign_number = dao('wechat_wall_user')->where(['sign_number' => $data['sign_number'], 'wall_id' => $wall_id, 'wechat_id' => $this->wechat_id])->getField('sign_number');
                if (!empty($sign_number)) {
                    show_message("该号码已被使用，请重新填写");
                }

                $data['headimg'] = I('post.headimg');
                $data['sex'] = I('post.sex');
                $data['openid'] = $_SESSION['openid'];
                $data['wechatname'] = isset($_SESSION['nickname']) ? $_SESSION['nickname'] : '';
                $data['headimgurl'] = isset($_SESSION['headimgurl']) ? $_SESSION['headimgurl'] : '';

                $data['wall_id'] = $wall_id;
                $data['wechat_id'] = $this->wechat_id;
                $data['addtime'] = gmtime();

                $wechat_user = dao('wechat_wall_user')->where(['wall_id' => $wall_id, 'openid' => $_SESSION['openid'], 'wechat_id' => $this->wechat_id])->find();
                if (empty($wechat_user)) {
                    dao('wechat_wall_user')->data($data)->add();
                }
                
                show_message('确认成功', '进入聊天室', url('wechat/index/market_show', ['type' => 'wall', 'function' => 'wall_msg_wechat', 'wall_id' => $wall_id, 'wechat_ru_id' => $this->wechat_ru_id]), 'success');
                exit;
            }
            
            $wall_id = $this->market_id;
            
            
            $wechat_user = dao('wechat_wall_user')->where(['wall_id' => $wall_id, 'openid' => $_SESSION['openid'], 'wechat_id' => $this->wechat_id])->find();

            if (empty($wechat_user)) {
                $wechat_user = [
                    'headimgurl' => $_SESSION['headimgurl'],
                    'nickname' => $_SESSION['nickname'],
                    'sex' => $_SESSION['sex'],
                ];
            } else {
                
                $this->redirect('wechat/index/market_show', ['type' => 'wall', 'function' => 'wall_msg_wechat', 'wall_id' => $wall_id, 'wechat_ru_id' => $this->wechat_ru_id]);
            }

            $this->assign('user', $wechat_user);
            $this->assign('wall_id', $wall_id);
            $this->show_display('walluserwechat', $this->config);
        }
    }

    
    public function actionWallMsgWechat()
    {
        if (!empty($_SESSION['openid'])) {
            if (IS_POST && IS_AJAX) {
                $wall_id = I('wall_id');
                if (empty($wall_id)) {
                    exit(json_encode(['code' => 1, 'errMsg' => '请选择对应的活动']));
                }
                $data['user_id'] = I('post.user_id');
                $data['content'] = I('post.content', '', 'trim,htmlspecialchars');
                if (empty($data['user_id']) || empty($data['content'])) {
                    exit(json_encode(['code' => 1, 'errMsg' => '请先登录或者发表的内容不能为空']));
                }
                if (strlen($data['content']) > 100) {
                    exit(json_encode(['code' => 1, 'errMsg' => '内容长度不能超过100个字符']));
                }
                $data['addtime'] = gmtime();
                $data['wall_id'] = $wall_id;
                $data['wechat_id'] = $this->wechat_id;

                dao('wechat_wall_msg')->data($data)->add();
                
                exit(json_encode(['code' => 0, 'errMsg' => '发送成功！']));
            }

            $wall_id = I('wall_id');
            if (empty($wall_id)) {
                $this->redirect('index/index/index');
            }
            
            $openid = $_SESSION['openid'];
            $wechat_user = dao('wechat_wall_user')->field('id, status')->where(['openid' => $openid, 'wall_id' => $wall_id, 'wechat_id' => $this->wechat_id])->find();

            
            $user_num = dao('wechat_wall_msg')->field("COUNT(DISTINCT user_id) as num")->where(['wall_id' => $wall_id, 'wechat_id' => $this->wechat_id])->find();

            $sql = "SELECT m.content, m.addtime, u.nickname, u.headimg, u.id FROM {pre}wechat_wall_msg m LEFT JOIN {pre}wechat_wall_user u ON m.user_id = u.id WHERE (m.status = 1 OR u.openid = '".$openid."') AND u.wall_id = " . $wall_id . " AND u.wechat_id = " . $this->wechat_id . " ORDER BY m.addtime DESC LIMIT 0, 10";
            $data = $this->model->query($sql);

            if ($data) {
                usort($data, function ($a, $b) {
                    if ($a['addtime'] == $b['addtime']) {
                        return 0;
                    }
                    return $a['addtime'] > $b['addtime'] ? 1 : -1;
                });
                foreach ($data as $k => $v) {
                    $data[$k]['addtime'] = local_date('Y-m-d', gmtime()) == local_date('Y-m-d', $v['addtime']) ? local_date('H:i:s', $v['addtime']) : local_date('Y-m-d H:i:s', $v['addtime']);
                }
            }
            $list = $data;

            
            $sql = "SELECT count(*) as num FROM {pre}wechat_wall_msg m LEFT JOIN {pre}wechat_wall_user u ON m.user_id = u.id WHERE (m.status = 1 OR u.openid = '".$openid."') AND u.wall_id = " . $wall_id . " AND u.wechat_id = " . $this->wechat_id . " ORDER BY m.addtime DESC";
            $num = $this->model->query($sql);

            $this->assign('list', $list);
            $this->assign('msg_count', $num[0]['num']);
            $this->assign('user_num', $user_num['num']);
            $this->assign('user', $wechat_user);
            $this->assign('wall_id', $wall_id);
            $this->show_display('wallmsgwechat', $this->config);
        }
    }

    
    public function actionGetWallMsg()
    {
        if (IS_AJAX && IS_GET) {
            $start = I('get.start', 0, 'intval');
            $num = I('get.num', 5, 'intval');
            $wall_id = I('get.wall_id');
            $req = I('get.req', 0, 'intval');
            if ((!empty($start) || $start == 0) && $num) {
                $cache_key = md5('cache_' . $start . $req);
                
                if (isset($_SESSION) && !empty($_SESSION['openid'])) {
                    $cache_key = md5('cache_wechat_' . $start . $req);
                }
                $list = S($cache_key);
                if ($list === false) {
                    $sql = "SELECT m.content, m.addtime, u.nickname, u.headimg, u.id, m.status FROM {pre}wechat_wall_msg m LEFT JOIN {pre}wechat_wall_user u ON m.user_id = u.id WHERE m.status = 1 AND u.wall_id = " . $wall_id . " AND u.wechat_id = " . $this->wechat_id . " ORDER BY m.addtime ASC LIMIT " . $start . ", " . $num;
                    if (isset($_SESSION) && !empty($_SESSION['openid'])) {
                        $openid = $_SESSION['openid'];
                        $sql = "SELECT m.content, m.addtime, u.nickname, u.headimg, u.id, m.status FROM {pre}wechat_wall_msg m LEFT JOIN {pre}wechat_wall_user u ON m.user_id = u.id WHERE (m.status = 1 OR u.openid = '".$openid."') AND u.wall_id = " . $wall_id . " AND u.wechat_id = " . $this->wechat_id . " ORDER BY m.addtime ASC LIMIT " . $start . ", " . $num;
                    }
                    $data = $this->model->query($sql);
                    foreach ($data as $k => $v) {
                        $data[$k]['addtime'] = local_date('Y-m-d', gmtime()) == local_date('Y-m-d', $v['addtime']) ? local_date('H:i:s', $v['addtime']) : local_date('Y-m-d H:i:s', $v['addtime']);
                    }
                    S($cache_key, $data, 10);
                    $list = $data;
                }

                
                $user_num = dao('wechat_wall_msg')->field("COUNT(DISTINCT user_id) as num")->where(['wall_id' => $wall_id, 'wechat_id' => $this->wechat_id])->find();
                $result = ['code' => 0, 'user_num' => $user_num['num'], 'data' => $list];
                exit(json_encode($result));
            }
        } else {
            $result = ['code' => 1, 'errMsg' => '请求不合法'];
            exit(json_encode($result));
        }
    }

    
    public function actionWallPrizeNew()
    {
        
        $wall = dao('wechat_marketing')->field('id, name, logo, background, starttime, endtime, config, description, support')->where(['id' => $this->market_id, 'marketing_type' => 'wall', 'wechat_id' => $this->wechat_id])->find();
        if ($wall) {
            $wall['config'] = unserialize($wall['config']);
            $wall['logo'] = get_wechat_image_path($wall['logo']);
            $wall['background'] = get_wechat_image_path($wall['background']);
        }
        $this->assign('wall', $wall);

        
        $user_list = dao('wechat_wall_user')->where(['status' => 1, 'wechat_id' => $this->wechat_id])->group('openid')->order('addtime DESC')->select();
        foreach ($user_list as $key => $value) {
            $user_list[$key]['is_prized'] = $this->get_is_prize($value['openid']);
            $user_list[$key]['headimgurl'] = !empty($value['headimgurl']) ? $value['headimgurl'] : $value['headimg'];
        }
        $this->assign('user_list', $user_list);
        $this->show_display('wallprizenew', $this->config);
    }

    
    public function actionGetPrizeUser()
    {
        if (IS_AJAX) {
            $result['errCode'] = 0;
            $result['errMsg'] = '';

            $user_id = input('user_id', 0, 'intval');
            if (empty($user_id)) {
                $result['errCode'] = 1;
                exit(json_encode($result));
            }
            $user = dao('wechat_wall_user')->where(['id' => $user_id, 'wall_id' => $this->market_id, 'status' => 1, 'wechat_id' => $this->wechat_id])->find();
            if (empty($user)) {
                $result['errCode'] = 2;
                $result['errMsg'] = '用户不存在或未审核';
                exit(json_encode($result));
            }
            
            $sql = "SELECT u.* FROM {pre}wechat_wall_user u LEFT JOIN {pre}wechat_prize p ON u.openid = p.openid WHERE u.wall_id = '$this->market_id' AND u.status = 1 AND u.id = '".$user_id."' AND u.wechat_id = '$this->wechat_id' AND u.openid not in (SELECT openid FROM {pre}wechat_prize WHERE market_id = '$this->market_id' AND wechat_id = '$this->wechat_id' AND activity_type = 'wall') GROUP by u.openid ORDER BY u.addtime DESC";
            $list = $this->model->query($sql);
            if ($list) {
                $user = $list[0];
                
                $data['wechat_id'] = $this->wechat_id;
                $data['openid'] = $user['openid'];
                $data['issue_status'] = 0;
                $data['dateline'] = gmtime();
                $data['prize_type'] = 1;
                $data['prize_name'] = '微信墙活动中奖';
                $data['activity_type'] = 'wall';
                $data['market_id'] = $this->market_id;
                dao('wechat_prize')->data($data)->add();

                $result['data'] = $user;
                exit(json_encode($result));
            }
            $result['errCode'] = 2;
            $result['errMsg'] = '暂无数据';
            exit(json_encode($result));
        }
    }

    
    public function actionGetOneUser()
    {
        if (IS_AJAX) {
            $result['errCode'] = 0;
            $result['errMsg'] = '';

            $user_id = input('user_id', 0, 'intval');
            if (empty($user_id)) {
                $result['errCode'] = 1;
                exit(json_encode($result));
            }
            $user = dao('wechat_wall_user')->where(['id' => $user_id, 'wall_id' => $this->market_id, 'status' => 1, 'wechat_id' => $this->wechat_id])->find();
            if (empty($user)) {
                $result['errCode'] = 2;
                $result['errMsg'] = '用户不存在或未审核';
                exit(json_encode($result));
            }

            $result['data'] = $user;
            exit(json_encode($result));
        }
    }

    
    public function get_is_prize($openid = '')
    {
        $result = dao('wechat_prize')->where(['openid' => $openid, 'wechat_id' => $this->wechat_id, 'market_id' => $this->market_id])->find();
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }



    
    public function returnData($fromusername, $info)
    {
    }

    
    public function updatePoint($fromusername, $info)
    {
    }

    
    public function html_show()
    {
    }

    
    public function executeAction()
    {
    }
}

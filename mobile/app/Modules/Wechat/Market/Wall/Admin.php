<?php

namespace App\Modules\Wechat\Market\Wall;

use App\Extensions\Form;
use Endroid\QrCode\QrCode;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Modules\Wechat\Controllers\PluginController;


class Admin extends PluginController
{
    protected $marketing_type = ''; 
    protected $wechat_id = 0; 
    protected $page_num = 10; 

    
    protected $cfg = [];

    public function __construct($cfg = [])
    {
        parent::__construct();

        $this->cfg = $cfg;
        $this->cfg['plugin_path'] = 'Market';
        $this->plugin_name = $this->marketing_type = $cfg['keywords'];
        $this->wechat_id = $cfg['wechat_id'];
        $this->wechat_ru_id = isset($cfg['wechat_ru_id']) ? $cfg['wechat_ru_id'] : 0;
        $this->page_num = isset($cfg['page_num']) ? $cfg['page_num'] : 10;

        $this->assign('wechat_ru_id', $this->wechat_ru_id);
    }

    
    public function marketList()
    {
        $filter['type'] = $this->marketing_type;
        $offset = $this->pageLimit(url('market_list', $filter), $this->page_num);

        $total = dao('wechat_marketing')->where(['marketing_type' => $this->marketing_type, 'wechat_id' => $this->wechat_id])->count();

        $list = dao('wechat_marketing')->field('id, name, command, starttime, endtime, status')->where(['marketing_type' => $this->marketing_type, 'wechat_id' => $this->wechat_id])->order('id DESC')->limit($offset)->select();
        if ($list[0]['id']) {
            foreach ($list as $k => $v) {
                $list[$k]['starttime'] = local_date('Y-m-d', $v['starttime']);
                $list[$k]['endtime'] = local_date('Y-m-d', $v['endtime']);
                $res = $this->get_user_msg_count($v['id']);
                $list[$k]['user_count'] = $res['user_count'];  
                $list[$k]['msg_count'] = $res['msg_count'];  
                $status = get_status($v['starttime'], $v['endtime']); 
                if ($status == 0) {
                    $list[$k]['status'] = L('no_start');
                } elseif ($status == 1) {
                    $list[$k]['status'] = L('start');
                } elseif ($status == 2) {
                    $list[$k]['status'] = L('over');
                }
            }
        } else {
            $list = [];
        }

        $this->assign('page', $this->pageShow($total));
        $this->assign('list', $list);
        $this->plugin_display('market_list', $this->cfg);
    }

    
    public function marketEdit()
    {
        
        if (IS_POST) {
            $json_result = ['error' => 0, 'msg' => '', 'url' => '']; 

            $id = I('post.id', 0, 'intval');
            $handler = I('post.handler', '', ['htmlspecialchars','trim']);
            $data = I('post.data', '', ['htmlspecialchars','trim']);
            $config = I('post.config', '', ['htmlspecialchars','trim']);

            $form = new Form();
            if (!$form->isEmpty($data['name'], 1)) {
                
                $json_result = ['error' => 1, 'msg' => L('market_name') . L('empty'), 'url' => ''];
                exit(json_encode($json_result));
            }
            $data['wechat_id'] = $this->wechat_id;
            $data['marketing_type'] = I('post.marketing_type');
            $data['starttime'] = local_strtotime($data['starttime']);
            $data['endtime'] = local_strtotime($data['endtime']);

            $data['status'] = get_status($data['starttime'], $data['endtime']); 

            $logo_path = I('post.logo_path');
            $background_path = I('post.background_path');
            
            $logo_path = !empty($logo_path) ? $logo_path : __PUBLIC__ . '/assets/wechat/wall/images/logo.png';
            $background_path = !empty($background_path) ? $background_path : __PUBLIC__ . '/assets/wechat/wall/images/bg.png';

            
            $logo_path = edit_upload_image($logo_path);
            $background_path = edit_upload_image($background_path);

            
            if ($_FILES['logo']['name'] || $_FILES['background']['name']) {
                
                $type = ['image/jpeg','image/png'];
                if (($_FILES['logo']['type'] && !in_array($_FILES['logo']['type'], $type)) || ($_FILES['background']['type'] && !in_array($_FILES['background']['type'], $type))) {
                    
                    $json_result = ['error' => 1, 'msg' => L('not_file_type'), 'url' => ''];
                    exit(json_encode($json_result));
                }
                $result = $this->upload('data/attached/wall', false, 5);
                if ($result['error'] > 0) {
                    
                    $json_result = ['error' => 1, 'msg' => $result['message'], 'url' => ''];
                    exit(json_encode($json_result));
                }
            }
            
            if ($_FILES['logo']['name'] && $result['url']['logo']['url']) {
                $data['logo'] = $result['url']['logo']['url'];
            } else {
                $data['logo'] = $logo_path;
            }
            
            if ($_FILES['background']['name'] && $result['url']['background']['url']) {
                $data['background'] = $result['url']['background']['url'];
            } else {
                $data['background'] =  $background_path;
            }

            if (!$form->isEmpty($data['logo'], 1)) {
                
                $json_result = ['error' => 1, 'msg' => L('please_upload'), 'url' => ''];
                exit(json_encode($json_result));
            }
            if (!$form->isEmpty($data['background'], 1)) {
                
                $json_result = ['error' => 1, 'msg' => L('please_upload'), 'url' => ''];
                exit(json_encode($json_result));
            }
            
            if ($config) {
                
                if (is_array($config['prize_level']) && is_array($config['prize_count']) && is_array($config['prize_name'])) {
                    foreach ($config['prize_level'] as $key => $val) {
                        $prize_arr[] = [
                            'prize_level' => $val,
                            'prize_name' => $config['prize_name'][$key],
                            'prize_count' => $config['prize_count'][$key],
                        ];
                    }
                }
                $data['config'] = serialize($prize_arr);
            }
            
            if (strpos($data['logo'], 'no_image') !== false || strpos($data['logo'], 'logo.png') !== false) {
                unset($data['logo']);
            }
            if (strpos($data['background'], 'no_image') !== false || strpos($data['background'], 'bg.png') !== false) {
                unset($data['background']);
            }

            
            if ($id && $handler == 'edit') {
                
                if ($data['logo'] && $logo_path != $data['logo']) {
                    $logo_path = strpos($logo_path, 'no_image') == false ? $logo_path : ''; 
                    $this->remove($logo_path);
                }
                
                if ($data['background'] && $background_path != $data['background']) {
                    $background_path = strpos($background_path, 'no_image') == false ? $background_path : '';  
                    $this->remove($background_path);
                }
                $where = ['id' => $id, 'wechat_id' => $this->wechat_id];
                dao('wechat_marketing')->data($data)->where($where)->save();
                
                $json_result = ['error' => 0, 'msg' => L('market_edit') . L('success'), 'url' => url('market_list', ['type' => $data['marketing_type']])];
                exit(json_encode($json_result));
            } else {
                
                $data['addtime'] = gmtime();
                $id = dao('wechat_marketing')->data($data)->add();
                
                $json_result = ['error' => 0, 'msg' => L('market_add') . L('success'), 'url' => url('market_list', ['type' => $data['marketing_type']])];
                exit(json_encode($json_result));
            }
        }

        
        $nowtime = gmtime();
        $info = [];
        if (!empty($this->cfg['market_id'])) {
            $market_id = $this->cfg['market_id'];
            $info = dao('wechat_marketing')->field('id, name, command, logo, background, starttime, endtime, config, description, support')->where(['id' => $market_id, 'marketing_type' => $this->marketing_type, 'wechat_id' => $this->wechat_id])->find();
            if ($info) {
                $info['starttime'] = isset($info['starttime']) ? local_date('Y-m-d H:i:s', $info['starttime']) : local_date('Y-m-d H:i:s', $nowtime);
                $info['endtime'] = isset($info['endtime']) ? local_date('Y-m-d H:i:s', $info['endtime']) : local_date('Y-m-d H:i:s', local_strtotime("+1 months", $nowtime));
                $info['prize_arr'] = unserialize($info['config']);
                $info['logo'] = get_wechat_image_path($info['logo']);
                $info['background'] = get_wechat_image_path($info['background']);
            } else {
                $this->message('数据不存在', url('market_list', ['type' => $this->marketing_type]), 2, $this->wechat_ru_id);
            }
        } else {
            
            $info['starttime'] = local_date('Y-m-d H:i:s', $nowtime);
            $info['endtime'] = local_date('Y-m-d H:i:s', local_strtotime("+1 months", $nowtime));

            
            $last_id = dao('wechat_marketing')->where(['wechat_id' => $this->wechat_id])->order('id desc')->getField('id');
            $market_id = !empty($last_id) ? $last_id + 1 : 1;
        }

        
        $info['url'] = __HOST__ . url('wechat/index/market_show', ['type' => 'wall', 'function' => 'wall_user_wechat', 'wall_id' => $market_id, 'wechat_ru_id' => $this->wechat_ru_id]);

        $this->assign('info', $info);
        $this->plugin_display('market_edit', $this->cfg);
    }

    
    public function marketMessages()
    {
        $market_id = $this->cfg['market_id'];

        $this->cfg['status'] = $status = I('get.status', '', ['htmlspecialchars','trim']);

        $function = I('get.function', '', ['htmlspecialchars','trim']);

        $where = "";
        if (empty($status)) {
            $where = " AND m.status = 0";
        }

        $sql = "SELECT COUNT(*) as num FROM {pre}wechat_wall_msg m LEFT JOIN {pre}wechat_wall_user u ON m.user_id = u.id LEFT JOIN {pre}wechat_marketing mk ON m.wall_id = mk.id WHERE m.wall_id = ".$market_id . $where;
        $num  = $this->model->query($sql);
        
        $filter['type'] = $this->marketing_type;
        $filter['function'] = $function;
        $filter['id'] = $market_id;
        $filter['status'] = $status;
        $offset = $this->pageLimit(url('data_list', $filter), $this->page_num);
        $total = $num[0]['num'];
        
        $this->assign('page', $this->pageShow($total));

        $sql = "SELECT m.id, m.user_id, m.content, m.addtime, m.checktime, m.status, u.nickname FROM {pre}wechat_wall_msg m LEFT JOIN {pre}wechat_wall_user u ON m.user_id = u.id LEFT JOIN {pre}wechat_marketing mk ON m.wall_id = mk.id WHERE m.wall_id = " .$market_id . $where . " ORDER BY m.addtime DESC LIMIT $offset";

        $list =  $this->model->query($sql);
        if ($list) {
            foreach ($list as $k=>$v) {
                if ($v['status'] == 1) {
                    $list[$k]['status'] = L('is_checked');
                    $list[$k]['handler'] = '';
                } else {
                    $list[$k]['status'] = L('no_check');
                    $list[$k]['handler'] = '<a class="button btn-info bg-green check" data-href="'.url('market_action', ['type' => $this->marketing_type, 'function' => 'messages', 'handler' => 'check','market_id' => $market_id, 'msg_id' => $v['id'], 'user_id' => $v['user_id'], 'status' => $status]).'" href="javascript:;" >' . L('check') . '</a>';
                }
                $list[$k]['addtime'] = $v['addtime'] ? local_date('Y-m-d H:i:s', $v['addtime']) : '';
                $list[$k]['checktime'] = $v['checktime'] ? local_date('Y-m-d H:i:s', $v['checktime']) : '';
            }
        }
        $this->assign('list', $list);
        $this->plugin_display('market_messages', $this->cfg);
    }

    
    public function marketUsers()
    {
        $market_id = $this->cfg['market_id'];

        $user_id = I('get.user_id', 0, 'intval');
        $function = I('get.function', '', ['htmlspecialchars','trim']);

        $list = [];
        
        if (empty($user_id)) {
            $orderby = I('get.orderby', '', ['htmlspecialchars','trim']);
            $sort = I('get.sort', 'DESC', ['htmlspecialchars','trim']);
            $orderby = !empty($orderby) ? $orderby : 'addtime';
            $sort = !empty($sort) ? $sort : 'DESC';
            
            $filter['type'] = $this->marketing_type;
            $filter['function'] = $function;
            $filter['id'] = $market_id;
            $filter['orderby'] = $orderby;
            $filter['sort'] = $sort;
            $offset = $this->pageLimit(url('data_list', $filter), $this->page_num);
            $total = dao('wechat_wall_user')->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id])->count();
            
            $this->assign('page', $this->pageShow($total));

            
            $sql = "SELECT id, nickname, sex, headimg, status, addtime, checktime, wechatname, sign_number FROM {pre}wechat_wall_user WHERE wall_id = '" . $market_id . "' AND wechat_id = '" .$this->wechat_id. "'  ORDER BY " . $orderby ." ". $sort . " limit $offset";
            $list = $this->model->query($sql);
            if ($list[0]['id']) {
                foreach ($list as $k => $v) {
                    if ($v['sex'] == 1) {
                        $list[$k]['sex'] = '男';
                    } elseif ($v['sex'] == 2) {
                        $list[$k]['sex'] = '女';
                    } else {
                        $list[$k]['sex'] = '保密';
                    }
                    if ($v['status'] == 1) {
                        $list[$k]['status'] = L('is_checked');
                        $list[$k]['handler'] = '';
                    } else {
                        $list[$k]['status'] = L('no_check'); 
                        $list[$k]['handler'] = '<a class="button btn-info bg-green check" data-href="'.url('market_action', ['type' => $this->marketing_type, 'function' => 'users', 'handler' => 'check', 'market_id' => $market_id, 'user_id' => $v['id']]).'" href="javascript:;" >' . L('check') . '</a>';
                    }
                    $list[$k]['nocheck'] = dao('wechat_wall_msg')->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id, 'status' => 0, 'user_id' => $v['id']])->count();
                    $list[$k]['addtime'] = $v['addtime'] ? local_date('Y-m-d H:i:s', $v['addtime']) : '';
                    $list[$k]['checktime'] = $v['checktime'] ? local_date('Y-m-d H:i:s', $v['checktime']) : '';
                }
            }
            $this->assign('list', $list);
            $this->plugin_display('market_users', $this->cfg);
        } else {
            
            
            $filter['type'] = $this->marketing_type;
            $filter['function'] = $function;
            $filter['wall_id'] = $market_id;
            $filter['user_id'] = $user_id;
            $offset = $this->pageLimit(url('data_list', $filter), $this->page_num);
            $total = dao('wechat_wall_msg')->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id, 'user_id' => $user_id])->count();
            
            $this->assign('page', $this->pageShow($total));

            $list = dao('wechat_wall_msg')->field('id, content, addtime, checktime, status')->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id, 'user_id' => $user_id])->order('addtime DESC')->limit($offset)->select();
            if ($list) {
                foreach ($list as $k => $v) {
                    if ($v['status'] == 1) {
                        $list[$k]['status'] = L('is_checked');
                        $list[$k]['handler'] = '';
                    } else {
                        $list[$k]['status'] = L('no_check'); 
                        $list[$k]['handler'] = '<a class="button btn-info bg-green check" data-href="'.url('market_action', ['type' => $this->marketing_type, 'function' => 'users', 'handler' => 'check','market_id' => $market_id, 'msg_id'=> $v['id'], 'user_id' => $user_id]).'" href="javascript:;" >' .L('check'). '</a>';
                    }
                    $list[$k]['addtime'] = $v['addtime'] ? local_date('Y-m-d H:i:s', $v['addtime']) : '';
                    $list[$k]['checktime'] = $v['checktime'] ? local_date('Y-m-d H:i:s', $v['checktime']) : '';
                }
            }
            $this->cfg['user_id'] = $user_id;

            $this->assign('list', $list);
            $this->plugin_display('market_users_msg', $this->cfg);
        }
    }

    
    public function marketPrizes()
    {
        $market_id = I('get.id', 0, 'intval');
        $function = I('get.function', '', ['htmlspecialchars','trim']);

        
        $filter['type'] = $this->marketing_type;
        $filter['function'] = $function;
        $filter['id'] = $market_id;

        $offset = $this->pageLimit(url('data_list', $filter), $this->page_num);

        $sql_count = 'SELECT count(*) as number FROM {pre}wechat_prize p LEFT JOIN {pre}wechat_user u ON p.openid = u.openid WHERE p.activity_type = "' . $this->marketing_type . '" and p.prize_type = 1 AND p.market_id = ' .$market_id. ' and u.subscribe = 1 and u.wechat_id = ' . $this->wechat_id . ' ORDER BY dateline desc ';
        $total = $this->model->query($sql_count);
        
        $this->assign('page', $this->pageShow($total[0]['number']));

        $sql = 'SELECT p.id, p.prize_name, p.issue_status, p.winner, p.dateline, p.openid, u.nickname FROM {pre}wechat_prize p LEFT JOIN {pre}wechat_user u ON p.openid = u.openid WHERE p.activity_type = "' . $this->marketing_type . '" and u.wechat_id = ' . $this->wechat_id . ' and p.prize_type = 1 AND p.market_id = ' .$market_id. ' and u.subscribe = 1 ORDER BY dateline desc  limit ' . $offset;
        $list = $this->model->query($sql);
        if (!empty($list)) {
            foreach ($list as $key => $val) {
                $list[$key]['winner'] = unserialize($val['winner']);
                $list[$key]['dateline'] = local_date(C('shop.time_format'), $val['dateline']);
                if ($val['issue_status'] == 1) {
                    $list[$key]['issue_status'] = L('is_sended');
                    $list[$key]['handler'] = '<a href="javascript:;"  data-href="'.url('market_action', ['type' => $this->marketing_type, 'handler' => 'winner_issue','id' => $val['id'], 'cancel' => 1]).'" class="btn_region winner_issue" ><i class="fa fa-send-o"></i>'.L('cancle_send').'</a>';
                } else {
                    $list[$key]['issue_status'] = L('no_send');
                    $list[$key]['handler'] = '<a href="javascript:;"  data-href="'.url('market_action', ['type' => $this->marketing_type, 'handler' => 'winner_issue','id' => $val['id']]).'" class="btn_region winner_issue" ><i class="fa fa-send-o"></i>'.L('send').'</a>';
                }
            }
        }
        $this->assign('list', $list);
        $this->plugin_display('market_prizes', $this->cfg);
    }

    
    public function marketExportPrizesLog()
    {
        $market_id = I('get.id', 0, 'intval');
        $function = I('get.function', '', ['htmlspecialchars','trim']);

        if (IS_POST) {
            $starttime = I('post.starttime', '', 'local_strtotime');
            $endtime = I('post.endtime', '', 'local_strtotime');
            $market_id = I('get.id', 0, 'intval');
            if (empty($starttime) || empty($endtime)) {
                $this->message('选择时间不能为空', null, 2, $this->wechat_ru_id);
            }
            if ($starttime > $endtime) {
                $this->message('开始时间不能大于结束时间', null, 2, $this->wechat_ru_id);
            }

            $where = " p.dateline >= '" . $starttime . "' AND p.dateline <= '" . $endtime . "' ";
            $sql = "SELECT p.id, p.prize_name, p.issue_status, p.winner, p.dateline, p.openid, u.nickname FROM {pre}wechat_prize p LEFT JOIN {pre}wechat_user u ON p.openid = u.openid WHERE p.activity_type = '" . $this->marketing_type . "' and u.wechat_id = '" . $this->wechat_id . "' and p.prize_type = 1 AND p.market_id = '" .$market_id. "' and u.subscribe = 1 AND " . $where . " ORDER BY dateline desc ";
            $list = $this->model->query($sql);
            if ($list) {
                foreach ($list as $key => $value) {
                    $list[$key]['dateline'] = local_date('Y-m-d H:i', $value['dateline']);
                    $list[$key]['issue_status'] = ($value['issue_status'] == 1) ? '已发放' : '未发放';
                }
                $excel = new Spreadsheet();
                
                $excel->getActiveSheet()->getDefaultColumnDimension()->setAutoSize(true);
                
                $excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
                $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
                $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
                
                $rowVal = ['编号', '微信昵称', '奖品', '是否发放', '中奖时间'];
                foreach ($rowVal as $k => $r) {
                    $excel->getActiveSheet()->getStyleByColumnAndRow($k + 1, 1)->getFont()->setBold(true);
                    $excel->getActiveSheet()->getStyleByColumnAndRow($k + 1, 1)->getAlignment(); 
                    $excel->getActiveSheet()->setCellValueByColumnAndRow($k + 1, 1, $r);
                }
                
                $excel->setActiveSheetIndex(0);
                $objActSheet = $excel->getActiveSheet();
                
                $title = "中奖记录";
                $objActSheet->setTitle($title);
                
                foreach ($list as $k => $v) {
                    $num = $k + 2;
                    $excel->setActiveSheetIndex(0)
                        
                        ->setCellValue('A' . $num, $v['id'])
                        ->setCellValue('B' . $num, $v['nickname'])
                        ->setCellValue('C' . $num, $v['prize_name'])
                        ->setCellValue('D' . $num, $v['issue_status'])
                        ->setCellValue('E' . $num, $v['dateline']);
                }
                $name = date('Y-m-d'); 
                header("Content-Type: application/force-download");
                header("Content-Type: application/octet-stream");
                header("Content-Type: application/download");
                header("Content-Transfer-Encoding:utf-8");
                header("Pragma: no-cache");
                header('Content-Type: application/vnd.ms-e xcel');
                header('Content-Disposition: attachment;filename="' . $title . '_' . urlencode($name) . '.xls"');
                header('Cache-Control: max-age=0');
                $objWriter = IOFactory::createWriter($excel, 'Xls');
                $objWriter->save('php://output');
                exit;
            } else {
                $this->message('该时间段没有要导出的数据', null, 2, $this->wechat_ru_id);
            }
        }

        $url = url('data_list', ['type' => $this->marketing_type, 'function' => 'prizes']);
        $this->redirect($url);
    }

    
    public function marketQrcode()
    {
        $market_id = I('get.id', 0, 'intval');

        if (!empty($market_id)) {
            $url = __HOST__ . url('wechat/index/market_show', ['type' => 'wall', 'function' => 'wall_user_wechat', 'wall_id' => $market_id, 'wechat_ru_id' => $this->wechat_ru_id]);

            $wall = dao('wechat_marketing')->field('command,qrcode')->where(['id'=> $market_id, 'marketing_type' => $this->marketing_type, 'wechat_id' => $this->wechat_id])->find();

            
            $path = dirname(ROOT_PATH) .'/data/attached/wall/';
            
            $water_logo = ROOT_PATH . 'public/img/shop_app_icon.png';

            
            $qrcode = $path . 'wall_qrcode_' . $market_id. '.png';

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

            $qrcode_url = __STATIC__ . '/data/attached/wall/' .basename($qrcode).'?t='.time();
            $this->cfg['qrcode_url'] = $qrcode_url;
            $this->cfg['command'] = $wall['command'];
        }

        $this->plugin_display('market_qrcode', $this->cfg);
    }

    
    private function get_user_msg_count($wall_id)
    {
        $sql = "SELECT count(DISTINCT u.id) as user_count, count(m.id) as msg_count FROM {pre}wechat_wall_user u LEFT JOIN {pre}wechat_wall_msg m ON u.id = m.user_id WHERE m.wall_id = '" .$wall_id. "' AND u.wechat_id = '" .$this->wechat_id. "' ";
        $res = $this->model->query($sql);
        return $res[0];
    }

    
    public function executeAction()
    {
        if (IS_AJAX || IS_POST) {
            $json_result = ['error' => 0, 'msg' => '', 'url' => ''];

            $handler = I('get.handler', '', ['htmlspecialchars','trim']);
            $function = I('get.function', '', ['htmlspecialchars','trim']);
            $market_id = I('get.market_id', 0, 'intval');

            $msg_id = I('get.msg_id', 0, 'intval');
            $user_id = I('get.user_id', 0, 'intval');
            
            if (IS_AJAX && $handler && $handler == 'check') {
                $checktime = gmtime();
                $data = ['status' => 1, 'checktime' => $checktime];
                
                if (!empty($market_id) && !empty($user_id) && empty($msg_id)) {
                    dao('wechat_wall_user')->data($data)->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id, 'id' => $user_id, 'status' => 0])->save();
                    $json_result['msg'] = '用户审核成功';
                    $json_result['url'] = url('data_list', ['type' => $this->marketing_type, 'function' => $function, 'id' => $market_id]);
                    exit(json_encode($json_result));
                }

                
                if (!empty($market_id) && !empty($user_id) && !empty($msg_id)) {
                    dao('wechat_wall_msg')->data($data)->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id, 'user_id' => $user_id, 'id' => $msg_id, 'status' => 0])->save();
                    
                    dao('wechat_wall_user')->data($data)->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id, 'id' => $user_id, 'status' => 0])->save();

                    $json_result['msg'] = '留言审核成功';
                    if (isset($_GET['status'])) {
                        $status = I('get.status');
                        $json_result['url'] = url('data_list', ['type' => $this->marketing_type, 'function' => $function, 'id' => $market_id, 'status' => $status]);
                    }
                    exit(json_encode($json_result));
                }
            }

            
            if (IS_AJAX && $handler && $handler == 'move') {

                $data = ['status' => 0, 'checktime' => 0];

                
                if (!empty($market_id) && !empty($user_id) && empty($msg_id)) {
                    dao('wechat_wall_user')->data($data)->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id, 'id' => $user_id, 'status' => 1])->save();
                    $json_result['msg'] = '移除审核成功';
                    $json_result['url'] = url('data_list', ['type' => $this->marketing_type, 'function' => $function, 'id' => $market_id]);
                    exit(json_encode($json_result));
                }

                
                if (!empty($market_id) && !empty($user_id) && !empty($msg_id)) {
                    dao('wechat_wall_msg')->data($data)->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id, 'user_id' => $user_id, 'id' => $msg_id, 'status' => 1])->save();
                    
                    dao('wechat_wall_user')->data($data)->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id, 'id' => $user_id, 'status' => 1])->save();

                    $json_result['msg'] = '移除审核成功';
                    if (isset($_GET['status'])) {
                        $status = I('get.status');
                        $json_result['url'] = url('data_list', ['type' => $this->marketing_type, 'function' => $function, 'id' => $market_id, 'status' => $status]);
                        exit(json_encode($json_result));
                    }
                    exit(json_encode($json_result));
                }
            }

            
            if (IS_AJAX && $handler && $handler == 'data_delete') {

                
                if (!empty($market_id) && !empty($msg_id)) {
                    dao('wechat_wall_msg')->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id, 'id' => $msg_id])->delete();
                    $json_result['msg'] = '删除消息成功';
                    exit(json_encode($json_result));
                }
                
                if (!empty($market_id) && !empty($user_id) && empty($msg_id)) {
                    dao('wechat_wall_user')->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id, 'id' => $user_id])->delete();
                    dao('wechat_wall_msg')->where(['wall_id' => $market_id, 'wechat_id' => $this->wechat_id, 'user_id' => $user_id])->delete();
                    $json_result['msg'] = '删除会员以及消息成功';
                    exit(json_encode($json_result));
                }
            }

            
            if (IS_POST && $handler && $handler == 'batch_checking') {
                $check_id = I('post.check_id', 0, 'intval'); 
                $messagelist = I('post.id');
                $status = I('get.status', '', ['htmlspecialchars', 'trim']);

                $where_status = ($check_id  == 1) ? 0 : 1;
                $checktime = ($check_id  == 1) ? gmtime() : 0;
                $data = ['status' => $check_id, 'checktime' => $checktime];
                
                if ($function == 'messages' && !empty($messagelist) && is_array($messagelist)) {
                    
                    $num = count($messagelist);
                    if ($num > 50) {
                        $this->message('批量处理数量一次不能超过50', null, 2, $this->wechat_ru_id);
                    }
                    foreach ($messagelist as $v) {
                        $where = [
                            'wall_id' => $market_id,
                            'wechat_id' => $this->wechat_id,
                            'id' => $v,
                            'status' => $where_status
                        ];
                        dao('wechat_wall_msg')->data($data)->where($where)->save();
                    }
                    $this->message('批量处理成功', url('data_list', ['type' => $this->marketing_type, 'function' => $function, 'id' => $market_id, 'status' => $status]));
                }
                
                $userlist = I('post.user_id');
                if ($function == 'users' && !empty($userlist) && is_array($userlist)) {
                    
                    $num = count($userlist);
                    if ($num > 50) {
                        $this->message('批量处理数量一次不能超过50', null, 2, $this->wechat_ru_id);
                    }
                    foreach ($userlist as $v) {
                        $where = [
                            'wall_id' => $market_id,
                            'wechat_id' => $this->wechat_id,
                            'id' => $v,
                            'status' => $where_status
                        ];
                        dao('wechat_wall_user')->data($data)->where($where)->save();
                    }
                    $this->message('批量处理成功', url('data_list', ['type' => $this->marketing_type, 'function' => $function, 'id' => $market_id]));
                }


                
                $usermsglist = I('post.user_msg_id');
                if ($function == 'users' && !empty($user_id) && !empty($usermsglist) && is_array($usermsglist)) {
                    
                    $num = count($usermsglist);
                    if ($num > 50) {
                        $this->message('批量处理数量一次不能超过50', null, 2, $this->wechat_ru_id);
                    }
                    foreach ($usermsglist as $v) {
                        $where = [
                            'wall_id' => $market_id,
                            'wechat_id' => $this->wechat_id,
                            'id' => $v,
                            'status' => $where_status,
                            'user_id' => $user_id
                        ];
                        dao('wechat_wall_msg')->data($data)->where($where)->save();
                    }
                    $this->message('批量处理成功', url('data_list', ['type' => $this->marketing_type, 'function' => $function, 'id' => $market_id, 'user_id' => $user_id]));
                }

            }

            
            if (IS_AJAX && $handler && $handler == 'winner_issue') {
                $id = I('get.id', 0, 'intval');
                $cancel = I('get.cancel');

                if (!empty($id)) {
                    if (!empty($cancel)) {
                        $data['issue_status'] = 0;
                        dao('wechat_prize')->data($data)->where(['id' => $id, 'wechat_id' => $this->wechat_id])->save();
                        $json_result['msg'] = '已取消';
                        exit(json_encode($json_result));
                    } else {
                        $data['issue_status'] = 1;
                        dao('wechat_prize')->data($data)->where(['id' => $id, 'wechat_id' => $this->wechat_id])->save();
                        $json_result['msg'] = '发放标记成功';
                        exit(json_encode($json_result));
                    }
                }
            }

            
            if (IS_AJAX && $handler && $handler == 'winner_del') {
                $id = I('get.id', 0, 'intval');
                if (!empty($id)) {
                    dao('wechat_prize')->where(['id' => $id, 'wechat_id' => $this->wechat_id])->delete();
                    $json_result['msg'] = '删除成功';
                    exit(json_encode($json_result));
                }
            }

            exit();
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
}

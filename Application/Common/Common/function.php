<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
// 应用公共文件
/**
 *  print打印数组
 * @param $array
 */
function p($array){
    echo "<pre>".print_r($array,true)."</pre>";exit;
}


/**
 * Log日志
 * @param $message  日志信息
 * @param string $logname   日志名称
 * @param string $logPath   日志地址
 */
function wlog($message,$logname = "",$logPath='./log/'){
    if($logname == ""){
        $path = $logPath.$_SERVER['REQUEST_URI']."/";
    }else{
        $path = $logPath.$logname."/";
    }
    $now = date('[ c ]')."[".$_SERVER['REQUEST_URI']."]";
    if (!is_dir($path)) mkdir($path,0755,true);
    $destination = $path.date('y_m_d').'.log';
    //检测日志文件大小，超过配置大小则备份日志文件重新生成
    if(is_file($destination) && floor(C('LOG_FILE_SIZE')) <= filesize($destination) ){
        rename($destination,dirname($destination).'/'.time().'-'.basename($destination));
    }
    if(is_array($message)){
        array_walk_recursive($message,function(&$item,$key){
            $item = urlencode($item);
        });
        $message = urldecode(json_encode($message));
    }
    error_log($now."\n".$message."\n",3,$destination,$extra);
}


/**
 * 转json防乱码
 * @param type $array
 * @return type
 */
function jsonEnCode($array){
    header('Content-Type:application/json; charset=utf-8');
    array_walk_recursive($array,function(&$item,$key){
        $item = urlencode($item);
    });
    $json = urldecode(json_encode($array));
    return $json;
}


//获取请求的客户端是ios或者android
function get_device_type()
{
    //全部变成小写字母
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    $type = 'ANDROID';
    //分别进行判断
    if(strpos($agent, 'iphone') || strpos($agent, 'ipad'))
    {
        $type = 'IOS';
    }
    if(strpos($agent, 'android'))
    {
        $type = 'ANDROID';
    }
    return $type;
}
/**
 * 友好的时间显示
 *
 * @param int    $sTime 待显示的时间
 * @param string $type  类型. normal | mohu | full | ymd | other
 * @param string $alt   已失效
 * @return string
 */
function friendlyDate($sTime,$type = 'normal',$alt = 'false') {
    if (!$sTime)
        return '';
    //sTime=源时间，cTime=当前时间，dTime=时间差
    $cTime      =   time();
    $dTime      =   $cTime - $sTime;
    $dDay       =   intval(date("z",$cTime)) - intval(date("z",$sTime));
    //$dDay     =   intval($dTime/3600/24);
    $dYear      =   intval(date("Y",$cTime)) - intval(date("Y",$sTime));
    //normal：n秒前，n分钟前，n小时前，日期
    if($type=='normal'){
        if( $dTime < 60 ){
            if($dTime < 10){
                return '刚刚';    //by yangjs
            }else{
                return intval(floor($dTime / 10) * 10)."秒前";
            }
        }elseif( $dTime < 3600 ){
            return intval($dTime/60)."分钟前";
        //今天的数据.年份相同.日期相同.
        }elseif( $dYear==0 && $dDay == 0  ){
            //return intval($dTime/3600)."小时前";
            return '今天'.date('H:i',$sTime);
        }elseif($dYear==0){
            return date("m月d日 H:i",$sTime);
        }else{
            return date("Y-m-d H:i",$sTime);
        }
    }elseif($type=='mohu'){
        if( $dTime < 60 ){
            return $dTime."秒前";
        }elseif( $dTime < 3600 ){
            return intval($dTime/60)."分钟前";
        }elseif( $dTime >= 3600 && $dDay == 0  ){
            return intval($dTime/3600)."小时前";
        }elseif( $dDay > 0 && $dDay<=7 ){
            return intval($dDay)."天前";
        }elseif( $dDay > 7 &&  $dDay <= 30 ){
            return intval($dDay/7) . '周前';
        }elseif( $dDay > 30 ){
            return intval($dDay/30) . '个月前';
        }
    //full: Y-m-d , H:i:s
    }elseif($type=='full'){
        return date("Y-m-d , H:i:s",$sTime);
    }elseif($type=='ymd'){
        return date("Y-m-d",$sTime);
    }else{
        if( $dTime < 60 ){
            return $dTime."秒前";
        }elseif( $dTime < 3600 ){
            return intval($dTime/60)."分钟前";
        }elseif( $dTime >= 3600 && $dDay == 0  ){
            return intval($dTime/3600)."小时前";
        }elseif($dYear==0){
            return date("Y-m-d H:i:s",$sTime);
        }else{
            return date("Y-m-d H:i:s",$sTime);
        }
    }
}

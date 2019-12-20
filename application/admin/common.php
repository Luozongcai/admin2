<?php
/**
 * | AndPHP框架[基于ThinkPHP5开发]
 * +----------------------------------------------------------------------
 * | Copyright (c) 2017-2019 http://www.andphp.com
 * +----------------------------------------------------------------------
 * | AndPHP承诺基础框架永久免费开源，您可用于学习和商用，但必须保留软件版权信息。
 * +----------------------------------------------------------------------
 * | author    :BabySeeME <417170808@qq.com>
 * +----------------------------------------------------------------------
 * | createTime :2018/4/19 001915:57
 * +----------------------------------------------------------------------
 */
/**
 * 返回json格式数据
 * @param $type
 * @param $msg
 * @param null $url
 * @param int $wait
 * @return string
 * @company    :WuYuZhong Co. Ltd
 * @author     :BabySeeME <417170808@qq.com>
 * @createTime :2018-04-19 16:02
 */
function ajax_json($type,$msg, $url = null,$wait=3)
{
    if($type == 'success'){
        $code = 1;
    }else{
        $type = 'error';
        $code = 0;
    }
    return json_encode(array(
        'result' => $type,
        'code' => $code,
        'msg' => $msg,
        'url' => $url,
        'wait' => $wait
    ));
}


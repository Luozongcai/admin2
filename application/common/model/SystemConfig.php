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
 * | createTime :2018/3/3 000318:38
 * +----------------------------------------------------------------------
 */

namespace app\common\model;


class SystemConfig extends ModelBase
{

    public function _update($key,$value){
        if($this->where(['vari'=>$key])->update(['value'=>$value])){
            return true;
            //$this->add_log($this->userSession['id'],$this->userSession['username'],'更新了'.$group.'配置项'.$key.'为'.$value);
        }
        return false;
    }
    public function _update_all($data=array()){
        $ok = 0;
        foreach ($data as $key => $value) {
            if($this->where(['vari'=>$key])->update(['value'=>$value])){
                $ok=$ok+1;
                //$this->add_log($this->userSession['id'],$this->userSession['username'],'更新了'.$group.'配置项'.$key.'为'.$value);
            }
        }
        return $ok;
    }
}
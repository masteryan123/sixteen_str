<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/2
 * Time: 16:46
 */
namespace Sixteen;

use Sixteen\base\Current;

class Timesdate{

    public static function getTimes(){

        $obj = new Current();

        $str = $obj->getCurrent();

        return date('Y-m-d H:i:s').'==='.$str;

    }

}
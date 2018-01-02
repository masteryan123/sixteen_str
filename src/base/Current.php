<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/2
 * Time: 16:48
 */
namespace Sixteen\base;

class Current{

    public function getCurrent(){

        return mt_rand(100,999);

    }

}
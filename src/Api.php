<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/2
 * Time: 15:16
 */
namespace Sixteen;

class Api{

    public static function getString($length=16){

        if($length<0){
            return false;
        }

        $str = '';
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";


        for ( $i = 0; $i < $length; $i++ )
        {
            $str .= $chars[ mt_rand(0, strlen($chars) - 1) ];
        }

        return $str;

    }

}
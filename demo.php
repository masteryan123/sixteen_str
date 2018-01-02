<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/2
 * Time: 15:26
 */

require_once 'vendor/autoload.php';

use Sixteen\Api;
use Sixteen\Timesdate;

$str = Api::getString();

var_dump($str);

$time = Timesdate::getTimes();

var_dump($time);
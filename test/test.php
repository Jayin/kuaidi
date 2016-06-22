<?php

// +----------------------------------------------------------------------
// | Copyright (c) Zhutibang.Inc 2016 http://zhutibang.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: Jayin Ton <tonjayin@gmail.com>
// +----------------------------------------------------------------------
require_once('src/Curl.php');
require_once('src/Kuaidi.php');


$r  = \Kuaidi\Kuaidi::query('shentong', '123');
var_dump($r);
<?php
//http://fenxiangbei.dev:8888/kuaidi/index.php?type=shentong&postid=229671071176


require_once('curl.php');
// error_reporting(E_ALL);
$cc = new cURL(false);

//快递公司编码:申通=”shentong” EMS=”ems” 顺丰=”shunfeng” 圆通=”yuantong” 中通=”zhongtong” 韵达=”yunda” 天天=”tiantian” 汇通=”huitongkuaidi” 全峰=”quanfengkuaidi” 德邦=”debangwuliu” 宅急送=”zhaijisong”
$type = $_GET['type'];
// $type='shentong';
//快递单号
$postid = $_GET['postid'];
// $postid = '229671071176';

// echo "http://www.kuaidi100.com/query?type=$type&postid=$postid";
$response = $cc->get('http://www.kuaidi100.com/query?type='.$type.'&postid='.$postid);

echo $response;



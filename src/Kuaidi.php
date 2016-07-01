<?php 

// +----------------------------------------------------------------------
// | Copyright (c) Zhutibang.Inc 2016 http://zhutibang.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: Jayin Ton <tonjayin@gmail.com>
// +----------------------------------------------------------------------

namespace Kuaidi;

class Kuaidi {
    /**
     * @param $type 快递公司编码:申通=”shentong” EMS=”ems” 顺丰=”shunfeng” 圆通=”yuantong” 中通=”zhongtong” 韵达=”yunda” 天天=”tiantian” 汇通=”huitongkuaidi” 全峰=”quanfengkuaidi” 德邦=”debangwuliu” 宅急送=”zhaijisong”
     * @param $postid 快递号
     * @return mixed
     */
    public static
    function query($type, $postid) {
        $curl = new Curl();
        return json_decode($curl->get('http://www.kuaidi100.com/query?type='.$type.'&postid='.$postid));
    }

}

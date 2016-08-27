# 快递查询 [![Latest Stable Version](https://poser.pugx.org/jayin/kuaidi/v/stable.svg)](https://packagist.org/packages/jayin/kuaidi)

## 安装

```
composer require "jayin/kuaidi"
```

## 使用

```php
require_once("vendor/autoload.php");

$info  = \Kuaidi\Kuaidi::query('yuantong', '882114232875886515');
echo json_encode($info);
```

正常响应：
```
array(11) {
  ["message"]=>
  string(2) "ok"
  ["nu"]=>
  string(12) "229968891653"
  ["companytype"]=>
  string(8) "shentong"
  ["ischeck"]=>
  string(1) "1"
  ["com"]=>
  string(8) "shentong"
  ["updatetime"]=>
  string(19) "2016-08-28 01:42:45"
  ["status"]=>
  string(3) "200"
  ["condition"]=>
  string(3) "F00"
  ["codenumber"]=>
  string(12) "229968891653"
  ["data"]=>
  array(8) {
    [0]=>
    array(4) {
      ["time"]=>
      string(19) "2016-08-01 18:15:15"
      ["location"]=>
      string(0) ""
      ["context"]=>
      string(36) "已签收,签收人是: 本人签收"
      ["ftime"]=>
      string(19) "2016-08-01 18:15:15"
    }
    [1]=>
    array(4) {
      ["time"]=>
      string(19) "2016-08-01 14:40:14"
      ["location"]=>
      string(0) ""
      ["context"]=>
      string(71) "广东广州大学城(020-39383223) 的派件员 华师北 正在派件"
      ["ftime"]=>
      string(19) "2016-08-01 14:40:14"
    }
  }
  ["state"]=>
  string(1) "3"
}
```

错误响应：
```
array(2) {
  ["status"]=>
  string(3) "201"
  ["message"]=>
  string(60) "快递公司参数异常：单号不存在或者已经过期"
}
```

## 快递公司编码

```
申通=”shentong” 
EMS=”ems” 
顺丰=”shunfeng” 
圆通=”yuantong” 
中通=”zhongtong” 
韵达=”yunda” 
天天=”tiantian” 
汇通=”huitongkuaidi” 
全峰=”quanfengkuaidi” 
德邦=”debangwuliu” 
宅急送=”zhaijisong”
```

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
object(stdClass)#2 (9) {
  ["nu"]=>
  string(18) "882114232875886515"
  ["message"]=>
  string(2) "ok"
  ["ischeck"]=>
  string(1) "0"
  ["com"]=>
  string(8) "yuantong"
  ["updatetime"]=>
  string(19) "2016-06-23 00:45:25"
  ["status"]=>
  string(3) "200"
  ["condition"]=>
  string(2) "00"
  ["data"]=>
  array(6) {
    [0]=>
    object(stdClass)#3 (3) {
      ["time"]=>
      string(19) "2016-06-22 23:37:59"
      ["context"]=>
      string(57) "泉州转运中心 已发出,下一站 广州转运中心"
      ["ftime"]=>
      string(19) "2016-06-22 23:37:59"
    }
    [1]=>
    object(stdClass)#4 (3) {
      ["time"]=>
      string(19) "2016-06-22 23:37:49"
      ["context"]=>
      string(28) "泉州转运中心 已收入"
      ["ftime"]=>
      string(19) "2016-06-22 23:37:49"
    }
    [2]=>
    object(stdClass)#5 (3) {
      ["time"]=>
      string(19) "2016-06-22 20:55:13"
      ["context"]=>
      string(72) "福建省泉州市石狮市公司 已发出,下一站 泉州转运中心"
      ["ftime"]=>
      string(19) "2016-06-22 20:55:13"
    }
    [3]=>
    object(stdClass)#6 (3) {
      ["time"]=>
      string(19) "2016-06-22 02:58:19"
      ["context"]=>
      string(43) "福建省泉州市石狮市公司 已打包"
      ["ftime"]=>
      string(19) "2016-06-22 02:58:19"
    }
    [4]=>
    object(stdClass)#7 (3) {
      ["time"]=>
      string(19) "2016-06-21 23:24:52"
      ["context"]=>
      string(75) "福建省泉州市石狮市公司(点击查询电话) 已揽收&nbsp;&nbsp;"
      ["ftime"]=>
      string(19) "2016-06-21 23:24:52"
    }
    [5]=>
    object(stdClass)#8 (3) {
      ["time"]=>
      string(19) "2016-06-21 22:18:11"
      ["context"]=>
      string(76) "福建省泉州市石狮市公司 取件人: 詹栋军 已收件&nbsp;&nbsp;"
      ["ftime"]=>
      string(19) "2016-06-21 22:18:11"
    }
  }
  ["state"]=>
  string(1) "0"
}
```

错误响应：
```
object(stdClass)#2 (2) {
  ["status"]=>
  string(3) "201"
  ["message"]=>
  string(60) "快递公司参数异常：单号不存在或者已经过期"
}
```

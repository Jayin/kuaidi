# 快递查询 [![Latest Stable Version](https://poser.pugx.org/jayin/kuaidi/v/stable.svg)](https://packagist.org/packages/jayin/kuaidi)

## 安装

```
composer require "jayin/kuaidi"
```

## 使用


```
require_once("vendor/autoload.php");


$info  = \Kuaidi\Kuaidi::query('shentong', '123');
echo json_encode($info);
```

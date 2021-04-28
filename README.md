# 阿里云日志服务 Aliyun Sls

## 安装

1.推荐使用composer安装，执行如下命令
```bash
 composer require johnnylib/aliyunsls-for-laravel
```
2. 注册Laravel服务， config/app.php 添加
```bash
  \Johnnylib\AliyunSls\AliyunSlsServiceProvider::class
```
添加aliases配置

```bash
'Sls' => \Johnnylib\AliyunSls\Facades\Sls::class
```

3. 发布服务提供者资源
```bash
  php artisan vendor:publish --provider="Johnnylib\AliyunSls\AliyunSlsServiceProvider"
```
## 添加配置项
在config/aliyunsls.php 中添加配置，您也可以在.env文件中添加对应配置项

```PHP
return [
    'endpoint' => env('ALIYUN_SLS_ENDPOINT', ''),
    'access_key' => env('ALIYUN_SLS_ACCESS_KEY', ''),
    'access_secret' => env('ALIYUN_SLS_ACCESS_SECRET', ''),
    'project' => env('ALIYUN_SLS_PROJECT', ''),
    'default_logstore' => env('','test'),
];

```

## Demo
Sls Facade类提供了不同种日志级别

```PHP
Sls::info();
Sls::warning();
Sls::error();
Sls::debug();

```

## 依赖SDK
Aliyun Log Service PHP SDK，API VERSION 0.6.1


### License ###

The code for Predis is distributed under the terms of the MIT license (see [LICENSE](LICENSE)).

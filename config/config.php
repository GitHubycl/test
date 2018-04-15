<?php
//自定义配置项,在public/index.php入口文件中配置
return [
  // 应用调试模式
    'app_debug'              => true,
  'app_trace' => true, //修改默认的
  'site_name' => 'www.test.com', //新增没有的
  'log'       => [
  // 日志记录方式，内置 file socket 支持扩展
    'type'  => 'File',
     // 日志保存目录
    'path'  => '../log/',
     // 日志记录级别
     'level' => [],
    ],
];
<?php
//user模块自定义配置项
// 默认输出类型
return [
	'default_return_type'    => 'json',
	'app_debug'              => true,
  'app_trace' => true, //修改默认的
  'http_exception_template' => [
		// 定义404错误的重定向页面地址
		404 => APP_PATH.'404.html',
		// 还可以定义其它的HTTP status
		401 => APP_PATH.'401.html',
	],
];
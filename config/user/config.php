<?php
//userģ���Զ���������
// Ĭ���������
return [
	'default_return_type'    => 'json',
	'app_debug'              => true,
  'app_trace' => true, //�޸�Ĭ�ϵ�
  'http_exception_template' => [
		// ����404������ض���ҳ���ַ
		404 => APP_PATH.'404.html',
		// �����Զ���������HTTP status
		401 => APP_PATH.'401.html',
	],
];
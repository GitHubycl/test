<?php
//�Զ���������,��public/index.php����ļ�������
return [
  // Ӧ�õ���ģʽ
    'app_debug'              => true,
  'app_trace' => true, //�޸�Ĭ�ϵ�
  'site_name' => 'www.test.com', //����û�е�
  'log'       => [
  // ��־��¼��ʽ������ file socket ֧����չ
    'type'  => 'File',
     // ��־����Ŀ¼
    'path'  => '../log/',
     // ��־��¼����
     'level' => [],
    ],
];
<?php
namespace app\user\model;
use think\Model;
use think\Db;

class News extends Model
{
		protected $connection=[
		// 数据库类型
		'type' => 'mysql',
		// 数据库连接DSN配置
		'dsn' => '',
		// 服务器地址
		'hostname' => '127.0.0.1',
		// 数据库名
		'database' => 'mydatabase',
		// 数据库用户名
		'username' => 'root',
		// 数据库密码
		'password' => 'root',
		// 数据库连接端口
		'hostport' => '3306',
		// 数据库连接参数
		'params' => [],
		// 数据库编码默认采用utf8
		'charset' => 'utf8',
		// 数据库表前缀
		'prefix' => '',
		];
  
  	public function getAllNews(){		
//			return Db::query('select * from student');
//			return $more_datas = $this->select();
				return $more_datas = $this->select();
		}
		
}
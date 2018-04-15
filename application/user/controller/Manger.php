<?php
namespace app\user\controller;
use think\Db;
use app\user\model\User;
use think\Debug;

class Manger
{
	public function getjsondata()
	{
//		dump($request->param());
		return ['name'=>'thinkphp','status'=>1];
	}
	public function getdb(){
//    	return Db::query('select * from student');
				$user = new User();
				$data = $user->test();
				return $data;
  }
  public function adddata(){
  			$user = new User();
				$user ->age = 20;
				$user ->name = 'ycl30';
				$user ->sex = 1;
				$user ->save();
  }
  public function updatedata(){
  			$user = User::get(32);
  			$user -> name = 'ycl34';
  			$user -> age = '25';
  			$user ->save();
  }
  public function qurerysingledata(){
  			$user = User::get(['name' => 'ycl34']);
  			return $user;
  }
  public function qureryalldata($seller_id=0){
  	    echo $seller_id;
  			$list = User::all(['name' => 'ycl34']);
  			return $list;
  }
    public function qurerydata(){
    		throw new \think\exception\HttpException(404, 'Ò³Ãæ²»´æÔÚ');
  			$user = User::all(['name' => 'ycl34','sex' => 3]);
  			return $user;
  }
  
}
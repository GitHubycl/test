<?php
namespace app\index\controller;
use \think\Request;
use think\Controller;
use think\Db;
use think\Log;

class Index extends Controller
{
    public function index(Request $request)
    {
    	return view('hello',['name'=>'ycl','book'=>'c+++']);
//    	$this->redirect('/user/Manger/qureryalldata/seller_id/11',array("seller_id"=>120));
//    	return file_get_contents("php://input");//获取客户端post请求的body内容
//    	$json = $GLOBALS['HTTP_RAW_POST_DATA'];
//    	return $json;
//    	dump($_POST);
//			dump(Request::instance()->param());	
//    	dump(Request::instance()->param('bodyContent'));
//        return 'index';
//			dump(\think\Config::get());
    }
    public function getRequest()
		{
			$request = Request::instance();
			echo '请求方法：' . $request->method() . '<br/>';
			echo '资源类型：' . $request->type() . '<br/>';
			echo '访问ip地址：' . $request->ip() . '<br/>';
			echo '是否AJax请求：' . var_export($request->isAjax(), true) . '<br/>';
			echo '请求参数：';
			dump($request->param());
			echo '请求参数：仅包含name';
			dump($request->only(['name']));
			echo '请求参数：排除name';
			dump($request->except(['name']));
		}
		//返回所有获取的数据
		public function test(){
//			return Request::instance()->param();
//redirect 前面的重定向最前面如果有/或者://（/user  或者 ://user）,参数将无效,或者直接用path_info方式的带参数全路径  
				$this->redirect('/user/Manger/qureryalldata/seller_id/11',array("seller_id"=>120));
		}

    public function hello()
    {
//        return $this->fetch();
//			return $this->fetch('hello',['name'=>'ycl','book'=>'c++']);
//			return view('hello',['name'=>'ycl','book'=>'c+++']);
// 模板变量赋值
//				$this->assign('name','ThinkPHP');
//				$this->assign('book','thinkphp@qq.com');
				// 或者批量赋值
//				$this->assign([
//				'name' => 'ThinkPHP',
//				'book' => 'thinkphp@qq.com'
//				]);
//				return $this->fetch();

Log::write('测试日志信息，这是警告级别，并且实时写入','notice');
Log::record('hello测试日志信息');
Log::save();
return view('hello', [
'name' => 'ThinkPHP',
'book' => 'thinkphp@qq.com'
]);
    }

}


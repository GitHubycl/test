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
//    	return file_get_contents("php://input");//��ȡ�ͻ���post�����body����
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
			echo '���󷽷���' . $request->method() . '<br/>';
			echo '��Դ���ͣ�' . $request->type() . '<br/>';
			echo '����ip��ַ��' . $request->ip() . '<br/>';
			echo '�Ƿ�AJax����' . var_export($request->isAjax(), true) . '<br/>';
			echo '���������';
			dump($request->param());
			echo '���������������name';
			dump($request->only(['name']));
			echo '����������ų�name';
			dump($request->except(['name']));
		}
		//�������л�ȡ������
		public function test(){
//			return Request::instance()->param();
//redirect ǰ����ض�����ǰ�������/����://��/user  ���� ://user��,��������Ч,����ֱ����path_info��ʽ�Ĵ�����ȫ·��  
				$this->redirect('/user/Manger/qureryalldata/seller_id/11',array("seller_id"=>120));
		}

    public function hello()
    {
//        return $this->fetch();
//			return $this->fetch('hello',['name'=>'ycl','book'=>'c++']);
//			return view('hello',['name'=>'ycl','book'=>'c+++']);
// ģ�������ֵ
//				$this->assign('name','ThinkPHP');
//				$this->assign('book','thinkphp@qq.com');
				// ����������ֵ
//				$this->assign([
//				'name' => 'ThinkPHP',
//				'book' => 'thinkphp@qq.com'
//				]);
//				return $this->fetch();

Log::write('������־��Ϣ�����Ǿ��漶�𣬲���ʵʱд��','notice');
Log::record('hello������־��Ϣ');
Log::save();
return view('hello', [
'name' => 'ThinkPHP',
'book' => 'thinkphp@qq.com'
]);
    }

}


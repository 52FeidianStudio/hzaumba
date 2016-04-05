<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index(){
	   $this->display();
	}
	//页面登录判断
	public function do_login(){
		$where['user']=I('post.email');
		$where['password']=md5(I('post.password'));
		$m=M('administrator');
		$str=$m->where($where)->find();
		if($str){
			$_SESSION['user']=$where['user'];
			$this->redirect('Index/buttonsandicons',array('name'=>'zxjj'));
		}else{
			$this->redirect('index');
		}
	}
	//退出登录
	public function out_login(){
		$_SESSION['user']="";
		$this->redirect('index');
	}
}
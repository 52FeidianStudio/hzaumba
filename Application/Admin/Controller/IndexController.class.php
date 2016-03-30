<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	//判断是否已登录
	public function _initialize(){
		//dump($_SESSION);
		if($_SESSION['user']==""){
			$this->redirect('Login/index');
		}
	}
    public function fzt(){
    	$this->display();
    }
    public function about(){
    	$this->display();
    }
     public function buttonsandicons(){
        $name=I('get.name');
		$this->assign('name',$name);
		$m=M('contents');
		if($name){
			$map['cid']=2;
			$str=$m->field($name)->where($map)->find();
			$this->assign('zd',$str[$name]);
			//侧边栏的状态
			$sea['cid']=3;
			$tre=$m->field($name)->where($sea)->find();
			$this->assign('cb',$tre[$name]);
		}
		$where['cid']=1;
		$arr=$m->field($name)->where($where)->find();
		$con=$arr[$name];
		$this->assign('con',$con);
    	$this->display();
    }

	//记录数据
	public function record(){
		$col_name=I('get.name');
		if($col_name){
			$map[$col_name]=I('post.con');
			$where['cid']=1;
			$m=M('contents');
			$m->where($where)->save($map);
		}
		$this->redirect('Index/buttonsandicons',array('name'=>$col_name));
	}
}
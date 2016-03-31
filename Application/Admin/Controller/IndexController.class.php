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
			//右边页面的输入选择
			if($tre[$name]=="collapseZero"){
				if($str[$name]=="友情链接"){
						$ym="xinxi";
			        	//获取首页右边的信息
			        	$home=M('home');
			        	$hq['class']=$str[$name];
				        $info=$home->field('hid,title,content')->where($hq)->select();
				       //dump($info);
				        $this->assign('info',$info);		
				}else{
					$ym="shouye";
				}	
			}else{
				$ym="other";
			}
			$this->assign('ym',$ym);
		}
		$where['cid']=1;
		$arr=$m->field($name)->where($where)->find();
		$con=$arr[$name];
		$this->assign('con',$con);
    	$this->display();
    }

	//记录数据other页面
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
	//记录数据home页面
	public function record_home(){
		$col_name=I('get.name');
		$map['class']=I('get.class');
		$m=M('home');
		if($map['class']=="下载中心"){
			
		}else{
			$map['title']=I('post.title');
			$map['content']=I('post.con');
			$map['date']=date('y-m-d');
			$m->add($map);
		}
        $this->redirect('Index/buttonsandicons',array('name'=>$col_name));
	}
	//修改数据home页面
	public function update_home(){
		//dump($_POST);dump($_GET);exit;
		$col_name=I('get.name');
		$map['hid']=I('post.hid');
		$data['title']=I('post.title');
		$data['content']=I('post.con');
		$m=M('home');
		$m->where($map)->save($data);
        $this->redirect('Index/buttonsandicons',array('name'=>$col_name));
	}
	//删除链接
	public function delete_link(){
		$col_name=I('get.name');
		$where['hid']=I('get.hid');
		if($where['hid']){
			$m=M('home');
			$m->where($where)->delete();
		}
		 $this->redirect('Index/buttonsandicons',array('name'=>$col_name));
	}
}
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
    public function button(){
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
			       $home=M('home');
				   $hq['hid']=I('get.hid');
				   if($hq['hid']){
					    $ym="xiugai";
					    $info=$home->field('hid,title,content')->where($hq)->find();
					    $this->assign('info',$info);	
				   }else{
					    $ym="tianjia";
				   }
				   $this->assign('ym',$ym);
		}
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
			        	
				}else if($str[$name]=="下载中心"){
			        	
					    $ym="download";
				}else{
					
					$ym="shouye";
				}	
				   $home=M('home');
				   $hq['class']=$str[$name];
			       $info=$home->field('hid,title,content')->where($hq)->select();
				   //dump($info);
				   $this->assign('info',$info);		
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
		$data['date']=date("y-m-d");
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
	//记录上传文件
	public function record_file(){
    $config = array(
        'maxSize'    =>    3145728,
        'rootPath'   =>    './public/download/',
        'savePath'   =>    '',
        'saveName'   =>    array('uniqid',''),
        //'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
        'autoSub'    =>    false,
        'subName'    =>    array('date','Ymd'),
    );
    $upload = new \Think\Upload($config);// 实例化上传类
	    // 上传单个文件 
       $info   =   $upload->uploadOne($_FILES['con']);
       if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
       }else{// 上传成功 获取上传文件信息
	        $map['title']=I('post.title');
			$map['content']=$info['savename'];
			$map['class']='下载中心';
			$map['date']=date('y-m-d');
			$m=M('home');
			$m->add($map);
       }
	   $col_name=I('get.name');
	   $this->redirect('Index/buttonsandicons',array('name'=>$col_name));
	}
}
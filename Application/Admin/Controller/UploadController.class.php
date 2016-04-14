<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class UploadController extends Controller {
	//判断是否已登录
	public function _initialize(){
		//dump($_SESSION);
		if($_SESSION['user']==""){
			$this->redirect('Login/index');
		}
	}
	//上传logo
	public function upload_logo(){
		$config = array(
        'maxSize'    =>    3145728,
        'rootPath'   =>    './public/image/',
        'savePath'   =>    '',
        'saveName'   =>    array('uniqid',''),
        'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
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
			$map['class']='合作企业';
			$map['date']=date('y-m-d');
			$m=M('home');
			$m->add($map);
       }
	   $this->redirect('Index/logo');
	}
	//删除logo
	public function delete_logo(){
		//dump($_POST);dump($_GET);exit;
		$where['hid']=I('get.hid');
		if($where['hid']){
			$m=M('home');
			$m->where($where)->delete();
		}
        $this->redirect('Index/logo');
	}
	//记录上传文件
	public function record_image(){
      $config = array(
        'maxSize'    =>    3145728,
        'rootPath'   =>    './public/image/',
        'savePath'   =>    '',
        'saveName'   =>    array('uniqid',''),
        'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
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
			$map['class']='首页图片';
			$map['date']=date('y-m-d');
			$m=M('home');
			$m->add($map);
       }
	   $col_name=I('get.name');
	   $this->redirect('Index/image');
	}
	//删除图片
	public function delete_image(){
		//dump($_POST);dump($_GET);exit;
		$where['hid']=I('get.hid');
		if($where['hid']){
			$m=M('home');
			$m->where($where)->delete();
		}
        $this->redirect('Index/image');
	}
}
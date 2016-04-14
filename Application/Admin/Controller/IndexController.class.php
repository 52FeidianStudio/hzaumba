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
			
			       $home=M('home');
				   $hq['hid']=I('get.hid');
				   if($hq['hid']){
					    $ym="shouye_shouye";
					    $info=$home->field('hid,title,content')->where($hq)->find();
						$info['content']=htmlspecialchars_decode($info['content']);
					    $this->assign('info',$info);	
				   }else{
					    $ym="record_shouye";
				   }
				   $this->assign('ym',$ym);
		}
		//dump($info);
    	$this->display();
    }
    public function image(){
		$m=M('home');
		$where['class']="首页图片";
		$info=$m->where($where)->select();
		$this->assign('list',$info);
		$this->display();
    	
    }
	  public function logo(){
		$m=M('home');
		$where['class']="合作企业";
		$info=$m->where($where)->select();
		$this->assign('list',$info);
		$this->display();
    }
     public function buttonsandicons(){
        $name=I('get.name');
		$this->assign('name',$name);
		$m=M('contents');
		$str=$m->getField($name,true);
		//dump($str);exit;
		$con_r=$str[0];
		$con=htmlspecialchars_decode($con_r);
		$this->assign('zd',$str[1]);
		$this->assign('cb',$str[2]);
		$this->assign('con',$con);
		
    	$this->display();
		
    }
	 //新闻中心等页面
    public function shouye(){
		 $name=I('get.name');
		 $this->assign('name',$name);
		 $m=M('contents');
		 $map['cid']=2;
		 $str=$m->field($name)->where($map)->find();
		 $this->assign('zd',$str[$name]);
		           $home=M('home');
				   $hq['class']=$str[$name];
			       //分页
				    $count = $home->where($hq)->count();// 查询满足要求的总记录数
		            $Page       = new \Think\Page($count,10);
		            $show       = $Page->show();// 分页显示输出
		            $Page->setConfig('header','页');
			        $info=$home->field('hid,title,content')->order('hid desc')->limit($Page->firstRow.','.$Page->listRows)->where($hq)->select();
				    $this->assign('page',$show);// 赋值分页输出
				   //dump($info);
				   $this->assign('info',$info);		
				   $this->display();
	}
    // 下载中心
    public function download(){
		           $home=M('home');
				   $hq['class']="下载中心";
			       //分页
				    $count = $home->where($hq)->count();// 查询满足要求的总记录数
		            $Page       = new \Think\Page($count,10);
		            $show       = $Page->show();// 分页显示输出
		            $Page->setConfig('header','页');
			        $info=$home->field('hid,title,content')->order('hid desc')->limit($Page->firstRow.','.$Page->listRows)->where($hq)->select();
				    $this->assign('page',$show);// 赋值分页输出
				   //dump($info);
				   $this->assign('info',$info);		
				   $this->display();
	}
	  // 友情链接
    public function links(){
		           $home=M('home');
				   $hq['class']="友情链接";
			       //分页
				    $count = $home->where($hq)->count();// 查询满足要求的总记录数
		            $Page       = new \Think\Page($count,10);
		            $show       = $Page->show();// 分页显示输出
		            $Page->setConfig('header','页');
			        $info=$home->field('hid,title,content')->order('hid desc')->limit($Page->firstRow.','.$Page->listRows)->where($hq)->select();
				    $this->assign('page',$show);// 赋值分页输出
				   //dump($info);
				   $this->assign('info',$info);		
				   $this->display();
	}
	  // 修改密码
    public function update_pw(){
				   $this->display();
	}
	  // 教师名录
    public function teacher(){
		           $home=M('home');
				   $hq['class']="教师名录";
			       //分页
				    $count = $home->where($hq)->count();// 查询满足要求的总记录数
		            $Page       = new \Think\Page($count,10);
		            $show       = $Page->show();// 分页显示输出
		            $Page->setConfig('header','页');
			        $info=$home->field('hid,title,content')->order('hid desc')->limit($Page->firstRow.','.$Page->listRows)->where($hq)->select();
				    $this->assign('page',$show);// 赋值分页输出
				//   dump($info);
				   $this->assign('info',$info);		
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
	//记录数据下载中心、教师名录页面
	public function record_down(){
		$map['class']=I('get.class');
		if($map['class']=="下载中心"){
			$url="download";
		}else if($map['class']=="友情链接"){
			$url="links";
		}else{
			$url="teacher";
		}
		    $m=M('home');
		    $map['title']=I('post.title');
			$map['content']=I('post.con');
			$map['date']=date('y-m-d');
			$m->add($map);
			$this->redirect('Index/'.$url);
	}
	//修改数据下载中心、教师名录页面
	public function update_down(){
		//dump($_POST);dump($_GET);exit;
		$map['class']=I('get.class');
		if($map['class']=="下载中心"){
			$url="download";
		}else if($map['class']=="友情链接"){
			$url="links";
		}else{
			$url="teacher";
		}
		$map['hid']=I('post.hid');
		$data['title']=I('post.title');
		$data['content']=I('post.con');
		$data['date']=date("y-m-d");
		$m=M('home');
		$m->where($map)->save($data);
       $this->redirect('Index/'.$url);
	}
	//删除数据下载中心、教师名录页面
	public function delete_down(){
		//dump($_POST);dump($_GET);exit;
		$map['name']=I('get.name');
		if($map['name']=="teacher"){
			$url="teacher";
		}else if($map['name']=="download"){
			$url="download";
		}else{
			$url="links";
		}
		$where['hid']=I('get.hid');
		if($where['hid']){
			$m=M('home');
			$m->where($where)->delete();
		}
		$m->where($map)->save($data);
       $this->redirect('Index/'.$url);
	}

	//记录数据home页面
	public function record_shouye(){
		$col_name=I('get.name');
		$map['class']=I('get.class');
		$m=M('home');
		    $map['title']=I('post.title');
			$map['content']=I('post.con');
			$map['date']=date('y-m-d');
			$m->add($map);
			$this->redirect('Index/shouye',array('name'=>$col_name));
	}
	//修改数据home页面
	public function update_shouye(){
		//dump($_POST);dump($_GET);exit;
		$col_name=I('get.name');
		$map['hid']=I('post.hid');
		$data['title']=I('post.title');
		$data['content']=I('post.con');
		$data['date']=date("y-m-d");
		$m=M('home');
		$m->where($map)->save($data);
        $this->redirect('Index/shouye',array('name'=>$col_name));
	}
	//删除home页面
	public function delete_shouye(){
		//dump($_POST);dump($_GET);exit;
		$col_name=I('get.name');
		$where['hid']=I('get.hid');
		if($where['hid']){
			$m=M('home');
			$m->where($where)->delete();
		}
        $this->redirect('Index/shouye',array('name'=>$col_name));
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
	   $this->redirect('Index/download');
	}
}
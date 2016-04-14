<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$home=M('home');
	    $hq_a['class']="新闻中心";
	    $info_new=$home->order('hid desc')->where($hq_a)->select();
	    //dump($info);
        $this->assign('info_new',$info_new);
		
		 $hq_b['class']="通知公告";
	    $info_tzgg=$home->order('hid desc')->where($hq_b)->select();
	    //dump($info);
        $this->assign('info_tzgg',$info_tzgg);
		
		 $hq_c['class']="招生信息";
	    $info_zsxx=$home->order('hid desc')->where($hq_c)->select();
	    //dump($info);
        $this->assign('info_zsxx',$info_zsxx);
		
		 $hq_d['class']="教务信息";
	    $info_jwxx=$home->order('hid desc')->where($hq_d)->select();
	    //dump($info);
        $this->assign('info_jwxx',$info_jwxx);
		$hq_d['class']="首页图片";
	    $info_image=$home->order('hid desc')->limit(3)->where($hq_d)->select();
        $this->assign('info_image',$info_image);
       $this->display();
    }
    public function download(){
		$home=M('home');
		 $hq_d['class']="下载中心";
		 $count = $home->where($hq_d)->count();// 查询满足要求的总记录数
		 $Page       = new \Think\Page($count,8);
		 $show       = $Page->show();// 分页显示输出
		 $Page->setConfig('header','页');
	     $info_jwxx=$home->order('hid desc')->limit($Page->firstRow.','.$Page->listRows)->where($hq_d)->select();
	    //dump($info);
        $this->assign('info_file',$info_jwxx);
		
        $this->assign('page',$show);// 赋值分页输出
       $this->display();
    }
    public function link(){
		$home=M('home');
	    $hq['class']="友情链接";
		 $count = $home->where($hq)->count();// 查询满足要求的总记录数
		 $Page       = new \Think\Page($count,10);
		 $show       = $Page->show();// 分页显示输出
		 $Page->setConfig('header','页');
	    $info=$home->field('title,content')->limit($Page->firstRow.','.$Page->listRows)->order('hid desc')->where($hq)->select();
	    //dump($info);
        $this->assign('info',$info);		
		$this->assign('page',$show);// 赋值分页输出
       $this->display();
    }
    public function commen(){
	   $hq['class']=I('get.class');
	   $home=M('home');
	     $count = $home->where($hq)->count();// 查询满足要求的总记录数
		 $Page       = new \Think\Page($count,6);
		 $show       = $Page->show();// 分页显示输出
		 $Page->setConfig('header','页');
	   $info=$home->order('hid desc')->limit($Page->firstRow.','.$Page->listRows)->where($hq)->select();
	  //  dump($info);
		$this->assign('class',$hq['class']);	
        $this->assign('info',$info);	
		 $this->assign('page',$show);// 赋值分页输出
       $this->display();
    }
    public function tongzhi(){
       $this->display();
    }
	//显示信息 
	public function information(){
		$where['hid']=I('get.hid');
		if($where['hid']){
			$m=M('home');
			$str=$m->where($where)->find();
			$str['content']=htmlspecialchars_decode($str['content']);
			$this->assign('str',$str);
			//dump($str);
		}
		$this->display();
	}
}
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
       $this->display();
    }
    public function download(){
       $this->display();
    }
    public function link(){
		$home=M('home');
	    $hq['class']="友情链接";
	    $info=$home->field('title,content')->order('hid desc')->where($hq)->select();
	    //dump($info);
        $this->assign('info',$info);		
       $this->display();
    }
    public function commen(){
	   $hq['class']=I('get.class');
	   $home=M('home');
	   $info=$home->order('hid desc')->where($hq)->select();
	  //  dump($info);
		$this->assign('class',$hq['class']);	
        $this->assign('info',$info);	
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
			$this->assign('str',$str);
			//dump($str);
		}
		$this->display();
	}
}
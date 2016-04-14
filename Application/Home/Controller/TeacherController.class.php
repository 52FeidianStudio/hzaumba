<?php
namespace Home\Controller;
use Think\Controller;
class TeacherController extends Controller {
    public function company(){
		$m=M('home');
		$where['class']="合作企业";
		$str=$m->where($where)->select();
		$this->assign('list',$str);
       $this->display();
    }
    public function inschool(){
		$con=A('Commen')->read_con('xnds');
		$this->assign('con',$con);
		$home=M('home');
	    $hq_a['class']="教师名录";
	    $info=$home->order('hid desc')->where($hq_a)->select();
		//dump($info);
		 $this->assign('info',$info);
       $this->display();
    }
    public function outschool(){
		$con=A('Commen')->read_con('xwds');
		$this->assign('con',$con);
		
       $this->display();
    }
}
<?php
namespace Home\Controller;
use Think\Controller;
class TeacherController extends Controller {
    public function company(){
		$con=A('Commen')->read_con('hzqy');
		$this->assign('con',$con);
       $this->display();
    }
    public function inschool(){
		$con=A('Commen')->read_con('xnds');
		$this->assign('con',$con);
       $this->display();
    }
    public function outschool(){
		$con=A('Commen')->read_con('xwds');
		$this->assign('con',$con);
       $this->display();
    }
}
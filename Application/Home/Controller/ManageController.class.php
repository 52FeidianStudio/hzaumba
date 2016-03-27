<?php
namespace Home\Controller;
use Think\Controller;
class ManageController extends Controller {
    public function course(){
		$con=A('Commen')->read_con('kcap');
		$this->assign('con',$con);
       $this->display();
    }
    public function dabian(){
		$con=A('Commen')->read_con('dbap');
		$this->assign('con',$con);
       $this->display();
    }
    public function lunwen(){
		$con=A('Commen')->read_con('lwzd');
		$this->assign('con',$con);
       $this->display();
    }
    public function peiyang(){
		$con=A('Commen')->read_con('pyfa');
		$this->assign('con',$con);
       $this->display();
    }
    public function shijian(){
		$con=A('Commen')->read_con('glsj');
		$this->assign('con',$con);
       $this->display();
    }

}
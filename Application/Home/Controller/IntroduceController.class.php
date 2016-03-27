<?php
namespace Home\Controller;
use Think\Controller;
class IntroduceController extends Controller {
    public function edpprj(){
		$con=A('Commen')->read_con('edp_xm');
		$this->assign('con',$con);
       $this->display();
    }
    public function mbaprj(){
		$con=A('Commen')->read_con('mba_xm');
		$this->assign('con',$con);
       $this->display();
    }
}
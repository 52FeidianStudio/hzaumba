<?php
namespace Home\Controller;
use Think\Controller;
class MbaUnionController extends Controller {
    public function schoolmate(){
	  $con=A('Commen')->read_con('xyfc');
	   $this->assign('con',$con);
       $this->display();
    }
    public function zhangcheng(){
		$con=A('Commen')->read_con('lhhzc');
	   $this->assign('con',$con);
       $this->display();
    }
    public function zuzhi(){
		$con=A('Commen')->read_con('org');
	   $this->assign('con',$con);
       $this->display();
    }
}
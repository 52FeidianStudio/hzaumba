<?php
namespace Home\Controller;
use Think\Controller;
class ZhaoshengController extends Controller {
    public function zhaosheng(){
		$con=A('Commen')->read_con('zsxx');
		$this->assign('con',$con);
       $this->display();
    }
}
<?php
namespace Home\Controller;
use Think\Controller;
class CareerController extends Controller {
    public function career(){
		$con=A('Commen')->read_con('zyfz');
		$this->assign('con',$con);
       $this->display();
    }
}
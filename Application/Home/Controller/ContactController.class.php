<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends Controller {
    public function contact(){
		 $con=A('Commen')->read_con('lxwm');
	   $this->assign('con',$con);
       $this->display();
    }
}
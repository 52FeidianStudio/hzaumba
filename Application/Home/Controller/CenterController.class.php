<?php
namespace Home\Controller;
use Think\Controller;
class CenterController extends Controller {
    public function center(){
		$con=A('Commen')->read_con('zxjj');
		$this->assign('con',$con);
       $this->display();
    }
    public function edu(){
		$con=A('Commen')->read_con('jyln');
		$this->assign('con',$con);
       $this->display();
    }
    public function organization(){
		$con=A('Commen')->read_con('zzjg');
		$this->assign('con',$con);
       $this->display();
    }
}
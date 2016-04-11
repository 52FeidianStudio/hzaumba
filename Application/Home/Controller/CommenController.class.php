<?php
namespace Home\Controller;
use Think\Controller;
class CommenController extends Controller {
    public function read_con($name){
		$m=M('contents');
		$where['cid']=1;
		$arr=$m->where($where)->find();
		$con_r=$arr[$name];
		$con=htmlspecialchars_decode($con_r);
		return $con;
    }
}
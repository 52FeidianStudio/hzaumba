<?php
return array(
	//'配置项'=>'配置值'
	//'配置项'=>'配置值'
	'URL_CASE_INSENSITIVE'=>true,  //URL不区分大小写
	'URL_ROUTER_ON'=>true,
	'URL_ROUTE_RULES'=>array(
		'index.html'=>'Index/index',
	),

	//'SHOW_PAGE_TRACE'=>true,      //开启页面TRACE
	
	//'配置项'=>'配置值'
	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'127.0.0.1',
	'DB_NAME'=>'hzaumba',//设置数据库名；
	'DB_user'=>'root',
	'DB_PWD'=>'',
	'DB_PORT'=>'3306',
	'DB_PREFIX'=>'mba_',//设置表前缀
	'DB_CHARSET' => 'utf8', // 数据库的编码 默认为utf8
	
	'SHOW_PAGE_TRACE'=>'true',

	// 'session_auto_start' => true,
	// 	'SESSION_OPTIONS' => array('use_trans_sid'=>1),
	// 	 'SESSION_OPTIONS' => array('use_trans_sid'=>1,'use_only_cookies'=>1)
	
);
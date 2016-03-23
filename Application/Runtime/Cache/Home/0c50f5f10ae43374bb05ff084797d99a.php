<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>华中农业大学MBA教育中心</title>
	<meta name="keywords" content="华中农业大学MBA教育中心">
	<meta name="description" content="华中农业大学MBA教育中心">
	<link rel="stylesheet" href="/hzaumba/Public/front/css/header.css">
	<link rel="stylesheet" href="/hzaumba/Public/front/css/index.css">
	<link rel="stylesheet" href="/hzaumba/Public/front/css/style.css">
    <!--[if IE]><link rel="stylesheet" href="/hzaumba/Public/front/css/ie.css"><![endif]-->
    <!--[if lte IE 9]><script type="text/javascript" src="/hzaumba/Public/front/js/ie.js"></script><![endif]-->
    <script src="/hzaumba/Public/front/js/jquery-1.8.3.min.js"></script>
</head>
<body>
<!-- 

头部，导航栏

 -->
<div class="top"></div>
<div id="head">
    <div class="logo">
        <img src="/hzaumba/Public/front/images/mba_logo.png" alt="">
    </div>
    <div class="head-word">
        <p>理论与实务并重</p>
        <p>本土与国际复合</p>
    </div>
</div>
<div id="nav">
    <ul class="first-ul">        
        <li><a href="">首页</a></li>
        <li>
            <a href="">中心概况</a>
            <ul class="second-ul">
                <span></span>
                <li><a href="">中心简介</a></li>
                <li><a href="">组织机构</a></li>
                <li><a href="">教育理念</a></li>
            </ul>
        </li>
        <li>
            <a href="">项目介绍</a>
            <ul class="second-ul">
                <span></span>
                <li><a href="">mba项目</a></li>
                <li><a href="">edp项目</a></li>
            </ul>
        </li>
        <li>
            <a href="">师资力量</a>
            <ul class="second-ul">
                <span></span>
                <li><a href="">校内导师</a></li>
                <li><a href="">校外导师</a></li>
                <li><a href="">合作企业</a></li>
            </ul>
        </li>
        <li><a href="">招生信息</a></li>
        <li>
            <a href="">教学管理</a>
            <ul class="second-ul">
                <span></span>
                <li><a href="">培养方案</a></li>
                <li><a href="">论文指导</a></li>
                <li><a href="">管理实践</a></li>
                <li><a href="">课程安排</a></li>
                <li><a href="">答辩安排</a></li>
            </ul>
        </li>
        <li><a href="">职业发展</a></li>
        <li>
            <a href="">MBA联合会</a>
            <ul class="second-ul">
                <span></span>
                <li><a href="">联合会章程</a></li>
                <li><a href="">组织机构</a></li>
                <li><a href="">校友风采</a></li>
            </ul>
        </li>
        <li><a href="">联系我们</a></li>
    </ul>
</div>
<script>
$(function(){
    $(".first-ul li").mouseover(function(){
        $(this).children(".second-ul").show();
    })
    $(".first-ul li").mouseout(function(){
        $(this).children(".second-ul").hide();
    })
})
</script>




<div id="footer">
    <h1>地址：湖北省武汉市洪山区南湖狮子山一号   邮编：430070   TEL：027-87282679   FAX：027-87282973 </h1>
    <h1>版权所有：华中农业大学MBA教育中心  技术支持：沸点工作室  <a href="">管理</a>   </h1>
</div>
    <!-- <iframe style="display:none;" src="tencent://message/?uin=2403602150&Site=&menu=yes"></iframe> -->
</body>
</html>
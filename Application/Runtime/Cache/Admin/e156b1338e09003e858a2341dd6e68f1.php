<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>hzaumba</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="/hzaumba/Public/Back/css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="/hzaumba/Public/Back/css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="/hzaumba/Public/Back/css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="/hzaumba/Public/Back/css/bootstrap-admin-theme-change-size.css">

        <!-- Bootstrap Switch (the On-Off buttons) -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" href="vendors/bootstrap-switch/build/css/bootstrap3/bootstrap-switch.min.css">
        <link rel="stylesheet" href="css/bootstrap-switch-small.css">
        <link rel="stylesheet" href="http://bdmdesign.github.io/bootstrap-switch/static/stylesheets/flat-ui-fonts.css">

        <!-- Bootstrap Switch (the On-Off buttons). Theme's styles. -->
        <link rel="stylesheet" media="screen" href="/hzaumba/Public/Back/css/bootstrap-theme-switch.min.css">



       
        <!-- Custom styles -->
        <style type="text/css">
            .buttons-title{
                margin-top: 20px
            }
            .buttons-group{
                margin-top: 10px;
            }
            .the-icons{
                margin-left: 0;
                list-style: none;
            }
            .the-icons li {
                float: left;
                width: 25%;
                line-height: 25px;
            }
            .panel-bootstrap-switch,
            .panel-bootstrap-switch .bootstrap-admin-panel-content{
                float: left;
            }
            .panel-bootstrap-switch .buttons-group{
                margin-top: 0;
            }
            .panel-bootstrap-switch .buttons-group .has-switch{
                margin-top: 10px;
            }
            .panel-bootstrap-switch #btn-destroy-switch,
            .panel-bootstrap-switch #btn-create{
                margin-top: 5px;
            }
            .panel-bootstrap-switch #btn-destroy-switch{
                margin-bottom: 10px;
            }
            .panel-bootstrap-switch .bootstrap-switch-footer{
                margin-top: 20px;
            }
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bootstrap-admin-with-small-navbar">
        <!-- small navbar -->
         <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar-sm" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="collapse navbar-collapse">
                            
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="http://www.hzau.edu.cn">Link1&nbsp;</a></li>
                                <li><a href="http://yjs.hzau.edu.cn/">Link2&nbsp;<i class="glyphicon glyphicon-send"></i></a></li>
                                <li><a href="/hzaumba/index.php/Admin/Index/update_pw.html" data-toggle="tooltip" data-placement="bottom" title="修改密码">Settings&nbsp;<i class="glyphicon glyphicon-cog"></i></a></li>
                                <li>
                                    <a href="/hzaumba/index.php/admin/Login/out_login">doup out <i class="glyphicon glyphicon-share-alt"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- main / large navbar -->
        <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar bootstrap-admin-navbar-under-small" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-header">
                            
                            <a class="navbar-brand" href=""style="color:#ff7f50;">华中农业大学MBA后台管理系统</a>
                        </div>  
                    </div>
                </div>
            </div><!-- /.container -->
        </nav>

        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">
                <!-- left, vertical navbar -->
                <div class="col-md-2 bootstrap-admin-col-left">
                    <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                        <li class="submenu">
                            <a  href="#collapseZero"data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-chevron-down"></i>首页</a>
                            <ul id="collapseZero" class="panel-collapse collapse  nav bootstrap-admin-navbar-side">
                                <li id="xwzx" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/shouye.html?name=xwzx"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;新闻中心</a></li>
                                <li id="tzgg" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/shouye.html?name=tzgg"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp; 通知公告</a></li>
                                <li id="xxjw" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/shouye.html?name=xxjw"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;教务信息</a></li>
                                 <li id="xxzs" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/shouye.html?name=xxzs"  ><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;招生信息</a></li>
                                <li id="xzzx" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/download.html"><i class="glyphicon glyphicon-chevron-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;下载中心</a></li>
                                <li id="yqlj" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/links.html"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;友情链接</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a  class="dropmenu" href="#collapseOne"data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-chevron-down"></i>中心概况</a>
                            <ul id="collapseOne" class="panel-collapse collapse  nav bootstrap-admin-navbar-side">
                                <li id="zxjj" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=zxjj"   ><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;中心简介</a></li>
                                <li id="zzjg" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=zzjg"><i class="glyphicon glyphicon-chevron-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;组织机构</a></li>
                                <li id="jyln" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=jyln"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;教育理念</a></li>
                            </ul>
                        </li>
                         <li class="submenu">
                            <a  href="#collapseTwo"data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-chevron-down"></i>项目介绍</a>
                            <ul id="collapseTwo" class=" panel-collapse collapse  nav bootstrap-admin-navbar-side">
                               <li id="mba_xm" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=mba_xm"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp; MBA项目</a></li>
                                <li id="edp_xm" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=edp_xm"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;EDP项目</a></li>
                            </ul>
                        </li>
                         <li class="submenu">
                            <a href="#collapseThree"data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-chevron-down"></i>师资力量</a>
                            <ul id="collapseThree"class="panel-collapse collapse  nav bootstrap-admin-navbar-side">
                                <li id="xnds" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=xnds"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;校内导师</a></li>
                                <li id="xwdsstyle="background-color:#dcdcdc;"" ><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=xwds"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;校外导师</a></li>
								<li id="teacher" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/teacher.html"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;教师名录</a></li>
                                <li id="hzqy" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=hzqy"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;合作企业</a></li>
                            </ul>
                        </li>

                        <li ><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=zsxx"><i class="glyphicon glyphicon-chevron-right"></i> 招生信息</a></li>

                         <li class="submen">
                            <a  href="#collapseFour"data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-chevron-down"></i>教学管理</a>
                            <ul id="collapseFour"class="panel-collapse collapse  nav bootstrap-admin-navbar-side">
                                <li id="pyfa" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=pyfa"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;培养方案</a></li>
                                <li id="lwzd" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=lwzd"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;论文指导</a></li>
                                <li id="glsj" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=glsj"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;管理实践</a></li>
                                <li id="kcap" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=kcap"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;课程安排</a></li>
                                <li id="dbap" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=dbap"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;答辩安排</a></li>
                            </ul>
                        </li>
                        <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=zyfz"><i class="glyphicon glyphicon-chevron-right"></i>职业发展</a></li>

                         <li class="submenu">
                            <a href="#collapseFive" data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-chevron-down"></i>MBA联合会</a>
                            <ul id="collapseFive"class="panel-collapse collapse  nav bootstrap-admin-navbar-side">
                                <li id="lhhzc" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=lhhzc"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;联合会章程</a></li>
                               <li id="org" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=org"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;组织机构</a></li>
                                <li id="xyfc" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=xyfc"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;校友风采</a></li>
                            </ul>
                        </li>

                        <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=lxwm"><i class="glyphicon glyphicon-chevron-right"></i>联系我们</a></li>
						

                       <!-- <li>
                            <a href="#"><span class="badge pull-right">731</span> Orders</a>
                        </li>-->
                        
                    </ul>
                </div>

                <!-- content -->
                <div class="col-md-10">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default panel-bootstrap-switch" style="width:940px;min-height:500px;">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">修改管理员密码<?php echo ($zd); ?></div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                              
                           
                              <form  style="width:900px;height:400px;"action="/hzaumba/index.php/admin/Login/update_pw" method="POST" name="jaj"  id="tianjia" onSubmit="return f1();">
                            </br></br>
                           <b style="float:left;">新用户&nbsp;名：&nbsp;</b><input name="user" id="" class="form-control" type="text" placeholder="请输入新用户名" style="width:206px;border: 1px solid #bbb;font-size: 14px;color: #333;padding: 7px;border-radius: 3px;"><br><br>

                           <b style="float:left;">新&nbsp;&nbsp;密&nbsp;&nbsp;码：&nbsp;&nbsp;</b><input name="password" id="newpassword" class="form-control" type="password" placeholder="请输入新密码" style="width:206px;border: 1px solid #bbb;font-size: 14px;color: #333;padding: 7px;border-radius: 3px;"data-toggle="tooltip" data-placement="right" title="20位字符，可由英文字母、数字和符号组成，不能含空格"><br><br>

                          <b style="float:left;">确认新密码：</b><input name="repassword" id="confirmpwd" class="form-control" type="password" placeholder="请确认新密码" style="width:206px;border: 1px solid #bbb;font-size: 14px;color: #333;padding: 7px;border-radius: 3px;">
                            <input type="submit" class="btn btn-info right" style="margin-right:440px;margin-top:60px;" value="确定" /></br></br>
                                </form>  

                               

                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        

        <!-- footer -->
        <div class="navbar navbar-footer"style="background:#dcdcdc;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <footer role="contentinfo" >
                             <p class="left" style="margin-left:180px;"><i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;© 2016 华中农业大学MBA教育中心</p>
                            <p class="right" style="margin-right:60px;">技术支持：<i class="glyphicon glyphicon-leaf"></i>&nbsp沸点工作室</p>
                        </footer>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="/hzaumba/Public/Back/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/hzaumba/Public/Back/js/jquery.min.js"></script>
        <script type="text/javascript" src="/hzaumba/Public/Back/js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="/hzaumba/Public/Back/js/bootstrap-admin-theme-change-size.js"></script>
        <script type="text/javascript" src="/hzaumba/Public/Back/vendors/bootstrap-switch/build/js/bootstrap-switch.min.js"></script>

        <script type="text/javascript">
            $(function() {
            
                /*
                 * Initialize all the inputs
                 */
                $('input[type="checkbox"],[type="radio"]').not('#create-switch').bootstrapSwitch();

                /*
                 * Destroy
                 */
                $('#btn-destroy-switch').on('click', function() {
                    $('#destroy-switch').bootstrapSwitch('destroy');
                    $(this).remove();
                });

                /*
                 * Create
                 */
                $('#btn-create').on('click', function() {
                    $('#create-switch').bootstrapSwitch();
                    $(this).remove();
                });

                /*
                 * Radio
                 */
                $('.radio1').on('switch-change', function() {
                    $('.radio1').bootstrapSwitch('toggleRadioState');
                });
             
               
               
                
            });
        
             function f1(){
			    //return false;
				var user=document.getElementsByName('user')[0].value;
				var pw=document.getElementsByName('password')[0].value;
				var repw=document.getElementsByName('repassword')[0].value;
				if(user&&pw&&repw){
				    
				}else{
				   alert("输入不能为空");
				   return false;
				}
				if(pw==repw){
				     alert("修改成功");
				     return true;
				}else{
				      alert("密码不一致");
				      return false;
				}
			  }
        </script>
    </body>
</html>
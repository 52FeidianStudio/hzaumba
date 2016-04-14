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
        <link rel="stylesheet" href="/hzaumba/Public/Back/vendors/bootstrap-switch/build/css/bootstrap3/bootstrap-switch.min.css">
        <link rel="stylesheet" href="/hzaumba/Public/Back/css/bootstrap-switch-small.css">
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
           
     .current{background-color:rgba(0,255,150,0.5);}
     .prev,.num,.next,.current{width:auto;height:auto;margin:4px;padding:1px 2px;box-shadow:0 0 2px rgba(0,0,0,0.2);background-color:rgba(255,255,255,0.1);}
    
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
                        <li class="submenu" >
                            <a  href="#collapseZero"data-toggle="collapse" data-parent="#accordion"><i class="glyphicon glyphicon-chevron-down"></i>首页</a>
                            <ul id="collapseZero" class="panel-collapse collapse  nav bootstrap-admin-navbar-side">
                                <li id="xwzx" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/shouye.html?name=xwzx"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;新闻中心</a></li>
                                <li id="tzgg" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/shouye.html?name=tzgg"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp; 通知公告</a></li>
                                <li id="xxjw" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/shouye.html?name=xxjw"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;教务信息</a></li>
								 <li id="xxzs" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/shouye.html?name=xxzs"  ><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;招生信息</a></li>
                                <li id="xzzx" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/download.html"><i class="glyphicon glyphicon-chevron-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;下载中心</a></li>
                                <li id="yqlj" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/links.html"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;友情链接</a></li>
                            <li id="tupian" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/image.html"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;图片更新</a></li>
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
                                <li id="xwds" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=xwds"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;校外导师</a></li>
								<li id="teacher" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/teacher.html"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;教师名录</a></li>
                                <li id="hzqy" style="background-color:#dcdcdc;"><a href="/hzaumba/index.php/Admin/Index/logo.html"><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;合作企业</a></li>
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
                                    <div class="text-muted bootstrap-admin-box-title">下载中心</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
						
								<!--下载中心页面-->
						<div style="height:460px;width:900px;" id="download">
                                 &nbsp;&nbsp; &nbsp;&nbsp; 
                             <table class="table table-bordered table-striped border table-condensed text-center " >    
                                <div class="row">   
								
                                   <tr>
                                      <th style="text-align:center;">文件名</th>
                                      <th style="text-align:center;">编辑</th>
								   </tr>
								   <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>								
                                      <td><?php echo ($vo["title"]); ?></td>
                                     
                                      <td><a role="button" class="btn btn-info btn-xs" href="/hzaumba/Public/download/<?php echo ($vo["content"]); ?>"/>查看</a>&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-info btn-xs" value="删除" onclick="delete_link(<?php echo ($vo["hid"]); ?>)"/></td>
                                   </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
								</div>
								
							</table>
							<div><?php echo ($page); ?></div>
						<form method="post" enctype="multipart/form-data" action="/hzaumba/index.php/Admin/Index/record_file?name=<?php echo ($name); ?>" class="form-inline text-right" role="form" style="margin-bottom:20px;position:absolute; top:480px;right:50px;">
                            <div class="form-group">
                                 <label class="sr-only" for="name" >名称</label>
                                 <input type="text" name="title" class="form-control" id="name"  placeholder="请输入文件名称">
                            </div>
                            <div class="form-group">
                                 <label class="sr-only" for="inputfile">选择文件</label>
                                 <input type="file" id="inputfile" name="con">
                            </div>
                           <button type="submit" class="btn btn-default">提交</button>
                        </form>
						</div><br/>
					
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
		    	$('#xzzx').addClass('active');
				
				$('#collapseZero').collapse('hide');
					
				
				
				
			//	alert('<?php echo ($ym); ?>');
				
            });
		  //删除链接
          function delete_link(hid){
		      var r=confirm("是否删除");
              if (r==true){
                 window.location.href="/hzaumba/index.php/Admin/Index/delete_down?hid="+hid+"&name=download";
              }
		  }
 
        </script>
    </body>
</html>
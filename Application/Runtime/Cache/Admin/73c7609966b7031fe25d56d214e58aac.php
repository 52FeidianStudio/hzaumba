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
                            <ul class="nav navbar-nav navbar-left bootstrap-admin-theme-change-size">
                                <li class="text">Change size:</li>
                                <li><a class="size-changer small">Small</a></li>
                                <li><a class="size-changer large active">Large</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <!--<li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li>
                                    <a href="#">Reminders <i class="glyphicon glyphicon-bell"></i></a>
                                </li>-->
                                <li>
                                    <a href="#">设置 <i class="glyphicon glyphicon-cog"></i></a>
                                </li>
                                <li>
                                    <a href="#">返回首页 <i class="glyphicon glyphicon-share-alt"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" role="button" class="dropdown-toggle" data-hover="dropdown"> <i class="glyphicon glyphicon-user"></i> Username <i class="caret"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li><a href="index.html">Logout</a></li>
                                    </ul>
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
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="about.html">Admin Panel</a>
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
                       
                        <li class="disabled">
                            <a href="forms.html"><i class="glyphicon glyphicon-chevron-down"></i>中心概况</a>
                            <ul class="nav navbar-collapse bootstrap-admin-navbar-side">
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=zxjj"><i class="glyphicon glyphicon-chevron-right"></i>中心简介</a></li>
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=zzjg"><i class="glyphicon glyphicon-chevron-right"></i> 组织机构</a></li>
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=jyln"><i class="glyphicon glyphicon-chevron-right"></i>教育理念</a></li>
                            </ul>
                        </li>
                         <li class="disabled">
                            <a href="forms.html"><i class="glyphicon glyphicon-chevron-down"></i>项目介绍</a>
                            <ul class="nav navbar-collapse bootstrap-admin-navbar-side">
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=mba_xm"><i class="glyphicon glyphicon-chevron-right"></i> MBA项目</a></li>
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=edp_xm"><i class="glyphicon glyphicon-chevron-right"></i>EDP项目</a></li>
                            </ul>
                        </li>
                         <li class="disabled">
                            <a href="forms.html"><i class="glyphicon glyphicon-chevron-down"></i>师资力量</a>
                            <ul class="nav navbar-collapse bootstrap-admin-navbar-side">
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=xnds"><i class="glyphicon glyphicon-chevron-right"></i>校内导师</a></li>
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=xwds"><i class="glyphicon glyphicon-chevron-right"></i>校外导师</a></li>
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=hzqy"><i class="glyphicon glyphicon-chevron-right"></i>合作企业</a></li>
                            </ul>
                        </li>

                        <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=zsxx"><i class="glyphicon glyphicon-chevron-down"></i> 招生信息</a></li>

                         <li class="disabled">
                            <a href="forms.html"><i class="glyphicon glyphicon-chevron-down"></i>教学管理</a>
                            <ul class="nav navbar-collapse bootstrap-admin-navbar-side">
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=pyfa"><i class="glyphicon glyphicon-chevron-right"></i>培养方案</a></li>
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=lwzd"><i class="glyphicon glyphicon-chevron-right"></i>论文指导</a></li>
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=glsj"><i class="glyphicon glyphicon-chevron-right"></i>管理实践</a></li>
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=kcap"><i class="glyphicon glyphicon-chevron-right"></i>课程安排</a></li>
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=dbap"><i class="glyphicon glyphicon-chevron-right"></i>答辩安排</a></li>
                            </ul>
                        </li>
                        <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=zyfz"><i class="glyphicon glyphicon-chevron-down"></i>职业发展</a></li>

                         <li class="disabled">
                            <a href="forms.html"><i class="glyphicon glyphicon-chevron-down"></i>MBA联合会</a>
                            <ul class="nav navbar-collapse bootstrap-admin-navbar-side">
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=lhhzc"><i class="glyphicon glyphicon-chevron-right"></i>联合会章程</a></li>
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=org"><i class="glyphicon glyphicon-chevron-right"></i>组织机构</a></li>
                                <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=xyfc"><i class="glyphicon glyphicon-chevron-right"></i>校友风采</a></li>
                            </ul>
                        </li>

                        <li><a href="/hzaumba/index.php/Admin/Index/buttonsandicons.html?name=lxwm"><i class="glyphicon glyphicon-chevron-down"></i>联系我们</a></li>

                       <!-- <li>
                            <a href="#"><span class="badge pull-right">731</span> Orders</a>
                        </li>-->
                        
                    </ul>
                </div>

                <!-- content -->
                <div class="col-md-10">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h1>Buttons & Icons</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default panel-bootstrap-switch">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Bootstrap Switch buttons (the On-Off buttons)</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                      
                                 <form action="/hzaumba/index.php/Admin/Index/record?name=<?php echo ($name); ?>" method="POST" name="jaj">
                                 &nbsp;&nbsp; &nbsp;&nbsp; <textarea rows="20" cols="130%" class="form-control" style="width:80%;display:inline-block;" name="con"><?php echo ($con); ?></textarea>
                                <input type="submit" class="btn btn-success right " style="margin-right:20px;margin-top:320px;"value="确定"/></br></br>
                                </form>       
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        

        <!-- footer -->
        <div class="navbar navbar-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <footer role="contentinfo">
                            <p class="left">Bootstrap 3.x Admin Theme</p>
                            <p class="right">&copy; 2013 <a href="http://www.meritoo.pl" target="_blank">Meritoo.pl</a></p>
                        </footer>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="/hzaumba/Public/Back/js/bootstrap.min.js"></script>
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
        </script>
    </body>
</html>
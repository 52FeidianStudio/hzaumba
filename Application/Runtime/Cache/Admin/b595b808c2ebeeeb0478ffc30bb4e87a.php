<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="bootstrap-admin-vertical-centered">
    <head>
        <title>HZAUMBA</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="/hzaumba/Public/Back/css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="/hzaumba/Public/Back/css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="/hzaumba/Public/Back/css/bootstrap-admin-theme.css">

        <!-- Custom styles -->
        <style type="text/css">
            body{
                background:url(/hzaumba/Public/Back/images/3.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .alert{
                margin: 0 auto 20px;
            }
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bootstrap-admin-without-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <a class="close" data-dismiss="alert" href="#">&times;</a>
                        Press enter key or click the Submit button
                    </div>
                    <form method="post" action="/hzaumba/index.php/Admin/Index/do_login" class="bootstrap-admin-login-form" onsubmit="return submitTest();" name="form">
                        <h1>Login</h1>
                        <div class="form-group">
                            <input class="form-control" type="text" name="email" placeholder="管理员账号">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="密码">
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="remember_me">
                                Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary" type="submit">登陆</button>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="/hzaumba/Public/Back/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(function() {
                // Setting focus
                $('input[name="email"]').focus();

                // Setting width of the alert box
                var alert = $('.alert');
                var formWidth = $('.bootstrap-admin-login-form').innerWidth();
                var alertPadding = parseInt($('.alert').css('padding'));

                if (isNaN(alertPadding)) {
                    alertPadding = parseInt($(alert).css('padding-left'));
                }

                $('.alert').width(formWidth - 2 * alertPadding);
            });
			function submitTest(){
			   // var email=document.getElementById(email).value;
			//	var password=document.getElementById(password).value;
			   // if(!email){
			   if (document.form.email.value=="")
               {
                  alert("账号不能为空");
                  document.form.email.focus();
                  return false;
               } 
			    if (document.form.password.value=="")
               {
                  alert("密码不能为空");
                  document.form.password.focus();
                  return false;
               } 
				//}
			}
        </script>
    </body>
</html>
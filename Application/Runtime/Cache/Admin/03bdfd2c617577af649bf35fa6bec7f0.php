<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>Forms | Bootstrap 3.x Admin Theme</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme-change-size.css">

        <!-- Vendors -->
        <link rel="stylesheet" media="screen" href="vendors/bootstrap-datepicker/css/datepicker.css">
        <link rel="stylesheet" media="screen" href="css/datepicker.fixes.css">
        <link rel="stylesheet" media="screen" href="vendors/uniform/themes/default/css/uniform.default.min.css">
        <link rel="stylesheet" media="screen" href="css/uniform.default.fixes.css">
        <link rel="stylesheet" media="screen" href="vendors/chosen.min.css">
        <link rel="stylesheet" media="screen" href="vendors/selectize/dist/css/selectize.bootstrap3.css">
        <link rel="stylesheet" media="screen" href="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css">

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
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li>
                                    <a href="#">Reminders <i class="glyphicon glyphicon-bell"></i></a>
                                </li>
                                <li>
                                    <a href="#">Settings <i class="glyphicon glyphicon-cog"></i></a>
                                </li>
                                <li>
                                    <a href="#">Go to frontend <i class="glyphicon glyphicon-share-alt"></i></a>
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
                        <div class="collapse navbar-collapse main-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown">Dropdown <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header">Dropdown header</li>
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation" class="dropdown-header">Dropdown header</li>
                                        <li><a href="#">Separated link</a></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
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
                        <li>
                            <a href="about.html"><i class="glyphicon glyphicon-chevron-right"></i> About</a>
                        </li>
                        <li>
                            <a href="dashboard.html"><i class="glyphicon glyphicon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li class="disabled">
                            <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Calendar</a><!-- calendar.html -->
                        </li>
                        <li class="disabled">
                            <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Statistics (Charts)</a><!-- stats.html -->
                        </li>
                        <li class="active">
                            <a href="forms.html"><i class="glyphicon glyphicon-chevron-right"></i> Forms</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="glyphicon glyphicon-chevron-right"></i> Tables</a>
                        </li>
                        <li>
                            <a href="buttons-and-icons.html"><i class="glyphicon glyphicon-chevron-right"></i> Buttons &amp; Icons</a>
                        </li>
                        <li>
                            <a href="wysiwyg-editors.html"><i class="glyphicon glyphicon-chevron-right"></i> WYSIWYG Editors</a>
                        </li>
                        <li>
                            <a href="ui-and-interface.html"><i class="glyphicon glyphicon-chevron-right"></i> UI &amp; Interface</a>
                        </li>
                        <li>
                            <a href="error-pages.html"><i class="glyphicon glyphicon-chevron-right"></i> Error pages</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="glyphicon glyphicon-chevron-down"></i> Submenu</a>
                            <ul class="nav navbar-collapse bootstrap-admin-navbar-side">
                                <li><a href="about.html"><i class="glyphicon glyphicon-chevron-right"></i> Submenu 1</a></li>
                                <li><a href="about.html"><i class="glyphicon glyphicon-chevron-right"></i> Submenu 2</a></li>
                                <li><a href="about.html"><i class="glyphicon glyphicon-chevron-right"></i> Submenu 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="badge pull-right">731</span> Orders</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge pull-right">812</span> Invoices</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge pull-right">27</span> Clients</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge pull-right">1,234</span> Users</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge pull-right">2,221</span> Messages</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge pull-right">11</span> Reports</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge pull-right">83</span> Errors</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge pull-right">4,231</span> Logs</a>
                        </li>
                    </ul>
                </div>

                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h1>Forms</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Form Example</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <legend>Form Horizontal</legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="focusedInput">Focused input</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Uneditable input</label>
                                                <div class="col-lg-10">
                                                    <span class="form-control">Some value here</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="disabledInput">Disabled input</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control disabled" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="optionsCheckbox2">Disabled checkbox</label>
                                                <div class="col-lg-10">
                                                    <label>
                                                        <input type="checkbox" id="optionsCheckbox2" value="option1" disabled="">
                                                        This is a disabled checkbox
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group has-warning">
                                                <label class="col-lg-2 control-label" for="inputError">Input with warning</label>
                                                <div class="col-lg-10">
                                                    <input type="text" id="inputWarning" class="form-control">
                                                    <span class="help-block">Something may have gone wrong</span>
                                                </div>
                                            </div>
                                            <div class="form-group has-error">
                                                <label class="col-lg-2 control-label" for="inputError">Input with error</label>
                                                <div class="col-lg-10">
                                                    <input type="text" id="inputError" class="form-control">
                                                    <span class="help-block">Please correct the error</span>
                                                </div>
                                            </div>
                                            <div class="form-group has-error">
                                                <label class="col-lg-2 control-label" for="inputError">Input group with error</label>
                                                <div class="col-lg-10">
                                                    <div class="input-group">
                                                        <input type="text" id="inputError" class="form-control">
                                                        <span class="input-group-addon">%</span>
                                                    </div>
                                                    <span class="help-block">Please correct the error</span>
                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="col-lg-2 control-label" for="inputError">Input with success</label>
                                                <div class="col-lg-10">
                                                    <input type="text" id="inputSuccess" class="form-control">
                                                    <span class="help-block">Woohoo!</span>
                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="col-lg-2 control-label" for="selectError">Select with success</label>
                                                <div class="col-lg-10">
                                                    <select id="selectError" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                    <span class="help-block">Woohoo!</span>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Form Example</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <legend>Form Components</legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Text input </label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" autocomplete="off" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                                    <p class="help-block">Start typing to activate auto complete!</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="date01">Date input</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control datepicker" id="date01" value="02/16/12">
                                                    <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="optionsCheckbox">Checkbox</label>
                                                <div class="col-lg-10">
                                                    <label class="uniform">
                                                        <input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1">
                                                        Option one is this and that&mdash;be sure to include why it's great
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select01">With Chosen plugin</label>
                                                <div class="col-lg-10">
                                                    <select id="select01" class="chzn-select" style="width: 150px">
                                                        <option>something</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select02">With Selectize plugin</label>
                                                <div class="col-lg-10">
                                                    <select id="select02" class="selectize-select" style="width: 150px">
                                                        <option value="1">something</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="fileInput">File input</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control uniform_on" id="fileInput" type="file">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="textarea-wysihtml5">Textarea WYSIWYG</label>
                                                <div class="col-lg-10">
                                                    <textarea id="textarea-wysihtml5" class="form-control textarea-wysihtml5" placeholder="Enter text..." style="width: 100%; height: 200px"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Form Wizard</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <div id="rootwizard">
                                        <div class="navbar">
                                            <div class="container">
                                                <ul>
                                                    <li><a href="#tab1" data-toggle="tab">Step 1</a></li>
                                                    <li><a href="#tab2" data-toggle="tab">Step 2</a></li>
                                                    <li><a href="#tab3" data-toggle="tab">Step 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="bar" class="progress progress-striped active">
                                            <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab1">
                                                <form class="form-horizontal">
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label" for="focusedInput1">Name</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control" id="focusedInput1" type="text" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label" for="focusedInput2">Email</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control" id="focusedInput2" type="text" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label" for="focusedInput3">Phone</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control" id="focusedInput3" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <form class="form-horizontal">
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label" for="focusedInput4">Address</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control" id="focusedInput4" type="text" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label" for="focusedInput5">City</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control" id="focusedInput5" type="text" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label" for="focusedInput6">State</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control" id="focusedInput6" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <form class="form-horizontal">
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label" for="focusedInput7">Company Name</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control" id="focusedInput7" type="text" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label" for="focusedInput8">Contact Name</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control" id="focusedInput8" type="text" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label" for="focusedInput9">Contact Phone</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control" id="focusedInput9" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <ul class="pager wizard">
                                                <li class="previous first" style="display:none;"><a href="javascript:void(0);">First</a></li>
                                                <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                                                <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
                                                <li class="next"><a href="javascript:void(0);">Next</a></li>
                                                <li class="next finish" style="display:none;"><a href="javascript:;">Finish</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-admin-theme-change-size.js"></script>
        <script type="text/javascript" src="vendors/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="vendors/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="vendors/selectize/dist/js/standalone/selectize.min.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js"></script>
        <script type="text/javascript" src="vendors/twitter-bootstrap-wizard/jquery.bootstrap.wizard-for.bootstrap3.js"></script>
        <script type="text/javascript" src="vendors/boostrap3-typeahead/bootstrap3-typeahead.min.js"></script>

        <script type="text/javascript">
            $(function() {
                $('.datepicker').datepicker();
                $('.uniform_on').uniform();
                $('.chzn-select').chosen();
                $('.selectize-select').selectize();
                $('.textarea-wysihtml5').wysihtml5({
                    stylesheets: [
                        'vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/wysiwyg-color.css'
                    ]
                });

                $('#rootwizard').bootstrapWizard({
                    'nextSelector': '.next',
                    'previousSelector': '.previous',
                    onNext: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }
                    },
                    onPrevious: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }
                    },
                    onTabShow: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.bar').css({width: $percent + '%'});
                    }
                });
                $('#rootwizard .finish').click(function() {
                    alert('Finished!, Starting over!');
                    $('#rootwizard').find('a[href*=\'tab1\']').trigger('click');
                });
            });
        </script>
    </body>
</html>
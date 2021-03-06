<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>后台模板AdminLTE 2|Dashboard</title>
    <!-- 告诉浏览器响应屏幕宽度 -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="/CLY/Public/Admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
    <link href="/CLY/Public/Admin/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <!--<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />-->   
    <link href="/CLY/Public/Admin/bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="/CLY/Public/Admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="/CLY/Public/Admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/CLY/Public/Admin/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="/CLY/Public/Admin/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="/CLY/Public/Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="/CLY/Public/Admin/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="/CLY/Public/Admin/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="/CLY/Public/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="bootstrap/js/html5shiv.min.js"></script>
        <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- 对于侧边栏迷你50x50像素迷你标志 -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- 正常状态和移动设备标识 -->
          <span class="logo-lg">网站后台管理</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">切换导航</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">你有4条短信</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="/CLY/Public/Admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            支持团队
                            <small><i class="fa fa-clock-o"></i> 5分钟</small>
                          </h4>
                          <p>为什么不买一个新的令人敬畏的主题？</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/CLY/Public/Admin/dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            AdminLTE 设计团队
                            <small><i class="fa fa-clock-o"></i> 2小时</small>
                          </h4>
                          <p>为什么不买一个新的令人敬畏的主题？</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/CLY/Public/Admin/dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            开发商
                            <small><i class="fa fa-clock-o"></i> 今天</small>
                          </h4>
                          <p>为什么不买一个新的令人敬畏的主题？</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/CLY/Public/Admin/dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            卖场部
                            <small><i class="fa fa-clock-o"></i> 昨天</small>
                          </h4>
                          <p>为什么不买一个新的令人敬畏的主题？</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/CLY/Public/Admin/dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            审稿人
                            <small><i class="fa fa-clock-o"></i>2天</small>
                          </h4>
                          <p>为什么不买一个新的令人敬畏的主题？</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">看到所有的消息</a></li>
                </ul>
              </li>
              
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/CLY/Public/Admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo ($_SESSION['adminuser']['name']); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/CLY/Public/Admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                     个人博客后台管理
                      <small>会员于2012-11</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">追随者</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">销售</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">朋友</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">简介</a>
                    </div>
                    <div class="pull-right">
                      <a href="/CLY/index.php/Admin/Public/doLogout" class="btn btn-default btn-flat">签出</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
      
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/CLY/Public/Admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo ($_SESSION['adminuser']['name']); ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">主导航</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>会员管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="/CLY/index.php/Admin/Users/add"><i class="fa fa-circle-o"></i> 添加会员信息</a></li>
                <li><a href="/CLY/index.php/Admin/Users/index"><i class="fa fa-circle-o"></i> 浏览会员信息</a></li>
              </ul>
            </li>
            <li><a href="/CLY/index.php/Admin/Tag/index"><i class="fa fa-circle-o text-blue"></i> <span>博客标签管理</span></a></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>博客信息管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> 浏览博客信息</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> 添加博客信息</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI 元素</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i>一般General</a></li>
                <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> 图标Icons</a></li>
                <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> 按钮Buttons</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> 滑块Sliders</a></li>
                <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> 时间表Timeline</a></li>
                <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> 情态动词Modals</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>形式</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> 一般要素</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> 先进的元素</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> 编辑</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>表</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> 简单的表格</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i>数据表</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>实例</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> 发票联</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> 登录</a></li>
                <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> 注册Register</a></li>
                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> 锁屏</a></li>
                <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> 空白页</a></li>
              </ul>
            </li>
            
      
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>重要</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>警告</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>问询处</span></a></li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
		
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            仪表板
            <small>控制面板</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li class="active">仪表板</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>新订单</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>跳出率</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>用户注册</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>独特的访客</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
           
            <section class="col-lg-5 connectedSortable">


             

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>版本</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2017 <a href="http://almsaeedstudio.com">Almsaeed 工作室</a>.</strong> 保留所有权利.
      </footer>
      
      
    </div><!-- ./wrapper -->
	
	<!-- system modal start -->
    <div id="xdl-alert" class="modal">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h5 class="modal-title"><i class="fa fa-exclamation-circle"></i> [Title]</h5>
          </div>
          <div class="modal-body small">
            <p>[Message]</p>
          </div>
          <div class="modal-footer" >
            <button type="button" class="btn btn-primary ok" data-dismiss="modal">[BtnOk]</button>
            <button type="button" class="btn btn-default cancel" data-dismiss="modal">[BtnCancel]</button>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="/CLY/Public/Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/CLY/Public/Admin/bootstrap/js/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/CLY/Public/Admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="/CLY/Public/Admin/bootstrap/js/raphael-min.js"></script>
    <script src="/CLY/Public/Admin/plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="/CLY/Public/Admin/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="/CLY/Public/Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="/CLY/Public/Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="/CLY/Public/Admin/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="/CLY/Public/Admin/bootstrap/js/moment.min.js" type="text/javascript"></script>
    <script src="/CLY/Public/Admin/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="/CLY/Public/Admin/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/CLY/Public/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="/CLY/Public/Admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='/CLY/Public/Admin/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="/CLY/Public/Admin/dist/js/app.min.js" type="text/javascript"></script>    
    
       
    
    <!-- AdminLTE 用于演示目的 -->
    <script src="/CLY/Public/Admin/dist/js/demo.js" type="text/javascript"></script>
	
	 <script type="text/javascript">
        $(function(){
        
          window.Modal = function (){
            var reg = new RegExp("\\[([^\\[\\]]*?)\\]", 'igm');
            var alr = $("#xdl-alert");
            var ahtml = alr.html();

            //关闭时恢复 modal html 原样，供下次调用时 replace 用
            //var _init = function () {
            //	alr.on("hidden.bs.modal", function (e) {
            //		$(this).html(ahtml);
            //	});
            //}();

            /* html 复原不在 _init() 里面做了，重复调用时会有问题，直接在 _alert/_confirm 里面做 */


            var _alert = function (options) {
              alr.html(ahtml);	// 复原
              alr.find('.ok').removeClass('btn-success').addClass('btn-primary');
              alr.find('.cancel').hide();
              _dialog(options);

              return{
                on: function (callback){
                  if(callback && callback instanceof Function) {
                    alr.find('.ok').click(function () { callback(true) });
                  }
                }
              };
            };

            var _confirm = function (options){
              alr.html(ahtml); // 复原
              alr.find('.ok').removeClass('btn-primary').addClass('btn-success');
              alr.find('.cancel').show();
              _dialog(options);

              return {
                on: function (callback) {
                  if (callback && callback instanceof Function) {
                    alr.find('.ok').click(function () { callback(true) });
                    alr.find('.cancel').click(function () { callback(false) });
                  }
                }
              };
            };

            var _dialog = function (options) {
              var ops = {
                msg: "提示内容",
                title: "操作提示",
                btnok: "确定",
                btncl: "取消"
              };

              $.extend(ops, options);

              console.log(alr);

              var html = alr.html().replace(reg, function (node, key) {
                return {
                  Title: ops.title,
                  Message: ops.msg,
                  BtnOk: ops.btnok,
                  BtnCancel: ops.btncl
                }[key];
              });
              
              alr.html(html);
              alr.modal({
                width: 500,
                backdrop: 'static'
              });
            }

            return {
              alert: _alert,
              confirm: _confirm
            }

          }();
          
          //Modal.alert({msg:'内容2',title:'标题2',btnok:'确定2',btncl:'取消2'});
        });
    </script>

  </body>
</html>
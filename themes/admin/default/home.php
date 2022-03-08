<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LH WORK </title>
  <link rel="shortcut icon" type="image/ico" href="<?= url_tmpl() ?>favicon.ico" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=url_tmpl();?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link href="<?=url_tmpl();?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=url_tmpl();?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=url_tmpl();?>dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=url_tmpl();?>plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=url_tmpl();?>plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=url_tmpl();?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=url_tmpl();?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=url_tmpl();?>plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=url_tmpl();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?=url_tmpl();?>css/custom.css">
  <script src="<?=url_tmpl();?>plugins/bootstrap-datetimepicker/moment-with-locales.min.js"></script>
  <script src="<?=url_tmpl();?>plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?=url_tmpl();?>plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
  <!-- jQuery 2.2.3 -->
  <script src="<?=url_tmpl();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
		<img src="<?=url_tmpl();?>img/logo_final.png" />
	  </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?=url_tmpl();?>img/logo_final.png" /></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <?=$this->load->inc('menutop');?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
		<?=$this->load->inc('menu');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<?=$this->load->inc('breadcrumb');?>
    <!-- Main content -->
    <section class="content">
		<?=$content;?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017 <a href="<?=base_url();?>">Greystone</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="<?=url_tmpl();?>js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=url_tmpl();?>bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?=url_tmpl();?>js/raphael-min.js"></script>
<script src="<?=url_tmpl();?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?=url_tmpl();?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?=url_tmpl();?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=url_tmpl();?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=url_tmpl();?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?=url_tmpl();?>js/moment.js"></script>
<script src="<?=url_tmpl();?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?=url_tmpl();?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=url_tmpl();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?=url_tmpl();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=url_tmpl();?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=url_tmpl();?>dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="<?=url_tmpl();?>dist/js/pages/dashboard.js"></script>-->
<!-- AdminLTE for demo purposes -->
<!--<script src="<?=url_tmpl();?>dist/js/demo.js"></script>-->
</body>
</html>

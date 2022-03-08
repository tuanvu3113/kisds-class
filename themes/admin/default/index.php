<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin - LH WORK </title>
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
  <link rel="stylesheet" href="<?=url_tmpl();?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=url_tmpl();?>plugins/daterangepicker/daterangepicker.css">
  <link href="<?=url_tmpl();?>multipleselect/multiple-select.css" rel="stylesheet" type="text/css"/>
  <link href="<?=url_tmpl();?>toast/toastr.css" rel="stylesheet" type="text/css"/>
  <link type="text/css" href="<?=url_tmpl();?>scrollTable/scrollTable.css"  rel="stylesheet">
  <link href="<?=url_tmpl();?>msgbox/Styles/msgBoxLight.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="<?=url_tmpl();?>css/custom.css">
  <link href="<?=url_tmpl();?>template.css" rel="stylesheet" type="text/css"/>
  <!-- jQuery 2.2.3 -->
  <script src="<?=url_tmpl();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="<?=url_tmpl();?>plugins/bootstrap-datetimepicker/moment-with-locales.min.js"></script>
  <script src="<?=url_tmpl();?>plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?=url_tmpl();?>plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script>
	var order = '';
	var index = 'DESC';
	var select_all_text = 'Select all';
  </script>
  <script src="<?=url_tmpl();?>multipleselect/jquery.multiple.select.js" type="text/javascript"></script>
  <script src="<?=url_tmpl();?>js/colResizable-1.5.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?=url_tmpl();?>scrollTable/jquery.scrollTo.js"></script>
  <script type="text/javascript" src="<?=url_tmpl();?>scrollTable/scrollTable.js"></script>

  <script src="<?=url_tmpl();?>toast/toastr.js"></script>
  <script src="<?=url_tmpl();?>js/jquery.json.js" type="text/javascript"></script>
  <script src="<?=url_tmpl();?>js/main.js" type="text/javascript"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
		      <img src="/Images/logo.png" />
	    </span>
      <!-- logo for regular state and mobile devices -->
      <!-- <span class="logo-lg"><img src="/Images/logo.png" /></span> -->
      <span>LH WORK</span>
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
    <strong>Copyright &copy; 2021 <a href="<?=base_url();?>">LH WORK</a>.</strong> All rights
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
<script src="<?=url_tmpl();?>js/moment.js"></script>
<script src="<?=url_tmpl();?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?=url_tmpl();?>plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?=url_tmpl();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?=url_tmpl();?>dist/js/app.min.js"></script>

<script type="text/javascript">
	var urlImg = '<?=url_tmpl()?>msgbox/Images/';
</script>
<script src="<?=url_tmpl();?>msgbox/Scripts/jquery.msgBox.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>jquery.backTop.js"></script>
<link href="<?=url_tmpl();?>css/backTop.css" rel="stylesheet" type="text/css" />
<script>
    //Paging ajax
    function getDataPage(page){
        cpage   =   page;
        getData();
    }
    $(document).ready( function() {
        $('#backTop').backTop({
            'position' : 400,
            'speed' : 500,
            'color' : 'red',
        });
    });
</script>
<a id='backTop'>Back To Top</a>
</body>
</html>
